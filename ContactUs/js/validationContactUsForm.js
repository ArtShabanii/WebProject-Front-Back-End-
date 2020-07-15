function validateContactUs(){
    var name = document.getElementById("Name").value;
    var email = document.getElementById("Email").value;
    var phone = document.getElementById("Phone").value;
    var subject = document.getElementById("Subject").value;

    //NAME VALIDATION
    recu1 = /[-!@#$%^&*()_+|~=`{}\[\]:";'<>?,.\/1234567890]/;
    if(name===""){
        document.getElementById("div1").innerHTML="Enter a value";
        document.getElementById("div1").style.color="Red";
        document.getElementById("div1").style.fontSize="10px";
        document.getElementById("Name").style.border="2px solid #EE2737";        
    }else if(name[0] === name[0].toLowerCase()){
        document.getElementById("div1").innerHTML="The first character should be a letter Uppercase";
        document.getElementById("div1").style.color="Red";
        document.getElementById("div1").style.fontSize="10px";
        document.getElementById("Name").style.border="2px solid #EE2737";
    }else if(recu1.test(name)){
        document.getElementById("div1").innerHTML="Name should have only letters";
        document.getElementById("div1").style.color="Red";
        document.getElementById("div1").style.fontSize="10px";
        document.getElementById("Name").style.border="2px solid #EE2737";
    }else{
        document.getElementById("div1").innerHTML="";
        document.getElementById("Name").style.background="transparent";
        document.getElementById("Name").style.border="1px solid #B49581";
    }

    //EMAIL VALIDATION

    recu2 = /\b[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}\b/;
    if(email===""){
        document.getElementById("div2").innerHTML="Enter a value";
        document.getElementById("div2").style.color="Red";
        document.getElementById("div2").style.fontSize="10px";
        document.getElementById("Email").style.border="2px solid #EE2737";        
    }else if(!recu2.test(email)){
        document.getElementById("div2").innerHTML="Email should be inf format example@example.exam";
        document.getElementById("div2").style.color="Red";
        document.getElementById("div2").style.fontSize="10px";
        document.getElementById("Email").style.border="2px solid #EE2737"; 
    }else{
        document.getElementById("div2").innerHTML="";
        document.getElementById("Email").style.background="transparent";
        document.getElementById("Email").style.border="1px solid #B49581";
    }

    //PHONE VALIDATION
    //https://regexr.com/3c53v PHONE REGEX

    recu3 = /^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\./0-9]*$/
    
    if(phone===""){
        document.getElementById("div3").innerHTML="Enter a value";
        document.getElementById("div3").style.color="Red";
        document.getElementById("div3").style.fontSize="10px";
        document.getElementById("Phone").style.border="2px solid #EE2737"; 
     }else if(!recu3.test(phone)){
        document.getElementById("div3").innerHTML="Phone number have only numbers (can be used character +)";
        document.getElementById("div3").style.color="Red";
        document.getElementById("div3").style.fontSize="10px";
        document.getElementById("Phone").style.border="2px solid #EE2737";
    }else{
        document.getElementById("div3").innerHTML="";
        document.getElementById("Phone").style.background="transparent";
        document.getElementById("Phone").style.border="1px solid #B49581";
    }

    //SUBJECT VALIDATION

    if(subject===""){
        document.getElementById("div4").innerHTML="Enter a value";
        document.getElementById("div4").style.color="Red";
        document.getElementById("div4").style.fontSize="10px";
        document.getElementById("Subject").style.border="2px solid #EE2737"; 
    }else{
        document.getElementById("div4").innerHTML="";
        document.getElementById("Subject").style.background="transparent";
        document.getElementById("Subject").style.border="1px solid #B49581";
    }
}