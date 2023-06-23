<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\DATASAVING;

class SAVINGDATSCONTROLLER extends Controller
{
    public function savaing_data(Request $jovic){
  
     $biralo =new DATASAVING;

     $biralo->Password =$jovic->password;
     $biralo->f_name =$jovic->name;
     $biralo->L_name =$jovic->last_name;
     $biralo->email=$jovic->email;
     $biralo->save();

     return redirect('/save');

    }
}
