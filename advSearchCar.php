<?php
include_once("db_connect.php");
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->

    <link href="style.css" rel="stylesheet" type="text/css" media="screen">
    <title>Search by Car</title>

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

        body {
            background-image: url('main.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>

</head>

<body>
    <div class="bar">
        <div id="inline">
            <div class="logo">
                <h1 class="logo"> Car Rental Company</h1>
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

    <body class="modal-body">
        <div>
            <form action="advSearchCar.php" method="post">
                <br><br><br>
                <h1 style="color:white; text-align:center;font-family: Arial"> SEARCH BY CAR</h1><br>
                <br>
                <div style="background:white;padding:50px;margin-right:300px;margin-left:300px;border-radius:18px; ">
                    <div class="container">
                        <label style="font-size:130%;color:black;margin-top:10px">Plate ID:</label>
                        <input style="padding: 5px; width: 400px;margin-top:1px" type='text' class="form-control" name='plate_id' id="plate_id" />


                        <label style="font-size:130%;color:black;margin-top:10px">Brand:</label>
                        <input style="padding: 5px; width: 400px;margin-top:1px" type='text' class="form-control" name='brand' id="brand">


                        <label style="font-size:130%;color:black;margin-top:10px">Type:</label>
                        <input style="padding: 5px; width: 400px;margin-top:1px" type='text' class="form-control" name='type' id="type" />

                        <label style="font-size:130%;color:black;margin-top:10px">Year:</label>
                        <select style="padding: 5px; width: 200px;margin-top:1px" type='number' class="form-control" name='year' id="year">
                            <option value="">-----Choose----</option>
                            <option value="1999">1999</option>
                            <option value="1999">2000</option>
                            <option value="2001">2001</option>
                            <option value="2002">2002</option>
                            <option value="2003">2003</option>
                            <option value="2004">2004</option>
                            <option value="2005">2005</option>
                            <option value="2006">2006</option>
                            <option value="2007">2007</option>
                            <option value="2008">2008</option>
                            <option value="2009">2009</option>
                            <option value="2010">2010</option>
                            <option value="2011">2011</option>
                            <option value="2012">2012</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2022">2023</option>
                            <option value="2022">2024</option>
                        </select>


                        <label style="font-size:130%;color:black;margin-top:10px">Color:</label>
                        <input style="padding: 5px; width: 400px;margin-top:1px" type='text' class="form-control" name='color' id="color" />


                        <label style="font-size:130%;color:black;margin-top:10px">Price per Day:</label>
                        <input style="padding: 5px; width: 400px;margin-top:1px" type='text' class="form-control" name='priced' id="priced" />


                        <label style="font-size:130%;color:black;margin-top:10px">No. of seats:</label>
                        <input style="padding: 5px; width: 400px;margin-top:1px" type='text' class="form-control" name='seats' id="seats" />


                        <label style="font-size:130%;color:black;margin-top:10px">State:</label>
                        <input style="padding: 5px; width: 400px;margin-top:1px" type='text' class="form-control" name='state' id="state" />


                        <label style="font-size:130%;color:black;margin-top:10px">Insurance:</label>
                        <input style="padding: 5px; width: 400px;margin-top:1px" type='text' class="form-control" name='insurance' id="insurance" />


                        <label style="font-size:130%;color:black;margin-top:10px">Image path:</label>
                        <input style="padding: 5px; width: 400px;margin-top:1px" type='text' class="form-control" name='image' id="image" />


                        <label style="font-size:130%;color:black;margin-top:10px">Office ID:</label>
                        <input style="padding: 5px; width: 400px;margin-top:1px" type='text' class="form-control" name='office_id' id="office_id" />

                    </div>
                    <div class="container">

                        <button type="submit" name="submit" class="btn" value='search' style="margin-left:255px;"> Search </button><br><br>
                    </div>
                </div>
        </div>

        <div style="overflow:scroll;">
            <br><br><br>

            <table class="table table-hover table-light" style="margin-right:50px; width:100%; height:100%;overflow:auto;">

                <thead class="thead-dark" style="background-color:white; padding:2px;">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Plate ID</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Type</th>
                        <th scope="col">Year</th>
                        <th scope="col">Color</th>
                        <th scope="col">Price</th>
                        <th scope="col">Seats</th>
                        <th scope="col">State</th>
                        <th scope="col">Insurance</th>
                        <th scope="col">Image</th>
                        <!-- <th scope="col">Office ID</th> -->
                        <th scope="col">City</th>
                        <th scope="col">Customer ID</th>
                        <th scope="col">SSN</th>
                        <th scope="col">First name</th>
                        <th scope="col">Last name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Registeration date</th>
                        <th scope="col">Sex</th>
                        <th scope="col">Birth date</th>
                        <th scope="col">Address</th>
                        <th scope="col">Reservation ID</th>
                        <th scope="col">Start date</th>
                        <th scope="col">End date</th>
                        <th scope="col">Reservation date</th>
                        <th scope="col">Total price</th>
                    </tr>
                </thead>

                <?php
                include 'db_connect.php';
                if (isset($_POST['submit'])) {
                    $plate_id = $_POST['plate_id'];
                    $brand = $_POST['brand'];
                    $type = $_POST['type'];
                    $year = $_POST['year'];
                    $color = $_POST['color'];
                    $priced = $_POST['priced'];
                    $seats = $_POST['seats'];
                    $state = $_POST['state'];
                    $insurance = $_POST['insurance'];
                    $office_id = $_POST['office_id'];

                    $query = "SELECT * 
	from car
	join office Using(office_id)
	left join reservation 
	using(plate_id)
    left join customer  
	using(customer_id) WHERE car.plate_id>0 ";

                    if ($brand != "")  $query .= "and car.brand ='$brand' ";

                    if ($color != "")  $query .= "and color ='$color' ";
                    if ($type != "") $query .= "and type = '$type' ";
                    if ($year != "") $query .= "and year = '$year' ";
                    if ($seats != "") $query .= "and seats = '$seats' ";
                    if ($priced != "")    $query .= "and price ='$priced' ";
                    if ($insurance != "")    $query .= "and insurance = '$insurance' ";
                    //if($image!="") $query.="and image = '$image' ";
                    if ($office_id != "") $query .= "and office.office_id ='$office_id' ";
                    //if($state!="") $query.="and state = '$state' ";
                    if ($plate_id != "") $query .= "and car.plate_id = '$plate_id' ";

                    $index = 0;
                    $result = mysqli_query($connection, $query);

                    while ($row = mysqli_fetch_array($result)) {
                        $index++;
                ?>
                        <tbody class="opacity-70" style="background:white;">
                            <tr>
                                <th scope="row"><?php echo $index ?></th>
                                <td><?php echo $row['plate_id'] ?></td>
                                <td><?php echo $row['brand'] ?></td>
                                <td><?php echo $row['type'] ?></td>
                                <td><?php echo $row['year'] ?></td>
                                <td><?php echo $row['color'] ?></td>
                                <td><?php echo $row['price'] ?></td>
                                <td><?php echo $row['seats'] ?></td>
                                <td><?php echo $row['state'] ?></td>
                                <td><?php echo $row['insurance'] ?></td>

                                <td><?php echo '<img src="data:image/png;base64,' . base64_encode($row['image']) . '"/>' ?></td>
                                <td><?php echo $row['city'] ?></td>
                                <td><?php echo $row['customer_id'] ?></td>
                                <td><?php echo $row['SSN'] ?></td>
                                <td><?php echo $row['fname'] ?></td>
                                <td><?php echo $row['lname'] ?></td>
                                <td><?php echo $row['phone'] ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td><?php echo $row['reg_date'] ?></td>
                                <td><?php echo $row['sex'] ?></td>
                                <td><?php echo $row['birth_date'] ?></td>
                                <td><?php echo $row['address'] ?></td>
                                <td><?php echo $row['reservation_id'] ?></td>
                                <td><?php echo $row['start_date'] ?></td>
                                <td><?php echo $row['end_date'] ?></td>
                                <td><?php echo $row['reservation_date'] ?></td>
                                <td><?php echo $row['price'] ?></td>

                            </tr>

                    <?php }
                } ?>

                    </form>
        </div>
        </table>
    </body>




</body>

</html>