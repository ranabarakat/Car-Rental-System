

document.forms['reserve-form'].onsubmit = function (event) {

    var isValid = true;

    document.querySelector(".email-error").innerHTML = "";


    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if (emailPattern.test(this.email.value)) { } else {
        document.querySelector(".email-error").innerHTML = "*Please enter a valid email!";
        document.querySelector(".email-error").style.display = "block";
        event.preventDefault();
        isValid = false;
    }

    return isValid;

}