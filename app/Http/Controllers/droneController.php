<?php

namespace App\Http\Controllers;

use App\Models\Drones;
use Illuminate\Http\Request;

class droneController extends Controller
 {
    protected $drones;
 
    public function __construct(Pessoa $drones) {
    
    $this->drones = $drones;
 }

}

            public function list() {
 
            $drones = $this->drones->all();
 
            return view('drones', ['drones' => $drones]);
            
            }


            public function insert(){
             

            }


            public function update(){
 	
            }


            public function delete(){
 	
            }


            public function create(){
 	
            }


            public function paginate(){
 	
            }


            public function sort(){
 	
            }


            public function filter(){
 	
            }