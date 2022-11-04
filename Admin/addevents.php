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
      $event_name = $_POST['event_name'];
      $event_coach = $_POST['event_coach'];
      $event_type = $_POST['event_type'];
      $event_students =  $_POST['event_students'];
      $event_image  = $_FILES['event_image']; 


      $image_name = $_FILES['event_image']['name'];
      // $imageTmpname = $_FILES['event_image']['tmp_name'];
      // $fileExt = explode('.', $image_name);
      // $fileActualExt = strtolower(end($fileExt));
      // $fileNameNew = uniqid('',true).".".$fileActualExt;
      // $fileDestination = 'Uploads/'.$fileNameNew;
      // move_uploaded_file($imageTmpname, $fileDestination);

      // $img=$_FILES["stu_image"]["name"];
	    move_uploaded_file($_FILES["event_image"]["tmp_name"],"Uploads/".$image_name);
      // header("Location: addevents.html?uploadsuccess");


      $event_query = "INSERT INTO tbl_event(event_name,event_coach,event_students,event_image,event_type,status) VALUES('$event_name','$event_coach','$event_students','$image_name','$event_type',1)";
      $event_queryresult = mysqli_query($db,$event_query);
      if($event_queryresult){
        echo"<script Type='text/javascript'>alert('Event is successfully added')</script>";
        echo"<script>window.location.href='http://localhost/Admin/addevents.html';</script>";
      }
      else {
        echo"<script Type='text/javascript'>alert('Event couldn't be added')</script>";
      } 
    
}

?>

<?php  if (count($errors) > 0) : ?>
   <div class="error" style="color:red">
     <?php foreach ($errors as $error) : ?>
       <p><?php echo"<script Type='text/javascript'>alert('$error')</script>"; ?></p>
     <?php endforeach ?>
   </div>
 <?php  endif ?>

 
