<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Models\Product\Product;
use App\Http\Controllers\Controller;
use App\Models\Product\ProductCategory;
use App\Models\Product\ProductSubCategory;

class FrontController extends Controller
{
    public function home(){
    	$recent_products = Product::orderBy('created_at', 'desc')->limit(9)->get();
    	return view('front.home.index')
    	->with('recent_products', $recent_products);
    }

	public function product_by_category($slug = ''){
	    $category = ProductCategory::where('slug', $slug)->first();
	    if ($category) {
	    	$recent_products = Product::where('product_category_id', $category->id)
	    	->orderBy('created_at', 'desc')
	    	->paginate(9);
	    }else{
	    	$recent_products = Product::orderBy('created_at', 'desc')->paginate(9);
	    }
	    return view('front.home.index')
	    ->with('recent_products', $recent_products)
	    ->with('search_category', $category);
	}

	public function product_by_sub_category($slug = ''){
	    $sub_category = ProductSubCategory::where('slug', $slug)->first();
	    if ($sub_category) {
	    	$recent_products = Product::where('product_sub_category_id', $sub_category->id)
	    	->orderBy('created_at', 'desc')
	    	->paginate(9);
	    }else{
	    	$recent_products = Product::orderBy('created_at', 'desc')->paginate(9);
	    }
	    return view('front.home.index')
	    ->with('recent_products', $recent_products)
	    ->with('search_sub_category', $sub_category);
	}
}
