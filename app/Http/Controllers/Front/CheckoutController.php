<?php

namespace App\Http\Controllers\Front;

use Cart;
use Stripe\Stripe;
use Stripe\Charge;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CheckoutController extends Controller
{
    public function checkout()
    {
    	return view('front.checkout.index');
    }

    public function pay(Request $request)
    {
    	Stripe::setApiKey("sk_test_LJW4xs0DJs7SaxtDGbPhmhVC");
    	$token = $request->stripeToken;

		$charge = Charge::create([
		    'amount' => Cart::getTotal() * 100,
		    'currency' => 'usd',
		    'description' => 'Product charge',
		    'source' => $token,
		]);
    	dd($charge);
    }
}
