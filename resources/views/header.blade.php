<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!--><html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}"><!--<![endif]-->

<!-- Mirrored from ivang-design.com/clymene/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 May 2024 16:49:18 GMT -->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Clymene</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	
	
	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/skeleton.css"/>
	<link rel="stylesheet" href="css/layout.css"/>
	<link rel="stylesheet" href="css/settings.css"/>
	<link rel="stylesheet" href="css/font-awesome.css" />
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/retina.css"/>
	<link rel="stylesheet" href="css/animsition.min.css"/>
	<link rel="stylesheet" href="css/colorbox.css"/>
	<link rel="stylesheet" href="css/woocommerce.css"/>
	
	<link rel="alternate stylesheet" type="text/css" href="css/colors/color-gold.css" title="1">
    <link rel="alternate stylesheet" type="text/css" href="css/colors/color-2.css" title="2">
    <link rel="alternate stylesheet" type="text/css" href="css/colors/color-3.css" title="3">
    <link rel="alternate stylesheet" type="text/css" href="css/colors/color-4.css" title="4">
    <link rel="alternate stylesheet" type="text/css" href="css/colors/color-5.css" title="5">	
    <link rel="alternate stylesheet" type="text/css" href="css/colors/color-6.css" title="6">	
    <link rel="alternate stylesheet" type="text/css" href="css/colors/color-7.css" title="7">
	

		
	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.png">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">
	
	
	
</head>
<body>	
	<!-- Primary Page Layout
	================================================== -->

	<div class="animsition">	
	
    <!-- Switch Panel -->
    <div id="switch">
        <div class="content-switcher" >        
			<p>Color Options:</p>
			<ul class="header">           
				<li><a href="#" onClick="setActiveStyleSheet('1'); return false;" class="button color switch" style="background-color:#cfa144"></a></li>
				<li><a href="#" onClick="setActiveStyleSheet('2'); return false;" class="button color switch" style="background-color:#9b59b6"></a></li>
				<li><a href="#" onClick="setActiveStyleSheet('3'); return false;" class="button color switch" style="background-color:#2ecc71"></a></li>
				<li><a href="#" onClick="setActiveStyleSheet('4'); return false;" class="button color switch" style="background-color:#e74c3c"></a></li>
				<li><a href="#" onClick="setActiveStyleSheet('5'); return false;" class="button color switch" style="background-color:#34495e"></a></li> 
				<li><a href="#" onClick="setActiveStyleSheet('6'); return false;" class="button color switch" style="background-color:#f1c40f"></a></li>
				<li><a href="#" onClick="setActiveStyleSheet('7'); return false;" class="button color switch" style="background-color:#3498db"></a></li>
			</ul>        
			<div class="clear"></div>    
			<div id="hide">
				<img  src="images/close.png" alt="" /> 
			</div>
        </div>
	</div>
	<div id="show" style="display: block;">
        <div id="setting"></div>
    </div>
    <!-- Switch Panel -->	


	
	
	<!-- MENU
    ================================================== -->	
	
	<div class="header-top">
	
		<header class="cd-main-header">
			<a class="cd-logo animsition-link" href="{{ route('/') }}"><img src="images/logo.png" alt="Logo"></a>

			<ul class="cd-header-buttons">
				<li><a class="cd-search-trigger" href="#cd-search"><span></span></a></li>
				<li><a class="cd-nav-trigger" href="#cd-primary-nav"><span></span></a></li>
			</ul> <!-- cd-header-buttons -->
		</header>
		@if (Route::has('login'))
		<nav class="cd-nav">
			<ul id="cd-primary-nav" class="cd-primary-nav is-fixed">
				<li>
					<a href="{{ route('/') }}" class="animsition-link">Home</a>
				</li>

				<li class="has-children">
					<a href="#">Shop</a>

					<ul class="cd-nav-gallery is-hidden">
						<li class="go-back"><a href="#0">Menu</a></li>
						<li class="see-all"><a href="shop-all" class="animsition-link">Browse All</a></li>
						<li>
							<a class="cd-nav-item animsition-link" href="{{ route('shop-1') }}">
								<img src="images/shop1.jpg" alt="Product Image">
								<h3>men</h3>
							</a>
						</li>

						<li>
							<a class="cd-nav-item animsition-link" href="{{ route('shop-2') }}">
								<img src="images/shop2.jpg" alt="Product Image">
								<h3>women</h3>
							</a>
						</li>

						

						<li>
							<a class="cd-nav-item animsition-link" href="{{ route('shop-4') }}">
								<img src="images/shop4.jpg" alt="Product Image">
								<h3>jewellry</h3>
							</a>
						</li>
					</ul>
				</li>

				<li class="has-children">
					<a href="#">Shortcodes</a>
					<ul class="cd-nav-icons is-hidden">
						<li class="go-back"><a href="#0">Menu</a></li>
						<li class="see-all"><a href="more-shortcodes.html" class="animsition-link">More Shortcodes</a></li>
						<li>
							<a class="cd-nav-item item-1 animsition-link" href="buttons.html">
								<h3>Buttons</h3>
								<p>This is the page description</p>
							</a>
						</li>

						<li>
							<a class="cd-nav-item item-2 animsition-link" href="icons.html">
								<h3>Icons</h3>
								<p>This is the page description</p>
							</a>
						</li>

						<li>
							<a class="cd-nav-item item-3 animsition-link" href="counters.html">
								<h3>Counters</h3>
								<p>This is the page description</p>
							</a>
						</li>

						<li>
							<a class="cd-nav-item item-4 animsition-link" href="carousels.html">
								<h3>Carousels</h3>
								<p>This is the page description</p>
							</a>
						</li>

						<li>
							<a class="cd-nav-item item-5 animsition-link" href="media.html">
								<h3>Media</h3>
								<p>This is the page description</p>
							</a>
						</li>

						<li>
							<a class="cd-nav-item item-6 animsition-link" href="blockquotes.html">
								<h3>Blockquotes</h3>
								<p>This is the page description</p>
							</a>
						</li>

						<li>
							<a class="cd-nav-item item-7 animsition-link" href="process.html">
								<h3>Process Steps</h3>
								<p>This is the page description</p>
							</a>
						</li>

						<li>
							<a class="cd-nav-item item-8 animsition-link" href="alert.html">
								<h3>Alert Boxes</h3>
								<p>This is the page description</p>
							</a>
						</li>
						
						<li>
							<a class="cd-nav-item item-9 animsition-link" href="tabs.html">
								<h3>Tabs</h3>
								<p>This is the page description</p>
							</a>
						</li>

						<li>
							<a class="cd-nav-item item-10 animsition-link" href="pricing.html">
								<h3>Pricing Boxes</h3>
								<p>This is the page description</p>
							</a>
						</li>

						<li>
							<a class="cd-nav-item item-11 animsition-link" href="clients.html">
								<h3>Clients</h3>
								<p>This is the page description</p>
							</a>
						</li>
						
						<li>
							<a class="cd-nav-item item-12 animsition-link" href="lightbox.html">
								<h3>Lightbox</h3>
								<p>This is the page description</p>
							</a>
						</li>
					</ul>
				</li>

				<li>
					<a href="{{ route('contact') }}" class="animsition-link">Contact</a>
				</li>
				@auth
								<li>
									<a
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                    >
									<form method="POST" action="{{ route('logout') }}">
										@csrf
										<button type="submit" >
											{{ __('Logout') }}
										</button>
										
									</form>
                                    </a>
								</li>
                                @else
								<li>
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                    >
                                        Log in
                                    </a>
								</li>
                                    @if (Route::has('register'))
									<li>
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                        >
                                            Register
                                        </a>
									</li>
                                    @endif
                                @endauth
				
				<li>
					<a href="cart" class="animsition-link"><i class="fa fa-fw">&#xf07a;</i>cart</a>
				</li>
				
			</ul> <!-- primary-nav -->
		</nav> <!-- cd-nav -->
		@endif
		<div id="cd-search" class="cd-search">
			<form>
				<input type="search" placeholder="Search...">
			</form>
		</div>	
	
	</div>
	
	<main class="cd-main-content">
