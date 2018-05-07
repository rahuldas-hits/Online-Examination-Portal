<?php include_once 'includes/config.php'; ?>

<?php
    $cnt = "";
    if(isset($_POST['nextOptions'])) {
        $cnt = $_POST['counter'];
        $total_qsn = $_POST['totalqsn'];
        if ($cnt+2 < $total_qsn) {
            $cnt = $cnt + 1;    
        }else{
            echo "<script type='text/javascript'> alert('all question were done');  </script>";
        }
        
        $demotestid = $_POST['id'];
    }
    if (isset($_POST['previousOptions'])) {
        $cnt = $_POST['counter'];
        $total_qsn = $_POST['totalqsn'];
        if ($cnt != 0) {
            $cnt = $cnt - 1;    
        }else{
            echo "Reach to 0 ";
        }
        $demotestid = $_POST['id'];   
    }
?>

<meta charset="utf-8" />
<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

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
	
<div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
        Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
        Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
    -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    Logo
                </a>
            </div>

            <ul class="nav">
                <li >
                    <a href="dashboard.php">
                        <p class="simple-text">Missed Question</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <p>Marked for review</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <p>Subject name</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <p>Your feed is importamnt to us</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

	<!-- side nav bar -->

    <div class="main-panel">
		<!-- top nav bar -->
		<?php include 'includes/topBarForTest.php'; ?>
		<!-- top nav bar -->

    <!-- Here question is displaying by merging two table and apply join function
    and is respective option is display also
    -->
        <?php
            if($cnt == 0){
    			@$testid = $_GET['id'];
                if($testid != NULL){
                $sql = "SELECT * from test a INNER JOIN question b WHERE test_id = $testid AND a.id = b.test_id limit 1 OFFSET 0";
                }else{
                    echo $sql = "SELECT * from test a INNER JOIN question b WHERE test_id = $demotestid AND a.id = b.test_id limit 1 OFFSET 0";
                }
                $res = mysqli_query($conn,$sql);
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

        <div class="content">
					<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Question</h4>
                                <!-- <p class="category">Created using <a href="https://www.google.com/fonts/specimen/Muli">Muli</a> Font Family</p> -->
                            </div>
							<div class="content">
								<div class="typo-line">
									<p class="text-primary category">Question : 1.</p>
									<blockquote>
											<p class="text-warning">
												<?php echo $row['question']; ?>
												<div class="radio">
													<label><input type="radio" name="optradio"><?php echo $row['opt1']; ?></label>
												</div>
                                                <div class="radio">
                                                    <label><input type="radio" name="optradio"><?php echo $row['opt2']; ?></label>
                                                </div>
                                                <div class="radio">
                                                    <label><input type="radio" name="optradio"><?php echo $row['opt3']; ?></label>
                                                </div>
                                                <div class="radio">
                                                    <label><input type="radio" name="optradio"><?php echo $row['opt4']; ?></label>
                                                </div>
											</p>
                                            <input type="submit" class="btn btn-default" name="previousOptions" value="Prevoius">
                                            <input type="submit" class="btn btn-default" name="nextOptions" value="Next">
                                            <input type="hidden" name="id" value="<?= @$demotestid ?>" />
                                            <input type="hidden" name="counter" value="<?= $cnt ?>" />
                                            <input type="hidden" name="totalqsn" value="<?= $totalquestion ?>" />
									</blockquote>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

				</form>

				<!-- footer -->
	      <?php include 'includes/footer.php'; ?>
				<!-- footer -->

        <?php //endwhile; ?>

<!-- Here question is displaying by merging two table and apply join function
and is respective option is display also
-->
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
