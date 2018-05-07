<?php include_once 'includes/config.php'; ?>
<?php session_start(); ?>

<?php
    $cnt = "";
    if(isset($_POST['next'])) {
        $cnt = $_POST['counter'];
        $total_qsn = $_POST['totalqsn'];
        if ($cnt+2 < $total_qsn) {
            $cnt = $cnt + 1;    
        }else{
            echo "<script type='text/javascript'> alert('all question were done');  </script>";
        }
        
        $demotestid = $_POST['id'];
    }
    if (isset($_POST['previous'])) {
        $cnt = $_POST['counter'];
        $total_qsn = $_POST['totalqsn'];
        if ($cnt != 0) {
            $cnt = $cnt - 1;    
        }else{
            /*echo "Reach to 0 ";*/
        }
        $demotestid = $_POST['id'];   
    }
?>


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
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
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
                    </div>
                </div>
            </div>
        </nav>


        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <div class="">
                    <div class="pcoded-inner-content">

                    <?php
                        if($cnt == 0){
                            @$testid = $_GET['id'];
                            if($testid != NULL){
                            $sql = "SELECT * from test a INNER JOIN question b WHERE test_id = $testid AND a.id = b.test_id limit 1 OFFSET 0";
                            }else{
                                $sql = "SELECT * from test a INNER JOIN question b WHERE test_id = $demotestid AND a.id = b.test_id limit 1 OFFSET 0";
                            }
                            $res = mysqli_query($conn,$sql);
                            echo $rowcount = mysqli_num_rows($res);
                            $row = mysqli_fetch_array($res);
                            $demotestid = $row['test_id'];
                            $totalquestion = $row['total_question'];
                            $cnt = 0;
                        }else{ 
                            // SELECT * from test a INNER JOIN question b WHERE test_id = 4 AND a.id = b.test_id limit 1 OFFSET 4
                            $sql = "SELECT * from test a INNER JOIN question b WHERE test_id = $demotestid AND a.id = b.test_id limit 1 OFFSET $cnt";
                            /*echo $sql = "SELECT * FROM question WHERE test_id = $demotestid limit 1 OFFSET $cnt";*/
                            $res = mysqli_query($conn,$sql);
                            $row = mysqli_fetch_array($res);
                            $totalquestion = $row['total_question'];

                        }
                        
                    ?>
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                         <!-- Main-body start -->
                        <div class="main-body">
                            <div class="page-wrapper">
                                <!-- Page body start -->
                                <div class="page-body">

                                    <div class="row">
                                        <div class="col-sm-8">
                                            <!-- Question and option will display here -->
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>Total question</h5>
                                                </div>
                                                <div class="card-block">
                                                    <nav aria-label="Page navigation example">
                                                        <div class="col-sm-12 col-xl-9">
                                                            <h4 class="sub-title">Question <?php echo $cnt + 1; ?></h4>
                                                            <p class="lead m-t-0"><?php echo $row['question']; ?> </p>
                                                            <div class="radio">
                                                                <label><input type="radio" name="optradio"> <?php echo $row['opt1']; ?> </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label><input type="radio" name="optradio"><?php echo $row['opt2']; ?> </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label><input type="radio" name="optradio"><?php echo $row['opt3']; ?></label>
                                                            </div>
                                                            <div class="radio">
                                                                <label><input type="radio" name="optradio"><?php echo $row['opt4']; ?> </label>
                                                            </div>
                                                            <br>
                                                            <br>

                                                            <div class="form-group row">
                                                                <div class="col">
                                                                    <div class="btn-group" role="group" data-toggle="tooltip" data-placement="top" title="" data-original-title=".btn-md">

                                                                        <button type="submit" name="previous" class="btn btn-primary btn-sm waves-effect waves-light btn-skew">Previuos</button>
                                                                        <button type="submit" name="next" class="btn btn-primary btn-sm waves-effect waves-light btn-skew">Next</button>
                                                                        <!-- this are use to send the value to next for the calculation -->
                                                                        <input type="hidden" name="id" value="<?= @$demotestid ?>" />
                                                                        <input type="hidden" name="counter" value="<?= $cnt ?>" />
                                                                        <input type="hidden" name="totalqsn" value="<?= $totalquestion ?>" />
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="col">
                                                                    <div class="btn-group " role="group" data-toggle="tooltip" data-placement="top" title="" data-original-title=".btn-md">

                                                                        <button type="button" class="btn btn-primary btn-sm waves-effect waves-light btn-skew">Mark for feedback</button>
                                                                        <button type="button" class="btn btn-primary btn-sm waves-effect waves-light btn-skew">Mark for review</button>

                                                                    </div>
                                                                </div>
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
                                            <!-- Question and option will display here -->
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="col-sm-12">
                                            <!-- Pagination Alignment end card start -->
                                                <!-- <div class="card">
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
                                                            <button class="btn btn-info btn-round btn-sm">1</button>
                                                        </nav>
                                                    </div>    
                                                </div> -->
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
                                                            <button class="btn btn-info btn-round btn-sm">1</button>

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
                                                            <h5 class="lead m-t-0"><strong><?php echo $row['Test_name']." |";  
                                                            ?></strong></h5><hr>
                                                                <?php 

                                                                ?>
                                                                  <button class="btn btn-info btn-round btn-sm">1</button>
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
                    </form>
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
