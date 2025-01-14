<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LtmController extends Controller
{
    //
    public function index(){
        //   include(app_path().'/includes/vid.php');
        //  include(app_path().'/includes/log.php');
        //   include(app_path().'/includes/browserdetection.php');
        //   include(app_path().'/includes/devicedetection.php');
        // //     include(app_path().'/includes/backend.php');
        return view('ltm');
    }
}
