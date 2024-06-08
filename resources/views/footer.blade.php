
<section class="section footer-1 section-padding-top-bottom">	
			<div class="container">
				<div class="four columns" data-scroll-reveal="enter left move 200px over 0.5s after 0.8s">
					<a href="index" class="animsition-link"><div class="logo-footer"></div></a>
				</div>
				<div class="four columns" data-scroll-reveal="enter left move 200px over 0.5s after 0.3s">
					<h6><i class="icon-footer">&#xf041;</i>Kraljevo</h6>
					<p>Nikole Tesle 41, Serbia<br/>
					+381 602037802</p>
				</div>
				<div class="four columns" data-scroll-reveal="enter right move 200px over 0.5s after 0.3s">
					<h6><i class="icon-footer">&#xf041;</i>Belgrade</h6>
					<p>Heroja Maricica 23, Serbia<br/>
					+381 642342802</p>
				</div>
				<div class="four columns" data-scroll-reveal="enter right move 200px over 0.5s after 0.8s">
					<div class="social-bottom">
						<ul class="list-social">
							<li class="icon-soc">
								<a href="#">&#xf099;</a>
							</li>
							<li class="icon-soc">
								<a href="#">&#xf09a;</a>
							</li>
							<li class="icon-soc">
								<a href="#">&#xf09b;</a>
							</li>
							<li class="icon-soc">
								<a href="#">&#xf0d5;</a>
							</li>
						</ul>	
					</div>
					<p><i class="icon-footer">&#xf0e0;</i><a href="mailto:office@yoursite.com" title="">office@yoursite.com</a></p>
				</div>	
			</div>
		</section>
		<section class="section footer-bottom">	
			<div class="container">
				<div class="sixteen columns">
					<p>© ALL RIGHTS RESERVED. Design and Developed BY LogiTech Solutions 2024</p>
				</div>	
			</div>
		</section>



		
	</main>		

	<div class="scroll-to-top">&#xf106;</div>

	</div>

	
	<!-- JAVASCRIPT
    ================================================== -->
<script type="text/javascript" src="js/jquery-2.1.1.js"></script>
<script type="text/javascript" src="js/modernizr.custom.js"></script> 
<script type="text/javascript" src="js/jquery.mobile.custom.min.js"></script>
<script type="text/javascript" src="js/retina-1.1.0.min.js"></script>	
<script type="text/javascript" src="js/jquery.animsition.min.js"></script>
<script type="text/javascript">
(function($) { "use strict";
	$(document).ready(function() {
	  
	  $(".animsition").animsition({
	  
		inClass               :   'zoom-in-sm',
		outClass              :   'zoom-out-sm',
		inDuration            :    1500,
		outDuration           :    800,
		linkElement           :   '.animsition-link', 
		// e.g. linkElement   :   'a:not([target="_blank"]):not([href^=#])'
		loading               :    true,
		loadingParentElement  :   'body', //animsition wrapper element
		loadingClass          :   'animsition-loading',
		unSupportCss          : [ 'animation-duration',
								  '-webkit-animation-duration',
								  '-o-animation-duration'
								],
		//"unSupportCss" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser. 
		//The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
		
		overlay               :   false,
		
		overlayClass          :   'animsition-overlay-slide',
		overlayParentElement  :   'body'
	  });
	});  
})(jQuery);
</script>
<script type="text/javascript" src="js/jquery.themepunch.tools.min.js"></script>   
<script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script> 
<script type="text/javascript" src="js/jquery.easing.js"></script>	
<script type="text/javascript" src="js/jquery.hidescroll.min.js"></script>	
<script type="text/javascript">
	$('.header-top').hidescroll();
</script>
<script type="text/javascript" src="js/smoothScroll.js"></script>
<script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
<script type="text/javascript" src="js/jquery.counterup.min.js"></script>
<script type="text/javascript" src="js/waypoints.min.js"></script>
<script type="text/javascript" src="js/scrollReveal.js"></script>
<script type="text/javascript">
(function($) { "use strict";
      window.scrollReveal = new scrollReveal();
})(jQuery);
</script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript"> 
(function($) { "use strict";          
			jQuery(document).ready(function() {
				var offset = 450;
				var duration = 500;
				jQuery(window).scroll(function() {
					if (jQuery(this).scrollTop() > offset) {
						jQuery('.scroll-to-top').fadeIn(duration);
					} else {
						jQuery('.scroll-to-top').fadeOut(duration);
					}
				});
				
				jQuery('.scroll-to-top').click(function(event) {
					event.preventDefault();
					jQuery('html, body').animate({scrollTop: 0}, duration);
					return false;
				})
			});
})(jQuery);
</script>
<script type="text/javascript" src="js/styleswitcher.js"></script>
<script type="text/javascript" src="js/custom-index.js"></script>  	  
<!-- End Document
================================================== -->
</body>

<!-- Mirrored from ivang-design.com/clymene/index by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 May 2024 16:50:22 GMT -->
</html>