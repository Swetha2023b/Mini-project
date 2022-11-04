
function registerValid(){
    var isValid=true;
    var pincodePattern = /^[6][0-9]{5}$/;
    var nameCityPattern =  /^[a-zA-Z]+$/;
    var pwdPattern= /^(?=.*\d)(?=.*[A-Z]).{6,}/;
    var contactPattern = /^(\+91[\-\s]?)?[0]?(91)?[789]\d{9}$/;
    var emailPattern = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
    var validFirstname = document.getElementById("f-name").value;
    var validLastname = document.getElementById("l-name").value;
    var validAddress = document.getElementById("details").value;
    var validCity = document.getElementById("city").value;
    var validDistrict = document.getElementById("district").value;
    var validContact = document.getElementById("phoneno").value;
    var validPincode = document.getElementById("pincode").value;
    var validEmail = document.getElementById("email").value;
    var validPassword1 = document.getElementById("pwd").value;
    var validPassword2 = document.getElementById("cpwd").value;

    //firstName validation on buttonClick
    if(validFirstname==null || validFirstname==""){
        document.getElementById("name").innerHTML="First Name Required";
        isValid=false;
    }
    else{
        document.getElementById("name").innerHTML="";
        isValid=false;
    }

    //lastName validation on buttonClick
    if(validLastname==null || validLastname==""){
        document.getElementById("names").innerHTML="Last Name Required";
        isValid=false;
    }
    else {
        document.getElementById("names").innerHTML="";
        isValid=false;
    }

    //Address validation on buttonClick
    if(validLastname==null || validLastname==""){
        document.getElementById("addr").innerHTML="Address Required";
        isValid=false;
    }
    else {
        document.getElementById("addr").innerHTML="";
        isValid=false;
    }

    //email validation on buttonClick
    if(validEmail==null || validEmail==""){
        document.getElementById("mail").innerHTML="Email Required";
        isValid=false;
    }
    else{
        document.getElementById("mail").innerHTML="";
        isValid=false;
    }

    //contact validation on buttonClick
    if(validContact==null || validContact==""){
        document.getElementById("pho").innerHTML="Contact Required";
        isValid=false;
    }
    else{
        document.getElementById("pho").innerHTML="";
        isValid=false;
    }

    //city validation on buttonClick
    if(validCity==null || validCity==""){
        document.getElementById("cit").innerHTML="City Required";
        isValid=false;
    }
    else{
        document.getElementById("cit").innerHTML="";
        isValid=false;
    }

    //district validation on buttonClick
    if(validCity==null || validCity==""){
        document.getElementById("states").innerHTML="district Required";
        isValid=false;
    }
    else{
        document.getElementById("states").innerHTML="";
        isValid=false;
    }

    //pincode validation on buttonClick
    if(validCity==null || validCity==""){
        document.getElementById("pin").innerHTML="Pincode Required";
        isValid=false;
    }
    else{
        document.getElementById("pin").innerHTML="";
        isValid=false;
    }

    //password validation on buttonClick
    if(validPassword1==null || validPassword1==""){
        document.getElementById("pass1").innerHTML="Password Required";
        isValid=false;
    }
    else{
        document.getElementById("pass1").innerHTML="";
        isValid=false;
    }

    //confirm password on buttonClick
    if(validPassword2==null || validPassword2==""){
        document.getElementById("pass2").innerHTML="Password Required";
        isValid=false;
    }
    else{
        document.getElementById("pass2").innerHTML="";
        isValid=false;
    }
    return isValid;
}

