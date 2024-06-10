
<html>
	<head>
	<style>
	body {
	background-image: url('hii.jpg');
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
	}
	@media all and (min-width: 992px) {
	.navbar .nav-item .dropdown-menu{ display: none; }

	.navbar .nav-item:hover .dropdown-menu{ display: block; }
	.navbar .nav-item .dropdown-menu{ margin-top:0; }
    }
	</style>
		<link rel="stylesheet" media="screen" href="bootstrap.min.css">

			<title>Report 2</title>


			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <a class="navbar-brand" href="admin_page.php">
   						 <img src="hii.jpg" width="60" height="40" alt="">
					</a>
						<li class="nav-item active">
							<a class="nav-link" href="customer_info.php">Customers <span class="sr-only">(current)</span></a>
						</li>
            <li class="nav-item active">
							<a class="nav-link" href="cars.php">Cars <span class="sr-only">(current)</span></a>
						</li>
						
    	 <li class="nav-item dropdown">
		   <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown">  Reports  </a>
		    <ul class="dropdown-menu">
			  <li><a class="dropdown-item" href="carcustomer.php"> Car & Customer Information </a></li>
			  <li><a class="dropdown-item" href="bycar.php"> Car Information </a></li>
			  <li><a class="dropdown-item" href="carstate.php"> Car Status </a></li>
			  <li><a class="dropdown-item" href="bycustomer.php"> Reservations Of Customer By Email </a></li>
			  <li><a class="dropdown-item" href="dailypayments.php"> Daily Payments </a></li>
		    </ul>
		</li>
						</li>
					<li class="nav-item dropdown">
		   <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown">  Modifications  </a>
		    <ul class="dropdown-menu">
			  <li><a class="dropdown-item" href="add_car.php"> ADD CAR </a></li>
			  <li><a class="dropdown-item" href="delete_page.php"> Delete Car</a></li>
			 <li><a class="dropdown-item" href="update.php"> Update Car </a></li>
		    </ul>
		</li>
						<li class="nav-item active">
							<a class="nav-link" href="all_reservations.php">Reservations <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item dropdown">
		   <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown">  Search  </a>
		    <ul class="dropdown-menu">
			<li><a class="dropdown-item" href="advSearchCar.php"> By Car </a></li>
			  <li><a class="dropdown-item" href="advSearchCustomer.php"> By Customer</a></li>
			  <li><a class="dropdown-item" href="advSearchReserv.php"> By Reservation </a></li>
		    </ul>
		</li>

						<li class="nav-item">
							<a  class="nav-link" href="logout.php">Logout</a>
						</li>
      </ul>
    </div>
  </div>
</nav>

	</head>





	 <body class="modal-body">

     <div>
			<form action="report1.php" method="post">
				<br><br><br>
				<h2 style="color:white; text-align:center">Cars</h2><br>


        <table class="table table-hover table-light" style="width:35%">
  <thead class="thead-dark">
    <tr>

            <th scope="col">Plate_id</th>
     		<th scope="col">Brand</th>
      		<th scope="col">Type</th>
			<th scope="col">Year</th>
			<th scope="col">Color</th>
			<th scope="col">Price</th>
			<th scope="col">Seats</th>
			<th scope="col">State</th>
			<th scope="col">Insurance</th>
			<th scope="col">Image</th>
			<th scope="col">City (branch)</th>
			
    </tr>
  </thead>
  
 <?php
 include 'config.php';
    session_start();
    $startdate1=$_SESSION['start'];
    $enddate1=$_SESSION['end'];
    $platenumber=$_SESSION['plateno'];
    // Check connection
    $sql = "SELECT * FROM    (car natural join office)join reservation on car.plate_id=reservation.plate_id
    WHERE car.plate_id ='$platenumber' and reservation_date between '$startdate1' and'$enddate1' ";

   // $sql = "SELECT * From reservation WHERE reservation_date between '$startdate ' and'$enddate'";
    $result = mysqli_query($conn,$sql);
   
    // $result = mysqli_query($conn, " SELECT * FROM people WHERE email ='$email' " );
    // $row = mysqli_fetch_row($result);

    //echo $row[0];
    //echo $email;

    // if(mysqli_num_rows($query)>0){
    
    //     session_start();
    //     $_SESSION["user_message"] = "This email is already used";
    //     header("location:register.php");
        
    //     //echo"This email is already used";
    // }
    // echo $_POST["password"];
    $index=0;

	$row=mysqli_fetch_array($result)
    ?>
  	<tbody class="opacity-50" style="background:white;">
    <tr>
      		<th scope="row"><?php echo $row['plate_id']?></th>
      		
      		<td><?php echo $row['brand']?></td>
      		<td><?php echo $row['type']?></td>
			<td><?php echo $row['year']?></td>
			<td><?php echo $row['color']?></td>
			<td><?php echo $row['price']?></td>
			<td><?php echo $row['seats']?></td>
			<td><?php echo $row['state']?></td>
			<td><?php echo $row['insurance']?></td>
			<td><?php echo '<img src="data:image/jpg;base64,'.  base64_encode($row['image']).'" height="150" width="200" />' ?> </td>
			<td><?php echo $row['city']?>  (<?php echo $row['location']?>)</td>
           

    </tr>
	<?php  ?>
    </tbody>
</table>
<table class="table table-hover table-light" style="width: 50%" >
  <thead class="thead-dark">
    <tr>
      		<th scope="col">Customer#</th>
     		<th scope="col">Start date</th>
     		<th scope="col">End date</th>
      		<th scope="col">Price</th>
			<th scope="col">Reservation date</th>
			
    </tr>
  </thead>
  
 <?php
 include 'config.php';
    //session_start();
    $startdate2=$_SESSION['start'];
    $enddate2=$_SESSION['end'];
    $platenumber2=$_SESSION['plateno'];
    // Check connection
     $sql2 = "SELECT * FROM reservation 
     WHERE plate_id ='$platenumber2' and reservation_date between '$startdate2' and'$enddate2' ";
   // $sql = "SELECT * From reservation WHERE reservation_date between '$startdate ' and'$enddate'";
    $result2 = mysqli_query($conn,$sql2);
   
    // $result = mysqli_query($conn, " SELECT * FROM people WHERE email ='$email' " );
    // $row = mysqli_fetch_row($result);

    //echo $row[0];
    //echo $email;

    // if(mysqli_num_rows($query)>0){
    
    //     session_start();
    //     $_SESSION["user_message"] = "This email is already used";
    //     header("location:register.php");
        
    //     //echo"This email is already used";
    // }
    // echo $_POST["password"];
    $index=0;

	while ($row=mysqli_fetch_array($result2)) {       $index=$index+1;
		?>
  	<tbody class="opacity-50" style="background:white;">
    <tr>
      		<th scope="row"><?php echo $row['customer_id']?></th>
      		<td><?php echo $row['start_date']?></td>
      		<td><?php echo $row['end_date']?></td>
      		<td><?php echo $row['price']?></td>
            <td><?php echo $row['reservation_date']?></td>

           

    </tr>
	<?php } ?>
    </tbody>
</table>
			</form>
</body> 
</html>
