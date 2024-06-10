

document.forms['delete-form'].onsubmit = function (event) {

    var isValid = true;

    document.querySelector(".plate_id-error").innerHTML = "";
    



    if (this.plate_id.value.trim() === "") {
        document.querySelector(".plate_id-error").innerHTML = "*Please enter plate number";
        document.querySelector(".plate_id-error").style.display = "block";
        event.preventDefault();
        isValid = false;
    }
   
    return isValid;

}


