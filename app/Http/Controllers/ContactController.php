<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Product;

class ContactController extends Controller
{
    //
    public function index(){
       
        return view('contact');
    }
    public function getData(Request $request)
{
           $query= Product::get();
         
          return view('home',compact('$query'));
}
}
