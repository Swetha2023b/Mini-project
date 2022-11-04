<?php
//database connectivity
session_start();
$db = mysqli_connect("localhost","root","","db_sports");

//connecting html form and php
if(isset($_POST['submit'])){
	$log_email = $_POST['email'];
	$log_password = $_POST['password'];
	// $pwd = md5($password);//encyrpting password

//fetching data from database
$query = "select * from tbl_login where email = '$log_email'";
$result = mysqli_query($db,$query);

//fetching username and password from query as object
$row = mysqli_fetch_assoc($result);

//checking password in database
if($row['password']==$log_password && $row['status']==1){
	$_SESSION['username']="Admin";
	$_SESSION['id']=$row['login_id'];
	$_SESSION['email']=$row['email'];
	 echo"<script Type='text/javascript'>alert('Login Success')</script>";
	 echo"<script>window.location.href='http://localhost/Admin/index.php'</script>";
}
elseif($row['password']==$log_password && $row['status']==2){
	echo"<script Type='text/javascript'>alert('Login Success')</script>";
	echo"<script>window.location.href='http://localhost/Student/stu_index.php'</script>";
}
else{
	 echo"<script Type='text/javascript'>alert('Oops!...Login Failed')</script>";
	 echo"<script>window.location.href='http://localhost/login.html</script>";
}
}

?>