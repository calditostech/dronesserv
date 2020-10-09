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


            public function insert(Request $request) {
             
             $drones = new Drones;

             $drones->id = $request->id;
             $drones->name = $request->name;
             $drones->image = $request->image;
             $drones->address = $request->address;
             $drones->battery = $request->battery;
             $drones->max_speed = $request->max_speed;
             $drones->average_speed = $request->average_speed;
             $drones->status = $request->status;


             $drones->save();

            }

            public function update(){
 	
            }


            public function delete(){
 	
            }


            public function create(){
 	
                $drones = $this->drones->create([
                   'id'              => '2',
                   'name'            => 'calditos88',
                   'image'           => 'cal88',
                   'address'         => 'aurora street',
                   'battery'         => 100,
                   'max_speed'       => 300,
                   'average_speed'   => 'ativo',
                   'status'          => true,
             ]);

              if($drones)
                return "Inserido com Sucesso";
              else
                return "Falha ao inserir";

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

      