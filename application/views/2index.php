<!doctype html>
<html lang="en-US">

    <head>

        <title>SyG - Gestion Inmobiliaria</title>

        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width" />

        <script src="js/pace.js"></script>

        <link rel="stylesheet" href=<? echo base_url("css/bootstrap.min.css"); ?> type="text/css">
        <link rel="stylesheet" href="css/flexslider.css" type="text/css">
        <link rel="stylesheet" href="css/jquery.selectBox.css" type="text/css">
        <link rel="stylesheet" href="css/jquery-ui.css" type="text/css">
        <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="css/green.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="css/responsive.css" type="text/css">
        <link rel="stylesheet" href="css/pace-minimal.css">

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,700,500' rel='stylesheet' type='text/css'>

        <link rel="shortcut icon" href="images/favicon.ico">

        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->

    </head>

    <body>

        <!-- TOP -->
        <!--<div class="top-bar">

            <p class="text">
                <a><i class="fa fa-map-marker"></i> 121 King Street, Melbourne Victoria 3000 Australia</a>
                <a href="tel:+61383766284"><i class="fa fa-phone"></i> + 613 8376 6284</a>
            </p>

            <p class="social">
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-vimeo"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-skype"></i></a>
            </p>

        </div>-->
        <!-- TOP -->

        <!-- HEADER -->
        <header class="clearfix">

            <div class="logo">
                <a href="#"><img src="images/logo.png" alt="SyG" height="60"></a>
            </div>

            <nav class="navbar collapse" id="mobile-menu">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">Properties</a>
                        <ul class="dropdown-menu">
                            <li><a href="properties-grid.html">Properties Grid</a></li>
                            <li><a href="properties-list.html">Properties List</a></li>
                            <li><a href="properties-map.html">Properties Map</a></li>
                            <li><a href="properties-single.html">Properties Single</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">Services</a>
                        <ul class="dropdown-menu">
                            <li><a href="services.html">Services Page</a></li>
                            <li><a href="services-single.html">Preparation of Documents</a></li>
                            <li><a href="services-single.html">Design Projects</a></li>
                            <li><a href="services-single.html">Repair of Apartments</a></li>
                            <li><a href="services-single.html">Utility Services</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">Page</a>
                        <ul class="dropdown-menu">
                            <li><a href="team.html">Team</a></li>
                            <li><a href="team-single.html">Team Single</a></li>
                            <li><a href="typography.html">Typography</a></li>
                            <li><a href="error.html">404 Error</a></li>
                            <li><a href="offline.html">Site Offline</a></li>
                            <li><a href="coming-soon.html">Coming Soon</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">Blog</a>
                        <ul class="dropdown-menu">
                            <li><a href="blog.html">Blog Posts</a></li>
                            <li><a href="blog-post.html">Single Post</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </nav>
<!--
            <div class="user">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="images/avatar1.png" alt="User Photo">
                    <span class="drop-arow"></span>
                </a>
                <ul class="dropdown-menu user-drop">
                    <li><a href="#"><i class="fa fa-user"></i>My Profile</a></li>
                    <li><a href="#"><i class="fa fa-list"></i>My Properties</a></li>
                    <li><a href="#"><i class="fa fa-sign-out"></i>Logout</a></li>
                </ul>
            </div>

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mobile-menu" aria-expanded="false">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
-->
        </header>
        <!-- HEADER -->

        <!-- SLIDER -->
        <div class="flexslider" id="slider">
            <ul class="slides">
              <?foreach ($publicaciones as $publicacion):?>
                <?if($publicacion->is_highlighted == 1): ?>
                    <li>
                        <img src="images/1/landing.jpg" class="img-responsive" alt="Slider Image" />
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="detail">
                                        <div class="white">
                                            <h2><? echo $publicacion->display_name; ?></h2>
                                            <span class="slide-location"><? echo $publicacion->address ?></span>
                                            <div class="bar"></div>
                                            <span class="slide-price"><? echo "UF " . $publicacion->price ?></span>
                                        </div>
                                        <div class="red">
                                            <span class="bath"><? echo $publicacion->num_dorm . " Dormitorios" ?></span>
                                            <span class="bed"><? echo $publicacion->num_banos . " Baños" ?></spn>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                <?endif; ?>
              <?endforeach;?>
            </ul>
        </div>
        <!-- SLIDER -->

        <!-- FILTER -->
        <div class="container">
            <div class="filter">

                <select class="location">
                    <option>Ubicación</option>
                </select>

                <select class="cata">
                    <option>Tipo</option>
                </select>

                <select class="cata">
                    <option>Operación</option>
                </select>

                <!--<select class="type">
                    <option>Type</option>
                    <option>Buy</option>
                    <option>Sell</option>
                    <option>Rent</option>
                </select>-->

                <button type="button" style="float: right;" class="btn"><i class="fa fa-search"></i>Buscar</button>

                <div class="range">
                    <p>
                      <label for="price">Precio</label>
                      <span>UF <input type="text" id="price" ></span>
                    </p>
                    <div id="price-range"></div>
                </div>

                <!--<a href="#" class="adv-srch">Busqueda Avanzada</a>-->

            </div>
        </div>
        <!-- FILTER -->

        <!-- ITEMS GRID -->
        <div class="container">
            <div class="row">
                <?foreach ($publicaciones as $publicacion):?>
                  <div class="col-md-4 col-sm-6">
                      <div class="item">
                          <div class="item-header clearfix">
                              <h3><a href="#"><? echo $publicacion->display_name; ?></a></h3>
                          </div>
                          <figure>
                              <img src=<? echo "images/" . $publicacion->images[0]->img_url; ?> alt="" class="img-responsive">
                              <span class="label sale">Venta</span>
                              <div class="overlay">
                                  <a href="#" class="btn btn-detail">Detalles</a>
                              </div>
                          </figure>
                          <div class="item-detail">
                              <div class="left">
                                  <span class="place"><i class="fa fa-map-marker"></i><? echo $publicacion->address; ?></span>
                                  <span class="bed">3</span>
                                  <span class="bath">2</span>
                              </div>
                              <div class="right">
                                  <span class="area"><? echo $publicacion->space . " m2"; ?></span>
                                  <span class="price"><? echo "UF " . $publicacion->price; ?></span>
                              </div>
                          </div>
                      </div>
                  </div>
                <?endforeach;?>

            </div>
        </div>
        <!-- ITEMS GRID -->

        <!-- FACTS -->
        <!--<div class="facts_wrap animated">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="clearfix row">
                            <li class="counter col-md-3 col-sm-3">
                                <div>
                                    <figure><img src="images/fact1.png" alt=""></figure>
                                    <small>Apartments</small>
                                    <span data-fact="2518">0000</span>
                                </div>
                            </li>
                            <li class="counter col-md-3 col-sm-3">
                                <div>
                                    <figure><img src="images/fact2.png" alt=""></figure>
                                    <small>Industrial</small>
                                    <span data-fact="1007">0000</span>
                                </div>
                            </li>
                            <li class="counter col-md-3 col-sm-3">
                                <div>
                                    <figure><img src="images/fact3.png" alt=""></figure>
                                    <small>Houses</small>
                                    <span data-fact="2119">0000</span>
                                </div>
                            </li>
                            <li class="counter col-md-3 col-sm-3">
                                <div>
                                    <figure><img src="images/fact4.png" alt=""></figure>
                                    <small>Commercial</small>
                                    <span data-fact="507">000</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- FACTS -->

        <!-- ITEMS GRID -->
        <!--<div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-6">
                    <div class="item">
                        <div class="item-header clearfix">
                            <h3><a href="#">Los Angles Apartment</a></h3>
                            <span class="favorite"><i class="fa fa-heart"></i>9</span>
                        </div>
                        <figure>
                            <img src="images/items/7.png" alt="" class="img-responsive">
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
                            <h3><a href="#">Los Angles Apartment</a></h3>
                            <span class="favorite"><i class="fa fa-heart"></i>9</span>
                        </div>
                        <figure>
                            <img src="images/items/8.png" alt="" class="img-responsive">
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
                            <h3><a href="#">Los Angles Apartment</a></h3>
                            <span class="favorite"><i class="fa fa-heart"></i>9</span>
                        </div>
                        <figure>
                            <img src="images/items/9.png" alt="" class="img-responsive">
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
                            <h3><a href="#">Los Angles Apartment</a></h3>
                            <span class="favorite"><i class="fa fa-heart"></i>9</span>
                        </div>
                        <figure>
                            <img src="images/items/10.png" alt="" class="img-responsive">
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
                            <h3><a href="#">Los Angles Apartment</a></h3>
                            <span class="favorite"><i class="fa fa-heart"></i>9</span>
                        </div>
                        <figure>
                            <img src="images/items/11.png" alt="" class="img-responsive">
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
                            <h3><a href="#">Los Angles Apartment</a></h3>
                            <span class="favorite"><i class="fa fa-heart"></i>9</span>
                        </div>
                        <figure>
                            <img src="images/items/12.png" alt="" class="img-responsive">
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

        <!-- BANNER -->
        <!--<div class="full-width-white design">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-5">
                        <article>
                            <h2>interior Design as gift</h2>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus</p>
                            <button type="button" class="btn btn-danger">learn more</button>
                        </article>
                    </div>
                    <div class="col-md-7 col-sm-7">
                        <figure>
                            <img src="images/gift-design.png" alt="Image">
                        </figure>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- BANNER -->

        <!-- BLOG -->
        <div class="full-width home-posts blog-posts">
            <div class="container">
                <div class="row">

                    <div class="col-md-6">
                        <div class="post clearfix">
                            <figure>
                                <a href="#"><img src="images/post1.png" alt="" class="img-responsive" ></a>
                            </figure>
                            <article>
                                <span class="date">8 June 2015</span>
                                <h3><a href="blog-post.html">It has nice clean design</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis nascetur ridiculus...</p>
                                <a href="#" class="cmmt">28</a>
                            </article>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="post clearfix">
                            <figure>
                                <a href="#"><img src="images/post2.png" alt="" class="img-responsive" ></a>
                            </figure>
                            <article>
                                <span class="date">14 September 2015</span>
                                <h3><a href="blog-post.html">Experienced real estate brokers</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis nascetur ridiculus...</p>
                                <a href="#" class="cmmt">7</a>
                            </article>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- BLOG -->

        <!-- BANNER -->
        <!--<div class="full-width personal-agent">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <figure>
                            <img src="images/agent-pic.png" alt="Pic" class="img-responsive">
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

        <!-- REVIEWS -->
        <!--<div class="full-width rewiews">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img src="images/avatar1.png" alt="Avatar" class="img-responsive">
                        <h6>Jane Ramos</h6>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient...</p>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <img src="images/avatar2.png" alt="Avatar" class="img-responsive">
                        <h6>Eva Rodriges</h6>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient...</p>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <img src="images/avatar3.png" alt="Avatar" class="img-responsive">
                        <h6>Paul Jones</h6>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient...</p>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- REVIEWS -->

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
                    <div class="col-md-7 copy-right">
                        <p><img src="images/logo.png" alt="Logo" class="img-responsive" style="margin-bottom: 30px; height: 60px !important;"> &copy; 2016 S &amp; G — Gestion Inmobiliaria</p>
                    </div>
                    <div class="col-md-5">
                        <!--<ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Properties</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Contact Us</a></li>-->
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
