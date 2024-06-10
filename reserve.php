<?php
// session_start();
include "db_connect.php";


// if (!empty($_POST['choose'])) {
//     foreach ($_POST['choose'] as $c) {
//         echo $c;
//     }
// }
// session_start();
if (isset($_POST['reserve'])) {


    $email = $_SESSION['email'];
    echo $email;

    // $query = mysqli_query($connection, "SELECT * FROM customer WHERE email='$email'");
    // $res = mysqli_fetch_array($query);
    // if (!$res) {

    //     echo "<script>alert('Email does not exist!')</script>";
    // } else {
    // $plate_id = $_POST['plate_id'];
    $plate_id = $_POST['plate_id'];
    $Start_date = $_POST['startdate'];
    $End_date = $_POST['enddate'];
    $Payment_date = $_POST['paymentdate'];

    //  $price = "SELECT `state` ,price FROM car WHERE plate_number='$plate_number'";
    $result = mysqli_query($connection,  "SELECT state,price FROM car WHERE plate_id='$plate_id'");
    while ($row = $result->fetch_assoc()) {
        $s = $row['state'];
        $p = $row['price'];
    }

    // echo $ss;
    $diff = strtotime($End_date) - strtotime($Start_date);
    //   echo "     hghghgh   "; 
    //  echo $diff;
    $days = ceil(abs($diff) / 86400);
    // echo $days."        ";
    // echo "     hghghgh   ";
    $total_cost = $p * $days;
    echo $total_cost;
    $date = date('m/d/Y h:i:s a', time());
    $customer_id = "SELECT customer_id FROM customer WHERE email='$email'";
    //$result = mysqli_query($connection,$customer_id);
    $result = mysqli_query($connection,  "SELECT customer_id FROM customer WHERE email='$email'");
    while ($row = $result->fetch_assoc()) {
        echo $row['customer_id'] . "<br>";
        echo $cid = $row['customer_id'];
    }
    if ($s == 'A') {
        $sql = "INSERT INTO reservation (customer_id, plate_id, start_date, end_date, price,payment_date)
    VALUES ('$cid', '$plate_id', '$Start_date', '$End_date', '$total_cost','$Payment_date')";


        if (mysqli_query($connection, $sql)) {
            echo "<script> alert('Car reserved successfully!')</script>";
            $state = 'R';
            $sql = "UPDATE car SET state='$state' WHERE plate_id='$plate_id' ";
            $result = mysqli_query($connection, $sql);
            echo "<script> window.location.href = 'welcome.php';</script>";
            exit;
            // header('location:welcome.php');
        } else {
            echo "<script>alert('Something went wrong')</script>";
        }
    } else {
        echo "<script> window.location.href = 'returncar_index.php';</script>";
        exit;
        // header('location:welcome.php');
    }
    //}
}
