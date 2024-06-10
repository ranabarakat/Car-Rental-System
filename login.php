<?php
session_start();
include "db_connect.php";

if (isset($_POST['submit'])) {



    $email = $_POST['email'];
    $_SESSION['email'] = $email;
    $password = $_POST['password'];
    $encrypted_password = md5($password);
if(isset($_POST['customer'])){

    $query = mysqli_query($connection, "SELECT * 
                                    FROM customer  
                                    WHERE email='$email' AND password='$encrypted_password'");
    $res = mysqli_fetch_array($query);
    if ($res) {
        $query = "SELECT * FROM customer WHERE email = '$email'";
        $result = mysqli_query($connection, $query);
        $userRow = mysqli_fetch_array($result);
        $id = $userRow['customer_id'];
        $fname = $userRow['fname'];
        $lname = $userRow['lname'];
        $email = $userRow['email'];
        $phone = $userRow['phone'];
        $_SESSION['customer_id'] = $id;
        $_SESSION['email'] = $email;
        $_SESSION['fname'] = $fname;
        $_SESSION['lname'] = $lname;
        $_SESSION['phone'] = $phone;

        echo "<script>alert('login successful')</script>";
        header('location:welcome.php');
    } else {
        echo "<script>alert('Incorrect email and/or password')</script>";
        // header('location:login_index.php#');
    }}

    else if(isset($_POST['admin'])){

        $query = mysqli_query($connection, "SELECT * 
                                        FROM `admin` 
                                        WHERE email='$email' AND password='$encrypted_password'");
        $res = mysqli_fetch_array($query);
        if ($res) {
            $query = "SELECT * FROM `admin` WHERE email = '$email'";
            $result = mysqli_query($connection, $query);
            $userRow = mysqli_fetch_array($result);
            
            $fname = $userRow['fname'];
            $_SESSION['fname'] = $fname;
            
            echo "<script>alert('login successful')</script>";
            header('location:admin_page.php');
        } else {
            echo "<script>alert('Incorrect email and/or password')</script>";
            // header('location:login_index.php#');
        }}

}
