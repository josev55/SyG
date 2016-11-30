<!doctype html>
<html lang="en-US">

    <head>

        <title>HATA - The Real Estate</title>

        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width" />

        <script src="js/pace.js"></script>

        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
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

        <link rel="shortcut icon" href="favicon.ico">

        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->

    </head>

    <body>

        <!-- TOP -->
        <div class="top-bar">

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

        </div>
        <!-- TOP -->

        <!-- HEADER -->
        <header class="clearfix">

            <div class="logo">
                <a href="#"><img src="images/logo.png" alt="HATA">HATA</a>
            </div>

            <nav class="navbar collapse" id="mobile-menu">
                <ul class="nav navbar-nav">
                    <li><a href="index.html">Home</a></li>
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
                    <li class="active"><a href="contact.html">Contact Us</a></li>
                </ul>
            </nav>

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

        </header>
        <!-- HEADER -->

        <div class="page-wrap">

            <!-- BREADCRUMBS-->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumbs">
                            <a href="index.html">Home</a>
                            <span class="sep">/</span>
                            <span class="current">Contact Us</span>
                        </div>
                        <h2 class="page-title">Contact Us</h2>
                    </div>
                </div>
            </div>
            <!-- BREADCRUMBS -->

            <!-- MAP&FORM -->
            <div class="full-width map-wrap">

                <div id="map-canvas" style="width: 100%; height: 625px;"></div>

                <div class="contact-form-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-md-offset-8 col-sm-offset-6">
                                <div class="contact-form">
                                    <h3>Feedback</h3>
                                    <form action="#">
                                        <input type="text" placeholder="Name">
                                        <input type="text" placeholder="eMail">
                                        <input type="text" placeholder="Phone">
                                        <input type="text" placeholder="Subject">
                                        <textarea placeholder="Message"></textarea>
                                        <input type="submit" class="btn btn-danger" value="Send Message">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- MAP&FORM -->

            <!-- ADDRESS -->
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 address">
                        <i class="fa fa-map-marker"></i>
                        <span>Melbourne, 121 King Street</span>
                    </div>
                    <div class="col-md-3 col-sm-3 address">
                        <i class="fa fa-phone"></i>
                        <span>+61 3 8376 6284</span>
                    </div>
                    <div class="col-md-3 col-sm-3 address">
                        <i class="fa fa-envelope"></i>
                        <span>email@email.com</span>
                    </div>
                    <div class="col-md-3 col-sm-3 address">
                        <i class="fa fa-skype"></i>
                        <span>skype.hata</span>
                    </div>
                </div>
            </div>
            <!-- ADDRESS -->

        </div>

        <!-- CALL2ACTION -->
        <div class="full-width call-action">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <h4>Want to sell you property? contact us now!</h4>
                    </div>
                    <div class="col-md-3">
                        <a href="contact.html" class="btn btn-danger">Submit Property</a>
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
                        <p><img src="images/footer-logo.png" alt="Logo" class="img-responsive"> &copy; 2015 HATA — Real Estate Site Template</p>
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

        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
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
        <script src="js/gmap.js"></script>

    </body>
</html>