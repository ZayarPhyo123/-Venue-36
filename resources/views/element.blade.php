@extends('layouts.project')

@section('content')
    
   <div class="container py-2">

					<div class="row">
						<div class="col">

							<div class="row">
								<div class="col">

									<h4 class="mb-0">Single Image</h4>
									<p>Simple popups with different styles.</p>

									<div class="row">
										<div class="col-lg-3">
											<h5 class="text-uppercase mt-4">Default</h5>
											<a class="lightbox" href="img/projects/project.jpg" data-plugin-options="{'type':'image'}">
												<img class="img-fluid" src="img/projects/project.jpg" alt="Project Image">
											</a>
										</div>
										<div class="col-lg-3">
											<h5 class="text-uppercase mt-4">Default with Border</h5>
											<a class="img-thumbnail d-block lightbox" href="img/projects/project.jpg" data-plugin-options="{'type':'image'}">
												<img class="img-fluid" src="img/projects/project.jpg" alt="Project Image">
											</a>
										</div>
										<div class="col-lg-3">
											<h5 class="text-uppercase mt-4">With Icon</h5>
											<a class="img-thumbnail img-thumbnail-no-borders d-block lightbox" href="img/projects/project-4.jpg" data-plugin-options="{'type':'image'}">
												<img class="img-fluid" src="img/projects/project-4.jpg" alt="Project Image">
												<span class="zoom">
													<i class="fas fa-search"></i>
												</span>
											</a>
										</div>
										<div class="col-lg-3">
											<h5 class="text-uppercase mt-4">Hover Effect</h5>
											<a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href="img/projects/project-4.jpg" data-plugin-options="{'type':'image'}">
												<img class="img-fluid" src="img/projects/project-4.jpg" alt="Project Image">
											</a>
										</div>
									</div>

								</div>
							</div>

							<div class="row">
								<div class="col">
									<hr class="solid my-5">
								</div>
							</div>
							
							<div class="row">
								<div class="col">

									<h4>Zoom Image Gallery + Carousel</h4>

									<div class="lightbox" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}, 'mainClass': 'mfp-with-zoom', 'zoom': {'enabled': true, 'duration': 300}}">
										<div class="owl-carousel owl-theme stage-margin" data-plugin-options="{'items': 6, 'margin': 10, 'loop': false, 'nav': true, 'dots': false, 'stagePadding': 40}">
											<div>
												<a class="img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon" href="img/projects/project-1.jpg">
													<img class="img-fluid" src="img/projects/project-1.jpg" alt="Project Image">
												</a>
											</div>
											<div>
												<a class="img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon" href="img/projects/project-2.jpg">
													<img class="img-fluid" src="img/projects/project-2.jpg" alt="Project Image">
												</a>
											</div>
											<div>
												<a class="img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon" href="img/projects/project-3.jpg">
													<img class="img-fluid" src="img/projects/project-3.jpg" alt="Project Image">
												</a>
											</div>
											<div>
												<a class="img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon" href="img/projects/project-4.jpg">
													<img class="img-fluid" src="img/projects/project-4.jpg" alt="Project Image">
												</a>
											</div>
											<div>
												<a class="img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon" href="img/projects/project-5.jpg">
													<img class="img-fluid" src="img/projects/project-5.jpg" alt="Project Image">
												</a>
											</div>
											<div>
												<a class="img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon" href="img/projects/project-6.jpg">
													<img class="img-fluid" src="img/projects/project-6.jpg" alt="Project Image">
												</a>
											</div>
											<div>
												<a class="img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon" href="img/projects/project-7.jpg">
													<img class="img-fluid" src="img/projects/project-7.jpg" alt="Project Image">
												</a>
											</div>
											<div>
												<a class="img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon" href="img/projects/project.jpg">
													<img class="img-fluid" src="img/projects/project.jpg" alt="Project Image">
												</a>
											</div>
										</div>
									</div>
								</div>

							</div>

							<div class="row">
								<div class="col">
									<hr class="solid my-5">
								</div>
							</div>
						</div>
					</div>

				</div>
		
@endsection