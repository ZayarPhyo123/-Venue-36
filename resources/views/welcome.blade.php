@extends('layouts.project')

@section('content')

	<style>
	.owl-dots{
		display: none !important;
	}
	</style>

		<div role="main" class="main">
		
		<div class="slider-container rev_slider_wrapper" style="height: 600px;">
					<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 600, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500], 'parallax': { 'type': 'scroll', 'origo': 'enterpoint', 'speed': 1000, 'levels': [2,3,4,5,6,7,8,9,12,50], 'disable_onmobile': 'on' }, 'navigation' : {'arrows': { 'enable': false }, 'bullets': {'enable': false, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 70, 'h_offset': 0}}}">
						<ul>
							<li class=" slide-overlay-primary" data-transition="fade">
								<img src="img/content/header/1h.png"  
									alt=""
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="">

								<div class="tp-caption"
									data-x="center" data-hoffset="['-150','-150','-150','-240']"
									data-y="center" data-voffset="['-50','-50','-50','-75']"
									data-start="1000"
									data-transform_in="x:[-300%];opacity:0;s:500;"
									data-transform_idle="opacity:0.2;s:500;"><img src="img/content/header/slide-title-border.png" alt=""></div>

								<div class="tp-caption text-color-light font-weight-normal"
									data-x="center"
									data-y="center" data-voffset="['-50','-50','-50','-75']"
									data-start="700"
									data-fontsize="['22','22','22','40']"
									data-lineheight="['25','25','25','45']"
									data-transform_in="y:[-50%];opacity:0;s:500;">DO YOU NEED A NEW</div>

								<div class="tp-caption d-none d-md-block"
									data-frames='[{"delay":2200,"speed":500,"frame":"0","from":"opacity:0;x:10%;","to":"opacity:1;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center" data-hoffset="['80','80','80','135']"
									data-y="center" data-voffset="['-33','-33','-33','-55']"><img src="img/content/header/slide-white-line.png" alt=""></div>

								<div class="tp-caption"
									data-x="center" data-hoffset="['150','150','150','240']"
									data-y="center" data-voffset="['-50','-50','-50','-75']"
									data-start="1000"
									data-transform_in="x:[300%];opacity:0;s:500;"
									data-transform_idle="opacity:0.2;s:500;"><img src="img/content/header/slide-title-border.png" alt=""></div>

								<h1 class="tp-caption font-weight-extra-bold text-color-light negative-ls-2"
									data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center"
									data-y="center"
									data-fontsize="['50','50','50','90']"
									data-lineheight="['55','55','55','95']">WEB DESIGN?</h1>

								<div class="tp-caption text-light font-weight-light"
									data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
									data-x="center"
									data-y="center" data-voffset="['40','40','40','80']"
									data-fontsize="['18','18','18','50']"
									data-lineheight="['20','20','20','55']">Check out our options and features</div>
								
							</li>
							<li class=" slide-overlay-primary" data-transition="fade">
								<img src="img/content/header/21h.png"
									alt=""
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="">

									<div class="tp-caption"
									data-x="center" data-hoffset="['-150','-150','-150','-240']"
									data-y="center" data-voffset="['-50','-50','-50','-75']"
									data-start="1000"
									data-transform_in="x:[-300%];opacity:0;s:500;"
									data-transform_idle="opacity:0.2;s:500;"><img src=img/content/header/slide-title-border.png" alt=""></div>

								<div class="tp-caption text-color-light font-weight-normal"
									data-x="center"
									data-y="center" data-voffset="['-50','-50','-50','-75']"
									data-start="700"
									data-fontsize="['22','22','22','40']"
									data-lineheight="['25','25','25','45']"
									data-transform_in="y:[-50%];opacity:0;s:500;">DO YOU NEED A NEW</div>

								<div class="tp-caption d-none d-md-block"
									data-frames='[{"delay":2200,"speed":500,"frame":"0","from":"opacity:0;x:10%;","to":"opacity:1;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center" data-hoffset="['80','80','80','135']"
									data-y="center" data-voffset="['-33','-33','-33','-55']"><img src="img/content/header/slide-white-line.png" alt=""></div>

								<div class="tp-caption"
									data-x="center" data-hoffset="['150','150','150','240']"
									data-y="center" data-voffset="['-50','-50','-50','-75']"
									data-start="1000"
									data-transform_in="x:[300%];opacity:0;s:500;"
									data-transform_idle="opacity:0.2;s:500;"><img src="img/content/header/slide-title-border.png" alt=""></div>

								<h1 class="tp-caption font-weight-extra-bold text-color-light negative-ls-2"
									data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center"
									data-y="center"
									data-fontsize="['50','50','50','90']"
									data-lineheight="['55','55','55','95']">WEB DESIGN?</h1>

								<div class="tp-caption text-light font-weight-light"
									data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
									data-x="center"
									data-y="center" data-voffset="['40','40','40','80']"
									data-fontsize="['18','18','18','50']"
									data-lineheight="['20','20','20','55']">Check out our options and features</div>
								
							</li>
						</ul>
					</div>
				</div>
			
			<!-- carousel br nyr -->

			<!-- <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item ee active">
					<img class="d-block w-100" src="img/content/1.jpg" alt="">
					</div>
					<div class="carousel-item ee">
					<img class="d-block w-100" src="img/content/2.jpg" alt="">
					</div>
					<div class="carousel-item ee">
					<img class="d-block w-100" src="img/content/3.jpg" alt="">
					</div>
				</div>
			</div> -->

			<!-- next carousel -->
			<!-- <div class="owl-carousel owl-theme" data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut','autoplay': true,'autoplayTimeout': 4000,'data-touch' : false }">
				<div>
					<img alt="" style="object-fit: fit;" class="img-fluid rounded" src="img/content/header/1h.jpg">
				</div>
				<div>
					<img alt="" style="object-fit: fit;" class="img-fluid rounded" src="img/content/header/21h.jpg">
				</div>
				<div>
					<img alt="" style="object-fit: fit;max-height 799px;" class="img-fluid rounded" src="img/content/header/34h.jpg">
				</div>
			</div> -->

			<div class="home-intro" id="home-intro">
					<div class="container">

						<div class="row align-items-center">
							<div class="col-lg-8">
								<p>
									The fastest way to grow your business with the leader in <span class="highlighted-word text-color-primary font-weight-semibold text-5">Technology</span>
									<span>Check out our options and features included.</span>
								</p>
							</div>
							<div class="col-lg-4">
								<div class="get-started text-left text-lg-right">
									<a href="#" class="btn btn-primary btn-lg text-3 font-weight-semibold px-4 py-3">Get Started Now!</a>
									<div class="learn-more">or <a href="index.html">learn more.</a></div>
								</div>
							</div>
						</div>

					</div>
				</div>

			<!-- testimonials -->
			<div class="owl-carousel owl-theme container" data-plugin-options="{'items': 1, 'autoplay': true, 'autoplayTimeout': 3000}">
				
				<div class="testimonial testimonial-style-5">
					<blockquote>
						<p class="mb-0">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sociis natoque penatibus et magnis dis parturient montes"</p>
					</blockquote>
					<div class="testimonial-arrow-down"></div>
					<div class="testimonial-author">
						<img src="img/clients/6.jpg" class="img-fluid rounded-circle" alt="">
						<p><strong class="font-weight-extra-bold pt-2">BO BO PE WIN</strong><span>Director</span></p>
					</div>
				</div>
					
				<div class="testimonial testimonial-style-5">
					<blockquote>
						<p class="mb-0">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sociis natoque penatibus et magnis dis parturient montes"</p>
					</blockquote>
						<div class="testimonial-arrow-down"></div>
						<div class="testimonial-author">
							<img src="img/clients/11.jpg" class="img-fluid rounded-circle" alt="">
							<p><strong class="font-weight-extra-bold">NAY LIN HTAT (LOUIS)</strong><span>Managing Director</span></p>
						</div>
				</div>
			</div>
			
			<div class="container py-5 my-4">
				<div class="row text-center py-3">
					<div class="col-md-10 mx-md-auto">
						<h1 class="word-rotator slide font-weight-bold text-8 mb-3 appear-animation" data-appear-animation="fadeInUpShorter">
							<span>Porto is </span>
							<span class="word-rotator-words bg-primary">
								<b class="is-visible">incredibly</b>
								<b>especially</b>
								<b>extremely</b>
							</span>
							<span> beautiful and fully responsive.</span>
						</h1>
						<p class="lead appear-animation mb-0" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante nulla hendrerit arcu, ac tincidunt mauris lacus sed leo.
						</p>
					</div>
				</div>
			</div>
			
			<section class="section section-height-5 bg-primary border-0 pt-5 m-0 appear-animation" data-appear-animation="fadeIn">
				<div class="container">
					<div class="row mt-4 mt-lg-5">
						<div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
							<div class="feature-box">
								<div class="feature-box-icon feature-box-icon-large bg-light mt-1">
									<i class="icons icon-support text-color-primary text-6"></i>
								</div>
								<div class="feature-box-info">
									<h2 class="text-color-light font-weight-bold text-4 line-height-5 mb-1">CUSTOMER SUPPORT</h2>
									<p class="text-color-light opacity-7">Lorem ipsum dolor sit <span class="alternative-font text-color-light">amet</span>, consectetur adipiscing elit. Praesent tincidunt pretium vulputate.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter">
							<div class="feature-box">
								<div class="feature-box-icon feature-box-icon-large bg-light mt-1">
									<i class="icons icon-layers text-color-primary text-6"></i>
								</div>
								<div class="feature-box-info">
									<h2 class="font-weight-bold text-color-light text-4 line-height-5 mb-1">SLIDERS</h2>
									<p class="text-color-light opacity-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget pretium purus.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
							<div class="feature-box">
								<div class="feature-box-icon feature-box-icon-large bg-light mt-1">
									<i class="icons icon-menu text-color-primary text-5"></i>
								</div>
								<div class="feature-box-info">
									<h2 class="font-weight-bold text-color-light text-4 line-height-5 mb-1">BUTTONS</h2>
									<p class="text-color-light opacity-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vel magna fringilla.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row mt-lg-4">
						<div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
							<div class="feature-box">
								<div class="feature-box-icon feature-box-icon-large bg-light mt-1">
									<i class="icons icon-doc text-color-primary text-5"></i>
								</div>
								<div class="feature-box-info">
									<h2 class="font-weight-bold text-color-light text-4 line-height-5 mb-1">HTML5 / CSS3 / JS</h2>
									<p class="text-color-light opacity-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dignissim ante eleifend.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter">
							<div class="feature-box">
								<div class="feature-box-icon feature-box-icon-large bg-light mt-1">
									<i class="icons icon-user text-color-primary text-5"></i>
								</div>
								<div class="feature-box-info">
									<h2 class="font-weight-bold text-color-light text-4 line-height-5 mb-1">ICONS</h2>
									<p class="text-color-light opacity-7">Lorem ipsum dolor sit <span class="alternative-font text-color-light">amet</span>, consectetur adipiscing elit. Praesent consequat pharetra massa.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
							<div class="feature-box">
								<div class="feature-box-icon feature-box-icon-large bg-light mt-1">
									<i class="icons icon-screen-desktop text-color-primary text-6"></i>
								</div>
								<div class="feature-box-info">
									<h2 class="font-weight-bold text-color-light text-4 line-height-5 mb-1">LIGHTBOX</h2>
									<p class="text-color-light opacity-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla condimentum aliquet erat.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
				



			<!-- parallex and dark text -->
			<section class="parallax section section-parallax section-center" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="">
				<div class="container">
						<div class="text-center" style="position: relative;">
							<h3>{{__ ('messages.welcome')}}</h3>
						</div>
					<div class="row justify-content-center">
						<div class="col-lg-8">
							<h4 class="mb-0 text-dark">M PLUS MYANMAR</h4>
							<h5 class="text-dark">(Dark Text)</h5>
							<p class="mb-0">Our group was founded in 2018 by U NAY LIN HTAT (LOUIS), and in addition to school management (language school / IT vocational school), agriculture, livestock, fishery processing, logistics, personnel dispatch, energy import / export, automobile import It is the core company of the Venue 36 Group, which sells and manages restaurants.</p>
						</div>
					</div>
				</div>
			</section>

			<div class="container">
				<div class="heading heading-border heading-middle-border heading-middle-border-center">
					<h2 class="font-weight-normal">Our Group</h2>
				</div>
			</div>

			<!-- Carousel image add -->
			<div class="owl-carousel owl-theme full-width" data-plugin-options="{'items': 5, 'loop': false, 'nav': true, 'dots': false}">
				<div>
					<!-- <a href="portfolio-single-wide-slider.html"> -->
						<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
							<span class="">
								<img src="img/group/MCreation.png" class="img-fluid" style="margin: -6px;" alt="">
														
							</span>
						</span>
					<!-- </a> -->
				</div>
				<div>
					<!-- <a href="portfolio-single-wide-slider.html"> -->
						<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
							<span class="">
								<img src="img/group/zeetrading.png" class="img-fluid" style="margin: -2px;" alt="">
								
							</span>
						</span>
					<!-- </a> -->
				</div>
				<div>
					<a href="portfolio-single-wide-slider.html">
						<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
							<span class="">
								<img src="img/group/seacross.png" class="img-fluid" style="margin: -2px;" alt="">
								
							</span>
						</span>
					</a>
				</div>
				<div>
					<a href="portfolio-single-wide-slider.html">
						<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
							<span class="">
								<img src="img/group/Venue36.png" class="img-fluid" style="margin: -2px;" alt="">
								
							</span>
						</span>
					</a>
				</div>
				<div>
					<a href="portfolio-single-wide-slider.html">
						<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
							<span class="">
								<img src="img/group/seabrother.png" class="img-fluid" style="margin: -2px;" alt="">
								
							</span>
						</span>
					</a>
				</div>
				<div>
					<a href="portfolio-single-wide-slider.html">
						<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
							<span class="">
								<img src="img/group/UniFarm.png" class="img-fluid" style="margin-top: 30px;" alt="">
								
							</span>
						</span>
					</a>
				</div>
				<div>
					<a href="portfolio-single-wide-slider.html">
						<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
							<span class="">
								<img src="img/group/myanFarm.png" class="img-fluid" style="margin-top: 30px;" alt="">
								
							</span>
						</span>
					</a>
				</div>
				<div>
					<a href="portfolio-single-wide-slider.html">
						<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
							<span class="">
								<img src="img/group/MST.png" class="img-fluid" style="margin: -2px;" alt="">
								
							</span>
						</span>
					</a>
				</div>
			</div>
					<div class="row justify-content-center">
						<div class="col-lg-8">
							<h4 class="mb-0 text-dark">M PLUS MYANMAR</h4>
							<h5 class="text-dark">(Dark Text)</h5>
							<p class="mb-0">Our group was founded in 2018 by U NAY LIN HTAT (LOUIS), and in addition to school management (language school / IT vocational school), agriculture, livestock, fishery processing, logistics, personnel dispatch, energy import / export, automobile import It is the core company of the Venue 36 Group, which sells and manages restaurants.</p>
						</div>
					</div>
			

			<div class="container">
				<div class="featured-boxes py-5 mt-5 mb-4">
					<div class="row">
						<div class="col-lg-3 col-sm-6">
							<div class="featured-box featured-box-primary featured-box-effect-1">
								<div class="box-content">
									<i class="icon-featured icons icon-people"></i>
									<h3 class="text-color-primary font-weight-bold text-3 mb-2 mt-3">Loved by Customers</h3>
									<p class="px-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									<p><a href="/" class="text-dark learn-more font-weight-bold text-2">VIEW MORE <i class="fas fa-chevron-right ml-2"></i></a></p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6">
							<div class="featured-box featured-box-dark featured-box-effect-1">
								<div class="box-content">
									<i class="icon-featured icons icon-docs"></i>
									<h3 class="font-weight-bold text-3 mb-2 mt-3">Well Documented</h3>
									<p class="px-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									<p><a href="/" class="text-dark learn-more font-weight-bold text-2">VIEW MORE <i class="fas fa-chevron-right ml-2"></i></a></p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6">
							<div class="featured-box featured-box-primary featured-box-effect-1">
								<div class="box-content">
									<i class="icon-featured icons icon-trophy"></i>
									<h3 class="text-color-primary font-weight-bold text-3 mb-2 mt-3">Winner</h3>
									<p class="px-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									<p><a href="/" class="text-dark learn-more font-weight-bold text-2">VIEW MORE <i class="fas fa-chevron-right ml-2"></i></a></p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6">
							<div class="featured-box featured-box-dark featured-box-effect-1">
								<div class="box-content">
									<i class="icon-featured icons icon-equalizer"></i>
									<h3 class="font-weight-bold text-3 mb-2 mt-3">Customizable</h3>
									<p class="px-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									<p><a href="/" class="text-dark learn-more font-weight-bold text-2">VIEW MORE <i class="fas fa-chevron-right ml-2"></i></a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- youtube video -->
			<!-- <div class="video-container container">
				<iframe class="i-frame object embed" style="max-height: 550px;" src="https://www.youtube.com/embed/MckXq7H3cTA" title="YouTube video player" frameborder="0"  allowfullscreen></iframe>
			</div> -->
				
				
			<div class="container">
				<div class="row pt-5 mt-4">
					<div class="col">
						<h2 class="font-weight-normal text-6 mb-4"><strong class="font-weight-extra-bold">Latest</strong> Posts</h2>
					</div>
				</div>
				<div class="row recent-posts pb-5 mb-4">
					<div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
						<article>
							<div class="row">
								<div class="col-auto pr-0">
									<div class="date">
										<span class="day text-color-dark font-weight-extra-bold">15</span>
										<span class="month text-1">JAN</span>
									</div>
								</div>
								<div class="col pl-1">
									<h4 class="line-height-3 text-4"><a href="blog-post.html" class="text-dark">Lorem ipsum dolor sit amet, consectetur</a></h4>
									<p class="line-height-5 pr-4 mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									<a href="/" class="read-more text-color-dark font-weight-bold text-2">read more <i class="fas fa-chevron-right text-1 ml-1"></i></a>
								</div>
							</div>
						</article>
					</div>
					<div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
						<article>
							<div class="row">
								<div class="col-auto pr-0">
									<div class="date">
										<span class="day text-color-dark font-weight-extra-bold">14</span>
										<span class="month text-1">JAN</span>
									</div>
								</div>
								<div class="col pl-1">
									<h4 class="line-height-3 text-4"><a href="blog-post.html" class="text-dark">Lorem ipsum dolor sit amet, consectetur</a></h4>
									<p class="line-height-5 pr-4 mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									<a href="/" class="read-more text-color-dark font-weight-bold text-2">read more <i class="fas fa-chevron-right text-1 ml-1"></i></a>
								</div>
							</div>
						</article>
					</div>
					<div class="col-md-6 col-lg-3 mb-4 mb-md-0">
						<article>
							<div class="row">
								<div class="col-auto pr-0">
									<div class="date">
										<span class="day text-color-dark font-weight-extra-bold">13</span>
										<span class="month text-1">JAN</span>
									</div>
								</div>
								<div class="col pl-1">
									<h4 class="line-height-3 text-4"><a href="blog-post.html" class="text-dark">Lorem ipsum dolor sit amet, consectetur</a></h4>
									<p class="line-height-5 pr-4 mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									<a href="/" class="read-more text-color-dark font-weight-bold text-2">read more <i class="fas fa-chevron-right text-1 ml-1"></i></a>
								</div>
							</div>
						</article>
					</div>
					<div class="col-md-6 col-lg-3">
						<article>
							<div class="row">
								<div class="col-auto pr-0">
									<div class="date">
										<span class="day text-color-dark font-weight-extra-bold">12</span>
										<span class="month text-1">JAN</span>
									</div>
								</div>
								<div class="col pl-1">
									<h4 class="line-height-3 text-4"><a href="blog-post.html" class="text-dark">Lorem ipsum dolor sit amet, consectetur</a></h4>
									<p class="line-height-5 pr-4 mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									<a href="/" class="read-more text-color-dark font-weight-bold text-2">read more <i class="fas fa-chevron-right text-1 ml-1"></i></a>
								</div>
							</div>
						</article>
					</div>
				</div>
			</div>
		</div>
			
@endsection
