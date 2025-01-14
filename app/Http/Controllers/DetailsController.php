<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DetailsController extends Controller
{
    
    public function data($id,$name)
   {
        
        
       $details = DB::table('courses')->select('img','name','description','price')
                                      ->where('id',$id)->get();                                      
           return view('/details',compact('details'));
   }
}
