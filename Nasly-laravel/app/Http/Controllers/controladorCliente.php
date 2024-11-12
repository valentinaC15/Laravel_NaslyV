<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;

class controladorCliente extends Controller
{
      var $clients = [ 
      [ 'id' => 0 , 'name' => 'Emmett', 'last_name' => 'Brown', 'email' => 'emmett@domain.com' ] ,
         [ 'id' => 1 , 'name' => 'Jennifer', 'last_name' => 'Parker', 'email' => 'jennifer@domain.com' ] ,
       ];
        

    public function control()
    {
          $clientes=Cliente::all();
          return view ('index', ['Clientes'=>$clientes]); 
     }

     public function cedula($id)
     {
      
      $clientes=Cliente::find($id);
           return view ('details',['Clientes' =>$clientes]);
      } 
}