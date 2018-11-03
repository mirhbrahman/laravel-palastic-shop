@extends('layouts.front')

@section('content')

<link rel="stylesheet" href="{{ asset('css/flexslider.css') }}" type="text/css" media="screen" />

@if ($product)
<!-- Single Page -->
<div class="banner-bootom-w3-agileits">
	<div class="container">
			{{-- <!-- tittle heading -->
			<h3 class="tittle-w3l">Single Page
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3> --}}
			<!-- //tittle heading -->
			<div class="col-md-5 single-right-left ">
				<div class="grid images_3_of_2">
					<div class="flexslider">
						<ul class="slides">
							<li data-thumb="{{ asset('imgs/default_1.jpg') }}">
								<div class="thumb-image">
									<img src="{{ asset('imgs/default_1.jpg') }}" data-imagezoom="true" class="img-responsive" alt=""> </div>
								</li>
								<li data-thumb="{{ asset('imgs/default_2.jpg') }}">
									<div class="thumb-image">
										<img src="{{ asset('imgs/default_2.jpg') }}" data-imagezoom="true" class="img-responsive" alt=""> </div>
									</li>
									<li data-thumb="{{ asset('imgs/default_3.jpg') }}">
										<div class="thumb-image">
											<img src="{{ asset('imgs/default_3.jpg') }}" data-imagezoom="true" class="img-responsive" alt=""> </div>
										</li>

									</ul>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
						<div class="col-md-7 single-right-left simpleCart_shelfItem">
							<h3>{{ $product->name }}</h3>
							<div class="rating1">
								<span class="starRating">
									<input id="rating5" type="radio" name="rating" value="5">
									<label for="rating5">5</label>
									<input id="rating4" type="radio" name="rating" value="4">
									<label for="rating4">4</label>
									<input id="rating3" type="radio" name="rating" value="3" checked="">
									<label for="rating3">3</label>
									<input id="rating2" type="radio" name="rating" value="2">
									<label for="rating2">2</label>
									<input id="rating1" type="radio" name="rating" value="1">
									<label for="rating1">1</label>
								</span>
							</div>
							<p>
								@if ($product->is_special)
								<span class="item_price">${{ $product->special_price }}</span>
								<del>${{ $product->price }}</del>
								@else
								<span class="item_price">${{ $product->price }}</span>
								@endif
							</p>

							<div class="occasion-cart">
								<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
									<form action="{{ route('cart.add') }}" method="post">
										@csrf
										
										<fieldset>
											<div class="quantity">
												Quantity

												<div class="input-group">
													<span class="input-group-btn">
														<button type="button" class="btn btn-danger btn-number"  data-type="minus" data-field="quant">
															<span class="glyphicon glyphicon-minus"></span>
														</button>
													</span>
													<input id='quantity' type="text" name="quantity" class="form-control input-number" value="1" min="1" max="100">
													<span class="input-group-btn">
														<button type="button" class="btn btn-success btn-number" data-type="plus" data-field="quant">
															<span class="glyphicon glyphicon-plus"></span>
														</button>
													</span>
												</div>
											</div>
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="product_id" value="{{ $product->id }}" />
											<input type="hidden" name="product_code" value="{{ $product->code }}" />
										
											<input type="submit" name="submit" value="Add to cart" class="button" />
										</fieldset>
									</form>
								</div>

							</div>
							<div class="single-infoagile">
								<ul>
									<li>
										Cash on Delivery Eligible.
									</li>
									<li>
										Shipping Speed to Delivery.
									</li>
									<li>
										Sold and fulfilled by Supple Tek (3.6 out of 5 | 8 ratings).
									</li>

								</ul>
							</div>
							<div class="product-single-w3l">
								<p>
									<i class="fa fa-hand-o-right" aria-hidden="true"></i>
									<label>Dimension</label>
								</p>
								<ul>
									{{ $product->dimension }}
								</ul>

							</div>
							<div class="product-single-w3l">
								<p>
									<i class="fa fa-hand-o-right" aria-hidden="true"></i>
									<label>Details</label>
								</p>
								<ul>
									{{ $product->details }}
								</ul>

							</div>
							<div class="product-single-w3l">
								<p>
									<i class="fa fa-hand-o-right" aria-hidden="true"></i>
									<label>Description</label>
								</p>
								<ul>
									{{ $product->description }}
								</ul>

								

							</div>


						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<!-- //Single Page -->
				@else
				<h1 class="text-center">No product found!</h1>
				@endif



				@endsection

				@section('scripts')
				<!-- imagezoom -->
				<script src="{{ asset('js/imagezoom.js') }}"></script>
				<!-- //imagezoom -->
				<!-- FlexSlider -->
				<script src="{{ asset('js/jquery.flexslider.js') }}"></script>
				<script>
		// Can also be used with $(document).ready()
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				controlNav: "thumbnails"
			});
		});
	</script>

	<script type="text/javascript">
		$('.btn-number').click(function(e){
			e.preventDefault();

			fieldName = $(this).attr('data-field');
			type      = $(this).attr('data-type');
			var input = $("#quantity");
			var currentVal = parseInt(input.val());
			if (!isNaN(currentVal)) {
				if(type == 'minus') {

					if(currentVal > input.attr('min')) {
						input.val(currentVal - 1).change();
					} 
					if(parseInt(input.val()) == input.attr('min')) {
						$(this).attr('disabled', true);
					}

				} else if(type == 'plus') {

					if(currentVal < input.attr('max')) {
						input.val(currentVal + 1).change();
					}
					if(parseInt(input.val()) == input.attr('max')) {
						$(this).attr('disabled', true);
					}

				}
			} else {
				input.val(0);
			}
		});
		$('.input-number').focusin(function(){
			$(this).data('oldValue', $(this).val());
		});
		$('.input-number').change(function() {

			minValue =  parseInt($(this).attr('min'));
			maxValue =  parseInt($(this).attr('max'));
			valueCurrent = parseInt($(this).val());

			name = $(this).attr('name');
			if(valueCurrent >= minValue) {
				$(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
			} else {
				alert('Sorry, the minimum value was reached');
				$(this).val($(this).data('oldValue'));
			}
			if(valueCurrent <= maxValue) {
				$(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
			} else {
				alert('Sorry, the maximum value was reached');
				$(this).val($(this).data('oldValue'));
			}


		});
		$(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
             // Allow: Ctrl+A
             (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
             (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
             return;
         }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
        	e.preventDefault();
        }
    });
</script>
@endsection