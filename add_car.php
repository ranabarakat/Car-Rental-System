<?php include 'add_car_db.php'?>
<html>
	<head>
    <style>
	body {
	background-image: url('main.jpg');
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
	}
    @media all and (min-width: 992px) {
	.navbar .nav-item .dropdown-menu{ display: none; }
	.navbar .nav-item:hover .dropdown-menu{ display: block; }
	.navbar .nav-item .dropdown-menu{ margin-top:0; }}
    
	</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<link href="style.css" rel="stylesheet" type="text/css" media="screen">
<!-- <link rel="stylesheet" media="screen" href="bootstrap.min.css"> -->

			<title>Add Car</title>

			<div class="bar">
    <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation"> -->
      <!-- <span class="navbar-toggler-icon"></span> -->
    <!-- </button> --> 

	
        <div id="inline">
            <div >
                <!-- <h1 class="logo">Car Rental Company</h1> -->
				<a class="navbar-brand" href="admin_page.php">
   						 <img src="logoo.png" width="80" height="40" alt="">
					</a>
				
            </div>
            <nav style="margin-left:150px">
				
				<a style="text-decoration:none;" href="customer_info.php">Customers <span class="sr-only">(current)</span></a>
                &nbsp;&nbsp;&nbsp;&nbsp;
				<a style="text-decoration:none;" href="cars.php">Cars <span class="sr-only">(current)</span></a>
                &nbsp;&nbsp;&nbsp;&nbsp;
				<!-- <li class="nav-item dropdown"> -->
                <!-- <a style="text-decoration:none;" href="#" >  Reports  </a>
		   	 <ul class="dropdown-menu">
			  <li><a class="dropdown-item" href="carcustomer.php"> Car & Customer Information </a></li>
			  <li><a class="dropdown-item" href="cars.php"> Car Information </a></li>
			  <li><a class="dropdown-item" href="carstate.php"> Car Status </a></li>
			  <li><a class="dropdown-item" href="bycustomer.php"> Reservations Of Customer By Email </a></li>
			  <li><a class="dropdown-item" href="dailypayments.php"> Daily Payments </a></li>
		    </ul> -->

			<select onchange="location = this.value" style="font-family: 'Oswald', sans-serif;
    font-weight: 500;
    text-transform: uppercase;
    text-decoration: none;
    color: #ffffff;
    margin: 0;
    font-size: 16px;
    letter-spacing: 1px;
    position: relative;
    display: inline-block;" name="cars" >
			<div id="select2">
			<option  disabled selected hidden>Reports</option>
			<option  style="text-decoration:none;color:black;" value="carcustomer.php"> Car & Customer Information </option>
			<option style="text-decoration:none;color:black;" value="bycar.php">Car Information</option>

			<option style="text-decoration:none; color:black;" value="carstate.php">Car Status</option>
			<option style="text-decoration:none;color:black;" value="bycustomer.php">Reservations Of Customer By Email</option>
			<option style="text-decoration:none;color:black;" value="dailypayments.php"> Daily Payments </option>

		</div>
			</select>
			<select onchange="location = this.value" style="font-family: 'Oswald', sans-serif;
    font-weight: 500;
    text-transform: uppercase;
    text-decoration: none;
    color: #ffffff;
    margin: 0;
    font-size: 16px;
    letter-spacing: 1px;
    position: relative;
    display: inline-block;" name="cars" >
			<div id="select2">
			<option  disabled selected hidden>Modifications</option>
			<option  style="text-decoration:none;color:black;" value="add_car.php"> ADD CAR  </option>
			<option style="text-decoration:none;color:black;" value="delete_page.php"> Delete Car</option>
			<option style="text-decoration:none; color:black;" value="update_car.php"> Update Car </option>
		</div>
			</select>
			&nbsp;&nbsp;&nbsp;

			<a style="text-decoration:none"; href="all_reservations.php">Reservations <span class="sr-only">(current)</span></a>

                &nbsp;&nbsp;&nbsp;
				<select onchange="location = this.value" style="font-family: 'Oswald', sans-serif;
    font-weight: 500;
    text-transform: uppercase;
    text-decoration: none;
    color: #ffffff;
    margin: 0;
    font-size: 16px;
    letter-spacing: 1px;
    position: relative;
    display: inline-block;" name="cars" >
			<div id="select2">
			<option  disabled selected hidden>Search</option>
			<option  style="text-decoration:none;color:black;" value="advSearchCar.php"> By Car  </option>
			<option style="text-decoration:none;color:black;" value="advSearchCustomer.php"> By Customer</option>
			<option style="text-decoration:none; color:black;" value="advSearchReserv.php"> By Reservation </option>
		</div>
			</select>
			&nbsp;&nbsp;&nbsp;

                <a style="text-decoration:none"; style="text-decoration:none;" href="login_index.php">Logout</a>
				&nbsp;&nbsp;&nbsp;

            </nav>
        </div>
    




    <!-- <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <a class="navbar-brand" href="admin_page.php">
   						 <img src="logoo.png" width="80" height="40" alt="">
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
			  <li><a class="dropdown-item" href="cars.php"> Car Information </a></li>
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
			 <li><a class="dropdown-item" href="update_car.php"> Update Car </a></li>
		    </ul>
		</li>
						<li class="nav-item active">
							<a class="nav-link" href="all_reservations.php">Reservations <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item dropdown">
		   <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown">  Advanced Search  </a>
		    <ul class="dropdown-menu">
			  <li><a class="dropdown-item" href="advancedcar.php"> By Car </a></li>
			  <li><a class="dropdown-item" href="advancedcustomer.php"> By Customer</a></li>
			  <li><a class="dropdown-item" href="advancedreservation.php"> By Reservation </a></li>
		    </ul>
		</li>

						<li class="nav-item">
							<a  class="nav-link" href="logout.php">Logout</a>
						</li>
      </ul>
    </div>
  </div>
</nav> -->


	
</head>

	<body class="modal-body">
		<div>
			<form action="add_car.php" method="post" enctype="multipart/form-data">
               
				<h2 style="color:white; text-align:center">ADD A CAR</h2>

<div style="background:lightgrey;opacity:90%; " >


<div class="form-group">
	<label style="width:20%;font-size:20;color:black;margin-left:20%" class="form-control-plaintext" >Plate No.:</label>
	<input required style="width:25%;font-size:20;color:black;margin-left:20%"type='text' class="form-control" name='plate_id' id="plate_id"/>


	<label style="width:20%;font-size:20;color:black;margin-left:20%" class="form-control-plaintext">Select Car brand:</label>
	<input required style="width:25%;font-size:20;color:black;margin-left:20%" type='text' class="form-control" name='brand' id="brand">

	


	<label style="width:20%;font-size:20;color:black;margin-left:20%" class="form-control-plaintext">Select Car Type:</label>
	<input required style="width:25%;font-size:20;color:black;margin-left:20%"type='text' class="form-control" name='type' id="type">


	<label  style="width:20%;font-size:20;color:black;margin-left:20%" class="form-control-plaintext" >Year:</label>
				<select required style="width:14%;font-size:20;color:black;margin-left:20%"type='number' class="form-control" name='year' id="year" >
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
					</select>

     <label style="width:20%;font-size:20;color:black;margin-left:20%" class="form-control-plaintext">Color:</label>
	 <input required style="width:25%;font-size:20;color:black;margin-left:20%" type='text' class="form-control" name='color'  id="color">

     <label style="width:20%;font-size:20;color:black;margin-left:20%" class="form-control-plaintext" >Price/Day:</label>
	<input required style="width:25%;font-size:20;color:black;margin-left:20%"type='number' class="form-control" name='price' id="price"/>

	<label style="width:20%;font-size:20;color:black;margin-left:20%" class="form-control-plaintext" >No. of Seats:</label>
	<input required style="width:25%;font-size:20;color:black;margin-left:20%"type='number' class="form-control" name='seats'id="seats"/><br>

	

	<label style="width:20%;font-size:20;color:black;margin-left:20%" class="form-control-plaintext" >Insurance:</label>
	<input required style="width:25%;font-size:20;color:black;margin-left:20%"type='number' class="form-control" name='insurance'id="insurance"/>

	<label style="width:20%;font-size:20;color:black;margin-left:20%" class="form-control-plaintext" >Choose Image:</label>
    
	<input required style="width:25%;font-size:20;color:black;margin-left:20%"type="file" value="upload" class="form-control" name="f1" accept="png,jpg,jpeg" id="img" /><br>

	<label style="width:20%;font-size:20;color:black;margin-left:20%" class="form-control-plaintext" >Office ID</label>
	<input required style="width:25%;font-size:20;color:black;margin-left:20%"type='text' class="form-control" name="office_id" id="office_id"/><br>

</div>
<div style="margin-left:60%">
<input style="color:white;background-color:red;border: none;font-size:20;margin-left:30%" class="btn btn-primary btn-lg" herf="cars.php" id=submit type="submit" name="add_car" value="ADD CAR"> <BR></BR>
<!--<a href="cars.php" class="btn">Cars</a>-->
</div>

</div>

</form>
</div>


</body>
</html>

