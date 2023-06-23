<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\deleteModel;

class deletecontroller extends Controller
{
    public function delete(){

        $data =deleteModel::paginate(25);
        return view ('deletedata',['jovic'=>$data]);

    }
    public function delete2($film_id){

      $deletes =deleteModel::find($film_id);
      $deletes->delete();
      return redirect ('delete1');

    }
}
