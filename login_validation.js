document.forms['login-form'].onsubmit = function (event) {

    var isValid = true;

    document.querySelector(".pass-error").innerHTML = "";
    document.querySelector(".email-error").innerHTML = "";


    if (this.password.value.trim() === "") {
        document.querySelector(".pass-error").innerHTML = "*Please enter your password!";
        document.querySelector(".pass-error").style.display = "block";
        event.preventDefault();
        isValid = false;
    }


    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if (emailPattern.test(this.email.value)) { } else {
        document.querySelector(".email-error").innerHTML = "*Please enter a valid email!";
        document.querySelector(".email-error").style.display = "block";
        event.preventDefault();
        isValid = false;
    }

    return isValid;

}