<?php 
  require 'includes/config.php'; 
  // Start the session
  session_start();
?>

<?php 
  if (isset($_POST['update'])) {
    $questionid = $_POST['id'];
    $qsn = $_POST['question'];
    $opt1 = $_POST['option1'];
    $opt2 = $_POST['option2'];
    $opt3 = $_POST['option3'];
    $opt4 = $_POST['option4'];
    $correctopt = $_POST['correctanswer'];
           
    //sql query for entrying question
    $sql1 = "UPDATE `question` SET `question`='$qsn',`opt1`='$opt1',`opt2`='$opt2',`opt3`='$opt3',`opt4`='$opt4',`correct_answer`= $correctopt WHERE id = $questionid";
    
    if ($conn->query($sql1) == TRUE) {
    echo "    
           <div class='alert alert-success alert-dismissible'>
              <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
              <strong>Success!</strong> Question is submitted .
            </div>
        ";   
    }else{
          echo "
              <div class='alert alert-danger alert-dismissible'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <strong>Error!</strong> plese try again.
              </div>

            ";
            
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

    <script src="assets/js/chart-master/Chart.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.php" class="logo"><b>DASHGUM FREE</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.php#">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-theme">4</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 4 pending tasks</p>
                            </li>
                            <li>
                                <a href="index.php#">
                                    <div class="task-info">
                                        <div class="desc">DashGum Admin Panel</div>
                                        <div class="percent">40%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.php#">
                                    <div class="task-info">
                                        <div class="desc">Database Update</div>
                                        <div class="percent">60%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.php#">
                                    <div class="task-info">
                                        <div class="desc">Product Development</div>
                                        <div class="percent">80%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.php#">
                                    <div class="task-info">
                                        <div class="desc">Payments Sent</div>
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                            <span class="sr-only">70% Complete (Important)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="external">
                                <a href="#">See All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.php#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 5 new messages</p>
                            </li>
                            <li>
                                <a href="index.php#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-zac.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Zac Snider</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hi mate, how is everything?
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.php#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-divya.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Divya Manian</span>
                                    <span class="time">40 mins.</span>
                                    </span>
                                    <span class="message">
                                     Hi, I need your help with this.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.php#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-danro.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Dan Rogers</span>
                                    <span class="time">2 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Love your new Dashboard.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.php#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-sherman.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Dj Sherman</span>
                                    <span class="time">4 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Please, answer asap.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.php#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="login.php">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.php"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">Marcel Newman</h5>
              	  	
                  <li class="mt">
                      <a href="index.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a class="active" href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Quiz</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="addCategory.php">add Category</a></li>
                          <li><a  href="addSubCategory.php">add Sub-category</a></li>
                          <li><a  href="addTest.php">add Test</a></li>
                          <li class="active"><a  href="addQuestion.php">Add Questions</a></li>
                          <li><a  href="removequiz.php">removequiz</a></li>
                      </ul>
                  </li>

                  <!-- <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Components</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="calendar.php">Calendar</a></li>
                          <li><a  href="gallery.php">Gallery</a></li>
                          <li><a  href="todo_list.php">Todo List</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Extra Pages</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="blank.php">Blank Page</a></li>
                          <li><a  href="login.php">Login</a></li>
                          <li><a  href="lock_screen.php">Lock Screen</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Forms</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="form_component.php">Form Components</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Data Tables</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="basic_table.php">Basic Table</a></li>
                          <li><a  href="responsive_table.php">Responsive Table</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Charts</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="morris.php">Morris</a></li>
                          <li><a  href="chartjs.php">Chartjs</a></li>
                      </ul>
                  </li>
 -->
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Quiz</h3>
            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i> Add Questions <?php echo $_SESSION['capnum'] ?> </h4>
                      <form class="form-horizontal style-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                          <div class="form-group">
                              <div class="col-sm-10">
                                  <!-- <input class="form-control" id="focusedInput" type="selects" placeholder="Select Quiz title"> -->
                                  <?php 
                                      @$questionid = $_GET['id'];
                                      $sql = "SELECT category_id FROM `question` WHERE id = $questionid";
                                      @$res = mysqli_query($conn,$sql);        
                                      @$row = mysqli_fetch_array($res); 
                                      @$catid = $row['category_id'];
                                      @$sql = "SELECT * FROM `category` WHERE id = $catid";
                                      @$res = mysqli_query($conn,$sql);        
                                      @$row = mysqli_fetch_array($res); 
                                   ?>   
                                  <select name="category" class="form-control" id="focusedInput">
                                    <option value="<?php echo $row['id'] ?>"><?php echo $row['category'] ?></option>
                                  </select>
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="col-sm-10">
                                  <!-- <input class="form-control" id="focusedInput" type="selects" placeholder="Select Quiz title"> -->
                                  <?php 
                                      @$questionid = $_GET['id'];
                                      @$sql = "SELECT sub_category_id FROM `question` WHERE id = $questionid";
                                      @$res = mysqli_query($conn,$sql);        
                                      @$row = mysqli_fetch_array($res); 
                                      @$catid = $row['sub_category_id'];
                                      @$sql = "SELECT * FROM `sub_category` WHERE id = $catid";
                                      @$res = mysqli_query($conn,$sql);        
                                      @$row = mysqli_fetch_array($res); 
                                   ?>   
                                    <select name="subCategory" class="form-control" id="focusedInput">
                                    <option value="<?php echo $row['id'] ?>"><?php echo $row['sub_category_name'] ?></option>
                                  </select>
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="col-sm-10">
                                  <!-- <input class="form-control" id="focusedInput" type="selects" placeholder="Select Quiz title"> -->
                                  <?php 
                                      @$questionid = $_GET['id'];
                                      @$sql = "SELECT test_id FROM `question` WHERE id = $questionid";
                                      @$res = mysqli_query($conn,$sql);        
                                      @$row = mysqli_fetch_array($res); 
                                      @$catid = $row['test_id'];
                                      @$sql = "SELECT * FROM `test` WHERE id = $catid";
                                      @$res = mysqli_query($conn,$sql);        
                                      @$row = mysqli_fetch_array($res); 
                                  ?>
                                  <select name="testname" class="form-control" id="focusedInput">
                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['Test_name'] ?></option>
                                  </select>
                              </div>
                          </div>
                          <?php  
                              @$questionid = $_GET['id'];
                              @$sql = "SELECT * FROM `question` WHERE id = $questionid";
                              @$res = mysqli_query($conn,$sql);        
                              @$row = mysqli_fetch_array($res); 
                          ?>

                          <div class="form-group">
                              <div class="col-sm-10">
                                  <input class="form-control" name="question" value="<?php echo $row['question']; ?>" id="focusedInput" type="text" placeholder="Enter Question>" >
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="col-sm-10">
                                  <input class="form-control" value="<?php echo $row['opt1']; ?>" name="option1" id="focusedInput" type="text" placeholder="Enter 1st option">
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="col-sm-10">
                                  <input class="form-control" value="<?php echo $row['opt2']; ?>" name="option2" id="focusedInput" type="text" placeholder="Enter 2nd option">
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="col-sm-10">
                                  <input class="form-control" value="<?php echo $row['opt3']; ?>" name="option3" id="focusedInput" type="text" placeholder="Enter 3rd option">
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="col-sm-10">
                                  <input class="form-control" value="<?php echo $row['opt4']; ?>" name="option4" id="focusedInput" type="text" placeholder="Enter 4th option">
                              </div>
                          </div>
                          <h3><label>Select Correct Option</label><br><br></h3>
                          <div class="form-group">
                              <div class="col-sm-10">
                                  <select name="correctanswer" class="form-control" id="focusedInput">
                                    <option ><?php echo $row['correct_answer']; ?></option>
                                    <option value="1">Select option 1</option>
                                    <option value="2">Select option 2</option>
                                    <option value="3">Select option 3</option>
                                    <option value="4">Select option 4</option>
                                  </select>
                              </div>
                          </div>
                          <center><button type="submit" name="update" value="<?php $row['id']; ?>" class="btn btn-theme btn-primary btn-lg btn-block">Update </button></center>
                          <input type="hidden" name="id" value="<?= $questionid ?>" />
                      </form>
                  </div>
              </div><!-- col-lg-12-->       
            </div><!-- /row -->
			
		      </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
     <?php include 'includes/footer.php'; ?>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>

    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>    
    
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
