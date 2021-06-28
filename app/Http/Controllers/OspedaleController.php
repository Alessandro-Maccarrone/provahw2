<?php

namespace App\Http\Controllers;

use App\Ospedale;

use Illuminate\Http\Request;

class OspedaleController extends Controller
{
    public function index($id){//info che arriva dalla route che mi restituisce l'id dell'ospedale
        $ospedale = Ospedale::find($id);//query su db sulla tabella Ospedale dove idosp = $id
        return view ('ospedale', ['osp' => $ospedale]);//memorizzo dentro $ospedale il risultato della query e lo passo alla view come parametro
    }
}
