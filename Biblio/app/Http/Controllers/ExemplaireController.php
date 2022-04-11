<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExemplaireController extends Controller
{
    /* Create a new controller instance.
         *
         * @return void
         */
       
    
         /* Show the application dashboard.
         *
         * @return \Illuminate\Contracts\Support\Renderable
         */
        public function index()
        {
            return view('exemplaire');
        }
        public function index0()
        {
            return view('liste_exemplaire');
        }
        public function index1()
        {
            return view('nouveau_exemplaire');
        }
        public function index2()
        {
            return view('supprimer_exemplaire');
        }
    
}
