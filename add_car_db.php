<?php
@include 'config.php';
session_start();



if(isset($_POST['add_car'])){
    $plate_id = $_POST['plate_id'];
    $brand = $_POST['brand'];
    $type = $_POST['type'];
    $year = $_POST['year'];
    $color = $_POST['color'];
    $seats = $_POST['seats'];
    $price = $_POST['price'];
    $insurance = $_POST['insurance'];
    $image = addslashes(file_get_contents($_FILES['f1']['tmp_name']));
    $office_id = $_POST['office_id'];

    $sql = "SELECT * FROM car WHERE plate_id='$plate_id'";
    $result = mysqli_query($conn,$sql);
	 $_SESSION['price']=$cost;
	 $_SESSION['image']=$img;


    if(mysqli_num_rows($result) == 0)
    {
        $sql = "INSERT INTO `car` (`plate_id`, `brand`, `type`, `year`,`color`, `price`, `seats`, `state`, `insurance`, `image`, `office_id`)
        VALUES ('$plate_id', '$brand', '$type', '$year','$color', '$price', '$seats', 'a', '$insurance', '$image', '$office_id');";
        $result = mysqli_query($conn,$sql);

        if($result)
        {
            echo"<script> alert('Car Added  Successfully')</script>";
            header('location:cars.php');
        }else {
            echo "<script>alert('Something went wrong')</script>";
             }
    }else {
        echo "<script>alert('Car already in database !!')</script>";
          }   
        }
    
?>
