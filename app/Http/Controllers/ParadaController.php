<?php

namespace App\Http\Controllers;
use App\Models\Parada;
use Illuminate\Http\Request;

class ParadaController extends Controller
{
    public function store(Request $request){
        $parada = new Parada();

        $parada->nombre_parada = $request->nombre_parada;
        $parada->lat = $request->lat;
        $parada->lng = $request->lng;
        $parada->ruta = $request->ruta;

        // return $parada;
        $parada->save();

        return redirect()->route('admin');

    }
}
