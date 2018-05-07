<?php include_once 'includes/config.php'; ?>
<?php
  if (isset($_POST['passValue'])) {

  }

 ?>


<meta charset="utf-8" />
<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<title>Paper Dashboard by Creative Tim</title>

<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
<meta name="viewport" content="width=device-width" />


<!-- Bootstrap core CSS     -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet" />

<!-- Animation library for notifications   -->
<link href="assets/css/animate.min.css" rel="stylesheet"/>

<!--  Paper Dashboard core CSS    -->
<link href="assets/css/paper-dashboard.css" rel="stylesheet"/>

<!--  CSS for Demo Purpose, don't include it in your project     -->
<link href="assets/css/demo.css" rel="stylesheet" />

<!--  Fonts and icons     -->
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
<link href="assets/css/themify-icons.css" rel="stylesheet">


<div class="wrapper">
	<!-- side nav bar -->
	<?php include 'includes/sideBar.php'; ?>
	<!-- side nav bar -->

    <div class="main-panel">
			<!-- top nav bar -->
			<?php include 'includes/top.php'; ?>
			<!-- top nav bar -->


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Question Table</h4>
                                <p class="category">Here is a exam name</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Exam Name</th>
                                    	<th>Total Question</th>
                                    	<th>Positive Marks</th>
                                    	<th>Negative Marks</th>
                                      <th>Start Test</th>
                                    </thead>
                                    <?php
                                    $sql = "SELECT * FROM `test`";
                                    @$res = mysqli_query($conn,$sql);
                                    while ($row = mysqli_fetch_array($res)):;
                                    ?>
                                    <form method="post" action="#">
                                    <tbody>
                                        <tr>
                                        	<td><?php echo $row['id']; ?></td>
                                        	<td><?php echo $row['Test_name']; ?></td>
                                        	<td><?php echo $row['total_question']; ?></td>
                                        	<td><?php echo $row['positive_marks']; ?></td>
                                        	<td><?php echo $row['negative_marks']; ?></td>
                                          <td><a href="test.php?id=<?php echo $row['id'];?>" type="submit" name="passValue" value="<?php echo $row[1]; ?>" >Start Test</a>
                                          </td>
                                        </tr>
                                      <?php endwhile; ?>
                                    </tbody>
                                  </form>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

				<!-- footer -->
	      <?php include 'includes/footer.php'; ?>
				<!-- footer -->


    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>


</html>
