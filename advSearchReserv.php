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
    <title>Search by Reservation</title>
 
    <style>
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
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
        <form action="advSearchReserv.php" method="post">
          <br><br><br>
          <h2 style="color:white; text-align:center;font-family: Arial">BY Reservation</h2><br>
				<br>
				<div style="background:white;opacity:85%;padding:50px;margin-right:300px;margin-left:300px ">
<div class="container">
<label style="font-size:130%;color:black;margin-top:10px" >Reservation ID:</label>
<input  style="padding: 5px; width: 400px;margin-top:1px" type='text' class="form-control" name='reservation_id' id="reservation_id"/>


<label style="font-size:130%;color:black;margin-top:10px" >Customer ID:</label>
<input  style="padding: 5px; width: 400px;margin-top:1px" type='text' class="form-control" name='customer_id' id="customer_id"/>


<label style="font-size:130%;color:black;margin-top:10px" >Plate ID:</label>
<input  style="padding: 5px; width: 400px;margin-top:1px" type='text' class="form-control" name='plate_id' id="plate_id"/>


<label style="font-size:130%;color:black;margin-top:10px"  >Start date:</label>
<input style="padding: 5px; width: 400px;margin-top:1px" type='text' class="form-control" name='start_date' id="start_date"/>


<label style="font-size:130%;color:black;margin-top:10px"  >End date:</label>
<input style="padding: 5px; width: 400px;margin-top:1px" type='text' class="form-control" name='end_date' id="end_date"/>


<label style="font-size:130%;color:black;margin-top:10px"  >Price:</label>
<input style="padding: 5px; width: 400px;margin-top:1px" type='text' class="form-control" name='price' id="price"/>


<label style="font-size:130%;color:black;margin-top:10px"  >Reservation date:</label>
<input style="padding: 5px; width: 400px;margin-top:1px" type='text' class="form-control" name='reservation_date' id="reservation_date"/>


</div>
<div class="container">

<button  type="submit" name="submit" class="btn btn-success" value='search' style="background:red;margin-left:30%;margin-top:7px;padding:20px"> Search </button><br><br>
</div>
</div>
</div>

<table class="table table-hover table-light">

<thead class="thead-dark">
  <tr>
          <th scope="col">No.</th>
          <th scope="col">Plate ID</th>
          <th scope="col">Brand</th>
          <th scope="col">Type</th>
          <th scope="col">Year</th>
          <th scope="col">Color</th>
          <th scope="col">Price</th>
          <th scope="col">No. of Seats</th>
          <th scope="col">State</th>
          <th scope="col">Insurance</th>
          <th scope="col">Image</th>
          <th scope="col">Office ID</th>
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
	if(isset($_POST['submit'])){
        $reservation_id = $_POST['reservation_id'];
        $customer_id = $_POST['customer_id'];
        $plate_id = $_POST['plate_id'];
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];
        $price = $_POST['price'];
        $reservation_date = $_POST['reservation_date'];
    
        $query="SELECT * FROM reservation 
		 join car using(plate_id)
		 join office using(office_id)
		 join customer using(customer_id) WHERE plate_id>0 ";

if($reservation_id!="")  $query.="and reservation.reservation_id ='$reservation_id' ";
if($customer_id!="")  $query.="and customer_id ='$customer_id' ";
if($plate_id!="")  $query.="and plate_id ='$plate_id' ";
if($start_date!="") $query.="and start_date ='$start_date' ";
if($end_date!="") $query.="and end_date ='$end_date' ";
if($price!="") $query.="and price = '$price' ";
if($reservation_date!="") $query.="and reservation_date ='$reservation_date' ";

$index=0;
	$result = mysqli_query($connection,$query); 

		while ($row=mysqli_fetch_array($result))  
        { $index++;
			?>
            <tbody class="opacity-70" style="background:white;">
    <tr>
      <th scope="row"><?php echo $index?></th>
            <td><?php echo $row['plate_id'] ?></td>
	        <td><?php echo $row['brand']?></td>
            <td><?php echo $row['type']?></td>
            <td><?php echo $row['year']?></td>
			<td><?php echo $row['color']?></td>
			<td><?php echo $row['price']?></td>
			<td><?php echo $row['seats']?></td>
            <td><?php echo $row['state']?></td>
			<td><?php echo $row['insurance']?></td>
			<td><?php echo $row['image']?></td>
			<td><?php echo $row['office_id']?></td>
			<td><?php echo $row['city']?></td>
            <td><?php echo $row['customer_id']?></td>
            <td><?php echo $row['SSN']?></td>
            <td><?php echo $row['fname']?></td>
            <td><?php echo $row['lname']?></td>
            <td><?php echo $row['phone']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['password']?></td>
            <td><?php echo $row['reg_date']?></td>
            <td><?php echo $row['sex']?></td>
            <td><?php echo $row['birth_date']?></td>
            <td><?php echo $row['address']?></td>
            <td><?php echo $row['reservation_id']?></td>
            <td><?php echo $row['start_date']?></td>
            <td><?php echo $row['end_date']?></td>
            <td><?php echo $row['reservation_date']?></td>
            <td><?php echo $row['price']?></td>
        </tr>

    
	<?php }} ?>

			</form>
		</div>
	</body>
        


    
</body>

</html>