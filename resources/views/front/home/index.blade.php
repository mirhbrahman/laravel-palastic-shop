@extends('layouts.front')

@section('content')

 @if (isset($search_category) && $search_category || isset($search_sub_category) && $search_sub_category)
 @else
 	<!-- banner -->
	@include('partials.front.home.banner')
	<!-- //banner -->
 @endif

<!-- top Products -->
	<div class="ads-grid">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Our Products 
				@if (isset($search_category) && $search_category)
					- Category: {{ $search_category->name }}
				@elseif(isset($search_sub_category) && $search_sub_category)
					-Sub-Category: {{ $search_sub_category->name }}
				@endif
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<!-- product left -->
			@include('partials.front.sidebar')

			<!-- //product left -->
			<!-- product right -->
			<div class="agileinfo-ads-display col-md-9">
				<div class="wrapper">
					<!-- first section (nuts) -->
					<div class="product-sec1">
						<h3 class="heading-tittle">
							@if (isset($search_category) && $search_category)
								{{ $search_category->name }} Products
							@elseif(isset($search_sub_category) && $search_sub_category)
								{{ $search_sub_category->name }} Products
							@else
								Recent Products
							@endif
						</h3>
						
						@if ($recent_products)
							@foreach ($recent_products as $product)
							<div class="col-md-4 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img width="166" height="150" src="{{ asset('imgs/default_'. rand(1, 3) . '.jpg') }}" alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="{{ route('front.product_single', $product->slug) }}" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
									<span class="product-new-top">New</span>
								</div>
								<div class="item-info-product ">
									<h4>
										<a href="single.html">{{ str_limit($product->name, 20) }}</a>
									</h4>
									<div class="info-product-price">
										@if ($product->is_special)
											<span class="item_price">${{ $product->special_price }}</span>
											<del>${{ $product->price }}</del>
										@else
											<span class="item_price">${{ $product->price }}</span>
										@endif
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form action="#" method="post">
											<fieldset>
												<input type="hidden" name="cmd" value="_cart" />
												<input type="hidden" name="add" value="1" />
												<input type="hidden" name="business" value=" " />
												<input type="hidden" name="item_name" value="Almonds, 100g" />
												<input type="hidden" name="amount" value="149.00" />
												<input type="hidden" name="discount_amount" value="1.00" />
												<input type="hidden" name="currency_code" value="USD" />
												<input type="hidden" name="return" value=" " />
												<input type="hidden" name="cancel_return" value=" " />
												<input type="submit" name="submit" value="Add to cart" class="button" />
											</fieldset>
										</form>
									</div>

								</div>
							</div>
							<br>
							<br>
						</div>
						@endforeach
						@endif
						
						<div class="clearfix text-center">
							@if ($recent_products instanceof \Illuminate\Pagination\LengthAwarePaginator )
								{{ $recent_products->links() }}
							@endif
						</div>
					</div>
				
				</div>
			</div>
			<!-- //product right -->
		</div>
	</div>
	<!-- //top products -->
@endsection