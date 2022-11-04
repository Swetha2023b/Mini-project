<?php
session_start();
?> 

<!DOCTYPE html>
<html lang="en">
  
<head>
    

    <title>Wizard Sports Academy</title>


</head>
<body>
  <p><a href="index.php">HOME</a></p>
<form method="POST" name="password">
  
  <div>
    <center>
      <h2>Change Password</h2>
    </center>
    
    <div>
      <center>
    <table style="margin-top: 5%;">
      <tr>
        <div class="row">
        <div class="col-md-6">
          <td><label for="psw"><b>Current Password</b></label></td>
          
          <td><div class="password-container">
            <input style ="width: 500px;" type="password" placeholder="Enter Current Password" id="currPassword" name="currPassword" required>
         <i class="fa fa-eye" id="togglePasswordOld"></i>
       </div>
      </td>
        </div> 
      </tr>

      <tr>
        <div class="col-md-6">
           <td><label for="psw"><b>New Password</b></label></td>
           <td>
            <div class="password-container">
              <input style ="width: 500px;" type="password" placeholder="Enter New Password" id="newPassword" name="newPassword" required>
              <i class="fa fa-eye" id="togglePasswordNew"></i>
            </div>
          </td>
        </div>
      </tr>     
    </div>

    <tr>
      <td>
        <div class="col-md-6">
           <label for="psw"><b>Confirm Password</b></label>
           <label style="display: none;" name="cPassword" id="cPassword"></label>
           <td>
            <div class="password-container">
            <input style ="width: 500px;" type="password" placeholder="Confirm New Password" id="confPassword" name="confPassword" required>
            <i class="fa fa-eye" id="togglePasswordNewConfirm"></i>
          </div>
          </td>
        </div>
      </td>
    </tr>
    </table>
</center>
</div>

  <button type="submit" class="Submitbutton" name="changepwd" style="margin-left: 40%; width: 15%";>Update</button>
  </div>
</form>
  </body>
</html>


<?php
$errors = array(); 
$db = mysqli_connect('localhost','root','','db_sports');

        $password = $_POST['currPassword'];
        $newpassword = $_POST['newPassword'];
        $confirmnewpassword = $_POST['confPassword'];
        $result = mysqli_query($db,"SELECT password FROM tbl_login WHERE email='admin123@gmail.com'");
        if(!$result)
        {
        echo "The username you entered does not exist";
        }
        else if($password!= mysql_result($result, 0))
        {
        echo "You entered an incorrect password";
        }
        elseif($newpassword==$confirmnewpassword)
        $sql=mysqli_query($db,"UPDATE tbl_login SET password='$newpassword' where email='admin123@gmail.com'");
        else{
          echo "Error changing password";
        }

        if($sql)
        {
        echo "Congratulations You have successfully changed your password";
        }
       else
        {
       echo "Passwords do not match";
       }
      ?>