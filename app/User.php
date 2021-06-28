<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * Attributi presenti sul db che laravel usa nelle view
     *
     * @var array
     */
    protected $fillable = [
        'name', 'cognome', 'codicefiscale', 'username', 'email', 'password',
    ];

    /**
     * attributi che sono nascosti
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * 
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function preferiti()
    {
        return $this->belongsToMany(Ospedale::class, 'preferiti', 'iduser', 'idosp')->withTimeStamps();//aggiunge anche created at e updated at
    }
}
