<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="db_sports";
$db = mysqli_connect($servername, $username, $password, $database);
if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}

//if(isset($_GET['deleteid']))
//{
    $login_id=$_GET['id'];
    $sql="UPDATE tbl_coach_register SET status = 0 WHERE login_id=$login_id";
    $result=mysqli_query($db,$sql);
    $sql1="UPDATE tbl_coach_address SET status = 0 WHERE login_id=$login_id";
    $result1=mysqli_query($db,$sql1);
    $sql2="UPDATE tbl_login SET status = 0 WHERE login_id=$login_id";
    $result2=mysqli_query($db,$sql2);
    if($result){
        echo"<script Type='text/javascript'>alert('Delete Success')</script>";
        echo"<script>window.location.href='http://localhost/Admin/teach_view.php';</script>";
    }
//}
?>
