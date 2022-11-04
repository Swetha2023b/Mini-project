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