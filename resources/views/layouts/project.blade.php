<!DOCTYPE html>
<html>
	<head>   
		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Mplus_Myanmar</title>	

		<meta name="keywords" content="" />
		<meta name="description" content="Your site">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="{{ asset('img/tab.ico')}}" type="image/x-icon" />
		<link rel="apple-touch-icon" href="{{ asset('img/tab.png')}}">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400" rel="stylesheet" type="text/css"> -->

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}">
		<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"> -->
		<link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css')}}">
		<link rel="stylesheet" href="{{ asset('vendor/animate/animate.min.css')}}">

		<!-- throphy br nyr icon -->
		<link rel="stylesheet" href="{{ asset('vendor/simple-line-icons/css/simple-line-icons.min.css')}}">		

        <link rel="stylesheet" href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ asset('vendor/owl.carousel/assets/owl.theme.default.min.css')}}">
		<link rel="stylesheet" href="{{ asset('vendor/magnific-popup/magnific-popup.min.css') }}">


		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{ asset('css/theme.css') }}">
		<link rel="stylesheet" href="{{ asset('css/theme-elements.css') }}">
		<link rel="stylesheet" href="{{ asset('css/theme-blog.css') }}">
		<link rel="stylesheet" href="{{ asset('css/theme-shop.css') }}">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="{{ asset('vendor/rs-plugin/css/settings.css')}}">
		<link rel="stylesheet" href="{{ asset('vendor/rs-plugin/css/layers.css')}}">
		<link rel="stylesheet" href="{{ asset('vendor/rs-plugin/css/navigation.css')}}">
		
		<!-- Demo CSS -->


		<!-- Skin CSS -->
		<link rel="stylesheet" href="{{ asset('css/skins/default.css') }}"> 

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{ asset('css/custom.css') }}">

		<!-- Head Libs -->
		<script src="{{ asset('vendor/modernizr/modernizr.min.js') }}"></script>

	</head>

	
	
	<body class="loading-overlay-showing" data-plugin-page-transition data-loading-overlay data-plugin-options="{'hideDelay': 500}">


				

		<div class="body">
			<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
				<div class="header-body border-color-primary border-bottom-0">
					<div class="header-top header-top-simple-border-bottom">
						<div class="container">
							<div class="header-row py-2">
								<div class="header-column justify-content-start">
									<div class="header-row">
										<nav class="header-nav-top">
											<!-- <ul class="nav nav-pills text-uppercase text-2">
												<li class="nav-item nav-item-anim-icon d-none d-md-block">
													<a class="nav-link pl-0" href="about-us.html"><i class="fas fa-angle-right"></i> About Us</a>
												</li>
												<li class="nav-item nav-item-anim-icon d-none d-md-block">
													<a class="nav-link" href="contact-us.html"><i class="fas fa-angle-right"></i> Contact Us</a>
												</li>
											</ul> -->
										</nav>
									</div>
								</div>
								<div class="header-column justify-content-end">
									<div class="header-row">
										<nav class="header-nav-top">
											<ul class="nav nav-pills">
												<li class="nav-item">
													<a href="mailto:mail@domain.com"><i class="far fa-envelope text-4 text-color-primary" style="top: 1px;"></i> mail@domain.com</a>
												</li>
												<li class="nav-item">
													<a href="tel:123-456-7890"><i class="fab fa-whatsapp text-4 text-color-primary" style="top: 0;"></i> 123-456-7890</a>
												</li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<a href="index.html">
											<img alt="Mplus" width="180" height="70" data-sticky-width="140" data-sticky-height="60" src="{{ asset('img/logo.png')}}">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<div class="header-nav header-nav-line header-nav-bottom-line">
										<div class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle" href="/">
														{{__ ('messages.home')}}
														</a>
														
													</li>
													<li class="dropdown dropdown-mega">
														<a class="dropdown-item dropdown-toggle" href="/element">
															Elements
														</a>
														
													</li>
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle" href="#">
															Features
														</a>
														
													</li>
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle" href="/about">
														{{__ ('messages.about')}}
														</a>
								
													</li>
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle" href="/contact">
														{{__ ('messages.contact')}}
														</a>
														
													</li>
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle" href="/memory">
														{{__ ('messages.blog')}}
														</a>
													</li>


													<!-- language Switcher -->
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle" href="">
															<img class="flag flag-us" alt=""><span style="padding-left: 5px;" > {{ Config::get('languages')[App::getLocale()]['display'] }} </span>
														</a>
														<ul class="dropdown-menu">
															<li>
																@foreach ( Config::get('languages') as $lang => $language)
																	@if($lang != App::getLocale())
																		<a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"> <img class="flag flag-jp" alt=""> <span style="padding-left: 5px;" >{{ $language['display'] }} </span> </a>
																	@endif
																@endforeach
															</li>
														</ul>
													</li>

												</ul>
											</nav>
										</div>
										
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
											<i class="fas fa-bars"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

            @yield('content')
			

			<footer id="footer">
				<div class="container">
					<div class="footer-ribbon">
						<span>Get in Touch</span>
					</div>
					<div class="row py-5 my-4">
						<div class="col-md-6 mb-4 mb-lg-0">
							<a href="" class="logo pr-0 pr-lg-3">
								<img alt="Porto Website Template" src="{{ asset('img/logo-footer.png')}}" class="bottom-4 mx-auto" width="40" height="40">
							</a>
							<!-- <p class="mt-2 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna. Phasellus semper scelerisque purus, et semper nisl lacinia sit amet. Praesent venenatis turpis vitae purus semper...</p>
							<p class="mb-0"><a href="#" class="btn-flat btn-xs text-color-light"><strong class="text-2">VIEW MORE</strong><i class="fas fa-angle-right p-relative top-1 pl-2"></i></a></p> -->

							<!-- contact form -->
							<div class="overflow-hidden mb-1">
								<h2 class="text-5 mb-0">Contact Us</h2>
							</div>
							<div class="overflow-hidden mb-4 pb-3">
								<p class="mb-0">Feel free to ask for details, don't save any questions!</p>
							</div>

							<form id="contactForm" class="contact-form" action="php/contact-form.php" method="POST">
								<div class="contact-form-success alert alert-success d-none mt-4" id="contactSuccess">
									<strong>Success!</strong> Your message has been sent to us.
								</div>
							
								<div class="contact-form-error alert alert-danger d-none mt-4" id="contactError">
									<strong>Error!</strong> There was an error sending your message.
									<span class="mail-error-message text-1 d-block" id="mailErrorMessage"></span>
								</div>
								
								<div class="form-row">
									<div class="form-group col-lg-6">
										<label class="required font-weight-bold text-2">Full Name</label>
										<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
									</div>
									<div class="form-group col-lg-6">
										<label class="required font-weight-bold text-2">Email Address</label>
										<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<label class="font-weight-bold text-2">Subject</label>
										<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<label class="required font-weight-bold text-2">Message</label>
										<textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control" name="message" id="message" required></textarea>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<input type="submit" value="Send Message" class="btn btn-primary btn-modern" data-loading-text="Loading...">
									</div>
								</div>
							</form>
						</div>

						
						<div class="col-md-6">
							<h5 class="text-3 mb-3 text-5">M PLUS MYANMAR</h5>
							<div class="row">
								<div class="col-md-12">
									<ul class="list list-icons list-icons-lg">
										<li class="mb-1"><i class="far fa-dot-circle text-color-primary"></i><p class="m-0">No. 38 Alanpya Pagoda Road, Mingalar Taung Nyunt Township, Yangon</p></li>
										<li class="mb-1"><i class="fab fa-whatsapp text-color-primary"></i><p class="m-0"><a href="tel:8001234567">(800) 123-4567</a></p></li>
										<li class="mb-1"><i class="far fa-envelope text-color-primary"></i><p class="m-0"><a href="mailto:mail@example.com">mail@example.com</a></p></li>
									</ul>
								</div>
								<div class="col-md-12">
									<!-- <ul class="list list-icons list-icons-sm">
										<li><i class="fas fa-angle-right"></i><a href="page-faq.html" class="link-hover-style-1 ml-1"> FAQ's</a></li>
										<li><i class="fas fa-angle-right"></i><a href="sitemap.html" class="link-hover-style-1 ml-1"> Sitemap</a></li>
										<li><i class="fas fa-angle-right"></i><a href="contact-us.html" class="link-hover-style-1 ml-1"> Contact Us</a></li>
									</ul> -->
									<!-- <ul class="header-social-icons social-icons d-none d-sm-block">
											<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
											<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
											<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
										</ul> -->
										<ul class="header-social-icons social-icons">
											<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
											<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
											<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
											<br>
											<li style="margin-top: 5px;" class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="icon-social-skype icon"></i></a></li>
										</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-copyright footer-copyright-style-2">
					<div class="container py-2">
						<div class="row py-4">
							<div class="col d-flex align-items-center justify-content-center">
								<p>© Copyright 2019. All Rights Reserved.</p>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>


		<!-- image pop-up -->
		<script>

		
		</script>
		<!-- Vendor -->
		<!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
   		<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script> -->
		<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
		<script src="{{ asset('vendor/jquery.appear/jquery.appear.min.js') }}"></script>
		<script src="{{ asset('vendor/jquery.easing/jquery.easing.min.js') }}"></script>
		<script src="{{ asset('vendor/jquery.cookie/jquery.cookie.min.js') }}"></script>  
		<script src="{{ asset('vendor/popper/umd/popper.min.js') }}"></script>
		<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('vendor/common/common.min.js') }}"></script>
		<script src="{{ asset('vendor/jquery.validation/jquery.validate.min.js') }}"></script>
        <!-- <script src="{{ asset('vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script> -->
        <script src="{{ asset('vendor/jquery.gmap/jquery.gmap.min.js') }}"></script>
        <script src="{{ asset('vendor/jquery.lazyload/jquery.lazyload.min.js') }}"></script>
		<script src="{{ asset('vendor/isotope/jquery.isotope.min.js') }}"></script>
		<script src="{{ asset('vendor/owl.carousel/owl.carousel.min.js')}}"></script>
        <script src="{{ asset('vendor/vide/jquery.vide.min.js') }}"></script>
		<script src="{{ asset('vendor/vivus/vivus.min.js') }}"></script>  
        <script src="{{ asset('vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
		

		<!-- Current Page Vendor and Views -->
		<script src="{{ asset('vendor/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
		<script src="{{ asset('vendor/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
		

		<!-- Theme Base, Components and Settings -->
		<script src="{{ asset('js/theme.js') }}"></script>
		
		 <!-- Theme Custom -->
         <script src="{{ asset('js/custom.js') }}"></script>

		<!-- Theme Initialization Files -->
		<script src="{{ asset('js/theme.init.js') }}"></script>



		<!-- Examples -->
		<script src="{{ asset('js/examples/examples.carousels.js') }}"></script>	

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->
	

	</body>
</html>
