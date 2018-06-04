<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FrutasController extends Controller
{
    // Accion que devuelva una vista
    public function getIndex(){
        return view('frutas.index')
            ->with('frutas', array('naranja','platano','manzana','pera','piña'));
    }

    public function getNaranjas(){
        return 'Accion de NARANJAS';
    }

    public function getPeras(){
        return 'Accion de PERAS';
    }
}
