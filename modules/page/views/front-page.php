<!DOCTYPE html>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<meta name="format-detection" content="telephone=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="xmlrpc.html">
	
	<link type="text/css" media="all"
		href="<?= base_url('assets/web') ?>/cache/autoptimize/css/autoptimize_2dcc2edd08792112640c2ec193367a61.css" rel="stylesheet" />
	<link type="text/css" media="only screen and (max-width: 768px)"
		href="<?= base_url('assets/web') ?>/cache/autoptimize/css/autoptimize_dcb2de333eec7ab4ae31385ed8d6a393.css" rel="stylesheet" />
	<title>N.S. Producation's</title>
	<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
	<link rel="alternate" type="application/rss+xml" title="Recond &raquo; Feed" href="feed/index.html" />
	<link rel="alternate" type="application/rss+xml" title="Recond &raquo; Comments Feed"
		href="comments/feed/index.html" />
	<link rel="alternate" type="text/calendar" title="Recond &raquo; iCal Feed" href="events/indexedf3.html?ical=1" />
	<link rel='stylesheet' id='lt-colorpicker-font-css'
		href='http://fonts.googleapis.com/css?family=Open+Sans%7CPlayfair+Display%3A700&amp;ver=1.0#038;subset=latin'
		type='text/css' media='all' />
	<link rel='stylesheet' id='lt-colorpicker-font-2-css'
		href='http://fonts.googleapis.com/css?family=Lato%3A300%7CUbuntu%3A700&amp;ver=1.0#038;subset=latin'
		type='text/css' media='all' />
	<link rel='stylesheet' id='dashicons-css' href='<?= base_url('assets/web') ?>/css/dashicons.min.css' type='text/css' media='all' />
	<style id='recond-theme-style-inline-css' type='text/css'>
		@font-face {
			font-family: 'recond-fontello';
			src: url('<?= base_url('assets/web') ?>/uploads/2018/02/ltx-reconda714.eot?1.1.7');
			src: url('<?= base_url('assets/web') ?>/uploads/2018/02/ltx-reconda714.eot?1.1.7#iefix') format('embedded-opentype'),
				url('<?= base_url('assets/web') ?>/uploads/2018/02/ltx-reconda714.html?1.1.7') format('woff2'),
				url('<?= base_url('assets/web') ?>/uploads/2018/02/ltx-reconda714.woff?1.1.7') format('woff'),
				url('<?= base_url('assets/web') ?>/uploads/2018/02/ltx-reconda714.ttf?1.1.7') format('truetype'),
				url('<?= base_url('assets/web') ?>/uploads/2018/02/ltx-reconda714.svg?1.1.7#ltx-recond') format('svg');
			font-weight: normal;
			font-style: normal;
		}
		@media (max-width: 991px){
			.ltx-desktop{
				display:block!important;
			}
			.ltx-mobile{
				display:none!important;
			}
			.heading.header-outline-subheader{
				height:30vh!important;
			}
			.heading.header-outline-subheader svg {
				margin-left: 45px!important;
				margin-bottom:0px!important;
			}
			.heading.header-outline-subheader text {
				font-size: 3em!important;
				stroke-width: 2px!important;
			}
		}
		:root {
			--black: #282834;
			--black-darker: #000002;
			--black-text: rgba(40, 40, 52, 1);
			--black-light: rgba(40, 40, 52, .7);
			--gray: #f0f0f3;
			--gray-lighter: rgba(240, 240, 243, .5);
			--white: #FFFFFF;
			--white-text: rgba(255, 255, 255, .75);
			--main: #dc2751;
			--main-darker: #be0933;
			--main-lighter: rgba(220, 39, 81, .5);
			--second: #dc2751;
			--red: #dc2751;
			--font-main: 'Hind';
			--font-headers: 'Poppins';
			--font-subheaders: 'Architects Daughter';
		}

		.page-header {
			background-image: url(<?= base_url('assets/web') ?>/uploads/2018/02/inner_HEADER_02.jpg) !important;
		}

		.ltx-footer-wrapper {
			background-image: url(<?= base_url('assets/web') ?>/uploads/2018/02/footer-bg.png) !important;
		}

		nav.navbar .logo img {
			max-height: 192px !important;
		}
		@media only screen and (max-width: 600px) {
			nav.navbar .logo img {
			max-height: 151px !important;
		}
		}
	</style>
	<!--[if lt IE 9]><link rel='stylesheet' id='vc_lte_ie9-css'  href='<?= base_url('assets/web') ?>/plugins/js_composer/assets/css/vc_lte_ie9.min.css' type='text/css' media='screen' /> <![endif]-->
	<style id='js_composer_front-inline-css' type='text/css'>
		.vc_custom_1562165797244 {
			background-image: url(<?= base_url('assets/web') ?>/uploads/2018/02/testimonials_parallaxc10d.jpg?id=9917) !important;
			background-position: center !important;
			background-repeat: no-repeat !important;
			background-size: cover !important;
		}

		.vc_custom_1561931227641 {
			background-image: url(<?= base_url('assets/web') ?>/uploads/2018/02/noise_50.png?id=9953) !important;
			background-position: 0 0 !important;
			background-repeat: repeat !important;
		}

		.vc_custom_1561568937997 {
			padding-top: 46px !important;
			padding-bottom: 46px !important;
		}

		.vc_custom_1562006082147 {
			background-position: 0 0 !important;
			background-repeat: repeat !important;
		}

		.vc_custom_1562006047693 {
			background-image: url(<?= base_url('assets/web') ?>/uploads/2019/06/long_wave.png?id=10016) !important;
		}
	</style>
	<link rel='stylesheet' id='recond-google-fonts-css'
		href='http://fonts.googleapis.com/css?family=Hind:400,400i,700%7CPoppins:900,400,600,700%7CArchitects+Daughter:400&amp;subset=latin'
		type='text/css' media='all' />
	<link rel='stylesheet' id='recond-fontello-css'
		href='<?= base_url('assets/web') ?>/cache/autoptimize/css/autoptimize_single_a7551582d70db62981ca2dd4ca572866.css' type='text/css'
		media='all' />
	<script type='text/javascript' src='<?= base_url('assets/web') ?>/js/jquery/jquery.js'></script>
	<link rel='https://api.w.org/' href='wp-json/index.html' />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.html?rsd" />
	<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?= base_url('assets/web') ?>/wlwmanifest.xml" />
	<meta name="generator" content="WordPress 4.9.23" />
	<meta name="generator" content="WooCommerce 3.6.7" />
	<link rel="canonical" href="index.html" />
	<link rel='shortlink' href='index.html' />
	<link rel="alternate" type="application/json+oembed"
		href="wp-json/oembed/1.0/embed1f6a.json?url=http%3A%2F%2Frecond.like-themes.com%2F" />
	<link rel="alternate" type="text/xml+oembed"
		href="wp-json/oembed/1.0/embedde4b?url=http%3A%2F%2Frecond.like-themes.com%2F&amp;format=xml" />
	<meta name="tec-api-version" content="v1">
	<meta name="tec-api-origin" content="http://recond.like-themes.com">
	<link rel="https://theeventscalendar.com/" href="wp-json/tribe/events/v1/index.html" /> <noscript>
		<style>
			.woocommerce-product-gallery {
				opacity: 1 !important;
			}
		</style>
	</noscript>
	<meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress." />
	<link rel="icon" href="<?= base_url('upload/favicon.png') ?>" sizes="32x32" />
	<link rel="icon" href="<?= base_url('upload/favicon.png') ?>" sizes="192x192" />
	<link rel="apple-touch-icon-precomposed" href="<?= base_url('upload/favicon.png') ?>" />
	<meta name="msapplication-TileImage"
		content="<?= base_url('upload/faicon.png') ?>" /> <noscript>
		<style>
			.wpb_animate_when_almost_visible {
				opacity: 1;
			}
		</style>
	</noscript>
</head>

<body
	class="home page-template page-template-page-templates page-template-full-width page-template-page-templatesfull-width-php page page-id-7925 woocommerce-no-js tribe-no-js full-width paceloader-enabled no-sidebar wpb-js-composer js-comp-ver-6.0.3 vc_responsive">
	<div id="ltx-preloader"></div>
	<div class="ltx-content-wrapper  transparent">
		<div
			class="header-wrapper  header-h1   header-parallax   wrapper-navbar-layout-transparent ltx-pageheader-disabled">
			<div id="nav-wrapper" class="navbar-layout-transparent">
				<nav class="navbar" data-spy="affix" data-offset-top="0">
					<div class="container">
						<div class="navbar-logo "> 
							
							<a class="logo" href="<?= base_url() ?>"><img
									src="<?= base_url('upload/white-logo.png') ?>" alt="Logo"
									srcset="<?= base_url('upload/white-logo.png') ?>"></a>
						</div>
						<div id="navbar" class="navbar-collapse collapse" data-mobile-screen-width="1200">
							<div class="toggle-wrap"> <a class="logo" href="index.html"><img
										src="<?= base_url('upload/white-logo.png') ?>" alt="Logo"
										srcset="<?= base_url('upload/white-logo.png') ?>"></a>
								<button type="button" class="navbar-toggle collapsed"> <span
										class="close">&times;</span> </button>
								<div class="clearfix"></div>
							</div>
							<ul id="menu-main-menu" class="nav navbar-nav">
								<li id="menu-item-8571"
									class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item menu-item-8571"><a
										href="<?= base_url() ?>"><span>Home</span></a>
								</li>
								<li id="menu-item-3557"
									class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3557">
									<a><span>Music Production</span></a>
									<ul class="sub-menu">
										<li id="menu-item-57"
											class="menu-item menu-item-type-post_type menu-item-object-page menu-item-57">
											<a href="testimonials/index.html"><span>Category 1</span></a>
										</li>
										<li id="menu-item-750"
											class="menu-item menu-item-type-post_type menu-item-object-page menu-item-750">
											<a href="team/index.html"><span>Category 2</span></a>
										</li>
										<li id="menu-item-2364"
											class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2364">
											<a href="faq/index.html"><span>Category 3</span></a>
										</li>
									</ul>
								</li>
								<li id="menu-item-619"
									class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-619">
									<a href="#"><span>Video Production</span></a>
									<ul class="sub-menu">
										<li id="menu-item-623"
											class="menu-item menu-item-type-post_type menu-item-object-page menu-item-623">
											<a href="shop/index.html"><span>Category</span></a></li>
										<li id="menu-item-622"
											class="menu-item menu-item-type-post_type menu-item-object-page menu-item-622">
											<a href="cart/index.html"><span>Category</span></a></li>
										<li id="menu-item-621"
											class="menu-item menu-item-type-post_type menu-item-object-page menu-item-621">
											<a href="checkout/index.html"><span>Category</span></a></li>
										<li id="menu-item-620"
											class="menu-item menu-item-type-post_type menu-item-object-page menu-item-620">
											<a href="my-account/index.html"><span>Category</span></a></li>
									</ul>
								</li>
								<li id="menu-item-59"
									class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-59">
									<a><span>Weddings</span></a>
									<ul class="sub-menu">
										<li id="menu-item-623"
											class="menu-item menu-item-type-post_type menu-item-object-page menu-item-623">
											<a href="shop/index.html"><span>Category</span></a></li>
										<li id="menu-item-622"
											class="menu-item menu-item-type-post_type menu-item-object-page menu-item-622">
											<a href="cart/index.html"><span>Category</span></a></li>
										<li id="menu-item-621"
											class="menu-item menu-item-type-post_type menu-item-object-page menu-item-621">
											<a href="checkout/index.html"><span>Category</span></a></li>
										<li id="menu-item-620"
											class="menu-item menu-item-type-post_type menu-item-object-page menu-item-620">
											<a href="my-account/index.html"><span>Category</span></a></li>
									</ul>
								</li>
								<li id="menu-item-46"
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-46"><a
										href="contacts/index.html"><span>Podcast</span></a>
								</li>
								<li id="menu-item-46"
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-46"><a
										href="contacts/index.html"><span>About Us</span></a>
								</li>
								<li id="menu-item-46"
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-46"><a
										href="contacts/index.html"><span>Contact</span></a>
									</li>
							</ul>
							<div class="ltx-navbar-icons">
								<ul>
									<li
										class="ltx-fa-icon ltx-nav-profile menu-item-has-children  hidden-sm hidden-ms hidden-xs">
										<a href="my-account/index.html"><span class="fa fa fa-user"></span> </a></li>
									<li class="ltx-fa-icon ltx-nav-cart  hidden-sm hidden-ms hidden-xs">
										<div class="cart-navbar"> <a href="cart/index.html"
												class="ltx-cart cart shop_table" title="View your shopping cart"><span
													class="cart-contents header-cart-count count">0</span><i
													class="fa fa fa-shopping-bag" aria-hidden="true"></i> </a></div>
									</li>
									<li class="ltx-fa-icon ltx-nav-search   hidden-sm hidden-ms hidden-xs">
										<div class="top-search" data-base-href="http://recond.like-themes.com/"> <a
												href="#" id="top-search-ico" class="top-search-ico fa fa-search"
												aria-hidden="true"></a> <a href="#" id="top-search-ico-close"
												class="top-search-ico-close " aria-hidden="true">&times;</a> <input
												placeholder="Search" value="" type="text"></div>
									</li>
								</ul>
							</div>
							<div class="mobile-controls">
								<div>
									<ul>
										<li class="ltx-fa-icon ltx-nav-profile menu-item-has-children "> <a
												href="my-account/index.html"><span class="fa fa fa-user"></span> </a>
										</li>
										<li class="ltx-fa-icon ltx-nav-cart ">
											<div class="cart-navbar"> <a href="cart/index.html"
													class="ltx-cart cart shop_table"
													title="View your shopping cart"><span
														class="cart-contents header-cart-count count">0</span><i
														class="fa fa fa-shopping-bag" aria-hidden="true"></i> </a></div>
										</li>
										<li class="ltx-fa-icon ltx-nav-search  ">
											<div class="top-search" data-base-href="http://recond.like-themes.com/"> <a
													href="#" id="top-search-ico-mobile"
													class="top-search-ico fa fa-search" aria-hidden="true"></a> <input
													placeholder="Search" value="" type="text"></div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="navbar-controls"> <button type="button" class="navbar-toggle collapsed"> <span
									class="icon-bar top-bar"></span> <span class="icon-bar middle-bar"></span> <span
									class="icon-bar bottom-bar"></span> </button></div>
					</div>
				</nav>
			</div>
		</div>
		<div class="container main-wrapper">
			<div class="inner-page text-page margin-disabled">
				<div class="row centered">
					<div class="col-xl-12 col-xs-12 text-page">
						<article id="post-7925" class="post-7925 page type-page status-publish hentry">
							<div class="entry-content clearfix" id="entry-div">
								<div data-vc-full-width="true" data-vc-full-width-init="false"
									data-vc-stretch-content="true"
									class="vc_row wpb_row vc_row-fluid vc_row-no-padding bg-color-black displaced-top">
									<div class="wpb_column vc_column_container vc_col-sm-12">
										<div class="vc_column-inner">
											<div class="wpb_wrapper">
												<!--

				OLD images Array
				["http://recond.like-themes.com/wp-content/uploads/2018/02/SLIDE_01.jpg","http://recond.like-themes.com/wp-content/uploads/2018/02/SLIDE_02.jpg","http://recond.like-themes.com/wp-content/uploads/2018/02/SLIDE_03.jpg","http://recond.like-themes.com/wp-content/uploads/2018/02/SLIDE_01.jpg"]
		-->
												<div class="slider-zoom  zoom-default  zoom-style-default  zoom-origin-center-center  overlay-dots  bullets-true  zoom-content-effect-fade-top  zoom-margin-top "
													id="like_sc_zoom_slider_2121994968" data-zs-prev="" data-zs-next=""
													data-zs-overlay="dots" data-zs-initzoom="1.2" data-zs-speed="20000"
													data-zs-interval="6500" data-zs-switchSpeed="7000" data-zs-arrows=""
													data-zs-bullets="true"
													data-zs-src='["<?= base_url('upload/first1.jpg') ?>","<?= base_url('upload/sound-mixer-studio.jpg') ?>","<?= base_url('upload/third-slider.jpg') ?>","http://recond.like-themes.com/wp-content/uploads/2018/02/SLIDE_02.jpg"]'>
													<div class="ltx-social ltx-nav-second ltx-type-">
														<ul>
															<li><a href="#" target="_self"><span
																		class="fa fa-twitter"></span></a></li>
															<li><a href="#" target="_self"><span
																		class="fa fa-facebook-f"></span></a></li>
															<li><a href="#" target="_self"><span
																		class="fa fa-instagram"></span></a></li>
															<li><a href="#" target="_self"><span
																		class="fa fa-youtube"></span></a></li>
														</ul>
													</div>
													<div class="container ltx-zs-slider-wrapper">
														<div class="ltx-zs-slider-inner  inited visible  ltx-zs-slide-0"
															data-index="0">
															<div class="vc_row wpb_row vc_row-fluid">
																<div
																	class="wpb_column vc_column_container vc_col-sm-12">
																	<div class="vc_column-inner">
																		<div class="wpb_wrapper">
																			<div class="es-resp">
																				<div class="visible-xl"
																					style="height: 150px;"></div>
																				<div class="hidden-xl hidden-md hidden-sm hidden-ms hidden-xs"
																					style="height: 150px;"></div>
																				<div class="visible-md"
																					style="height: 150px;"></div>
																				<div class="visible-sm "
																					style="height: 150px;"></div>
																				<div class="visible-ms"
																					style="height: 100px;"></div>
																				<div class="visible-xs"
																					style="height: 100px;"></div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div
																class="vc_row wpb_row vc_row-fluid vc_row-o-content-bottom vc_row-flex text-align-center-sm-ms">
																<div
																	class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-12 vc_col-md-12">
																	<div class="vc_column-inner">
																		<div class="wpb_wrapper">
																			<div class="heading  heading-large header-outline-subheader align-left color-white transform-default icon-type-hidden heading-tag-h1"
																				id="like_sc_header_1411300917">
																				<h1 class="header ">
																					<span
																						class="ltx-mobile"><span>
																							Video </span>
																						Production</span>
																						<span
																						class="ltx-desktop">
																						<svg
																							viewbox="0 0 1100 120"><text
																								x="2px" y="50%"
																								alignment-baseline="central"
																								dominant-baseline="middle">
																								Video </text></svg>
																								Production</span>
																				</h1>
																			</div>
																			<div class="es-resp">
																				<div class="visible-xl"
																					style="height: 32px;"></div>
																				<div class="hidden-xl hidden-md hidden-sm hidden-ms hidden-xs"
																					style="height: 32px;"></div>
																				<div class="visible-md"
																					style="height: 32px;"></div>
																				<div class="visible-sm "
																					style="height: 32px;"></div>
																				<div class="visible-ms"
																					style="height: 32px;"></div>
																				<div class="visible-xs"
																					style="height: 32px;"></div>
																			</div>
																			<div class="ltx-content-width col-align-left"
																				id="like_sc_content_width_988244535"
																				style="max-width: 600px">
																				<div class="ltx-wrapper">
																					<div
																						class="wpb_text_column wpb_content_element ">
																						<div class="wpb_wrapper">
																							<p></p>
																						</div>
																					</div>
																				</div>
																			</div>
																			<div class="es-resp">
																				<div class="visible-xl"
																					style="height: 64px;"></div>
																				<div class="hidden-xl hidden-md hidden-sm hidden-ms hidden-xs"
																					style="height: 64px;"></div>
																				<div class="visible-md"
																					style="height: 64px;"></div>
																				<div class="visible-sm "
																					style="height: 64px;"></div>
																				<div class="visible-ms"
																					style="height: 64px;"></div>
																				<div class="visible-xs"
																					style="height: 64px;"></div>
																			</div>
																			<div class="btn-wrap btn-wrap-inline"> <a
																					href="#"
																					class="btn  btn-main color-hover-white"
																					id="like_sc_button_877125694">Read
																					more</a></div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="vc_row wpb_row vc_row-fluid">
																<div
																	class="wpb_column vc_column_container vc_col-sm-12">
																	<div class="vc_column-inner">
																		<div class="wpb_wrapper">
																			<div class="es-resp">
																				<div class="visible-xl"
																					style="height: 250px;"></div>
																				<div class="hidden-xl hidden-md hidden-sm hidden-ms hidden-xs"
																					style="height: 250px;"></div>
																				<div class="visible-md"
																					style="height: 250px;"></div>
																				<div class="visible-sm "
																					style="height: 200px;"></div>
																				<div class="visible-ms"
																					style="height: 160px;"></div>
																				<div class="visible-xs"
																					style="height: 160px;"></div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="ltx-zs-slider-inner  ltx-zs-slide-1" data-index="1">
															<div class="vc_row wpb_row vc_row-fluid">
																<div
																	class="wpb_column vc_column_container vc_col-sm-12">
																	<div class="vc_column-inner">
																		<div class="wpb_wrapper">
																			<div class="es-resp">
																				<div class="visible-xl"
																					style="height: 150px;"></div>
																				<div class="hidden-xl hidden-md hidden-sm hidden-ms hidden-xs"
																					style="height: 150px;"></div>
																				<div class="visible-md"
																					style="height: 150px;"></div>
																				<div class="visible-sm "
																					style="height: 150px;"></div>
																				<div class="visible-ms"
																					style="height: 100px;"></div>
																				<div class="visible-xs"
																					style="height: 100px;"></div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="vc_row wpb_row vc_row-fluid vc_row-o-content-bottom vc_row-flex text-align-center-sm-ms">
																<div
																	class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-12 vc_col-md-12">
																	<div class="vc_column-inner">
																		<div class="wpb_wrapper">
																			<div class="heading  heading-large header-outline-subheader align-left color-white transform-default icon-type-hidden heading-tag-h1"
																				id="like_sc_header_718717784">
																				<h1 class="header "><span
																						class="ltx-mobile"><span> Music
																						</span> Production</span><span
																						class="ltx-desktop"><svg
																							viewbox="0 0 1100 120"><text
																								x="2px" y="50%"
																								alignment-baseline="central"
																								dominant-baseline="middle">
																								Music </text></svg>
																								Production</span></h1>
																			</div>
																			<div class="es-resp">
																				<div class="visible-xl"
																					style="height: 32px;"></div>
																				<div class="hidden-xl hidden-md hidden-sm hidden-ms hidden-xs"
																					style="height: 32px;"></div>
																				<div class="visible-md"
																					style="height: 32px;"></div>
																				<div class="visible-sm "
																					style="height: 32px;"></div>
																				<div class="visible-ms"
																					style="height: 32px;"></div>
																				<div class="visible-xs"
																					style="height: 32px;"></div>
																			</div>
																			<div class="ltx-content-width col-align-left"
																				id="like_sc_content_width_1716489940"
																				style="max-width: 600px">
																				<div class="ltx-wrapper">
																					<div
																						class="wpb_text_column wpb_content_element ">
																						<div class="wpb_wrapper">
																							<p></p>
																						</div>
																					</div>
																				</div>
																			</div>
																			<div class="es-resp">
																				<div class="visible-xl"
																					style="height: 64px;"></div>
																				<div class="hidden-xl hidden-md hidden-sm hidden-ms hidden-xs"
																					style="height: 64px;"></div>
																				<div class="visible-md"
																					style="height: 64px;"></div>
																				<div class="visible-sm "
																					style="height: 64px;"></div>
																				<div class="visible-ms"
																					style="height: 64px;"></div>
																				<div class="visible-xs"
																					style="height: 64px;"></div>
																			</div>
																			<div class="btn-wrap btn-wrap-inline"> <a
																					href="#"
																					class="btn  btn-main color-hover-white"
																					id="like_sc_button_2121259930">Read
																					more</a></div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="vc_row wpb_row vc_row-fluid">
																<div
																	class="wpb_column vc_column_container vc_col-sm-12">
																	<div class="vc_column-inner">
																		<div class="wpb_wrapper">
																			<div class="es-resp">
																				<div class="visible-xl"
																					style="height: 250px;"></div>
																				<div class="hidden-xl hidden-md hidden-sm hidden-ms hidden-xs"
																					style="height: 250px;"></div>
																				<div class="visible-md"
																					style="height: 250px;"></div>
																				<div class="visible-sm "
																					style="height: 200px;"></div>
																				<div class="visible-ms"
																					style="height: 100px;"></div>
																				<div class="visible-xs"
																					style="height: 100px;"></div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="ltx-zs-slider-inner  ltx-zs-slide-2" data-index="2">
															<div class="vc_row wpb_row vc_row-fluid">
																<div
																	class="wpb_column vc_column_container vc_col-sm-12">
																	<div class="vc_column-inner">
																		<div class="wpb_wrapper">
																			<div class="es-resp">
																				<div class="visible-xl"
																					style="height: 150px;"></div>
																				<div class="hidden-xl hidden-md hidden-sm hidden-ms hidden-xs"
																					style="height: 150px;"></div>
																				<div class="visible-md"
																					style="height: 150px;"></div>
																				<div class="visible-sm "
																					style="height: 150px;"></div>
																				<div class="visible-ms"
																					style="height: 100px;"></div>
																				<div class="visible-xs"
																					style="height: 100px;"></div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="vc_row wpb_row vc_row-fluid vc_row-o-content-bottom vc_row-flex text-align-center-sm-ms">
																<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-12 vc_col-md-12">
																	<div class="vc_column-inner">
																		<div class="wpb_wrapper">
																			<div class="heading  heading-large header-outline-subheader align-left color-white transform-default icon-type-hidden heading-tag-h1"
																				id="like_sc_header_1088581134">
																				<h1 class="header "><span
																						class="ltx-mobile"><span> Wedding
																						</span> Photography</span><span
																						class="ltx-desktop"><svg
																							viewbox="0 0 1100 120"><text
																								x="2px" y="50%"
																								alignment-baseline="central"
																								dominant-baseline="middle">
																								Wedding </text></svg>
																								Photography</span></h1>
																			</div>
																			<div class="es-resp">
																				<div class="visible-xl"
																					style="height: 32px;"></div>
																				<div class="hidden-xl hidden-md hidden-sm hidden-ms hidden-xs"
																					style="height: 32px;"></div>
																				<div class="visible-md"
																					style="height: 32px;"></div>
																				<div class="visible-sm "
																					style="height: 32px;"></div>
																				<div class="visible-ms"
																					style="height: 32px;"></div>
																				<div class="visible-xs"
																					style="height: 32px;"></div>
																			</div>
																			<div class="ltx-content-width col-align-left"
																				id="like_sc_content_width_1124098910"
																				style="max-width: 600px">
																				<div class="ltx-wrapper">
																					<div
																						class="wpb_text_column wpb_content_element ">
																						<div class="wpb_wrapper">
																							<p></p>
																						</div>
																					</div>
																				</div>
																			</div>
																			<div class="es-resp">
																				<div class="visible-xl"
																					style="height: 64px;"></div>
																				<div class="hidden-xl hidden-md hidden-sm hidden-ms hidden-xs"
																					style="height: 64px;"></div>
																				<div class="visible-md"
																					style="height: 64px;"></div>
																				<div class="visible-sm "
																					style="height: 64px;"></div>
																				<div class="visible-ms"
																					style="height: 64px;"></div>
																				<div class="visible-xs"
																					style="height: 64px;"></div>
																			</div>
																			<div class="btn-wrap btn-wrap-inline"> <a
																					href="#"
																					class="btn  btn-main color-hover-white"
																					id="like_sc_button_600571446">Read
																					more</a></div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="vc_row wpb_row vc_row-fluid">
																<div
																	class="wpb_column vc_column_container vc_col-sm-12">
																	<div class="vc_column-inner">
																		<div class="wpb_wrapper">
																			<div class="es-resp">
																				<div class="visible-xl"
																					style="height: 250px;"></div>
																				<div class="hidden-xl hidden-md hidden-sm hidden-ms hidden-xs"
																					style="height: 250px;"></div>
																				<div class="visible-md"
																					style="height: 250px;"></div>
																				<div class="visible-sm "
																					style="height: 200px;"></div>
																				<div class="visible-ms"
																					style="height: 100px;"></div>
																				<div class="visible-xs"
																					style="height: 100px;"></div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>

														<div class="ltx-zs-slider-inner  ltx-zs-slide-3" data-index="3">
															<div class="vc_row wpb_row vc_row-fluid">
																<div
																	class="wpb_column vc_column_container vc_col-sm-12">
																	<div class="vc_column-inner">
																		<div class="wpb_wrapper">
																			<div class="es-resp">
																				<div class="visible-xl"
																					style="height: 150px;"></div>
																				<div class="hidden-xl hidden-md hidden-sm hidden-ms hidden-xs"
																					style="height: 150px;"></div>
																				<div class="visible-md"
																					style="height: 150px;"></div>
																				<div class="visible-sm "
																					style="height: 150px;"></div>
																				<div class="visible-ms"
																					style="height: 100px;"></div>
																				<div class="visible-xs"
																					style="height: 100px;"></div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="vc_row wpb_row vc_row-fluid vc_row-o-content-bottom vc_row-flex text-align-center-sm-ms">
																<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-12 vc_col-md-12">
																	<div class="vc_column-inner">
																		<div class="wpb_wrapper">
																			<div class="heading  heading-large header-outline-subheader align-left color-white transform-default icon-type-hidden heading-tag-h1"
																				id="like_sc_header_1088581134">
																				<h1 class="header "><span
																						class="ltx-mobile"><span> Podcast &
																						</span> Many More</span><span
																						class="ltx-desktop"><svg
																							viewbox="0 0 1100 120"><text
																								x="2px" y="50%"
																								alignment-baseline="central"
																								dominant-baseline="middle">
																								Podcast &</text></svg>
																						Many More</span></h1>
																			</div>
																			<div class="es-resp">
																				<div class="visible-xl"
																					style="height: 32px;"></div>
																				<div class="hidden-xl hidden-md hidden-sm hidden-ms hidden-xs"
																					style="height: 32px;"></div>
																				<div class="visible-md"
																					style="height: 32px;"></div>
																				<div class="visible-sm "
																					style="height: 32px;"></div>
																				<div class="visible-ms"
																					style="height: 32px;"></div>
																				<div class="visible-xs"
																					style="height: 32px;"></div>
																			</div>
																			<div class="ltx-content-width col-align-left"
																				id="like_sc_content_width_1124098910"
																				style="max-width: 600px">
																				<div class="ltx-wrapper">
																					<div
																						class="wpb_text_column wpb_content_element ">
																						<div class="wpb_wrapper">
																							<p></p>
																						</div>
																					</div>
																				</div>
																			</div>
																			<div class="es-resp">
																				<div class="visible-xl"
																					style="height: 64px;"></div>
																				<div class="hidden-xl hidden-md hidden-sm hidden-ms hidden-xs"
																					style="height: 64px;"></div>
																				<div class="visible-md"
																					style="height: 64px;"></div>
																				<div class="visible-sm "
																					style="height: 64px;"></div>
																				<div class="visible-ms"
																					style="height: 64px;"></div>
																				<div class="visible-xs"
																					style="height: 64px;"></div>
																			</div>
																			<div class="btn-wrap btn-wrap-inline"> <a
																					href="#"
																					class="btn  btn-main color-hover-white"
																					id="like_sc_button_600571446">Read
																					more</a></div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="vc_row wpb_row vc_row-fluid">
																<div
																	class="wpb_column vc_column_container vc_col-sm-12">
																	<div class="vc_column-inner">
																		<div class="wpb_wrapper">
																			<div class="es-resp">
																				<div class="visible-xl"
																					style="height: 250px;"></div>
																				<div class="hidden-xl hidden-md hidden-sm hidden-ms hidden-xs"
																					style="height: 250px;"></div>
																				<div class="visible-md"
																					style="height: 250px;"></div>
																				<div class="visible-sm "
																					style="height: 200px;"></div>
																				<div class="visible-ms"
																					style="height: 100px;"></div>
																				<div class="visible-xs"
																					style="height: 100px;"></div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div><span class="ltx-arrow-down"></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="vc_row-full-width vc_clearfix"></div>
								<section data-vc-full-width="true" data-vc-full-width-init="false"
									class="vc_section bg-color-gray bg-pos-center-center">
									<div class="vc_row wpb_row vc_row-fluid">
										<div class="wpb_column vc_column_container vc_col-sm-12">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class="es-resp">
														<div class="visible-xl" style="height: 56px;"></div>
														<div class="hidden-xl hidden-md hidden-sm hidden-ms hidden-xs"
															style="height: 56px;"></div>
														<div class="visible-md" style="height: 56px;"></div>
														<div class="visible-sm " style="height: 56px;"></div>
														<div class="visible-ms" style="height: 32px;"></div>
														<div class="visible-xs" style="height: 32px;"></div>
													</div>
													<div class="heading  header-subheader align-center subcolor-main transform-default has-subheader theme-icon-second icon-type-hidden heading-tag-h3"
														id="like_sc_header_534304679">
														<h5
															class="subheader ltx-sr-id-like_sc_header_5343046791451930432 ltx-sr ltx-sr-effect-fade_in ltx-sr-el-block ltx-sr-delay-100 ltx-sr-duration-300 ltx-sr-sequences-50">
															What we do</h5>
														<h3
															class="header ltx-sr-id-like_sc_header_53430467989907168 ltx-sr ltx-sr-effect-fade_in ltx-sr-el-block ltx-sr-delay-0 ltx-sr-duration-1000 ltx-sr-sequences-0">
															Studio Services</h3>
													</div>
													<div class="es-resp">
														<div class="visible-xl" style="height: 8px;"></div>
														<div class="hidden-xl hidden-md hidden-sm hidden-ms hidden-xs"
															style="height: 8px;"></div>
														<div class="visible-md" style="height: 8px;"></div>
														<div class="visible-sm " style="height: 8px;"></div>
														<div class="visible-ms" style="height: 8px;"></div>
														<div class="visible-xs" style="height: 8px;"></div>
													</div>
													<div class="services-sc services-slider layout-product ltx-style-gray"
														id="like_sc_services_1629980689" data-cols="3"
														data-autoplay="0">
														<div class="swiper-container">
															<div class="swiper-wrapper">
																<article class="swiper-slide">
																	<div class="ltx-inner"> <a
																			href="services/voice-recording-2-2/index.html"
																			class="photo"><img width="750" height="525"
																				src="<?= base_url('assets/web') ?>/uploads/2018/02/serv_01-750x525.jpg"
																				class="attachment-recond-service size-recond-service wp-post-image"
																				alt="" /><span
																				class="ltx-plus"></span></a>
																		<div class="description"> <a
																				href="services/voice-recording-2-2/index.html"
																				class="header">
																				<h5 class="header">Voice Recording</h5>
																			</a>
																			<p> Curabitur fermentum vitae eros eu porta.
																				Curabitur et risus egestas, vulputate
																				lacus eget.</p> <a
																				href="services/voice-recording-2-2/index.html"
																				class="btn btn-xs">Read more</a>
																		</div>
																	</div>
																</article>
																<article class="swiper-slide">
																	<div class="ltx-inner"> <a
																			href="services/sound-mixing-2/index.html"
																			class="photo"><img width="750" height="525"
																				src="<?= base_url('assets/web') ?>/uploads/2018/02/serv_02-750x525.jpg"
																				class="attachment-recond-service size-recond-service wp-post-image"
																				alt="" /><span
																				class="ltx-plus"></span></a>
																		<div class="description"> <a
																				href="services/sound-mixing-2/index.html"
																				class="header">
																				<h5 class="header">Sound Mixing</h5>
																			</a>
																			<p> Morbi tempor tempor enim in tempor.
																				Nulla vel arcu molestie, finibus nulla
																				in, vehicula diam.</p> <a
																				href="services/voice-recording-2-2/index.html"
																				class="btn btn-xs">Read more</a>
																		</div>
																	</div>
																</article>
																<article class="swiper-slide">
																	<div class="ltx-inner"> <a
																			href="services/track-mastering-2/index.html"
																			class="photo"><img width="750" height="525"
																				src="<?= base_url('assets/web') ?>/uploads/2018/02/serv_03-750x525.jpg"
																				class="attachment-recond-service size-recond-service wp-post-image"
																				alt=""
																				srcset="<?= base_url('assets/web') ?>/uploads/2018/02/serv_03-750x525.jpg 750w, <?= base_url('assets/web') ?>/uploads/2018/02/serv_03-300x211.jpg 300w, <?= base_url('assets/web') ?>/uploads/2018/02/serv_03-360x253.jpg 360w"
																				sizes="(max-width: 750px) 100vw, 750px" /><span
																				class="ltx-plus"></span></a>
																		<div class="description"> <a
																				href="services/track-mastering-2/index.html"
																				class="header">
																				<h5 class="header">Track Mastering</h5>
																			</a>
																			<p> Aliquam quis vulputate quam. Curabitur
																				ut mauris eu libero pharetra iaculis
																				finibus sit amet nunc.</p> <a
																				href="services/voice-recording-2-2/index.html"
																				class="btn btn-xs">Read more</a>
																		</div>
																	</div>
																</article>
																<article class="swiper-slide">
																	<div class="ltx-inner"> <a
																			href="services/audio-editing/index.html"
																			class="photo"><img width="750" height="525"
																				src="<?= base_url('assets/web') ?>/uploads/2018/02/serv_04_sound_design-750x525.jpg"
																				class="attachment-recond-service size-recond-service wp-post-image"
																				alt="" /><span
																				class="ltx-plus"></span></a>
																		<div class="description"> <a
																				href="services/audio-editing/index.html"
																				class="header">
																				<h5 class="header">Audio Editing</h5>
																			</a>
																			<p> Curabitur fermentum vitae eros eu porta.
																				Curabitur et risus egestas, vulputate
																				lacus eget.</p> <a
																				href="services/voice-recording-2-2/index.html"
																				class="btn btn-xs">Read more</a>
																		</div>
																	</div>
																</article>
																<article class="swiper-slide">
																	<div class="ltx-inner"> <a
																			href="services/live-recording/index.html"
																			class="photo"><img width="750" height="525"
																				src="<?= base_url('assets/web') ?>/uploads/2018/02/serv_05_arrangement_creating-750x525.jpg"
																				class="attachment-recond-service size-recond-service wp-post-image"
																				alt="" /><span
																				class="ltx-plus"></span></a>
																		<div class="description"> <a
																				href="services/live-recording/index.html"
																				class="header">
																				<h5 class="header">Live Recording</h5>
																			</a>
																			<p> Morbi tempor tempor enim in tempor.
																				Nulla vel arcu molestie, finibus nulla
																				in, vehicula diam.</p> <a
																				href="services/voice-recording-2-2/index.html"
																				class="btn btn-xs">Read more</a>
																		</div>
																	</div>
																</article>
																<article class="swiper-slide">
																	<div class="ltx-inner"> <a
																			href="services/mobile-studio/index.html"
																			class="photo"><img width="750" height="525"
																				src="<?= base_url('assets/web') ?>/uploads/2018/02/serv_06_radio_promotion-750x525.jpg"
																				class="attachment-recond-service size-recond-service wp-post-image"
																				alt=""
																				srcset="<?= base_url('assets/web') ?>/uploads/2018/02/serv_06_radio_promotion-750x525.jpg 750w, <?= base_url('assets/web') ?>/uploads/2018/02/serv_06_radio_promotion-300x209.jpg 300w, <?= base_url('assets/web') ?>/uploads/2018/02/serv_06_radio_promotion-360x251.jpg 360w"
																				sizes="(max-width: 750px) 100vw, 750px" /><span
																				class="ltx-plus"></span></a>
																		<div class="description"> <a
																				href="services/mobile-studio/index.html"
																				class="header">
																				<h5 class="header">Mobile Studio</h5>
																			</a>
																			<p> Vestibulum ante ipsum primis in faucibus
																				orci luctus et ultrices posuere cubilia
																				Curae;</p> <a
																				href="services/voice-recording-2-2/index.html"
																				class="btn btn-xs">Read more</a>
																		</div>
																	</div>
																</article>
															</div>
														</div>
														<div class="arrows"> <a href="#"
																class="arrow-left fa fa-chevron-left"></a> <a href="#"
																class="arrow-right fa fa-chevron-right"></a></div>
													</div>
													<div class="es-resp">
														<div class="visible-xl" style="height: 130px;"></div>
														<div class="hidden-xl hidden-md hidden-sm hidden-ms hidden-xs"
															style="height: 130px;"></div>
														<div class="visible-md" style="height: 130px;"></div>
														<div class="visible-sm " style="height: 130px;"></div>
														<div class="visible-ms" style="height: 80px;"></div>
														<div class="visible-xs" style="height: 80px;"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div data-vc-full-width="true" data-vc-full-width-init="false"
										data-vc-stretch-content="true"
										class="vc_row wpb_row vc_row-fluid ltx-background-animation vc_custom_1562006082147 vc_row-has-fill vc_row-no-padding">
										<div class="wpb_column vc_column_container vc_col-sm-12">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div
														class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1562006047693 vc_row-has-fill">
														<div class="wpb_column vc_column_container vc_col-sm-12">
															<div class="vc_column-inner">
																<div class="wpb_wrapper">
																	<div class="es-resp">
																		<div class="visible-xl" style="height: 400px;">
																		</div>
																		<div class="hidden-xl hidden-md hidden-sm hidden-ms hidden-xs"
																			style="height: 400px;"></div>
																		<div class="visible-md" style="height: 400px;">
																		</div>
																		<div class="visible-sm " style="height: 400px;">
																		</div>
																		<div class="visible-ms" style="height: 400px;">
																		</div>
																		<div class="visible-xs" style="height: 400px;">
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="vc_row-full-width vc_clearfix"></div>
								</section>
								<div class="vc_row-full-width vc_clearfix"></div>
								<section class="vc_section ltx-scroll-section">
									<div class="vc_row wpb_row vc_row-fluid">
										<div class="wpb_column vc_column_container vc_col-sm-12">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class="es-resp">
														<div class="visible-xl" style="height: 118px;"></div>
														<div class="hidden-xl hidden-md hidden-sm hidden-ms hidden-xs"
															style="height: 118px;"></div>
														<div class="visible-md" style="height: 118px;"></div>
														<div class="visible-sm " style="height: 118px;"></div>
														<div class="visible-ms" style="height: 80px;"></div>
														<div class="visible-xs" style="height: 80px;"></div>
													</div>
													<div class="ltx-content-width col-align-center"
														id="like_sc_content_width_1003397665" style="max-width: 1000px">
														<div class="ltx-wrapper">
															<div class="wpb_text_column wpb_content_element ">
																<div class="wpb_wrapper">
																	<p style="text-align: center;"><span
																			class="text-lg">Fusce et ligula scelerisque,
																			facilisis elit eget, semper lectus. Donec
																			varius arcu augue, <span
																				class="color-main">in egestas leo ornare
																				eget</span>. Phasellus commodo pretium
																			ante a congue. Ut quam dolor, egestas.
																		</span></p>
																</div>
															</div>
														</div>
													</div>
													<div class="es-resp">
														<div class="visible-xl" style="height: 80px;"></div>
														<div class="hidden-xl hidden-md hidden-sm hidden-ms hidden-xs"
															style="height: 80px;"></div>
														<div class="visible-md" style="height: 80px;"></div>
														<div class="visible-sm " style="height: 80px;"></div>
														<div class="visible-ms" style="height: 80px;"></div>
														<div class="visible-xs" style="height: 80px;"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="vc_row wpb_row vc_row-fluid">
										<div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-6">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<ul class="ltx-block-icon  has-descr  icons-count-3 align-left ltx-icon-color-main ltx-icon-size-default ltx-header-color-black ltx-icon-type-circle ltx-bg-color-transparent layout-cols1 ltx-icon-ht-right "
														id="like_sc_block_icon_335974344">
														<li>
															<div data-mh="ltx-block-icon-in-1959"
																class="in matchHeight"><span
																	class="ltx-icon icon-live_instruments bg-transparent"
																	data-mh="ltx-icon-span-like_sc_block_icon_335974344"></span>
																<div class="block-right">
																	<h6 class="header"> Live Instruments</h6>
																	<div class="descr">Curabitur fermentum vitae eros eu
																		porta. Curabitur et risus egestas, vulputate
																		lacus eget.</div>
																</div>
															</div>
														</li>
														<li>
															<div data-mh="ltx-block-icon-in-1959"
																class="in matchHeight"><span
																	class="ltx-icon icon-several_studios bg-transparent"
																	data-mh="ltx-icon-span-like_sc_block_icon_335974344"></span>
																<div class="block-right">
																	<h6 class="header"> Multiple Studios</h6>
																	<div class="descr">Curabitur fermentum vitae eros eu
																		porta. Curabitur et risus egestas, vulputate
																		lacus eget.</div>
																</div>
															</div>
														</li>
														<li>
															<div data-mh="ltx-block-icon-in-1959"
																class="in matchHeight"><span
																	class="ltx-icon icon-prof_equipmentt bg-transparent"
																	data-mh="ltx-icon-span-like_sc_block_icon_335974344"></span>
																<div class="block-right">
																	<h6 class="header"> Professional Equipment</h6>
																	<div class="descr">Pellentesque et ex vitae ligula
																		efficitur pretium. Nulla vestibulum aliquam
																		augue.</div>
																</div>
															</div>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<div
											class="ltx-waves-wrapper wpb_column vc_column_container vc_col-sm-6 vc_col-lg-6 vc_col-md-4 vc_hidden-md vc_hidden-sm vc_hidden-xs">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class="es-resp">
														<div class="visible-xl" style="height: 16px;"></div>
														<div class="hidden-xl hidden-md hidden-sm hidden-ms hidden-xs"
															style="height: 16px;"></div>
														<div class="visible-md" style="height: 16px;"></div>
														<div class="visible-sm " style="height: 16px;"></div>
														<div class="visible-ms" style="height: 16px;"></div>
														<div class="visible-xs" style="height: 16px;"></div>
													</div>
													<div class="wpb_single_image wpb_content_element vc_align_center">
														<figure class="wpb_wrapper vc_figure">
															<div class="vc_single_image-wrapper   vc_box_border_grey">
																<img width="493" height="452"
																	src="<?= base_url('assets/web') ?>/uploads/2019/06/about-monitors.png"
																	class="vc_single_image-img attachment-full" alt=""
																	srcset="<?= base_url('assets/web') ?>/uploads/2019/06/about-monitors.png 493w, <?= base_url('assets/web') ?>/uploads/2019/06/about-monitors-300x275.png 300w, <?= base_url('assets/web') ?>/uploads/2019/06/about-monitors-360x330.png 360w"
																	sizes="(max-width: 493px) 100vw, 493px" /></div>
														</figure>
													</div>
													<div
														class="wpb_single_image wpb_content_element vc_align_center   ltx-waves">
														<figure class="wpb_wrapper vc_figure">
															<div class="vc_single_image-wrapper   vc_box_border_grey">
																<img width="700" height="222"
																	src="<?= base_url('assets/web') ?>/uploads/2019/06/about-waves.png"
																	class="vc_single_image-img attachment-full" alt=""
																	srcset="<?= base_url('assets/web') ?>/uploads/2019/06/about-waves.png 700w, <?= base_url('assets/web') ?>/uploads/2019/06/about-waves-300x95.png 300w, <?= base_url('assets/web') ?>/uploads/2019/06/about-waves-360x114.png 360w, <?= base_url('assets/web') ?>/uploads/2019/06/about-waves-600x190.png 600w, <?= base_url('assets/web') ?>/uploads/2019/06/about-waves-550x174.png 550w"
																	sizes="(max-width: 700px) 100vw, 700px" /></div>
														</figure>
													</div>
												</div>
											</div>
										</div>
										<div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-6">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class="es-resp">
														<div class="visible-sm " style="height: 0px;"></div>
														<div class="visible-ms" style="height: 50px;"></div>
														<div class="visible-xs" style="height: 50px;"></div>
													</div>
													<ul class="ltx-block-icon  has-descr  icons-count-3 align-left ltx-icon-color-main ltx-icon-size-default ltx-header-color-black ltx-icon-type-circle ltx-bg-color-transparent layout-cols1 ltx-icon-ht-right "
														id="like_sc_block_icon_1404301450">
														<li>
															<div data-mh="ltx-block-icon-in-1174"
																class="in matchHeight"><span
																	class="ltx-icon icon-arrangement bg-transparent"
																	data-mh="ltx-icon-span-like_sc_block_icon_1404301450"></span>
																<div class="block-right">
																	<h6 class="header"> Own Arrangements</h6>
																	<div class="descr">Curabitur fermentum vitae eros eu
																		porta. Curabitur et risus egestas, vulputate
																		lacus eget.</div>
																</div>
															</div>
														</li>
														<li>
															<div data-mh="ltx-block-icon-in-1174"
																class="in matchHeight"><span
																	class="ltx-icon icon-go_top bg-transparent"
																	data-mh="ltx-icon-span-like_sc_block_icon_1404301450"></span>
																<div class="block-right">
																	<h6 class="header"> Extra Sound-Quality</h6>
																	<div class="descr">Pellentesque et ex vitae ligula
																		efficitur pretium. Nulla vestibulum aliquam
																		augue.</div>
																</div>
															</div>
														</li>
														<li>
															<div data-mh="ltx-block-icon-in-1174"
																class="in matchHeight"><span
																	class="ltx-icon icon-protection bg-transparent"
																	data-mh="ltx-icon-span-like_sc_block_icon_1404301450"></span>
																<div class="block-right">
																	<h6 class="header"> Rights Protection</h6>
																	<div class="descr">Pellentesque et ex vitae ligula
																		efficitur pretium. Nulla vestibulum aliquam
																		augue.</div>
																</div>
															</div>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="vc_row wpb_row vc_row-fluid ltx-scroll-wrapper">
										<div
											class="wpb_column vc_column_container vc_col-sm-12 vc_hidden-md vc_hidden-sm vc_hidden-xs">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class="ltx-parallax-slider-wrapper ltx-parallax-slider">
														<div data-depth="0.3" data-direction="horizontal"
															class="ltx-layer ltx-layer-2 ltx-floating-image"> <img
																class="ltx-floating-image" alt="bg"
																src="<?= base_url('assets/web') ?>/uploads/2019/06/about-guitar.png"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="vc_row wpb_row vc_row-fluid">
										<div class="wpb_column vc_column_container vc_col-sm-12">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class="es-resp">
														<div class="visible-xl" style="height: 48px;"></div>
														<div class="hidden-xl hidden-md hidden-sm hidden-ms hidden-xs"
															style="height: 48px;"></div>
														<div class="visible-md" style="height: 48px;"></div>
														<div class="visible-sm " style="height: 48px;"></div>
														<div class="visible-ms" style="height: 48px;"></div>
														<div class="visible-xs" style="height: 48px;"></div>
													</div>
													<div class="btn-wrap align-center"> <a href="#"
															class="btn  btn-main color-hover-default align-center"
															id="like_sc_button_1325847695">About studio</a></div>
													<div class="es-resp">
														<div class="visible-xl" style="height: 140px;"></div>
														<div class="hidden-xl hidden-md hidden-sm hidden-ms hidden-xs"
															style="height: 140px;"></div>
														<div class="visible-md" style="height: 140px;"></div>
														<div class="visible-sm " style="height: 140px;"></div>
														<div class="visible-ms" style="height: 90px;"></div>
														<div class="visible-xs" style="height: 90px;"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>
								<section data-vc-full-width="true" data-vc-full-width-init="false"
									data-vc-parallax="1.7"
									class="vc_section vc_custom_1562165797244 vc_section-has-fill vc_general vc_parallax vc_parallax-content-moving bg-color-black ltx-overlay bg-overlay-black">
									<div class="vc_row wpb_row vc_row-fluid">
										<div class="wpb_column vc_column_container vc_col-sm-12">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class="es-resp">
														<div class="visible-xl" style="height: 48px;"></div>
														<div class="hidden-xl hidden-md hidden-sm hidden-ms hidden-xs"
															style="height: 48px;"></div>
														<div class="visible-md" style="height: 48px;"></div>
														<div class="visible-sm " style="height: 48px;"></div>
														<div class="visible-ms" style="height: 48px;"></div>
														<div class="visible-xs" style="height: 48px;"></div>
													</div>
													<div class="heading  header-subheader align-center subcolor-main transform-default has-subheader theme-icon-second icon-type-hidden heading-tag-h3"
														id="like_sc_header_888893791">
														<h5
															class="subheader ltx-sr-id-like_sc_header_8888937912067320136 ltx-sr ltx-sr-effect-fade_in ltx-sr-el-block ltx-sr-delay-100 ltx-sr-duration-300 ltx-sr-sequences-50">
															Territory</h5>
														<h3
															class="header ltx-sr-id-like_sc_header_888893791715420640 ltx-sr ltx-sr-effect-fade_in ltx-sr-el-block ltx-sr-delay-0 ltx-sr-duration-1000 ltx-sr-sequences-0">
															Working Rooms</h3>
													</div>
													<div class="ltx-content-width col-align-center"
														id="like_sc_content_width_1729533995" style="max-width: 770px">
														<div class="ltx-wrapper">
															<div class="wpb_text_column wpb_content_element ">
																<div class="wpb_wrapper">
																	<p style="text-align: center;"><span
																			class="text-md">Curabitur fermentum vitae
																			eros eu porta. Curabitur et risus egestas,
																			vulputate lacus eget, sodales odio. Mauris
																			suscipit eleifend mauris. Curabitur
																			fermentum.</span></p>
																</div>
															</div>
														</div>
													</div>
													<div class="es-resp">
														<div class="visible-xl" style="height: 48px;"></div>
														<div class="hidden-xl hidden-md hidden-sm hidden-ms hidden-xs"
															style="height: 48px;"></div>
														<div class="visible-md" style="height: 48px;"></div>
														<div class="visible-sm " style="height: 48px;"></div>
														<div class="visible-ms" style="height: 48px;"></div>
														<div class="visible-xs" style="height: 48px;"></div>
													</div>
													<div class="portfolio-sc ltx-slider">
														<div class="ltx-portfolio-menu">
															<ul>
																<li><a href="portfolio/drum-room/index.html"
																		data-id="10067"><span>01.</span>Drum Room</a>
																</li>
																<li><a href="portfolio/recording-hall/index.html"
																		data-id="10069"><span>02.</span>Recording
																		Hall</a></li>
																<li><a href="portfolio/editing-studio/index.html"
																		data-id="10068"><span>03.</span>Editing
																		Studio</a></li>
																<li><a href="portfolio/mastering-room/index.html"
																		data-id="10066"><span>04.</span>Mastering
																		Room</a></li>
																<li><a href="portfolio/arrangement-studio/index.html"
																		data-id="4451"><span>05.</span>Arrangement
																		Studio</a></li>
															</ul>
														</div>
														<div class="ltx-portfolio-items">
															<div class="row item ltx-portfolio-10067">
																<div class="col-xl-6 col-lg-7 col-xl-offset-2 col-lg-offset-0 ltx-image"
																	style="background-image: url(<?= base_url('assets/web') ?>/uploads/2018/02/02_hall.jpg)">
																</div>
																<div class="col-xl-4 col-lg-5 ltx-content">
																	<div class="ltx-content-inner">
																		<div class="vc_row wpb_row vc_row-fluid">
																			<div
																				class="wpb_column vc_column_container vc_col-sm-12">
																				<div class="vc_column-inner">
																					<div class="wpb_wrapper">
																						<div class="heading  heading-large default align-left subcolor-main transform-default icon-type-hidden   vc_custom_1562000883667 heading-tag-h4"
																							id="like_sc_header_40214681">
																							<h4
																								class="header ltx-sr-id-like_sc_header_40214681234533244 ltx-sr ltx-sr-effect-fade_in ltx-sr-el-block ltx-sr-delay-0 ltx-sr-duration-1000 ltx-sr-sequences-0">
																								Drum Room</h4>
																						</div>
																						<div class="es-resp">
																							<div class="visible-xl"
																								style="height: 24px;">
																							</div>
																							<div class="hidden-xl hidden-md hidden-sm hidden-ms hidden-xs"
																								style="height: 24px;">
																							</div>
																							<div class="visible-md"
																								style="height: 24px;">
																							</div>
																							<div class="visible-sm "
																								style="height: 24px;">
																							</div>
																							<div class="visible-ms"
																								style="height: 24px;">
																							</div>
																							<div class="visible-xs"
																								style="height: 24px;">
																							</div>
																						</div>
																						<div
																							class="wpb_text_column wpb_content_element ">
																							<div class="wpb_wrapper">
																								<p>Pellentesque et ex
																									vitae ligula
																									efficitur pretium.
																									Nulla vestibulum
																									aliquam augue.
																									Curabitur fermentum
																									efficitur pretium.
																									Nulla vestibulum
																									aliquam augue vitae.
																								</p>
																							</div>
																						</div>
																						<div class="es-resp">
																							<div class="visible-xl"
																								style="height: 18px;">
																							</div>
																							<div class="hidden-xl hidden-md hidden-sm hidden-ms hidden-xs"
																								style="height: 18px;">
																							</div>
																							<div class="visible-md"
																								style="height: 18px;">
																							</div>
																							<div class="visible-sm "
																								style="height: 18px;">
																							</div>
																							<div class="visible-ms"
																								style="height: 18px;">
																							</div>
																							<div class="visible-xs"
																								style="height: 18px;">
																							</div>
																						</div>
																						<div class="heading  header-price align-left subcolor-main transform-default has-subheader icon-type-hidden   vc_custom_1561997445942 heading-tag-h6"
																							id="like_sc_header_59683008">
																							<h5
																								class="subheader ltx-sr-id-like_sc_header_59683008968872301 ltx-sr ltx-sr-effect-fade_in ltx-sr-el-block ltx-sr-delay-100 ltx-sr-duration-300 ltx-sr-sequences-50">
																								35<span>$</span></h5>
																							<h6
																								class="header ltx-sr-id-like_sc_header_596830081205641483 ltx-sr ltx-sr-effect-fade_in ltx-sr-el-block ltx-sr-delay-0 ltx-sr-duration-1000 ltx-sr-sequences-0">
																								/hour</h6>
																						</div>
																						<div class="es-resp">
																							<div class="visible-xl"
																								style="height: 42px;">
																							</div>
																							<div class="hidden-xl hidden-md hidden-sm hidden-ms hidden-xs"
																								style="height: 42px;">
																							</div>
																							<div class="visible-md"
																								style="height: 42px;">
																							</div>
																							<div class="visible-sm "
																								style="height: 42px;">
																							</div>
																							<div class="visible-ms"
																								style="height: 42px;">
																							</div>
																							<div class="visible-xs"
																								style="height: 42px;">
																							</div>
																						</div>
																						<div class="btn-wrap"> <a
																								href="#"
																								class="btn  btn-main color-hover-default   vc_custom_1561995302601"
																								id="like_sc_button_23788713">Read
																								more</a></div>
																						<div class="es-resp">
																							<div class="visible-xl"
																								style="height: 48px;">
																							</div>
																							<div class="hidden-xl hidden-md hidden-sm hidden-ms hidden-xs"
																								style="height: 48px;">
																							</div>
																							<div class="visible-md"
																								style="height: 48px;">
																							</div>
																							<div class="visible-sm "
																								style="height: 48px;">
																							</div>
																							<div class="visible-ms"
																								style="height: 48px;">
																							</div>
																							<div class="visible-xs"
																								style="height: 48px;">
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="row item ltx-portfolio-10069">
																<div class="col-xl-6 col-lg-7 col-xl-offset-2 col-lg-offset-0 ltx-image"
																	style="background-image: url(<?= base_url('assets/web') ?>/uploads/2018/02/01_hall.jpg)">
																</div>
																<div class="col-xl-4 col-lg-5 ltx-content">
																	<div class="ltx-content-inner">
																		<div class="vc_row wpb_row vc_row-fluid">
																			<div
																				class="wpb_column vc_column_container vc_col-sm-12">
																				<div class="vc_column-inner">
																					<div class="wpb_wrapper">
																						<div class="heading  heading-large default align-left subcolor-main transform-default icon-type-hidden   vc_custom_1561997342293 heading-tag-h4"
																							id="like_sc_header_742496613">
																							<h4
																								class="header ltx-sr-id-like_sc_header_7424966131240717419 ltx-sr ltx-sr-effect-fade_in ltx-sr-el-block ltx-sr-delay-0 ltx-sr-duration-1000 ltx-sr-sequences-0">
																								Recording Hall</h4>
																						</div>
																						<div class="es-resp">
																							<div class="visible-xl"
																								style="height: 24px;">
																							</div>
																							<div class="hidden-xl hidden-md hidden-sm hidden-ms hidden-xs"
																								style="height: 24px;">
																							</div>
																							<div class="visible-md"
																								style="height: 24px;">
																							</div>
																							<div class="visible-sm "
																								style="height: 24px;">
																							</div>
																							<div class="visible-ms"
																								style="height: 24px;">
																							</div>
																							<div class="visible-xs"
																								style="height: 24px;">
																							</div>
																						</div>
																						<div
																							class="wpb_text_column wpb_content_element ">
																							<div class="wpb_wrapper">
																								<p>Pellentesque et ex
																									vitae ligula
																									efficitur pretium.
																									Nulla vestibulum
																									aliquam augue.
																									Curabitur fermentum
																									efficitur pretium.
																									Nulla vestibulum
																									aliquam augue vitae.
																								</p>
																							</div>
																						</div>
																						<div class="es-resp">
																							<div class="visible-xl"
																								style="height: 18px;">
																							</div>
																							<div class="hidden-xl hidden-md hidden-sm hidden-ms hidden-xs"
																								style="height: 18px;">
																							</div>
																							<div class="visible-md"
																								style="height: 18px;">
																							</div>
																							<div class="visible-sm "
																								style="height: 18px;">
																							</div>
																							<div class="visible-ms"
																								style="height: 18px;">
																							</div>
																							<div class="visible-xs"
																								style="height: 18px;">
																							</div>
																						</div>
																						<div class="heading  header-price align-left subcolor-main transform-default has-subheader icon-type-hidden   vc_custom_1561997445942 heading-tag-h6"
																							id="like_sc_header_704764011">
																							<h5
																								class="subheader ltx-sr-id-like_sc_header_7047640112049829031 ltx-sr ltx-sr-effect-fade_in ltx-sr-el-block ltx-sr-delay-100 ltx-sr-duration-300 ltx-sr-sequences-50">
																								35<span>$</span></h5>
																							<h6
																								class="header ltx-sr-id-like_sc_header_7047640111852349267 ltx-sr ltx-sr-effect-fade_in ltx-sr-el-block ltx-sr-delay-0 ltx-sr-duration-1000 ltx-sr-sequences-0">
																								/hour</h6>
																						</div>
																						<div class="es-resp">
																							<div class="visible-xl"
																								style="height: 42px;">
																							</div>
																							<div class="hidden-xl hidden-md hidden-sm hidden-ms hidden-xs"
																								style="height: 42px;">
																							</div>
																							<div class="visible-md"
																								style="height: 42px;">
																							</div>
																							<div class="visible-sm "
																								style="height: 42px;">
																							</div>
																							<div class="visible-ms"
																								style="height: 42px;">
																							</div>
																							<div class="visible-xs"
																								style="height: 42px;">
																							</div>
																						</div>
																						<div class="btn-wrap"> <a
																								href="#"
																								class="btn  btn-main color-hover-default   vc_custom_1561995302601"
																								id="like_sc_button_1494106945">Read
																								more</a></div>
																						<div class="es-resp">
																							<div class="visible-xl"
																								style="height: 48px;">
																							</div>
																							<div class="hidden-xl hidden-md hidden-sm hidden-ms hidden-xs"
																								style="height: 48px;">
																							</div>
																							<div class="visible-md"
																								style="height: 48px;">
																							</div>
																							<div class="visible-sm "
																								style="height: 48px;">
																							</div>
																							<div class="visible-ms"
																								style="height: 48px;">
																							</div>
																							<div class="visible-xs"
																								style="height: 48px;">
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="row item ltx-portfolio-10068">
																<div class="col-xl-6 col-lg-7 col-xl-offset-2 col-lg-offset-0 ltx-image"
																	style="background-image: url(<?= base_url('assets/web') ?>/uploads/2018/02/03_hall.jpg)">
																</div>
																<div class="col-xl-4 col-lg-5 ltx-content">
																	<div class="ltx-content-inner">
																		<div class="vc_row wpb_row vc_row-fluid">
																			<div
																				class="wpb_column vc_column_container vc_col-sm-12">
																				<div class="vc_column-inner">
																					<div class="wpb_wrapper">
																						<div class="heading  heading-large default align-left subcolor-main transform-default icon-type-hidden   vc_custom_1562000899841 heading-tag-h4"
																							id="like_sc_header_535551719">
																							<h4
																								class="header ltx-sr-id-like_sc_header_535551719253608183 ltx-sr ltx-sr-effect-fade_in ltx-sr-el-block ltx-sr-delay-0 ltx-sr-duration-1000 ltx-sr-sequences-0">
																								Editing Studio</h4>
																						</div>
																						<div class="es-resp">
																							<div class="visible-xl"
																								style="height: 24px;">
																							</div>
																							<div class="hidden-xl hidden-md hidden-sm hidden-ms hidden-xs"
																								style="height: 24px;">
																							</div>
																							<div class="visible-md"
																								style="height: 24px;">
																							</div>
																							<div class="visible-sm "
																								style="height: 24px;">
																							</div>
																							<div class="visible-ms"
																								style="height: 24px;">
																							</div>
																							<div class="visible-xs"
																								style="height: 24px;">
																							</div>
																						</div>
																						<div
																							class="wpb_text_column wpb_content_element ">
																							<div class="wpb_wrapper">
																								<p>Pellentesque et ex
																									vitae ligula
																									efficitur pretium.
																									Nulla vestibulum
																									aliquam augue.
																									Curabitur fermentum
																									efficitur pretium.
																									Nulla vestibulum
																									aliquam augue vitae.
																								</p>
																							</div>
																						</div>
																						<div class="es-resp">
																							<div class="visible-xl"
																								style="height: 18px;">
																							</div>
																							<div class="hidden-xl hidden-md hidden-sm hidden-ms hidden-xs"
																								style="height: 18px;">
																							</div>
																							<div class="visible-md"
																								style="height: 18px;">
																							</div>
																							<div class="visible-sm "
																								style="height: 18px;">
																							</div>
																							<div class="visible-ms"
																								style="height: 18px;">
																							</div>
																							<div class="visible-xs"
																								style="height: 18px;">
																							</div>
																						</div>
																						<div class="heading  header-price align-left subcolor-main transform-default has-subheader icon-type-hidden   vc_custom_1561997445942 heading-tag-h6"
																							id="like_sc_header_104391763">
																							<h5
																								class="subheader ltx-sr-id-like_sc_header_1043917631797230130 ltx-sr ltx-sr-effect-fade_in ltx-sr-el-block ltx-sr-delay-100 ltx-sr-duration-300 ltx-sr-sequences-50">
																								35<span>$</span></h5>
																							<h6
																								class="header ltx-sr-id-like_sc_header_104391763586709793 ltx-sr ltx-sr-effect-fade_in ltx-sr-el-block ltx-sr-delay-0 ltx-sr-duration-1000 ltx-sr-sequences-0">
																								/hour</h6>
																						</div>
																						<div class="es-resp">
																							<div class="visible-xl"
																								style="height: 42px;">
																							</div>
																							<div class="hidden-xl hidden-md hidden-sm hidden-ms hidden-xs"
																								style="height: 42px;">
																							</div>
																							<div class="visible-md"
																								style="height: 42px;">
																							</div>
																							<div class="visible-sm "
																								style="height: 42px;">
																							</div>
																							<div class="visible-ms"
																								style="height: 42px;">
																							</div>
																							<div class="visible-xs"
																								style="height: 42px;">
																							</div>
																						</div>
																						<div class="btn-wrap"> <a
																								href="#"
																								class="btn  btn-main color-hover-default   vc_custom_1561995302601"
																								id="like_sc_button_143871200">Read
																								more</a></div>
																						<div class="es-resp">
																							<div class="visible-xl"
																								style="height: 48px;">
																							</div>
																							<div class="hidden-xl hidden-md hidden-sm hidden-ms hidden-xs"
																								style="height: 48px;">
																							</div>
																							<div class="visible-md"
																								style="height: 48px;">
																							</div>
																							<div class="visible-sm "
																								style="height: 48px;">
																							</div>
																							<div class="visible-ms"
																								style="height: 48px;">
																							</div>
																							<div class="visible-xs"
																								style="height: 48px;">
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="row item ltx-portfolio-10066">
																<div class="col-xl-6 col-lg-7 col-xl-offset-2 col-lg-offset-0 ltx-image"
																	style="background-image: url(<?= base_url('assets/web') ?>/uploads/2018/02/04_hall.jpg)">
																</div>
																<div class="col-xl-4 col-lg-5 ltx-content">
																	<div class="ltx-content-inner">
																		<div class="vc_row wpb_row vc_row-fluid">
																			<div
																				class="wpb_column vc_column_container vc_col-sm-12">
																				<div class="vc_column-inner">
																					<div class="wpb_wrapper">
																						<div class="heading  heading-large default align-left subcolor-main transform-default icon-type-hidden   vc_custom_1562000917350 heading-tag-h4"
																							id="like_sc_header_1978784273">
																							<h4
																								class="header ltx-sr-id-like_sc_header_19787842731088232128 ltx-sr ltx-sr-effect-fade_in ltx-sr-el-block ltx-sr-delay-0 ltx-sr-duration-1000 ltx-sr-sequences-0">
																								Mastering Room</h4>
																						</div>
																						<div class="es-resp">
																							<div class="visible-xl"
																								style="height: 24px;">
																							</div>
																							<div class="hidden-xl hidden-md hidden-sm hidden-ms hidden-xs"
																								style="height: 24px;">
																							</div>
																							<div class="visible-md"
																								style="height: 24px;">
																							</div>
																							<div class="visible-sm "
																								style="height: 24px;">
																							</div>
																							<div class="visible-ms"
																								style="height: 24px;">
																							</div>
																							<div class="visible-xs"
																								style="height: 24px;">
																							</div>
																						</div>
																						<div
																							class="wpb_text_column wpb_content_element ">
																							<div class="wpb_wrapper">
																								<p>Pellentesque et ex
																									vitae ligula
																									efficitur pretium.
																									Nulla vestibulum
																									aliquam augue.
																									Curabitur fermentum
																									efficitur pretium.
																									Nulla vestibulum
																									aliquam augue vitae.
																								</p>
																							</div>
																						</div>
																						<div class="es-resp">
																							<div class="visible-xl"
																								style="height: 18px;">
																							</div>
																							<div class="hidden-xl hidden-md hidden-sm hidden-ms hidden-xs"
																								style="height: 18px;">
																							</div>
																							<div class="visible-md"
																								style="height: 18px;">
																							</div>
																							<div class="visible-sm "
																								style="height: 18px;">
																							</div>
																							<div class="visible-ms"
																								style="height: 18px;">
																							</div>
																							<div class="visible-xs"
																								style="height: 18px;">
																							</div>
																						</div>
																						<div class="heading  header-price align-left subcolor-main transform-default has-subheader icon-type-hidden   vc_custom_1561997445942 heading-tag-h6"
																							id="like_sc_header_1369171571">
																							<h5
																								class="subheader ltx-sr-id-like_sc_header_1369171571658186328 ltx-sr ltx-sr-effect-fade_in ltx-sr-el-block ltx-sr-delay-100 ltx-sr-duration-300 ltx-sr-sequences-50">
																								35<span>$</span></h5>
																							<h6
																								class="header ltx-sr-id-like_sc_header_1369171571377013961 ltx-sr ltx-sr-effect-fade_in ltx-sr-el-block ltx-sr-delay-0 ltx-sr-duration-1000 ltx-sr-sequences-0">
																								/hour</h6>
																						</div>
																						<div class="es-resp">
																							<div class="visible-xl"
																								style="height: 42px;">
																							</div>
																							<div class="hidden-xl hidden-md hidden-sm hidden-ms hidden-xs"
																								style="height: 42px;">
																							</div>
																							<div class="visible-md"
																								style="height: 42px;">
																							</div>
																							<div class="visible-sm "
																								style="height: 42px;">
																							</div>
																							<div class="visible-ms"
																								style="height: 42px;">
																							</div>
																							<div class="visible-xs"
																								style="height: 42px;">
																							</div>
																						</div>
																						<div class="btn-wrap"> <a
																								href="#"
																								class="btn  btn-main color-hover-default   vc_custom_1561995302601"
																								id="like_sc_button_564462140">Read
																								more</a></div>
																						<div class="es-resp">
																							<div class="visible-xl"
																								style="height: 48px;">
																							</div>
																							<div class="hidden-xl hidden-md hidden-sm hidden-ms hidden-xs"
																								style="height: 48px;">
																							</div>
																							<div class="visible-md"
																								style="height: 48px;">
																							</div>
																							<div class="visible-sm "
																								style="height: 48px;">
																							</div>
																							<div class="visible-ms"
																								style="height: 48px;">
																							</div>
																							<div class="visible-xs"
																								style="height: 48px;">
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="row item ltx-portfolio-4451">
																<div class="col-xl-6 col-lg-7 col-xl-offset-2 col-lg-offset-0 ltx-image"
																	style="background-image: url(<?= base_url('assets/web') ?>/uploads/2018/02/05_hall.jpg)">
																</div>
																<div class="col-xl-4 col-lg-5 ltx-content">
																	<div class="ltx-content-inner">
																		<div class="vc_row wpb_row vc_row-fluid">
																			<div
																				class="wpb_column vc_column_container vc_col-sm-12">
																				<div class="vc_column-inner">
																					<div class="wpb_wrapper">
																						<div class="heading  heading-large default align-left subcolor-main transform-default icon-type-hidden   vc_custom_1562000932026 heading-tag-h4"
																							id="like_sc_header_1423333567">
																							<h4
																								class="header ltx-sr-id-like_sc_header_14233335671556545310 ltx-sr ltx-sr-effect-fade_in ltx-sr-el-block ltx-sr-delay-0 ltx-sr-duration-1000 ltx-sr-sequences-0">
																								Arrangement Studio</h4>
																						</div>
																						<div class="es-resp">
																							<div class="visible-xl"
																								style="height: 24px;">
																							</div>
																							<div class="hidden-xl hidden-md hidden-sm hidden-ms hidden-xs"
																								style="height: 24px;">
																							</div>
																							<div class="visible-md"
																								style="height: 24px;">
																							</div>
																							<div class="visible-sm "
																								style="height: 24px;">
																							</div>
																							<div class="visible-ms"
																								style="height: 24px;">
																							</div>
																							<div class="visible-xs"
																								style="height: 24px;">
																							</div>
																						</div>
																						<div
																							class="wpb_text_column wpb_content_element ">
																							<div class="wpb_wrapper">
																								<p>Pellentesque et ex
																									vitae ligula
																									efficitur pretium.
																									Nulla vestibulum
																									aliquam augue.
																									Curabitur fermentum
																									efficitur pretium.
																									Nulla vestibulum
																									aliquam augue vitae.
																								</p>
																							</div>
																						</div>
																						<div class="es-resp">
																							<div class="visible-xl"
																								style="height: 18px;">
																							</div>
																							<div class="hidden-xl hidden-md hidden-sm hidden-ms hidden-xs"
																								style="height: 18px;">
																							</div>
																							<div class="visible-md"
																								style="height: 18px;">
																							</div>
																							<div class="visible-sm "
																								style="height: 18px;">
																							</div>
																							<div class="visible-ms"
																								style="height: 18px;">
																							</div>
																							<div class="visible-xs"
																								style="height: 18px;">
																							</div>
																						</div>
																						<div class="heading  header-price align-left subcolor-main transform-default has-subheader icon-type-hidden   vc_custom_1561997445942 heading-tag-h6"
																							id="like_sc_header_797322739">
																							<h5
																								class="subheader ltx-sr-id-like_sc_header_7973227391572257934 ltx-sr ltx-sr-effect-fade_in ltx-sr-el-block ltx-sr-delay-100 ltx-sr-duration-300 ltx-sr-sequences-50">
																								35<span>$</span></h5>
																							<h6
																								class="header ltx-sr-id-like_sc_header_7973227391210818199 ltx-sr ltx-sr-effect-fade_in ltx-sr-el-block ltx-sr-delay-0 ltx-sr-duration-1000 ltx-sr-sequences-0">
																								/hour</h6>
																						</div>
																						<div class="es-resp">
																							<div class="visible-xl"
																								style="height: 42px;">
																							</div>
																							<div class="hidden-xl hidden-md hidden-sm hidden-ms hidden-xs"
																								style="height: 42px;">
																							</div>
																							<div class="visible-md"
																								style="height: 42px;">
																							</div>
																							<div class="visible-sm "
																								style="height: 42px;">
																							</div>
																							<div class="visible-ms"
																								style="height: 42px;">
																							</div>
																							<div class="visible-xs"
																								style="height: 42px;">
																							</div>
																						</div>
																						<div class="btn-wrap"> <a
																								href="#"
																								class="btn  btn-main color-hover-default   vc_custom_1561995302601"
																								id="like_sc_button_1865302489">Read
																								more</a></div>
																						<div class="es-resp">
																							<div class="visible-xl"
																								style="height: 48px;">
																							</div>
																							<div class="hidden-xl hidden-md hidden-sm hidden-ms hidden-xs"
																								style="height: 48px;">
																							</div>
																							<div class="visible-md"
																								style="height: 48px;">
																							</div>
																							<div class="visible-sm "
																								style="height: 48px;">
																							</div>
																							<div class="visible-ms"
																								style="height: 48px;">
																							</div>
																							<div class="visible-xs"
																								style="height: 48px;">
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="es-resp">
														<div class="visible-xl" style="height: 140px;"></div>
														<div class="hidden-xl hidden-md hidden-sm hidden-ms hidden-xs"
															style="height: 140px;"></div>
														<div class="visible-md" style="height: 140px;"></div>
														<div class="visible-sm " style="height: 140px;"></div>
														<div class="visible-ms" style="height: 100px;"></div>
														<div class="visible-xs" style="height: 100px;"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>
								<div class="vc_row-full-width vc_clearfix"></div>
								<section data-vc-full-width="true" data-vc-full-width-init="false"
									data-vc-stretch-content="true"
									class="vc_section vc_section-o-content-middle vc_section-flex ltx-records">
									<div class="vc_row wpb_row vc_row-fluid">
										<div class="wpb_column vc_column_container vc_col-sm-12">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class="es-resp">
														<div class="visible-xl" style="height: 64px;"></div>
														<div class="hidden-xl hidden-md hidden-sm hidden-ms hidden-xs"
															style="height: 64px;"></div>
														<div class="visible-md" style="height: 64px;"></div>
														<div class="visible-sm " style="height: 64px;"></div>
														<div class="visible-ms" style="height: 16px;"></div>
														<div class="visible-xs" style="height: 16px;"></div>
													</div>
													<div class="ltx-content-width col-align-center"
														id="like_sc_content_width_1434739957" style="max-width: 770px">
														<div class="ltx-wrapper">
															<div class="heading  header-subheader align-center subcolor-main transform-default has-subheader theme-icon-second icon-type-hidden heading-tag-h3"
																id="like_sc_header_1954842271">
																<h5
																	class="subheader ltx-sr-id-like_sc_header_1954842271303488583 ltx-sr ltx-sr-effect-fade_in ltx-sr-el-block ltx-sr-delay-100 ltx-sr-duration-300 ltx-sr-sequences-50">
																	Our portfolio</h5>
																<h3
																	class="header ltx-sr-id-like_sc_header_19548422711920852898 ltx-sr ltx-sr-effect-fade_in ltx-sr-el-block ltx-sr-delay-0 ltx-sr-duration-1000 ltx-sr-sequences-0">
																	Recent Records</h3>
															</div>
															<div class="wpb_text_column wpb_content_element ">
																<div class="wpb_wrapper">
																	<p style="text-align: center;"><span
																			class="text-md">Curabitur fermentum vitae
																			eros eu porta. Curabitur et risus egestas,
																			vulputate lacus eget, sodales odio. Mauris
																			suscipit eleifend mauris. Curabitur
																			fermentum.</span></p>
																</div>
															</div>
															<div class="es-resp">
																<div class="visible-xl" style="height: 48px;"></div>
																<div class="hidden-xl hidden-md hidden-sm hidden-ms hidden-xs"
																	style="height: 48px;"></div>
																<div class="visible-md" style="height: 48px;"></div>
																<div class="visible-sm " style="height: 48px;"></div>
																<div class="visible-ms" style="height: 48px;"></div>
																<div class="visible-xs" style="height: 48px;"></div>
															</div>
															<div id="like_sc_media_element_579696593"
																class="ltx-media-element">
																<div class="row">
																	<div class="col-sm-6">
																		<div class="meta">
																			<h6 class="header">London Beats</h6> <span
																				class="author">Calvin Norris</span>
																		</div>
																	</div>
																	<div class="col-sm-6">
																		<div class="media-content"> <audio
																				class="wp-audio-shortcode"
																				id="audio-4451-6" preload="none"
																				style="width: 100%;"
																				controls="controls">
																				<source type="audio/mpeg"
																					src="<?= base_url('assets/web') ?>/uploads/2017/09/acid15f62.mp3?_=6" />
																				<a
																					href="<?= base_url('assets/web') ?>/uploads/2017/09/acid1.mp3"><?= base_url('assets/web') ?>/uploads/2017/09/acid1.mp3</a>
																			</audio></div>
																	</div>
																</div>
															</div>
															<div id="like_sc_media_element_1982620567"
																class="ltx-media-element">
																<div class="row">
																	<div class="col-sm-6">
																		<div class="meta">
																			<h6 class="header">Perfect Love</h6> <span
																				class="author">Andreas Thonikya</span>
																		</div>
																	</div>
																	<div class="col-sm-6">
																		<div class="media-content"> <audio
																				class="wp-audio-shortcode"
																				id="audio-4451-7" preload="none"
																				style="width: 100%;"
																				controls="controls">
																				<source type="audio/mpeg"
																					src="<?= base_url('assets/web') ?>/uploads/2019/07/trance_acid1884.mp3?_=7" />
																				<a
																					href="<?= base_url('assets/web') ?>/uploads/2019/07/trance_acid.mp3"><?= base_url('assets/web') ?>/uploads/2019/07/trance_acid.mp3</a>
																			</audio></div>
																	</div>
																</div>
															</div>
															<div id="like_sc_media_element_1658281615"
																class="ltx-media-element">
																<div class="row">
																	<div class="col-sm-6">
																		<div class="meta">
																			<h6 class="header">Matt Damicern</h6> <span
																				class="author">Inception</span>
																		</div>
																	</div>
																	<div class="col-sm-6">
																		<div class="media-content"> <audio
																				class="wp-audio-shortcode"
																				id="audio-4451-8" preload="none"
																				style="width: 100%;"
																				controls="controls">
																				<source type="audio/mpeg"
																					src="<?= base_url('assets/web') ?>/uploads/2019/07/penetrationfa5c.mp3?_=8" />
																				<a
																					href="<?= base_url('assets/web') ?>/uploads/2019/07/penetration.mp3"><?= base_url('assets/web') ?>/uploads/2019/07/penetration.mp3</a>
																			</audio></div>
																	</div>
																</div>
															</div>
															<div id="like_sc_media_element_136695517"
																class="ltx-media-element">
																<div class="row">
																	<div class="col-sm-6">
																		<div class="meta">
																			<h6 class="header">Africa</h6> <span
																				class="author">Tom Ganarace</span>
																		</div>
																	</div>
																	<div class="col-sm-6">
																		<div class="media-content"> <audio
																				class="wp-audio-shortcode"
																				id="audio-4451-9" preload="none"
																				style="width: 100%;"
																				controls="controls">
																				<source type="audio/mpeg"
																					src="<?= base_url('assets/web') ?>/uploads/2019/07/acid1cb89.mp3?_=9" />
																				<a
																					href="<?= base_url('assets/web') ?>/uploads/2019/07/acid1.mp3"><?= base_url('assets/web') ?>/uploads/2019/07/acid1.mp3</a>
																			</audio></div>
																	</div>
																</div>
															</div>
															<div id="like_sc_media_element_2114915249"
																class="ltx-media-element">
																<div class="row">
																	<div class="col-sm-6">
																		<div class="meta">
																			<h6 class="header">Harmony Rhitm</h6> <span
																				class="author">Collin Davis</span>
																		</div>
																	</div>
																	<div class="col-sm-6">
																		<div class="media-content"> <audio
																				class="wp-audio-shortcode"
																				id="audio-4451-10" preload="none"
																				style="width: 100%;"
																				controls="controls">
																				<source type="audio/mpeg"
																					src="<?= base_url('assets/web') ?>/uploads/2019/07/acid2de89.mp3?_=10" />
																				<a
																					href="<?= base_url('assets/web') ?>/uploads/2019/07/acid2.mp3"><?= base_url('assets/web') ?>/uploads/2019/07/acid2.mp3</a>
																			</audio></div>
																	</div>
																</div>
															</div>
															<div class="es-resp">
																<div class="visible-xl" style="height: 64px;"></div>
																<div class="hidden-xl hidden-md hidden-sm hidden-ms hidden-xs"
																	style="height: 64px;"></div>
																<div class="visible-md" style="height: 64px;"></div>
																<div class="visible-sm " style="height: 64px;"></div>
																<div class="visible-ms" style="height: 64px;"></div>
																<div class="visible-xs" style="height: 64px;"></div>
															</div>
															<div class="btn-wrap align-center"> <a href="#"
																	class="btn  btn-main color-hover-default align-center"
																	id="like_sc_button_2079236951">Read more</a></div>
															<div class="es-resp">
																<div class="visible-xl" style="height: 128px;"></div>
																<div class="hidden-xl hidden-md hidden-sm hidden-ms hidden-xs"
																	style="height: 128px;"></div>
																<div class="visible-md" style="height: 128px;"></div>
																<div class="visible-sm " style="height: 128px;"></div>
																<div class="visible-ms" style="height: 80px;"></div>
																<div class="visible-xs" style="height: 80px;"></div>
															</div>
														</div>
													</div>
													<div
														class="wpb_single_image wpb_content_element vc_align_left  wpb_animate_when_almost_visible wpb_slideInLeft slideInLeft  ltx-records-left">
														<figure class="wpb_wrapper vc_figure">
															<div class="vc_single_image-wrapper   vc_box_border_grey">
																<img width="383" height="600"
																	src="<?= base_url('assets/web') ?>/uploads/2019/07/tracks-left.png"
																	class="vc_single_image-img attachment-full" alt=""
																	srcset="<?= base_url('assets/web') ?>/uploads/2019/07/tracks-left.png 383w, <?= base_url('assets/web') ?>/uploads/2019/07/tracks-left-192x300.png 192w, <?= base_url('assets/web') ?>/uploads/2019/07/tracks-left-360x564.png 360w, <?= base_url('assets/web') ?>/uploads/2019/07/tracks-left-351x550.png 351w"
																	sizes="(max-width: 383px) 100vw, 383px" /></div>
														</figure>
													</div>
													<div
														class="wpb_single_image wpb_content_element vc_align_right  wpb_animate_when_almost_visible wpb_slideInRight slideInRight  ltx-records-right">
														<figure class="wpb_wrapper vc_figure">
															<div class="vc_single_image-wrapper   vc_box_border_grey">
																<img width="369" height="600"
																	src="<?= base_url('assets/web') ?>/uploads/2019/07/tracks-right.png"
																	class="vc_single_image-img attachment-full" alt=""
																	srcset="<?= base_url('assets/web') ?>/uploads/2019/07/tracks-right.png 369w, <?= base_url('assets/web') ?>/uploads/2019/07/tracks-right-185x300.png 185w, <?= base_url('assets/web') ?>/uploads/2019/07/tracks-right-360x585.png 360w, <?= base_url('assets/web') ?>/uploads/2019/07/tracks-right-338x550.png 338w"
																	sizes="(max-width: 369px) 100vw, 369px" /></div>
														</figure>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="vc_row wpb_row vc_row-fluid vc_row-o-content-middle vc_row-flex">
										<div class="wpb_column vc_column_container vc_col-sm-3">
											<div class="vc_column-inner">
												<div class="wpb_wrapper"></div>
											</div>
										</div>
										<div class="wpb_column vc_column_container vc_col-sm-6">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class="ltx-content-width col-align-center"
														id="like_sc_content_width_1568007056" style="max-width: 770px">
														<div class="ltx-wrapper"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="wpb_column vc_column_container vc_col-sm-3">
											<div class="vc_column-inner">
												<div class="wpb_wrapper"></div>
											</div>
										</div>
									</div>
								</section>
								<div class="vc_row-full-width vc_clearfix"></div>
								<section data-vc-full-width="true" data-vc-full-width-init="false"
									class="vc_section vc_custom_1561931227641 vc_section-has-fill bg-color-black">
									<div class="vc_row wpb_row vc_row-fluid">
										<div class="wpb_column vc_column_container vc_col-sm-12">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class="es-resp">
														<div class="visible-xl" style="height: 40px;"></div>
														<div class="hidden-xl hidden-md hidden-sm hidden-ms hidden-xs"
															style="height: 40px;"></div>
														<div class="visible-md" style="height: 40px;"></div>
														<div class="visible-sm " style="height: 40px;"></div>
														<div class="visible-ms" style="height: 32px;"></div>
														<div class="visible-xs" style="height: 32px;"></div>
													</div>
													<div class="heading  header-subheader align-center subcolor-main transform-default has-subheader theme-icon-second icon-type-hidden heading-tag-h3"
														id="like_sc_header_1355845751">
														<h5
															class="subheader ltx-sr-id-like_sc_header_1355845751185936931 ltx-sr ltx-sr-effect-fade_in ltx-sr-el-block ltx-sr-delay-100 ltx-sr-duration-300 ltx-sr-sequences-50">
															Clients</h5>
														<h3
															class="header ltx-sr-id-like_sc_header_13558457511297402382 ltx-sr ltx-sr-effect-fade_in ltx-sr-el-block ltx-sr-delay-0 ltx-sr-duration-1000 ltx-sr-sequences-0">
															Artists Trust Us</h3>
													</div>
													<div class="es-resp">
														<div class="visible-xl" style="height: 24px;"></div>
														<div class="hidden-xl hidden-md hidden-sm hidden-ms hidden-xs"
															style="height: 24px;"></div>
														<div class="visible-md" style="height: 24px;"></div>
														<div class="visible-sm " style="height: 24px;"></div>
														<div class="visible-ms" style="height: 24px;"></div>
														<div class="visible-xs" style="height: 24px;"></div>
													</div>
													<div class="ltx-clients  layout- ltx-logos-9"
														id="like_sc_header_1850248435">
														<div class="swiper-container">
															<div class="swiper-wrapper">
																<div class="swiper-slide">
																	<div class="photo"> <span><img
																				src="<?= base_url('assets/web') ?>/uploads/2018/02/artist_01-480x630.jpg"
																				class="image" alt="Tina Montana"></span>
																		<h5 class="header">Tina Montana</h5>
																	</div>
																</div>
																<div class="swiper-slide">
																	<div class="photo"> <span><img
																				src="<?= base_url('assets/web') ?>/uploads/2018/02/artist_02-480x630.jpg"
																				class="image" alt="Kanny Rodman"></span>
																		<h5 class="header">Kanny Rodman</h5>
																	</div>
																</div>
																<div class="swiper-slide">
																	<div class="photo"> <span><img
																				src="<?= base_url('assets/web') ?>/uploads/2018/02/artist_03-480x630.jpg"
																				class="image" alt="Lady Marta"></span>
																		<h5 class="header">Lady Marta</h5>
																	</div>
																</div>
																<div class="swiper-slide">
																	<div class="photo"> <span><img
																				src="<?= base_url('assets/web') ?>/uploads/2018/02/artist_04-480x630.jpg"
																				class="image" alt="Moran T"></span>
																		<h5 class="header">Moran T</h5>
																	</div>
																</div>
																<div class="swiper-slide">
																	<div class="photo"> <span><img
																				src="<?= base_url('assets/web') ?>/uploads/2018/02/artist_05-480x630.jpg"
																				class="image" alt="Hattie Cash"></span>
																		<h5 class="header">Hattie Cash</h5>
																	</div>
																</div>
																<div class="swiper-slide">
																	<div class="photo"> <span><img
																				src="<?= base_url('assets/web') ?>/uploads/2018/02/artist_06-480x630.jpg"
																				class="image"
																				alt="Matthaios Balfour"></span>
																		<h5 class="header">Matthaios Balfour</h5>
																	</div>
																</div>
																<div class="swiper-slide">
																	<div class="photo"> <span><img
																				src="<?= base_url('assets/web') ?>/uploads/2018/02/artist_07-480x630.jpg"
																				class="image" alt="Hal Wesley"></span>
																		<h5 class="header">Hal Wesley</h5>
																	</div>
																</div>
																<div class="swiper-slide">
																	<div class="photo"> <span><img
																				src="<?= base_url('assets/web') ?>/uploads/2018/02/artist_08-480x630.jpg"
																				class="image"
																				alt="Melanie Allan"></span>
																		<h5 class="header">Melanie Allan</h5>
																	</div>
																</div>
																<div class="swiper-slide">
																	<div class="photo"> <span><img
																				src="<?= base_url('assets/web') ?>/uploads/2018/02/artist_09-480x630.jpg"
																				class="image" alt="Blake Lance"></span>
																		<h5 class="header">Blake Lance</h5>
																	</div>
																</div>
															</div>
														</div>
														<div class="arrows"> <a href="#"
																class="arrow-left fa fa-chevron-left"></a> <a href="#"
																class="arrow-right fa fa-chevron-right"></a></div>
													</div>
													<div class="es-resp">
														<div class="visible-xl" style="height: 130px;"></div>
														<div class="hidden-xl hidden-md hidden-sm hidden-ms hidden-xs"
															style="height: 130px;"></div>
														<div class="visible-md" style="height: 130px;"></div>
														<div class="visible-sm " style="height: 130px;"></div>
														<div class="visible-ms" style="height: 80px;"></div>
														<div class="visible-xs" style="height: 80px;"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>
								<div class="vc_row-full-width vc_clearfix"></div>
								<div data-vc-full-width="true" data-vc-full-width-init="false"
									class="vc_row wpb_row vc_row-fluid vc_custom_1561568937997 bg-color-theme_color">
									<div class="wpb_column vc_column_container vc_col-sm-12">
										<div class="vc_column-inner">
											<div class="wpb_wrapper">
												<div class="ltx-partners ltx-hover-logos  layout- ltx-logos-6"
													id="like_sc_header_1857936766">
													<div class="row centered">
														<div class=" col-md-2  col-sm-4 col-ms-6 col-xs-6  partners-wrap  center-flex"
															data-mh="ltx-partners">
															<div class="partners-item item center-flex"><a href="#"><img
																		src="<?= base_url('assets/web') ?>/uploads/2019/06/partner-1.png"
																		class="image" alt="."></a></div>
														</div>
														<div class=" col-md-2  col-sm-4 col-ms-6 col-xs-6  partners-wrap  center-flex"
															data-mh="ltx-partners">
															<div class="partners-item item center-flex"><a href="#"><img
																		src="<?= base_url('assets/web') ?>/uploads/2019/06/partner-2.png"
																		class="image" alt="."></a></div>
														</div>
														<div class=" col-md-2  col-sm-4 col-ms-6 col-xs-6  partners-wrap  center-flex"
															data-mh="ltx-partners">
															<div class="partners-item item center-flex"><a href="#"><img
																		src="<?= base_url('assets/web') ?>/uploads/2019/06/partner-3.png"
																		class="image" alt="."></a></div>
														</div>
														<div class=" col-md-2  col-sm-4 col-ms-6 col-xs-6  partners-wrap  center-flex"
															data-mh="ltx-partners">
															<div class="partners-item item center-flex"><a href="#"><img
																		src="<?= base_url('assets/web') ?>/uploads/2019/06/partner-4.png"
																		class="image" alt="."></a></div>
														</div>
														<div class=" col-md-2  col-sm-4 col-ms-6 col-xs-6  partners-wrap  center-flex"
															data-mh="ltx-partners">
															<div class="partners-item item center-flex"><a href="#"><img
																		src="<?= base_url('assets/web') ?>/uploads/2019/06/partner-5.png"
																		class="image" alt="."></a></div>
														</div>
														<div class=" col-md-2  col-sm-4 col-ms-6 col-xs-6  partners-wrap  center-flex"
															data-mh="ltx-partners">
															<div class="partners-item item center-flex"><a href="#"><img
																		src="<?= base_url('assets/web') ?>/uploads/2019/06/partner-6.png"
																		class="image" alt="."></a></div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="vc_row-full-width vc_clearfix"></div>
								<section class="vc_section">
									<div class="vc_row wpb_row vc_row-fluid">
										<div class="wpb_column vc_column_container vc_col-sm-12">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class="es-resp">
														<div class="visible-xl" style="height: 64px;"></div>
														<div class="hidden-xl hidden-md hidden-sm hidden-ms hidden-xs"
															style="height: 64px;"></div>
														<div class="visible-md" style="height: 64px;"></div>
														<div class="visible-sm " style="height: 64px;"></div>
														<div class="visible-ms" style="height: 64px;"></div>
														<div class="visible-xs" style="height: 64px;"></div>
													</div>
													<div class="heading  header-subheader align-center subcolor-main transform-default has-subheader theme-icon-second icon-type-hidden heading-tag-h3"
														id="like_sc_header_1234198810">
														<h5
															class="subheader ltx-sr-id-like_sc_header_1234198810336002111 ltx-sr ltx-sr-effect-fade_in ltx-sr-el-block ltx-sr-delay-100 ltx-sr-duration-300 ltx-sr-sequences-50">
															What we use</h5>
														<h3
															class="header ltx-sr-id-like_sc_header_12341988101944904311 ltx-sr ltx-sr-effect-fade_in ltx-sr-el-block ltx-sr-delay-0 ltx-sr-duration-1000 ltx-sr-sequences-0">
															Studio Equipment</h3>
													</div>
													<div class="es-resp">
														<div class="visible-xl" style="height: 24px;"></div>
														<div class="hidden-xl hidden-md hidden-sm hidden-ms hidden-xs"
															style="height: 24px;"></div>
														<div class="visible-md" style="height: 24px;"></div>
														<div class="visible-sm " style="height: 24px;"></div>
														<div class="visible-ms" style="height: 24px;"></div>
														<div class="visible-xs" style="height: 24px;"></div>
													</div>
													<div class="vc_tta-container" data-vc-action="collapse">
														<div
															class="vc_general vc_tta vc_tta-tabs vc_tta-color-grey vc_tta-style-outline vc_tta-shape-rounded vc_tta-spacing-1 vc_tta-tabs-position-top vc_tta-controls-align-center">
															<div class="vc_tta-tabs-container">
																<ul class="vc_tta-tabs-list">
																	<li class="vc_tta-tab vc_active" data-vc-tab><a
																			href="#1561842614459-87f2cfd5-0f19"
																			data-vc-tabs
																			data-vc-container=".vc_tta"><span
																				class="vc_tta-title-text">Microphones</span></a>
																	</li>
																	<li class="vc_tta-tab" data-vc-tab><a
																			href="#1561844221493-4d3e7648-f770"
																			data-vc-tabs
																			data-vc-container=".vc_tta"><span
																				class="vc_tta-title-text">Monitors</span></a>
																	</li>
																	<li class="vc_tta-tab" data-vc-tab><a
																			href="#1561844219085-0a35d96a-aed6"
																			data-vc-tabs
																			data-vc-container=".vc_tta"><span
																				class="vc_tta-title-text">Instruments</span></a>
																	</li>
																	<li class="vc_tta-tab" data-vc-tab><a
																			href="#1561844218510-165a8b6e-d4ce"
																			data-vc-tabs
																			data-vc-container=".vc_tta"><span
																				class="vc_tta-title-text">Software</span></a>
																	</li>
																	<li class="vc_tta-tab" data-vc-tab><a
																			href="#1561844217752-f6a28c92-681b"
																			data-vc-tabs
																			data-vc-container=".vc_tta"><span
																				class="vc_tta-title-text">Amps</span></a>
																	</li>
																</ul>
															</div>
															<div class="vc_tta-panels-container">
																<div class="vc_tta-panels">
																	<div class="vc_tta-panel vc_active"
																		id="1561842614459-87f2cfd5-0f19"
																		data-vc-content=".vc_tta-panel-body">
																		<div class="vc_tta-panel-heading">
																			<h4 class="vc_tta-panel-title"><a
																					href="#1561842614459-87f2cfd5-0f19"
																					data-vc-accordion
																					data-vc-container=".vc_tta-container"><span
																						class="vc_tta-title-text">Microphones</span></a>
																			</h4>
																		</div>
																		<div class="vc_tta-panel-body">
																			<div
																				class="wpb_text_column wpb_content_element ">
																				<div class="wpb_wrapper">
																					<ul class="multicol">
																						<li>Slate ML-1 VMS</li>
																						<li>The Kracken Sub Kick</li>
																						<li>Nuemann KM 184 x2</li>
																						<li>Lewitt LCT 940</li>
																						<li>Rode NTK</li>
																						<li>Electrovoice RE-20</li>
																						<li>Sennheiser MKH 70</li>
																						<li>Shure SM58-C</li>
																						<li>Slate ML-1 VMS</li>
																						<li>The Kracken Sub Kick</li>
																						<li>Nuemann KM 184 x2</li>
																						<li>Audio Technica AT2035</li>
																						<li>Blue Microphones Bluebird SL
																						</li>
																						<li>AKG C214</li>
																						<li>Rode NT1-A</li>
																					</ul>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="vc_tta-panel"
																		id="1561844221493-4d3e7648-f770"
																		data-vc-content=".vc_tta-panel-body">
																		<div class="vc_tta-panel-heading">
																			<h4 class="vc_tta-panel-title"><a
																					href="#1561844221493-4d3e7648-f770"
																					data-vc-accordion
																					data-vc-container=".vc_tta-container"><span
																						class="vc_tta-title-text">Monitors</span></a>
																			</h4>
																		</div>
																		<div class="vc_tta-panel-body">
																			<div
																				class="wpb_text_column wpb_content_element ">
																				<div class="wpb_wrapper">
																					<ul class="multicol">
																						<li>KRK Rokit 5-G3</li>
																						<li>JBL Lsr305</li>
																						<li>Mackie Mr5 Mk3</li>
																						<li>M-Audio Bx5 D2</li>
																						<li>Presonus Eris E5</li>
																						<li>Audioengine A5+</li>
																						<li>Yamaha Hs8</li>
																						<li>Eve Audio Sc205</li>
																						<li>Dynaudio Lyd 7</li>
																						<li>Focal Alpha 80</li>
																						<li>Avantone Mix Cubes</li>
																						<li>Neumann Kh 120</li>
																						<li>Genelec M040</li>
																						<li>Focal Twin6 Be</li>
																						<li>Adam A77x</li>
																					</ul>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="vc_tta-panel"
																		id="1561844219085-0a35d96a-aed6"
																		data-vc-content=".vc_tta-panel-body">
																		<div class="vc_tta-panel-heading">
																			<h4 class="vc_tta-panel-title"><a
																					href="#1561844219085-0a35d96a-aed6"
																					data-vc-accordion
																					data-vc-container=".vc_tta-container"><span
																						class="vc_tta-title-text">Instruments</span></a>
																			</h4>
																		</div>
																		<div class="vc_tta-panel-body">
																			<div
																				class="wpb_text_column wpb_content_element ">
																				<div class="wpb_wrapper">
																					<ul class="multicol">
																						<li>Drums Rogers Holiday
																							&#8217;69</li>
																						<li>Snare Ludwig Jazz Festival
																						</li>
																						<li>Drums Pearl Export Series X2
																						</li>
																						<li>Zildjian Avedis new beat
																							14&#8243; Hi-Hat</li>
																						<li>Sabian B8 14&#8243; Hi-Hat
																						</li>
																						<li>Zildjian Costantinople
																							18&#8243; Crash</li>
																						<li>Istanbul Agop traditional
																							Dark 17&#8243; Crash</li>
																						<li>Istanbul Agop azure
																							20&#8243; Ride</li>
																						<li>Fender Precision Bass 1983
																							Elite USA</li>
																						<li>Yamaha G3 Baby Grand Piano
																						</li>
																						<li>Plairson upright Piano</li>
																						<li>Rhodes MKI 73 Piano</li>
																						<li>Wurlitzer 200 electronic
																							piano</li>
																						<li>Farfisa Doria Organ</li>
																						<li>Farfisa Vip 600 Organ</li>
																						<li>Farfisa Compact Organ</li>
																					</ul>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="vc_tta-panel"
																		id="1561844218510-165a8b6e-d4ce"
																		data-vc-content=".vc_tta-panel-body">
																		<div class="vc_tta-panel-heading">
																			<h4 class="vc_tta-panel-title"><a
																					href="#1561844218510-165a8b6e-d4ce"
																					data-vc-accordion
																					data-vc-container=".vc_tta-container"><span
																						class="vc_tta-title-text">Software</span></a>
																			</h4>
																		</div>
																		<div class="vc_tta-panel-body">
																			<div
																				class="wpb_text_column wpb_content_element ">
																				<div class="wpb_wrapper">
																					<ul class="multicol">
																						<li>Denemo</li>
																						<li>Dorico</li>
																						<li>DirectMusic</li>
																						<li>Vsxu</li>
																						<li>Liquid Rhythm</li>
																						<li>Guitar Rig</li>
																						<li>Kurzweil Digital Piano</li>
																						<li>FL Studio</li>
																						<li>Sound Forge</li>
																						<li>Pro Tools</li>
																						<li>WaveLab</li>
																						<li>Deckadance</li>
																						<li>MultitrackStudio</li>
																						<li>Steinberg Nuendo</li>
																						<li>Sony Sound Forge</li>
																					</ul>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="vc_tta-panel"
																		id="1561844217752-f6a28c92-681b"
																		data-vc-content=".vc_tta-panel-body">
																		<div class="vc_tta-panel-heading">
																			<h4 class="vc_tta-panel-title"><a
																					href="#1561844217752-f6a28c92-681b"
																					data-vc-accordion
																					data-vc-container=".vc_tta-container"><span
																						class="vc_tta-title-text">Amps</span></a>
																			</h4>
																		</div>
																		<div class="vc_tta-panel-body">
																			<div
																				class="wpb_text_column wpb_content_element ">
																				<div class="wpb_wrapper">
																					<ul class="multicol">
																						<li>Marshall JCM 25/50 2555X
																						</li>
																						<li>Vox AC15C2</li>
																						<li>Mesa/Boogie Mark Five: 25
																						</li>
																						<li>Boss Katana-100</li>
																						<li>PRS MT 15 Mark Tremonti</li>
																						<li>Fender Blues Junior IV</li>
																						<li>Blackstar HT Club 40 MkII
																						</li>
																						<li>Orange Rocker 32</li>
																						<li>Victory V40 &#8216;The
																							Duchess&#8217;</li>
																						<li>Kemper Profiler Head</li>
																						<li>Yamaha THR100HD</li>
																						<li>Fender &#8217;68 Custom
																							Deluxe Reverb</li>
																						<li>EVH 5150III 50W EL34</li>
																						<li>Hughes &amp; Kettner Black
																							Spirit 200</li>
																						<li>Mesa/Boogie Triple Crown
																							TC-50</li>
																						<li>EVH 5150III 50W EL34</li>
																					</ul>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="es-resp">
														<div class="visible-xl" style="height: 48px;"></div>
														<div class="hidden-xl hidden-md hidden-sm hidden-ms hidden-xs"
															style="height: 48px;"></div>
														<div class="visible-md" style="height: 48px;"></div>
														<div class="visible-sm " style="height: 48px;"></div>
														<div class="visible-ms" style="height: 48px;"></div>
														<div class="visible-xs" style="height: 48px;"></div>
													</div>
													<div class="btn-wrap align-center"> <a href="#"
															class="btn  btn-main color-hover-default align-center"
															id="like_sc_button_1182562914">Read more</a></div>
													<div class="es-resp">
														<div class="visible-xl" style="height: 128px;"></div>
														<div class="hidden-xl hidden-md hidden-sm hidden-ms hidden-xs"
															style="height: 128px;"></div>
														<div class="visible-md" style="height: 128px;"></div>
														<div class="visible-sm " style="height: 128px;"></div>
														<div class="visible-ms" style="height: 80px;"></div>
														<div class="visible-xs" style="height: 80px;"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>
								<!---  27.17250969181639, 78.39458974496613 
							27.17282467734347, 78.39354904559474-->
								<div data-vc-full-width="true" data-vc-full-width-init="false"
									data-vc-stretch-content="true"
									class="vc_row wpb_row vc_row-fluid vc_row-no-padding">
									<div class="wpb_column vc_column_container vc_col-sm-12">
										<div class="vc_column-inner">
											<div class="wpb_wrapper">
												<div class="gallery-sc swiper-gallery swiper-container  grid"
													data-autoplay="1500" id="like_sc_gallery_129709007">
													<div class="swiper-wrapper">
														<div class="swiper-slide"> <a
																href="<?= base_url('assets/web') ?>/uploads/2018/02/gallery_01.jpg"
																class="swipebox photo "> <span> <img width="275"
																		height="275"
																		src="<?= base_url('assets/web') ?>/uploads/2018/02/gallery_01-275x275.jpg"
																		class="attachment-recond-gallery-grid size-recond-gallery-grid"
																		alt=""
																		srcset="<?= base_url('assets/web') ?>/uploads/2018/02/gallery_01-275x275.jpg 275w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_01-150x150.jpg 150w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_01-300x300.jpg 300w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_01-768x768.jpg 768w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_01-1024x1024.jpg 1024w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_01-360x360.jpg 360w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_01-600x600.jpg 600w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_01-100x100.jpg 100w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_01-24x24.jpg 24w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_01-48x48.jpg 48w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_01-96x96.jpg 96w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_01-50x50.jpg 50w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_01-110x110.jpg 110w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_01-800x800.jpg 800w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_01-550x550.jpg 550w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_01.jpg 1400w"
																		sizes="(max-width: 275px) 100vw, 275px" />
																</span> </a></div>
														<div class="swiper-slide"> <a
																href="<?= base_url('assets/web') ?>/uploads/2018/02/gallery_11.jpg"
																class="swipebox photo "> <span> <img width="275"
																		height="275"
																		src="<?= base_url('assets/web') ?>/uploads/2018/02/gallery_11-275x275.jpg"
																		class="attachment-recond-gallery-grid size-recond-gallery-grid"
																		alt=""
																		srcset="<?= base_url('assets/web') ?>/uploads/2018/02/gallery_11-275x275.jpg 275w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_11-150x150.jpg 150w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_11-300x300.jpg 300w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_11-768x768.jpg 768w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_11-1024x1024.jpg 1024w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_11-360x360.jpg 360w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_11-600x600.jpg 600w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_11-100x100.jpg 100w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_11-24x24.jpg 24w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_11-48x48.jpg 48w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_11-96x96.jpg 96w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_11-50x50.jpg 50w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_11-110x110.jpg 110w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_11-800x800.jpg 800w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_11-550x550.jpg 550w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_11.jpg 1400w"
																		sizes="(max-width: 275px) 100vw, 275px" />
																</span> </a></div>
														<div class="swiper-slide"> <a
																href="<?= base_url('assets/web') ?>/uploads/2018/02/gallery_10.jpg"
																class="swipebox photo "> <span> <img width="275"
																		height="275"
																		src="<?= base_url('assets/web') ?>/uploads/2018/02/gallery_10-275x275.jpg"
																		class="attachment-recond-gallery-grid size-recond-gallery-grid"
																		alt=""
																		srcset="<?= base_url('assets/web') ?>/uploads/2018/02/gallery_10-275x275.jpg 275w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_10-150x150.jpg 150w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_10-300x300.jpg 300w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_10-768x768.jpg 768w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_10-1024x1024.jpg 1024w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_10-360x360.jpg 360w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_10-600x600.jpg 600w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_10-100x100.jpg 100w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_10-24x24.jpg 24w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_10-48x48.jpg 48w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_10-96x96.jpg 96w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_10-50x50.jpg 50w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_10-110x110.jpg 110w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_10-800x800.jpg 800w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_10-550x550.jpg 550w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_10.jpg 1400w"
																		sizes="(max-width: 275px) 100vw, 275px" />
																</span> </a></div>
														<div class="swiper-slide"> <a
																href="<?= base_url('assets/web') ?>/uploads/2018/02/gallery_09.jpg"
																class="swipebox photo "> <span> <img width="275"
																		height="275"
																		src="<?= base_url('assets/web') ?>/uploads/2018/02/gallery_09-275x275.jpg"
																		class="attachment-recond-gallery-grid size-recond-gallery-grid"
																		alt=""
																		srcset="<?= base_url('assets/web') ?>/uploads/2018/02/gallery_09-275x275.jpg 275w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_09-150x150.jpg 150w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_09-300x300.jpg 300w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_09-768x768.jpg 768w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_09-1024x1024.jpg 1024w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_09-360x360.jpg 360w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_09-600x600.jpg 600w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_09-100x100.jpg 100w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_09-24x24.jpg 24w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_09-48x48.jpg 48w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_09-96x96.jpg 96w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_09-50x50.jpg 50w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_09-110x110.jpg 110w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_09-800x800.jpg 800w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_09-550x550.jpg 550w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_09.jpg 1400w"
																		sizes="(max-width: 275px) 100vw, 275px" />
																</span> </a></div>
														<div class="swiper-slide"> <a
																href="<?= base_url('assets/web') ?>/uploads/2018/02/gallery_08.jpg"
																class="swipebox photo "> <span> <img width="275"
																		height="275"
																		src="<?= base_url('assets/web') ?>/uploads/2018/02/gallery_08-275x275.jpg"
																		class="attachment-recond-gallery-grid size-recond-gallery-grid"
																		alt=""
																		srcset="<?= base_url('assets/web') ?>/uploads/2018/02/gallery_08-275x275.jpg 275w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_08-150x150.jpg 150w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_08-300x300.jpg 300w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_08-768x768.jpg 768w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_08-1024x1024.jpg 1024w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_08-360x360.jpg 360w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_08-600x600.jpg 600w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_08-100x100.jpg 100w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_08-24x24.jpg 24w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_08-48x48.jpg 48w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_08-96x96.jpg 96w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_08-50x50.jpg 50w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_08-110x110.jpg 110w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_08-800x800.jpg 800w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_08-550x550.jpg 550w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_08.jpg 1400w"
																		sizes="(max-width: 275px) 100vw, 275px" />
																</span> </a></div>
														<div class="swiper-slide"> <a
																href="<?= base_url('assets/web') ?>/uploads/2018/02/gallery_07.jpg"
																class="swipebox photo "> <span> <img width="275"
																		height="275"
																		src="<?= base_url('assets/web') ?>/uploads/2018/02/gallery_07-275x275.jpg"
																		class="attachment-recond-gallery-grid size-recond-gallery-grid"
																		alt=""
																		srcset="<?= base_url('assets/web') ?>/uploads/2018/02/gallery_07-275x275.jpg 275w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_07-150x150.jpg 150w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_07-300x300.jpg 300w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_07-768x768.jpg 768w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_07-1024x1024.jpg 1024w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_07-360x360.jpg 360w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_07-600x600.jpg 600w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_07-100x100.jpg 100w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_07-24x24.jpg 24w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_07-48x48.jpg 48w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_07-96x96.jpg 96w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_07-50x50.jpg 50w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_07-110x110.jpg 110w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_07-800x800.jpg 800w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_07-550x550.jpg 550w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_07.jpg 1400w"
																		sizes="(max-width: 275px) 100vw, 275px" />
																</span> </a></div>
														<div class="swiper-slide"> <a
																href="<?= base_url('assets/web') ?>/uploads/2018/02/gallery_06.jpg"
																class="swipebox photo "> <span> <img width="275"
																		height="275"
																		src="<?= base_url('assets/web') ?>/uploads/2018/02/gallery_06-275x275.jpg"
																		class="attachment-recond-gallery-grid size-recond-gallery-grid"
																		alt=""
																		srcset="<?= base_url('assets/web') ?>/uploads/2018/02/gallery_06-275x275.jpg 275w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_06-150x150.jpg 150w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_06-300x300.jpg 300w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_06-768x768.jpg 768w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_06-1024x1024.jpg 1024w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_06-360x360.jpg 360w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_06-600x600.jpg 600w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_06-100x100.jpg 100w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_06-24x24.jpg 24w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_06-48x48.jpg 48w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_06-96x96.jpg 96w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_06-50x50.jpg 50w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_06-110x110.jpg 110w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_06-800x800.jpg 800w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_06-550x550.jpg 550w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_06.jpg 1400w"
																		sizes="(max-width: 275px) 100vw, 275px" />
																</span> </a></div>
														<div class="swiper-slide"> <a
																href="<?= base_url('assets/web') ?>/uploads/2018/02/gallery_05.jpg"
																class="swipebox photo "> <span> <img width="275"
																		height="275"
																		src="<?= base_url('assets/web') ?>/uploads/2018/02/gallery_05-275x275.jpg"
																		class="attachment-recond-gallery-grid size-recond-gallery-grid"
																		alt=""
																		srcset="<?= base_url('assets/web') ?>/uploads/2018/02/gallery_05-275x275.jpg 275w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_05-150x150.jpg 150w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_05-300x300.jpg 300w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_05-768x768.jpg 768w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_05-1024x1024.jpg 1024w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_05-360x360.jpg 360w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_05-600x600.jpg 600w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_05-100x100.jpg 100w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_05-24x24.jpg 24w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_05-48x48.jpg 48w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_05-96x96.jpg 96w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_05-50x50.jpg 50w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_05-110x110.jpg 110w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_05-800x800.jpg 800w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_05-550x550.jpg 550w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_05.jpg 1400w"
																		sizes="(max-width: 275px) 100vw, 275px" />
																</span> </a></div>
														<div class="swiper-slide"> <a
																href="<?= base_url('assets/web') ?>/uploads/2018/02/gallery_04.jpg"
																class="swipebox photo "> <span> <img width="275"
																		height="275"
																		src="<?= base_url('assets/web') ?>/uploads/2018/02/gallery_04-275x275.jpg"
																		class="attachment-recond-gallery-grid size-recond-gallery-grid"
																		alt=""
																		srcset="<?= base_url('assets/web') ?>/uploads/2018/02/gallery_04-275x275.jpg 275w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_04-150x150.jpg 150w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_04-300x300.jpg 300w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_04-768x768.jpg 768w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_04-1024x1024.jpg 1024w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_04-360x360.jpg 360w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_04-600x600.jpg 600w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_04-100x100.jpg 100w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_04-24x24.jpg 24w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_04-48x48.jpg 48w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_04-96x96.jpg 96w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_04-50x50.jpg 50w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_04-110x110.jpg 110w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_04-800x800.jpg 800w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_04-550x550.jpg 550w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_04.jpg 1400w"
																		sizes="(max-width: 275px) 100vw, 275px" />
																</span> </a></div>
														<div class="swiper-slide"> <a
																href="<?= base_url('assets/web') ?>/uploads/2018/02/gallery_03.jpg"
																class="swipebox photo "> <span> <img width="275"
																		height="275"
																		src="<?= base_url('assets/web') ?>/uploads/2018/02/gallery_03-275x275.jpg"
																		class="attachment-recond-gallery-grid size-recond-gallery-grid"
																		alt=""
																		srcset="<?= base_url('assets/web') ?>/uploads/2018/02/gallery_03-275x275.jpg 275w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_03-150x150.jpg 150w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_03-300x300.jpg 300w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_03-768x768.jpg 768w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_03-1024x1024.jpg 1024w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_03-360x360.jpg 360w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_03-600x600.jpg 600w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_03-100x100.jpg 100w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_03-24x24.jpg 24w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_03-48x48.jpg 48w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_03-96x96.jpg 96w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_03-50x50.jpg 50w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_03-110x110.jpg 110w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_03-800x800.jpg 800w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_03-550x550.jpg 550w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_03.jpg 1400w"
																		sizes="(max-width: 275px) 100vw, 275px" />
																</span> </a></div>
														<div class="swiper-slide"> <a
																href="<?= base_url('assets/web') ?>/uploads/2018/02/gallery_02.jpg"
																class="swipebox photo "> <span> <img width="275"
																		height="275"
																		src="<?= base_url('assets/web') ?>/uploads/2018/02/gallery_02-275x275.jpg"
																		class="attachment-recond-gallery-grid size-recond-gallery-grid"
																		alt=""
																		srcset="<?= base_url('assets/web') ?>/uploads/2018/02/gallery_02-275x275.jpg 275w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_02-150x150.jpg 150w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_02-300x300.jpg 300w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_02-768x768.jpg 768w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_02-1024x1024.jpg 1024w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_02-360x360.jpg 360w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_02-600x600.jpg 600w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_02-100x100.jpg 100w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_02-24x24.jpg 24w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_02-48x48.jpg 48w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_02-96x96.jpg 96w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_02-50x50.jpg 50w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_02-110x110.jpg 110w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_02-800x800.jpg 800w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_02-550x550.jpg 550w, <?= base_url('assets/web') ?>/uploads/2018/02/gallery_02.jpg 1400w"
																		sizes="(max-width: 275px) 100vw, 275px" />
																</span> </a></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="vc_row-full-width vc_clearfix"></div>
								<div data-vc-full-width="true" data-vc-full-width-init="false"
									data-vc-stretch-content="true"
									class="vc_row wpb_row vc_row-fluid vc_row-no-padding">
									<div class="wpb_column vc_column_container vc_col-sm-12">
										<div class="vc_column-inner">
											<div class="wpb_wrapper">
												<div id="like_sc_google_maps_153385408"
													data-marker="http://recond.like-themes.com/wp-content/themes/recond/assets/images/location.png"
													class="ltx-google-maps    vc_custom_1538491575778"
													data-style="yellow" data-lng="78.39354904559474" data-lat="27.17282467734347"
													data-zoom="11" style="width: 100%; height: 450px;"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="vc_row-full-width vc_clearfix"></div>
							</div>
						</article>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="ltx-footer-wrapper">
		<section id="ltx-widgets-footer" class="ltx-fw">
			<div class="container">
				<div class="row centered">
					<div class="col-lg-3 col-md-4 col-sm-6 col-ms-12   clearfix">
						<div class="footer-widget-area">
							<div id="text-14" class="widget widget_text">
								<div class="textwidget">
									<p><a class="logo" href="index.html"><img
									src="<?= base_url('upload/white-logo.png') ?>" alt="Logo"
									srcset="<?= base_url('upload/white-logo.png') ?>"></a><br />
										Curabitur viverra, nisi sit amet pharetra ultricies, ligula purus tristique leo,
										sed mattis urna neque et tortor.</p>
								</div>
							</div>
							<div id="text-15" class="widget widget_text">
								<div class="textwidget">
									<div class="ltx-social ltx-nav-second ltx-type-">
										<ul>
											<li><a href="#" target="_self"><span class="fa fa-twitter"></span></a></li>
											<li><a href="#" target="_self"><span class="fa fa-facebook-f"></span></a>
											</li>
											<li><a href="#" target="_self"><span class="fa fa-instagram"></span></a>
											</li>
											<li><a href="#" target="_self"><span class="fa fa-youtube"></span></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 col-ms-12 hidden-xs hidden-ms hidden-sm hidden-md clearfix">
						<div class="footer-widget-area">
							<div id="nav_menu-2" class="widget widget_nav_menu">
								<h3 class="header-widget "><span class="widget-icon"></span>Sitemap<span
										class="last widget-icon"></span></h3>
								<div class="menu-footer-menu-container">
									<ul id="menu-footer-menu" class="menu">
										<li id="menu-item-9983"
											class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-7925 current_page_item menu-item-9983">
											<a href="index.html">Home</a></li>
										<li id="menu-item-9984"
											class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9984">
											<a href="blog-3-columns-with-right-sidebar/index.html">Blog</a></li>
										<li id="menu-item-9985"
											class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9985">
											<a href="shop/index.html">Products</a></li>
										<li id="menu-item-9986"
											class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9986">
											<a href="contacts/index.html">Contacts</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 col-ms-12 hidden-xs hidden-ms hidden-sm  clearfix">
						<div class="footer-widget-area">
							<div id="ltx_icons-2" class="widget widget_ltx_icons">
								<h3 class="header-widget "><span class="widget-icon"></span>Contact info<span
										class="last widget-icon"></span></h3>
								<ul class="social-icons-list">
									<li><a href="#"><span class="ltx-ic fa fa-map-marker"></span><span
												class="txt"><strong> Our location: </strong><br /> 975 Liberty Ave,
												Union, NJ 07083, USA</span></a></li>
									<li><a href="#"><span class="ltx-ic fa fa-phone"></span><span class="txt"><strong>
													Phones: </strong><br /> +49078-039-23-11<br />
												+49078-028-55-60</span></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 col-ms-12 hidden-xs hidden-ms hidden-sm  clearfix">
						<div class="footer-widget-area">
							<div id="custom_html-2" class="widget_text widget widget_custom_html">
								<h3 class="header-widget "><span class="widget-icon"></span>Subscribe<span
										class="last widget-icon"></span></h3>
								<div class="textwidget custom-html-widget">
									<form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-806" method="post"
										data-id="806" data-name="Subscribe Form">
										<div class="mc4wp-form-fields">
											<div class="input-group"> <input type="email" name="EMAIL"
													placeholder="Your email ..." required /> <span
													class="input-group-append"> <button
														class="btn btn-black color-hover-white"
														type="submit">Subscribe</button> </span></div>
											<p> <label> <input name="AGREE_TO_TERMS" type="checkbox" value="1"
														required="">I have read and agree to the <a href="#">terms &amp;
														conditions</a> </label></p>
										</div><label style="display: none !important;">Leave this field empty if you're
											human: <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1"
												autocomplete="off" /></label><input type="hidden"
											name="_mc4wp_timestamp" value="1689088775" /><input type="hidden"
											name="_mc4wp_form_id" value="806" /><input type="hidden"
											name="_mc4wp_form_element_id" value="mc4wp-form-1" />
										<div class="mc4wp-response"></div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<footer class="copyright-block copyright-layout-default">
			<div class="container">
				<p><a href="https://themeforest.net/user/like-themes">Like-themes</a> © All Rights Reserved - 2019 - <a
						href="https://themeforest.net/user/like-themes">Purchase</a></p>
			</div>
		</footer>
	</div> <a href="#" class="ltx-go-top floating ltx-go-top-icon">
		<div id="ltx-go-top-levels">
			<div class="ltx-level level1"></div>
			<div class="ltx-level level2"></div>
			<div class="ltx-level level3"></div>
			<div class="ltx-level level4"></div>
			<div class="ltx-level level5"></div>
			<div class="ltx-level level6"></div>
			<div class="ltx-level level7"></div>
			<div class="ltx-level level8"></div>
			<div class="ltx-level level9"></div>
		</div><span class="txt">Go top</span>
	</a>
	<div class="lt-custom-popup" data-image="<?= base_url('assets/web') ?>/plugins/lt-custom/images/icon.png"></div>
	<script>var tribe_l10n_datatables = { "aria": { "sort_ascending": ": activate to sort column ascending", "sort_descending": ": activate to sort column descending" }, "length_menu": "Show _MENU_ entries", "empty_table": "No data available in table", "info": "Showing _START_ to _END_ of _TOTAL_ entries", "info_empty": "Showing 0 to 0 of 0 entries", "info_filtered": "(filtered from _MAX_ total entries)", "zero_records": "No matching records found", "search": "Search:", "all_selected_text": "All items on this page were selected. ", "select_all_link": "Select all pages", "clear_selection": "Clear Selection.", "pagination": { "all": "All", "next": "Next", "previous": "Previous" }, "select": { "rows": { "0": "", "_": ": Selected %d rows", "1": ": Selected 1 row" } }, "datepicker": { "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"], "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"], "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"], "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"], "monthNamesShort": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"], "monthNamesMin": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"], "nextText": "Next", "prevText": "Prev", "currentText": "Today", "closeText": "Done", "today": "Today", "clear": "Clear" } }; var tribe_system_info = { "sysinfo_optin_nonce": "59db97fd21", "clipboard_btn_text": "Copy to clipboard", "clipboard_copied_text": "System info copied", "clipboard_fail_text": "Press \"Cmd + C\" to copy" };</script>
	<script type='text/javascript'
		src='https://maps.googleapis.com/maps/api/js?v=3&amp;key=AIzaSyASypby3_5qo_HURUtm8y1fClkh5JfDXso&amp;ver=4.9.23'></script>
	
	<script type="text/javascript" defer
		src="<?= base_url('assets/web') ?>/cache/autoptimize/js/autoptimize_13bdd901901c1cc0d367612e7894e314.js"></script>
</body>
</html>