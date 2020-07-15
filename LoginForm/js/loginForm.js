function switchVisibleSignUp() {
    document.getElementById('form-container-sign-up-container').style.display = 'Block';
    document.getElementById('signUpBtn').style.display = 'none';
    document.getElementById('logInBtn').style.display = 'Block';
    document.getElementById('form-container-sign-in-container').style.display = 'none';
}

function switchVisibleLogIn(){
    document.getElementById('form-container-sign-in-container').style.display = 'Block';
    document.getElementById('logInBtn').style.display = 'none';
    document.getElementById('signUpBtn').style.display = 'Block';
    document.getElementById('form-container-sign-up-container').style.display = 'none';
}