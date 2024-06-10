<?php
include 'db_connect.php';

if (isset($_POST['return_car'])) {
    $plate_id = $_POST['plate_id'];

    $sql = "DELETE FROM reservation WHERE plate_id='$plate_id'";
    $result = mysqli_query($connection, $sql);

    if ($connection->affected_rows) {
        echo "<script> alert('Reservation deleted successfully!')</script>";
        $state = 'A';
        $sql = "UPDATE car SET state='$state' WHERE plate_id='$plate_id';";
        $result = mysqli_query($connection, $sql);
        echo "<script> window.location.href = 'returncar_index.php';</script>";
        exit;
        // header('location:returncar_index.php');
    } else {
        echo "<script>alert('You have not reserved a car with this plate number!')</script>";
        echo "<script> window.location.href = 'returncar_index.php';</script>";
    }
}
