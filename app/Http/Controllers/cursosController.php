<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cursosController extends Controller
{
    public function index(){
         return "Bienvenido a la pagina de cursos";
    }
     public function create(){
        return 'En esta pagina podras crear un curso';
    }
     public function show($curso){
        return "Bienvenido al: $curso";
    }
}
