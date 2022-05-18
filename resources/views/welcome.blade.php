@extends('layouts.project')

@section('content')

	<style>
	.owl-dots{
		display: none !important;
	}
	</style>
		<div role="main" class="main">
			
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

			<div class="owl-carousel owl-theme"  style="max-height 799px;" data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut','autoplay': true,'autoplayTimeout': 4000,'data-touch' : false }">
				<div>
					<img alt="" style="object-fit: fit;" class="img-fluid rounded" src="img/content/1.jpg">
				</div>
				<!-- <div>
					<img alt="" style="object-fit: fit;" class="img-fluid rounded" src="img/content/2.jpg">
				</div> -->
				<div>
					<img alt="" style="object-fit: fit;" class="img-fluid rounded" src="img/content/3.jpg">
				</div>
				<div>
					<img alt="" style="object-fit: fit;" class="img-fluid rounded" src="img/content/4.jpg">
				</div>
			</div>
			
			<div class="home-intro light border border-bottom-0 mb-0">								
				<div class="container">
					<div class="align-items-center text-center">
						<div class="">
							<p class="font-weight-bold text-color-dark">
								The fastest way to grow your business with the leader in <span class="highlighted-word highlighted-word-animation-1 text-color-primary font-weight-semibold text-5">Technology</span>
								<span>Check out our options and features included.</span>
							</p>
						</div>
						<br>
						<div class="">
							<div class="get-started ">
								<a href="#" class="btn btn-primary btn-lg text-3 font-weight-semibold btn-py-2 px-4">Get Started Now</a>
								<div class="learn-more">or <a href="index.html" class="font-weight-bold">learn more.</a></div>
							</div>
						</div>
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
							<h4 class="mb-0 text-dark">Parallax Section</h4>
							<h5 class="text-dark">(Dark Text)</h5>
							<p class="mb-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. <br>Nulla consequat massa quis enim.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.Aenean vulputate eleifend tellus.</p>
						</div>
					</div>
				</div>
			</section>

			<div class="container">
				<div class="heading heading-border heading-middle-border heading-middle-border-center">
					<h2 class="font-weight-normal">Heading <strong class="font-weight-extra-bold">H2</strong></h2>
				</div>
			</div>

			<!-- Carousel image add -->
			<div class="owl-carousel owl-theme full-width" data-plugin-options="{'items': 5, 'loop': false, 'nav': true, 'dots': false}">
				<div>
					<a href="portfolio-single-wide-slider.html">
						<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
							<span class="">
								<img src="img/projects/project.jpg" class="img-fluid" alt="">
														
							</span>
						</span>
					</a>
				</div>
				<div>
					<a href="portfolio-single-wide-slider.html">
						<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
							<span class="">
								<img src="img/projects/project-2.jpg" class="img-fluid" alt="">
								
							</span>
						</span>
					</a>
				</div>
				<div>
					<a href="portfolio-single-wide-slider.html">
						<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
							<span class="">
								<img src="img/projects/project-4.jpg" class="img-fluid" alt="">
								
							</span>
						</span>
					</a>
				</div>
				<div>
					<a href="portfolio-single-wide-slider.html">
						<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
							<span class="">
								<img src="img/projects/project-5.jpg" class="img-fluid" alt="">
								
							</span>
						</span>
					</a>
				</div>
				<div>
					<a href="portfolio-single-wide-slider.html">
						<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
							<span class="">
								<img src="img/projects/project-6.jpg" class="img-fluid" alt="">
								
							</span>
						</span>
					</a>
				</div>
				<div>
					<a href="portfolio-single-wide-slider.html">
						<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
							<span class="">
								<img src="img/projects/project.jpg" class="img-fluid" alt="">
								
							</span>
						</span>
					</a>
				</div>
				<div>
					<a href="portfolio-single-wide-slider.html">
						<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
							<span class="">
								<img src="img/projects/project-4.jpg" class="img-fluid" alt="">
								
							</span>
						</span>
					</a>
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
			<div class="video-container container">
				<iframe class="i-frame object embed" style="max-height: 550px;" src="https://www.youtube.com/embed/MckXq7H3cTA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
				
				
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
