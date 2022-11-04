<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="db_sports";
$db = mysqli_connect($servername, $username, $password, $database);
if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}
?>

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Wizard Sports Academy</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css2/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css2/style.css" rel='stylesheet' type='text/css' />
<link href="css2/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
     <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
      <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Wizard</a>
      </div>
      <!-- /.navbar-header -->
      <ul class="nav navbar-nav navbar-right">
  <!-- <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-comments-o"></i><span class="badge">4</span></a>
        <ul class="dropdown-menu">
      <li class="dropdown-menu-header">
        <strong>Messages</strong>
        <div class="progress thin">
          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
            <span class="sr-only">40% Complete (success)</span>
          </div>
        </div>
      </li>
      <li class="avatar">
        <a href="#">
          <img src="images/1.png" alt=""/>
          <div>New message</div>
          <small>1 minute ago</small>
          <span class="label label-info">NEW</span>
        </a>
      </li>
      <li class="avatar">
        <a href="#">
          <img src="images/2.png" alt=""/>
          <div>New message</div>
          <small>1 minute ago</small>
          <span class="label label-info">NEW</span>
        </a>
      </li>
      <li class="avatar">
        <a href="#">
          <img src="images/3.png" alt=""/>
          <div>New message</div>
          <small>1 minute ago</small>
        </a>
      </li>
      <li class="avatar">
        <a href="#">
          <img src="images/4.png" alt=""/>
          <div>New message</div>
          <small>1 minute ago</small>
        </a>
      </li>
      <li class="avatar">
        <a href="#">
          <img src="images/5.png" alt=""/>
          <div>New message</div>
          <small>1 minute ago</small>
        </a>
      </li>
      <li class="avatar">
        <a href="#">
          <img src="images/pic1.png" alt=""/>
          <div>New message</div>
          <small>1 minute ago</small>
        </a>
      </li>
      <li class="dropdown-menu-footer text-center">
        <a href="#">View all messages</a>
      </li>	
        </ul>
      </li> -->
    <li class="dropdown">
        <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="images2/1.png"><span class="badge"></span></a>
        <ul class="dropdown-menu">
      <!-- <li class="dropdown-menu-header text-center">
        <strong>Account</strong>
      </li>
      <li class="m_2"><a href="#"><i class="fa fa-bell-o"></i> Updates <span class="label label-info">42</span></a></li>
      <li class="m_2"><a href="#"><i class="fa fa-envelope-o"></i> Messages <span class="label label-success">42</span></a></li>
      <li class="m_2"><a href="#"><i class="fa fa-tasks"></i> Tasks <span class="label label-danger">42</span></a></li>
      <li><a href="#"><i class="fa fa-comments"></i> Comments <span class="label label-warning">42</span></a></li>
      <li class="dropdown-menu-header text-center">
        <strong>Settings</strong>
      </li> -->
      <li class="m_2"><a href="#"><i class="fa fa-user"></i> Profile</a></li>
      <li class="m_2"><a href="#"><i class="fa fa-wrench"></i> Change Password</a></li>
      <!-- <li class="m_2"><a href="#"><i class="fa fa-usd"></i> Payments <span class="label label-default">42</span></a></li>
      <li class="m_2"><a href="#"><i class="fa fa-file"></i> Projects <span class="label label-primary">42</span></a></li>
      <li class="divider"></li>
      <li class="m_2"><a href="#"><i class="fa fa-shield"></i> Lock Profile</a></li> -->
      <li class="m_2"><a href="#"><i class="fa fa-lock"></i> Logout</a></li>	
        </ul>
      </li>
</ul>
<!-- <form class="navbar-form navbar-right">
        <input type="text" class="form-control" value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
      </form> -->
      <div class="navbar-default sidebar" role="navigation">
          <div class="sidebar-nav navbar-collapse">
              <ul class="nav" id="side-menu">
                  <li>
                      <a href="index.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>
                  </li>

                  <!-- <li>
                      <a href="#"><i class="fa fa-laptop nav_icon"></i>Layouts<span class="fa arrow"></span></a>
                      <ul class="nav nav-second-level">
                          <li>
                              <a href="grids.html">Grid System</a>
                          </li>
                      </ul>
                  </li> -->

                  <li>
                      <a href="#"><i class="fa fa-indent nav_icon"></i>Teachers<span class="fa arrow"></span></a>
                      <ul class="nav nav-second-level">
                          <li>
                              <a href="teach_view.php">View Teacher</a>
                          </li>
                          <li>
                              <a href="addteacher.html">Add Teacher</a>
                          </li>
                      </ul>
                  </li>
                  <li>
                      <a href="#"><i class="fa fa-sitemap fa-fw nav_icon"></i>Students<span class="fa arrow"></span></a>
                      <ul class="nav nav-second-level">
                          <li>
                              <a href="stud_view.php">View Students</a>
                          </li>
                          <li>
                              <a href="addstudents.html">Add Students</a>
                          </li>
                      </ul>
                  </li>
                  
                  <li>
                      <a href="#"><i class="fa fa-check-square-o nav_icon"></i>Events<span class="fa arrow"></span></a>
                      <ul class="nav nav-second-level">
                          <li>
                              <a href="event_view.php">View Events</a>
                          </li>
                          <li>
                              <a href="addevents.html">Add events</a>
                          </li>
                      </ul>
                  </li>

      
                    <li>
                      <a href="complaints.html"><i class="fa fa-laptop nav_icon"></i>Complaints</a>
                  </li>

                    <li>
                      <a href="compose.html"><i class="fa fa-envelope nav_icon"></i>Mailbox</a>
                  </li>

                   <!-- <li>
                      <a href="#"><i class="fa fa-table nav_icon"></i>Tables<span class="fa arrow"></span></a> (fa fa-dashboard fa-fw nav_icon)
                      <ul class="nav nav-second-level">
                          <li>
                              <a href="basic_tables.html">Basic Tables</a>
                          </li>
                      </ul>
                  </li>
                  <li>
                      <a href="#"><i class="fa fa-sitemap fa-fw nav_icon"></i>Css<span class="fa arrow"></span></a>
                      <ul class="nav nav-second-level">
                          <li>
                              <a href="media.html">Media</a>
                          </li>
                          <li>
                              <a href="login.html">Login</a>
                          </li>
                      </ul>
                  </li> -->
              </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
        <div class="col-md-12 graphs">
	   <div class="xs">
  	    <h3>Add Students</h3>
  	    <div class="well1 white" id="addstudent">

		<?php
    if(isset($_GET["id"])){
		$login_id=$_GET['id'];
		
        
        	$selectemail=mysqli_query($db, "SELECT * FROM tbl_login WHERE login_id='$login_id'");
          $query=mysqli_query($db, "SELECT * from tbl_stud_register WHERE login_id='$login_id'");
        	$selectadd=mysqli_query($db, "SELECT stud_housenm, stud_area, stud_city, stud_district, stud_pin, stud_state FROM tbl_stud_address WHERE login_id='$login_id'");
          $row1 = mysqli_fetch_array($selectemail);
          $row2 = mysqli_fetch_array($selectadd);
          $row = mysqli_fetch_array($query);
    }?>
        <form class="form-floating ng-pristine ng-invalid ng-invalid-required ng-valid-email ng-valid-url ng-valid-pattern" action="" method="POST" name="addstudent" novalidate="novalidate" ng-submit="submit()">
          <fieldset>
            <div class="form-group">
              <label class="control-label">Name</label>
              <input type="text" name="stud_name" id="stud_name" class="form-control1 ng-invalid ng-invalid-required ng-touched" value="<?php echo $row['stud_name'];?>" ng-model="model.name" required="">
            </div>
            <div class="form-group">
              <label class="control-label">Email</label>
              <input type="email" name="email" id="email" class="form-control1 ng-invalid ng-valid-email ng-invalid-required ng-touched" value="<?php echo $row1['email'];?>" ng-model="model.email" required="">
            </div>
            <div class="form-group">
              <label class="control-label">Password</label>
              <input type="password" name="password" id="password" class="form-control1 ng-invalid ng-invalid-required ng-touched" value="<?php echo $row1['password'];?>" ng-model="model.password" required="">
            </div>
            <div class="form-group">
              <label class="control-label">Phone No</label>
              <input type="text" name="stud_phone" id="stud_phone" class="form-control1 ng-invalid ng-valid-url ng-invalid-required ng-touched" value="<?php echo $row['stud_phone'];?>" ng-model="model.url" required="">
            </div>
            <div class="form-group">
              <label class="control-label">Blood group</label>
              <input type="text" name="stud_bloodgrp" id="stud_bloodgrp" class="form-control1 ng-invalid ng-invalid-required ng-valid-pattern ng-touched" value="<?php echo $row['stud_bloodgrp'];?>" ng-model="model.number" ng-pattern="/[0-9]/" required="">
              
            </div>
            <div class="form-group">
              <label class="control-label normal">Date Of Birth</label>
              <input type="date" name="stud_dob" id="stud_dob" class="form-control1 ng-invalid ng-invalid-required" value="<?php echo $row['stud_dob'];?>" ng-model="model.date" required="">
            </div>
            <div class="form-group">
              <label class="control-label">House Name</label>
              <input type="text" name="stud_housenm" id="stud_housenm" class="form-control1 ng-invalid ng-invalid-required ng-touched" value="<?php echo $row2['stud_housenm'];?>" ng-model="model.name" required="">
            </div>
            <div class="form-group">
              <label class="control-label">Area</label>
              <input type="text" name="stud_area" id="stud_area" class="form-control1 ng-invalid ng-invalid-required ng-touched" value="<?php echo $row2['stud_area'];?>" ng-model="model.name" required="">
            </div>
            <div class="form-group">
              <label class="control-label">City</label>
              <input type="text" name="stud_city" id="stud_city" class="form-control1 ng-invalid ng-invalid-required ng-touched" value="<?php echo $row2['stud_city'];?>" ng-model="model.name" required="">
            </div>
            <div class="form-group">
              <label class="control-label">District</label>
              <input type="text" name="stud_district" id="stud_district" class="form-control1 ng-invalid ng-invalid-required ng-touched" value="<?php echo $row2['stud_district'];?>" ng-model="model.name" required="">
            </div>
            <div class="form-group">
              <label class="control-label">Pin</label>
              <input type="text" name="stud_pin" id="stud_pin" class="form-control1 ng-invalid ng-invalid-required ng-touched" value="<?php echo $row2['stud_pin'];?>" ng-model="model.name" required="">
            </div>
            <div class="form-group">
              <label class="control-label">State</label>
              <input type="text" name="stud_state" id="stud_state" class="form-control1 ng-invalid ng-invalid-required ng-touched" value="<?php echo $row2['stud_state'];?>" ng-model="model.name" required="">
            </div>
            <div class="form-group">
              <label class="control-label">Father's Name</label>
              <input type="text" name="stud_father" id="stud_father" class="form-control1 ng-invalid ng-invalid-required ng-touched" value="<?php echo $row['stud_father'];?>" ng-model="model.name" required="">
            </div>
            <div class="form-group">
              <label class="control-label">Mother's Name</label>
              <input type="text" name="stud_mother" id="stud_mother" class="form-control1 ng-invalid ng-invalid-required ng-touched" value="<?php echo $row['stud_mother'];?>"ng-model="model.name" required="">
            </div>
            <div class="form-group">
              <label class="control-label">Sports Item</label>
              <input type="text" name="stud_item" id="stud_item" class="form-control1 ng-invalid ng-invalid-required ng-touched" value="<?php echo $row['stud_item'];?>" ng-model="model.name" required="">
            </div>
            <div class="form-group">
                <label class="control-label">T-Shirt and Pants Size</label>
                <input type="text" name="stud_size" id="stud_size" class="form-control1 ng-invalid ng-invalid-required ng-touched" value="<?php echo $row['stud_size'];?>" ng-model="model.name" required="">
              </div>
            <div class="form-group">
              <button type="submit" name="submit" id="submit" value="submit" class="btn btn-primary">Update</button>
              <!-- <button type="reset" class="btn btn-default">Reset</button> -->
            </div>
          </fieldset>
        </form>
		
      </div>
    </div>
    <div class="copy_layout">
      <p>Copyright &copy; 2022 Wizard Sports Academy. All Rights Reserved. </p>
   </div>
   </div>
      </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
<!-- Nav CSS -->
<link href="css2/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>

<?php
if(isset($_POST["submit"]))
{
	$stud_name = $_POST['stud_name'];
      $stud_dob = $_POST['stud_dob'];
      // $stud_gender =  $_POST['stud_gender'];
      $email = $_POST['email'];
      $stud_password =  $_POST['password'];
      $stud_housenm = $_POST['stud_housenm'];
      $stud_area = $_POST['stud_area'];
      $stud_city = $_POST['stud_city'];
      $stud_district = $_POST['stud_district'];
      $stud_state = $_POST['stud_state'];
      $stud_pin = $_POST['stud_pin'];
      $stud_phone = $_POST['stud_phone'];
      $stud_bloodgrp = $_POST['stud_bloodgrp'];
      $stud_father = $_POST['stud_father'];
      $stud_mother = $_POST['stud_mother'];
      $stud_item = $_POST['stud_item'];
      $stud_size = $_POST['stud_size'];
     $sql=mysqli_query($db,"UPDATE tbl_stud_register SET stud_name='$stud_name',stud_dob='$stud_dob',stud_bloodgrp='$stud_bloodgrp',stud_father='$stud_father',stud_mother='$stud_mother',stud_item='$stud_item',stud_size='$stud_size' WHERE login_id='$login_id'");
     $sql1=mysqli_query($db,"UPDATE tbl_login SET password='$stud_password' ,email='$email' WHERE login_id='$login_id'");
     $sql2=mysqli_query($db,"UPDATE tbl_stud_address SET stud_housenm='$stud_housenm',stud_area='$stud_area',stud_district='$stud_district',stud_city='$stud_city',stud_pin='$stud_pin',stud_state='$stud_state' WHERE login_id='$login_id'");

     if($sql1 && $sql2 && $sql)
     {
       echo "<script>alert('Details Updated Successfully!!');window.location='stud_view.php';</script>";
     }
}
?>