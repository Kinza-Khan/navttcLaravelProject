@include ("header");
	
	<!-- TOP SECTION
    ================================================== -->
	
		<section class="section parallax-section parallax-section-padding-top-bottom-pagetop section-page-top-title">
		
			<div class="parallax-contact"></div>
		
			<div class="container">
				<div class="eight columns">
					<h1>contact</h1>
				</div>
				<div class="eight columns">
					<div id="owl-top-page-slider" class="owl-carousel owl-theme">
						<div class="item">
							<div class="page-top-icon">&#xf041;</div>
							<div class="page-top-text">Belgrade, Serbia</div>
						</div>
						<div class="item">
							<div class="page-top-icon">&#xf095;</div>
							<div class="page-top-text">+381 64 123-456</div>
						</div>
						<div class="item">
							<div class="page-top-icon">&#xf1fa;</div>
							<div class="page-top-text">office@clymene.com</div>
						</div>
					</div>
				</div>
			</div>
				
		</section>	
			

	<!-- SECTION
    ================================================== -->	
	
		<section class="section white-section section-padding-top-bottom">
		
			<div class="container">
				<div class="sixteen columns">
					<div class="section-title">
						<h3>Get in touch</h3>
					</div>
				</div>
			
				<div class="clear"></div>
				
				<form name="ajax-form" id="ajax-form" action="{{ route('contact.submit') }}" method="post">
					@csrf
					<div class="eight columns">
						<input name="name" id="name" type="text"   placeholder="Your Name: *"/>
					</div>
					<div class="eight columns">
						<input name="email" id="email" type="text"  placeholder="E-Mail: *"/>
					</div>
					<div class="sixteen columns">
						<textarea name="message" id="message" placeholder="Tell Us Everything"></textarea>
					</div>
					<div class="sixteen columns">
						<div id="button-con"><button class="send_message" id="send">submit</button></div>
					</div>
				</form>	
			</div>				
		</section>	
			
	<!-- SECTION
    ================================================== -->	
	
		<section class="section">
		
			<a class="button-map close-map"><span>Locate Us on Map</span></a>
			<div id="google_map"></div>	
				
		</section>	
			

	<!-- SECTION
    ================================================== -->	
	
		<section class="section white-section section-padding-top-bottom">
		
			<div class="container">
				<div class="sixteen columns">
					<div class="social-contact">
						<ul class="list-contact">
							<li class="contact-soc">
								<a class="tooltip-shop" href="#">&#xf099;<span class="tooltip-content-shop"><span class="tooltip-text-shop"><span class="tooltip-inner-shop">follow us</span></span></span></a>
							</li>
							<li class="contact-soc">
								<a class="tooltip-shop" href="#">&#xf09a;<span class="tooltip-content-shop"><span class="tooltip-text-shop"><span class="tooltip-inner-shop">like us</span></span></span></a>
							</li>
							<li class="contact-soc">
								<a class="tooltip-shop" href="#">&#xf09b;<span class="tooltip-content-shop"><span class="tooltip-text-shop"><span class="tooltip-inner-shop">stay up to date</span></span></span></a>
							</li>
							<li class="contact-soc">
								<a class="tooltip-shop" href="#">&#xf0d5;<span class="tooltip-content-shop"><span class="tooltip-text-shop"><span class="tooltip-inner-shop">+1 us</span></span></span></a>
							</li>
						</ul>	
					</div>
				</div>
			</div>
				
		</section>	
	
@include ("footer");
	