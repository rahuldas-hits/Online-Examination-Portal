<?php

include 'includes/config.php';


###############################    signup start  ####################################################
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

  if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirmpassword = $_POST['confirm_password'];

    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT userid FROM adminusers WHERE username = '$username'";
        $res = mysqli_query($conn,$sql);
        $rowcount=mysqli_num_rows($res);
        if($rowcount > 0){
          $username_err = "This username is already taken.";
        } else
        {
            $username = trim($_POST["username"]);
        }
    }

    // Validate password
   if(empty(trim($_POST['password']))){
       echo $password_err = "Please enter a password.";
   } elseif(strlen(trim($_POST['password'])) < 6){
      echo $password_err = "Password must have atleast 6 characters.";
   } else{
       $password = trim($_POST['password']);
   }

   // Validate confirm password
   if(empty(trim($_POST["confirm_password"]))){
       $confirm_password_err = 'Please confirm password.';
   } else{
       $confirm_password = trim($_POST['confirm_password']);
       if($password != $confirm_password){
           $confirm_password_err = 'Password did not match.';
       }
   }

   // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        // Prepare an insert query
        $sql="INSERT INTO  adminusers(username,email,password) VALUES('$username','$email','$password')";
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Registration successfull. Now you can login');</script>";
        } else {
            echo "<script>alert('Something went wrong. Please try again');</script>";
        }
  }
}

###########################################           signupp end      ######################################


################################ login ########################################

if (isset($_POST['login'])) {
    // Define variables and initialize with empty values
    $email = $password = "";
    $email_err = $password_err = "";

    $emailCheck=$_POST['emailCheck'];
    $passwordCheck=$_POST['passwordCheck'];
    $_SESSION['email'] = $emailCheck;
    // Check if email is empty
    if(empty(trim($_POST["emailCheck"]))){
        $email_err = 'Please enter email.';
    } else{
        $email = trim($_POST["emailCheck"]);
    }

    // Check if password is empty
    if(empty(trim($_POST['passwordCheck']))){
        $password_err = 'Please enter your password.';
    } else{
        $password = trim($_POST['passwordCheck']);
    }

    // Validate credentials
    if(empty($email_err) && empty($password_err)){
        // Prepare a select statement
        echo $sql ="SELECT * FROM adminusers WHERE email='$emailCheck' and Password='$passwordCheck'";
        if ($result = mysqli_query($conn,$sql)) {
            // Attempt to execute the number count
            $rowcount = mysqli_num_rows($result);
                if($rowcount > 0){
                    if($row = mysqli_fetch_assoc($result)){
                            /* Password is correct, so start a new session and
                            save the email to the session */
                            echo "hello you have successful login in";

                            $_SESSION['email'] = $row['email'];
                            header("location: http://localhost/Exam%20Portal/admin/index.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = 'The password you entered was not valid.';
                        }
                } else{
                    // Display an error message if email doesn't exist
                    $email_err = 'No account found with that email.';
                }
            }
        }
  }
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>DASHGUM - Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page login-form">
	  	<div class="container">
	  	
		      <form class="form-login" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" role="form" 
      style="display: block;">
		        <h2 class="form-login-heading">sign in now</h2>
		        <div class="login-wrap">
                <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
  		            <input type="text" class="form-control" id="exampleInputEmail1" name="emailCheck" value="<?php echo $username; ?>" placeholder="Email ID" autofocus>
                  <span class="help-block"><?php echo $username_err; ?>
                </div>
		            <br>
                <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
  		            <input type="password" class="form-control" placeholder="Password" name="passwordCheck">
                  <span class="help-block"><?php echo $password_err; ?></span>
                </div>
  		            <label class="checkbox">
		                <span class="pull-right">
		                    <a data-toggle="modal" href="login.php#myModal"> Forgot Password?</a>
		
		                </span>
		            </label>
<!-- 		            <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> SIGN IN</button> -->
                <button type="submit" name="login" class="btn btn-theme btn-block"><i class="fa fa-lock"></i>Submit</button>
		            <hr>
		            
		            <div class="login-social-link centered">
		            <p>or you can sign in via your social network</p>
		                <button class="btn btn-facebook" type="submit"><i class="fa fa-facebook"></i> Facebook</button>
		                <button class="btn btn-twitter" type="submit"><i class="fa fa-twitter"></i> Twitter</button>
		            </div>
		            <div class="registration">
		                Don't have an account yet?<br/>
		                <a data-toggle="modal" href="login.php#myModalSignUp">
		                    Create an account
		                </a>
		            </div>
		
		        </div>
		
		          <!-- Modal -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">Forgot Password ?</h4>
		                      </div>
		                      <div class="modal-body">
		                          <p>Enter your e-mail address below to reset your password.</p>
		                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
		
		                      </div>
		                      <div class="modal-footer">
		                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
		                          <button class="btn btn-theme" type="button">Submit</button>
		                      </div>
		                  </div>
		              </div>
		          </div>
		          <!-- modal -->

               <!-- Sign up Modal -->
              <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModalSignUp" class="modal fade">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title">Sign Up</h4>
                          </div>
                          <div class="modal-body">
                               <!-- form for register -->
                            <form id="register-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" role="form" style="display: none;">
                               <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                                  <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="<?php echo $username; ?>">
                                  <span class="help-block"><?php echo $username_err; ?></span>
                                </div>
                              <div class="form-group" >
                                <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                              </div>
                              <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                                <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" value="<?php echo $password; ?>">
                                <span class="help-block"><?php echo $password_err; ?></span>
                              </div>
                              <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>" >
                                <input type="password" name="confirm_password" id="confirm_password" tabindex="2" class="form-control" placeholder="Confirm Password" value="<?php echo $confirm_password; ?>">
                                <span class="help-block"><?php echo $confirm_password_err; ?>
                              </div>
                              <div class="form-group modal-footer">
                                <div class="row">
                                  <div class="col-sm-6 col-sm-offset-3">
                                    <input type="submit" name="submit" id="register-submit" tabindex="4" class="btn btn-theme" value="Register Now">
                                    <button class="btn btn-theme" type="button">Submit</button>
                                  </div>
                                </div>
                              </div>
                            </form>
                            <!-- form for register -->  
		      </form>	  	

         

                          </div>
                          <!-- <div class="modal-footer">
                              <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                              <button class="btn btn-theme" type="button">Submit</button>
                          </div> -->
                      </div>
                  </div>
              </div>
              <!--sign up  modal -->
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("assets/img/login-bg.jpg", {speed: 500});
    </script>


  </body>
</html>
