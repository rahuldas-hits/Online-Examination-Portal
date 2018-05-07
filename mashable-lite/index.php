<?php include_once 'includes/config.php'; ?>
<?php 
    session_start();
?>

<?php
    $uid = $_SESSION['uid'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mash Able Light</title>
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
    <meta name="description" content="Codedthemes">
    <meta name="keywords" content="flat ui, admin flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="Codedthemes">
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Mada:300,400,600,700,800" rel="stylesheet">
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
    <!--color css-->
    <link rel="stylesheet" type="text/css" href="assets/css/linearicons.css" >
    <link rel="stylesheet" type="text/css" href="assets/css/simple-line-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div></div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <?php 
        $sql = "SELECT * FROM `users` WHERE userid = $uid";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);

    ?>
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header" >
                <div class="navbar-wrapper">
                    <div class="navbar-logo" navbar-theme="theme4">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <a href="#!">
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
                                    <a href="#!" onclick="javascript:toggleFullScreen()">
                                        <i class="ti-fullscreen"></i>
                                    </a>
                                </li>
                            </ul>


                            <ul class="nav-right">
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
                                        <span><?php echo $row['username']; ?></span>
                                        <i class="ti-angle-down"></i>
                                    </a>
                                    <ul class="show-notification profile-notification">
                                        <li>
                                            <a href="#!">
                                                <i class="ti-settings"></i> Settings
                                            </a>
                                        </li>
                                        <li>
                                            <a href="user_profile.php">
                                                <i class="ti-user"></i> Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!">
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
                        </div>
                    </div>
                </div>
            </nav>
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar" >
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">

                            <div class="pcoded-navigatio-lavel">Layout</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="active pcoded-trigger ">
                                    <a href="index.php ">
                                        <span class="pcoded-micon"><i class="ti-comments"></i></span>
                                        <span class="pcoded-mtext">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-trigger ">
                                    <a href="select_exam.php ">
                                        <span class="pcoded-micon"><i class="ti-layers"></i></span>
                                        <span class="pcoded-mtext">Test</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-trigger ">
                                    <a href="view_attempt_paper.php">
                                        <span class="pcoded-micon"><i class="ti-user"></i></span>
                                        <span class="pcoded-mtext">Attempts</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="pcoded-item pcoded-left-item">
                                 <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-star"></i></span>
                                        <span class="pcoded-mtext">Classroom</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="group_study.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Group Study</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="batch.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="active pcoded-mtext">Batch</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">

                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-header">
                                        <div class="page-header-title">
                                            <h4>Dashboard</h4>
                                        </div>
                                        <div class="page-header-breadcrumb">
                                            <ul class="breadcrumb-title">
                                                <li class="breadcrumb-item">
                                                    <a href="#!">
                                                        <i class="icofont icofont-home"></i>
                                                    </a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="page-body">
                                        <div class="row">
                                            <!-- counter-card-1 start-->
                                            <div class="col-md-12 col-xl-4">
                                                <div class="card counter-card-1">
                                                    <div class="card-block-big">
                                                        <div class="row">
                                                            <div class="col-6 counter-card-icon">
                                                                <i class="icofont icofont-chart-histogram"></i>
                                                            </div>
                                                            <div class="col-6  text-right">
                                                                <div class="counter-card-text">
                                                                    <h3>23%</h3>
                                                                    <p>ACTIVE USER</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- counter-card-1 end-->
                                            <!-- counter-card-2 start -->
                                            <div class="col-md-6 col-xl-4">
                                                <div class="card counter-card-2">
                                                    <div class="card-block-big">
                                                        <div class="row">
                                                            <div class="col-6 counter-card-icon">
                                                                <i class="icofont icofont-chart-line-alt"></i>
                                                            </div>
                                                            <div class="col-6 text-right">
                                                                <div class="counter-card-text">
                                                                    <h3>15%</h3>
                                                                    <p>DOWN RATE</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- counter-card-2 end -->
                                            <!-- counter-card-3 start -->
                                            <div class="col-md-6 col-xl-4">
                                                <div class="card counter-card-3">
                                                    <div class="card-block-big">
                                                        <div class="row">
                                                            <div class="col-6 counter-card-icon">
                                                                <i class="icofont icofont-chart-line"></i>
                                                            </div>
                                                            <div class="col-6 text-right">
                                                                <div class="counter-card-text">
                                                                    <h3>35%</h3>
                                                                    <p>SALE RATIO</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- counter-card-3 end -->
                                            <!-- Morris chart start -->
                                            <div class="col-md-12 col-xl-8">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <button class="btn btn-primary btn-sm">Week</button>
                                                        <button class="btn btn-primary btn-sm">Month</button>
                                                        <button class="btn btn-primary btn-sm">Year</button>
                                                    </div>
                                                    <div class="card-block">
                                                        <div id="morris-extra-area" style="height:340px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Morris chart end -->
                                            <!--Follow block start-->
                                            <div class="col-md-4">
                                                <div class="card card-contact borderless-card">
                                                    <div class="widget-profile-card-1">
                                                        <div class="bg-layer"></div>
                                                        <img class="img-fluid" src="assets/images/slider8.jpg" alt="card-style-1">
                                                        <button class="btn btn-default btn-outline-default btn-icon b-lft"><i class="icofont icofont-ui-user"></i></button>
                                                        <button class="btn btn-default btn-outline-default btn-icon b-rgt"><i class="icofont icofont-ui-message"></i></button>
                                                        <div class="middle-user">
                                                            <img class="img-fluid" src="assets/images/widget/user1.png" alt="Profile-user">
                                                        </div>
                                                    </div>
                                                    <div class="card-block text-center p-10">
                                                        <h5><?php echo $row['username'];  ?></h5>
                                                        <p class="text-muted">Califonia, USA</p>
                                                        <button class="btn btn-primary btn-round m-t-10 m-b-20">Contact</button>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="row text-center">
                                                            <div class="col-6 b-r-default">
                                                                <h4 class="text-primary">345</h4>
                                                                <span class="text-muted text-uppercase">Followers</span>
                                                            </div>
                                                            <div class="col-6">
                                                                <h4 class="text-primary">1,434</h4>
                                                                <span class="text-muted text-uppercase">Followings</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Follow block Ends-->
                                            <!-- Product table Start -->
                                            <div class="col-md-8">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <h5>Product Detail</h5>
                                                    </div>
                                                    <div class="card-block product-table p-t-35">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                <tr class="text-uppercase">
                                                                    <th>Product</th>
                                                                    <th>Quantity</th>
                                                                    <th>Total</th>
                                                                    <th>Dilevery</th>
                                                                    <th>Actions</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <td>1. Awesome T-shirt</td>
                                                                    <td>24</td>
                                                                    <td><button type="button" class="btn btn-primary">$550</button></td>
                                                                    <td>M oscow,Lenina 44-1</td>
                                                                    <td><button type="button" class="btn btn-success btn-round btn-outline-success">View</button></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2. Awesome T-shirt</td>
                                                                    <td>24</td>
                                                                    <td><button type="button" class="btn btn-primary">$550</button></td>
                                                                    <td>M oscow,Lenina 44-1</td>
                                                                    <td><button type="button" class="btn btn-success btn-round btn-outline-success">View</button></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>3. Awesome T-shirt</td>
                                                                    <td>24</td>
                                                                    <td><button type="button" class="btn btn-primary">$550</button></td>
                                                                    <td>M oscow,Lenina 44-1</td>
                                                                    <td><button type="button" class="btn btn-success btn-round btn-outline-success">View</button></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>4. Awesome T-shirt</td>
                                                                    <td>24</td>
                                                                    <td><button type="button" class="btn btn-primary">$550</button></td>
                                                                    <td>M oscow,Lenina 44-1</td>
                                                                    <td><button type="button" class="btn btn-success btn-round btn-outline-success">View</button></td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Product table End -->
                                            <!-- Reset Message Start -->
                                            <div class="col-md-4">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Reset Message</h5>
                                                    </div>
                                                    <div class="card-block p-t-0">
                                                        <div class="card-msg b-b-default p-b-10">
                                                            <div class="card-msg-img">
                                                                <a href="#!">
                                                                    <img class="img-circle" src="assets/images/avatar-1.png" alt="chat-user">
                                                                </a>
                                                            </div>
                                                            <div class="card-msg-contain">
                                                                <h6>Josephin Villa</h6>
                                                                <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                                <span>9:30 PM</span>
                                                            </div>
                                                        </div>
                                                        <div class="card-msg b-b-default p-t-10 p-b-10">
                                                            <div class="card-msg-img">
                                                                <a href="#!">
                                                                    <img class="img-circle" src="assets/images/avatar-2.png" alt="chat-user">
                                                                </a>
                                                            </div>
                                                            <div class="card-msg-contain">
                                                                <h6>Josephin Villa</h6>
                                                                <p class="text-muted">Lorem Ipsum is simply dummy text of the printing.</p>
                                                                <span>9:30 PM</span>
                                                            </div>
                                                        </div>
                                                        <div class="card-msg p-t-10 p-b-10">
                                                            <div class="card-msg-img">
                                                                <a href="#!">
                                                                    <img class="img-circle" src="assets/images/avatar-4.png" alt="chat-user">
                                                                </a>
                                                            </div>
                                                            <div class="card-msg-contain">
                                                                <h6>Josephin Villa</h6>
                                                                <p class="text-muted">Lorem Ipsum is simply dummy.</p>
                                                                <span>9:30 PM</span>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Pie Chart end -->

                                            <!--user chat box start-->
                                            <div class="col-md-3">
                                                <div class="card widget-chat-box">
                                                    <div class="card-header">
                                                        <div class="row">
                                                            <div class="col-sm-2">
                                                                <i class="icofont icofont-navigation-menu pop-up"></i>
                                                            </div>
                                                            <div class="col-sm-8 text-center">
                                                                <h5>
                                                                    John Henry
                                                                </h5>
                                                            </div>
                                                            <div class="col-sm-2 text-right">
                                                                <i class="icofont icofont-ui-edit"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <p class="text-center">12:05 A.M.</p>
                                                        <div class="media">
                                                            <img class="d-flex mr-3 img-circle img-60 img-thumbnail" src="assets/images/user-card/img-round1.jpg" alt="Generic placeholder image">
                                                            <div class="media-body send-chat">
                                                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at
                                                                <span class="time">3 min ago</span>
                                                            </div>
                                                        </div>
                                                        <div class="media col-sm-8 offset-md-4">
                                                            <div class="media-body  receive-chat">
                                                                Cras sit amet nibh libero, in gravida nulla.vel metus scelerisque ante
                                                                <span class="time">
                                                                <i class="icofont icofont-check m-r-5"></i>Seen 2 sec ago
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="media">
                                                            <img class="d-flex mr-3 img-circle img-60 img-thumbnail" src="assets/images/user-card/img-round1.jpg" alt="Generic placeholder image">
                                                            <div class="media-body send-chat">
                                                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at
                                                                <span class="time">3 min ago</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <input type="text" class="form-control" placeholder="Your Message">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--user chat box Ends-->
                                            <div class="col-md-3">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <h5>NOtifiction</h5>
                                                    </div>
                                                    <div class="card-block p-t-20">
                                                        <div class="card-notification">
                                                            <div class="card-noti-conatin">
                                                                <h6>5 mins ago</h6>
                                                                <p class="text-muted m-b-30">jennifer sent you an attachament</p>
                                                            </div>
                                                        </div>
                                                        <div class="card-notification">
                                                            <div class="card-noti-conatin">
                                                                <h6>45 mins ago</h6>
                                                                <p class="text-muted m-b-30">Paul has sent a request for <span>access</span> to the project folder</p>
                                                            </div>
                                                        </div>
                                                        <div class="card-notification">
                                                            <div class="card-noti-conatin">
                                                                <h6>2 days ago</h6>
                                                                <p class="text-muted m-b-30">Demin change the dedline on the project</p>
                                                            </div>
                                                        </div>
                                                        <div class="card-notification">
                                                            <div class="card-noti-conatin">
                                                                <h6>12 mins ago</h6>
                                                                <p class="text-muted m-b-30">jennifer invite you to join the project</p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Analythics Start -->
                                            <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <h5>Analytics </h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <div id="analythics-graph"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Analythics Ends -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--<div id="styleSelector">-->

                            <!--</div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fixed-button">
                <a href="https://codedthemes.com/item/mash-able-pro-admin-template/" class="btn btn-primary" aria-hidden="true">Upgrade To Pro</a>
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
    <script type="text/javascript" src="assets/plugins/tether/dist/js/tether.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="assets/plugins/modernizr/modernizr.js"></script>
    <script type="text/javascript" src="assets/plugins/modernizr/feature-detects/css-scrollbars.js"></script>


    <!-- Morris Chart js -->
    <script src="assets/plugins/raphael/raphael.min.js"></script>
    <script src="assets/plugins/morris.js/morris.js"></script>
    <!-- echart js -->
    <script src="assets/pages/chart/echarts/js/echarts-all.js" type="text/javascript"></script>
    <!-- Morris Chart Custom js -->
    <script type="text/javascript" src="assets/pages/dashboard/project-dashboard.js"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="assets/js/script.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
    <script src="assets/js/demo-12.js"></script>
   <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>




</body>

</html>
