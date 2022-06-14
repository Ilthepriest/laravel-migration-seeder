<?php


namespace App\Http\Controllers;
use App\travel_pack;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $travel_packges = travel_pack::all();
    //dd($travel_packges);
      return view('home', compact('travel_packges'));
    }
}
