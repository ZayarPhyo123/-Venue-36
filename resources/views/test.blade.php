@extends('layouts.project')

@section('content')
<div class="body">
			<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">
				<div class="header-body border-top-0">
					<div class="header-top">
						<div class="container">
							<div class="header-row py-2">
								<div class="header-column justify-content-start">
									<div class="header-row">
										<nav class="header-nav-top">
											<ul class="nav nav-pills">
												<li class="nav-item nav-item-anim-icon d-none d-md-block">
													<a class="nav-link pl-0" href="about-us.html"><i class="fas fa-angle-right"></i> About Us</a>
												</li>
												<li class="nav-item nav-item-anim-icon d-none d-md-block">
													<a class="nav-link" href="contact-us.html"><i class="fas fa-angle-right"></i> Contact Us</a>
												</li>
												<li class="nav-item dropdown nav-item-left-border d-none d-sm-block nav-item-left-border-remove nav-item-left-border-md-show">
													<a class="nav-link" href="#" role="button" id="dropdownLanguage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														<img src="img/blank.gif" class="flag flag-us" alt="English" /> English
														<i class="fas fa-angle-down"></i>
													</a>
													<div class="dropdown-menu" aria-labelledby="dropdownLanguage">
														<a class="dropdown-item" href="#"><img src="img/blank.gif" class="flag flag-us" alt="English" /> English</a>
														<a class="dropdown-item" href="#"><img src="img/blank.gif" class="flag flag-es" alt="English" /> Español</a>
														<a class="dropdown-item" href="#"><img src="img/blank.gif" class="flag flag-fr" alt="English" /> Française</a>
													</div>
												</li>
												<li class="nav-item nav-item-left-border nav-item-left-border-remove nav-item-left-border-sm-show">
													<span class="ws-nowrap"><i class="fas fa-phone"></i> (123) 456-789</span>
												</li>
											</ul>
										</nav>
									</div>
								</div>
								<div class="header-column justify-content-end">
									<div class="header-row">
										<ul class="header-social-icons social-icons d-none d-sm-block social-icons-clean">
											<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
											<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
											<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
										</ul>
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
											<img alt="Porto" width="100" height="48" data-sticky-width="82" data-sticky-height="40" src="img/logo.png">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<div class="header-nav header-nav-line header-nav-top-line header-nav-top-line-with-border order-2 order-lg-1">
										<div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle" href="index.html">
															Home
														</a>
														<ul class="dropdown-menu">
															<li>
																<a class="dropdown-item" href="index.html">
																	Landing Page
																</a>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">Classic</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="index-classic.html" data-thumb-preview="img/previews/preview-classic.jpg">Classic - Original</a></li>
																	<li><a class="dropdown-item" href="index-classic-color.html" data-thumb-preview="img/previews/preview-classic-color.jpg">Classic - Color</a></li>
																	<li><a class="dropdown-item" href="index-classic-light.html" data-thumb-preview="img/previews/preview-classic-light.jpg">Classic - Light</a></li>
																	<li><a class="dropdown-item" href="index-classic-video.html" data-thumb-preview="img/previews/preview-classic-video.jpg">Classic - Video</a></li>
																	<li><a class="dropdown-item" href="index-classic-video-light.html" data-thumb-preview="img/previews/preview-classic-video-light.jpg">Classic - Video - Light</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">Corporate <span class="tip tip-dark">hot</span></a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="index-corporate.html" data-thumb-preview="img/previews/preview-corporate.jpg">Corporate - Version 1</a></li>
																	<li><a class="dropdown-item" href="index-corporate-2.html" data-thumb-preview="img/previews/preview-corporate-2.jpg">Corporate - Version 2</a></li>
																	<li><a class="dropdown-item" href="index-corporate-3.html" data-thumb-preview="img/previews/preview-corporate-3.jpg">Corporate - Version 3</a></li>
																	<li><a class="dropdown-item" href="index-corporate-4.html" data-thumb-preview="img/previews/preview-corporate-4.jpg">Corporate - Version 4</a></li>
																	<li><a class="dropdown-item" href="index-corporate-5.html" data-thumb-preview="img/previews/preview-corporate-5.jpg">Corporate - Version 5</a></li>
																	<li><a class="dropdown-item" href="index-corporate-6.html" data-thumb-preview="img/previews/preview-corporate-6.jpg">Corporate - Version 6</a></li>
																	<li><a class="dropdown-item" href="index-corporate-7.html" data-thumb-preview="img/previews/preview-corporate-7.jpg">Corporate - Version 7</a></li>
																	<li><a class="dropdown-item" href="index-corporate-8.html" data-thumb-preview="img/previews/preview-corporate-8.jpg">Corporate - Version 8</a></li>
																	<li><a class="dropdown-item" href="index-corporate-9.html" data-thumb-preview="img/previews/preview-corporate-9.jpg">Corporate - Version 9</a></li>
																	<li><a class="dropdown-item" href="index-corporate-10.html" data-thumb-preview="img/previews/preview-corporate-10.jpg">Corporate - Version 10</a></li>
																	<li><a class="dropdown-item" href="index-corporate-11.html" data-thumb-preview="img/previews/preview-corporate-11.jpg">Corporate - Version 11</a></li>
																	<li><a class="dropdown-item" href="index-corporate-12.html" data-thumb-preview="img/previews/preview-corporate-12.jpg">Corporate - Version 12</a></li>
																	<li><a class="dropdown-item" href="index-corporate-13.html" data-thumb-preview="img/previews/preview-corporate-13.jpg">Corporate - Version 13</a></li>
																	<li><a class="dropdown-item" href="index-corporate-14.html" data-thumb-preview="img/previews/preview-corporate-14.jpg">Corporate - Version 14</a></li>
																	<li><a class="dropdown-item" href="index-corporate-15.html" data-thumb-preview="img/previews/preview-corporate-15.jpg">Corporate - Version 15</a></li>
																	<li><a class="dropdown-item" href="index-corporate-16.html" data-thumb-preview="img/previews/preview-corporate-16.jpg">Corporate - Version 16</a></li>
																	<li><a class="dropdown-item" href="index-corporate-17.html" data-thumb-preview="img/previews/preview-corporate-17.jpg">Corporate - Version 17</a></li>
																	<li><a class="dropdown-item" href="index-corporate-18.html" data-thumb-preview="img/previews/preview-corporate-18.jpg">Corporate - Version 18</a></li>
																	<li><a class="dropdown-item" href="index-corporate-19.html" data-thumb-preview="img/previews/preview-corporate-19.jpg">Corporate - Version 19</a></li>
																	<li><a class="dropdown-item" href="index-corporate-20.html" data-thumb-preview="img/previews/preview-corporate-20.jpg">Corporate - Version 20</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">Portfolio</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="index-portfolio.html" data-thumb-preview="img/previews/preview-portfolio.jpg">Portfolio - Version 1</a></li>
																	<li><a class="dropdown-item" href="index-portfolio-2.html" data-thumb-preview="img/previews/preview-portfolio-2.jpg">Portfolio - Version 2</a></li>
																	<li><a class="dropdown-item" href="index-portfolio-3.html" data-thumb-preview="img/previews/preview-portfolio-3.jpg">Portfolio - Version 3</a></li>
																	<li><a class="dropdown-item" href="index-portfolio-4.html" data-thumb-preview="img/previews/preview-portfolio-4.jpg">Portfolio - Version 4</a></li>
																	<li><a class="dropdown-item" href="index-portfolio-5.html" data-thumb-preview="img/previews/preview-portfolio-5.jpg">Portfolio - Version 5</a></li>
																</ul>
															</li>		
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">Blog</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="index-blog.html" data-thumb-preview="img/previews/preview-blog.jpg">Blog - Version 1</a></li>
																	<li><a class="dropdown-item" href="index-blog-2.html" data-thumb-preview="img/previews/preview-blog-2.jpg">Blog - Version 2</a></li>
																	<li><a class="dropdown-item" href="index-blog-3.html" data-thumb-preview="img/previews/preview-blog-3.jpg">Blog - Version 3</a></li>
																	<li><a class="dropdown-item" href="index-blog-4.html" data-thumb-preview="img/previews/preview-blog-4.jpg">Blog - Version 4</a></li>
																	<li><a class="dropdown-item" href="index-blog-5.html" data-thumb-preview="img/previews/preview-blog-5.jpg">Blog - Version 5</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">One Page</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="index-one-page.html" data-thumb-preview="img/previews/preview-one-page.jpg">One Page Original</a></li>
																</ul>
															</li>
														</ul>
													</li>
													<li class="dropdown dropdown-mega">
														<a class="dropdown-item dropdown-toggle active" href="elements.html">
															Elements
														</a>
														<ul class="dropdown-menu">
															<li>
																<div class="dropdown-mega-content">
																	<div class="row">
																		<div class="col-lg-3">
																			<span class="dropdown-mega-sub-title">Elements 1</span>
																			<ul class="dropdown-mega-sub-nav">
																				<li><a class="dropdown-item" href="elements-accordions.html">Accordions</a></li>
																				<li><a class="dropdown-item" href="elements-toggles.html">Toggles</a></li>
																				<li><a class="dropdown-item" href="elements-tabs.html">Tabs</a></li>
																				<li><a class="dropdown-item" href="elements-icons.html">Icons</a></li>
																				<li><a class="dropdown-item" href="elements-icon-boxes.html">Icon Boxes</a></li>
																				<li><a class="dropdown-item" href="elements-carousels.html">Carousels</a></li>
																				<li><a class="dropdown-item" href="elements-modals.html">Modals</a></li>
																				<li><a class="dropdown-item" href="elements-lightboxes.html">Lightboxes</a></li>
																				<li><a class="dropdown-item" href="elements-word-rotator.html">Word Rotator</a></li>
																				<li><a class="dropdown-item" href="elements-before-after.html">Before / After</a></li>
																				<li><a class="dropdown-item" href="elements-360-image-viewer.html">360º Image Viewer</a></li>
																			</ul>
																		</div>
																		<div class="col-lg-3">
																			<span class="dropdown-mega-sub-title">Elements 2</span>
																			<ul class="dropdown-mega-sub-nav">
																				<li><a class="dropdown-item" href="elements-buttons.html">Buttons</a></li>
																				<li><a class="dropdown-item" href="elements-badges.html">Badges</a></li>
																				<li><a class="dropdown-item" href="elements-lists.html">Lists</a></li>
																				<li><a class="dropdown-item" href="elements-cards.html">Cards</a></li>
																				<li><a class="dropdown-item" href="elements-image-gallery.html">Image Gallery</a></li>
																				<li><a class="dropdown-item" href="elements-image-frames.html">Image Frames</a></li>
																				<li><a class="dropdown-item" href="elements-image-hotspots.html">Image Hotspots</a></li>
																				<li><a class="dropdown-item" href="elements-testimonials.html">Testimonials</a></li>
																				<li><a class="dropdown-item" href="elements-blockquotes.html">Blockquotes</a></li>							
																				<li><a class="dropdown-item" href="elements-sticky-elements.html">Sticky Elements</a></li>
																			</ul>
																		</div>
																		<div class="col-lg-3">
																			<span class="dropdown-mega-sub-title">Elements 3</span>
																			<ul class="dropdown-mega-sub-nav">
																				<li><a class="dropdown-item" href="elements-typography.html">Typography</a></li>
																				<li><a class="dropdown-item" href="elements-call-to-action.html">Call to Action</a></li>
																				<li><a class="dropdown-item" href="elements-pricing-tables.html">Pricing Tables</a></li>
																				<li><a class="dropdown-item" href="elements-tables.html">Tables</a></li>
																				<li><a class="dropdown-item" href="elements-progressbars.html">Progress Bars</a></li>
																				<li><a class="dropdown-item" href="elements-process.html">Process</a></li>
																				<li><a class="dropdown-item" href="elements-counters.html">Counters</a></li>
																				<li><a class="dropdown-item" href="elements-countdowns.html">Countdowns</a></li>
																				<li><a class="dropdown-item" href="elements-sections-parallax.html">Sections &amp; Parallax</a></li>
																				<li><a class="dropdown-item" href="elements-tooltips-popovers.html">Tooltips &amp; Popovers</a></li>							
																			</ul>
																		</div>
																		<div class="col-lg-3">
																			<span class="dropdown-mega-sub-title">Elements 4</span>
																			<ul class="dropdown-mega-sub-nav">
																				<li><a class="dropdown-item" href="elements-headings.html">Headings</a></li>
																				<li><a class="dropdown-item" href="elements-dividers.html">Dividers</a></li>
																				<li><a class="dropdown-item" href="elements-animations.html">Animations</a></li>
																				<li><a class="dropdown-item" href="elements-medias.html">Medias</a></li>
																				<li><a class="dropdown-item" href="elements-maps.html">Maps</a></li>
																				<li><a class="dropdown-item" href="elements-arrows.html">Arrows</a></li>
																				<li><a class="dropdown-item" href="elements-star-ratings.html">Star Ratings</a></li>
																				<li><a class="dropdown-item" href="elements-alerts.html">Alerts</a></li>
																				<li><a class="dropdown-item" href="elements-posts.html">Posts</a></li>
																				<li><a class="dropdown-item" href="elements-forms-basic-contact.html">Forms</a></li>
																			</ul>
																		</div>
																	</div>
																</div>
															</li>
														</ul>
													</li>
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle" href="#">
															Features
														</a>
														<ul class="dropdown-menu">
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">Headers</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="feature-headers-overview.html">Overview</a></li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="#">Classic</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="feature-headers-classic.html">Classic</a></li>
																			<li><a class="dropdown-item" href="feature-headers-classic-language-dropdown.html">Classic + Language Dropdown</a></li>
																			<li><a class="dropdown-item" href="feature-headers-classic-big-logo.html">Classic + Big Logo</a></li>
																		</ul>
																	</li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="#">Flat</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="feature-headers-flat.html">Flat</a></li>
																			<li><a class="dropdown-item" href="feature-headers-flat-top-bar.html">Flat + Top Bar</a></li>
																			<li><a class="dropdown-item" href="feature-headers-flat-top-bar-top-borders.html">Flat + Top Bar + Top Border</a></li>
																			<li><a class="dropdown-item" href="feature-headers-flat-colored-top-bar.html">Flat + Colored Top Bar</a></li>
																			<li><a class="dropdown-item" href="feature-headers-flat-borders.html">Flat + Borders</a></li>
																		</ul>
																	</li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="#">Center</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="feature-headers-center.html">Center</a></li>
																			<li><a class="dropdown-item" href="feature-headers-center-double-navs.html">Center + Double Navs</a></li>
																			<li><a class="dropdown-item" href="feature-headers-center-nav-buttons.html">Center + Nav + Buttons</a></li>
																			<li><a class="dropdown-item" href="feature-headers-center-below-slider.html">Center Below Slider</a></li>
																		</ul>
																	</li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="#">Floating</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="feature-headers-floating-bar.html">Floating Bar</a></li>
																			<li><a class="dropdown-item" href="feature-headers-floating-icons.html">Floating Icons</a></li>
																		</ul>
																	</li>
																	<li><a class="dropdown-item" href="feature-headers-below-slider.html">Below Slider</a></li>
																	<li><a class="dropdown-item" href="feature-headers-full-video.html">Full Video</a></li>
																	<li><a class="dropdown-item" href="feature-headers-narrow.html">Narrow</a></li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="#">Sticky</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="feature-headers-sticky-shrink.html">Sticky Shrink</a></li>
																			<li><a class="dropdown-item" href="feature-headers-sticky-static.html">Sticky Static</a></li>
																			<li><a class="dropdown-item" href="feature-headers-sticky-change-logo.html">Sticky Change Logo</a></li>
																			<li><a class="dropdown-item" href="feature-headers-sticky-reveal.html">Sticky Reveal</a></li>
																		</ul>
																	</li>				
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="#">Transparent</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="feature-headers-transparent-light.html">Transparent Light</a></li>
																			<li><a class="dropdown-item" href="feature-headers-transparent-dark.html">Transparent Dark</a></li>
																			<li><a class="dropdown-item" href="feature-headers-transparent-light-bottom-border.html">Transparent Light + Bottom Border</a></li>
																			<li><a class="dropdown-item" href="feature-headers-transparent-dark-bottom-border.html">Transparent Dark + Bottom Border</a></li>
																			<li><a class="dropdown-item" href="feature-headers-transparent-bottom-slider.html">Transparent Bottom Slider</a></li>
																			<li><a class="dropdown-item" href="feature-headers-semi-transparent-light.html">Semi Transparent Light</a></li>
																			<li><a class="dropdown-item" href="feature-headers-semi-transparent-dark.html">Semi Transparent Dark</a></li>
																			<li><a class="dropdown-item" href="feature-headers-semi-transparent-bottom-slider.html">Semi Transparent Bottom Slider</a></li>
																			<li><a class="dropdown-item" href="feature-headers-semi-transparent-top-bar-borders.html">Semi Transparent + Top Bar + Borders</a></li>
																		</ul>
																	</li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="#">Full Width</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="feature-headers-full-width.html">Full Width</a></li>
																			<li><a class="dropdown-item" href="feature-headers-full-width-borders.html">Full Width + Borders</a></li>
																			<li><a class="dropdown-item" href="feature-headers-full-width-transparent-light.html">Full Width Transparent Light</a></li>
																			<li><a class="dropdown-item" href="feature-headers-full-width-transparent-dark.html">Full Width Transparent Dark</a></li>
																			<li><a class="dropdown-item" href="feature-headers-full-width-semi-transparent-light.html">Full Width Semi Transparent Light</a></li>
																			<li><a class="dropdown-item" href="feature-headers-full-width-semi-transparent-dark.html">Full Width Semi Transparent Dark</a></li>
																		</ul>
																	</li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="#">Navbar</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="feature-headers-navbar.html">Navbar</a></li>
																			<li><a class="dropdown-item" href="feature-headers-navbar-full.html">Navbar Full</a></li>
																			<li><a class="dropdown-item" href="feature-headers-navbar-pills.html">Navbar Pills</a></li>
																			<li><a class="dropdown-item" href="feature-headers-navbar-divisors.html">Navbar Divisors</a></li>
																			<li><a class="dropdown-item" href="feature-headers-navbar-icons-search.html">Nav Bar + Icons + Search</a></li>
																		</ul>
																	</li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="#">Side Header</a>
																		<ul class="dropdown-menu">
																			<li class="dropdown-submenu">
																				<a class="dropdown-item" href="#">Side Header Left</a>
																				<ul class="dropdown-menu">
																					<li><a class="dropdown-item" href="feature-headers-side-header-left-dropdown.html">Dropdown</a></li>
																					<li><a class="dropdown-item" href="feature-headers-side-header-left-expand.html">Expand</a></li>
																					<li><a class="dropdown-item" href="feature-headers-side-header-left-columns.html">Columns</a></li>
																					<li><a class="dropdown-item" href="feature-headers-side-header-left-slide.html">Slide</a></li>
																					<li><a class="dropdown-item" href="feature-headers-side-header-left-semi-transparent.html">Semi Transparent</a></li>
																					<li><a class="dropdown-item" href="feature-headers-side-header-left-dark.html">Dark</a></li>
																				</ul>
																			</li>
																			<li class="dropdown-submenu">
																				<a class="dropdown-item" href="#">Side Header Right</a>
																				<ul class="dropdown-menu">
																					<li><a class="dropdown-item" href="feature-headers-side-header-right-dropdown.html">Dropdown</a></li>
																					<li><a class="dropdown-item" href="feature-headers-side-header-right-expand.html">Expand</a></li>
																					<li><a class="dropdown-item" href="feature-headers-side-header-right-columns.html">Columns</a></li>
																					<li><a class="dropdown-item" href="feature-headers-side-header-right-slide.html">Slide</a></li>
																					<li><a class="dropdown-item" href="feature-headers-side-header-right-semi-transparent.html">Semi Transparent</a></li>
																					<li><a class="dropdown-item" href="feature-headers-side-header-right-dark.html">Dark</a></li>
																				</ul>
																			</li>
																			<li class="dropdown-submenu">
																				<a class="dropdown-item" href="#">Side Header Offcanvas</a>
																				<ul class="dropdown-menu">
																					<li><a class="dropdown-item" href="feature-headers-side-header-offcanvas-push.html">Push</a></li>
																					<li><a class="dropdown-item" href="feature-headers-side-header-offcanvas-slide.html">Slide</a></li>
																				</ul>
																			</li>
																			<li><a class="dropdown-item" href="feature-headers-side-header-narrow-bar.html">Side Header Narrow Bar</a></li>
																		</ul>
																	</li>
																	<li><a class="dropdown-item" href="feature-headers-sign-in-sign-up.html">Sign In / Sign Up</a></li>
																	<li><a class="dropdown-item" href="feature-headers-logged.html">Logged</a></li>
																	<li><a class="dropdown-item" href="feature-headers-mini-cart.html">Mini Cart</a></li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="#">Search Styles</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="feature-headers-search-simple-input.html">Simple Input</a></li>
																			<li><a class="dropdown-item" href="feature-headers-search-simple-input-reveal.html">Simple Input Reveal</a></li>
																			<li><a class="dropdown-item" href="feature-headers-search-dropdown.html">Dropdown</a></li>
																			<li><a class="dropdown-item" href="feature-headers-search-big-input-hidden.html">Big Input Hidden</a></li>
																			<li><a class="dropdown-item" href="feature-headers-search-full-screen.html">Full Screen</a></li>
																		</ul>
																	</li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="#">Extra</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="feature-headers-extra-big-icon.html">Big Icon</a></li>
																			<li><a class="dropdown-item" href="feature-headers-extra-big-icons-top.html">Big Icons Top</a></li>
																			<li><a class="dropdown-item" href="feature-headers-extra-button.html">Button</a></li>
																			<li><a class="dropdown-item" href="feature-headers-extra-background-color.html">Background Color</a></li>
																		</ul>
																	</li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">Navigations</a>
																<ul class="dropdown-menu">
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="#">Pills</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="feature-navigations-pills.html">Pills</a></li>
																			<li><a class="dropdown-item" href="feature-navigations-pills-arrows.html">Pills + Arrows</a></li>
																			<li><a class="dropdown-item" href="feature-navigations-pills-dark-text.html">Pills Dark Text</a></li>
																			<li><a class="dropdown-item" href="feature-navigations-pills-color-dropdown.html">Pills Color Dropdown</a></li>
																			<li><a class="dropdown-item" href="feature-navigations-pills-square.html">Pills Square</a></li>
																			<li><a class="dropdown-item" href="feature-navigations-pills-rounded.html">Pills Rounded</a></li>
																		</ul>
																	</li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="#">Stripes</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="feature-navigations-stripe.html">Stripe</a></li>
																			<li><a class="dropdown-item" href="feature-navigations-stripe-dark-text.html">Stripe Dark Text</a></li>
																			<li><a class="dropdown-item" href="feature-navigations-stripe-color-dropdown.html">Stripe Color Dropdown</a></li>
																		</ul>
																	</li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="#">Hover Effects</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="feature-navigations-hover-top-line.html">Top Line</a></li>
																			<li><a class="dropdown-item" href="feature-navigations-hover-top-line-animated.html">Top Line Animated</a></li>
																			<li><a class="dropdown-item" href="feature-navigations-hover-top-line-color-dropdown.html">Top Line Color Dropdown</a></li>
																			<li><a class="dropdown-item" href="feature-navigations-hover-bottom-line.html">Bottom Line</a></li>
																			<li><a class="dropdown-item" href="feature-navigations-hover-bottom-line-animated.html">Bottom Line Animated</a></li>
																			<li><a class="dropdown-item" href="feature-navigations-hover-slide.html">Slide</a></li>
																			<li><a class="dropdown-item" href="feature-navigations-hover-sub-title.html">Sub Title</a></li>
																			<li><a class="dropdown-item" href="feature-navigations-hover-line-under-text.html">Line Under Text</a></li>
																		</ul>
																	</li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="#">Vertical</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="feature-navigations-vertical-dropdown.html">Dropdown</a></li>
																			<li><a class="dropdown-item" href="feature-navigations-vertical-expand.html">Expand</a></li>
																			<li><a class="dropdown-item" href="feature-navigations-vertical-columns.html">Columns</a></li>
																			<li><a class="dropdown-item" href="feature-navigations-vertical-slide.html">Slide</a></li>
																		</ul>
																	</li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="#">Hamburguer</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="feature-navigations-hamburguer-sidebar.html">Sidebar</a></li>
																			<li><a class="dropdown-item" href="feature-navigations-hamburguer-overlay.html">Overlay</a></li>
																		</ul>
																	</li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="#">Dropdown Styles</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="feature-navigations-dropdowns-dark.html">Dark</a></li>
																			<li><a class="dropdown-item" href="feature-navigations-dropdowns-light.html">Light</a></li>
																			<li><a class="dropdown-item" href="feature-navigations-dropdowns-colors.html">Colors</a></li>
																			<li><a class="dropdown-item" href="feature-navigations-dropdowns-top-line.html">Top Line</a></li>
																			<li><a class="dropdown-item" href="feature-navigations-dropdowns-square.html">Square</a></li>
																			<li><a class="dropdown-item" href="feature-navigations-dropdowns-arrow.html">Arrow Dropdown</a></li>
																			<li><a class="dropdown-item" href="feature-navigations-dropdowns-arrow-center.html">Arrow Center Dropdown</a></li>
																			<li><a class="dropdown-item" href="feature-navigations-dropdowns-modern-light.html">Modern Light</a></li>
																			<li><a class="dropdown-item" href="feature-navigations-dropdowns-modern-dark.html">Modern Dark</a></li>
																		</ul>
																	</li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="#">Dropdown Effects</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="feature-navigations-dropdowns-effect-no-effect.html">No Effect</a></li>
																			<li><a class="dropdown-item" href="feature-navigations-dropdowns-effect-opacity.html">Opacity</a></li>
																			<li><a class="dropdown-item" href="feature-navigations-dropdowns-effect-move-to-top.html">Move To Top</a></li>
																			<li><a class="dropdown-item" href="feature-navigations-dropdowns-effect-move-to-bottom.html">Move To Bottom</a></li>
																			<li><a class="dropdown-item" href="feature-navigations-dropdowns-effect-move-to-right.html">Move To Right</a></li>
																			<li><a class="dropdown-item" href="feature-navigations-dropdowns-effect-move-to-left.html">Move To Left</a></li>
																		</ul>
																	</li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="#">Font Styles</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="feature-navigations-font-small.html">Small</a></li>
																			<li><a class="dropdown-item" href="feature-navigations-font-medium.html">Medium</a></li>
																			<li><a class="dropdown-item" href="feature-navigations-font-large.html">Large</a></li>
																			<li><a class="dropdown-item" href="feature-navigations-font-alternative.html">Alternative</a></li>
																		</ul>
																	</li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="#">Icons</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="feature-navigations-icons.html">Icons</a></li>
																			<li><a class="dropdown-item" href="feature-navigations-icons-float-icons.html">Float Icons</a></li>
																		</ul>
																	</li>
																	<li><a class="dropdown-item" href="feature-navigations-sub-title.html">Sub Title</a></li>
																	<li><a class="dropdown-item" href="feature-navigations-divisors.html">Divisors</a></li>
																	<li><a class="dropdown-item" href="feature-navigations-logo-between.html">Logo Between</a></li>
																	<li><a class="dropdown-item" href="feature-navigations-one-page.html">One Page Nav</a></li>
																	<li><a class="dropdown-item" href="feature-navigations-click-to-open.html">Click To Open</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">Page Headers</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="feature-page-headers-overview.html">Overview</a></li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="#">Classic</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="feature-page-headers-classic-small.html">Small</a></li>				
																			<li><a class="dropdown-item" href="feature-page-headers-classic-medium.html">Medium</a></li>				
																			<li><a class="dropdown-item" href="feature-page-headers-classic-large.html">Large</a></li>
																		</ul>
																	</li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="#">Modern</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="feature-page-headers-modern-small.html">Small</a></li>				
																			<li><a class="dropdown-item" href="feature-page-headers-modern-medium.html">Medium</a></li>				
																			<li><a class="dropdown-item" href="feature-page-headers-modern-large.html">Large</a></li>
																		</ul>
																	</li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="#">Colors</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="feature-page-headers-colors-primary.html">Primary</a></li>				
																			<li><a class="dropdown-item" href="feature-page-headers-colors-secondary.html">Secondary</a></li>				
																			<li><a class="dropdown-item" href="feature-page-headers-colors-tertiary.html">Tertiary</a></li>				
																			<li><a class="dropdown-item" href="feature-page-headers-colors-quaternary.html">Quaternary</a></li>				
																			<li><a class="dropdown-item" href="feature-page-headers-colors-light.html">Light</a></li>				
																			<li><a class="dropdown-item" href="feature-page-headers-colors-dark.html">Dark</a></li>
																		</ul>
																	</li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="#">Title Position</a>
																		<ul class="dropdown-menu">
																			<li class="dropdown-submenu">
																				<a class="dropdown-item" href="#">Left</a>
																				<ul class="dropdown-menu">
																					<li><a class="dropdown-item" href="feature-page-headers-title-position-left-small.html">Small</a></li>				
																					<li><a class="dropdown-item" href="feature-page-headers-title-position-left-medium.html">Medium</a></li>				
																					<li><a class="dropdown-item" href="feature-page-headers-title-position-left-large.html">Large</a></li>
																				</ul>
																			</li>
																			<li class="dropdown-submenu">
																				<a class="dropdown-item" href="#">Right</a>
																				<ul class="dropdown-menu">
																					<li><a class="dropdown-item" href="feature-page-headers-title-position-right-small.html">Small</a></li>				
																					<li><a class="dropdown-item" href="feature-page-headers-title-position-right-medium.html">Medium</a></li>				
																					<li><a class="dropdown-item" href="feature-page-headers-title-position-right-large.html">Large</a></li>
																				</ul>
																			</li>
																			<li class="dropdown-submenu">
																				<a class="dropdown-item" href="#">Center</a>
																				<ul class="dropdown-menu">
																					<li><a class="dropdown-item" href="feature-page-headers-title-position-center-small.html">Small</a></li>				
																					<li><a class="dropdown-item" href="feature-page-headers-title-position-center-medium.html">Medium</a></li>				
																					<li><a class="dropdown-item" href="feature-page-headers-title-position-center-large.html">Large</a></li>
																				</ul>
																			</li>
																		</ul>
																	</li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="#">Background</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="feature-page-headers-background-fixed.html">Fixed</a></li>		
																			<li><a class="dropdown-item" href="feature-page-headers-background-parallax.html">Parallax</a></li>
																			<li><a class="dropdown-item" href="feature-page-headers-background-video.html">Video</a></li>			
																			<li><a class="dropdown-item" href="feature-page-headers-background-transparent-header.html">Transparent Header</a></li>			
																			<li><a class="dropdown-item" href="feature-page-headers-background-pattern.html">Pattern</a></li>			
																			<li><a class="dropdown-item" href="feature-page-headers-background-overlay.html">Overlay</a></li>			
																			<li><a class="dropdown-item" href="feature-page-headers-background-clean.html">Clean (No Background)</a></li>	
																		</ul>
																	</li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="#">Extra</a>
																		<ul class="dropdown-menu">
																			<li class="dropdown-submenu">
																				<a class="dropdown-item" href="#">Breadcrumb</a>
																				<ul class="dropdown-menu">
																					<li><a class="dropdown-item" href="feature-page-headers-extra-breadcrumb-outside.html">Outside</a></li>				
																					<li><a class="dropdown-item" href="feature-page-headers-extra-breadcrumb-dark.html">Dark</a></li>			
																				</ul>
																			</li>
																			<li><a class="dropdown-item" href="feature-page-headers-extra-scroll-to-content.html">Scroll to Content</a></li>			
																			<li><a class="dropdown-item" href="feature-page-headers-extra-full-width.html">Full Width</a></li>
																		</ul>
																	</li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">Footers</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="feature-footers-overview.html">Overview</a></li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="#">Classic</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="feature-footers-classic.html#footer">Classic</a></li>
																			<li><a class="dropdown-item" href="feature-footers-classic-advanced.html#footer">Advanced</a></li>
																			<li><a class="dropdown-item" href="feature-footers-classic-compact.html#footer">Compact</a></li>
																			<li><a class="dropdown-item" href="feature-footers-classic-simple.html#footer">Simple</a></li>
																			<li><a class="dropdown-item" href="feature-footers-classic-locations.html#footer">Locations</a></li>
																			<li class="dropdown-submenu">
																				<a class="dropdown-item" href="#">Copyright</a>
																				<ul class="dropdown-menu">
																					<li><a class="dropdown-item" href="feature-footers-classic-copyright-light.html#footer">Light</a></li>
																					<li><a class="dropdown-item" href="feature-footers-classic-copyright-dark.html#footer">Dark</a></li>
																					<li><a class="dropdown-item" href="feature-footers-classic-copyright-social-icons.html#footer">Social Icons</a></li>
																				</ul>
																			</li>
																			<li class="dropdown-submenu">
																				<a class="dropdown-item" href="#">Colors</a>
																				<ul class="dropdown-menu">
																					<li><a class="dropdown-item" href="feature-footers-classic-colors-primary.html#footer">Primary</a></li>
																					<li><a class="dropdown-item" href="feature-footers-classic-colors-secondary.html#footer">Secondary</a></li>
																					<li><a class="dropdown-item" href="feature-footers-classic-colors-tertiary.html#footer">Tertiary</a></li>
																					<li><a class="dropdown-item" href="feature-footers-classic-colors-quaternary.html#footer			">Quaternary</a></li>
																					<li><a class="dropdown-item" href="feature-footers-classic-colors-light.html#footer">Light</a></li>
																					<li><a class="dropdown-item" href="feature-footers-classic-colors-light-simple.html#footer">Light Simple</a></li>
																				</ul>
																			</li>
																		</ul>
																	</li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="#">Modern</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="feature-footers-modern.html#footer">Modern</a></li>
																			<li><a class="dropdown-item" href="feature-footers-modern-font-style-alternative.html#footer">Font Style Alternative</a></li>
																			<li><a class="dropdown-item" href="feature-footers-modern-clean.html#footer">Clean</a></li>	
																			<li><a class="dropdown-item" href="feature-footers-modern-useful-links.html#footer">Useful Links</a></li>
																			<li class="dropdown-submenu">
																				<a class="dropdown-item" href="#">Background</a>
																				<ul class="dropdown-menu">
																					<li><a class="dropdown-item" href="feature-footers-modern-background-image-simple.html#footer">Image Simple</a></li>
																					<li><a class="dropdown-item" href="feature-footers-modern-background-image-advanced.html#footer">Image Advanced</a></li>
																					<li><a class="dropdown-item" href="feature-footers-modern-background-video-simple.html#footer">Video Simple</a></li>
																				</ul>
																			</li>
																			<li class="dropdown-submenu">
																				<a class="dropdown-item" href="#">Call to Action</a>
																				<ul class="dropdown-menu">
																					<li><a class="dropdown-item" href="feature-footers-modern-call-to-action-button.html#footer">Button</a></li>
																					<li><a class="dropdown-item" href="feature-footers-modern-call-to-action-simple.html#footer">Simple</a></li>
																				</ul>
																			</li>
																		</ul>
																	</li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="#">Blog</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="feature-footers-blog-classic.html#footer">Blog Classic</a></li>
																		</ul>
																	</li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="#">eCommerce</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="feature-footers-ecommerce-classic.html#footer">eCommerce Classic</a></li>
																		</ul>
																	</li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="#">Contact Form</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="feature-footers-contact-form-classic.html#footer">Classic</a></li>
																			<li><a class="dropdown-item" href="feature-footers-contact-form-above-the-map.html#footer">Above the Map</a></li>
																			<li><a class="dropdown-item" href="feature-footers-contact-form-center.html#footer">Center</a></li>
																			<li><a class="dropdown-item" href="feature-footers-contact-form-columns.html#footer">Columns</a></li>
																		</ul>
																	</li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="#">Map</a>
																		<ul class="dropdown-menu">
																			<li><a class="dropdown-item" href="feature-footers-map-hidden.html#footer">Hidden Map</a></li> 
																			<li><a class="dropdown-item" href="feature-footers-map-full-width.html#footer">Full Width</a></li>
																		</ul>
																	</li>
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="#">Extra</a>
																		<ul class="dropdown-menu">
																			<li class="dropdown-submenu">
																				<a class="dropdown-item" href="#">Simple</a>
																				<ul class="dropdown-menu">
																					<li><a class="dropdown-item" href="feature-footers-extra-top-social-icons.html#footer">Top Social Icons</a></li>
																					<li><a class="dropdown-item" href="feature-footers-extra-big-icons.html#footer">Big Icons</a></li>
																				</ul>
																			</li>
																			<li><a class="dropdown-item" href="feature-footers-extra-recent-work.html#footer">Recent Work</a></li>
																			<li><a class="dropdown-item" href="feature-footers-extra-reveal.html#footer">Reveal</a></li>
																			<li><a class="dropdown-item" href="feature-footers-extra-instagram.html#footer">Instagram</a></li>
																			<li class="dropdown-submenu">
																				<a class="dropdown-item" href="#">Full Width</a>
																				<ul class="dropdown-menu">
																					<li><a class="dropdown-item" href="feature-footers-extra-full-width-light.html#footer">Simple Light</a></li>
																					<li><a class="dropdown-item" href="feature-footers-extra-full-width-dark.html#footer">Simple Dark</a></li>
																				</ul>
																			</li>
																		</ul>
																	</li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">Admin Extension <span class="tip tip-dark">hot</span><em class="not-included">(Not Included)</em></a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="feature-admin-forms-basic.html">Forms Basic</a></li>
																	<li><a class="dropdown-item" href="feature-admin-forms-advanced.html">Forms Advanced</a></li>
																	<li><a class="dropdown-item" href="feature-admin-forms-wizard.html">Forms Wizard</a></li>
																	<li><a class="dropdown-item" href="feature-admin-forms-code-editor.html">Code Editor</a></li>
																	<li><a class="dropdown-item" href="feature-admin-tables-advanced.html">Tables Advanced</a></li>
																	<li><a class="dropdown-item" href="feature-admin-tables-responsive.html">Tables Responsive</a></li>
																	<li><a class="dropdown-item" href="feature-admin-tables-editable.html">Tables Editable</a></li>
																	<li><a class="dropdown-item" href="feature-admin-tables-ajax.html">Tables Ajax</a></li>
																	<li><a class="dropdown-item" href="feature-admin-charts.html">Charts</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">Sliders</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="index-classic.html">Revolution Slider</a></li>
																	<li><a class="dropdown-item" href="index-slider-nivo.html">Nivo Slider</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">Layout Options</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="feature-layout-boxed.html">Boxed</a></li>
																	<li><a class="dropdown-item" href="feature-layout-dark.html">Dark</a></li>
																	<li><a class="dropdown-item" href="feature-layout-rtl.html">RTL</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">Extra</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="feature-grid-system.html">Grid System</a></li>
																	<li><a class="dropdown-item" href="feature-page-loading.html">Page Loading</a></li>
																	<li><a class="dropdown-item" href="feature-page-transition.html">Page Transition</a></li>
																	<li><a class="dropdown-item" href="feature-lazy-load.html">Lazy Load</a></li>
																	<li><a class="dropdown-item" href="feature-side-panel.html">Side Panel</a></li>
																</ul>
															</li>
														</ul>
													</li>
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle" href="#">
															Pages
														</a>
														<ul class="dropdown-menu">
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">Contact Us</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="contact-us-advanced.php">Contact Us - Advanced</a></li>
																	<li><a class="dropdown-item" href="contact-us.html">Contact Us - Basic</a></li>
																	<li><a class="dropdown-item" href="contact-us-recaptcha.html">Contact Us - Recaptcha</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">About Us</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="about-us-advanced.html">About Us - Advanced</a></li>
																	<li><a class="dropdown-item" href="about-us.html">About Us - Basic</a></li>
																	<li><a class="dropdown-item" href="about-me.html">About Me</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">Layouts</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="page-full-width.html">Full Width</a></li>
																	<li><a class="dropdown-item" href="page-left-sidebar.html">Left Sidebar</a></li>
																	<li><a class="dropdown-item" href="page-right-sidebar.html">Right Sidebar</a></li>
																	<li><a class="dropdown-item" href="page-left-and-right-sidebars.html">Left and Right Sidebars</a></li>
																	<li><a class="dropdown-item" href="page-sticky-sidebar.html">Sticky Sidebar</a></li>
																	<li><a class="dropdown-item" href="page-secondary-navbar.html">Secondary Navbar</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">Extra</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="page-404.html">404 Error</a></li>
																	<li><a class="dropdown-item" href="page-500.html">500 Error</a></li>
																	<li><a class="dropdown-item" href="page-coming-soon.html">Coming Soon</a></li>
																	<li><a class="dropdown-item" href="page-maintenance-mode.html">Maintenance Mode</a></li>
																	<li><a class="dropdown-item" href="page-search-results.html">Search Results</a></li>
																	<li><a class="dropdown-item" href="sitemap.html">Sitemap</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">Team</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="page-team-advanced.html">Team - Advanced</a></li>
																	<li><a class="dropdown-item" href="page-team.html">Team - Basic</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">Services</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="page-services.html">Services - Version 1</a></li>
																	<li><a class="dropdown-item" href="page-services-2.html">Services - Version 2</a></li>
																	<li><a class="dropdown-item" href="page-services-3.html">Services - Version 3</a></li>
																</ul>
															</li>
															<li><a class="dropdown-item" href="page-custom-header.html">Custom Header</a></li>
															<li><a class="dropdown-item" href="page-careers.html">Careers</a></li>
															<li><a class="dropdown-item" href="page-faq.html">FAQ</a></li>
															<li><a class="dropdown-item" href="page-login.html">Login / Register</a></li>
															<li><a class="dropdown-item" href="page-user-profile.html">User Profile</a></li>
														</ul>
													</li>
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle" href="#">
															Portfolio
														</a>
														<ul class="dropdown-menu">
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">Single Project</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="portfolio-single-wide-slider.html">Wide Slider</a></li>
																	<li><a class="dropdown-item" href="portfolio-single-small-slider.html">Small Slider</a></li>
																	<li><a class="dropdown-item" href="portfolio-single-full-width-slider.html">Full Width Slider</a></li>
																	<li><a class="dropdown-item" href="portfolio-single-gallery.html">Gallery</a></li>
																	<li><a class="dropdown-item" href="portfolio-single-carousel.html">Carousel</a></li>
																	<li><a class="dropdown-item" href="portfolio-single-medias.html">Medias</a></li>
																	<li><a class="dropdown-item" href="portfolio-single-full-width-video.html">Full Width Video</a></li>
																	<li><a class="dropdown-item" href="portfolio-single-masonry-images.html">Masonry Images</a></li>
																	<li><a class="dropdown-item" href="portfolio-single-left-sidebar.html">Left Sidebar</a></li>
																	<li><a class="dropdown-item" href="portfolio-single-right-sidebar.html">Right Sidebar</a></li>
																	<li><a class="dropdown-item" href="portfolio-single-left-and-right-sidebars.html">Left and Right Sidebars</a></li>
																	<li><a class="dropdown-item" href="portfolio-single-sticky-sidebar.html">Sticky Sidebar</a></li>
																	<li><a class="dropdown-item" href="portfolio-single-extended.html">Extended</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">Grid Layouts</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="portfolio-grid-1-column.html">1 Column</a></li>
																	<li><a class="dropdown-item" href="portfolio-grid-2-columns.html">2 Columns</a></li>
																	<li><a class="dropdown-item" href="portfolio-grid-3-columns.html">3 Columns</a></li>
																	<li><a class="dropdown-item" href="portfolio-grid-4-columns.html">4 Columns</a></li>
																	<li><a class="dropdown-item" href="portfolio-grid-5-columns.html">5 Columns</a></li>
																	<li><a class="dropdown-item" href="portfolio-grid-6-columns.html">6 Columns</a></li>
																	<li><a class="dropdown-item" href="portfolio-grid-no-margins.html">No Margins</a></li>
																	<li><a class="dropdown-item" href="portfolio-grid-full-width.html">Full Width</a></li>
																	<li><a class="dropdown-item" href="portfolio-grid-full-width-no-margins.html">Full Width No Margins</a></li>
																	<li><a class="dropdown-item" href="portfolio-grid-1-column-title-and-description.html">Title and Description</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">Masonry Layouts</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="portfolio-masonry-2-columns.html">2 Columns</a></li>
																	<li><a class="dropdown-item" href="portfolio-masonry-3-columns.html">3 Columns</a></li>
																	<li><a class="dropdown-item" href="portfolio-masonry-4-columns.html">4 Columns</a></li>
																	<li><a class="dropdown-item" href="portfolio-masonry-5-columns.html">5 Columns</a></li>
																	<li><a class="dropdown-item" href="portfolio-masonry-6-columns.html">6 Columns</a></li>
																	<li><a class="dropdown-item" href="portfolio-masonry-no-margins.html">No Margins</a></li>
																	<li><a class="dropdown-item" href="portfolio-masonry-full-width.html">Full Width</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">Sidebar Layouts</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="portfolio-sidebar-left.html">Left Sidebar</a></li>
																	<li><a class="dropdown-item" href="portfolio-sidebar-right.html">Right Sidebar</a></li>
																	<li><a class="dropdown-item" href="portfolio-sidebar-left-and-right.html">Left and Right Sidebars</a></li>
																	<li><a class="dropdown-item" href="portfolio-sidebar-sticky.html">Sticky Sidebar</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">Ajax</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="portfolio-ajax-page.html">Ajax on Page</a></li>
																	<li><a class="dropdown-item" href="portfolio-ajax-modal.html">Ajax on Modal</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">Extra</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="portfolio-extra-timeline.html">Timeline</a></li>
																	<li><a class="dropdown-item" href="portfolio-extra-lightbox.html">Lightbox</a></li>
																	<li><a class="dropdown-item" href="portfolio-extra-load-more.html">Load More</a></li>
																	<li><a class="dropdown-item" href="portfolio-extra-infinite-scroll.html">Infinite Scroll</a></li>
																	<li><a class="dropdown-item" href="portfolio-extra-pagination.html">Pagination</a></li>
																	<li><a class="dropdown-item" href="portfolio-extra-combination-filters.html">Combination Filters</a></li>
																</ul>
															</li>
														</ul>
													</li>
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle" href="#">
															Blog
														</a>
														<ul class="dropdown-menu">
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">Large Image</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="blog-large-image-full-width.html">Full Width</a></li>
																	<li><a class="dropdown-item" href="blog-large-image-sidebar-left.html">Left Sidebar</a></li>
																	<li><a class="dropdown-item" href="blog-large-image-sidebar-right.html">Right Sidebar </a></li>
																	<li><a class="dropdown-item" href="blog-large-image-sidebar-left-and-right.html">Left and Right Sidebar</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">Medium Image</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="blog-medium-image-sidebar-left.html">Left Sidebar</a></li>
																	<li><a class="dropdown-item" href="blog-medium-image-sidebar-right.html">Right Sidebar </a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">Grid</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="blog-grid-4-columns.html">4 Columns</a></li>
																	<li><a class="dropdown-item" href="blog-grid-3-columns.html">3 Columns</a></li>
																	<li><a class="dropdown-item" href="blog-grid-full-width.html">Full Width</a></li>
																	<li><a class="dropdown-item" href="blog-grid-no-margins.html">No Margins</a></li>
																	<li><a class="dropdown-item" href="blog-grid-no-margins-full-width.html">No Margins Full Width</a></li>
																	<li><a class="dropdown-item" href="blog-grid-sidebar-left.html">Left Sidebar</a></li>
																	<li><a class="dropdown-item" href="blog-grid-sidebar-right.html">Right Sidebar </a></li>
																	<li><a class="dropdown-item" href="blog-grid-sidebar-left-and-right.html">Left and Right Sidebar</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">Masonry</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="blog-masonry-4-columns.html">4 Columns</a></li>
																	<li><a class="dropdown-item" href="blog-masonry-3-columns.html">3 Columns</a></li>
																	<li><a class="dropdown-item" href="blog-masonry-full-width.html">Full Width</a></li>
																	<li><a class="dropdown-item" href="blog-masonry-no-margins.html">No Margins</a></li>
																	<li><a class="dropdown-item" href="blog-masonry-no-margins-full-width.html">No Margins Full Width</a></li>
																	<li><a class="dropdown-item" href="blog-masonry-sidebar-left.html">Left Sidebar</a></li>
																	<li><a class="dropdown-item" href="blog-masonry-sidebar-right.html">Right Sidebar </a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">Timeline</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="blog-timeline.html">Full Width</a></li>
																	<li><a class="dropdown-item" href="blog-timeline-sidebar-left.html">Left Sidebar</a></li>
																	<li><a class="dropdown-item" href="blog-timeline-sidebar-right.html">Right Sidebar </a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">Single Post</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="blog-post.html">Full Width</a></li>
																	<li><a class="dropdown-item" href="blog-post-slider-gallery.html">Slider Gallery</a></li>
																	<li><a class="dropdown-item" href="blog-post-image-gallery.html">Image Gallery</a></li>
																	<li><a class="dropdown-item" href="blog-post-embedded-video.html">Embedded Video</a></li>
																	<li><a class="dropdown-item" href="blog-post-html5-video.html">HTML5 Video</a></li>
																	<li><a class="dropdown-item" href="blog-post-blockquote.html">Blockquote</a></li>
																	<li><a class="dropdown-item" href="blog-post-link.html">Link</a></li>
																	<li><a class="dropdown-item" href="blog-post-embedded-audio.html">Embedded Audio</a></li>
																	<li><a class="dropdown-item" href="blog-post-small-image.html">Small Image</a></li>
																	<li><a class="dropdown-item" href="blog-post-sidebar-left.html">Left Sidebar</a></li>
																	<li><a class="dropdown-item" href="blog-post-sidebar-right.html">Right Sidebar </a></li>
																	<li><a class="dropdown-item" href="blog-post-sidebar-left-and-right.html">Left and Right Sidebar</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">Post Comments</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="blog-post.html#comments">Default</a></li>
																	<li><a class="dropdown-item" href="blog-post-comments-facebook.html#comments">Facebook Comments</a></li>
																	<li><a class="dropdown-item" href="blog-post-comments-disqus.html#comments">Disqus Comments</a></li>
																</ul>
															</li>
														</ul>
													</li>
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle" href="#">
															Shop
														</a>
														<ul class="dropdown-menu">
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">Single Product</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="shop-product-full-width.html">Full Width</a></li>
																	<li><a class="dropdown-item" href="shop-product-sidebar-left.html">Left Sidebar</a></li>
																	<li><a class="dropdown-item" href="shop-product-sidebar-right.html">Right Sidebar</a></li>
																	<li><a class="dropdown-item" href="shop-product-sidebar-left-and-right.html">Left and Right Sidebar</a></li>
																</ul>
															</li>
															<li><a class="dropdown-item" href="shop-4-columns.html">4 Columns</a></li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">3 Columns</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="shop-3-columns-full-width.html">Full Width</a></li>
																	<li><a class="dropdown-item" href="shop-3-columns-sidebar-left.html">Left Sidebar</a></li>
																	<li><a class="dropdown-item" href="shop-3-columns-sidebar-right.html">Right Sidebar </a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">2 Columns</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="shop-2-columns-full-width.html">Full Width</a></li>
																	<li><a class="dropdown-item" href="shop-2-columns-sidebar-left.html">Left Sidebar</a></li>
																	<li><a class="dropdown-item" href="shop-2-columns-sidebar-right.html">Right Sidebar </a></li>
																	<li><a class="dropdown-item" href="shop-2-columns-sidebar-left-and-right.html">Left and Right Sidebar</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">1 Column</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="shop-1-column-full-width.html">Full Width</a></li>
																	<li><a class="dropdown-item" href="shop-1-column-sidebar-left.html">Left Sidebar</a></li>
																	<li><a class="dropdown-item" href="shop-1-column-sidebar-right.html">Right Sidebar </a></li>
																	<li><a class="dropdown-item" href="shop-1-column-sidebar-left-and-right.html">Left and Right Sidebar</a></li>
																</ul>
															</li>
															<li><a class="dropdown-item" href="shop-cart.html">Cart</a></li>
															<li><a class="dropdown-item" href="shop-login.html">Login</a></li>
															<li><a class="dropdown-item" href="shop-checkout.html">Checkout</a></li>
														</ul>
													</li>
												</ul>
											</nav>
										</div>
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
											<i class="fas fa-bars"></i>
										</button>
									</div>
									<div class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
										<div class="header-nav-feature header-nav-features-search d-inline-flex">
											<a href="#" class="header-nav-features-toggle" data-focus="headerSearch"><i class="fas fa-search header-nav-top-icon"></i></a>
											<div class="header-nav-features-dropdown" id="headerTopSearchDropdown">
												<form role="search" action="page-search-results.html" method="get">
													<div class="simple-search input-group">
														<input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Search...">
														<span class="input-group-append">
															<button class="btn" type="submit">
																<i class="fa fa-search header-nav-top-icon"></i>
															</button>
														</span>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div role="main" class="main">

				<section class="page-header page-header-modern page-header-background page-header-background-sm overlay overlay-color-primary overlay-show overlay-op-8 mb-5" style="background-image: url(img/page-header/page-header-elements.jpg);">
					<div class="container">
						<div class="row">
							<div class="col-md-12 align-self-center p-static order-2 text-center">
								<h1>Carousels</h1>

							</div>
							<div class="col-md-12 align-self-center order-1">
								<ul class="breadcrumb breadcrumb-light d-block text-center">
									<li><a href="#">Home</a></li>
									<li class="active">Elements</li>
								</ul>
							</div>
						</div>
					</div>
				</section>

				<div class="container py-2">

					<div class="row">
						<div class="col">
							<h4>Default</h4>
							<div class="owl-carousel owl-theme stage-margin" data-plugin-options="{'items': 6, 'margin': 10, 'loop': false, 'nav': true, 'dots': false, 'stagePadding': 40}">
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-5.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-6.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-7.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-1.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-2.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-3.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-1.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-2.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-3.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-4.jpg">
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
							<h4>Navigation Arrows No Background</h4>
							<div class="owl-carousel owl-theme stage-margin nav-style-1 " data-plugin-options="{'items': 6, 'margin': 10, 'loop': false, 'nav': true, 'dots': false, 'stagePadding': 40}">
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-5.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-6.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-7.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-1.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-2.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-3.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-1.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-2.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-3.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-4.jpg">
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
							<h4>Show Navigation on Hover</h4>
							<div class="owl-carousel owl-theme show-nav-hover" data-plugin-options="{'items': 6, 'margin': 10, 'loop': false, 'nav': true, 'dots': false}">
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-1.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-2.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-1.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-2.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-3.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-4.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-3.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-4.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-5.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-6.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-7.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-1.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-2.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-3.jpg">
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
							<h4>Navigation on Title</h4>
							<div class="owl-carousel owl-theme show-nav-title" data-plugin-options="{'items': 6, 'margin': 10, 'loop': false, 'nav': true, 'dots': false}">
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-1.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-2.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-3.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-4.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-5.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-6.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-7.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-1.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-2.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-3.jpg">
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
							<h4 class="text-center">Navigation on Title Both Sides</h4>
							<div class="owl-carousel owl-theme show-nav-title show-nav-title-both-sides" data-plugin-options="{'items': 6, 'margin': 10, 'loop': false, 'nav': true, 'dots': false}">
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-1.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-2.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-3.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-4.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-5.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-6.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-7.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-1.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-2.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-3.jpg">
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
						<div class="col-lg-6">
							<h4>Navigation Inside</h4>
							<div class="owl-carousel owl-theme nav-inside" data-plugin-options="{'items': 1, 'margin': 10, 'loop': false, 'nav': true, 'dots': false}">
								<div>
									<div class="img-thumbnail border-0 p-0 d-block">
										<img class="img-fluid border-radius-0" src="img/blog/wide/blog-20.jpg" alt="">
									</div>
								</div>
								<div>
									<div class="img-thumbnail border-0 p-0 d-block">
										<img class="img-fluid border-radius-0" src="img/blog/wide/blog.12.jpg" alt="">
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<h4>Navigation Inside Arrows No Background</h4>
							<div class="owl-carousel owl-theme nav-inside nav-style-1 nav-light" data-plugin-options="{'items': 1, 'margin': 10, 'loop': false, 'nav': true, 'dots': false}">
								<div>
									<div class="img-thumbnail border-0 p-0 d-block">
										<img class="img-fluid border-radius-0" src="img/blog/wide/blog-24.jpg" alt="">
									</div>
								</div>
								<div>
									<div class="img-thumbnail border-0 p-0 d-block">
										<img class="img-fluid border-radius-0" src="img/blog/wide/blog-20.jpg" alt="">
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

					<div class="row">
						<div class="col-lg-6">
							<h4>Navigation Inside Edge Dark</h4>
							<div class="owl-carousel owl-theme nav-inside nav-inside-edge nav-squared nav-with-transparency nav-dark" data-plugin-options="{'items': 1, 'margin': 10, 'loop': false, 'nav': true, 'dots': false}">
								<div>
									<div class="img-thumbnail border-0 p-0 d-block">
										<img class="img-fluid border-radius-0" src="img/blog/wide/blog-11.jpg" alt="">
									</div>
								</div>
								<div>
									<div class="img-thumbnail border-0 p-0 d-block">
										<img class="img-fluid border-radius-0" src="img/blog/wide/blog-20.jpg" alt="">
									</div>
								</div>
								<div>
									<div class="img-thumbnail border-0 p-0 d-block">
										<img class="img-fluid border-radius-0" src="img/blog/wide/blog-29.jpg" alt="">
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<h4>Navigation Inside Edge Light</h4>
							<div class="owl-carousel owl-theme nav-inside nav-inside-edge nav-squared nav-with-transparency nav-light" data-plugin-options="{'items': 1, 'margin': 10, 'loop': false, 'nav': true, 'dots': false}">
								<div>
									<div class="img-thumbnail border-0 p-0 d-block">
										<img class="img-fluid border-radius-0" src="img/blog/wide/blog-42.jpg" alt="">
									</div>
								</div>
								<div>
									<div class="img-thumbnail border-0 p-0 d-block">
										<img class="img-fluid border-radius-0" src="img/blog/wide/blog-20.jpg" alt="">
									</div>
								</div>
								<div>
									<div class="img-thumbnail border-0 p-0 d-block">
										<img class="img-fluid border-radius-0" src="img/blog/wide/blog-29.jpg" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<hr class="my-5">
							<h4>Navigation Big Arrows</h4>
						</div>
					</div>
				</div>

				<section class="section section-height-4 mt-0 mb-3 border-0">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-10">
								
								<div class="owl-carousel owl-theme stage-margin stage-margin-lg nav-style-2 mb-0" data-plugin-options="{'items': 1, 'margin': 100, 'loop': false, 'nav': true, 'dots': false, 'stagePadding': 100}">
									<div class="text-center">
										<span class="text-color-primary">LOREM IPSUM DOLOR SIT</span>
										<h2 class="font-weight-semibold text-10">Get to meet simply the best HTML Site Template since 2013</h2>
										<p class="lead lead-2 mb-0">Porto is simply the best choice for your new website. The theme is several years among the most popular in the world, being constantly improved and following the trends of design and best practices of code.</p>
									</div>
									<div class="text-center">
										<span class="text-color-primary">LOREM IPSUM DOLOR SIT</span>
										<h2 class="font-weight-semibold text-10">Get to meet simply the best HTML Site Template since 2013</h2>
										<p class="lead lead-2 mb-0">Porto is simply the best choice for your new website. The theme is several years among the most popular in the world, being constantly improved and following the trends of design and best practices of code.</p>
									</div>
									<div class="text-center">
										<span class="text-color-primary">LOREM IPSUM DOLOR SIT</span>
										<h2 class="font-weight-semibold text-10">Get to meet simply the best HTML Site Template since 2013</h2>
										<p class="lead lead-2 mb-0">Porto is simply the best choice for your new website. The theme is several years among the most popular in the world, being constantly improved and following the trends of design and best practices of code.</p>
									</div>
								</div>

							</div>
						</div>
					</div>
				</section>

				<div class="container">
					<div class="row">
						<div class="col">
							<hr class="my-5">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-5">
							<div class="row">
								<div class="col-lg-6">
									<h4>Vertical</h4>
									<div class="owl-carousel owl-theme" data-plugin-options="{'items': 1, 'autoplay': true, 'autoplayTimeout': 4000, 'margin': 10, 'animateIn': 'slideInDown', 'animateOut': 'slideOutDown'}">
										<div>
											<img alt="" class="img-fluid rounded" src="img/blog/square/blog-11.jpg">
										</div>
										<div>
											<img alt="" class="img-fluid rounded" src="img/blog/square/blog-2.jpg">
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<h4>Animation (FadeOut)</h4>
									<div class="owl-carousel owl-theme" data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut'}">
										<div>
											<img alt="" class="img-fluid rounded" src="img/blog/square/blog-38.jpg">
										</div>
										<div>
											<img alt="" class="img-fluid rounded" src="img/blog/square/blog-3.jpg">
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<hr class="solid my-5">

									<h4 class="mt-5">Auto Height</h4>
									<div class="owl-carousel owl-theme dots-title dots-title-pos-2 mb-3" data-plugin-options="{'items': 1, 'autoHeight': true, 'dots': false, 'margin': 10}">
										<div>
											<div class="testimonial testimonial-primary mb-0">
												<blockquote>
													<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
												</blockquote>
												<div class="testimonial-arrow-down"></div>
												<div class="testimonial-author">
													<div class="testimonial-author-thumbnail">
														<img src="img/clients/client-1.jpg" class="rounded-circle" alt="">
													</div>
													<p><strong>John Doe</strong><span>Okler</span></p>
												</div>
											</div>
										</div>
										<div>
											<div class="testimonial testimonial-primary mb-0">
												<blockquote>
													<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.</p>
												</blockquote>
												<div class="testimonial-arrow-down"></div>
												<div class="testimonial-author">
													<div class="testimonial-author-thumbnail">
														<img src="img/clients/client-1.jpg" class="rounded-circle" alt="">
													</div>
													<p><strong>John Doe</strong><span>Okler</span></p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<hr class="solid my-5">

									<h4>Max Items for Each Resolution</h4>
									<div class="owl-carousel owl-theme" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 2}, '979': {'items': 3}, '1199': {'items': 3}}, 'loop': false, 'autoHeight': true, 'margin': 10}">
										<div>
											<img alt="" class="img-fluid rounded" src="img/projects/project-5.jpg">
										</div>
										<div>
											<img alt="" class="img-fluid rounded" src="img/projects/project-6.jpg">
										</div>
										<div>
											<img alt="" class="img-fluid rounded" src="img/projects/project-7.jpg">
										</div>
										<div>
											<img alt="" class="img-fluid rounded" src="img/projects/project-1.jpg">
										</div>
										<div>
											<img alt="" class="img-fluid rounded" src="img/projects/project-2.jpg">
										</div>
										<div>
											<img alt="" class="img-fluid rounded" src="img/projects/project-3.jpg">
										</div>
										<div>
											<img alt="" class="img-fluid rounded" src="img/projects/project-1.jpg">
										</div>
										<div>
											<img alt="" class="img-fluid rounded" src="img/projects/project-2.jpg">
										</div>
										<div>
											<img alt="" class="img-fluid rounded" src="img/projects/project-3.jpg">
										</div>
										<div>
											<img alt="" class="img-fluid rounded" src="img/projects/project-4.jpg">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">

							<h4>Multiple Items</h4>

							<div class="owl-carousel owl-theme" data-plugin-options="{'items': 4}">
								<div>
									<img class="img-fluid" src="img/logos/logo-1.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-2.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-3.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-4.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-5.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-6.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-5.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-4.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-3.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-2.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-1.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-6.png" alt="">
								</div>
							</div>

							<hr class="solid my-5">

							<h4>Auto Play</h4>

							<div class="owl-carousel owl-theme" data-plugin-options="{'items': 4, 'autoplay': true, 'autoplayTimeout': 3000}">
								<div>
									<img class="img-fluid" src="img/logos/logo-1.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-2.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-3.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-4.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-5.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-6.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-5.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-4.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-3.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-2.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-1.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-6.png" alt="">
								</div>
							</div>

							<hr class="solid my-5">

							<h4>Rounded Navigation</h4>

							<div class="owl-carousel owl-theme stage-margin rounded-nav" data-plugin-options="{'margin': 10, 'loop': false, 'nav': true, 'dots': false, 'stagePadding': 40}">
								<div>
									<img class="img-fluid" src="img/logos/logo-1.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-2.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-3.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-4.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-5.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-6.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-5.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-4.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-3.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-2.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-1.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-6.png" alt="">
								</div>
							</div>

							<hr class="solid my-5">

							<h4>Navigation Bottom</h4>

							<div class="owl-carousel owl-theme nav-bottom" data-plugin-options="{'loop': false, 'nav': true, 'dots': false}">
								<div>
									<img class="img-fluid" src="img/logos/logo-1.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-2.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-3.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-4.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-5.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-6.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-5.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-4.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-3.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-2.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-1.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-6.png" alt="">
								</div>
							</div>

							<hr class="solid my-5">

							<h4>Navigation Bottom Rounded</h4>

							<div class="owl-carousel owl-theme nav-bottom rounded-nav" data-plugin-options="{'loop': false, 'nav': true, 'dots': false}">
								<div>
									<img class="img-fluid" src="img/logos/logo-1.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-2.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-3.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-4.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-5.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-6.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-5.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-4.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-3.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-2.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-1.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-6.png" alt="">
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
						<div class="col-lg-6">
							<h4>Center</h4>
							<div class="owl-carousel owl-theme" data-plugin-options="{'center': true, 'loop': false, 'nav': false, 'dots': true, 'margin': 10}">
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-5.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-6.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-7.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-1.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-2.jpg">
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<h4>Center With Loop</h4>
							<div class="owl-carousel owl-theme" data-plugin-options="{'center': true, 'loop': true, 'nav': false, 'dots': true, 'margin': 10}">
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-5.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-6.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-7.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-1.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-2.jpg">
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
						<div class="col-lg-6">
							<h4>Dots Morphing</h4>
							<div class="owl-carousel owl-theme dots-morphing" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 2}, '979': {'items': 3}, '1199': {'items': 3}}, 'loop': false, 'autoHeight': true, 'margin': 10}">
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-5.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-6.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-7.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-1.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-5.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-6.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-7.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-1.jpg">
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<h4>Dots Modern</h4>
							<div class="owl-carousel owl-theme dots-modern" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 2}, '979': {'items': 3}, '1199': {'items': 3}}, 'loop': false, 'autoHeight': true, 'margin': 10}">
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-5.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-6.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-7.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-1.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-5.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-6.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-7.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-1.jpg">
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
							<h4>Center Active Item</h4>
							<div class="owl-carousel owl-theme carousel-center-active-item" data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 5}, '992': {'items': 7}, '1200': {'items': 7}}, 'autoplay': true, 'autoplayTimeout': 3000, 'dots': false}">
								<div>
									<img class="img-fluid" src="img/logos/logo-1.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-2.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-3.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-4.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-5.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-6.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-4.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-2.png" alt="">
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
							<h4 class="mb-0">Manually Initialized</h4>
							<p>Check the examples file <code>examples.carousels.js</code> for more information.</p>
							<div class="owl-carousel owl-theme manual" id="carousel">
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-1.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-2.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-1.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-2.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-3.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-4.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-3.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-4.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-5.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-6.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-7.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-1.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-2.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid rounded" src="img/projects/project-3.jpg">
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col">
							<hr class="solid my-5">
							<h4>Inside Text</h4>

							<div class="row">
								<div class="col">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
									
									<div class="owl-carousel owl-theme dots-inside float-left mr-4 mb-2" style="max-width: 250px;" data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut'}">
										<div>
											<img alt="" class="img-fluid rounded" src="img/blog/square/blog-44.jpg">
										</div>
										<div>
											<img alt="" class="img-fluid rounded" src="img/blog/square/blog-9.jpg">
										</div>
									</div>

									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In eu libero ligula. Fusce eget metus lorem, ac viverra leo. Nullam convallis, arcu vel pellentesque sodales, nisi est varius diam, ac ultrices sem ante quis sem. Proin ultricies volutpat sapien, nec scelerisque ligula mollis lobortis.</p>

									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In eu libero ligula. Fusce eget metus lorem, ac viverra leo. Nullam convallis, arcu vel pellentesque sodales, nisi est varius diam, ac ultrices sem ante quis sem. Proin ultricies volutpat sapien, nec scelerisque ligula mollis lobortis. Consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In eu libero ligula. Fusce eget metus lorem, ac viverra leo. Nullam convallis, arcu vel pellentesque sodales, nisi est varius diam, ac ultrices sem ante quis sem. Proin ultricies volutpat sapien, nec scelerisque ligula mollis lobortis.</p>
								</div>
							</div>

						</div>
					</div>

					<div class="row">
						<div class="col">
							<hr class="solid my-5">
							<h4>Full Width</h4>
						</div>
					</div>
				</div>

				<div class="owl-carousel owl-theme full-width" data-plugin-options="{'items': 5, 'loop': false, 'nav': true, 'dots': false}">
					<div>
						<a href="portfolio-single-wide-slider.html">
							<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
								<span class="thumb-info-wrapper">
									<img src="img/projects/project.jpg" class="img-fluid" alt="">
									<span class="thumb-info-title">
										<span class="thumb-info-inner">Project Title</span>
										<span class="thumb-info-type">Project Type</span>
									</span>
									<span class="thumb-info-action">
										<span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
									</span>
								</span>
							</span>
						</a>
					</div>
					<div>
						<a href="portfolio-single-wide-slider.html">
							<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
								<span class="thumb-info-wrapper">
									<img src="img/projects/project-2.jpg" class="img-fluid" alt="">
									<span class="thumb-info-title">
										<span class="thumb-info-inner">Project Title</span>
										<span class="thumb-info-type">Project Type</span>
									</span>
									<span class="thumb-info-action">
										<span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
									</span>
								</span>
							</span>
						</a>
					</div>
					<div>
						<a href="portfolio-single-wide-slider.html">
							<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
								<span class="thumb-info-wrapper">
									<img src="img/projects/project-4.jpg" class="img-fluid" alt="">
									<span class="thumb-info-title">
										<span class="thumb-info-inner">Project Title</span>
										<span class="thumb-info-type">Project Type</span>
									</span>
									<span class="thumb-info-action">
										<span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
									</span>
								</span>
							</span>
						</a>
					</div>
					<div>
						<a href="portfolio-single-wide-slider.html">
							<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
								<span class="thumb-info-wrapper">
									<img src="img/projects/project-5.jpg" class="img-fluid" alt="">
									<span class="thumb-info-title">
										<span class="thumb-info-inner">Project Title</span>
										<span class="thumb-info-type">Project Type</span>
									</span>
									<span class="thumb-info-action">
										<span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
									</span>
								</span>
							</span>
						</a>
					</div>
					<div>
						<a href="portfolio-single-wide-slider.html">
							<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
								<span class="thumb-info-wrapper">
									<img src="img/projects/project-6.jpg" class="img-fluid" alt="">
									<span class="thumb-info-title">
										<span class="thumb-info-inner">Project Title</span>
										<span class="thumb-info-type">Project Type</span>
									</span>
									<span class="thumb-info-action">
										<span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
									</span>
								</span>
							</span>
						</a>
					</div>
					<div>
						<a href="portfolio-single-wide-slider.html">
							<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
								<span class="thumb-info-wrapper">
									<img src="img/projects/project.jpg" class="img-fluid" alt="">
									<span class="thumb-info-title">
										<span class="thumb-info-inner">Project Title</span>
										<span class="thumb-info-type">Project Type</span>
									</span>
									<span class="thumb-info-action">
										<span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
									</span>
								</span>
							</span>
						</a>
					</div>
					<div>
						<a href="portfolio-single-wide-slider.html">
							<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
								<span class="thumb-info-wrapper">
									<img src="img/projects/project-4.jpg" class="img-fluid" alt="">
									<span class="thumb-info-title">
										<span class="thumb-info-inner">Project Title</span>
										<span class="thumb-info-type">Project Type</span>
									</span>
									<span class="thumb-info-action">
										<span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
									</span>
								</span>
							</span>
						</a>
					</div>
				</div>

				<div class="container">

					<div class="row">
						<div class="col">
							<hr class="solid my-5">
						</div>
					</div>

					<div class="row pb-4">
						<div class="col">
							<h4>Videos</h4>
							<div class="owl-carousel owl-theme manual" id="videos">
								<div class="item-video" data-merge="3"><a class="owl-video" href="http://vimeo.com/67957799"></a></div>
								<div class="item-video" data-merge="1"><a class="owl-video" href="https://www.youtube.com/watch?v=oNBBijn4JuY"></a></div>
								<div class="item-video" data-merge="2"><a class="owl-video" href="http://www.youtube.com/watch?v=oNBBijn4JuY"></a></div>
								<div class="item-video" data-merge="1"><a class="owl-video" href="http://www.youtube.com/watch?v=oNBBijn4JuY"></a></div>
								<div class="item-video" data-merge="2"><a class="owl-video" href="http://www.youtube.com/watch?v=oNBBijn4JuY"></a></div>
								<div class="item-video" data-merge="3"><a class="owl-video" href="https://www.youtube.com/watch?v=oNBBijn4JuY"></a></div>
								<div class="item-video" data-merge="1"><a class="owl-video" href="http://www.youtube.com/watch?v=oNBBijn4JuY"></a></div>
								<div class="item-video" data-merge="2"><a class="owl-video" href="https://www.youtube.com/watch?v=oNBBijn4JuY"></a></div>
							</div>
						</div>
					</div>

				</div>

				<section class="section section-height-2 border-0 mt-5 mb-0 pt-5">
				
					<div class="container py-2">
						<div class="row mt-3 pb-4">
							<div class="col text-center">
								<h2 class="font-weight-semibold text-6 mb-0">Porto Elements</h2>
								<p class="lead text-4 pt-2 font-weight-normal">Porto comes with several elements options, it's easy to customize<br> and create the content of your website's pages.</p>
							</div>
						</div>
						<div class="row justify-content-center">

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									<div class="featured-box featured-box-no-borders featured-box-box-shadow">
										<a href="elements-accordions.html" class="text-decoration-none">
											<span class="box-content px-1 py-4 text-center d-block">
												<span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-bars"></i></span>
												<span class="elements-list-shadow-icon text-default"><i class="fas fa-bars"></i></span>
												<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Accordions</span>
											</span>
										</a>
									</div>
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									<div class="featured-box featured-box-no-borders featured-box-box-shadow">
										<a href="elements-toggles.html" class="text-decoration-none">
											<span class="box-content px-1 py-4 text-center d-block">
												<span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-indent"></i></span>
												<span class="elements-list-shadow-icon text-default"><i class="fas fa-indent"></i></span>
												<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Toggles</span>
											</span>
										</a>
									</div>
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									<div class="featured-box featured-box-no-borders featured-box-box-shadow">
										<a href="elements-tabs.html" class="text-decoration-none">
											<span class="box-content px-1 py-4 text-center d-block">
												<span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-columns"></i></span>
												<span class="elements-list-shadow-icon text-default"><i class="fas fa-columns"></i></span>
												<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Tabs</span>
											</span>
										</a>
									</div>
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									<div class="featured-box featured-box-no-borders featured-box-box-shadow">
										<a href="elements-icons.html" class="text-decoration-none">
											<span class="box-content px-1 py-4 text-center d-block">
												<span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-check"></i></span>
												<span class="elements-list-shadow-icon text-default"><i class="fas fa-check"></i></span>
												<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Icons</span>
											</span>
										</a>
									</div>
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									<div class="featured-box featured-box-no-borders featured-box-box-shadow">
										<a href="elements-icon-boxes.html" class="text-decoration-none">
											<span class="box-content px-1 py-4 text-center d-block">
												<span class="text-primary text-8 position-relative top-3 mt-3"><i class="far fa-check-circle"></i></span>
												<span class="elements-list-shadow-icon text-default"><i class="far fa-check-circle"></i></span>
												<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Icon Boxes</span>
											</span>
										</a>
									</div>
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									<div class="featured-box featured-box-no-borders featured-box-box-shadow">
										<a href="elements-carousels.html" class="text-decoration-none">
											<span class="box-content px-1 py-4 text-center d-block">
												<span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-ellipsis-h"></i></span>
												<span class="elements-list-shadow-icon text-default"><i class="fas fa-ellipsis-h"></i></span>
												<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Carousels</span>
											</span>
										</a>
									</div>
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									<div class="featured-box featured-box-no-borders featured-box-box-shadow">
										<a href="elements-modals.html" class="text-decoration-none">
											<span class="box-content px-1 py-4 text-center d-block">
												<span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-expand"></i></span>
												<span class="elements-list-shadow-icon text-default"><i class="fas fa-expand"></i></span>
												<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Modals</span>
											</span>
										</a>
									</div>
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									<div class="featured-box featured-box-no-borders featured-box-box-shadow">
										<a href="elements-lightboxes.html" class="text-decoration-none">
											<span class="box-content px-1 py-4 text-center d-block">
												<span class="text-primary text-8 position-relative top-3 mt-3"><i class="far fa-clone"></i></span>
												<span class="elements-list-shadow-icon text-default"><i class="far fa-clone"></i></span>
												<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Lightboxes</span>
											</span>
										</a>
									</div>
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									<div class="featured-box featured-box-no-borders featured-box-box-shadow">
										<a href="elements-buttons.html" class="text-decoration-none">
											<span class="box-content px-1 py-4 text-center d-block">
												<span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-minus"></i></span>
												<span class="elements-list-shadow-icon text-default"><i class="fas fa-minus"></i></span>
												<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Buttons</span>
											</span>
										</a>
									</div>
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									<div class="featured-box featured-box-no-borders featured-box-box-shadow">
										<a href="elements-badges.html" class="text-decoration-none">
											<span class="box-content px-1 py-4 text-center d-block">
												<span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-bars"></i></span>
												<span class="elements-list-shadow-icon text-default"><i class="fas fa-bars"></i></span>
												<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Badges</span>
											</span>
										</a>
									</div>
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									<div class="featured-box featured-box-no-borders featured-box-box-shadow">
										<a href="elements-lists.html" class="text-decoration-none">
											<span class="box-content px-1 py-4 text-center d-block">
												<span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-list-ul"></i></span>
												<span class="elements-list-shadow-icon text-default"><i class="fas fa-list-ul"></i></span>
												<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Lists</span>
											</span>
										</a>
									</div>
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									<div class="featured-box featured-box-no-borders featured-box-box-shadow">
										<a href="elements-image-gallery.html" class="text-decoration-none">
											<span class="box-content px-1 py-4 text-center d-block">
												<span class="text-primary text-8 position-relative top-3 mt-3"><i class="far fa-file-image"></i></span>
												<span class="elements-list-shadow-icon text-default"><i class="far fa-file-image"></i></span>
												<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Image Gallery</span>
											</span>
										</a>
									</div>
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									<div class="featured-box featured-box-no-borders featured-box-box-shadow">
										<a href="elements-image-frames.html" class="text-decoration-none">
											<span class="box-content px-1 py-4 text-center d-block">
												<span class="text-primary text-8 position-relative top-3 mt-3"><i class="far fa-images"></i></span>
												<span class="elements-list-shadow-icon text-default"><i class="far fa-images"></i></span>
												<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Image Frames</span>
											</span>
										</a>
									</div>
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									<div class="featured-box featured-box-no-borders featured-box-box-shadow">
										<a href="elements-image-hotspots.html" class="text-decoration-none">
											<span class="box-content px-1 py-4 text-center d-block">
												<span class="text-primary text-8 position-relative top-3 mt-3"><i class="far fa-hand-point-up"></i></span>
												<span class="elements-list-shadow-icon text-default"><i class="far fa-hand-point-up"></i></span>
												<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Image Hotspots</span>
											</span>
										</a>
									</div>
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									<div class="featured-box featured-box-no-borders featured-box-box-shadow">
										<a href="elements-testimonials.html" class="text-decoration-none">
											<span class="box-content px-1 py-4 text-center d-block">
												<span class="text-primary text-8 position-relative top-3 mt-3"><i class="far fa-comments"></i></span>
												<span class="elements-list-shadow-icon text-default"><i class="far fa-comments"></i></span>
												<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Testimonials</span>
											</span>
										</a>
									</div>
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									<div class="featured-box featured-box-no-borders featured-box-box-shadow">
										<a href="elements-blockquotes.html" class="text-decoration-none">
											<span class="box-content px-1 py-4 text-center d-block">
												<span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-quote-left"></i></span>
												<span class="elements-list-shadow-icon text-default"><i class="fas fa-quote-left"></i></span>
												<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Blockquotes</span>
											</span>
										</a>
									</div>
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									<div class="featured-box featured-box-no-borders featured-box-box-shadow">
										<a href="elements-word-rotator.html" class="text-decoration-none">
											<span class="box-content px-1 py-4 text-center d-block">
												<span class="text-primary text-8 position-relative top-3 mt-3"><i class="fab fa-autoprefixer"></i></span>
												<span class="elements-list-shadow-icon text-default"><i class="fab fa-autoprefixer"></i></span>
												<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Word Rotator</span>
											</span>
										</a>
									</div>
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									<div class="featured-box featured-box-no-borders featured-box-box-shadow">
										<a href="elements-before-after.html" class="text-decoration-none">
											<span class="box-content px-1 py-4 text-center d-block">
												<span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-arrows-alt-h"></i></span>
												<span class="elements-list-shadow-icon text-default"><i class="fas fa-arrows-alt-h"></i></span>
												<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Before / After</span>
											</span>
										</a>
									</div>
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									<div class="featured-box featured-box-no-borders featured-box-box-shadow">
										<a href="elements-typography.html" class="text-decoration-none">
											<span class="box-content px-1 py-4 text-center d-block">
												<span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-font"></i></span>
												<span class="elements-list-shadow-icon text-default"><i class="fas fa-font"></i></span>
												<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Typography</span>
											</span>
										</a>
									</div>
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									<div class="featured-box featured-box-no-borders featured-box-box-shadow">
										<a href="elements-call-to-action.html" class="text-decoration-none">
											<span class="box-content px-1 py-4 text-center d-block">
												<span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-external-link-alt"></i></span>
												<span class="elements-list-shadow-icon text-default"><i class="fas fa-external-link-alt"></i></span>
												<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Call to Action</span>
											</span>
										</a>
									</div>
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									<div class="featured-box featured-box-no-borders featured-box-box-shadow">
										<a href="elements-pricing-tables.html" class="text-decoration-none">
											<span class="box-content px-1 py-4 text-center d-block">
												<span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-dollar-sign"></i></span>
												<span class="elements-list-shadow-icon text-default"><i class="fas fa-dollar-sign"></i></span>
												<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Pricing Tables</span>
											</span>
										</a>
									</div>
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									<div class="featured-box featured-box-no-borders featured-box-box-shadow">
										<a href="elements-tables.html" class="text-decoration-none">
											<span class="box-content px-1 py-4 text-center d-block">
												<span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-table"></i></span>
												<span class="elements-list-shadow-icon text-default"><i class="fas fa-table"></i></span>
												<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Tables</span>
											</span>
										</a>
									</div>
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									<div class="featured-box featured-box-no-borders featured-box-box-shadow">
										<a href="elements-progressbars.html" class="text-decoration-none">
											<span class="box-content px-1 py-4 text-center d-block">
												<span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-chart-bar"></i></span>
												<span class="elements-list-shadow-icon text-default"><i class="fas fa-chart-bar"></i></span>
												<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Progress Bars</span>
											</span>
										</a>
									</div>
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									<div class="featured-box featured-box-no-borders featured-box-box-shadow">
										<a href="elements-counters.html" class="text-decoration-none">
											<span class="box-content px-1 py-4 text-center d-block">
												<span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-sort-numeric-down"></i></span>
												<span class="elements-list-shadow-icon text-default"><i class="fas fa-sort-numeric-down"></i></span>
												<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Counters</span>
											</span>
										</a>
									</div>
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									<div class="featured-box featured-box-no-borders featured-box-box-shadow">
										<a href="elements-countdowns.html" class="text-decoration-none">
											<span class="box-content px-1 py-4 text-center d-block">
												<span class="text-primary text-8 position-relative top-3 mt-3"><i class="far fa-clock"></i></span>
												<span class="elements-list-shadow-icon text-default"><i class="far fa-clock"></i></span>
												<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Countdowns</span>
											</span>
										</a>
									</div>
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									<div class="featured-box featured-box-no-borders featured-box-box-shadow">
										<a href="elements-sections-parallax.html" class="text-decoration-none">
											<span class="box-content px-1 py-4 text-center d-block">
												<span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-images"></i></span>
												<span class="elements-list-shadow-icon text-default"><i class="fas fa-images"></i></span>
												<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Sections &amp; Parallax</span>
											</span>
										</a>
									</div>
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									<div class="featured-box featured-box-no-borders featured-box-box-shadow">
										<a href="elements-tooltips-popovers.html" class="text-decoration-none">
											<span class="box-content px-1 py-4 text-center d-block">
												<span class="text-primary text-8 position-relative top-3 mt-3"><i class="far fa-comment-alt"></i></span>
												<span class="elements-list-shadow-icon text-default"><i class="far fa-comment-alt"></i></span>
												<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Tooltips &amp; Popovers</span>
											</span>
										</a>
									</div>
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									<div class="featured-box featured-box-no-borders featured-box-box-shadow">
										<a href="elements-sticky-elements.html" class="text-decoration-none">
											<span class="box-content px-1 py-4 text-center d-block">
												<span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-compress"></i></span>
												<span class="elements-list-shadow-icon text-default"><i class="fas fa-compress"></i></span>
												<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Sticky Elements</span>
											</span>
										</a>
									</div>
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									<div class="featured-box featured-box-no-borders featured-box-box-shadow">
										<a href="elements-headings.html" class="text-decoration-none">
											<span class="box-content px-1 py-4 text-center d-block">
												<span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-text-height"></i></span>
												<span class="elements-list-shadow-icon text-default"><i class="fas fa-text-height"></i></span>
												<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Headings</span>
											</span>
										</a>
									</div>
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									<div class="featured-box featured-box-no-borders featured-box-box-shadow">
										<a href="elements-dividers.html" class="text-decoration-none">
											<span class="box-content px-1 py-4 text-center d-block">
												<span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-align-center"></i></span>
												<span class="elements-list-shadow-icon text-default"><i class="fas fa-align-center"></i></span>
												<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Dividers</span>
											</span>
										</a>
									</div>
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									<div class="featured-box featured-box-no-borders featured-box-box-shadow">
										<a href="elements-animations.html" class="text-decoration-none">
											<span class="box-content px-1 py-4 text-center d-block">
												<span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-asterisk"></i></span>
												<span class="elements-list-shadow-icon text-default"><i class="fas fa-asterisk"></i></span>
												<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Animations</span>
											</span>
										</a>
									</div>
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									<div class="featured-box featured-box-no-borders featured-box-box-shadow">
										<a href="elements-medias.html" class="text-decoration-none">
											<span class="box-content px-1 py-4 text-center d-block">
												<span class="text-primary text-8 position-relative top-3 mt-3"><i class="far fa-play-circle"></i></span>
												<span class="elements-list-shadow-icon text-default"><i class="far fa-play-circle"></i></span>
												<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Medias</span>
											</span>
										</a>
									</div>
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									<div class="featured-box featured-box-no-borders featured-box-box-shadow">
										<a href="elements-maps.html" class="text-decoration-none">
											<span class="box-content px-1 py-4 text-center d-block">
												<span class="text-primary text-8 position-relative top-3 mt-3"><i class="far fa-map"></i></span>
												<span class="elements-list-shadow-icon text-default"><i class="far fa-map"></i></span>
												<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Maps</span>
											</span>
										</a>
									</div>
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									<div class="featured-box featured-box-no-borders featured-box-box-shadow">
										<a href="elements-arrows.html" class="text-decoration-none">
											<span class="box-content px-1 py-4 text-center d-block">
												<span class="text-primary text-8 position-relative top-3 mt-3"><i class="far fa-arrow-alt-circle-right"></i></span>
												<span class="elements-list-shadow-icon text-default"><i class="far fa-arrow-alt-circle-right"></i></span>
												<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Arrows</span>
											</span>
										</a>
									</div>
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									<div class="featured-box featured-box-no-borders featured-box-box-shadow">
										<a href="elements-star-ratings.html" class="text-decoration-none">
											<span class="box-content px-1 py-4 text-center d-block">
												<span class="text-primary text-8 position-relative top-3 mt-3"><i class="far fa-star"></i></span>
												<span class="elements-list-shadow-icon text-default"><i class="far fa-star"></i></span>
												<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Star Ratings</span>
											</span>
										</a>
									</div>
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									<div class="featured-box featured-box-no-borders featured-box-box-shadow">
										<a href="elements-alerts.html" class="text-decoration-none">
											<span class="box-content px-1 py-4 text-center d-block">
												<span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-exclamation-triangle"></i></span>
												<span class="elements-list-shadow-icon text-default"><i class="fas fa-exclamation-triangle"></i></span>
												<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Alerts</span>
											</span>
										</a>
									</div>
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									<div class="featured-box featured-box-no-borders featured-box-box-shadow">
										<a href="elements-posts.html" class="text-decoration-none">
											<span class="box-content px-1 py-4 text-center d-block">
												<span class="text-primary text-8 position-relative top-3 mt-3"><i class="far fa-calendar-alt"></i></span>
												<span class="elements-list-shadow-icon text-default"><i class="far fa-calendar-alt"></i></span>
												<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Posts</span>
											</span>
										</a>
									</div>
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									<div class="featured-box featured-box-no-borders featured-box-box-shadow">
										<a href="elements-forms-basic-contact.html" class="text-decoration-none">
											<span class="box-content px-1 py-4 text-center d-block">
												<span class="text-primary text-8 position-relative top-3 mt-3"><i class="far fa-file-alt"></i></span>
												<span class="elements-list-shadow-icon text-default"><i class="far fa-file-alt"></i></span>
												<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Forms</span>
											</span>
										</a>
									</div>
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
									<div class="featured-box featured-box-no-borders featured-box-box-shadow">
										<a href="elements-360-image-viewer.html" class="text-decoration-none">
											<span class="box-content px-1 py-4 text-center d-block">
												<span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-sync-alt"></i></span>
												<span class="elements-list-shadow-icon text-default"><i class="fas fa-sync-alt"></i></span>
												<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">360º Image Viewer</span>
											</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				
				</section>
			</div>
 
			<footer id="footer" class="mt-0">
				<div class="container">
					<div class="footer-ribbon">
						<span>Get in Touch</span>
					</div>
					<div class="row py-5 my-4">
						<div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
							<h5 class="text-3 mb-3">NEWSLETTER</h5>
							<p class="pr-1">Keep up on our always evolving product features and technology. Enter your e-mail address and subscribe to our newsletter.</p>
							<div class="alert alert-success d-none" id="newsletterSuccess">
								<strong>Success!</strong> You've been added to our email list.
							</div>
							<div class="alert alert-danger d-none" id="newsletterError"></div>
							<form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST" class="mr-4 mb-3 mb-md-0">
								<div class="input-group input-group-rounded">
									<input class="form-control form-control-sm bg-light" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
									<span class="input-group-append">
										<button class="btn btn-light text-color-dark" type="submit"><strong>GO!</strong></button>
									</span>
								</div>
							</form>
						</div>
						<div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
							<h5 class="text-3 mb-3">LATEST TWEETS</h5>
							<div id="tweet" class="twitter" data-plugin-tweets data-plugin-options="{'username': 'oklerthemes', 'count': 2}">
								<p>Please wait...</p>
							</div>
						</div>
						<div class="col-md-6 col-lg-3 mb-4 mb-md-0">
							<div class="contact-details">
								<h5 class="text-3 mb-3">CONTACT US</h5>
								<ul class="list list-icons list-icons-lg">
									<li class="mb-1"><i class="far fa-dot-circle text-color-primary"></i><p class="m-0">234 Street Name, City Name</p></li>
									<li class="mb-1"><i class="fab fa-whatsapp text-color-primary"></i><p class="m-0"><a href="tel:8001234567">(800) 123-4567</a></p></li>
									<li class="mb-1"><i class="far fa-envelope text-color-primary"></i><p class="m-0"><a href="mailto:mail@example.com">mail@example.com</a></p></li>
								</ul>
							</div>
						</div>
						<div class="col-md-6 col-lg-2">
							<h5 class="text-3 mb-3">FOLLOW US</h5>
							<ul class="social-icons">
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
								<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
								<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container py-2">
						<div class="row py-4">
							<div class="col-lg-1 d-flex align-items-center justify-content-center justify-content-lg-start mb-2 mb-lg-0">
								<a href="index.html" class="logo pr-0 pr-lg-3">
									<img alt="Porto Website Template" src="img/logo-footer.png" class="opacity-5" height="33">
								</a>
							</div>
							<div class="col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0">
								<p>© Copyright 2019. All Rights Reserved.</p>
							</div>
							<div class="col-lg-4 d-flex align-items-center justify-content-center justify-content-lg-end">
								<nav id="sub-menu">
									<ul>
										<li><i class="fas fa-angle-right"></i><a href="page-faq.html" class="ml-1 text-decoration-none"> FAQ's</a></li>
										<li><i class="fas fa-angle-right"></i><a href="sitemap.html" class="ml-1 text-decoration-none"> Sitemap</a></li>
										<li><i class="fas fa-angle-right"></i><a href="contact-us.html" class="ml-1 text-decoration-none"> Contact Us</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>
@endsection