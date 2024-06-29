@include ("header");
	

	<!-- HOME SECTION
    ================================================== -->
	
		<section class="home section parallax-section">
		
			<div class="parallax-8"></div>
		
			<div class="fullscreen-title-home"><span>FALL</span> COLLECTION</div>
			<div class="fullscreen-subtitle-home">Brand new collection 2014.</div>
			
			<a href="#scroll-link" class="arrow-down scroll">&#xf103;</a>
						
		</section>		

	<!-- SECTION
    ================================================== -->	
	
		<section class="section white-section section-padding-top" id="scroll-link">	
			<div class="container">
				<div class="sixteen columns">
					<ul id="owl-logos" class="owl-carousel owl-theme">
						<li><img  src="images/logos/1.png" alt="" /></li>
						<li><img  src="images/logos/2.png" alt="" /></li>
						<li><img  src="images/logos/3.png" alt="" /></li>
						<li><img  src="images/logos/4.png" alt="" /></li>
						<li><img  src="images/logos/1.png" alt="" /></li>
						<li><img  src="images/logos/2.png" alt="" /></li>
						<li><img  src="images/logos/3.png" alt="" /></li>
						<li><img  src="images/logos/4.png" alt="" /></li>
					</ul>
				</div>
			</div>
		</section>		

			

	<!-- SECTION
    ================================================== -->	
	
		<section class="section white-section section-padding-top-bottom">
			<div class="container">
				<div class="sixteen columns">
					<div id="portfolio-filter">
						<ul id="filter">
							<li><a href="#" class="current" data-filter="*" title="">Show All</a></li>
							<li><a href="#" class="tooltip-shop" data-filter=".men" title="">MEN<span class="tooltip-content-shop"><span class="tooltip-text-shop"><span class="tooltip-inner-shop">Sale 20%</span></span></span></a></li>
							<li><a href="#" class="tooltip-shop" data-filter=".women" title="">WOMEN<span class="tooltip-content-shop"><span class="tooltip-text-shop"><span class="tooltip-inner-shop">Sale 30%</span></span></span></a></li>
							<li><a href="#" class="tooltip-shop" data-filter=".underwear" title="">UNDERWEAR<span class="tooltip-content-shop"><span class="tooltip-text-shop"><span class="tooltip-inner-shop">Sale 17%</span></span></span></a></li>
							<li><a href="#" data-filter=".jewellry" title="">JEWELLRY</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="clear"></div>
			

			<div class="shop-wrapper">
				<div id="shop-grid-masonry">
					@if(isset($allData) && $allData->count() > 0)
					@foreach($allData as $category)
						@foreach($category->products as $product)
							<div class="shop-box-3 {{ $category->name }}">
								<div class="shop-box grey-section">

									@php
										$pictures = json_decode($product->pictures, true);
									@endphp

									@if(is_array($pictures) && count($pictures) > 0)
										<img src="{{ asset($pictures[0]) }}" alt="" >
									@else
										<p>No pictures available</p>
									@endif

									<div class="mask-shop-white"></div>
									<div class="shop-price"><span>$150</span></br>{{ $product->price }}</div>
									<a class="animsition-link" href="shop-item"><h5>{{ $product->name }}</h5></a>
									<a class="animsition-link" href="shop-item"><div class="mask-left-shop">&#xf06e;</div></a>
									<a href="cart"><div class="mask-right-shop">&#xf07a;</div></a>
								</div>
							</div>
						@endforeach
					@endforeach
				@else
					<p>No products found.</p>
				@endif
				</div>
			</div>
		</section>		
				

	<!-- SECTION
    ================================================== -->	
	
		<section class="section grey-section section-padding-top-bottom">
		
			<div class="container">
				<div class="sixteen columns">
					<div class="blog-left-right-links">
						<a href="#"><div class="blog-left-link"><p>prev</p></div></a>
						<a href="#"><div class="blog-right-link"><p>next</p></div></a>
					</div>
				</div>
			</div>
			
		</section>	

	<!-- FOOTER
    ================================================== -->	
	@include ("footer");
