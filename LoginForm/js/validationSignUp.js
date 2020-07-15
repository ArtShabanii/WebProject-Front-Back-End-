// REGEX 
// https://www.codexpedia.com/regex/regex-symbol-list-and-regex-examples/

function validateSignUp(){
    var firstName = document.getElementById("FName").value;
    var lastName = document.getElementById("LName").value;
    var username = document.getElementById("Username").value;
    var email = document.getElementById("Email").value;
    var password = document.getElementById("Password").value;

    //FIRST NAME AND LAST NAME VALIDATION
    resu1 = /[-!@#$%^&*()_+|~=`{}\[\]:";'<>?,.\/1234567890]/;
    if(firstName===""){
        document.getElementById("div3").innerHTML="Enter a value";
        document.getElementById("div3").style.color="Red";
        document.getElementById("div3").style.fontSize="10px";
        document.getElementById("FName").style.border="1px solid #EE2737";        
    }else if(firstName[0] === firstName[0].toLowerCase()){
        document.getElementById("div3").innerHTML="The first character should be a letter Uppercase";
        document.getElementById("div3").style.color="Red";
        document.getElementById("div3").style.fontSize="10px";
        document.getElementById("FName").style.border="1px solid #EE2737";
    }else if(resu1.test(firstName)){
        document.getElementById("div3").innerHTML="First Name should have only letters";
        document.getElementById("div3").style.color="Red";
        document.getElementById("div3").style.fontSize="10px";
        document.getElementById("FName").style.border="1px solid #EE2737";
    }else{
        document.getElementById("div3").innerHTML="";
        document.getElementById("FName").style.background="#fff";
        document.getElementById("FName").style.border="1px solid #B49581";
    }

    if(lastName===""){
        document.getElementById("div4").innerHTML="Enter a value";
        document.getElementById("div4").style.color="Red";
        document.getElementById("div4").style.fontSize="10px";
        document.getElementById("LName").style.border="1px solid #EE2737";      
    }else if(lastName[0] === lastName[0].toLowerCase()){
        document.getElementById("div4").innerHTML="The first character should be a letter Uppercase";
        document.getElementById("div4").style.color="Red";
        document.getElementById("LName").style.border="1px solid #EE2737";  
    }else if(resu1.test(lastName)){
        document.getElementById("div4").innerHTML="Last Name should have only letters";
        document.getElementById("div4").style.color="Red";
        document.getElementById("div4").style.fontSize="10px";
        document.getElementById("LName").style.border="1px solid #EE2737"; 
    }else{
        document.getElementById("div4").innerHTML="";
        document.getElementById("LName").style.background="#fff";
        document.getElementById("LName").style.border="1px solid #B49581";
    }

    //USERNAME VALIDATION

    resu2 = /[-!@#$%^&*()+|~=`{}\[\]:";'<>?,\/]/;
    if(username===""){
        document.getElementById("div5").innerHTML="Enter a value";
        document.getElementById("div5").style.color="Red";
        document.getElementById("div5").style.fontSize="10px";
        document.getElementById("Username").style.border="1px solid #EE2737";  
    }else if(resu2.test(username)){
        document.getElementById("div5").innerHTML="Username should have only letters, numbers and underscores or ( . )";
        document.getElementById("div5").style.color="Red";
        document.getElementById("div5").style.fontSize="10px";
        document.getElementById("Username").style.border="1px solid #EE2737";
    }else{
        document.getElementById("div5").innerHTML="";
        document.getElementById("Username").style.background="#fff";
        document.getElementById("Username").style.border="1px solid #B49581";
    }

    //EMAIL VALIDATION

    resu3 = /\b[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}\b/;
    if(email===""){
        document.getElementById("div6").innerHTML="Enter a value";
        document.getElementById("div6").style.color="Red";
        document.getElementById("div6").style.fontSize="10px";
        document.getElementById("Email").style.border="1px solid #EE2737";        
    }else if(!resu3.test(email)){
        document.getElementById("div6").innerHTML="Email should be inf format example@example.exam";
        document.getElementById("div6").style.color="Red";
        document.getElementById("div6").style.fontSize="10px";
        document.getElementById("Email").style.border="1px solid #EE2737"; 
    }else{
        document.getElementById("div6").innerHTML="";
        document.getElementById("Email").style.background="#fff";
        document.getElementById("Email").style.border="1px solid #B49581";
    }

    //PASSWORD VALIDATION

    resu5 = /[0-9]/;
    resu4 = /[-!#$%^&*()_+|~=`{}\[\]:";'<>?,.\/]/;
    if(password===""){
        document.getElementById("div7").innerHTML="Enter a value";
        document.getElementById("div7").style.color="Red";
        document.getElementById("div7").style.fontSize="10px";
        document.getElementById("Password").style.border="1px solid #EE2737";
    }else if(password.length<6){
        document.getElementById("div7").innerHTML="Value should have 6+ characters";
        document.getElementById("div7").style.color="Red";
        document.getElementById("div7").style.fontSize="10px";
        document.getElementById("Password").style.border="1px solid #EE2737"; 
    }else if(password === password.toLowerCase()){
        document.getElementById("div7").innerHTML="One letter should be Uppercase";
        document.getElementById("div7").style.color="Red";
        document.getElementById("div7").style.fontSize="10px";
        document.getElementById("Password").style.border="1px solid #EE2737"; 
    }else if(!resu5.test(password)){
        document.getElementById("div7").innerHTML="Password is not strong enough should have a number";
        document.getElementById("div7").style.color="Red";
        document.getElementById("div7").style.fontSize="10px";
        document.getElementById("Password").style.border="1px solid #EE2737"; 
    }else if(resu4.test(password)){
        document.getElementById("div7").innerHTML="Your password is strong!";
        document.getElementById("div7").style.color="Green";
        document.getElementById("div7").style.fontSize="10px";
        document.getElementById("Password").style.border="1px solid Green";
    }else{
        document.getElementById("div7").innerHTML="";
        document.getElementById("Password").style.background="#fff";
        document.getElementById("Password").style.border="1px solid #B49581";
    }

    if(firstName==="" || firstName[0] === firstName[0].toLowerCase() || resu1.test(firstName) ||
        lastName==="" || lastName[0] === lastName[0].toLowerCase() || resu1.test(lastName) ||
        username==="" || resu2.test(username) || 
        email==="" || !resu3.test(email) ||
        password==="" || password.length<6 || password === password.toLowerCase() || !resu5.test(password)){ 
        document.getElementById("SignUpButton").disabled = true; 
    }else{
        document.getElementById("SignUpButton").disabled = false; 
    }
}

function showPasswordSignUp() {
    var x = document.getElementById("Password");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
}