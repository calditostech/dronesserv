<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Drones extends Model
{
    protected $fillable= [
      'id','name','image','address','battery','max_speed','average_speed','status'
 ];
    protected $table='drones'; 
}
