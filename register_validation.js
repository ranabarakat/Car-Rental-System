

document.forms['register-form'].onsubmit = function (event) {

    var isValid = true;

    document.querySelector(".fname-error").innerHTML = "";
    document.querySelector(".lname-error").innerHTML = "";
    document.querySelector(".pass-error").innerHTML = "";
    document.querySelector(".cpass-error").innerHTML = "";
    document.querySelector(".email-error").innerHTML = "";
    document.querySelector(".address-error").innerHTML = "";
    document.querySelector(".phone-error").innerHTML = "";
    document.querySelector(".ssn-error").innerHTML = "";



    if (this.fname.value.trim() === "") {
        document.querySelector(".fname-error").innerHTML = "*Please enter your first name";
        document.querySelector(".fname-error").style.display = "block";
        event.preventDefault();
        isValid = false;
    }
    if (this.lname.value.trim() === "") {
        document.querySelector(".lname-error").innerHTML = "*Please enter your last name";
        document.querySelector(".lname-error").style.display = "block";
        event.preventDefault();
        isValid = false;
    }


    if (this.password.value.trim() === "") {
        document.querySelector(".pass-error").innerHTML = "*Please enter a password";
        document.querySelector(".pass-error").style.display = "block";
        event.preventDefault();
        isValid = false;
    }

    if (this.cpassword.value != this.password.value) {
        document.querySelector(".cpass-error").innerHTML = "*Passwords do not match!";
        document.querySelector(".cpass-error").style.display = "block";
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

    var phonePattern = /^\d{11}$/;
    if (phonePattern.test(this.phone.value)) { } else {
        document.querySelector(".phone-error").innerHTML = "*Phone number must be 11 digits";
        document.querySelector(".phone-error").style.display = "block";
        event.preventDefault();
        isValid = false;
    }

    if (this.address.value.trim() === "") {
        document.querySelector(".address-error").innerHTML = "*Please enter an address";
        document.querySelector(".address-error").style.display = "block";
        event.preventDefault();
        isValid = false;
    }

    var ssnPattern = /^\d{11,20}$/;
    if (ssnPattern.test(this.ssn.value)) { } else {
        document.querySelector(".ssn-error").innerHTML = "*SSN must be 11-20 digits";
        document.querySelector(".ssn-error").style.display = "block";
        event.preventDefault();
        isValid = false;
    }

    return isValid;

}


