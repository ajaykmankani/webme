<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Site Metas -->
<title>WebMe | Web Desgning, Development | Graphic Designing | IT Solutions</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- Site Icons -->
<link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon" />
<link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon.png') }}">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<!-- Site CSS -->
<link rel="stylesheet" href="{{ asset('style.css') }}">
<!-- Responsive CSS -->
<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
<!-- Custom CSS -->
<link rel="stylesheet" href="{{ asset('css/custom.css') }}">
{{-- <script src="{{ asset('js/modernizr.js') }}"></script> <!-- Modernizr --> --}}



</head>

<body id="page-top" class="politics_version">

	<!-- LOADER -->
	<div id="preloader">
		<div id="main-ld">
			<div id="loader"></div>
		</div>
	</div><!-- end loader -->
	<!-- END LOADER -->

	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
		<div class="container">
			<a class="navbar-brand js-scroll-trigger" href="#page-top">
				<img class="img-fluid" src="{{ asset('images/logo.png') }}" alt="" style="width:200px" />
			</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
				data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
				aria-label="Toggle navigation">
				Menu
				<i class="fa fa-bars"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav text-uppercase ml-auto">
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger active" href="#home">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#about">About Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#services">Services</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#blog">Blog</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#team">Our Team</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#pricing">Pricing</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#contact">Contect Us</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<section id="home" class="main-banner parallaxie" style="background: url('uploads/banner-01.webp')">
		<div class="heading">
			<h1>Welcome to WebMe Studio</h1>
			<h3 class="cd-headline clip is-full-width">
				<span>One stop solution for your </span>
				<span class="cd-words-wrapper">
					<b class="is-visible">Web Developer</b>
					<b>Web Design</b>
					<b>Web Development</b>
					<b>Wordpress</b>
					<b>Shopify</b>
					<b>Creative Design</b>
					<b>Graphic Design</b>
				</span>
				<span>Needs</span>
				<div class="btn-ber">
					<a class="get_btn hvr-bounce-to-top" href="#">Get started</a>
					<a class="learn_btn hvr-bounce-to-top" href="#">Learn More</a>
				</div>
			</h3>
		</div>
	</section>

	<div id="about" class="section wb">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="message-box">
						<h2>Why Choose WebMe?</h2>
						<p><b>Experience:</b> With years of experience in the industry, we have a deep understanding of
							what it takes to create successful digital solutions.</p>

						<p><b>Tailored Approach:</b> We believe that every project is unique. We work closely with our
							clients to understand their goals and customize our services accordingly.</p>

						<p><b>Creativity:</b> Our team of designers and developers is known for their innovative ideas
							and attention to detail, ensuring your project stands out.</p>

						<p><b>Reliability:</b> We pride ourselves on delivering projects on time and on budget. You can
							trust us to meet your deadlines.</p>

						<p><b>Client-Centric:</b> Your satisfaction is our priority. We maintain open lines of
							communication throughout the project and provide ongoing support after completion.</p>

						<a href="#contact" class="sim-btn hvr-bounce-to-top"><span>Contact Us</span></a>
					</div><!-- end messagebox -->
				</div><!-- end col -->

				<div class="col-md-6">
					<div class="right-box-pro wow fadeIn">
						<img src="{{ asset('uploads/about_04.jpg') }}" alt="" class="img-fluid img-rounded">
					</div><!-- end media -->
				</div><!-- end col -->
			</div><!-- end row -->
		</div><!-- end container -->
	</div><!-- end section -->

	<div id="services" class="section lb">
		<div class="container">
			<div class="section-title text-center">
				<h3>Services</h3>

				<p>We Provide comprehensive IT services in a variety of areas.</p>
			</div><!-- end title -->

			<div class="row">
				<div class="col-md-4">
					<div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-seo"></i>
						</div>
						<h2>Web Design</h2>
						<p>A well-designed website is your online storefront. Our team of creative designers crafts visually stunning and user-friendly websites tailored to your brand.</p>
					</div>
				</div><!-- end col -->
				<div class="col-md-4">
					<div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-development"></i>
						</div>
						<h2>Web Development</h2>
						<p> We bring your web design to life with cutting-edge development skills. Whether you need a simple website or a complex web application, we have the expertise to make it happen.</p>
					</div>
				</div><!-- end col -->
				<div class="col-md-4">
					<div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-process"></i>
						</div>
						<h2>Graphic Design</h2>
						<p>Visual identity is key to brand recognition. Our graphic designers create logos, branding materials, and visuals that make a lasting impression.</p>
					</div>
				</div><!-- end col -->
				<div class="col-md-4">
					<div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-discuss-issue"></i>
						</div>
						<h2>IT Solutions</h2>
						<p>Beyond web design and development, we offer comprehensive IT solutions to keep your business running smoothly. From technical support to cloud services, we've got you covered.</p>
					</div>
				</div><!-- end col -->
				<div class="col-md-4">
					<div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-idea"></i>
						</div>
						<h2>eCommerce Solutions</h2>
						<p>In the era of online shopping, we specialize in creating robust and scalable eCommerce platforms. We can help you set up your online store and provide a seamless shopping experience for your customers.</p>
					</div>
				</div><!-- end col -->
				<div class="col-md-4">
					<div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-idea-1"></i>
						</div>
						<h2>Wordpress, Shopify (CMS)</h2>
						<p>Managing website content shouldn't be a hassle. We offer customizable CMS solutions that empower you to update your website easily, ensuring your online presence remains fresh and engaging.</p>
					</div>
				</div><!-- end col -->
			</div><!-- end row -->
		</div><!-- end container -->
	</div><!-- end section -->

	<div id="portfolio" class="section lb">
		<div class="container">
			<div class="section-title text-center">
				<h3>Portfolio</h3>
				<p>Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus.
				</p>
			</div><!-- end title -->

			<div class="gallery-menu row">
				<div class="col-md-12">
					<div class="button-group filter-button-group text-center">
						<button class="active" data-filter="*">All</button>
						<button data-filter=".gal_a">Web Development</button>
						<button data-filter=".gal_b">Creative Design</button>
						<button data-filter=".gal_c">Graphic Design</button>
					</div>
				</div>
			</div>

			<div class="gallery-list row">
				<div class="col-md-4 col-sm-6 gallery-grid gal_a gal_b">
					<div class="gallery-single fix">
						<img src="{{ asset('uploads/gallery_img-01.jpg') }}" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<a href="uploads/gallery_img-01.jpg') }}" data-rel="prettyPhoto[gal]"
								class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-sm-6 gallery-grid gal_c gal_b">
					<div class="gallery-single fix">
						<img src="{{ asset('uploads/gallery_img-02.jpg') }}" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<a href="uploads/gallery_img-02.jpg') }}" data-rel="prettyPhoto[gal]"
								class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-sm-6 gallery-grid gal_a gal_c">
					<div class="gallery-single fix">
						<img src="{{ asset('uploads/gallery_img-03.jpg') }}" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<a href="uploads/gallery_img-03.jpg') }}" data-rel="prettyPhoto[gal]"
								class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-sm-6 gallery-grid gal_b gal_a">
					<div class="gallery-single fix">
						<img src="{{ asset('uploads/gallery_img-04.jpg') }}" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<a href="uploads/gallery_img-04.jpg') }}" data-rel="prettyPhoto[gal]"
								class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-sm-6 gallery-grid gal_a gal_c">
					<div class="gallery-single fix">
						<img src="{{ asset('uploads/gallery_img-05.jpg') }}" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<a href="uploads/gallery_img-05.jpg') }}" data-rel="prettyPhoto[gal]"
								class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-sm-6 gallery-grid gal_c gal_a">
					<div class="gallery-single fix">
						<img src="{{ asset('uploads/gallery_img-06.jpg') }}" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<a href="uploads/gallery_img-06.jpg') }}" data-rel="prettyPhoto[gal]"
								class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>


	<div id="blog" class="section lb">
		<div class="container">
			<div class="section-title text-center">
				<h3>Blog</h3>
				<p>Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus.
				</p>
			</div><!-- end title -->

			<div class="row">
				<div class="col-md-4 col-sm-6 col-lg-4">
					<div class="post-box">
						<div class="post-thumb">
							<img src="{{ asset('uploads/blog-01.jpg') }}" class="img-fluid" alt="post-img" />
							<div class="date">
								<span>06</span>
								<span>Aug</span>
							</div>
						</div>
						<div class="post-info">
							<h4>Quisque auctor lectus interdum nisl accumsan venenatis.</h4>
							<ul>
								<li>by admin</li>
								<li>Apr 21, 2018</li>
								<li><a href="#"><b> Comments</b></a></li>
							</ul>
							<p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet massa sodales aliquam
								at eget quam. Integer ultricies et magna quis.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-lg-4">
					<div class="post-box">
						<div class="post-thumb">
							<img src="{{ asset('uploads/blog-02.jpg') }}" class="img-fluid" alt="post-img" />
							<div class="date">
								<span>06</span>
								<span>Aug</span>
							</div>
						</div>
						<div class="post-info">
							<h4>Quisque auctor lectus interdum nisl accumsan venenatis.</h4>
							<ul>
								<li>by admin</li>
								<li>Apr 21, 2018</li>
								<li><a href="#"><b> Comments</b></a></li>
							</ul>
							<p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet massa sodales aliquam
								at eget quam. Integer ultricies et magna quis.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-lg-4">
					<div class="post-box">
						<div class="post-thumb">
							<img src="{{ asset('uploads/blog-03.jpg') }}" class="img-fluid" alt="post-img" />
							<div class="date">
								<span>06</span>
								<span>Aug</span>
							</div>
						</div>
						<div class="post-info">
							<h4>Quisque auctor lectus interdum nisl accumsan venenatis.</h4>
							<ul>
								<li>by admin</li>
								<li>Apr 21, 2018</li>
								<li><a href="#"><b> Comments</b></a></li>
							</ul>
							<p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet massa sodales aliquam
								at eget quam. Integer ultricies et magna quis.</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<div id="team" class="section wb">
		<div class="container">
			<div class="section-title text-center">
				<h3>Our Team</h3>
				<p>Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus.
				</p>
			</div><!-- end title -->

			<div class="row">
				<div class="col-md-3 col-sm-6">
					<div class="our-team">
						<div class="pic">
							<img src="{{ asset('uploads/img-2.jpg') }}">
						</div>
						<div class="team-content">
							<h3 class="title">Kristiana</h3>
							<span class="post">Web Designer</span>
							<ul class="social">
								<li><a href="#" class="fa fa-facebook"></a></li>
								<li><a href="#" class="fa fa-twitter"></a></li>
								<li><a href="#" class="fa fa-google-plus"></a></li>
								<li><a href="#" class="fa fa-skype"></a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6">
					<div class="our-team">
						<div class="pic">
							<img src="{{ asset('uploads/img-4.jpg') }}">
						</div>
						<div class="team-content">
							<h3 class="title">Miranda joy</h3>
							<span class="post">Web Designer</span>
							<ul class="social">
								<li><a href="#" class="fa fa-facebook"></a></li>
								<li><a href="#" class="fa fa-twitter"></a></li>
								<li><a href="#" class="fa fa-google-plus"></a></li>
								<li><a href="#" class="fa fa-skype"></a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6">
					<div class="our-team">
						<div class="pic">
							<img src="{{ asset('uploads/img-1.jpg') }}">
						</div>
						<div class="team-content">
							<h3 class="title">Williamson</h3>
							<span class="post">Web Developer</span>
							<ul class="social">
								<li><a href="#" class="fa fa-facebook"></a></li>
								<li><a href="#" class="fa fa-twitter"></a></li>
								<li><a href="#" class="fa fa-google-plus"></a></li>
								<li><a href="#" class="fa fa-skype"></a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6">
					<div class="our-team">
						<div class="pic">
							<img src="{{ asset('uploads/img-3.jpg') }}">
						</div>
						<div class="team-content">
							<h3 class="title">Steve Thomas</h3>
							<span class="post">Web Developer</span>
							<ul class="social">
								<li><a href="#" class="fa fa-facebook"></a></li>
								<li><a href="#" class="fa fa-twitter"></a></li>
								<li><a href="#" class="fa fa-google-plus"></a></li>
								<li><a href="#" class="fa fa-skype"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="pricing" class="section lb">
		<div class="container">
			<div class="section-title text-center">
				<h3>Pricing</h3>
				<p>Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus.
				</p>
			</div><!-- end title -->

			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="pricingTable">
						<svg x="0" y="0" viewBox="0 0 360 220">
							<g>
								<path fill="#28a9e2" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061
                                    c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243
                                    s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48
                                    L0.732,193.75z"></path>
							</g>
							<text transform="matrix(1 0 0 1 69.7256 116.2686)" fill="#fff"
								font-size="78.4489">$10</text>
							<text transform="matrix(0.9566 0 0 1 197.3096 83.9121)" fill="#fff"
								font-size="29.0829">.99</text>
							<text transform="matrix(1 0 0 1 233.9629 115.5303)" fill="#fff"
								font-size="15.4128">/Month</text>
						</svg>
						<div class="pricing-content">
							<h3 class="title">Standard</h3>
							<ul class="pricing-content">
								<li><b>50GB</b> Disk Space</li>
								<li><b>50</b> Email Accounts</li>
								<li><b>50GB</b> Bandwidth</li>
								<li><b>10</b> Subdomains</li>
								<li><b>15</b> Domains</li>
							</ul>
							<a href="#" class="sim-btn hvr-bounce-to-top pricingTable-signup">Buy Now</a>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-sm-6">
					<div class="pricingTable blue">
						<svg x="0" y="0" viewBox="0 0 360 220">
							<g>
								<path fill="#28a9e2" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061
                                    c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243
                                    s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48
                                    L0.732,193.75z"></path>
							</g>
							<text transform="matrix(1 0 0 1 69.7256 116.2686)" fill="#fff"
								font-size="78.4489">$20</text>
							<text transform="matrix(0.9566 0 0 1 197.3096 83.9121)" fill="#fff"
								font-size="29.0829">.99</text>
							<text transform="matrix(1 0 0 1 233.9629 115.5303)" fill="#fff"
								font-size="15.4128">/Month</text>
						</svg>
						<div class="pricing-content">
							<h3 class="title">Business</h3>
							<ul class="pricing-content">
								<li><b>60GB</b> Disk Space</li>
								<li><b>60</b> Email Accounts</li>
								<li><b>60GB</b> Bandwidth</li>
								<li><b>15</b> Subdomains</li>
								<li><b>20</b> Domains</li>
							</ul>
							<a href="#" class="sim-btn hvr-bounce-to-top pricingTable-signup">Buy Now</a>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-sm-6">
					<div class="pricingTable red">
						<svg x="0" y="0" viewBox="0 0 360 220">
							<g>
								<path fill="#28a9e2" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061
                                    c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243
                                    s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48
                                    L0.732,193.75z"></path>
							</g>
							<text transform="matrix(1 0 0 1 69.7256 116.2686)" fill="#fff"
								font-size="78.4489">$30</text>
							<text transform="matrix(0.9566 0 0 1 197.3096 83.9121)" fill="#fff"
								font-size="29.0829">.99</text>
							<text transform="matrix(1 0 0 1 233.9629 115.5303)" fill="#fff"
								font-size="15.4128">/Month</text>
						</svg>
						<div class="pricing-content">
							<h3 class="title">Premium</h3>
							<ul class="pricing-content">
								<li><b>70GB</b> Disk Space</li>
								<li><b>70</b> Email Accounts</li>
								<li><b>70GB</b> Bandwidth</li>
								<li><b>20</b> Subdomains</li>
								<li><b>25</b> Domains</li>
							</ul>
							<a href="#" class="sim-btn hvr-bounce-to-top pricingTable-signup">Buy Now</a>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<div id="contact" class="section db">
		<div class="container">
			<div class="section-title text-center">
				<h3>Contact</h3>
				<p>Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus.
				</p>
			</div><!-- end title -->

			<div class="row">
				<div class="col-md-12">
					<div class="contact_form">
						<div id="message"></div>
						<form id="contactForm" name="sentMessage" novalidate="novalidate">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" id="name" type="text" placeholder="Your Name"
											required="required"
											data-validation-required-message="Please enter your name.">
										<p class="help-block text-danger"></p>
									</div>
									<div class="form-group">
										<input class="form-control" id="email" type="email" placeholder="Your Email"
											required="required"
											data-validation-required-message="Please enter your email address.">
										<p class="help-block text-danger"></p>
									</div>
									<div class="form-group">
										<input class="form-control" id="phone" type="tel" placeholder="Your Phone"
											required="required"
											data-validation-required-message="Please enter your phone number.">
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<textarea class="form-control" id="message" placeholder="Your Message"
											required="required"
											data-validation-required-message="Please enter a message."></textarea>
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="clearfix"></div>
								<div class="col-lg-12 text-center">
									<div id="success"></div>
									<button id="sendMessageButton" class="sim-btn hvr-bounce-to-top" type="submit">Send
										Message</button>
								</div>
							</div>
						</form>
					</div>
				</div><!-- end col -->
			</div><!-- end row -->
		</div><!-- end container -->
	</div><!-- end section -->

	<div class="copyrights">
		<div class="container">
			<div class="footer-distributed">
				<a href="#"><img src="{{ asset('images/logo.png') }}" alt="" style="width: 100px;" /></a>
				<div class="footer-center">
					<p class="footer-links">
						<a href="#">Home</a>
						<a href="#">Blog</a>
						<a href="#">Pricing</a>
						<a href="#">About</a>
						<a href="#">Faq</a>
						<a href="#">Contact</a>
					</p>
					<p class="footer-company-name">All Rights Reserved. &copy; 2023 <a href="#">WebMe</a> Design By :
						<a href="https://html.design/">WebMeStudio</a></p>
				</div>
			</div>
		</div><!-- end container -->
	</div><!-- end copyrights -->

	<a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

	<!-- ALL JS FILES -->
	<script src="{{ asset('js/all.js') }}"></script>
	<!-- Camera Slider -->
	<script src="{{ asset('js/jquery.mobile.customized.min.js') }}"></script>
	<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
	<script src="{{ asset('js/parallaxie.js') }}"></script>
	<script src="{{ asset('js/headline.js') }}"></script>
	<!-- Contact form JavaScript -->
	<script src="{{ asset('js/jqBootstrapValidation.js') }}"></script>
	<script src="{{ asset('js/contact_me.js') }}"></script>
	<!-- ALL PLUGINS -->
	<script src="{{ asset('js/custom.js') }}"></script>
	<script src="{{ asset('js/jquery.vide.js') }}"></script>

</body>

</html>
