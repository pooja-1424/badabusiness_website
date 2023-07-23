<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DetailsController extends Controller
{
    
    public function data($id,$name)
   {
         include_once(app_path().'/includes/vid.php');
          include_once(app_path().'/includes/log.php');
          include_once(app_path().'/includes/browserdetection.php');
        
        
       $details = DB::table('courses')->select('img','name','description','price')
                                      ->where('id',$id)->get();                                      
           return view('/details',compact('details'));
   }
}
