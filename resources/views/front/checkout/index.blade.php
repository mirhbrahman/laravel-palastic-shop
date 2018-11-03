@extends('layouts.front')

@section('content')
<div class="container">
	<h3 class="tittle-w3l">Your Order</h3>
	<table id="cart" class="table table-hover ">
    				<thead>
						<tr>
							<th style="width:50%">Product</th>
							<th style="width:10%">Price</th>
							<th style="width:8%">Quantity</th>
							<th style="width:22%" class="text-center">Subtotal</th>
							<th style="width:10%"></th>
						</tr>
					</thead>
					<tbody>
						@foreach (Cart::getContent() as $item)
							<tr>
							<td data-th="Product">
								<div class="row">
									<div class="col-sm-2 hidden-xs">
										<img width="80" height="80" src="{{ asset('imgs/default_'. rand(1, 3) . '.jpg') }}" alt="">
									</div>
									<div class="col-sm-10">
										<h4 class="">{{ $item->name }}</h4>
									</div>
								</div>
							</td>
							<td data-th="Price">{{ $item->price }}</td>
							<td data-th="Quantity">
								{{ $item->quantity }}
							</td>
							<td data-th="Subtotal" class="text-center">{{ $item->price * $item->quantity }}</td>
							<td class="actions" data-th="">
															
							</td>
						</tr>
						@endforeach
					</tbody>
					<tfoot>
						<tr class="visible-xs">
							<td class="text-center"><strong>Total {{ Cart::getTotal() }}</strong></td>
						</tr>
						<tr>
							<td><a href="{{ route('front.home') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
							<td colspan="2" class="hidden-xs"></td>
							<td class="hidden-xs text-center"><strong>Total {{ number_format(Cart::getTotal()) }}</strong></td>
							<td>
								<form action="{{ route('checkout.pay') }}" method="POST">
									@csrf
									
								  <script
								    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
								    data-key="pk_test_arr20NMmOPBNJWZCNBvTZib8"
								    data-amount="{{ Cart::getTotal() * 100 }}"
								    data-name="Palastic Shop"
								    data-description="Product charge"
								    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
								    data-locale="auto">
								  </script>

								  
								</form>
								
							</td>
						</tr>
					</tfoot>
				</table>
</div>
@endsection