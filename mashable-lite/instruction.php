<?php require_once 'includes/config.php'; ?>
<?php session_start(); ?>

<?php
    $_SESSION['uid'];
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
                            <li>
                                

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

    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Instruction start -->
            <div class="row">
                            <div class="col-sm-12">
                                <!-- Wells card start -->
                                <div class="card">
                                    <div class="card-block panels-wells">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <center><b><p> instruction how to attempt the test</p></b></center>
                                            </div>
                                        </div>
                                        <hr>
                                        <center><h3>Quiz Instructions</h3></center>
                                        <hr>
                                        <p><b>General Instructions : </b>
                                            Candidates must  follow instructions of the "Test Administrator/Invigilator". If any candidate  does not  obey instructions I rules, it would  be treated  as a case of misconduct  I adoption  of unfair  practice  and such candidate would be liable for punishment as per rules of the examination. 
                                        </p>
                                        <p>
                                            Candidates are  not  permitted to  bring mobile phones   into  the examination hall.
                                        </p>
                                        <p>
                                            Candidates are prohibited from  appearing  at the examination at the centre  other than the one opted by them  at the time  of applying for  examination, provided they   are  specifically permitted to do so. 
                                        </p>
                                        <p>
                                            Candidates are required  to be present  in the examination hall at  least  30 minutes before the  commencement of  the examination. Candidates  may  undergo  a sample  test  of  05 minutes  before actual examination starts. 
                                        </p>
                                        <hr>
                                        <p>
                                            <b>Time: </b>The duration of the examination is 2 hours. No extra time for whatsoever reason would be allowed to attempt question paper after the stipulated time of 2 hours is over. 
                                        </p>
                                        <hr>
                                        <p><b>Question paper : </b>The examination will consist of only Objective type (multiple choice) questions  requiring candidates  to  Mouse-click  their  correct  choice  of alternatives against the related  question number. 

                                        </p>
                                        <p>
                                            Questions  would carry 0.5 to 2 marks  each depending  on the difficulty level of the question. 
                                        </p>
                                        <p>
                                            In case candidate does not want to attempt  the question he I she should not mouse-click  any option. In case he I she has already  mouse clicked the option  and does not want to give the answer, he I she should click 'erase answer' against the related question.
                                        </p>
                                        <hr>
                                        <p><b>Please note that, for on-line  examination, only one question will  be displayed on  the  computer screen  at  a time. For moving  to the  next  question, click-on  "next  button" at the bottom  of the screen. </b></p>
                                        <?php
                                            $examid = $_GET['id'];
                                            $_SESSION['selected_test_id'] = $examid;
                                            $sql = "SELECT * FROM `test` WHERE id = $examid";
                                            $result = mysqli_query($conn,$sql);
                                            $row = mysqli_fetch_array($result);   
                                        ?>
                                    </div>
                                    <button class="btn btn-success btn-square btn-block">
                                        <a href="test.php?id=<?php echo $row['id'];?>">
                                            I want to take the test.        
                                        </a>
                                    </button>
                                </div>
                                <!-- Wells card end -->
                            </div>
                        </div>

            <!-- Instruction start -->
            
        </div>
    </div>
             


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


   
    <!-- Custom js -->
    <script type="text/javascript" src="assets/js/script.js"></script>
        <script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/demo-12.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/js/jquery.mousewheel.min.js"></script>

</body>

</html>
