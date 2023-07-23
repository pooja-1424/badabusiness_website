<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Models\Category;
use App\Models\Courses;
class PscController extends Controller
{
    
    public function index(Request $request)
    {
        //   include(app_path().'/includes/vid.php');
        //  include(app_path().'/includes/log.php');
        //   include(app_path().'/includes/browserdetection.php');
        //   include(app_path().'/includes/devicedetection.php');
        //     include(app_path().'/includes/backend.php');
     
      if (request('search')) {
        $product = Courses::where('name', 'like', '%' . request('search') . '%')->get();        
       
      }       
     else
        {
        $query= Courses::query();
        $product=$query->paginate(5);
        }        
        return view('psc',['data'=> $product]);               
    }

    public function productsCat(Request $request)
    {
        $query= Courses::query();
       
         if($request->ajax())
         {
             if(empty($request->category))
             {
              
              $product=$query->paginate(5);
             }
            else
             {
              $product=$query->where(['category_id'=>$request->category])->get();
             }
        //   return response()->json(['product'=>$product]);
         }
            $product=$query->get();
            return view('product_details',compact('product'));
     }


}
