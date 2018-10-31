<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product\Product;

class FrontController extends Controller
{
    public function home(){
    	$recent_products = Product::orderBy('created_at', 'desc')->limit(9)->get();
    	return view('front.home.index')
    	->with('recent_products', $recent_products);
    }
}
