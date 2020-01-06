<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<title>Home - Welcome to Automated Carpooling System</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Ridesharing, Carpooling, Joint rides, Travelling, Ride hailing. " />
<link rel="shortcut icon" href="{{ asset('landing/images/icon.png') }}" />

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

	<!-- css files -->
    <link href=" {{ asset('landing/css/bootstrap.css') }}" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href=" {{ asset('landing/css/style.css') }} " rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href=" {{ asset('landing/css/font-awesome.min.css') }} " rel="stylesheet"><!-- fontawesome css -->
	<!-- //css files -->

	<link href=" {{ asset('landing/css/css_slider.css') }} " type="text/css" rel="stylesheet" media="all">

	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<!-- //google fonts -->

</head>
<body>
<script src=" {{ asset('js/preloader.js') }}"></script>
<!-- header -->
<header>
	<div class="container">
		<!-- nav -->
		<nav class="py-md-4 py-3 d-lg-flex">
			<div id="logo">
				<h1 class="mt-md-0 mt-2"> <a href="{{ url('/') }}"><span class="fa fa-car"></span> Carpooling System </a></h1>
			</div>
			<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
            <input type="checkbox" id="drop" />
            @if (Route::has('login'))
                @auth
                <ul class="menu m1-auto mt-1">
                    <li class=""><a href="{{ url('/dashboard') }}"><span class="fa fa-dashboard"></span> Dashboard</a></li>
                    <li class=""><a href="{{ url('/rides/find-ride') }}"><span class="fa fa-search"></span> Find a Ride</a></li>
                    <li class=""><a href="{{ url('/rides/add-new-ride') }}"><span class="fa fa-plus"></span> Add New Ride</a></li>
                </ul>
                @else
                <ul class="menu ml-auto mt-1">
                    <li class=""><a href="{{ url('/register') }}"><span class="fa fa-user-plus"></span> Sign Up</a></li>
                    <li class=""><a href="{{ url('/login') }}"><span class="fa fa-sign-in"></span> Log In</a></li>
                </ul>
                @endauth
            @endif

		</nav>
		<!-- //nav -->
	</div>
</header>
<!-- //header -->

<!-- banner -->
<section class="banner_w3lspvt" id="home">
	<div class="csslider infinity" id="slider1">
		<input type="radio" name="slides" checked="checked" id="slides_1" />
		<input type="radio" name="slides" id="slides_2" />
		<input type="radio" name="slides" id="slides_3" />
		<input type="radio" name="slides" id="slides_4" />
		<ul>
			<li>
				<div class="banner-top">
					<div class="overlay">
						<div class="container">
							<div class="w3layouts-banner-info">
								<h3 class="text-wh">Save Money Journeying with Other Commuters.</h3>
								<h4 class="text-wh">Reduce your travel costs by joining other users in travelling along similar routes.</h4>
								<div class="buttons mt-4">
									<a href="{{ url('/rides/find-ride') }} " class="btn mr-2">Find a Ride</a>
									<a href="{{ url('/rides/add-new-ride') }} " class="btn">Add New Ride</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="banner-top1">
					<div class="overlay">
						<div class="container">
							<div class="w3layouts-banner-info">
								<h3 class="text-wh">Play a Part in Reducing Communal Traffic.</h3>
								<h4 class="text-wh">Join rides with other users and reduce the number of cars on the road.</h4>
								<div class="buttons mt-4">
									<a href="{{ url('/rides/find-ride') }} " class="btn mr-2">Find a Ride</a>
									<a href="{{ url('/rides/add-new-ride') }} " class="btn">Add New Ride</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="banner-top2">
					<div class="overlay">
						<div class="container">
							<div class="w3layouts-banner-info">
								<h3 class="text-wh">Make Extra Income Just by Driving Along Your Everyday Route.</h3>
								<h4 class="text-wh">Make some extra cash by filling the usually empty seats in your car.</h4>
								<div class="buttons mt-4">
									<a href="{{ url('/rides/find-ride') }} " class="btn mr-2">Find a Ride</a>
									<a href="{{ url('/rides/add-new-ride') }} " class="btn">Add New Ride</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="banner-top3">
					<div class="overlay1">
						<div class="container">
							<div class="w3layouts-banner-info">
								<h3 class="text-wh">Share Trips with People Travelling along Similar Routes.</h3>
								<h4 class="text-wh">Share your trips to school, office or destinations with people going along similar routes.</h4>
								<div class="buttons mt-4">
									<a href="{{ url('/rides/find-ride') }} " class="btn mr-2">Find a Ride</a>
									<a href="{{ url('/rides/add-new-ride') }} " class="btn">Add New Ride</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</li>
		</ul>
		<div class="arrows">
			<label for="slides_1"></label>
			<label for="slides_2"></label>
			<label for="slides_3"></label>
			<label for="slides_4"></label>
		</div>
	</div>
</section>
<!-- //banner -->

<!-- about -->
<section class="about py-5">
	<div class="container py-lg-5 py-sm-4">
		<div class="row">
			<div class="col-lg-6 about-left">
				<h3 class="mt-lg-3"></h3><strong>Where Do You Want To Drive To?</strong></h3>
				<p class="mt-4">Let's make this your least expensive journey ever. Spread the total costs of your trips across other passengers travelling in similar routes.</p>
                <a class="btn btn-lg btn-royal text-center btn-royal" href="{{ url('/rides/add-new-ride') }}">Add New Ride</a>
            </div>
			<div class="col-lg-6 about-right text-lg-right mt-lg-0 mt-5">
				<img src=" {{ asset('landing/images/driver.jpg') }} " alt="" class="img-fluid abt-image" />
			</div>
		</div>
	</div>
</section>
<!-- //about -->

<!-- how to book -->
<section class="book py-5">
	<div class="container py-lg-5 py-sm-3">
        <h2 class="heading text-capitalize text-center"> How It Works </h2><br><br>
        <div class="tab-main text-center">
            <input id="tab1" type="radio" name="tabs" class="w3pvt-sm">
            <label for="tab1">I Want to Drive</label>
            <input id="tab2" type="radio" class="w3pvt-sm" name="tabs">
            <label for="tab2">I Want to Join a Ride</label>
            <section id="content1">
                <div class="row mt-5 text-center">
                    <div class="col-lg-4 col-sm-6">
                        <div class="grid-info">
                            <div class="icon">
                                <span class="fa fa-save icon"></span>
                            </div>
                            <h4>Save Trip Details</h4>
                            <p class="mt-3">Save the various details pertaining to your trip such as your desired route and timing.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mt-sm-0 mt-5">
                        <div class="grid-info">
                            <div class="icon">
                                <span class="fa fa-thumbs-up icon"></span>
                            </div>
                            <h4>Review Ride Applications</h4>
                            <p class="mt-3">Accept or Decline applications from other users to join your trip based on your
                                preference.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mt-lg-0 mt-5">
                        <div class="grid-info">
                            <div class="icon">
                                <span class="fa fab fa-car icon"></span>
                            </div>
                            <h4>Enjoy the Trip</h4>
                            <p class="mt-3">Pick up your successful applicants at their designated pickup locations, get paid and
                                then
                                leave a behaviour based rating.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section id="content2">
                <div class="row mt-5 text-center">
                    <div class="col-lg-4 col-sm-6">
                        <div class="grid-info">
                            <div class="icon">
                                <span class="fa fa-map-signs icon"></span>
                            </div>
                            <h4>Save Trip Details</h4>
                            <p class="mt-3">Submit the various details pertaining to your trip such as your desired route and the system uses this data to suggest the best available rides.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mt-sm-0 mt-5">
                        <div class="grid-info">
                            <div class="icon">
                                <span class="fa fa-retweet icon"></span>
                            </div>
                            <h4>Apply for Suitable Rides</h4>
                            <p class="mt-3">Make applications to join rides with the most convenient routes and pricing.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mt-lg-0 mt-5">
                        <div class="grid-info">
                            <div class="icon">
                                <span class="fa fa-taxi icon"></span>
                            </div>
                            <h4>Enjoy the Trip</h4>
                            <p class="mt-3">Join other successful ride applicants and the driver for the trip, pay the driver and leave a performance based rating. </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>

	</div>
</section>
<!-- //how to book -->


<!-- destinations -->
<section class="destinations py-5" id="destinations">
	<div class="container py-xl-5 py-lg-3">
		<h3 class="heading text-capitalize text-center"> Currently Available Trips</h3>
	    <div class="row inner-sec-w3layouts-w3pvt-lauinfo">
			<div class="col-md-3 col-sm-6 col-6 destinations-grids text-center">
				<h4 class="destination mb-3">China</h4>
				<div class="image-position position-relative">
					<img src="{{ asset('landing/images/china.jpg') }}" class="img-fluid" alt="">
					<div class="rating">
						<ul>
							<li><span class="fa fa-star"></span></li>
							<li><span class="fa fa-star"></span></li>
							<li><span class="fa fa-star"></span></li>
							<li><span class="fa fa-star"></span></li>
							<li><span class="fa fa-star"></span></li>
						</ul>
					</div>
				</div>
				<div class="destinations-info">
					<div class="caption mb-lg-3">
						<h4>China</h4>
						<a href="{{ url('/rides/add-new-ride') }} ">Book Now</a>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-6 destinations-grids text-center">
				<h4 class="destination mb-3">Malaysia</h4>
				<div class="image-position position-relative">
					<img src="{{ asset('landing/images/malaysia.jpg') }}" class="img-fluid" alt="">
					<div class="rating">
						<ul>
							<li><span class="fa fa-star"></span></li>
							<li><span class="fa fa-star"></span></li>
							<li><span class="fa fa-star"></span></li>
							<li><span class="fa fa-star"></span></li>
							<li><span class="fa fa-star"></span></li>
						</ul>
					</div>
				</div>
				<div class="destinations-info">
					<div class="caption mb-lg-3">
						<h4>Malaysia</h4>
						<a href="{{ url('/rides/add-new-ride') }} ">Book Now</a>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-6 destinations-grids text-center mt-md-0 mt-4">
				<h4 class="destination mb-3">Japan</h4>
				<div class="image-position position-relative">
					<img src="{{ asset('landing/images/japan.jpg') }}" class="img-fluid" alt="">
					<div class="rating">
						<ul>
							<li><span class="fa fa-star"></span></li>
							<li><span class="fa fa-star"></span></li>
							<li><span class="fa fa-star"></span></li>
							<li><span class="fa fa-star"></span></li>
							<li><span class="fa fa-star"></span></li>
						</ul>
					</div>
				</div>
				<div class="destinations-info">
					<div class="caption mb-lg-3">
						<h4>Japan</h4>
						<a href="{{ url('/rides/add-new-ride') }} ">Book Now</a>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-6 destinations-grids text-center mt-md-0 mt-4">
				<h4 class="destination mb-3">Singapore</h4>
				<div class="image-position position-relative">
					<img src="{{ asset('landing/images/singapore.jpg') }}" class="img-fluid" alt="">
					<div class="rating">
						<ul>
							<li><span class="fa fa-star"></span></li>
							<li><span class="fa fa-star"></span></li>
							<li><span class="fa fa-star"></span></li>
							<li><span class="fa fa-star"></span></li>
							<li><span class="fa fa-star"></span></li>
						</ul>
					</div>
				</div>
				<div class="destinations-info">
					<div class="caption mb-lg-3">
						<h4>Singapore</h4>
						<a href="{{ url('/rides/add-new-ride') }} ">Book Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- destinations -->


<!-- copyright -->
<div class="copyright py-3 text-center" style="background-color: #30205E;">
	<p style="color: white;">© 2019 Automated Carpooling. All Rights Reserved.</p>
</div>
<!-- //copyright -->

<!-- move top -->
<div class="move-top text-right">
	<a href="#home" class="move-top">
		<span class="fa fa-angle-up  mb-3" aria-hidden="true"></span>
	</a>
</div>
<!-- move top -->


</body>
</html>