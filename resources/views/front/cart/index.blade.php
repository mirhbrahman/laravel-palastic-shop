@extends('layouts.front')

@section('content')
<div class="container">
	<h3 class="tittle-w3l">In Your Shopping Cart : {{ Cart::getContent()->count() }} items</h3>
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
								<input type="number" class="form-control text-center" value="{{ $item->quantity }}">
							</td>
							<td data-th="Subtotal" class="text-center">{{ $item->attributes['sub_total'] }}</td>
							<td class="actions" data-th="">
								<a class="btn btn-danger btn-sm" href="{{ route('cart.delete', $item->id) }}"><i class="fa fa-trash-o"></i></a>								
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
							<td class="hidden-xs text-center"><strong>Total {{ Cart::getTotal() }}</strong></td>
							<td><a href="#" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
						</tr>
					</tfoot>
				</table>
</div>
@endsection