<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Products;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index(){

        return view('frontend.index');
    }



    public function product(){
                //f_product is declared to check if the trending product are equal yo 1  and giving limit to 15
        $f_products = Products::where('trend', '1')->take(15)->get();
        return view('frontend.product', compact('f_products'));
    }
}
