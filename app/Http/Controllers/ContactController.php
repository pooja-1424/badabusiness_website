<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Product;

class ContactController extends Controller
{
    //
    public function index(){
        include_once(app_path().'/includes/vid.php');
          include_once(app_path().'/includes/log.php');
          include_once(app_path().'/includes/browserdetection.php');
          include_once(app_path().'/includes/devicedetection.php');
        return view('contact');
    }
    public function getData(Request $request)
{
           $query= Product::get();
         
          return view('home',compact('$query'));
}
}
