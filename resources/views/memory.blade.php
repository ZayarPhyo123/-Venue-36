@extends('layouts.project')

@section('content')
		<div class="container py-2">	

			<ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'masonry', 'filter': '*'}">
				<!-- <li class="nav-item active" data-option-value="*"><a class="nav-link text-1 text-uppercase active" href="#">Show All</a></li>
				<li class="nav-item" data-option-value=".websites"><a class="nav-link text-1 text-uppercase" href="#">Websites</a></li>
				<li class="nav-item" data-option-value=".logos"><a class="nav-link text-1 text-uppercase" href="#">Logos</a></li>
				<li class="nav-item" data-option-value=".brands"><a class="nav-link text-1 text-uppercase" href="#">Brands</a></li>
				<li class="nav-item" data-option-value=".medias"><a class="nav-link text-1 text-uppercase" href="#">Medias</a></li> -->
			</ul>

			<div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
				<div class="row portfolio-list sort-destination" data-sort-id="portfolio">
					

					<div class="col-md-6 col-lg-4 isotope-item brands">
						<div class="portfolio-item">
							<a href="">
								<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0">
									<span class="border-radius-0">
										<img src="img/content/1.jpg" class="img-fluid border-radius-0" alt="">
										<!-- <span class="thumb-info-title">
											<span class="thumb-info-inner">Presentation</span>
											<span class="thumb-info-type">Brand</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
										</span> -->
									</span>
								</span>
							</a>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 isotope-item logos">
						<div class="portfolio-item">
							<a href="">
								<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0">
									<span class=" border-radius-0">
										<img src="img/content/4b.jpg" class="img-fluid border-radius-0" alt="">
										<!-- <span class="thumb-info-title">
											<span class="thumb-info-inner">Identity</span>
											<span class="thumb-info-type">Logo</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
										</span> -->
									</span>
								</span>
							</a>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 isotope-item websites">
						<div class="portfolio-item">
							<a href="">
								<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0">
									<span class=" border-radius-0">
										<img src="img/content/5.jpg" class="img-fluid border-radius-0" alt="">
										<!-- <span class="thumb-info-title">
											<span class="thumb-info-inner">Porto Screens</span>
											<span class="thumb-info-type">Website</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
										</span> -->
									</span>
								</span>
							</a>
						</div>
					</div>


					<div class="col-md-6 col-lg-4 isotope-item websites">
						<div class="portfolio-item">
							<a href="">
								<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0">
									<span class=" border-radius-0">
										<img src="img/content/7b.jpg" class="img-fluid border-radius-0" alt="">
										<!-- <span class="thumb-info-title">
											<span class="thumb-info-inner">Mobile Mockup</span>
											<span class="thumb-info-type">Website</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
										</span> -->
									</span>
								</span>
							</a>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 isotope-item logos">
						<div class="portfolio-item">
							<a href="">
								<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0">
									<span class=" border-radius-0">
										<img src="img/content/6b.jpg" class="img-fluid border-radius-0" alt="">
										<!-- <span class="thumb-info-title">
											<span class="thumb-info-inner">Three Bottles</span>
											<span class="thumb-info-type">Logo</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
										</span> -->
									</span>
								</span>
							</a>
						</div>
					</div>

					
					


					<!--- htae htarr --->
					<div class="col-md-6 col-lg-4 isotope-item websites">
						<div class="portfolio-item">
							<a href="">
								<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0">
									<span class=" border-radius-0">
										<img src="img/content/8.jpg" class="img-fluid border-radius-0" alt="">
										<!-- <span class="thumb-info-title">
											<span class="thumb-info-inner">Mobile Mockup</span>
											<span class="thumb-info-type">Website</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
										</span> -->
									</span>
								</span>
							</a>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 isotope-item medias">
						<div class="portfolio-item">
							<a href="">
								<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0">
									<span class=" border-radius-0">
										<span class="owl-carousel owl-theme dots-inside m-0" data-plugin-options="{'items': 1, 'margin': 20, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 3000}"><span><img src="img/content/1b.jpg" class="img-fluid border-radius-0" alt=""></span><span><img src="img/content/8b.jpg" class="img-fluid border-radius-0" alt=""></span></span>
										<!-- <span class="thumb-info-title">
											<span class="thumb-info-inner">Porto Watch</span>
											<span class="thumb-info-type">Media</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
										</span> -->
									</span>
								</span>
							</a>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 isotope-item logos">
						<div class="portfolio-item">
							<a href="">
								<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0">
									<span class=" border-radius-0">
										<img src="img/content/8b.jpg" class="img-fluid border-radius-0" alt="">
										<!-- <span class="thumb-info-title">
											<span class="thumb-info-inner">Three Bottles</span>
											<span class="thumb-info-type">Logo</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
										</span> -->
									</span>
								</span>
							</a>
						</div>
					</div>
					<!-- sone wrrrr -->

					<div class="col-md-6 col-lg-4 isotope-item brands">
						<div class="portfolio-item">
							<a href="">
								<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0">
									<span class=" border-radius-0">
										<img src="img/content/9b.jpg" class="img-fluid border-radius-0" alt="">
										<!-- <span class="thumb-info-title">
											<span class="thumb-info-inner">Company T-Shirt</span>
											<span class="thumb-info-type">Brand</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
										</span> -->
									</span>
								</span>
							</a>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 isotope-item websites">
						<div class="portfolio-item">
							<a href="">
								<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0">
									<span class=" border-radius-0">
										<img src="img/content/10b.jpg" class="img-fluid border-radius-0" alt="">
										<!-- <span class="thumb-info-title">
											<span class="thumb-info-inner">Porto Screens</span>
											<span class="thumb-info-type">Website</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
										</span> -->
									</span>
								</span>
							</a>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 isotope-item medias">
						<div class="portfolio-item">
							<a href="">
								<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0">
									<span class=" border-radius-0">
										<img src="img/content/11b.jpg" class="img-fluid border-radius-0" alt="">
										<!-- <span class="thumb-info-title">
											<span class="thumb-info-inner">Porto Label</span>
											<span class="thumb-info-type">Media</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
										</span> -->
									</span>
								</span>
							</a>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 isotope-item logos">
						<div class="portfolio-item">
							<a href="">
								<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0">
									<span class=" border-radius-0">
										<img src="img/content/13b.jpg" class="img-fluid border-radius-0" alt="">
										<!-- <span class="thumb-info-title">
											<span class="thumb-info-inner">Business Folders</span>
											<span class="thumb-info-type">Logo</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
										</span> -->
									</span>
								</span>
							</a>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 isotope-item websites">
						<div class="portfolio-item">
							<a href="">
								<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0">
									<span class=" border-radius-0">
										<img src="img/content/14b.jpg" class="img-fluid border-radius-0" alt="">
										<!-- <span class="thumb-info-title">
											<span class="thumb-info-inner">Tablet Screen</span>
											<span class="thumb-info-type">Website</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
										</span> -->
									</span>
								</span>
							</a>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 isotope-item websites">
						<div class="portfolio-item">
							<a href="">
								<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0">
									<span class=" border-radius-0">
										<img src="img/content/3.jpg" class="img-fluid border-radius-0" alt="">
										<!-- <span class="thumb-info-title">
											<span class="thumb-info-inner">Tablet Screen</span>
											<span class="thumb-info-type">Website</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
										</span> -->
									</span>
								</span>
							</a>
						</div>
					</div>
					
				</div>
			</div>

		</div>
    @endsection
