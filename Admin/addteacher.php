<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="db_sports";
$db = mysqli_connect($servername, $username, $password, $database);
if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}

//initializing variables
$errors = array(); 
// REGISTER USER
if (isset($_POST['submit'])) {

    //   // receive all input values from the form
      $teach_name = $_POST['teach_name'];
      $teach_dob = $_POST['teach_dob'];
      // $stud_gender =  $_POST['stud_gender'];
      $email = $_POST['email'];
      $teach_password =  $_POST['teach_password'];
      $teach_housenm = $_POST['teach_housenm'];
      $teach_area = $_POST['teach_area'];
      $teach_city = $_POST['teach_city'];
      $teach_district = $_POST['teach_district'];
      $teach_state = $_POST['teach_state'];
      $teach_pin = $_POST['teach_pin'];
      $teach_phone = $_POST['teach_phone'];
      $teach_bloodgrp = $_POST['teach_bloodgrp'];
      $teach_father = $_POST['teach_qualification'];
      $teach_mother = $_POST['teach_marital'];
      $teach_item = $_POST['teach_item'];
      // $stud_image = $_POST['stud_image'];

      // $img=$_FILES["stud_image"]["name"];
      // move_uploaded_file($_FILES["stu_image"]["tmp_name"],"Uploads/".$img);
      
      
  // $user_check_query = "SELECT * FROM tbl_login WHERE email='$stud_email'";
  // $checkqueryresult = mysqli_query($db, $user_check_query);
  // $user = mysqli_fetch_assoc($checkqueryresult);
  // if ($user){ // if user exists
  //   if ($user['email'] == $stud_email) {
  //     array_push($errors, "Email already exists");
  //   }
    
  // }

  //Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $log_query = "INSERT INTO tbl_login(email,password,type,status)VALUES('$email','$teach_password',2,1)";
  	$logqueryresult = mysqli_query($db,$log_query);
    if($logqueryresult) {
      $idselectionquery = "SELECT login_id FROM tbl_login WHERE email='$email'";
      $idselectionqueryresult = mysqli_query($db, $idselectionquery);
      $user = mysqli_fetch_assoc($idselectionqueryresult);
      $login_id = $user['login_id'];
      $reg_query = "INSERT INTO tbl_coach_register(teach_name,teach_dob,teach_phone,teach_bloodgrp,teach_father,teach_mother,teach_item,teach_size,login_id,status) VALUES('$teach_name','$teach_dob','$teach_phone','$teach_bloodgrp','$teach_father','$teach_mother','$teach_item','$teach_size','$login_id',1)";
      $reg_queryresult = mysqli_query($db,$reg_query);
      if($reg_queryresult){
        echo"<script Type='text/javascript'>alert('Registration Success')</script>";
        echo"<script>window.location.href='http://localhost/Admin/addstudents.html';</script>";
      }
      else {
        echo"<script Type='text/javascript'>alert('Registration not Success')</script>";
      } 
    }
  }

  $add_query = "INSERT INTO tbl_coach_address(teach_housenm,teach_area,teach_city,teach_district,teach_pin,teach_state,status,login_id)VALUES('$teach_housenm','$teach_area','$teach_city','$teach_district','$teach_pin','$teach_state',1,'$login_id')";
  $addqueryresult = mysqli_query($db,$add_query);
  
}

?>

<?php  if (count($errors) > 0) : ?>
   <div class="error" style="color:red">
     <?php foreach ($errors as $error) : ?>
       <p><?php echo"<script Type='text/javascript'>alert('$error')</script>"; ?></p>
     <?php endforeach ?>
   </div>
 <?php  endif ?>

 
