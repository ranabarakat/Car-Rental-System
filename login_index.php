<?php
include_once("db_connect.php");
include('login.php');
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->

    <link href="style.css" rel="stylesheet" type="text/css" media="screen">
    <title>Login</title>

    <script type=text/javascript>
        function do_login() {

            var email = document.forms["login-form"]["email"].value;
            var pass = document.forms["login-form"]["password"].value;

            $.ajax({
                type: 'post',
                url: 'index.php',
                data: {
                    do_login: "do_login",
                    email: email
                },
                success: function(response) {
                    if (response == "success") {
                        window.location.href = "login.php";
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
                <h1 class="logo">Car Rental Company</h1>
            </div>
            <p> Don't have an account? <a href="index.php"> Join us!</a> </p>
        </div>
    </div>

    <div class="login">
        <h1 style="color:black;">Welcome back!</h1>
        <form id="login-form" action="" onsubmit="return do_login();" method='post'>
            <div class="error-input email-error"></div>
            <input type="email" style="border-color:black;color:black;" placeholder="Email Address" name="email" id="email" />
            <div class="error-input pass-error"> </div>
            <input type="password" style="border-color:black;color:black;" placeholder="Password" name="password" id="password" />
            <label style="margin-left:120px;">Login as: </label>
            <input type="radio" id="admin" name="admin" value="admin">
            <label for="admin" style="margin-left:10px;">Admin</label>
            <input type="radio" id="customer" name="customer" value="customer">
            <label for="customer" style="margin-left:10px;">Customer</label><br><br>
            <button type="submit" name="submit" class="button" id="submit">LOGIN</button>
        </form>
        <script src="login_validation.js"></script>

    </div>

    </script>
</body>

</html>