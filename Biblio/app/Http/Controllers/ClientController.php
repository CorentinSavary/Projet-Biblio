<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
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
            return view('client');
            $client = Client::all();
        }

        public function index0()
        {
            return view('liste_client');
        }
        
        public function index1()
        {
            return view('nouveau_client');
        }
        public function index2()
        {
            return view('supprimer_client');
        }
        public function index3()
        {
            return view('inspecter_client');
        }

       
    
    
}
