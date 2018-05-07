<?php require_once 'includes/config.php'; ?>

<?php
    session_start();
?>
<?php 

################################ login ########################################

if (isset($_POST['login'])) {
    
    //getting the values from form   
    $emailCheck = $_POST['email'];
    $passwordCheck = $_POST['password'];

    //$_SESSION["email"] = $emailCheck;

    //SQL query for login check for database
    $sql = "SELECT * FROM `users` WHERE `email` = '$emailCheck' AND `password` = '$passwordCheck' ";

    if ($result = mysqli_query($conn,$sql)) {
        // Attempt to execute the number count
        $rowcount = mysqli_num_rows($result);
        if($rowcount > 0){
            if($row = mysqli_fetch_assoc($result)){
                    /* Password is correct, so start a new session and
                    save the email to the session */
                    $uid =$row['userid'];
                    $_SESSION['uid'] = $uid;
                    header("location: index.php");
                } else{
                    // Display an error message if password is not valid
                    echo '
                        <div class="alert alert-danger alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.
                        </div>
                    ' ;                
                }
        } else{
            echo '

                <div class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.
                </div>

            ';
        }
    }    


}
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
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">


</head>

<body class="fix-menu">
    <section class="login p-fixed d-flex text-center bg-primary common-img-bg">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    <div class="login-card card-block auth-body">
                        <form class="md-float-material" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            <div class="text-center">
                                <img src="assets/images/.png" alt="logo.png">
                            </div>
                            <div class="auth-box">
                                <div class="row m-b-20">
                                    <div class="col-md-3">
                                        <h3 class="text-center txt-primary">Sign In</h3>
                                    </div>
                                    <div class="col-md-9">
                                        <p class="text-inverse m-t-25 text-left">Don't have an account? <a href="http://localhost/mashable-lite/auth-sign-up-social.php"> Register </a> here for free!</p>
                                    </div>
                                </div>
                                <p class="text-inverse b-b-default text-left p-b-5">Sign in easily with your social account:</p>
                                <div class="row m-b-20">
                                    <div class="col-md-6">
                                        <button class="btn btn-facebook m-b-20"><i class="icofont icofont-social-facebook"></i>Sign in with facebook</button>
                                    </div>
                                    <div class="col-md-6">
                                        <button class="btn btn-twitter m-b-20"><i class="icofont icofont-social-twitter"></i>Sign in with twitter</button>
                                    </div>
                                </div>
                                <p class="text-inverse b-b-default text-left p-b-5">Sign in with your regular account</p>
                                <div class="input-group">
                                    <span class="input-group-addon" id="email"><i class="icofont icofont-ui-email"></i></span>
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                    <span class="md-line"></span>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon" id="email"><i class="icofont icofont-ui-password"></i></span>
                                    <input type="password" name="password" class="form-control" placeholder="password" required>
                                    <span id="display_error" class="md-line"></span>
                                </div>
                                <div class="row m-t-25 text-left">
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label>
                                                <input type="checkbox" value="">
                                                <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <span class="text-inverse">Remember me</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xs-12 forgot-phone text-right">
                                        <a href="auth-reset-password.php" class="text-right f-w-600 text-inverse"> Forget Password?</a>
                                    </div>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button name="login" type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">LOGIN</button>
                                    </div>
                                </div>
                                <!-- <div class="card-footer"> -->
                                <!-- <div class="col-sm-12 col-xs-12 text-center">
                                    <span class="text-muted">Don't have an account?</span>
                                    <a href="register2.html" class="f-w-600 p-l-5">Sign up Now</a>
                                </div> -->
                                <!-- </div> -->
                            </div>
                        </form>
                        <!-- end of form -->
                    </div>
                    <!-- Authentication card end -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
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
    <!---- color js --->
    <script type="text/javascript" src="assets/js/common-pages.js"></script>
</body>

</html>
