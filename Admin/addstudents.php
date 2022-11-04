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
      $stud_name = $_POST['stud_name'];
      $stud_dob = $_POST['stud_dob'];
      // $stud_gender =  $_POST['stud_gender'];
      $email = $_POST['email'];
      $stud_password =  $_POST['stud_password'];
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
    $log_query = "INSERT INTO tbl_login(email,password,type,status)VALUES('$email','$stud_password',2,1)";
  	$logqueryresult = mysqli_query($db,$log_query);
    if($logqueryresult) {
      $idselectionquery = "SELECT login_id FROM tbl_login WHERE email='$email'";
      $idselectionqueryresult = mysqli_query($db, $idselectionquery);
      $user = mysqli_fetch_assoc($idselectionqueryresult);
      $login_id = $user['login_id'];
      $reg_query = "INSERT INTO tbl_stud_register(stud_name,stud_dob,stud_phone,stud_bloodgrp,stud_father,stud_mother,stud_item,stud_size,login_id,status) VALUES('$stud_name','$stud_dob','$stud_phone','$stud_bloodgrp','$stud_father','$stud_mother','$stud_item','$stud_size','$login_id',1)";
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

  $add_query = "INSERT INTO tbl_stud_address(stud_housenm,stud_area,stud_city,stud_district,stud_pin,stud_state,status,login_id)VALUES('$stud_housenm','$stud_area','$stud_city','$stud_district','$stud_pin','$stud_state',1,'$login_id')";
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

 
