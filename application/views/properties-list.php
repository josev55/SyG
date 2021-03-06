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
                    <li class="dropdown active">
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

        <div class="page-wrap properties-page">

            <!-- BREADCRUMBS-->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumbs">
                            <a href="index.html">Home</a>
                            <span class="sep">/</span>
                            <span class="current">Properties List</span>
                        </div>
                        <h2 class="page-title">All Properties</h2>
                    </div>
                </div>
            </div>
            <!-- BREADCRUMBS -->

            <div class="container">
                <div class="row">

                    <div class="col-md-6 col-sm-6">
                        <div class="property-filter">
                            <a href="#" class="active">All</a>
                            <a href="#">Rent</a>
                            <a href="#">Sale</a>
                            <a href="#">Buy</a>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="property-views">
                            <a href="properties-grid.html"><i class="fa fa-th-large"></i>Grid</a>
                            <a href="properties-list.html" class="active"><i class="fa fa-bars"></i>List</a>
                            <a href="properties-map.html"><i class="fa fa-map"></i>Map</a>
                        </div>
                    </div>

                    <!-- SIDEBAR -->
                    <aside class="col-md-4">

                        <div class="property-search">
                            <form action="#" method="get">

                                <select>
                                    <option>Location</option>
                                    <option>London</option>
                                    <option>Paris</option>
                                    <option>New York</option>
                                </select>
                                <select>
                                    <option>Category</option>
                                    <option>Lands</option>
                                    <option>Plots</option>
                                    <option>Commercial</option>
                                </select>
                                <select>
                                    <option>Type</option>
                                    <option>Buy</option>
                                    <option>Sell</option>
                                    <option>Rent</option>
                                </select>

                                <hr>

                                <select>
                                    <option>Kind</option>
                                    <option>Home</option>
                                    <option>Studio</option>
                                    <option>Shop</option>
                                </select>
                                <select class="half first">
                                    <option>Rooms</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                                <select class="half">
                                    <option>Baths</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>

                                <hr>

                                <div class="check-box">
                                    <label><input type="checkbox" class="checkbox">Garage</label>
                                    <label><input type="checkbox" class="checkbox" checked>Gymnasium</label>
                                    <label><input type="checkbox" class="checkbox">Swimming Pool</label>
                                </div>

                                <hr>

                                <div class="range">
                                    <p>
                                        <label for="area" class="p-1">Area</label>
                                        <span>Sq Ft <input type="text" id="area" /></span>
                                    </p>
                                    <div id="area-range"></div>
                                </div>
                                <div class="range">
                                    <p>
                                        <label for="price" class="p-2">Price</label>
                                        <span>$ <input type="text" id="price" ></span>
                                    </p>
                                    <div id="price-range"></div>
                                </div>

                                <div class="buttons">
                                    <button class="btn btn-danger"><i class="fa fa-search"></i>Search</button>
                                    <button class="btn btn-clear">Clear</button>
                                </div>

                            </form>
                        </div>

                    </aside>
                    <!-- SIDEBAR -->

                    <div class="col-md-8">

                        <div class="row properties-list">

                            <div class="col-md-12">
                                <div class="item">
                                    <figure>
                                        <img src="images/items/1.png" alt="" class="img-responsive">
                                        <span class="label sale">Sell</span>
                                        <div class="overlay">
                                            <a href="#" class="btn btn-detail">Detail</a>
                                        </div>
                                    </figure>
                                    <div class="item-data">
                                        <div class="item-header clearfix">
                                            <h3><a href="#">Los Angles Apartment</a></h3>
                                            <span class="favorite"><i class="fa fa-heart"></i>9</span>
                                            <span class="place"><i class="fa fa-map-marker"></i>Galtur (Austria)</span>
                                        </div>
                                        <div class="item-detail">
                                            <span class="price">$ 870000</span>
                                            <div class="left">
                                                <span class="bed">3</span>
                                                <span class="bath">2</span>
                                                <span class="garage">2</span>
                                                <span class="gym">1</span>
                                            </div>
                                            <div class="right">
                                                <span class="area">134 m2</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="item">
                                    <figure>
                                        <img src="images/items/2.png" alt="" class="img-responsive">
                                        <span class="label rent">Rent</span>
                                        <div class="overlay">
                                            <a href="#" class="btn btn-detail">Detail</a>
                                        </div>
                                    </figure>
                                    <div class="item-data">
                                        <div class="item-header clearfix">
                                            <h3><a href="#">Los Angles Apartment</a></h3>
                                            <span class="favorite"><i class="fa fa-heart"></i>9</span>
                                            <span class="place"><i class="fa fa-map-marker"></i>Galtur (Austria)</span>
                                        </div>
                                        <div class="item-detail">
                                            <span class="price">$ 870000</span>
                                            <div class="left">
                                                <span class="bed">3</span>
                                                <span class="bath">2</span>
                                                <span class="garage">2</span>
                                                <span class="gym">1</span>
                                            </div>
                                            <div class="right">
                                                <span class="area">134 m2</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="item">
                                    <figure>
                                        <img src="images/items/3.png" alt="" class="img-responsive">
                                        <span class="label hot">Buy</span>
                                        <div class="overlay">
                                            <a href="#" class="btn btn-detail">Detail</a>
                                        </div>
                                    </figure>
                                    <div class="item-data">
                                        <div class="item-header clearfix">
                                            <h3><a href="#">Los Angles Apartment</a></h3>
                                            <span class="favorite"><i class="fa fa-heart"></i>9</span>
                                            <span class="place"><i class="fa fa-map-marker"></i>Galtur (Austria)</span>
                                        </div>
                                        <div class="item-detail">
                                            <span class="price">$ 870000</span>
                                            <div class="left">
                                                <span class="bed">3</span>
                                                <span class="bath">2</span>
                                                <span class="garage">2</span>
                                                <span class="gym">1</span>
                                            </div>
                                            <div class="right">
                                                <span class="area">134 m2</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="item">
                                    <figure>
                                        <img src="images/items/4.png" alt="" class="img-responsive">
                                        <span class="label sale">Sell</span>
                                        <div class="overlay">
                                            <a href="#" class="btn btn-detail">Detail</a>
                                        </div>
                                    </figure>
                                    <div class="item-data">
                                        <div class="item-header clearfix">
                                            <h3><a href="#">Los Angles Apartment</a></h3>
                                            <span class="favorite"><i class="fa fa-heart"></i>9</span>
                                            <span class="place"><i class="fa fa-map-marker"></i>Galtur (Austria)</span>
                                        </div>
                                        <div class="item-detail">
                                            <span class="price">$ 870000</span>
                                            <div class="left">
                                                <span class="bed">3</span>
                                                <span class="bath">2</span>
                                                <span class="garage">2</span>
                                                <span class="gym">1</span>
                                            </div>
                                            <div class="right">
                                                <span class="area">134 m2</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="item">
                                    <figure>
                                        <img src="images/items/5.png" alt="" class="img-responsive">
                                        <span class="label hot">Buy</span>
                                        <div class="overlay">
                                            <a href="#" class="btn btn-detail">Detail</a>
                                        </div>
                                    </figure>
                                    <div class="item-data">
                                        <div class="item-header clearfix">
                                            <h3><a href="#">Los Angles Apartment</a></h3>
                                            <span class="favorite"><i class="fa fa-heart"></i>9</span>
                                            <span class="place"><i class="fa fa-map-marker"></i>Galtur (Austria)</span>
                                        </div>
                                        <div class="item-detail">
                                            <span class="price">$ 870000</span>
                                            <div class="left">
                                                <span class="bed">3</span>
                                                <span class="bath">2</span>
                                                <span class="garage">2</span>
                                                <span class="gym">1</span>
                                            </div>
                                            <div class="right">
                                                <span class="area">134 m2</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="item">
                                    <figure>
                                        <img src="images/items/6.png" alt="" class="img-responsive">
                                        <span class="label rent">Rent</span>
                                        <div class="overlay">
                                            <a href="#" class="btn btn-detail">Detail</a>
                                        </div>
                                    </figure>
                                    <div class="item-data">
                                        <div class="item-header clearfix">
                                            <h3><a href="#">Los Angles Apartment</a></h3>
                                            <span class="favorite"><i class="fa fa-heart"></i>9</span>
                                            <span class="place"><i class="fa fa-map-marker"></i>Galtur (Austria)</span>
                                        </div>
                                        <div class="item-detail">
                                            <span class="price">$ 870000</span>
                                            <div class="left">
                                                <span class="bed">3</span>
                                                <span class="bath">2</span>
                                                <span class="garage">2</span>
                                                <span class="gym">1</span>
                                            </div>
                                            <div class="right">
                                                <span class="area">134 m2</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>

            <!-- PAGINATION -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="pagination">
                            <a href="#" class="prev"><i class="fa fa-angle-left"></i>Previous</a>
                            <a href="#">1</a>
                            <span>2</span>
                            <a href="#">3</a>
                            <a href="#">4</a>
                            <a href="#">5</a>
                            <a href="#">6</a>
                            <a href="#" class="next">Next<i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- PAGINATION -->

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