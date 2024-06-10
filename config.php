<?php
/* Database connection start */
$conn = mysqli_connect('localhost','root','','carRentalSystem');

if (mysqli_connect_errno()) 
{
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}


?>