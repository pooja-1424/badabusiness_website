<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    //
    public function index(){
        
       
    return view('home');
}
public function getData(Request $request)
{
           $query= Product::get();
         
          return view('home',compact('$query'));
}
}
