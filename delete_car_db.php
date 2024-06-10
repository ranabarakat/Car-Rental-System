<?php
include 'config.php';

if(isset($_POST['delete_car'])){
    $plate_id = $_POST['plate_id'];


    $sql = "SELECT * FROM car WHERE plate_id='$plate_id'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) != 0) {

        $sql = "DELETE FROM car WHERE plate_id='$plate_id'";
        $result = mysqli_query($conn,$sql);

        if ($result) {
            echo "<script> alert('Delete is Done Successfully')</script>";
            echo "<script> window.location.href = 'cars.php';</script>";
            exit;       
         } else {
            echo "<script>alert('Something went wrong')</script>";
        }
    } else {
        echo "<script>alert('Please enter existing plate number!')</script>";
        echo "<script> window.location.href = '#';</script>";
      

    }




   


    
}
    
?>