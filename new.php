<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Wizard Sports Academy</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Yoga Lite Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }



function studnameValidate(){
    var studname = document.getElementById("stud_name").value;
    var pattern =  /^[a-zA-Z]+$/;
    isValid=true;
    if(studname.match(pattern)){
    document.getElementById("studnameValidate").innerHTML="";
    }
    else if(!stud_name){
    document.getElementById("studnameValidate").innerHTML="Name Required";
    isValid=false;
    }
    else{
    document.getElementById("studnameValidate").innerHTML="Only characters are acceptable";
    isValid=false;
    }
    return isValid;
    }

    function housenameValidate(){
    var housename = document.getElementById("stud_housenm").value;
    var pattern =  /^[a-zA-Z]+$/;
    isValid=true;
    if(housename.match(pattern)){
    document.getElementById("studaddressValidate").innerHTML="";
    }
    else if(!housename){
    document.getElementById("studaddressValidate").innerHTML="Address Required";
    isValid=false;
    }
    else{
    document.getElementById("studaddressValidate").innerHTML="Only characters are acceptable";
    isValid=false;
    }
    return isValid;
    }

    function areaValidate(){
    var area = document.getElementById("stud_area").value;
    var pattern =  /^[a-zA-Z]+$/;
    isValid=true;
    if(street.match(pattern)){
    document.getElementById("studareaValidate").innerHTML="";
    }
    else if(!street){
    document.getElementById("studareaValidate").innerHTML="Area Required";
    isValid=false;
    }
    else{
    document.getElementById("studareaValidate").innerHTML="Only characters are acceptable";
    isValid=false;
    }
    return isValid;
    }

    function cityValidate(){
    var city = document.getElementById("stud_city").value;
    var pattern =  /^[a-zA-Z]+$/;
    isValid=true;
    if(city.match(pattern)){
    document.getElementById("studcityValidate").innerHTML="";
    }
    else if(!city){
    document.getElementById("studcityValidate").innerHTML="City Required";
    isValid=false;
    }
    else{
    document.getElementById("studcityValidate").innerHTML="Only characters are acceptable";
    isValid=false;
    }
    return isValid;
    }

    function stateValidate(){
    var state = document.getElementById("stud_state").value;
    var pattern =  /^[a-zA-Z]+$/;
    isValid=true;
    if(state.match(pattern)){
    document.getElementById("studstatevalidate").innerHTML="";
    }
    else if(!state){
    document.getElementById("studstatevalidate").innerHTML="State Required";
    isValid=false;
    }
    else{
    document.getElementById("studstatevalidate").innerHTML="Only characters are acceptable";
    isValid=false;
    }
    return isValid;
    }

    function validatepwd(){
    var log_password  = document.getElementById("password").value;
    var pattern=/^(?=.*\d)(?=.*[A-Z]).{6,}/;
    isValid=true;
    if(log_password.match(pattern)){
    document.getElementById("validatepwd").innerHTML="";  
    }
    else if(!log_password){
    document.getElementById("validatepwd").innerHTML="Password Required";
    isValid=false;
    }
    else{
    document.getElementById("validatepwd").innerHTML="Your password must be at least 8 characters long, contain at least one number and have a mixture of uppercase and lowercase letters.";
    isValid=false;
    }
    return isValid;

    }


    function validatecontactno(){
    var contactno = document.getElementById("stud_phone").value;
    var pattern = /^(\+91[\-\s]?)?[0]?(91)?[789]\d{9}$/;
    isValid=true;
    if(contactno.match(pattern)){
    document.getElementById("studphoneValidate").innerHTML="";
    }
    else if(!contactno){
    document.getElementById("studphoneValidate").innerHTML="Number required";
    isValid=false;
    }
    else{
    document.getElementById("studphoneValidate").innerHTML="Invalid Contact Number";
    isValid=false;
    }
    return isValid;

    } 
    // function validateadharno(){
    // var adharno = document.getElementById("adharno").value;
    // var pattern =  /^[2-9]{1}[0-9]{3}\s[0-9]{4}\s[0-9]{4}$/; 
    // isValid=true;
    // if(adharno.match(pattern)){
    // document.getElementById("validateadharno").innerHTML="";
    // }
    // else if(!adharno){
    // document.getElementById("validateadharno").innerHTML="adharNumber required";
    // isValid=false;
    // }
    // else{
    // document.getElementById("validateadharno").innerHTML="Invalid adhar Number";
    // isValid=false;
    // }
    // return isValid;

    // }

    // function validatepincode(){
    //    var pincode = document.getElementById("pincode").value;
    //    var pattern =  /^[1-9]{1}[0-9]{2}\\s{0, 1}[0-9]{3}$/; 
    //    isValid=true;
    //    if(pincode.match(pattern)){
    //       document.getElementById("validatepincode").innerHTML="";
    //    }
    //    else if(!pincode){
    //       document.getElementById("validatepincode").innerHTML="pincode required";
    //       isValid=false;
    //    }
    //    else{
    //       document.getElementById("validatepincode").innerHTML="Invalid pincode Number";
    //       isValid=false;
    //    }
    //    return isValid;

    // } -->
    function validateemail(){
    var email = document.getElementById("email").value;
    var pattern = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/; 
    isValid=true;
    if(email.match(pattern)){
    document.getElementById("studemailValidate").innerHTML="";
    }
    else if(!email){
    document.getElementById("studemailValidate").innerHTML="Email required";
    isValid=false;
    }
    else{
    document.getElementById("studemailValidate").innerHTML="Invalid Email";
    isValid=false;
    }
    return isValid;

    } 
</script>
    <!-- //Meta tag Keywords -->
    <!-- Custom-Files -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="//fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700" rel="stylesheet">
    <!-- //Fonts -->
</head>

<body>
    <script src="valid.js"></script>
    <script src="validone.js"></script>
    <!-- //header -->
    <header class="py-sm-3 pt-3 pb-2" id="home">
        <div class="container">
            <!-- nav -->
            <div class="top d-md-flex">
                <div id="logo">
                     <h1> <a href="index.html"><!--<span class="fa fa-yoast"></span>--> <img src="images\wiz_logo.png" style="height:50px; width:50px;" alt="logo"> Wizard Sports Academy</a></h1>                                                             <!--  -->
                </div>
                <!-- <div class="search-form mx-md-auto">                                                                                                                                                                                                      
                    <div class="form-w3layouts-grid">
                        <form action="#" method="post" class="newsletter">
                            <input class="search" type="search" placeholder="Search..." required="">
                            <button class="form-control btn" value=""><span class="fa fa-search"></span></button>
                        </form>
                    </div>
                </div>-->                                                                                                                                                                                                                                      <!--  -->
                <div class="forms mt-md-0 mt-2">
                    <a href="login.html" class="btn"><span class="fa fa-user-circle-o"></span> Sign In</a>
                    <a href="register.html" class="btn"><span class="fa fa-pencil-square-o"></span> Sign Up</a>
                </div>
            </div>
            <nav class="text-center">
                <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
                <input type="checkbox" id="drop" />
                <ul class="menu">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li>
                        <!-- First Tier Drop Down -->
                        <label for="drop-2" class="toggle">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span>
                        </label>
                        <a href="services.php">Services <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                        <input type="checkbox" id="drop-2" />
                        <ul style="margin-left : -200px ;">
                            <li><a href="services.php#section1" class="drop-text">Individual Events</a></li>
                            <li><a href="services.php#section2" class="drop-text">Team Events</a></li>
                            <!-- <li><a href="#test" class="drop-text">Reviews</a></li>
                            <li><a href="single.html" class="drop-text">More Info</a></li> -->                                                                                                                                          <!--  -->

                        </ul>
                    </li>

                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
            <!-- //nav -->
        </div>
    </header>
    <!-- //header -->
    <div class="main-content inner">
        <div class="overlay inner">

        </div>
    </div>
    <!--// banner -->
    <!-- banner-bottom -->
    <section class="contact-main py-5">
        <div class="container py-md-5">
            <h3 class="title-w3pvt text-center">Signup Now</h3>

            <div class="login px-sm-4 mx-auto mw-100 login-wrapper">
                <form class="login-wrapper w3pvt_mail_grid_right" action="register.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Student Name</label>
                        <input class="form-control" type="text" name="stud_name" id="stud_name" required onblur="return studnameValidate()" required="">
                    </div>
                    <div><span id="studnameValidate" class="validate"></span></div>

                    <div class="form-group">
                        <label>Email ID</label>
                        <input class="form-control" type="email" name="email" id="email" required onblur="return validateemail()" required="">
                    </div>
                    <div><span id="studemailValidate" class="validate"></span></div>

                    <div class="form-group">
                        <label class="mb-2">Password</label>
                        <input type="password" class="form-control" maxlength="100" minlength="8" name="stud_password" required onblur="return validatepwd()" id="stud_password" required="">
                    </div>
                    <div><span id="validatepwd" class="validate"></span></div>

                    <div class="form-group">
                        <label class="mb-2">Confirm Password</label>
                        <input type="password" class="form-control" name="cpassword" maxlength="100" minlength="8" id="cpassword" required="">
                    </div>

                    <div class="form-group">
                        <label>Date of Birth</label>
                        <input class="form-control" type="date" name="stud_dob" id="stud_dob" required="">
                    </div>

                    <!-- <div class="form-group">
                        <label>Gender</label><br>
                        <input type="radio" name="stud_gender_male" id="stud_gender_male" value="Gender" required="">
                        <label>Male</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        <input type="radio" name="stud_gender_female" id="stud_gender_female" value="Female" required="">
                        <label>Female</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        <input type="radio" name="stud_gender_others" id="stud_gender-others" value="Others" required="">
                        <label>Others</label>
                    </div> -->

                    <div class="form-group">
                        <label>House Name</label>
                        <input class="form-control" type="text" name="stud_housenm" required onblur="return housenameValidate()" id="stud_housenm" required="">
                    </div>
                    <div><span id="studaddressValidate" class="validate"></span></div>

                    <div class="form-group">
                        <label>Area</label>
                        <input class="form-control" type="text" name="stud_area" required onblur="return areaValidate()" id="stud_area" required="">
                    </div>
                    <div><span id="studareaValidate" class="validate"></span></div>

                    <div class="form-group">
                        <label>City</label>
                        <input class="form-control" type="text" name="stud_city" required onblur="return cityValidate()" id="stud_city" required="">
                    </div>
                    <div><span id="studcityValidate" class="validate"></span></div>

                    <div class="form-group">
                        <label>District</label>
                        <input class="form-control" type="text" name="stud_district" required onblur="return fnameValidate()" id="stud_district" required="">
                    </div>

                    <div class="form-group">
                        <label>Pin</label>
                        <input class="form-control" type="text" name="stud_pin" id="stud_pin" required="">
                    </div>

                    <div class="form-group">
                        <label>State</label>
                        <input class="form-control" type="text" name="stud_state" required onblur="return stateValidate()" id="stud_state" required="">
                    </div>
                    <div><span id="studstateValidate" class="validate"></span></div>

                    <div class="form-group">
                        <label>Phone No</label>
                        <input class="form-control" type="text" name="stud_phone" required onblur="return validatecontactno()" id="stud_phone" required="">
                    </div>
                    <div><span id="studphoneValidate" class="validate"></span></div>

                    <div class="form-group">
                        <label>Blood Group</label>
                        <input class="form-control" type="text" name="stud_bloodgrp" id="stud_bloodgrp" required="">
                    </div>

                    <div class="form-group">
                        <label>Father's Name</label>
                        <input class="form-control" type="text" name="stud_father"  id="stud_father" required="">
                    </div>

                    <div class="form-group">
                        <label>Mother's Name</label>
                        <input class="form-control" type="text" name="stud_mother" id="stud_mother" required="">
                    </div>

                    <div class="form-group">
                        <label>Sports Item</label>
                        <input class="form-control" type="text" name="stud_item" id="stud_item" required="">
                    </div>

                    <div class="form-group">
                        <label>T-shirt and Pants Size</label>
                        <input class="form-control" type="text" name="stud_size" id="stud_size" placeholder="in cm" required="">
                    </div>

                    <!-- <div class="form-group">
                        <label>Image</label>
                        <input class="form-control" type="file" name="stud_image" id="stud_image" required="">
                    </div> -->

                    <button type="submit" onclick="registerValid()" class="btn btn-primary submit mt-2 read-more" name="submit" id="submit" >Sign Up</button>
                    <p class="text-center mt-4">
                        <a href="Privacy_Policy.pdf" target="_blank">By clicking Signup, you agree to our terms and conditions</a>

                    </p>
                    <p class="text-center mt-4">
                        For Teacher Registration,<a href="teachersignup.html" style="color:blue ;">click here</a>

                    </p>
                </form>
            </div>




        </div>
    </section>
    <!-- //banner-bottom -->
    <!--/help-line -->
    <section class="help-line-w3layouts py-5">
        <div class="container">
            <div class="row help-line-grid">
                <div class="col-sm-6">
                    <h3>Contact Us</h3>
                    <p>Call us, we are 24/7 Helpline</p>
                </div>
                <div class="col-sm-6 text-sm-right mt-sm-0 mt-3">
                    <h3><span class="fa fa-phone" aria-hidden="true"></span> +919898989898</h3>
                </div>
            </div>
        </div>
    </section>
    <!--//help-line -->
    <!-- footer -->
    <footer class="footer-content py-5">
        <div class="container-fluid py-lg-5 inner-sec-w3ls">
            <div class="row">
                <div class="col-lg-4 footer-top mt-md-0 mt-sm-5 pr-lg-5">
                    <h2>
                        <a class="navbar-brand" href="index.html">
                            <img src="images\wiz_logo.png" style="height:50px; width:50px;" alt="logo">Wizard Sports Academy</a>
                    </h2>
                    <p class="my-3">For any admission related queries, feel free to contact.</p>

                </div>
                <div class="col-lg-3 mt-md-0 mt-5">
                    <div class="footer-w3pvt">
                        <h3 class="mb-3 w3pvt_title">Navigation</h3>
                        <hr>
                        <div class="row">
                            <ul class="col-6 list-info-w3pvt links">

                                <li>
                                    <a href="events.html">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="about.html">
                                        About Us
                                    </a>
                                </li>
                                <li>
                                    <a href="gallery.html">
                                        Gallery
                                    </a>
                                </li>
                                <li>
                                    <a href="services.php#section1">
                                        Individual Events
                                    </a>
                                </li>
                                <li>
                                    <a href="services.php#section2">
                                        Team Events
                                    </a>
                                </li>
                                <li>
                                    <a href="contact.html">
                                        Contact Us
                                    </a>
                                </li>

                            </ul>
                            <ul class="col-6 list-info-w3pvt links">
                                <li>
                                    <a href="about.html">
                                        Our Mission
                                    </a>
                                </li>
                                <!-- <li>
                                    <a href="events.html">
                                        Latest Posts
                                    </a>
                                </li> -->
                                <li>
                                    <a href="#">
                                        Explore
                                    </a>
                                </li>
                                <li>
                                    <a href="contact.html">
                                        Find us
                                    </a>
                                </li>
                                <li>
                                    <a href="Privacy_Policy.pdf" target="_blank">
                                        Privacy Policy
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="col-lg-2 mt-lg-0 mt-5">
                    <div class="footer-w3pvt">
                        <h3 class="mb-3 w3pvt_title">Contact Us</h3>
                        <hr>
                        <div class="last-w3layouts-contact">
                            <p>
                                <a href="mailto:example@email.com">info@wizardsports.org</a>
                            </p>
                        </div>
                        <div class="last-w3layouts-contact my-2">
                            <p>+919898989898</p>
                        </div>
                        <div class="last-w3layouts-contact">
                            <p>Marmala, Cheruthuruth PO, 
                                <br>Kottayam 686001, Kerala </p>
                        </div>
                    </div>
                </div>
                 <!-- <div class="col-lg-3 mt-lg-0 mt-5">
                    <div class="footer-w3pvt">
                        <h3 class="mb-3 w3pvt_title">Stay up to date</h3>
                        <hr>
                        <div class="footer-text">
                            <p>By subscribing to our mailing list you will always get latest news and updates from us.</p>
                            <form action="#" method="post">
                                <input type="email" name="Email" placeholder="Enter your email..." required="">
                                <button class="btn1 btn"><span class="fa fa-paper-plane-o" aria-hidden="true"></span></button>
                            </form>
                        </div>
                    </div>

                </div> -->
            </div>

        </div>
    </footer>
    <!-- //footer -->
    <div class="copy-right py-2">
        <div class="container-fluid inner-sec-w3ls">
            <div class="row">
                <div class="col-lg-6 copy-w3pvt">
                    <p class="copy-right-grids text-li text-left my-sm-4 my-4">© 2022 Wizard Sports Academy. All Rights Reserved.
                    </p>
                </div>
                <div class="col-lg-5 w3layouts-footer text-right">
                    <ul class="social_section_1info">
                        <li class="mb-2 facebook"><a href="https://www.facebook.com/officialsportsacademy"><span class="fa fa-facebook"></span> facebook</a></li>
                        <li class="mb-2 twitter"><a href="https://l.facebook.com/l.php?u=http%3A%2F%2Ftwitter.com%2FSportsXAcademy&h=AT2Af3wBXKMYDe4Tw4Z6hZfjazKqnh2pTEX5eHKI0ktJkC40OL6e4x5nHGLOdxPRtymBA1VL-NNKJDI93X9L_TSDcCsxoQKntw_J0bGPYBuu94TaGiAWi4fUVXRbQSdSCiZtp5gY062oUrdA3gUkY_1jVcYodFxSIkfVNA"><span class="fa fa-twitter"></span> twitter</a></li>
                        <li class="google"><a href="index.html"><span class="fa fa-google-plus"></span> google</a></li>
                        <!-- <li class="linkedin"><a href=""><span class="fa fa-linkedin"></span> linkedin</a></li> -->
                    </ul>
                </div>
                <div class="move-top col-1"><a href="#home" class="move-top"> <span class="fa fa-angle-up" aria-hidden="true"></span></a></div>
            </div>
            <!-- //footer bottom -->
        </div>
    </div>

</body>

</html>
