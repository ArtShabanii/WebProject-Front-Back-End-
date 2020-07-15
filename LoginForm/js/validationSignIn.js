// REGEX 
// https://www.codexpedia.com/regex/regex-symbol-list-and-regex-examples/

/*
function validateLogin(){
    var Username = document.getElementById("username").value;
    var Password = document.getElementById("password").value;

    //Email/Username Field
    
    re3 = /[-!$%^&*()+|~=`{}\[\]:";'<>?,\/]/;
    if(Username === ""){
        document.getElementById("div1").innerHTML="Enter a value";
        document.getElementById("div1").style.color="Red";
        document.getElementById("username").style.border="1px solid #EE2737";        
    }else if(re3.test(Username)){
        document.getElementById("div1").innerHTML="Username should have only letters, numbers and underscores or ( . )";
        document.getElementById("div1").style.color="Red";
        document.getElementById("username").style.border="1px solid #EE2737";
    }else{
        document.getElementById("div1").innerHTML="";
        document.getElementById("username").style.background="#fff";
        document.getElementById("username").style.border="1px solid #B49581";
    }

    //Password Field
    re2 = /[0-9]/;
    re4 = /[-!$%^&*()_+|~=`{}\[\]:";'<>?,.\/]/;
    if(Password == ""){
        document.getElementById("div2").innerHTML="Enter a value";
        document.getElementById("div2").style.color="Red";
        document.getElementById("password").style.border="1px solid #EE2737";
    }else{
        document.getElementById("div2").innerHTML="";
        document.getElementById("password").style.background="#fff";
        document.getElementById("password").style.border="1px solid #B49581";
    }
}

var attempt = 3;

function validateLoginButton(){
    var un = document.getElementById("username").value;
    var pw = document.getElementById("password").value;


}

function showPasswordLogIn() {
    var x = document.getElementById("password");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
}