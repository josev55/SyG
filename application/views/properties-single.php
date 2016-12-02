<!doctype html>
<html lang="en-US">

    <head>

        <title>SyG - Gestion Inmobiliaria</title>

        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width" />

        <script src="js/pace.js"></script>

        <link rel="stylesheet" href=<? echo base_url("css/bootstrap.min.css"); ?> type="text/css">
        <link rel="stylesheet" href=<? echo base_url("css/flexslider.css");?> type="text/css">
        <link rel="stylesheet" href=<? echo base_url("css/jquery.selectBox.css");?> type="text/css">
        <link rel="stylesheet" href=<? echo base_url("css/jquery-ui.css");?> type="text/css">
        <link rel="stylesheet" href=<? echo base_url("css/font-awesome.min.css");?> type="text/css">
        <link rel="stylesheet" href=<? echo base_url("css/green.css");?> type="text/css">
        <link rel="stylesheet" href=<? echo base_url("css/style.css");?> type="text/css">
        <link rel="stylesheet" href=<? echo base_url("css/responsive.css");?> type="text/css">
        <link rel="stylesheet" href=<? echo base_url("css/pace-minimal.css");?>>

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,700,500' rel='stylesheet' type='text/css'>

        <link rel="shortcut icon" href="favicon.ico">

        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->

    </head>

    <body>

    <!-- TOP -->
    <!-- TOP -->

        <!-- HEADER -->
        <header class="clearfix">

            <div class="logo">
                <a href="#"><img src=<? echo base_url("images/logo.png");?> alt="SyG" height="60"></a>
            </div>

            <nav class="navbar collapse" id="mobile-menu">
                <ul class="nav navbar-nav">
                    <li><a href="/">Inicio</a></li>
                    <li class="dropdown active">
                        <a class="dropdown-toggle" data-toggle="dropdown">Properties</a>
                    </li>
                    <li><a href="contact.html">Contacto</a></li>
                </ul>
            </nav>

        </header>
        <!-- HEADER -->

        <div class="page-wrap properties-page property-single">

            <!-- BREADCRUMBS-->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumbs">
                            <a href="/">Inicio</a>
                            <span class="sep">/</span>
                            <span class="current">Propiedades</span>
                        </div>
                        <h2 class="page-title"><? echo $publicacion->display_name; ?></h2>
                    </div>
                </div>
            </div>
            <!-- BREADCRUMBS -->

            <div class="container">

                <!-- PROPERTY FILTERS -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="property-filter">
                            <a href="#" class="view-map">View on Map</a>
                        </div>
                    </div>
                </div>
                <!-- PROPERTY FILTERS -->

                <div class="row">

                    <!-- PROPERTY SLIDER -->
                    <div class="col-md-7 property-slider">
                        <figure>
                            <img src=<? echo base_url("images/".$images[0]->img_url);?> alt="Image" class="img-responsive">
                            <span class="label sale">Sale</span>
                        </figure>
                        <div class="thumbnails">
                            <a href="#"><img src=<? echo base_url("images/pro-thumb1.jpg");?> alt="Thumbnils" class="img-responsive"></a>
                            <a href="#"><img src=<? echo base_url("images/pro-thumb2.jpg");?> alt="Thumbnils" class="img-responsive"></a>
                            <a href="#"><img src=<? echo base_url("images/pro-thumb3.jpg");?> alt="Thumbnils" class="img-responsive"></a>
                        </div>
                    </div>
                    <!-- PROPERTY SLIDER -->

                    <!-- PROPERTY DATA -->
                    <div class="col-md-5 property-data">
                        <div class="prop-features prop-before">
                            <span class="location">Barcelona (Spain)</span>
                            <span class="area">1750 Sq Ft</span>
                        </div>
                        <div class="prop-price">
                            <strong class="price">$ 23 525 800</strong>
                            <a href="" class="btn btn-danger">Contact Agent</a>
                        </div>
                        <div class="prop-features">
                            <span class="bed">3 Bedroom</span>
                            <span class="garage">1 Garage</span>
                            <span class="bath">2 Baths</span>
                            <span class="kitchen">2 Kithen</span>
                            <span class="gym">1 Gym</span>
                        </div>
                        <ul>
                            <li>Garden</li>
                            <li>Air Condition</li>
                            <li>CCTV</li>
                            <li>Security System</li>
                            <li>Parking</li>
                            <li>Children Play Ground</li>
                            <li>Graveyard</li>
                            <li>Gym</li>
                            <li>Community Center</li>
                        </ul>
                    </div>
                    <!-- PROPERTY DATA -->

                </div>

            </div>

            <!-- GALLERY -->
            <!--<div class="full-width gallery">
                <div class="grid">
                    <div class="grid-sizer"></div>
                    <div class="grid-item grid-item-half">
                        <a href="#"><img src=<? echo base_url("images/g13.jpg");?> alt=""><div class="overlay"></div></a>
                        <a href="#"><img src=<? echo base_url("images/g11.jpg");?> alt=""><div class="overlay"></div></a>
                        <a href="#"><img src=<? echo base_url("images/g12.jpg");?> alt=""><div class="overlay"></div></a>
                    </div>
                    <div class="grid-item">
                        <a href="#"><img src=<? echo base_url("images/g14.jpg");?> alt=""><div class="overlay"></div></a>
                        <a href="#"><img src=<? echo base_url("images/g15.jpg");?> alt=""><div class="overlay"></div></a>
                    </div>
                    <div class="grid-item">
                        <a href="#"><img src=<? echo base_url("images/g16.jpg");?> alt=""><div class="overlay"></div></a>
                        <a href="#"><img src=<? echo base_url("images/g17.jpg");?> alt=""><div class="overlay"></div></a>
                    </div>
                    <div class="grid-item">
                        <a href="#"><img src=<? echo base_url("images/g18.jpg");?> alt=""><div class="overlay"></div></a>
                        <a href="#"><img src=<? echo base_url("images/g19.jpg");?> alt=""><div class="overlay"></div></a>
                    </div>
                    <div class="grid-item grid-item-half">
                        <a href="#"><img src=<? echo base_url("images/g20.jpg");?> alt=""><div class="overlay"></div></a>
                        <a href="#"><img src=<? echo base_url("images/g13.jpg");?> alt=""><div class="overlay"></div></a>
                    </div>
                </div>
            </div>-->
            <!-- GALLERY -->

            <div class="container">
                <div class="row">

                    <!-- INFRASTRUCTURE -->
                    <div class="col-md-5 infra-elements">
                        <h5>Infrastructure Elements</h5>
                        <div class="element">
                            <img src=<? echo base_url("images/element-bus.png");?> alt="">
                            <h6>Bus Stop</h6>
                            <span class="walk">In 8 Minutes</span>
                            <a href="#" class="loc-marker"><i class="fa fa-map-marker"></i></a>
                        </div>
                        <div class="element">
                            <img src=<? echo base_url("images/element-book.png");?> alt="">
                            <h6>The Great Library</h6>
                            <span class="walk">In 12 Minutes</span>
                            <a href="#" class="loc-marker"><i class="fa fa-map-marker"></i></a>
                        </div>
                        <div class="element">
                            <img src=<? echo base_url("images/element-market.png");?> alt="">
                            <h6>Super Market</h6>
                            <span class="walk">In 2 Minutes</span>
                            <a href="#" class="loc-marker"><i class="fa fa-map-marker"></i></a>
                        </div>
                        <div class="element">
                            <img src=<? echo base_url("images/element-school.png");?> alt="">
                            <h6>International School</h6>
                            <span class="cycling">In 13 Minutes</span>
                            <a href="#" class="loc-marker"><i class="fa fa-map-marker"></i></a>
                        </div>
                    </div>
                    <!-- INFRASTRUCTURE -->

                    <!-- NEARBY PLACES -->
                    <div class="col-md-7 nearby-places">
                        <h5>Nearby Attractions</h5>
                        <div class="element">
                            <figure>
                                <img src=<? echo base_url("images/nearby1.png");?> alt="Image" class="img-responsive">
                            </figure>
                            <h6>Champs Elysees</h6>
                            <span class="car">In 14 Minutes</span>
                            <a href="#" class="loc-marker"><i class="fa fa-map-marker"></i></a>
                        </div>
                        <div class="element">
                            <figure>
                                <img src=<? echo base_url("images/nearby2.png");?> alt="Image" class="img-responsive">
                            </figure>
                            <h6>South Beach</h6>
                            <span class="car">In 20 Minutes</span>
                            <a href="#" class="loc-marker"><i class="fa fa-map-marker"></i></a>
                        </div>
                        <div class="element">
                            <figure>
                                <img src=<? echo base_url("images/nearby3.png");?> alt="Image" class="img-responsive">
                            </figure>
                            <h6>Ghosts and The Walking</h6>
                            <span class="car">In 24 Minutes</span>
                            <a href="#" class="loc-marker"><i class="fa fa-map-marker"></i></a>
                        </div>
                    </div>
                    <!-- NEARBY PLACES -->

                </div>
            </div>

            <!-- BANNER -->
            <!--<div class="full-width personal-agent">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <figure>
                                <img src=<? echo base_url("images/agent-pic.png");?> alt="Pic" class="img-responsive">
                            </figure>
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <article>
                                <span>Lara Loft</span>
                                <h2>Your personal agent</h2>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget<br> dolor. Aenean massa.</p>
                                <button type="button" class="btn btn-danger">Get Agent Help</button>
                            </article>
                        </div>
                    </div>
                </div>
            </div>-->
            <!-- BANNER -->

            <!-- ITEMS GRID -->
            <!--<div class="container">
                <div class="row">

                    <div class="col-md-4 col-sm-6">
                        <div class="item">
                            <div class="item-header clearfix">
                                <h3>Los Angles Apartment</h3>
                                <span class="favorite"><i class="fa fa-heart"></i>9</span>
                            </div>
                            <figure>
                                <img src=<? echo base_url("images/items/7.png");?> alt="" class="img-responsive">
                                <span class="label sale">Sell</span>
                                <div class="overlay">
                                    <a href="#" class="btn btn-detail">Detail</a>
                                </div>
                            </figure>
                            <div class="item-detail">
                                <div class="left">
                                    <span class="place"><i class="fa fa-map-marker"></i>Galtur (Austria)</span>
                                    <span class="bed">3</span>
                                    <span class="bath">2</span>
                                    <span class="garage">2</span>
                                    <span class="gym">1</span>
                                </div>
                                <div class="right">
                                    <span class="area">134 m2</span>
                                    <span class="price">$ 870000</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="item">
                            <div class="item-header clearfix">
                                <h3>Los Angles Apartment</h3>
                                <span class="favorite"><i class="fa fa-heart"></i>9</span>
                            </div>
                            <figure>
                                <img src=<? echo base_url("images/items/8.png");?> alt="" class="img-responsive">
                                <span class="label rent">Rent</span>
                                <div class="overlay">
                                    <a href="#" class="btn btn-detail">Detail</a>
                                </div>
                            </figure>
                            <div class="item-detail">
                                <div class="left">
                                    <span class="place"><i class="fa fa-map-marker"></i>Galtur (Austria)</span>
                                    <span class="bed">3</span>
                                    <span class="bath">2</span>
                                    <span class="garage">2</span>
                                    <span class="gym">1</span>
                                </div>
                                <div class="right">
                                    <span class="area">134 m2</span>
                                    <span class="price">$ 870000</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="item">
                            <div class="item-header clearfix">
                                <h3>Los Angles Apartment</h3>
                                <span class="favorite"><i class="fa fa-heart"></i>9</span>
                            </div>
                            <figure>
                                <img src=<? echo base_url("images/items/9.png");?> alt="" class="img-responsive">
                                <span class="label rent">Rent</span>
                                <div class="overlay">
                                    <a href="#" class="btn btn-detail">Detail</a>
                                </div>
                            </figure>
                            <div class="item-detail">
                                <div class="left">
                                    <span class="place"><i class="fa fa-map-marker"></i>Galtur (Austria)</span>
                                    <span class="bed">3</span>
                                    <span class="bath">2</span>
                                    <span class="garage">2</span>
                                    <span class="gym">1</span>
                                </div>
                                <div class="right">
                                    <span class="area">134 m2</span>
                                    <span class="price">$ 870000</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="item">
                            <div class="item-header clearfix">
                                <h3>Los Angles Apartment</h3>
                                <span class="favorite"><i class="fa fa-heart"></i>9</span>
                            </div>
                            <figure>
                                <img src=<? echo base_url("images/items/10.png");?> alt="" class="img-responsive">
                                <span class="label hot">Hot</span>
                                <div class="overlay">
                                    <a href="#" class="btn btn-detail">Detail</a>
                                </div>
                            </figure>
                            <div class="item-detail">
                                <div class="left">
                                    <span class="place"><i class="fa fa-map-marker"></i>Galtur (Austria)</span>
                                    <span class="bed">3</span>
                                    <span class="bath">2</span>
                                    <span class="garage">2</span>
                                    <span class="gym">1</span>
                                </div>
                                <div class="right">
                                    <span class="area">134 m2</span>
                                    <span class="price">$ 870000</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="item">
                            <div class="item-header clearfix">
                                <h3>Los Angles Apartment</h3>
                                <span class="favorite"><i class="fa fa-heart"></i>9</span>
                            </div>
                            <figure>
                                <img src=<? echo base_url("images/items/11.png");?> alt="" class="img-responsive">
                                <span class="label rent">Rent</span>
                                <div class="overlay">
                                    <a href="#" class="btn btn-detail">Detail</a>
                                </div>
                            </figure>
                            <div class="item-detail">
                                <div class="left">
                                    <span class="place"><i class="fa fa-map-marker"></i>Galtur (Austria)</span>
                                    <span class="bed">3</span>
                                    <span class="bath">2</span>
                                    <span class="garage">2</span>
                                    <span class="gym">1</span>
                                </div>
                                <div class="right">
                                    <span class="area">134 m2</span>
                                    <span class="price">$ 870000</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="item">
                            <div class="item-header clearfix">
                                <h3>Los Angles Apartment</h3>
                                <span class="favorite"><i class="fa fa-heart"></i>9</span>
                            </div>
                            <figure>
                                <img src=<? echo base_url("images/items/12.png");?> alt="" class="img-responsive">
                                <span class="label sale">Sell</span>
                                <div class="overlay">
                                    <a href="#" class="btn btn-detail">Detail</a>
                                </div>
                            </figure>
                            <div class="item-detail">
                                <div class="left">
                                    <span class="place"><i class="fa fa-map-marker"></i>Galtur (Austria)</span>
                                    <span class="bed">3</span>
                                    <span class="bath">2</span>
                                    <span class="garage">2</span>
                                    <span class="gym">1</span>
                                </div>
                                <div class="right">
                                    <span class="area">134 m2</span>
                                    <span class="price">$ 870000</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>-->
            <!-- ITEMS GRID -->

        </div>

        <!-- CALL2ACTION -->
        <div class="full-width call-action">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <h4>¿Quiéres vender con nosotros? Contactanos!</h4>
                    </div>
                    <div class="col-md-3">
                        <a href="contact.html" class="btn btn-danger">Contacto</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- CALL2ACTION -->

        <!-- FOOTER -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-5 copy-right">
                        <p><img src=<? echo base_url("images/logo.png") ?> alt="Logo" class="img-responsive" style="margin-bottom: 30px; height: 60px !important;"> &copy; 2016 S &amp; G — Gestion Inmobiliaria</p>
                    </div>
                    <div class="col-md-7">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Properties</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER -->

        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/masonry.pkgd.min.js"></script>
        <script src="js/jquery.flexslider-min.js"></script>
        <script src="js/jquery.selectBox.min.js"></script>
        <script src="js/icheck.js"></script>
        <script src="js/counter.animation.js"></script>
        <script src="js/jquery.appear.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/jquery.cycle2.js"></script>

    </body>
</html>
