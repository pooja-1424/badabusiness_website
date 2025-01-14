<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LfpController extends Controller
{
    //
    public function index(){
        //   include_once(app_path().'/includes/vid.php');
        //   include_once(app_path().'/includes/log.php');
        //   include_once(app_path().'/includes/browserdetection.php');
        //   include_once(app_path().'/includes/devicedetection.php');
       
        return view('lfp');
    }
}
