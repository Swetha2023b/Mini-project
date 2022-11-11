<?php
include 'config.php'; 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if (isset($_POST['send_otp'])) {
    $Email = $_POST['Email'];
    $checkMail = "SELECT * FROM tbl_login WHERE Email='$Email'";
    $result = mysqli_query($con, $checkMail);
    $rsltCheck = mysqli_num_rows($result);
    // $fetch = mysqli_fetch_array($result);
    if ($rsltCheck > 0) {
        $_SESSION['Email'] = $Email;
        // $Email = $_SESSION['Email'];
        $code = rand(999999, 111111);
        echo $insert_otp = "UPDATE `tbl_login` SET `otp_code`='$code' WHERE `Email`='$Email'";
        $data_check = mysqli_query($con, $insert_otp);
        if ($data_check) {
           
            // }
            echo $Email;
            $mail = new PHPMailer(true);
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'swethaprakash2023b@mca.ajce.in';                     //SMTP username
            $mail->Password   = 'password';                               //SMTP password
            $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to conect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('swethaprakash2023b@mca.ajce.in', 'WIZARD SPORTS ACADEMY');
            $mail->addAddress($Email);     //Add a recipient
            //Content
            $mail->isHTML(true);                                  //Set Email format to HTML
            $mail->Subject = 'Forgot Password - OTP Verification';
            $mail->Body = "Need to reset your password? <br><br> Use your secret code! <br><br> <strong>$code</strong>";
            //$mail->AltBody = strip_tags($body);
            $mail->send();

            //$mail->send();
            if ($mail->send()) {
                echo '<script> alert ("OTP sent successfully");</script>';
                echo '<script>window.location.href="enter-otp.php";</script>';
            } else {
                exit;
                echo '<script> alert ("OTP sent failed");</script>';
                echo '<script>window.location.href="forgot.php";</script>';
            }
        }
    } else {
        exit;
        echo '<script> alert ("The user doesnot exist!");</script>';
        echo '<script>window.location.href="forgot.php";</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <title>Login</title>
    
</head>

<body>

    <!-- <div class="navbar">
        <a class="left" href="#"><img src="logo.png" alt="wizard" width="200" height="80"></a>
    </div> -->
    <h3><a href="login.html">BACK</a></h3>
    <div align ="center">
    <form action="" method="POST">
        <table>
            <tr>
                <td><label for="Email">Reset password</label></td>
            </tr>
            <tr>
                <td><input type="Email" name="Email" placeholder="Enter your Email here" required pattern="/^[\w\+\'\.-]+@[\w\'\.-]+\.[a-zA-Z]{2,}$/" title="Please enter a valid Email address"></td>
            </tr>
            <tr>
                <td><input type="submit" name="send_otp" value="Send OTP"></td>
            </tr>
        </table>
    </form>
    </div>
</body>

</html>
