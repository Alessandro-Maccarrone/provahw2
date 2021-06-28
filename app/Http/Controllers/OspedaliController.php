<?php

namespace App\Http\Controllers;

use App\Ospedale;
use App\Preferiti;
use Auth;
use DB;

use Illuminate\Http\Request;

class OspedaliController extends Controller
{
    public function index(){
        $listaOspedali = Ospedale::whereNotNull('titolo')->get();//recupera lista ospedali dal DB ,select * where titolo!=null
        return view ('ospedali', ['ospedali' => $listaOspedali]);
    }

    public function Request(Request $request){//gestione dei preferiti

        $iduser=Auth::user()->id;//recupera id utente loggato
        $idosp = (int)$request->id;

        $pref = Preferiti::where('iduser', $iduser)
                            ->where('idosp', $idosp)
                            ->get();

        if ($pref->count()) { //se è presente sul db lo elimina
            $pref = Preferiti::where('iduser', $iduser)
                            ->where('idosp', $idosp)
                            ->delete();
        } else {
            $pref = new Preferiti;
            $pref->iduser=Auth::user()->id;
            $pref->idosp=$idosp;
            $pref->save();
        }

		return response()->json(['success'=>$pref]);
	}
}
