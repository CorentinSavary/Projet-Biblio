<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivreController extends Controller
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
            return view('livre');
        }
        public function index0()
        {
            return view('liste_livre');
        }
        public function index1()
        {
            return view('nouveau_livre');
        }
        public function index2()
        {
            return view('supprimer_livre');
        }
    
}
