<div class="featured-section" id="projects">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Features Product
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<div class="content-bottom-in">
				<ul id="flexiselDemo1">
					
					@isset ($feature_products)
					    @if ($feature_products)
					    	@foreach ($feature_products as $f_product)
					    		<li>
						<div class="w3l-specilamk">
							<div class="speioffer-agile">
								<a href="{{ route('front.product_single', $f_product->slug) }}">
									<img width="166" height="150" src="{{ asset('imgs/default_'. rand(1, 3) . '.jpg') }}" alt="">
								</a>
							</div>
							<div class="product-name-w3l">
								<h4>
									<a href="{{ route('front.product_single', $f_product->slug) }}">{{ str_limit($f_product->name, 25) }}</a>
								</h4>
								<div class="w3l-pricehkj">
									<h6>${{ $f_product->price }}</h6>
								</div>
								
							</div>
						</div>
					</li>
					    	@endforeach
					    @endif
					@endisset
				</ul>
			</div>
		</div>
	</div>