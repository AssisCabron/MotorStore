<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carro;
use App\Models\Fotos;

class lojaController extends Controller
{
    public function index(){
        $carros = Carro::with('fotos')->get();
        $carrosPorMarca = $carros->groupBy('marca');


        return view('menu.index', compact('carros', 'carrosPorMarca'));
    }

    public function perMarca($marca){
        $carrosUmaMarca = Carro::where('marca', $marca)
        ->with('fotos')
        ->get();
        
        $carros = Carro::with('fotos')->get();
        $carrosPorMarca = $carros->groupBy('marca');

        return view('menu.marca', compact('carrosUmaMarca', 'marca', 'carrosPorMarca'));
    }

    public function carroUnico($id){
        $carroUnico = Carro::with('fotos')->find($id);



        $carros = Carro::with('fotos')->get();
        $carrosPorMarca = $carros->groupBy('marca');

        return view('menu.carro', compact('carros', 'carrosPorMarca', 'carroUnico'));
    }
}
