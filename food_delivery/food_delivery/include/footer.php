<section class="w3l-footers-20">
  	<div class="footers20">
  		<div class="container">
  			<div class="footers20-content">
  				<div class="d-grid grid-col-4 grids-content">
  					<div class="column">
  						<h4>Address</h4>
  						<p class="contact-para3">380, Prince Anwar Shah Rd , <br>

opposite Southcity Mall, near Honda Showroom, Jodhpur Park , <br>

Kolkata, West Bengal 700045</p>
  						<a href="mailto:hello@w3layouts.com" class="test">
  							<p class="contact-mail mt-2 ">foodplaza.info@gmail.com</p>
  						</a>
  					</div>
  					<div class="column">
  						<h4>Book a Table</h4>
  						<p>Pick up your mobile and just give us a call</p>
  						<a href="tel:+1-2345-678-11">
  							<p class="contact-phone mt-2">+033-2345-6781</p>
  						</a>
  					</div>
  					<div class="column">
  						<h4>Opening hours</h4>
  						<p>Monday - Friday</p>
  						<p class="mt-2">09:00 am to 10:00 pm</p>
  					</div>
  					<div class="column">
  						<h4>Twitter feed</h4>
  						<a href="blog-single.html">
  							<p><span class="fa fa-twitter mr-2"></span>One cannot think well, love well, sleep well, if one has not dined well.</p>
  						</a>
  						<p class="small mt-2"><span class="fa fa-clock-o"></span> March 25, 2020</p>
  					</div>
  				</div>
  				<div class="d-grid grid-col-3 grids-content1 bottom-border">
  					<div class="columns copyright-grid">
  						<p class="copy-footer-29">© 2023 FoodPlaza. All rights reserved | Designed by <a
  								href="#">BSTians</a></p>
  					</div>
  					<div class="columns text-right social-grid">
  						<ul class="social">
  							<li><a href="#url"><span class="fa fa-facebook" aria-hidden="true"></span></a></li>
  							<li><a href="#url"><span class="fa fa-instagram" aria-hidden="true"></span></a></li>
  							<li><a href="#url"><span class="fa fa-twitter" aria-hidden="true"></span></a></li>
  						</ul>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
  </section>
  <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
  	&#10548;
  </button>
  <script>
  	// When the user scrolls down 20px from the top of the document, show the button
  	window.onscroll = function () {
  		scrollFunction()
  	};

  	function scrollFunction() {
  		if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
  			document.getElementById("movetop").style.display = "block";
  		} else {
  			document.getElementById("movetop").style.display = "none";
  		}
  	}

  	// When the user clicks on the button, scroll to the top of the document
  	function topFunction() {
  		document.body.scrollTop = 0;
  		document.documentElement.scrollTop = 0;
  	}
  </script>
  <!-- /move top -->
  </section>

  <!-- jQuery and Bootstrap JS -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>

  <!-- libhtbox -->
  <script src="assets/js/lightbox-plus-jquery.min.js"></script>


  <script src="assets/js/jquery.magnific-popup.min.js"></script>

  <script src="assets/js/counter.js"></script>
  <script>
  	$(document).ready(function () {
  		$('.popup-with-zoom-anim').magnificPopup({
  			type: 'inline',

  			fixedContentPos: false,
  			fixedBgPos: true,

  			overflowY: 'auto',

  			closeBtnInside: true,
  			preloader: false,

  			midClick: true,
  			removalDelay: 300,
  			mainClass: 'my-mfp-zoom-in'
  		});

  		$('.popup-with-move-anim').magnificPopup({
  			type: 'inline',

  			fixedContentPos: false,
  			fixedBgPos: true,

  			overflowY: 'auto',

  			closeBtnInside: true,
  			preloader: false,

  			midClick: true,
  			removalDelay: 300,
  			mainClass: 'my-mfp-slide-bottom'
  		});
  	});
  </script>

  <!-- testimonials owlcarousel -->
  <script src="assets/js/owl.carousel.js"></script>
  <script>
  	$(document).ready(function () {
  		$('.owl-two').owlCarousel({
  			loop: true,
  			margin: 30,
  			nav: false,
  			responsiveClass: true,
  			autoplay: false,
  			autoplayTimeout: 5000,
  			autoplaySpeed: 1000,
  			autoplayHoverPause: false,
  			responsive: {
  				0: {
  					items: 1,
  					nav: false
  				},
  				480: {
  					items: 1,
  					nav: false
  				},
  				667: {
  					items: 1,
  					nav: false
  				},
  				1000: {
  					items: 1,
  					nav: false
  				}
  			}
  		})
  	})
  </script>
  <!-- //script for Testimonials-->

  <!-- script for food-->
  <script>
  	$(document).ready(function () {
  		$('.owl-carousel').owlCarousel({
  			loop: true,
  			margin: 0,
  			responsiveClass: true,
  			responsive: {
  				0: {
  					items: 1,
  					nav: true
  				},
  				480: {
  					items: 2,
  					nav: true,
  					margin: 20
  				},
  				769: {
  					items: 3,
  					nav: true,
  					margin: 20
  				},
  				1280: {
  					items: 4,
  					nav: true,
  					loop: true,
  					margin: 25
  				}
  			}
  		})
  	})
  </script>
  <!-- //script for food-->

  <!-- disable body scroll which navbar is in active -->
  <script>
  	$(function () {
  		$('.navbar-toggler').click(function () {
  			$('body').toggleClass('noscroll');
  		})
  	});
  </script>
  <!-- disable body scroll which navbar is in active -->
  <!--/MENU-JS-->
  <script>
  	$(window).on("scroll", function () {
  		var scroll = $(window).scrollTop();

  		if (scroll >= 80) {
  			$("#site-header").addClass("nav-fixed");
  		} else {
  			$("#site-header").removeClass("nav-fixed");
  		}
  	});

  	//Main navigation Active Class Add Remove
  	$(".navbar-toggler").on("click", function () {
  		$("header").toggleClass("active");
  	});
  	$(document).on("ready", function () {
  		if ($(window).width() > 991) {
  			$("header").removeClass("active");
  		}
  		$(window).on("resize", function () {
  			if ($(window).width() > 991) {
  				$("header").removeClass("active");
  			}
  		});
  	});
  </script>
  <!--//MENU-JS-->
  <script src="assets/js/bootstrap.min.js"></script>

  </body>

  </html>