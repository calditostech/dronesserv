<?php

namespace App\Http\Controllers;

use App\Models\Drones;
use Illuminate\Http\Request;

         class DroneController extends Controller
          {

           protected $drones;
 
           public function __construct(Drones $drones) {
    
           $this->drones = $drones;
          
          }


            public function list() {

            $drones = Drones::all();
 
            return view('drones.drones', ['drones' => $drones]);
            
            }


            public function insert(Request $request, Drones $drones){
             
             $drones = new Drones();
             $drones->drone = Input::get('id'); 
             $drones->name = Input::get('name'); 
             $drones->image = Input::get('image'); 
             $drones->address = Input::get('address'); 
             $drones->battery = Input::get('battery'); 
             $drones->max_speed = Input::get('max_speed'); 
             $drones->average_speed = Input::get('average_speed'); 
             $drones->status = Input::get('status'); 

             $drones->save();

             $mensagem = "Drone inserido com sucesso";

             return view('drones.insert', ['drones' => $drones]);

            }

            public function update(){
 	
            }


            public function delete(){
 	
            }


            public function create(){
 	
              return view('drones.drones.create');

            }


            public function paginate(){
 	              
             $drones = $drones->create($request->all());


              if ($drones)
             return redirect()
                    ->route('drones.index')
                    ->with('success', 'Categoria inserida com sucesso!');
 
    
             return redirect()
                ->back()
                ->with('error', 'Falha ao inserir');
            }


            public function sort(){
 	
            }


            public function filter(){
 	
             $drones = Drones::all();
            foreach ($drones as $drone){
            echo $drones->drone . "<br>";


            return view('drones.filter');
}
        }  
            }

      