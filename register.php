<?php
session_start();

$host = "localhost";
$user = "root";
$password = "";
$db = "carrentalsystem";

$db_connect = mysqli_connect($host, $user, $password, $db);
$db_select = mysqli_select_db($db_connect, $db);

if (isset($_POST['submit'])) {
    $SSN = $_POST['ssn'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
    $sex = $_POST['sex'];
    $birth_date = $_POST['dob'];
    $address = $_POST['address'];

    $sql = "SELECT * FROM customer WHERE email='$email'";
    $result = mysqli_query($db_connect, $sql);

    if (mysqli_num_rows($result) == 0) {
        $sql = "INSERT INTO customer (SSN,fname,lname,phone,email,`password`,sex,birth_date,`address`)
        VALUES ('$SSN','$fname','$lname','$phone','$email','$password','$sex','$birth_date','$address')";
        $result = mysqli_query($db_connect, $sql);

        if ($result) {
            echo "<script> alert('Registration Done Successfully')</script>";
            header('location:welcome.php');
        } else {
            echo "<script>alert('Something went wrong')</script>";
        }
    } else {
        echo "<script>alert('Email Already Exists!!')</script>";
    }
}
