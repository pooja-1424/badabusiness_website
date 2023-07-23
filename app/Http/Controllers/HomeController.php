<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    //
    public function index(){
        
         include_once(app_path().'/includes/vid.php');
         include_once(app_path().'/includes/log.php');
          include_once(app_path().'/includes/browserdetection.php');
          include(app_path().'/includes/devicedetection.php');
         
    return view('home');
}
public function getData(Request $request)
{
           $query= Product::get();
         
          return view('home',compact('$query'));
}
}
