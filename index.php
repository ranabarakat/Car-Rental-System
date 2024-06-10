<?php
include_once("db_connect.php");
include('register.php');
?>
<!DOCTYPE html>
<html>

<head>
    <!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <link href="style.css" rel="stylesheet" type="text/css" media="screen">
    <title>Registration</title>

    <script type=text/javascript>
        function do_register() {

            var email = document.forms["register-form"]["email"].value;
            var pass = document.forms["register-form"]["password"].value;
            var phone = document.forms["register-form"]["phone"].value;
            var ssn = document.forms["register-form"]["ssn"].value;

            $.ajax({
                type: 'post',
                url: 'index.php',
                data: {
                    do_register: "do_register",
                    email: email
                },
                success: function(response) {
                    if (response == "success") {
                        window.location.href = "register.php";
                    } else {

                        alert("Wrong Details");
                    }
                }
            });
        }
    </script>
</head>

<body>

    <div class="bar">
        <div id="inline">
            
            <div class="logo">
                <h1 class="logo"> Car Rental Company</h1>
               
            </div>
            <p> Already have an account? <a href="login_index.php"> Login</a> </p>
        </div>
    </div>
    


    <div class="form">
        <h1 style="color:black;">Create a free account</h1>
        <form id="register-form" action="#" onsubmit="return do_register();" method='post'>
            <div id="inline">
                <div class="error-input fname-error"> </div>
                <div class="error-input lname-error" style="margin-left:-90px;"> </div>
            </div>
            <div id="inline">
                <input type="text" style="width:32%;" placeholder=" First Name" name="fname" id="fname" />
                <input type="text" style="margin-left:4px; width:32%;" placeholder="Last Name" name="lname" id="lname" />
            </div>
            <div class="error-input email-error"></div>
            <input type="email" placeholder="Email Address" name="email" id="email" />
            <div id="inline">
                <div class="error-input pass-error"> </div>
                <div class="error-input cpass-error" style=" margin-left:-90px;"> </div>
            </div>
            <div id="inline">
                <input type="password" style="width:32%;" placeholder=" Create a Password" name="password" id="password" />
                <input type="password" style="margin-left:4px; width:32%;" placeholder="Confirm Password" name="cpassword" id="cpassword" />
            </div>
            <div class="error-input ssn-error"> </div>
            <input type="text" placeholder="Social Security Number" name="ssn" id="ssn" />
            <div class="error-input phone-error"> </div>
            <input type="text" placeholder="Phone Number" name="phone" id="phone" />
            <div class="error-input address-error"></div>
            <input type="text" placeholder="Address" name="address" id="address" />
            <br>
            <br><label for="sex">Gender:</label><label for="dob" style="margin-left:130px;">Date of Birth:</label>
            <div class="selectt">
                <select id="sex" name="sex">
                    <option style="font-family: arial;" value="M">Male</option>
                    <option style="font-family: arial;" value="F">Female</option>
                </select>
                <input type="date" style="margin-left:50px;" name=" dob" id="dob" />
            </div><br><br>
            <button type="submit" name="submit" class="button" id="submit">REGISTER</button>
        </form>
        <script src="register_validation.js"></script>
        <!-- <a href="signup.php" style=" color:white;margin-left:40% ; font-size: 18px">Create an account</a><br> -->
        <!-- <a href="ad.php" style=" color:white ;margin-left:40% ; font-size: 18px">Log in as admin</a> -->

    </div>


    <!-- <script type="text/javascript" src="register_validation.js"></script> -->
    <!-- <script>
        var formAjaxValidate = document.getElementById("register_form");

        var checkForm = function(e) {

            var form = e.target;

            if (this.fname.value == "") {
                alert("Please enter your first name");
                this.fname.focus();
                e.preventDefault();
                return;
            }
            if (this.email.value == "") {
                alert("Please enter a valid Email Address");
                this.email.focus();
                e.preventDefault();
                return;
            }

            alert("Success!  The form has been completed, validated and is ready to be submitted...");
            e.preventDefault();

        }

        formAjaxValidate.addEventListener("submit", checkForm, false);

        formAjaxValidate.name.addEventListener("change", function(e) {
            this.value = this.value.replace(/^\s+|\s+$/g, "");
            this.form.valid_name.checked = this.value;
        }, false);

        formAjaxValidate.email.addEventListener("change", function(e) {
            if (this.value != "") {
                callAjax("checkEmail", this.value, this.id);
            }
        }, false); -->

    </script>
</body>

</html>