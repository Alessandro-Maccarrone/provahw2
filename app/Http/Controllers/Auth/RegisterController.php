<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)//validazione dei campi in fase di registrazione
    {
        return Validator::make($data, [ //$data = informazioni che arrivano dal form in POST e che vengono validate
            'name' => ['required', 'string', 'max:255'],
            'cognome' => ['required', 'string', 'max:255'],
            'codicefiscale' => ['required', 'string', 'max:16'],
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)//mappatura tra view e il modello(classe user.php)
    //prende $data proveniente dalla view(form html registrazione) e li salva nel modello user creando un nuovo user
    {
        
        return User::create([
            'name' => $data['name'],//a ->$data[b] ,dove a=campo della classe user nel modello , b=id dentro il codice del form html(view)
            'cognome' => $data['cognome'],
            'codicefiscale' => $data['codicefiscale'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),//password codificata e non in chiaro su DB
        ]);
    }
}
