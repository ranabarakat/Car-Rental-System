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
    <title>Search by Customer</title>
 
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
        <form action="advSearchCustomer.php" method="post">
          <br><br><br>
          <h2 style="color:white; text-align:center;font-family: Arial">BY Customer</h2><br>
				<br>
				<div style="background:white;opacity:85%;padding:50px;margin-right:300px;margin-left:300px ">
<div class="container">
<label style="font-size:130%;color:black;margin-top:10px"  >Customer ID:</label>
<input  style="padding: 5px; width: 400px;margin-top:1px" type='text' class="form-control" name='customer_id' id="customer_id"/>


<label style="font-size:130%;color:black;margin-top:10px" >SSN:</label>
<input style="padding: 5px; width: 400px;margin-top:1px" type='text' class="form-control" name='SSN' id="SSN">


<label style="font-size:130%;color:black;margin-top:10px"  >First Name:</label>
<input style="padding: 5px; width: 400px;margin-top:1px" type='text' class="form-control" name='fname' id="fname"/>


<label  style="font-size:130%;color:black;margin-top:10px"  >Last Name:</label>
<input style="padding: 5px; width: 400px;margin-top:1px" type='text' class="form-control" name='lname' id="lname"/>

<label style="font-size:130%;color:black;margin-top:10px"  >Phone:</label>
<input style="padding: 5px; width: 400px;margin-top:1px" type='text' class="form-control" name='phone' id="phone"/>


<label style="font-size:130%;color:black;margin-top:10px"  >Email:</label>
<input style="padding: 5px; width: 400px;margin-top:1px" type='text' class="form-control" name='email' id="email"/>


<label style="font-size:130%;color:black;margin-top:10px"  >Register date:</label>
<input style="padding: 5px; width: 400px;margin-top:1px" type='text' class="form-control" name='reg_date' id="reg_date"/>


<label style="font-size:130%;color:black;margin-top:10px"  >Sex:</label>
<input style="padding: 5px; width: 400px;margin-top:1px" type='text' class="form-control" name='sex' id="sex"/>


<label style="font-size:130%;color:black;margin-top:10px"  >Birth date:</label>
<input style="padding: 5px; width: 400px;margin-top:1px" type='text' class="form-control" name='birth_date' id="birth_date"/>


<label style="font-size:130%;color:black;margin-top:10px"  >Address:</label>
<input style="padding: 5px; width: 400px;margin-top:1px" type='text' class="form-control" name='address' id="address"/>
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
        $customer_id = $_POST['customer_id'];
        $SSN = $_POST['SSN'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $reg_date = $_POST['reg_date'];
        $sex = $_POST['sex'];
        $birth_date = $_POST['birth_date'];
        $address = $_POST['address'];
    
        $query="SELECT * 
        FROM customer 
        left join reservation  
        using(customer_id)
        left join car
        using(plate_id) 
        left join office 
        using(office_id)
        WHERE customer.customer_id > 0 ";

if($customer_id!="")  $query.="and customer.customer_id ='$customer_id' ";
if($SSN!="")  $query.="and SSN ='$SSN' ";
if($fname!="") $query.="and fname = '$fname' " ;
if($lname!="") $query.="and lname = '$lname' ";
if($phone!="") $query.="and phone = '$phone' ";
if($email!="")	$query.="and email ='$email' ";
if($reg_date!="") $query.="and reg_date ='$reg_date' ";
if($sex!="") $query.="and sex = '$sex' ";
if($birth_date!="") $query.="and birth_date ='$birth_date' ";
if($address!="") $query.="and address = '$address' ";


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