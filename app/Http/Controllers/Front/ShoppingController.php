<?php

namespace App\Http\Controllers\Front;
use Cart;
use Illuminate\Http\Request;
use App\Models\Product\Product;
use App\Http\Controllers\Controller;

class ShoppingController extends Controller
{
    public function add_to_cart(Request $request){
        // Cart::clear();
    	$product = Product::where('id', $request->product_id)
    	->where('code', $request->product_code)
    	->first();

    	Cart::add([
    		'id' => $product->id,
    		'name' => $product->name,
    		'quantity' => $request->quantity,
    		'price' => $product->price,
    		'attributes' => [
    			'product_code' => $product->code,
    			'sub_total' => $product->price * $request->quantity
    		],
    	]);

    	return redirect()->route('cart.index');
    }

    public function cart()
    {
    	return view('front.cart.index');
    }

    public function cart_delete($id = 0)
    {
    	Cart::remove($id);
    	return redirect()->back();
    }

}
