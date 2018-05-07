<?php include_once 'includes/config.php'; ?>
<?php session_start(); ?>
<?php
    if (isset($_POST['update'])) {
        $full_name = $_POST['full_name'];
        $phone_no =$_POST['mobile'];
        $gender = $_POST['radio'];
        $birth = $_POST['birth'];
        $skype_id = $_POST['skype_id'];

        $eid = $_SESSION['uid'];
        $sql = "UPDATE `users` SET `full_name`='$full_name',`gender`='$gender',`date_of_birth`='$birth',`mobile_no`=$phone_no,`skype_id`='$skype_id' WHERE `userid`= $eid";
        $result = mysqli_query($conn,$sql);
        echo '
            <script type="text/javascript"> 
            alert("Update Successfully");
            </script>
        ';
    }
?>

<?php
    $uid = $_SESSION['uid'];
    $sql = "SELECT * FROM `users` WHERE userid = $uid";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
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
    <meta name="description" content="Phoenixcoded">
    <meta name="keywords" content=", Flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="Phoenixcoded">
    <!-- Favicon icon -->

    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font--><link href="https://fonts.googleapis.com/css?family=Mada:300,400,500,600,700" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap/dist/css/bootstrap.min.css">
    <!-- Date-time picker css -->
    <link rel="stylesheet" type="text/css" href="assets/pages/advance-elements/css/bootstrap-datetimepicker.css">
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
</head>

<body >
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div></div>
        </div>
    </div>
    <!-- Pre-loader end -->

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
                                    <span><?php $row['username']; ?></span>
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
                                <li class="pcoded-trigger ">
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

    <!-- Main body start -->
    <div class="main-body user-profile">
        <div class="page-wrapper">
            <!-- Page-header start -->
            <div class="page-header">
                <div class="page-header-title">
                    <h4>User Profile</h4>
                </div>
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index.html">
                                <i class="icofont icofont-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">User Profile</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">User Profile</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Page-header end -->
            <!-- Page-body start -->
            <div class="page-body">
                <!--profile cover start-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cover-profile">
                            <div class="profile-bg-img">
                                <img class="profile-bg-img img-fluid" src="assets/images/user-profile/bg-img1.jpg" alt="bg-img">
                                <div class="card-block user-info">
                                    <div class="col-md-12">
                                        <div class="media-left">
                                            <a href="#" class="profile-image">
                                                <img class="user-img img-circle" src="assets/images/user-profile/user-img.jpg" alt="user-img">
                                            </a>
                                        </div>
                                        <div class="media-body row">
                                            <div class="col-lg-12">
                                                <div class="user-title">
                                                    <h2><?php echo $row['username']; ?></h2>
                                                    <span class="text-white">Web designer</span>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="pull-right cover-btn">
                                                    <button type="button" class="btn btn-primary m-r-10 m-b-5"><i class="icofont icofont-plus"></i> Follow</button>
                                                    <button type="button" class="btn btn-primary m-b-5"><i class="icofont icofont-ui-messaging"></i> Message</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--profile cover end-->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- tab header start -->
                        <!--<div class="tab-header">-->
                            <!--<ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">-->
                                <!--<li class="nav-item">-->
                                    <!--<a class="nav-link active" data-toggle="tab" href="#personal" role="tab">Personal Info</a>-->
                                    <!--<div class="slide"></div>-->
                                <!--</li>-->
                                <!--<li class="nav-item">-->
                                    <!--<a class="nav-link" data-toggle="tab" href="#binfo" role="tab">User's Services</a>-->
                                    <!--<div class="slide"></div>-->
                                <!--</li>-->
                                <!--<li class="nav-item">-->
                                    <!--<a class="nav-link" data-toggle="tab" href="#contacts" role="tab">User's Contacts</a>-->
                                    <!--<div class="slide"></div>-->
                                <!--</li>-->
                                <!--<li class="nav-item">-->
                                    <!--<a class="nav-link" data-toggle="tab" href="#review" role="tab">Reviews</a>-->
                                    <!--<div class="slide"></div>-->
                                <!--</li>-->
                            <!--</ul>-->
                        <!--</div>-->
                        <!-- tab header end -->
                        <!-- tab content start -->
                        <div class="tab-content">
                            <!-- tab panel personal start -->
                            <div class="tab-pane active" id="personal" role="tabpanel">
                                <!-- personal card start -->
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-header-text">About Me</h5>
                                        <button id="edit-btn" type="button" class="btn btn-sm btn-primary waves-effect waves-light f-right">
                                            <i class="icofont icofont-edit"></i>
                                        </button>
                                    </div>
                                    <div class="card-block">
                                        <div class="view-info">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="general-info">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-xl-6">
                                                                <table class="table m-0 table-responsive">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th scope="row">Full Name</th>
                                                                            <td> <?php echo $row['username']; ?> </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Gender</th>
                                                                            <td><?php echo $row['gender']; ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Birth Date</th>
                                                                            <td><?php echo $row['date_of_birth']; ?></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <!-- end of table col-lg-6 -->
                                                            <div class="col-lg-12 col-xl-6">
                                                                <table class="table table-responsive">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th scope="row">Email</th>
                                                                            <td><a href="#"><?php echo $row['email']; ?></a></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Mobile Number</th>
                                                                            <td><?php echo $row['mobile_no']; ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Skype</th>
                                                                            <td><?php echo $row['skype_id']; ?></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <!-- end of table col-lg-6 -->
                                                        </div>
                                                        <!-- end of row -->
                                                    </div>
                                                    <!-- end of general info -->
                                                </div>
                                                <!-- end of col-lg-12 -->
                                            </div>
                                            <!-- end of row -->
                                        </div>
                                        <!-- end of view-info -->
                                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                        <div class="edit-info">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="general-info">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <table class="table">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="input-group">
                                                                                    <span class="input-group-addon"><i class="icofont icofont-user"></i></span>
                                                                                    <input type="text" name="full_name" class="form-control" placeholder="Full Name">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="form-radio">
                                                                                    <div class="group-add-on">
                                                                                        <div class="radio radiofill radio-inline">
                                                                                            <label>
                                                                                                <input type="radio" name="radio" value="male"><i class="helper"></i> Male
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio radiofill radio-inline">
                                                                                            <label>
                                                                                                <input type="radio" name="radio" value="female"><i class="helper"></i> Female
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <input type="text" name="birth" id="dropper-default" class="form-control"  placeholder="Birth Date" >
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <!-- end of table col-lg-6 -->
                                                            <div class="col-lg-6">
                                                                <table class="table">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="input-group">
                                                                                    <span class="input-group-addon"><i class="icofont icofont-mobile-phone"></i></span>
                                                                                    <input type="text" name="mobile" class="form-control" placeholder="Mobile Number">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="input-group">
                                                                                    <span class="input-group-addon"><i class="icofont icofont-social-skype"></i></span>
                                                                                    <input type="email" name="skype_id" class="form-control" placeholder="Skype Id">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <!-- end of table col-lg-6 -->
                                                        </div>
                                                        <!-- end of row -->
                                                        <div class="text-center">
                                                            <input type="submit" value="Save" name="update" class="btn btn-primary waves-effect waves-light m-r-20">
                                                            <a href="#!" id="edit-cancel" class="btn btn-default waves-effect">Cancel</a>
                                                        </div>
                                                    </div>
                                                    <!-- end of edit info -->
                                                </div>
                                                <!-- end of col-lg-12 -->
                                            </div>
                                            <!-- end of row -->
                                        </div>
                                        <!-- end of edit-info -->
                                    </div>
                                    <!-- end of card-block -->
                                </form>
                                </div>
                            
                            </div>
                            <!-- tab pane personal end -->
                            <!-- tab pane info start -->
                            <!--<div class="tab-pane" id="binfo" role="tabpanel">-->
                                <!--&lt;!&ndash; info card start &ndash;&gt;-->
                                <!--<div class="card">-->
                                    <!--<div class="card-header">-->
                                        <!--<h5 class="card-header-text">User Services</h5>-->
                                    <!--</div>-->
                                    <!--<div class="card-block">-->
                                        <!--<div class="row">-->
                                            <!--<div class="col-md-6">-->
                                                <!--<div class="card b-l-success business-info services m-b-20">-->
                                                    <!--<div class="card-header">-->
                                                        <!--<div class="service-header">-->
                                                            <!--<a href="#"><h5 class="card-header-text">Shivani Hero</h5></a>-->
                                                        <!--</div>-->
                                                        <!--<span class="dropdown-toggle addon-btn text-muted f-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip">-->
                                         <!--</span>-->
                                                        <!--<div class="dropdown-menu dropdown-menu-right b-none services-list">-->
                                                            <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i> Edit</a>-->
                                                            <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i> Delete</a>-->
                                                            <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i> View</a>-->
                                                        <!--</div>-->
                                                    <!--</div>-->
                                                    <!--<div class="card-block">-->
                                                        <!--<div class="row">-->
                                                            <!--<div class="col-sm-12">-->
                                                                <!--<p class="task-detail">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incidi dunt ut labore et.Lorem ipsum dolor sit amet, consecte.</p>-->
                                                            <!--</div>-->
                                                            <!--&lt;!&ndash; end of col-sm-8 &ndash;&gt;-->
                                                        <!--</div>-->
                                                        <!--&lt;!&ndash; end of row &ndash;&gt;-->
                                                    <!--</div>-->
                                                    <!--&lt;!&ndash; end of card-block &ndash;&gt;-->
                                                <!--</div>-->
                                            <!--</div>-->
                                            <!--<div class="col-md-6">-->
                                                <!--<div class="card b-l-danger business-info services">-->
                                                    <!--<div class="card-header">-->
                                                        <!--<div class="service-header">-->
                                                            <!--<a href="#"><h5 class="card-header-text">Dress and Sarees</h5></a>-->
                                                        <!--</div>-->
                                                        <!--<span class="dropdown-toggle addon-btn text-muted f-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip">-->
                                         <!--</span>-->
                                                        <!--<div class="dropdown-menu dropdown-menu-right b-none services-list">-->
                                                            <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i> Edit</a>-->
                                                            <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i> Delete</a>-->
                                                            <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i> View</a>-->
                                                        <!--</div>-->
                                                    <!--</div>-->
                                                    <!--<div class="card-block">-->
                                                        <!--<div class="row">-->
                                                            <!--<div class="col-sm-12">-->
                                                                <!--<p class="task-detail">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incidi dunt ut labore et.Lorem ipsum dolor sit amet, consecte.</p>-->
                                                            <!--</div>-->
                                                            <!--&lt;!&ndash; end of col-sm-8 &ndash;&gt;-->
                                                        <!--</div>-->
                                                        <!--&lt;!&ndash; end of row &ndash;&gt;-->
                                                    <!--</div>-->
                                                    <!--&lt;!&ndash; end of card-block &ndash;&gt;-->
                                                <!--</div>-->
                                            <!--</div>-->
                                            <!--<div class="col-md-6">-->
                                                <!--<div class="card b-l-info business-info services">-->
                                                    <!--<div class="card-header">-->
                                                        <!--<div class="service-header">-->
                                                            <!--<a href="#"><h5 class="card-header-text">Shivani Auto Port</h5></a>-->
                                                        <!--</div>-->
                                                        <!--<span class="dropdown-toggle addon-btn text-muted f-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip">-->
                                         <!--</span>-->
                                                        <!--<div class="dropdown-menu dropdown-menu-right b-none services-list">-->
                                                            <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i> Edit</a>-->
                                                            <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i> Delete</a>-->
                                                            <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i> View</a>-->
                                                        <!--</div>-->
                                                    <!--</div>-->
                                                    <!--<div class="card-block">-->
                                                        <!--<div class="row">-->
                                                            <!--<div class="col-sm-12">-->
                                                                <!--<p class="task-detail">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incidi dunt ut labore et.Lorem ipsum dolor sit amet, consecte.</p>-->
                                                            <!--</div>-->
                                                            <!--&lt;!&ndash; end of col-sm-8 &ndash;&gt;-->
                                                        <!--</div>-->
                                                        <!--&lt;!&ndash; end of row &ndash;&gt;-->
                                                    <!--</div>-->
                                                    <!--&lt;!&ndash; end of card-block &ndash;&gt;-->
                                                <!--</div>-->
                                            <!--</div>-->
                                            <!--<div class="col-md-6">-->
                                                <!--<div class="card b-l-warning business-info services">-->
                                                    <!--<div class="card-header">-->
                                                        <!--<div class="service-header">-->
                                                            <!--<a href="#"><h5 class="card-header-text">Hair stylist</h5></a>-->
                                                        <!--</div>-->
                                                        <!--<span class="dropdown-toggle addon-btn text-muted f-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip">-->
                                         <!--</span>-->
                                                        <!--<div class="dropdown-menu dropdown-menu-right b-none services-list">-->
                                                            <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i> Edit</a>-->
                                                            <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i> Delete</a>-->
                                                            <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i> View</a>-->
                                                        <!--</div>-->
                                                    <!--</div>-->
                                                    <!--<div class="card-block">-->
                                                        <!--<div class="row">-->
                                                            <!--<div class="col-sm-12">-->
                                                                <!--<p class="task-detail">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incidi dunt ut labore et.Lorem ipsum dolor sit amet, consecte.</p>-->
                                                            <!--</div>-->
                                                            <!--&lt;!&ndash; end of col-sm-8 &ndash;&gt;-->
                                                        <!--</div>-->
                                                        <!--&lt;!&ndash; end of row &ndash;&gt;-->
                                                    <!--</div>-->
                                                    <!--&lt;!&ndash; end of card-block &ndash;&gt;-->
                                                <!--</div>-->
                                            <!--</div>-->
                                            <!--<div class="col-md-6">-->
                                                <!--<div class="card b-l-danger business-info services">-->
                                                    <!--<div class="card-header">-->
                                                        <!--<div class="service-header">-->
                                                            <!--<a href="#"><h5 class="card-header-text">BMW India</h5></a>-->
                                                        <!--</div>-->
                                                        <!--<span class="dropdown-toggle addon-btn text-muted f-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip">-->
                                         <!--</span>-->
                                                        <!--<div class="dropdown-menu dropdown-menu-right b-none services-list">-->
                                                            <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i> Edit</a>-->
                                                            <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i> Delete</a>-->
                                                            <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i> View</a>-->
                                                        <!--</div>-->
                                                    <!--</div>-->
                                                    <!--<div class="card-block">-->
                                                        <!--<div class="row">-->
                                                            <!--<div class="col-sm-12">-->
                                                                <!--<p class="task-detail">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incidi dunt ut labore et.Lorem ipsum dolor sit amet, consecte.</p>-->
                                                            <!--</div>-->
                                                            <!--&lt;!&ndash; end of col-sm-8 &ndash;&gt;-->
                                                        <!--</div>-->
                                                        <!--&lt;!&ndash; end of row &ndash;&gt;-->
                                                    <!--</div>-->
                                                    <!--&lt;!&ndash; end of card-block &ndash;&gt;-->
                                                <!--</div>-->
                                            <!--</div>-->
                                            <!--<div class="col-md-6">-->
                                                <!--<div class="card b-l-success business-info services">-->
                                                    <!--<div class="card-header">-->
                                                        <!--<div class="service-header">-->
                                                            <!--<a href="#"><h5 class="card-header-text">Shivani Hero</h5></a>-->
                                                        <!--</div>-->
                                                        <!--<span class="dropdown-toggle addon-btn text-muted f-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip">-->
                                         <!--</span>-->
                                                        <!--<div class="dropdown-menu dropdown-menu-right b-none services-list">-->
                                                            <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i> Edit</a>-->
                                                            <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i> Delete</a>-->
                                                            <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i> View</a>-->
                                                        <!--</div>-->
                                                    <!--</div>-->
                                                    <!--<div class="card-block">-->
                                                        <!--<div class="row">-->
                                                            <!--<div class="col-sm-12">-->
                                                                <!--<p class="task-detail">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incidi dunt ut labore et.Lorem ipsum dolor sit amet, consecte.</p>-->
                                                            <!--</div>-->
                                                            <!--&lt;!&ndash; end of col-sm-8 &ndash;&gt;-->
                                                        <!--</div>-->
                                                        <!--&lt;!&ndash; end of row &ndash;&gt;-->
                                                    <!--</div>-->
                                                    <!--&lt;!&ndash; end of card-block &ndash;&gt;-->
                                                <!--</div>-->
                                            <!--</div>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                <!--</div>-->

                                <!--&lt;!&ndash; info card end &ndash;&gt;-->
                            <!--</div>-->
                            <!-- tab pane info end -->
                            <!-- tab pane contact start -->
                            <!--<div class="tab-pane" id="contacts" role="tabpanel">-->
                                <!--<div class="row">-->
                                    <!--<div class="col-lg-3">-->
                                        <!--&lt;!&ndash; user contact card left side start &ndash;&gt;-->
                                        <!--<div class="card">-->
                                            <!--<div class="card-header contact-user">-->
                                                <!--<img class="img-circle" src="assets/images/user-profile/contact-user.jpg" alt="contact-user">-->
                                                <!--<h4>Angelica Ramos</h4>-->
                                            <!--</div>-->
                                            <!--<div class="card-block">-->
                                                <!--<ul class="list-group list-contacts">-->
                                                    <!--<li class="list-group-item active"><a href="#">All Contacts</a></li>-->
                                                    <!--<li class="list-group-item"><a href="#">Recent Contacts</a></li>-->
                                                    <!--<li class="list-group-item"><a href="#">Favourite Contacts</a></li>-->
                                                <!--</ul>-->
                                            <!--</div>-->
                                            <!--<div class="card-block groups-contact">-->
                                                <!--<h4>Groups</h4>-->
                                                <!--<ul class="list-group">-->
                                                    <!--<li class="list-group-item justify-content-between">-->
                                                        <!--Project-->
                                                        <!--<span class="badge badge-default badge-pill">30</span>-->
                                                    <!--</li>-->
                                                    <!--<li class="list-group-item justify-content-between">-->
                                                        <!--Notes-->
                                                        <!--<span class="badge badge-default badge-pill">20</span>-->
                                                    <!--</li>-->
                                                    <!--<li class="list-group-item justify-content-between">-->
                                                        <!--Activity-->
                                                        <!--<span class="badge badge-default badge-pill">100</span>-->
                                                    <!--</li>-->
                                                    <!--<li class="list-group-item justify-content-between">-->
                                                        <!--Schedule-->
                                                        <!--<span class="badge badge-default badge-pill">50</span>-->
                                                    <!--</li>-->
                                                <!--</ul>-->
                                            <!--</div>-->
                                        <!--</div>-->
                                        <!--<div class="card">-->
                                            <!--<div class="card-header">-->
                                                <!--<h4 class="card-title">Contacts<span class="f-15"> (100)</span></h4>-->
                                            <!--</div>-->
                                            <!--<div class="card-block">-->
                                                <!--<div class="connection-list">-->
                                                    <!--<a href="#"><img class="img-fluid img-circle" src="assets/images/user-profile/follower/f-1.jpg" alt="f-1" data-toggle="tooltip" data-placement="top" data-original-title="Airi Satou">-->
                                                    <!--</a>-->
                                                    <!--<a href="#"><img class="img-fluid img-circle" src="assets/images/user-profile/follower/f-2.jpg" alt="f-2" data-toggle="tooltip" data-placement="top" data-original-title="Angelica Ramos">-->
                                                    <!--</a>-->
                                                    <!--<a href="#"><img class="img-fluid img-circle" src="assets/images/user-profile/follower/f-3.jpg" alt="f-3" data-toggle="tooltip" data-placement="top" data-original-title="Ashton Cox">-->
                                                    <!--</a>-->
                                                    <!--<a href="#"><img class="img-fluid img-circle" src="assets/images/user-profile/follower/f-4.jpg" alt="f-4" data-toggle="tooltip" data-placement="top" data-original-title="Cara Stevens">-->
                                                    <!--</a>-->
                                                    <!--<a href="#"><img class="img-fluid img-circle" src="assets/images/user-profile/follower/f-5.jpg" alt="f-5" data-toggle="tooltip" data-placement="top" data-original-title="Garrett Winters">-->
                                                    <!--</a>-->
                                                    <!--<a href="#"><img class="img-fluid img-circle" src="assets/images/user-profile/follower/f-1.jpg" alt="f-6" data-toggle="tooltip" data-placement="top" data-original-title="Cedric Kelly">-->
                                                    <!--</a>-->
                                                    <!--<a href="#"><img class="img-fluid img-circle" src="assets/images/user-profile/follower/f-3.jpg" alt="f-7" data-toggle="tooltip" data-placement="top" data-original-title="Brielle Williamson">-->
                                                    <!--</a>-->
                                                    <!--<a href="#"><img class="img-fluid img-circle" src="assets/images/user-profile/follower/f-5.jpg" alt="f-8" data-toggle="tooltip" data-placement="top" data-original-title="Jena Gaines">-->
                                                    <!--</a>-->
                                                <!--</div>-->
                                            <!--</div>-->
                                        <!--</div>-->
                                        <!--&lt;!&ndash; user contact card left side end &ndash;&gt;-->
                                    <!--</div>-->
                                    <!--<div class="col-lg-9">-->
                                        <!--<div class="row">-->
                                            <!--<div class="col-sm-12">-->
                                                <!--&lt;!&ndash; contact data table card start &ndash;&gt;-->
                                                <!--<div class="card">-->
                                                    <!--<div class="card-header">-->
                                                        <!--<h5 class="card-header-text">Contacts</h5></div>-->
                                                    <!--<div class="card-block contact-details">-->
                                                        <!--<div class="data_table_main table-responsive dt-responsive">-->
                                                            <!--<table id="simpletable" class="table  table-striped table-bordered nowrap">-->
                                                                <!--<thead>-->
                                                                    <!--<tr>-->
                                                                        <!--<th>Name</th>-->
                                                                        <!--<th>Email</th>-->
                                                                        <!--<th>Mobileno.</th>-->
                                                                        <!--<th>Favourite</th>-->
                                                                        <!--<th>Action</th>-->
                                                                    <!--</tr>-->
                                                                <!--</thead>-->
                                                                <!--<tbody>-->
                                                                    <!--<tr>-->
                                                                        <!--<td>Garrett Winters</td>-->
                                                                        <!--<td>abc123@gmail.com</td>-->
                                                                        <!--<td>9989988988</td>-->
                                                                        <!--<td><i class="fa fa-star" aria-hidden="true"></i></td>-->
                                                                        <!--<td class="dropdown">-->
                                                                            <!--<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>-->
                                                                            <!--<div class="dropdown-menu dropdown-menu-right b-none contact-menu">-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>-->
                                                                            <!--</div>-->
                                                                        <!--</td>-->
                                                                    <!--</tr>-->
                                                                    <!--<tr>-->
                                                                        <!--<td>Garrett Winters</td>-->
                                                                        <!--<td>abc123@gmail.com</td>-->
                                                                        <!--<td>9989988988</td>-->
                                                                        <!--<td><i class="fa fa-star-o" aria-hidden="true"></i></td>-->
                                                                        <!--<td class="dropdown">-->
                                                                            <!--<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>-->
                                                                            <!--<div class="dropdown-menu dropdown-menu-right b-none contact-menu">-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>-->
                                                                            <!--</div>-->
                                                                        <!--</td>-->
                                                                    <!--</tr>-->
                                                                    <!--<tr>-->
                                                                        <!--<td>Garrett Winters</td>-->
                                                                        <!--<td>abc123@gmail.com</td>-->
                                                                        <!--<td>9989988988</td>-->
                                                                        <!--<td><i class="fa fa-star" aria-hidden="true"></i></td>-->
                                                                        <!--<td class="dropdown">-->
                                                                            <!--<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>-->
                                                                            <!--<div class="dropdown-menu dropdown-menu-right b-none contact-menu">-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>-->
                                                                            <!--</div>-->
                                                                        <!--</td>-->
                                                                    <!--</tr>-->
                                                                    <!--<tr>-->
                                                                        <!--<td>Garrett Winters</td>-->
                                                                        <!--<td>abc123@gmail.com</td>-->
                                                                        <!--<td>9989988988</td>-->
                                                                        <!--<td><i class="fa fa-star" aria-hidden="true"></i></td>-->
                                                                        <!--<td class="dropdown">-->
                                                                            <!--<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>-->
                                                                            <!--<div class="dropdown-menu dropdown-menu-right b-none contact-menu">-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>-->
                                                                            <!--</div>-->
                                                                        <!--</td>-->
                                                                    <!--</tr>-->
                                                                    <!--<tr>-->
                                                                        <!--<td>Garrett Winters</td>-->
                                                                        <!--<td>abc123@gmail.com</td>-->
                                                                        <!--<td>9989988988</td>-->
                                                                        <!--<td><i class="fa fa-star-o" aria-hidden="true"></i></td>-->
                                                                        <!--<td class="dropdown">-->
                                                                            <!--<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>-->
                                                                            <!--<div class="dropdown-menu dropdown-menu-right b-none contact-menu">-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>-->
                                                                            <!--</div>-->
                                                                        <!--</td>-->
                                                                    <!--</tr>-->
                                                                    <!--<tr>-->
                                                                        <!--<td>Garrett Winters</td>-->
                                                                        <!--<td>abc123@gmail.com</td>-->
                                                                        <!--<td>9989988988</td>-->
                                                                        <!--<td><i class="fa fa-star" aria-hidden="true"></i></td>-->
                                                                        <!--<td class="dropdown">-->
                                                                            <!--<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>-->
                                                                            <!--<div class="dropdown-menu dropdown-menu-right b-none contact-menu">-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>-->
                                                                            <!--</div>-->
                                                                        <!--</td>-->
                                                                    <!--</tr>-->
                                                                    <!--<tr>-->
                                                                        <!--<td>Garrett Winters</td>-->
                                                                        <!--<td>abc123@gmail.com</td>-->
                                                                        <!--<td>9989988988</td>-->
                                                                        <!--<td><i class="fa fa-star" aria-hidden="true"></i></td>-->
                                                                        <!--<td class="dropdown">-->
                                                                            <!--<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>-->
                                                                            <!--<div class="dropdown-menu dropdown-menu-right b-none contact-menu">-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>-->
                                                                            <!--</div>-->
                                                                        <!--</td>-->
                                                                    <!--</tr>-->
                                                                    <!--<tr>-->
                                                                        <!--<td>Garrett Winters</td>-->
                                                                        <!--<td>abc123@gmail.com</td>-->
                                                                        <!--<td>9989988988</td>-->
                                                                        <!--<td><i class="fa fa-star" aria-hidden="true"></i></td>-->
                                                                        <!--<td class="dropdown">-->
                                                                            <!--<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>-->
                                                                            <!--<div class="dropdown-menu dropdown-menu-right b-none contact-menu">-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>-->
                                                                            <!--</div>-->
                                                                        <!--</td>-->
                                                                    <!--</tr>-->
                                                                    <!--<tr>-->
                                                                        <!--<td>Garrett Winters</td>-->
                                                                        <!--<td>abc123@gmail.com</td>-->
                                                                        <!--<td>9989988988</td>-->
                                                                        <!--<td><i class="fa fa-star" aria-hidden="true"></i></td>-->
                                                                        <!--<td class="dropdown">-->
                                                                            <!--<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>-->
                                                                            <!--<div class="dropdown-menu dropdown-menu-right b-none contact-menu">-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>-->
                                                                            <!--</div>-->
                                                                        <!--</td>-->
                                                                    <!--</tr>-->

                                                                    <!--<tr>-->
                                                                        <!--<td>Garrett Winters</td>-->
                                                                        <!--<td>abc123@gmail.com</td>-->
                                                                        <!--<td>9989988988</td>-->
                                                                        <!--<td><i class="fa fa-star" aria-hidden="true"></i></td>-->
                                                                        <!--<td class="dropdown">-->
                                                                            <!--<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>-->
                                                                            <!--<div class="dropdown-menu dropdown-menu-right b-none contact-menu">-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-eye"></i>Activity</a>-->
                                                                                <!--<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>-->
                                                                            <!--</div>-->
                                                                        <!--</td>-->
                                                                    <!--</tr>-->
                                                                <!--</tbody>-->
                                                                <!--<tfoot>-->
                                                                    <!--<tr>-->
                                                                        <!--<th>Name</th>-->
                                                                        <!--<th>Email</th>-->
                                                                        <!--<th>Mobileno.</th>-->
                                                                        <!--<th>Favourite</th>-->
                                                                        <!--<th>Action</th>-->
                                                                    <!--</tr>-->
                                                                <!--</tfoot>-->
                                                            <!--</table>-->
                                                        <!--</div>-->
                                                    <!--</div>-->
                                                <!--</div>-->
                                                <!--&lt;!&ndash; contact data table card end &ndash;&gt;-->
                                            <!--</div>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                <!--</div>-->
                            <!--</div>-->
                            <!-- tab pane contact end -->
                            <!--<div class="tab-pane" id="review" role="tabpanel">-->
                                <!--<div class="card">-->
                                    <!--<div class="card-header">-->
                                        <!--<h5 class="card-header-text">Review</h5>-->
                                    <!--</div>-->
                                    <!--<div class="card-block">-->
                                        <!--<ul class="media-list">-->
                                            <!--<li class="media">-->
                                                <!--<div class="media-left">-->
                                                    <!--<a href="#">-->
                                                        <!--<img class="media-object img-circle comment-img" src="assets/images/avatar-1.png" alt="Generic placeholder image">-->
                                                    <!--</a>-->
                                                <!--</div>-->
                                                <!--<div class="media-body">-->
                                                    <!--<h6 class="media-heading">Sortino media<span class="f-12 text-muted m-l-5">Just now</span></h6>-->
                                                    <!--<div class="stars-example-css review-star">-->
                                                        <!--<i class="icofont icofont-star"></i>-->
                                                        <!--<i class="icofont icofont-star"></i>-->
                                                        <!--<i class="icofont icofont-star"></i>-->
                                                        <!--<i class="icofont icofont-star"></i>-->
                                                        <!--<i class="icofont icofont-star"></i>-->
                                                    <!--</div>-->
                                                    <!--<p class="m-b-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>-->
                                                    <!--<div class="m-b-25">-->
                                                        <!--<span><a href="#!" class="m-r-10 f-12">Reply</a></span><span><a href="#!" class="f-12">Edit</a> </span>-->
                                                    <!--</div>-->
                                                    <!--<hr>-->
                                                    <!--&lt;!&ndash; Nested media object &ndash;&gt;-->
                                                    <!--<div class="media mt-2">-->
                                                        <!--<a class="media-left" href="#">-->
                                                            <!--<img class="media-object img-circle comment-img" src="assets/images/avatar-2.png" alt="Generic placeholder image">-->
                                                        <!--</a>-->
                                                        <!--<div class="media-body">-->
                                                            <!--<h6 class="media-heading">Larry heading <span class="f-12 text-muted m-l-5">Just now</span></h6>-->
                                                            <!--<div class="stars-example-css review-star">-->
                                                                <!--<i class="icofont icofont-star"></i>-->
                                                                <!--<i class="icofont icofont-star"></i>-->
                                                                <!--<i class="icofont icofont-star"></i>-->
                                                                <!--<i class="icofont icofont-star"></i>-->
                                                                <!--<i class="icofont icofont-star"></i>-->
                                                            <!--</div>-->
                                                            <!--<p class="m-b-0"> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>-->
                                                            <!--<div class="m-b-25">-->
                                                                <!--<span><a href="#!" class="m-r-10 f-12">Reply</a></span><span><a href="#!" class="f-12">Edit</a> </span>-->
                                                            <!--</div>-->
                                                            <!--<hr>-->
                                                            <!--&lt;!&ndash; Nested media object &ndash;&gt;-->
                                                            <!--<div class="media mt-2">-->
                                                                <!--<div class="media-left">-->
                                                                    <!--<a href="#">-->
                                                                        <!--<img class="media-object img-circle comment-img" src="assets/images/avatar-3.png" alt="Generic placeholder image">-->
                                                                    <!--</a>-->
                                                                <!--</div>-->
                                                                <!--<div class="media-body">-->
                                                                    <!--<h6 class="media-heading">Colleen Hurst <span class="f-12 text-muted m-l-5">Just now</span></h6>-->
                                                                    <!--<div class="stars-example-css review-star">-->
                                                                        <!--<i class="icofont icofont-star"></i>-->
                                                                        <!--<i class="icofont icofont-star"></i>-->
                                                                        <!--<i class="icofont icofont-star"></i>-->
                                                                        <!--<i class="icofont icofont-star"></i>-->
                                                                        <!--<i class="icofont icofont-star"></i>-->
                                                                    <!--</div>-->
                                                                    <!--<p class="m-b-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>-->
                                                                    <!--<div class="m-b-25">-->
                                                                        <!--<span><a href="#!" class="m-r-10 f-12">Reply</a></span><span><a href="#!" class="f-12">Edit</a> </span>-->
                                                                    <!--</div>-->
                                                                <!--</div>-->
                                                                <!--<hr>-->
                                                            <!--</div>-->
                                                        <!--</div>-->
                                                    <!--</div>-->
                                                    <!--&lt;!&ndash; Nested media object &ndash;&gt;-->
                                                    <!--<div class="media mt-2">-->
                                                        <!--<div class="media-left">-->
                                                            <!--<a href="#">-->
                                                                <!--<img class="media-object img-circle comment-img" src="assets/images/avatar-1.png" alt="Generic placeholder image">-->
                                                            <!--</a>-->
                                                        <!--</div>-->
                                                        <!--<div class="media-body">-->
                                                            <!--<h6 class="media-heading">Cedric Kelly<span class="f-12 text-muted m-l-5">Just now</span></h6>-->
                                                            <!--<div class="stars-example-css review-star">-->
                                                                <!--<i class="icofont icofont-star"></i>-->
                                                                <!--<i class="icofont icofont-star"></i>-->
                                                                <!--<i class="icofont icofont-star"></i>-->
                                                                <!--<i class="icofont icofont-star"></i>-->
                                                                <!--<i class="icofont icofont-star"></i>-->
                                                            <!--</div>-->
                                                            <!--<p class="m-b-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>-->
                                                            <!--<div class="m-b-25">-->
                                                                <!--<span><a href="#!" class="m-r-10 f-12">Reply</a></span><span><a href="#!" class="f-12">Edit</a> </span>-->
                                                            <!--</div>-->
                                                            <!--<hr>-->
                                                        <!--</div>-->
                                                    <!--</div>-->
                                                    <!--<div class="media mt-2">-->
                                                        <!--<a class="media-left" href="#">-->
                                                            <!--<img class="media-object img-circle comment-img" src="assets/images/avatar-4.png" alt="Generic placeholder image">-->
                                                        <!--</a>-->
                                                        <!--<div class="media-body">-->
                                                            <!--<h6 class="media-heading">Larry heading <span class="f-12 text-muted m-l-5">Just now</span></h6>-->
                                                            <!--<div class="stars-example-css review-star">-->
                                                                <!--<i class="icofont icofont-star"></i>-->
                                                                <!--<i class="icofont icofont-star"></i>-->
                                                                <!--<i class="icofont icofont-star"></i>-->
                                                                <!--<i class="icofont icofont-star"></i>-->
                                                                <!--<i class="icofont icofont-star"></i>-->
                                                            <!--</div>-->
                                                            <!--<p class="m-b-0"> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>-->
                                                            <!--<div class="m-b-25">-->
                                                                <!--<span><a href="#!" class="m-r-10 f-12">Reply</a></span><span><a href="#!" class="f-12">Edit</a> </span>-->
                                                            <!--</div>-->
                                                            <!--<hr>-->
                                                            <!--&lt;!&ndash; Nested media object &ndash;&gt;-->
                                                            <!--<div class="media mt-2">-->
                                                                <!--<div class="media-left">-->
                                                                    <!--<a href="#">-->
                                                                        <!--<img class="media-object img-circle comment-img" src="assets/images/avatar-3.png" alt="Generic placeholder image">-->
                                                                    <!--</a>-->
                                                                <!--</div>-->
                                                                <!--<div class="media-body">-->
                                                                    <!--<h6 class="media-heading">Colleen Hurst <span class="f-12 text-muted m-l-5">Just now</span></h6>-->
                                                                    <!--<div class="stars-example-css review-star">-->
                                                                        <!--<i class="icofont icofont-star"></i>-->
                                                                        <!--<i class="icofont icofont-star"></i>-->
                                                                        <!--<i class="icofont icofont-star"></i>-->
                                                                        <!--<i class="icofont icofont-star"></i>-->
                                                                        <!--<i class="icofont icofont-star"></i>-->
                                                                    <!--</div>-->
                                                                    <!--<p class="m-b-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>-->
                                                                    <!--<div class="m-b-25">-->
                                                                        <!--<span><a href="#!" class="m-r-10 f-12">Reply</a></span><span><a href="#!" class="f-12">Edit</a> </span>-->
                                                                    <!--</div>-->
                                                                <!--</div>-->
                                                                <!--<hr>-->
                                                            <!--</div>-->
                                                        <!--</div>-->
                                                    <!--</div>-->
                                                    <!--<div class="media mt-2">-->
                                                        <!--<div class="media-left">-->
                                                            <!--<a href="#">-->
                                                                <!--<img class="media-object img-circle comment-img" src="assets/images/avatar-2.png" alt="Generic placeholder image">-->
                                                            <!--</a>-->
                                                        <!--</div>-->
                                                        <!--<div class="media-body">-->
                                                            <!--<h6 class="media-heading">Mark Doe<span class="f-12 text-muted m-l-5">Just now</span></h6>-->
                                                            <!--<div class="stars-example-css review-star">-->
                                                                <!--<i class="icofont icofont-star"></i>-->
                                                                <!--<i class="icofont icofont-star"></i>-->
                                                                <!--<i class="icofont icofont-star"></i>-->
                                                                <!--<i class="icofont icofont-star"></i>-->
                                                                <!--<i class="icofont icofont-star"></i>-->
                                                            <!--</div>-->
                                                            <!--<p class="m-b-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>-->
                                                            <!--<div class="m-b-25">-->
                                                                <!--<span><a href="#!" class="m-r-10 f-12">Reply</a></span><span><a href="#!" class="f-12">Edit</a> </span>-->
                                                            <!--</div>-->
                                                            <!--<hr>-->
                                                        <!--</div>-->
                                                    <!--</div>-->
                                                <!--</div>-->
                                            <!--</li>-->
                                        <!--</ul>-->
                                        <!--<div class="md-float-material d-flex">-->
                                            <!--<div class="md-group-add-on p-relative col-lg-12">-->
                                                <!--<div class="input-group input-group-button input-group-primary">-->
                                                    <!--<span class="input-group-addon"><i class="icofont icofont-comment"></i></span>-->
                                                    <!--<input type="text" class="form-control" placeholder="Write Comment">-->
                                                    <!--<span class="input-group-addon">-->
                                       <!--<button class="btn btn-primary"><i class="icofont icofont-plus"></i>Add Comment</button>-->
                                       <!--</span>-->
                                                <!--</div>-->
                                            <!--</div>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                <!--</div>-->
                            <!--</div>-->
                        </div>
                        <!-- tab content end -->
                    </div>
                </div>
            </div>
            <!-- Page-body end -->
        </div>
    </div>
    <!-- Main body end -->
                        <!--<div id="styleSelector">-->

                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>
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
    <!-- Bootstrap date-time-picker js -->
    <script type="text/javascript" src="assets/pages/advance-elements/moment-with-locales.min.js"></script>
    <!--<script type="text/javascript" src="assets/pages/advance-elements/bootstrap-datetimepicker.min.js"></script>-->
    <!-- Custom js -->
    <script type="text/javascript" src="assets/js/script.js"></script>
    <script src="assets/pages/user-profile.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
    <script src="assets/js/demo-12.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/jquery.mousewheel.min.js"></script>

</body>

</html>
