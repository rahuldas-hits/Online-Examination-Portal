<?php
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
        $sql = "SELECT userid FROM users WHERE username = '$username'";
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
        $sql="INSERT INTO  users(username,email,password) VALUES('$username','$email','$password')";
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
        $sql ="SELECT * FROM users WHERE email='$emailCheck' and Password='$passwordCheck'";
        if ($result = mysqli_query($conn,$sql)) {
            // Attempt to execute the number count
            $rowcount = mysqli_num_rows($result);
                if($rowcount > 0){
                    if($row = mysqli_fetch_assoc($result)){
                            /* Password is correct, so start a new session and
                            save the email to the session */
                            echo "hello you have successful login in";

                            $_SESSION['email'] = $row['email'];
                            header("location: http://localhost/Exam%20Portal/portal/index.php");
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
<div class="container">
<!-- Trigger the modal with a button -->
  <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#loginform"> Login </button> -->

  <!-- Modal -->
  <div class="modal fade" id="loginform" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="row">
                  <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-login">
                <div class="panel-heading modal-title">
                  <div class="row">
                    <div class="col-xs-6">
                      <a href="#" class="active" id="login-form-link">Login</a>
                    </div>
                    <div class="col-xs-6">
                      <a href="#" id="register-form-link">Register</a>
                    </div>
                  </div>
                  <hr>
                </div>


              <div class="modal-body">
                <div class="panel-body">
                  <div class="row">
                    <div class="col-lg-12">

                        <!-- Form body -->
                        <form id="login-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" role="form" style="display: block;">
                          <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                            <label for="exampleInputEmail1" >EMAIL : </label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="emailCheck" value="<?php echo $username; ?>">
                            <span class="help-block"><?php echo $username_err; ?>
                          </div>
                          <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                            <label for="exampleInputPassword1" >PASSWORD : </label>
                            <input type="password" name="passwordCheck" class="form-control" placeholder="password">
                             <span class="help-block"><?php echo $password_err; ?></span>
                          </div>

                          <center><button type="submit" name="login" class="btn btn-default">Submit</button></center>
                        </form>

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
                          <div class="form-group">
                            <div class="row">
                              <div class="col-sm-6 col-sm-offset-3">
                                <input type="submit" name="submit" id="register-submit" tabindex="4" class="form-control btn-default" value="Register Now">
                              </div>
                            </div>
                          </div>
                        </form>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
