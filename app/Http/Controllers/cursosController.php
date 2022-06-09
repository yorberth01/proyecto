<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cursosController extends Controller
{
    public function index(){
         return view('cursos.index');
    }
     public function create(){
        return view('cursos.create');
    }
     public function show($curso){
         //compact('curso');   // [cursos=>$curso]

            //return view('cursos.show', ['curso' => $curso]);
            return view('cursos.show', compact('curso'));
    }
}
