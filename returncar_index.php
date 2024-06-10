<?php
include_once("db_connect.php");
session_start();
include('returncar.php');
$id = $_SESSION['customer_id'];
?>
<!DOCTYPE html>
<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <link href="style.css" rel="stylesheet" type="text/css" media="screen">
    <title>Return Car</title>
    <style>
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;

        }

        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        @import url(https://fonts.googleapis.com/css?family=Raleway:300);
        @import url(https://fonts.googleapis.com/css?family=Lusitana:400,700);
    </style>
</head>
<!-- style="background-image:linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.4)) ,url('helpmenow.jpg'); -->

<body style="background-image:url('notnoww.jpg');background-attachment:scroll;background-size:contain;">
    <div class="bar">
        <div id="inline">
            <div class="logo">
                <h1 class="logo">Car Rental Company</h1>
            </div>
            <nav>
                <div id="inline">
                    <a style="text-decoration:none;" href="welcome.php">Reservation</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a style="text-decoration:none;" href="returncar_index.php">Return Car</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="dropdown">
                        <button class="btn" style="margin-top:-10px; background-color:rgba(39, 50, 85, 0.9);font-family:'Oswald', sans-serif">Search by
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                            <a href="advSearchCar.php">Car</a>
                            <a href="advSearchCustomer.php">Customer</a>
                            <a href="advSearchReserv.php">Reservation</a>
                        </div>
                    </div>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a style="text-decoration:none;" href="login_index.php">Logout</a>
                </div>
            </nav>
        </div>
    </div>
    <div class="title" style="margin-top:90px;">MANAGE BOOKINGS</div>
    <h1 class="text-center" style="font-size:26px;">Insert the plate number to return your car.</h1>
    <form action="returncar.php" method="post">
        <br><br><br><br><br><br>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">reservation id</th>
                    <!-- <th scope="col">Customer id</th> -->
                    <th scope="col">Plate number</th>
                    <th scope="col">Start date</th>
                    <th scope="col">End date</th>
                    <th scope="col">Total price</th>
                    <th scope="col">reservation date</th>
                    <th scope="col">payment date</th>
                </tr>
            </thead>

            <?php
            include 'db_connect.php';
            $query = "SELECT * FROM reservation  where customer_id='$id';";
            $result = mysqli_query($connection, $query);
            $index = 0;

            while ($row = mysqli_fetch_array($result)) {
                $index = $index + 1;
            ?>
                <tbody style="background:white;">
                    <tr>
                        <th scope="row"><?php echo $index ?></th>
                        <td><?php echo $row['reservation_id'] ?></td>

                        <td><?php echo $row['plate_id'] ?></td>
                        <td><?php echo $row['start_date'] ?></td>
                        <td><?php echo $row['end_date'] ?></td>
                        <td><?php echo $row['price'] ?></td>
                        <td><?php echo $row['reservation_date'] ?></td>
                        <td><?php echo $row['payment_date'] ?></td>

                    </tr>
                <?php } ?>
                </tbody>
        </table>
        <br>


        <body class="modal-body">
            <div>
                <form action="returncar.php" method="post">
                    <div class="form" style="box-shadow: 0px 2px 15px 0px rgba(0, 0, 0, 0.5);height:200px;float:left;margin-left:120px;width:300px;margin-top:0px;">


                        <div class="form-group" style="margin-left:-80px;">
                            <label style="width:40%;font-size:20;color:black;margin-left:100px;" class="form-control-plaintext">Plate Number:</label>
                            <input type='text' style="width:170px;" class="form-control" name='plate_id' id="plate_id" placeholder="Example: 1001" />
                        </div>

                        <button style="margin-left:80px;" class="btn" name="return_car"> Return Car! </button><br></br>

                    </div>

                </form>