<!DOCTYPE html>
<html lang="en">

<head>
    <title>Online Test</title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Phoenixcoded">
    <meta name="keywords" content=", Flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="Phoenixcoded">
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font--><link href="https://fonts.googleapis.com/css?family=Mada:300,400,500,600,700" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap/dist/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
    <!-- flag icon framework css -->
    <link rel="stylesheet" type="text/css" href="assets/pages/flag-icon/flag-icon.min.css">
    <!-- Menu-Search css -->
    <link rel="stylesheet" type="text/css" href="assets/pages/menu-search/css/component.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

        <link rel="stylesheet" type="text/css" href="assets/css/linearicons.css" >
    <link rel="stylesheet" type="text/css" href="assets/css/simple-line-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/css/ionicons.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
    <!-- <script src="https://cdn.ckeditor.com/ckeditor5/10.0.0/classic/ckeditor.js"></script> -->
    <script src="https://cdn.ckeditor.com/ckeditor5/10.0.0/classic/ckeditor.js"></script>

</head>

<body>


<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">

        <nav class="navbar header-navbar pcoded-header" >
            <div class="navbar-wrapper">
                <div class="navbar-logo">
                    <a class="mobile-menu" id="mobile-collapse" href="#!">
                        <i class="ti-menu"></i>
                    </a>
                    <a href="index.html">
                        <img class="img-fluid" src="assets/images/logo.png" alt="Theme-Logo" />
                    </a>
                    <a class="mobile-options">
                        <i class="ti-more"></i>
                    </a>
                </div>
                <div class="navbar-container container-fluid">
                    <div>
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>
                            <li>
                                <a class="main-search morphsearch-search" href="#">
                                    <!-- themify icon -->
                                    <i class="ti-search"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                            <!-- <li class="mega-menu-top">
                                <a href="#">
                                    Mega
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification row">
                                    <li class="col-sm-3">
                                        <h6 class="mega-menu-title">Popular Links</h6>
                                        <ul class="mega-menu-links">
                                            <li><a href="form-elements-component.html">Form Elements</a></li>
                                            <li><a href="button.html">Buttons</a></li>
                                            <li><a href="map-google.html">Maps</a></li>
                                            <li><a href="#!">Contact Cards</a></li>
                                            <li><a href="user-profile.html">User Information</a></li>
                                            <li><a href="auth-lock-screen.html">Lock Screen</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">
                                        <h6 class="mega-menu-title">Mailbox</h6>
                                        <ul class="mega-mailbox">
                                            <li>
                                                <a href="#" class="media">
                                                    <div class="media-left">
                                                        <i class="ti-folder"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5>Data Backup</h5>
                                                        <small class="text-muted">Store your data</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="media">
                                                    <div class="media-left">
                                                        <i class="ti-headphone-alt"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5>Support</h5>
                                                        <small class="text-muted">24-hour support</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="media">
                                                    <div class="media-left">
                                                        <i class="ti-dropbox"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5>Drop-box</h5>
                                                        <small class="text-muted">Store large amount of data in one-box only
                                                        </small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="media">
                                                    <div class="media-left">
                                                        <i class="ti-location-pin"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5>Location</h5>
                                                        <small class="text-muted">Find Your Location with ease of use</small>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">
                                        <h6 class="mega-menu-title">Gallery</h6>
                                        <div class="row m-b-20">
                                            <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="assets/images/mega-menu/01.jpg" alt="Gallery-1">
                                            </div>
                                            <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="assets/images/mega-menu/02.jpg" alt="Gallery-2">
                                            </div>
                                            <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="assets/images/mega-menu/03.jpg" alt="Gallery-3">
                                            </div>
                                        </div>
                                        <div class="row m-b-20">
                                            <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="assets/images/mega-menu/04.jpg" alt="Gallery-4">
                                            </div>
                                            <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="assets/images/mega-menu/05.jpg" alt="Gallery-5">
                                            </div>
                                            <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="assets/images/mega-menu/06.jpg" alt="Gallery-6">
                                            </div>
                                        </div>
                                        <button class="btn btn-primary btn-sm btn-block">Browse Gallery</button>
                                    </li>
                                    <li class="col-sm-3">
                                        <h6 class="mega-menu-title">Contact Us</h6>
                                        <div class="mega-menu-contact">
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-3 col-form-label">Name</label>
                                                <div class="col-9">
                                                    <input class="form-control" type="text" placeholder="Artisanal kale" id="example-text-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-search-input" class="col-3 col-form-label">Email</label>
                                                <div class="col-9">
                                                    <input class="form-control" type="email" placeholder="Enter your E-mail Id" id="example-search-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-search-input" class="col-3 col-form-label">Contact</label>
                                                <div class="col-9">
                                                    <input class="form-control" type="number" placeholder="+91-9898989898" id="example-search-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="exampleTextarea" class="col-3 col-form-label">Message</label>
                                                <div class="col-9">
                                                    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li> -->
                        </ul>
                        <ul class="nav-right">
                           
                            <li class="header-notification lng-dropdown">
                                <a href="#" id="dropdown-active-item">
                                    <i class="flag-icon flag-icon-gb m-r-5"></i> English
                                </a>
                                <ul class="show-notification">
                                    <li>
                                        <a href="#" data-lng="en">
                                            <i class="flag-icon flag-icon-gb m-r-5"></i> English
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-lng="es">
                                            <i class="flag-icon flag-icon-es m-r-5"></i> Spanish
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-lng="pt">
                                            <i class="flag-icon flag-icon-pt m-r-5"></i> Portuguese
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-lng="fr">
                                            <i class="flag-icon flag-icon-fr m-r-5"></i> French
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="header-notification">
                                <a href="#!">
                                    <i class="ti-bell"></i>
                                    <span class="badge">5</span>
                                </a>
                                <ul class="show-notification">
                                    <li>
                                        <h6>Notifications</h6>
                                        <label class="label label-danger">New</label>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center" src="assets/images/user.png" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">John Doe</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center" src="assets/images/user.png" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Joseph William</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center" src="assets/images/user.png" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Sara Soudein</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <li class="user-profile header-notification">
                                <a href="#!">
                                    <img src="assets/images/user.png" alt="User-Profile-Image">
                                    <span>John Doe</span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    <li>
                                        <a href="#!">
                                            <i class="ti-settings"></i> Settings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="user-profile.html">
                                            <i class="ti-user"></i> Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-email"></i> My Messages
                                        </a>
                                    </li>
                                    <li>
                                        <a href="auth-lock-screen.html">
                                            <i class="ti-lock"></i> Lock Screen
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!">
                                            <i class="ti-layout-sidebar-left"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                         <div class="upgrade-button-header f-right">
                                <a href="#" class="btn btn-primary txt-white">Upgrade To Pro</a>
                            </div>

                    </div>
                </div>
            </div>
        </nav>


        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <!-- <nav class="pcoded-navbar" >
                    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                    <div class="pcoded-inner-navbar main-menu">

                        <div class="pcoded-navigatio-lavel">Layout</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li>
                                <a href="index.html">
                                    <span class="pcoded-micon"><i class="ti-comments"></i></span>
                                    <span class="pcoded-mtext">Dashboard</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                        </ul>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu active pcoded-trigger">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                    <span class="pcoded-mtext">Basic Components</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="accordion.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext">Accordion</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="breadcrumb.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext">Breadcrumbs</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="button.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext">Button</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="box-shadow.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext">Box-Shadow</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="tabs.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext">Tabs</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="color.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext">Color</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="label-badge.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext">Label Badge</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>


                                    <li class=" ">
                                        <a href="tooltip.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext">Tooltip</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="active">
                                        <a href="typography.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext">Typography</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="other.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext">Panels & wells</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="ti-crown"></i></span>
                                    <span class="pcoded-mtext">Advance Components</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" ">
                                        <a href="bs-grid.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext">Grid</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="light-box.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext">Light Box</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="notification.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext">Notifications</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="ti-star"></i></span>
                                    <span class="pcoded-mtext">Icons</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" ">
                                        <a href="icon-themify.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext">Themify</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="icon-icofonts.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext">Ico Fonts</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="pcoded-navigatio-lavel">Forms & Tables </div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li>
                                <a href="form-elements-component.html">
                                    <span class="pcoded-micon"><i class="ti-layers"></i></span>
                                    <span class="pcoded-mtext">Form Components</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                        </ul>

                        <ul class="pcoded-item pcoded-left-item">
                            <li>
                                <a href="bs-basic-table.html">
                                    <span class="pcoded-micon"><i class="ti-receipt"></i></span>
                                    <span class="pcoded-mtext">Basic Table</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                        </ul>
                        <div class="pcoded-navigatio-lavel">Chart And Maps</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li>
                                <a href="chart.html">
                                    <span class="pcoded-micon"><i class="ti-bar-chart-alt"></i></span>
                                    <span class="pcoded-mtext">Chart</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                        </ul>
                        <ul class="pcoded-item pcoded-left-item">
                            <li>
                                <a href="map-google.html">
                                    <span class="pcoded-micon"><i class="ti-map-alt"></i></span>
                                    <span class="pcoded-mtext">Maps</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                        </ul>

                        <ul class="pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="ti-id-badge"></i></span>
                                    <span class="pcoded-mtext">Pages</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">

                                    <li class="">
                                        <a href="auth-sign-in-social.html" target="_blank">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext">Login</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>

                                    <li class="">
                                        <a href="auth-sign-up-social.html" target="_blank">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext">Registration</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="auth-reset-password.html" target="_blank">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext">Forgot Password</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="auth-lock-screen.html" target="_blank">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext">Lock Screen</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="error.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext">Error</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="user-profile.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext">User Profile</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="search-result.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext">Simple Search</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="sample-page.html">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext">Sample Page</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                        <div class="pcoded-navigatio-lavel">Other</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu ">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="ti-direction-alt"></i></span>
                                    <span class="pcoded-mtext">Menu Levels</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext">Menu Level 2.1</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="pcoded-hasmenu ">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="ti-direction-alt"></i></span>
                                            <span class="pcoded-mtext">Menu Level 2.2</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="javascript:void(0)">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Menu Level 3.1</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext">Menu Level 2.3</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>

                                </ul>
                            </li>


                        </ul>
                     
                    </div>
                </nav> -->
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">

                         <!-- Main-body start -->
                        <div class="main-body">
                            <div class="page-wrapper">
                                <!-- Page body start -->
                                <div class="page-body">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <!-- Pagination Alignment Center card start -->
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5></h5>
                                                    <div class="card-header-right">
                                                        <i class="icofont icofont-rounded-down"></i>
                                                        <i class="icofont icofont-refresh"></i>
                                                        <i class="icofont icofont-close-circled"></i>
                                                    </div>
                                                </div>
                                                <div class="card-block">
                                                    <nav aria-label="Page navigation example">
                                                        <div class="col-sm-12 col-xl-9">
                                                            <h4 class="sub-title">Total question</h4>
                                                            <p class="lead m-t-0">Question will display here</p>
                                                            <div class="radio">
                                                                <label><input type="radio" name="optradio"><!--< ?php echo $row['opt1']; ?> --></label>
                                                            </div>
                                                            <div class="radio">
                                                                <label><input type="radio" name="optradio"><!-- <?php echo $row['opt2']; ?> --></label>
                                                            </div>
                                                            <div class="radio">
                                                                <label><input type="radio" name="optradio"><!-- <?php echo $row['opt3']; ?> --></label>
                                                            </div>
                                                            <div class="radio">
                                                                <label><input type="radio" name="optradio"><!-- <?php echo $row['opt4']; ?> --></label>
                                                            </div>
                                                            
                                                            <div class="btn-group " role="group" data-toggle="tooltip" data-placement="top" title="" data-original-title=".btn-xlg">

                                                                <button type="button" class="btn btn-primary btn-md waves-effect waves-light btn-skew">Previuos</button>
                                                                <button type="button" class="btn btn-primary btn-md waves-effect waves-light btn-skew">Next</button>

                                                            </div>
                                                            <hr>
                                                            
                                                            <div class="btn-group " role="group" data-toggle="tooltip" data-placement="top" title="" data-original-title=".btn-xlg">

                                                                <button type="button" class="btn btn-primary btn-md waves-effect waves-light ">Mark for feedback</button>
                                                                <button type="button" class="btn btn-primary btn-md waves-effect waves-light">Mark for review</button>

                                                            </div>

                                                            <!-- <p>You can use the mark tag to
                                                                <mark>highlight</mark> text.</p>
                                                            <p>
                                                                <del>This line of text is meant to be treated as deleted text.</del>
                                                            </p>
                                                            <p>
                                                                <ins>This line of text is meant to be treated as an addition to the document.</ins>
                                                            </p>
                                                            <p><strong>rendered as bold text</strong></p>
                                                            <p><em>rendered as italicized text</em></p> -->
                                                        </div>
                                                    </nav>
                                                </div>
                                            </div>
                                            <!-- Pagination Alignment Center card end -->
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="col-sm-12">
                                            <!-- Pagination Alignment end card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h6>Missed</h6>
                                                        <div class="card-header-right">
                                                            <i class="icofont icofont-rounded-down"></i>
                                                            <i class="icofont icofont-refresh"></i>
                                                            <i class="icofont icofont-close-circled"></i>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <nav aria-label="Page navigation example">
                                                            <h5 class="lead m-t-0"><strong>Missed Question</strong></h5><hr>
                                                            <ul class="pagination justify-content-end">
                                                                <li class="page-item disabled">
                                                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                                                </li>
                                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                                <li class="page-item">
                                                                    <a class="page-link" href="#">Next</a>
                                                                </li>
                                                            </ul>
                                                        </nav>
                                                    </div>    
                                                </div>
                                                <!-- Pagination Alignment card end -->
                                            </div>
                                            <div class="col-sm-12">
                                            <!-- Pagination Alignment end card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h6>Marked</h6>
                                                        <div class="card-header-right">
                                                            <i class="icofont icofont-rounded-down"></i>
                                                            <i class="icofont icofont-refresh"></i>
                                                            <i class="icofont icofont-close-circled"></i>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <nav aria-label="Page navigation example">
                                                            <h5 class="lead m-t-0"><strong>Marked for Review</strong></h5><hr>


                                                        </nav>
                                                    </div>    
                                                </div>
                                                <!-- Pagination Alignment card end -->
                                            </div>
                                            <div class="col-sm-12">
                                            <!-- Pagination Alignment end card start -->
                                                <div class="card">
                                                    <h1></h1>
                                                    <div class="card-header">
                                                        <h6>Subject</h6>
                                                        <div class="card-header-right">
                                                            <i class="icofont icofont-rounded-down"></i>
                                                            <i class="icofont icofont-refresh"></i>
                                                            <i class="icofont icofont-close-circled"></i>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <nav aria-label="Page navigation example">
                                                            <h5 class="lead m-t-0"><strong>Subject Name</strong></h5><hr>
                                                                <button class="btn btn-info btn-round btn-sm">1</button>
                                                        </nav>
                                                    </div>    
                                                </div>
                                                <!-- Pagination Alignment card end -->
                                            </div>
                                            <div class="col-sm-12">
                                            <!-- Pagination Alignment end card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h6>Feedback</h6>
                                                        <div class="card-header-right">
                                                            <i class="icofont icofont-rounded-down"></i>
                                                            <i class="icofont icofont-refresh"></i>
                                                            <i class="icofont icofont-close-circled"></i>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <nav aria-label="Page navigation example">
                                                            <h5 class="lead m-t-0"><strong><center> Your feedback is important to us </center></strong></h5><hr>
                                                            <form action="" method="">
                                                              <input type="checkbox" name="vehicle" value=""> Question is not clear or answer is incorrect <br>
                                                              <input type="checkbox" name="vehicle" value=""> Instruction is not clear<br>
                                                              <input type="checkbox" name="vehicle" value=""> Problem with one or more options<br>
                                                              <input type="checkbox" name="vehicle" value=""> Answer explanation is not clear or is incorrect<br>
                                                              <input type="checkbox" name="vehicle" value=""> Wrong option is shown as correct answer or none of the option is correct<br>
                                                              <input type="checkbox" name="vehicle" value=""> Alternate solution<br>

                                                              <textarea name="content" id="editor">
                                                                    <p>This is some sample content.</p>
                                                                </textarea>
                                                                <script>
                                                                    ClassicEditor
                                                                        .create( document.querySelector( '#editor' ) )
                                                                        .catch( error => {
                                                                            console.error( error );
                                                                        } );
                                                                </script>
                                                                <br><br>
                                                              <button class="btn btn-success btn-outline-success"><i class="icofont icofont-check-circled"></i>Success Button</button>
                                                            </form>

                                                        </nav>
                                                    </div>    
                                                </div>
                                                <!-- Pagination Alignment card end -->
                                            </div>
                                            <!-- next columne -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Page body end -->
                            </div>
                        </div>
                        <!-- Main-body end -->

                        <!--<div id="styleSelector">-->

                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
     <div class="fixed-button">
                <a href="#" class="btn btn-primary" aria-hidden="true">Upgrade To Pro</a>
        </div>
</div>



    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="assets/plugins/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="assets/plugins/tether/dist/js/tether.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="assets/plugins/modernizr/modernizr.js"></script>
    <script type="text/javascript" src="assets/plugins/modernizr/feature-detects/css-scrollbars.js"></script>


    <!-- Custom js -->
    <script type="text/javascript" src="assets/js/script.js"></script>
        <script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/demo-12.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/js/jquery.mousewheel.min.js"></script>

</body>

</html>