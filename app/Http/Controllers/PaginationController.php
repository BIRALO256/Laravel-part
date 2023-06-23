<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SEKALI;

class PaginationController extends Controller
{
   public function pagin(){

   $data =SEKALI::paginate(20);
   return view ('pagination',['jovic'=>$data]);

   }
}
