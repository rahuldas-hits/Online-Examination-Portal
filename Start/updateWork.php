<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="cssFile/bootstrape" >
<script src="cssFile/jquery.js"></script>
<script src="cssFile/bootstrap.js"></script>
<script type="text/javascript" src="yoken.js"></script>



<?php
include('includes/config.php');
include('includes/header.php');

if(isset($_POST['submit']))
{
  $testimonoial=$_POST['UpdateWork'];
  $email=$_POST['email'];
  echo $sql="INSERT INTO  yokenUpdate (UserEmail,UpdateWork,Status) VALUES ('$email','$testimonoial','0')";
  if($conn->query($sql) === TRUE)
  {
  $msg="Testimonail submitted successfully";
  }
  else
  {
  $error="Something went wrong. Please try again";
  }

}
?>

 <!DOCTYPE HTML>
<html lang="en">
<head>

<body>
<div class="container">
<section class="user_profile inner_pages">
  <div class="container">
    <div class="row">
      <div class="profile_wrap">
        <h5 class="uppercase underline">Post a UpdateWork</h5>
        <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
          <div class="form-group">
            <textarea class="form-control white_bg" name="UpdateWork" rows="4" required=""></textarea>
          </div>
          <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Email Address" required>
          </div>
          <div class="form-group">
            <button type="submit" name="submit" class="btn">Save  <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
          </div>
        </form>
      </div>
  </div>
</section>
</div>

</body>
</html>
