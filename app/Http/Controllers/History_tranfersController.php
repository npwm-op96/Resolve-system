<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\History_tranfers;

class History_tranfersController extends Controller
{
 public function GetHistoryfunction(){

     $History = History_tranfers::all()->toArray();
     return $History;

 }   
}
