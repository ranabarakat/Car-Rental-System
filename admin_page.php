<!DOCTYPE html>
<html lang="en">
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
<script>
var select = document.querySelector('select');
var value = select.value;

select.addEventListener('change', function(event) {
  select.value = value;
  console.log('changed');
})
</script>
			<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> -->
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
			<form action="admin_page.php" method="post">
				<br><br><br>
				<h2 style="color:white; text-align:center">Welcome Admin</h2><br>


        
			</form>
		</div>
       <!-- <p>Admin page? <a href="admin_page.php">Admin.</a></p>-->
	
	</body>
</html>


