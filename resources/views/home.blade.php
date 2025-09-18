<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BIMMA DIAGNOSTICS</title>

    <!-- css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/cubeportfolio/css/cubeportfolio.min.css') }}">
    <link href="{{ asset('assets/css/nivo-lightbox.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nivo-lightbox-theme/default/default.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/owl.carousel.css') }}" rel="stylesheet" media="screen" />
    <link href="{{ asset('assets/css/owl.theme.css') }}" rel="stylesheet" media="screen" />
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- boxed bg -->
    <link id="bodybg" href="{{ asset('assets/bodybg/bg1.css') }}" rel="stylesheet" type="text/css" />
    <!-- template skin -->
    <link id="t-colors" href="{{ asset('assets/color/default.css') }}" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">


    <div id="wrapper">

        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            <div class="top-area">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <p class="bold text-left">Monday - Saturday, 8am to 10pm </p>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <p class="bold text-right">Contact Us at : info@bimmadiagnostics.ng </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container navigation">

                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target=".navbar-main-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index-2.html">
                        <img src="{{ asset('assets/img/bima.png') }}" alt="" width="150" height="40" />
                    </a>
                </div>


                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#intro">Home</a></li>
                        <li><a href="#service">Service</a></li>
                        <li><a href="#doctor">Specialists</a></li>
                        <li><a href="#facilities">Facilities</a></li>
                        <li><a href="#pricing">Pricing</a></li>

                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <!-- Section: intro -->
        <section id="intro" class="intro">
            <div class="intro-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
                                <h2 class="h-ultra">Welcome to BIMMA Diagnostics</h2>
                            </div>
                            <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
                                <h4 class="h-light">Your Trusted Partner in Medical Diagnostics</h4>
                            </div>
                            <div class="well well-trans">
                                <div class="wow fadeInRight" data-wow-delay="0.1s">
                                    <ul class="lead-list">
                                        <li>
                                            <span class="fa fa-check fa-2x icon-success"></span>
                                            <span class="list">
                                                <strong>Comprehensive Laboratory Testing</strong><br />
                                                Accurate and timely results for all your diagnostic needs.
                                            </span>
                                        </li>
                                        <li>
                                            <span class="fa fa-check fa-2x icon-success"></span>
                                            <span class="list">
                                                <strong>Expert Medical Consultation</strong><br />
                                                Our team of specialists is here to guide your healthcare decisions.
                                            </span>
                                        </li>
                                        <li>
                                            <span class="fa fa-check fa-2x icon-success"></span>
                                            <span class="list">
                                                <strong>Advanced Imaging Services</strong><br />
                                                State-of-the-art equipment for precise diagnosis.
                                            </span>
                                        </li>
                                    </ul>
                                    <p class="text-right wow bounceIn" data-wow-delay="0.4s">
                                        <a href="#service" class="btn btn-skin btn-lg">Explore Services <i
                                                class="fa fa-angle-right"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                                <img src="{{ asset('assets/img/bima-front.png') }}" class="img-responsive"
                                    alt="Medical Diagnostics" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- /Section: intro -->

        <!-- Section: boxes -->
        <section id="boxes" class="home-section paddingtop-80">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 col-md-3">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <div class="box text-center">
                                <i class="fa fa-calendar-check-o fa-3x circled bg-skin"></i>
                                <h4 class="h-bold">Book an Appointment</h4>
                                <p>
                                    Schedule your diagnostic tests easily online or by phone.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <div class="box text-center">
                                <i class="fa fa-flask fa-3x circled bg-skin"></i>
                                <h4 class="h-bold">Lab Services</h4>
                                <p>
                                    Full range of blood, urine, and genetic testing for all ages.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <div class="box text-center">
                                <i class="fa fa-heartbeat fa-3x circled bg-skin"></i>
                                <h4 class="h-bold">Health Screening</h4>
                                <p>
                                    Preventive health packages tailored to your needs.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <div class="box text-center">
                                <i class="fa fa-file-medical fa-3x circled bg-skin"></i>
                                <h4 class="h-bold">Diagnostic Reports</h4>
                                <p>
                                    Secure, confidential, and easy-to-understand results delivered fast.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Section: boxes -->

        <section id="callaction" class="home-section paddingtop-40">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="callaction bg-gray">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="cta-text">
                                            <h3>Need urgent diagnostics?</h3>
                                            <p>Contact us for priority appointments and emergency lab services.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="wow lightSpeedIn" data-wow-delay="0.1s">
                                        <div class="cta-btn">
                                            <a href="#contact" class="btn btn-skin btn-lg">Contact Us Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: services -->
        <section id="service" class="home-section nopadding paddingtop-60">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <img src="{{ asset('assets/img/bima-lab-services.png') }}" class="img-responsive"
                                alt="Lab Services" />
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3">
                        <div class="wow fadeInRight" data-wow-delay="0.1s">
                            <div class="service-box">
                                <div class="service-icon">
                                    <span class="fa fa-microscope fa-3x"></span>
                                </div>
                                <div class="service-desc">
                                    <h5 class="h-light">Pathology</h5>
                                    <p>Comprehensive tissue and cell analysis for accurate diagnosis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="wow fadeInRight" data-wow-delay="0.2s">
                            <div class="service-box">
                                <div class="service-icon">
                                    <span class="fa fa-x-ray fa-3x"></span>
                                </div>
                                <div class="service-desc">
                                    <h5 class="h-light">Radiology</h5>
                                    <p>Digital X-ray, ultrasound, and CT scan services.</p>
                                </div>
                            </div>
                        </div>
                        <div class="wow fadeInRight" data-wow-delay="0.3s">
                            <div class="service-box">
                                <div class="service-icon">
                                    <span class="fa fa-vials fa-3x"></span>
                                </div>
                                <div class="service-desc">
                                    <h5 class="h-light">Biochemistry</h5>
                                    <p>Advanced blood and metabolic testing for all conditions.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3">
                        <div class="wow fadeInRight" data-wow-delay="0.1s">
                            <div class="service-box">
                                <div class="service-icon">
                                    <span class="fa fa-dna fa-3x"></span>
                                </div>
                                <div class="service-desc">
                                    <h5 class="h-light">Genetic Testing</h5>
                                    <p>Screening for hereditary diseases and personalized medicine.</p>
                                </div>
                            </div>
                        </div>
                        <div class="wow fadeInRight" data-wow-delay="0.2s">
                            <div class="service-box">
                                <div class="service-icon">
                                    <span class="fa fa-user-md fa-3x"></span>
                                </div>
                                <div class="service-desc">
                                    <h5 class="h-light">Consultation</h5>
                                    <p>Meet our medical experts for result interpretation and advice.</p>
                                </div>
                            </div>
                        </div>
                        <div class="wow fadeInRight" data-wow-delay="0.3s">
                            <div class="service-box">
                                <div class="service-icon">
                                    <span class="fa fa-laptop-medical fa-3x"></span>
                                </div>
                                <div class="service-desc">
                                    <h5 class="h-light">Telemedicine</h5>
                                    <p>Virtual consultations and report delivery for your convenience.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Section: services -->

        <!-- Section: team -->
        <section id="doctor" class="home-section bg-gray paddingbot-60">
            <div class="container marginbot-50">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="wow fadeInDown" data-wow-delay="0.1s">
                            <div class="section-heading text-center">
                                <h2 class="h-bold">Meet Our Specialists</h2>
                                <p>Experienced professionals dedicated to your health and well-being.</p>
                            </div>
                        </div>
                        <div class="divider-short"></div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div id="filters-container" class="cbp-l-filters-alignLeft">
                            <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All (<div
                                    class="cbp-filter-counter"></div>)</div>
                            <div data-filter=".pathologist" class="cbp-filter-item">Pathologists (<div
                                    class="cbp-filter-counter"></div>)</div>
                            <div data-filter=".radiologist" class="cbp-filter-item">Radiologists (<div
                                    class="cbp-filter-counter"></div>)</div>
                            <div data-filter=".geneticist" class="cbp-filter-item">Geneticists (<div
                                    class="cbp-filter-counter"></div>)</div>
                        </div>
                        <div id="grid-container" class="cbp-l-grid-team">
                            <ul>
                                <li class="cbp-item pathologist">
                                    <a href="#" class="cbp-caption cbp-singlePage">
                                        <div class="cbp-caption-defaultWrap">
                                            <img src="{{ asset('assets/img/team/2.jpg') }}" alt="Dr. Jane Smith"
                                                width="100%">
                                        </div>
                                        <div class="cbp-caption-activeWrap">
                                            <div class="cbp-l-caption-alignCenter">
                                                <div class="cbp-l-caption-body">
                                                    <div class="cbp-l-caption-text">VIEW PROFILE</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="cbp-singlePage cbp-l-grid-team-name">Dr. Jane Smith</a>
                                    <div class="cbp-l-grid-team-position">Chief Pathologist</div>
                                </li>
                                <li class="cbp-item radiologist">
                                    <a href="#" class="cbp-caption cbp-singlePage">
                                        <div class="cbp-caption-defaultWrap">
                                            <img src="{{ asset('assets/img/team/1.jpg') }}" alt="Dr. Michael Lee"
                                                width="100%">
                                        </div>
                                        <div class="cbp-caption-activeWrap">
                                            <div class="cbp-l-caption-alignCenter">
                                                <div class="cbp-l-caption-body">
                                                    <div class="cbp-l-caption-text">VIEW PROFILE</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="cbp-singlePage cbp-l-grid-team-name">Dr. Michael Lee</a>
                                    <div class="cbp-l-grid-team-position">Senior Radiologist</div>
                                </li>
                                <li class="cbp-item geneticist">
                                    <a href="#" class="cbp-caption cbp-singlePage">
                                        <div class="cbp-caption-defaultWrap">
                                            <img src="{{ asset('assets/img/team/4.jpg') }}" alt="Dr. Priya Patel"
                                                width="100%">
                                        </div>
                                        <div class="cbp-caption-activeWrap">
                                            <div class="cbp-l-caption-alignCenter">
                                                <div class="cbp-l-caption-body">
                                                    <div class="cbp-l-caption-text">VIEW PROFILE</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="cbp-singlePage cbp-l-grid-team-name">Dr. Priya Patel</a>
                                    <div class="cbp-l-grid-team-position">Geneticist</div>
                                </li>
                                <li class="cbp-item pathologist">
                                    <a href="#" class="cbp-caption cbp-singlePage">
                                        <div class="cbp-caption-defaultWrap">
                                            <img src="{{ asset('assets/img/team/3.jpg') }}" alt="Dr. Samuel Okafor"
                                                width="100%">
                                        </div>
                                        <div class="cbp-caption-activeWrap">
                                            <div class="cbp-l-caption-alignCenter">
                                                <div class="cbp-l-caption-body">
                                                    <div class="cbp-l-caption-text">VIEW PROFILE</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="cbp-singlePage cbp-l-grid-team-name">Dr. Samuel
                                        Okafor</a>
                                    <div class="cbp-l-grid-team-position">Laboratory Scientist</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Section: team -->

        <!-- Section: facilities -->
        <section id="facilities" class="home-section paddingbot-60">
            <div class="container marginbot-50">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="wow fadeInDown" data-wow-delay="0.1s">
                            <div class="section-heading text-center">
                                <h2 class="h-bold">Our Facilities</h2>
                                <p>Modern, fully equipped diagnostic centers for your comfort and safety.</p>
                            </div>
                        </div>
                        <div class="divider-short"></div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="wow bounceInUp" data-wow-delay="0.2s">
                            <div id="owl-works" class="owl-carousel">
                                <div class="item"><img src="{{ asset('assets/img/bima-lab.png') }}"
                                        class="img-responsive" alt="Laboratory"></div>
                                <div class="item"><img src="{{ asset('assets/img/bima-radiology.png') }}"
                                        class="img-responsive" alt="Radiology"></div>
                                <div class="item"><img src="{{ asset('assets/img/bima-waiting.png') }}"
                                        class="img-responsive" alt="Waiting Area"></div>
                                <div class="item"><img src="{{ asset('assets/img/bima-consultation.png') }}"
                                        class="img-responsive" alt="Consultation Room"></div>
                                <div class="item"><img src="{{ asset('assets/img/bima-lab.png') }}"
                                        class="img-responsive" alt="Genetics Lab"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Section: facilities -->

        <!-- Section: testimonial -->
        <section id="testimonial" class="home-section paddingbot-60 parallax" data-stellar-background-ratio="0.5">
            <div class="carousel-reviews broun-block">
                <div class="container">
                    <div class="row">
                        <div id="carousel-reviews" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="block-text rel zmin">
                                            <a title="" href="#">Comprehensive Blood Test</a>
                                            <div class="mark">My rating: <span class="rating-input">
                                                    <span data-value="0" class="glyphicon glyphicon-star"></span>
                                                    <span data-value="1" class="glyphicon glyphicon-star"></span>
                                                    <span data-value="2" class="glyphicon glyphicon-star"></span>
                                                    <span data-value="3" class="glyphicon glyphicon-star"></span>
                                                    <span data-value="4"
                                                        class="glyphicon glyphicon-star-empty"></span>
                                                    <span data-value="5"
                                                        class="glyphicon glyphicon-star-empty"></span>
                                                </span></div>
                                            <p>BIMMA Diagnostics provided fast and accurate results. The staff was very
                                                professional and caring.</p>
                                            <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                        </div>
                                        <div class="person-text rel text-light">
                                            <img src="{{ asset('assets/img/testimonials/2.jpg') }}" alt=""
                                                class="person img-circle" />
                                            <a title="" href="#">John Doe</a>
                                            <span>Lagos, Nigeria</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 hidden-xs">
                                        <div class="block-text rel zmin">
                                            <a title="" href="#">Radiology Services</a>
                                            <div class="mark">My rating: <span class="rating-input">
                                                    <span data-value="0" class="glyphicon glyphicon-star"></span>
                                                    <span data-value="1" class="glyphicon glyphicon-star"></span>
                                                    <span data-value="2" class="glyphicon glyphicon-star"></span>
                                                    <span data-value="3"
                                                        class="glyphicon glyphicon-star-empty"></span>
                                                    <span data-value="4"
                                                        class="glyphicon glyphicon-star-empty"></span>
                                                    <span data-value="5"
                                                        class="glyphicon glyphicon-star-empty"></span>
                                                </span></div>
                                            <p>The imaging center was clean and modern. My scan was quick and the doctor
                                                explained everything clearly.</p>
                                            <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                        </div>
                                        <div class="person-text rel text-light">
                                            <img src="{{ asset('assets/img/testimonials/1.jpg') }}" alt=""
                                                class="person img-circle" />
                                            <a title="" href="#">Mary Johnson</a>
                                            <span>Abuja, Nigeria</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
                                        <div class="block-text rel zmin">
                                            <a title="" href="#">Genetic Screening</a>
                                            <div class="mark">My rating: <span class="rating-input">
                                                    <span data-value="0" class="glyphicon glyphicon-star"></span>
                                                    <span data-value="1" class="glyphicon glyphicon-star"></span>
                                                    <span data-value="2" class="glyphicon glyphicon-star"></span>
                                                    <span data-value="3" class="glyphicon glyphicon-star"></span>
                                                    <span data-value="4" class="glyphicon glyphicon-star"></span>
                                                    <span data-value="5" class="glyphicon glyphicon-star"></span>
                                                </span></div>
                                            <p>Thanks to BIMMA Diagnostics, I received important genetic information
                                                that helped my family plan for the future.</p>
                                            <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                        </div>
                                        <div class="person-text rel text-light">
                                            <img src="{{ asset('assets/img/testimonials/4.jpg') }}" alt=""
                                                class="person img-circle" />
                                            <a title="" href="#">Chinedu Eze</a>
                                            <span>Port Harcourt, Nigeria</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Add more testimonials as needed -->
                            </div>
                            <a class="left carousel-control" href="#carousel-reviews" role="button"
                                data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-reviews" role="button"
                                data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Section: testimonial -->

        <!-- Section: pricing -->
        <section id="pricing" class="home-section bg-gray paddingbot-60">
            <div class="container marginbot-50">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="wow lightSpeedIn" data-wow-delay="0.1s">
                            <div class="section-heading text-center">
                                <h2 class="h-bold">Diagnostic Packages</h2>
                                <p>Affordable and comprehensive packages for individuals and families.</p>
                            </div>
                        </div>
                        <div class="divider-short"></div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 pricing-box">
                        <div class="wow bounceInUp" data-wow-delay="0.1s">
                            <div class="pricing-content general">
                                <h2>Basic Health Check</h2>
                                <h3>₦15,000 <span>/ one time</span></h3>
                                <ul>
                                    <li>Blood Count <i class="fa fa-check icon-success"></i></li>
                                    <li>Urine Analysis <i class="fa fa-check icon-success"></i></li>
                                    <li>Blood Sugar <i class="fa fa-check icon-success"></i></li>
                                    <li><del>Genetic Screening</del> <i class="fa fa-times icon-danger"></i></li>
                                </ul>
                                <div class="price-bottom">
                                    <a href="#contact" class="btn btn-skin btn-lg">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 pricing-box featured-price">
                        <div class="wow bounceInUp" data-wow-delay="0.3s">
                            <div class="pricing-content featured">
                                <h2>Comprehensive Package</h2>
                                <h3>₦35,000 <span>/ one time</span></h3>
                                <ul>
                                    <li>Full Blood Panel <i class="fa fa-check icon-success"></i></li>
                                    <li>Imaging (X-ray/Ultrasound) <i class="fa fa-check icon-success"></i></li>
                                    <li>Consultation <i class="fa fa-check icon-success"></i></li>
                                    <li>Genetic Screening <i class="fa fa-check icon-success"></i></li>
                                </ul>
                                <div class="price-bottom">
                                    <a href="#contact" class="btn btn-skin btn-lg">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 pricing-box">
                        <div class="wow bounceInUp" data-wow-delay="0.2s">
                            <div class="pricing-content general last">
                                <h2>Family Wellness</h2>
                                <h3>₦60,000 <span>/ one time</span></h3>
                                <ul>
                                    <li>Health Screening for 4 <i class="fa fa-check icon-success"></i></li>
                                    <li>Consultation <i class="fa fa-check icon-success"></i></li>
                                    <li>Priority Reporting <i class="fa fa-check icon-success"></i></li>
                                    <li>Annual Follow-up <i class="fa fa-check icon-success"></i></li>
                                </ul>
                                <div class="price-bottom">
                                    <a href="#contact" class="btn btn-skin btn-lg">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Section: pricing -->

        {{-- <section id="partner" class="home-section paddingbot-60">
            <div class="container marginbot-50">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="wow lightSpeedIn" data-wow-delay="0.1s">
                            <div class="section-heading text-center">
                                <h2 class="h-bold">Our Partners</h2>
                                <p>We collaborate with leading hospitals, clinics, and research institutions.</p>
                            </div>
                        </div>
                        <div class="divider-short"></div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="partner">
                            <a href="#"><img src="{{ asset('assets/img/partners/hospital1.png') }}"
                                    alt="Partner Hospital" /></a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="partner">
                            <a href="#"><img src="{{ asset('assets/img/partners/hospital2.png') }}"
                                    alt="Partner Clinic" /></a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="partner">
                            <a href="#"><img src="{{ asset('assets/img/partners/lab1.png') }}"
                                    alt="Partner Lab" /></a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="partner">
                            <a href="#"><img src="{{ asset('assets/img/partners/research1.png') }}"
                                    alt="Research Partner" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="wow fadeInDown" data-wow-delay="0.1s">
                            <div class="widget">
                                <h5>About BIMMA Diagnostics</h5>
                                <p>
                                    BIMMA Diagnostics is committed to providing reliable, accurate, and timely medical
                                    diagnostic services. Our mission is to empower patients and healthcare providers
                                    with the information they need for better health outcomes.
                                </p>
                            </div>
                        </div>
                        <div class="wow fadeInDown" data-wow-delay="0.1s">
                            <div class="widget">
                                <h5>Quick Links</h5>
                                <ul>
                                    <li><a href="#intro">Home</a></li>
                                    <li><a href="#service">Services</a></li>
                                    <li><a href="#doctor">Our Team</a></li>
                                    <li><a href="#pricing">Packages</a></li>
                                    <li><a href="#contact">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="wow fadeInDown" data-wow-delay="0.1s">
                            <div class="widget">
                                <h5>Contact Us</h5>
                                <p>
                                    For inquiries, appointments, or support, reach out to us:
                                </p>
                                <ul>
                                    <li>
                                        <span class="fa-stack fa-lg">
                                            <i class="fa fa-circle fa-stack-2x"></i>
                                            <i class="fa fa-calendar-o fa-stack-1x fa-inverse"></i>
                                        </span> Monday - Saturday, 8am to 8pm
                                    </li>
                                    <li>
                                        <span class="fa-stack fa-lg">
                                            <i class="fa fa-circle fa-stack-2x"></i>
                                            <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
                                        </span> +234 703 723 4659
                                    </li>
                                    <li>
                                        <span class="fa-stack fa-lg">
                                            <i class="fa fa-circle fa-stack-2x"></i>
                                            <i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
                                        </span> info@bimmadiagnostics.ng
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="wow fadeInDown" data-wow-delay="0.1s">
                            <div class="widget">
                                <h5>Our Location</h5>
                                <p>Plot 12, Medical Avenue, Victoria Island, Lagos, Nigeria</p>
                            </div>
                        </div>
                        <div class="wow fadeInDown" data-wow-delay="0.1s">
                            <div class="widget">
                                <h5>Follow Us</h5>
                                <ul class="company-social">
                                    <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li class="social-linkedin"><a href="#"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li class="social-instagram"><a href="#"><i
                                                class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sub-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="wow fadeInLeft" data-wow-delay="0.1s">
                                <div class="text-left">
                                    <p>&copy; {{ date('Y') }} BIMMA Diagnostics. All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="wow fadeInRight" data-wow-delay="0.1s">
                                <div class="text-right">
                                    <div class="credits">
                                        Designed by ATPTECHHUB
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        </footer>

    </div>
    <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

    <!-- Core JavaScript Files -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="j{{ asset('assets/s/jquery.scrollTo.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/js/stellar.js') }}"></script>
    <script src="{{ asset('assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/nivo-lightbox.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <script>
        if (window.self == window.top) {
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o), m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '../../../../www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-55234356-4', 'auto');
            ga('send', 'pageview');
        }
    </script>
</body>


</html>
