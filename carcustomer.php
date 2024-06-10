<?php
include 'config.php';
session_start();
if(isset($_POST['go'])){
    $startdate=$_SESSION['start'] = $_POST["start"];
    $enddate =$_SESSION['end']= $_POST["end"];
   
    
    
        // session_start();
        // $_SESSION["user_message"] = "This email is already used";
    header("location:report1.php");
        
        //echo"This email is already used";
    
   
    unset($_POST['go']);
    }
    ?>
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
        <script>
        function validateForm(){
        var date1 = document.forms["myform"]["start"].value;
        var date2 =  document.forms["myform"]["end"].value;
        var email = document.forms["myform"]["email"].value;

        // if (date1==""||date2="")
        // {
        //     alert("Please enter dates");
        //     return false;
        // }
        // if (email=="")
        // {
        //     alert("Please enter Email");
        //     return false;
        // }
        // if (date1>date2)
        // {
        //     alert("Please enter correct data");
        //     return false;
        // }
        
        }

        </script>
        <title>Report1</title>
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
			<form name="myform" action="" onsubmit="return validateForm()" method="post">
				<br><br><br>
				<h2 style="color:white; text-align:center">Enter the dates to get reservation</h2>

				<div style="background:lightgrey;opacity:90%; " >


					<div class="form-group">
							<label style="width:20%;font-size:20;color:black;margin-left:20%" class="form-control-plaintext" >From:</label>
							<input style="width:25%;font-size:20;color:black;margin-left:20%"type='date' class="form-control" name="start" title="start" id="start"/>
                            <label style="width:20%;font-size:20;color:black;margin-left:20%" class="form-control-plaintext" >To:</label>
							<input style="width:25%;font-size:20;color:black;margin-left:20%"type='date' class="form-control" name="end" title="end" id="end"/>
                            <!-- <input class="txt" type="email" name="email" title="email" placeholder="Email" /> -->

                        </div>
					
					<div style="margin-left:60%">
						<button type="submit"  style="color:white;background-color:red;border: none;font-size:20;margin-left:30%" class="btn btn-primary btn-lg" name= "go"> Get information </button><br></br>
					</div>

				</div>

			</form>
		</div>

</body>
</html>
