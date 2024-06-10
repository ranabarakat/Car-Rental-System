<?php
include_once("db_connect.php");
include('login.php');
include('reserve.php');
?>
<!DOCTYPE html>
<html>

<head>>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link href="style.css" rel="stylesheet" type="text/css" media="screen">
    <title>Reserve a car</title>


    <script type=text/javascript>
        function do_reserve() {

            var email = document.forms["reserve-form"]["email"].value;

            $.ajax({
                type: 'post',
                url: 'welcome.php',
                data: {
                    do_reserve: "do_reserve",
                    email: email
                },
                success: function(response) {
                    if (response == "success") {
                        window.location.href = "reserve.php";
                    } else {

                        alert("Wrong Details");
                    }
                }
            });
        }
    </script>
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

<body style="background-image:url('helpplease.jpg');background-attachment:scroll;background-size:contain;">
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

    <div class="title">RENT A CAR!</div>
    <h1 class="text-center">Choose a car and make a reservation.</h1>
    <br><br><br><br><br><br>
    <div>
        <!-- <form id="choose-form" method="post"> -->
        <div class="spec-box-container">
            <?php
            include 'db_connect.php';
            $query = "SELECT * FROM car join office on car.office_id=office.office_id where car.state='A'  ORDER BY city,`location` ";
            $result = mysqli_query($connection, $query);
            $index = 0;
            while ($row = mysqli_fetch_array($result)) {
                $index = $index + 1;
            ?>
                <div class="spec-box text-center">
                    <br>
                    <?php echo '<img src="data:image/png;base64,' . base64_encode($row['image']) . '"/>' ?>

                    <!-- <p class="price"><sup>$</sup>0<sub>/mo</sub></p> -->
                    <ul class="features-list">
                        <br>
                        <!-- <div id="plate_id<?php echo $index ?>"><?php echo $row['plate_id'] ?></div> -->
                        <li class="<?php echo $index ?>" style="text-align: left;"><strong>Plate number:&nbsp;</strong> <?php echo $row['plate_id'] ?>&nbsp;&nbsp;</li><br>
                        <li style="text-align: left;"><strong>Brand:&nbsp;</strong> <?php echo $row['brand'] ?>&nbsp;&nbsp;</li><br>
                        <li style="text-align: left;"><strong>Type:&nbsp;</strong> <?php echo $row['type'] ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li><br>
                        <li style="text-align: left;"><strong>Year:&nbsp;</strong> <?php echo $row['year'] ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li><br>
                        <li style="text-align: left;"><strong>Color:&nbsp;</strong> <?php echo $row['color'] ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li><br>
                        <li style="text-align: left;"><strong>Seats:&nbsp;</strong> <?php echo $row['seats'] ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li><br>
                        <li style="text-align: left;"><strong>Branch:&nbsp;</strong> <?php echo $row['location'] . ", " . $row['city'] . ", " . $row['country'] ?>&nbsp;&nbsp;</li><br>
                        <li style="text-align: left;"><strong>Price:&nbsp;</strong> <?php echo "$" . $row['price'] ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li><br>
                    </ul>

                    <button class="btn" name="choose" id="<?php echo $row['plate_id'] ?>">Choose dates</button>
                    <!-- </form> -->
                    <!-- onsubmit="return do_reserve();" -->
                    <form id="reserve-form" method="post" action="">
                        <div id="choosedates" class="modal">

                            <!-- Modal content -->
                            <div class="modal-content " style="height:55%; margin-top:150px;">
                                <div class="modal-header">
                                    <span style="margin-top: 6px;" class="close">&times;</span>
                                    <div style="font-family:customFont;font-weight: 500;font-size:30px;letter-spacing:1px;">CHOOSE DESIRED RENT DATES</div>
                                </div>
                                <div class="modal-body" style="margin-right: 115px;">
                                    <label for="startdate">Start Date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                    <input type="date" name="startdate" id="startdate" required /><br>
                                    <label for="enddate">End Date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                    <input type="date" name="enddate" id="enddate" required /><br>
                                    <label for="paymentdate">Payment Date:</label>
                                    <input type="date" name="paymentdate" id="paymentdate" required /><br>
                                    <div style="margin-left:-100px;" class="error-input email-error"></div>
                                    <div id=inline>
                                        <!-- <input type="email" style="border-color:gray;color:black;border-radius:10px;margin-bottom:0px; width:200px;" placeholder="Email Address" name="email" id="email" /> -->
                                        <input type="text" style="border-color:gray;color:black;border-radius:10px;margin-bottom:0px" placeholder="Plate Number" name="plate_id" id="plate_id" />
                                    </div>
                                    <button type="submit" name="reserve" id="reserve" style="margin-left:90px;" class="btn">RESERVE CAR</button>
                                </div>
                            </div>

                        </div>

                        <script>
                            // Get the modal
                            var modal = document.getElementById("choosedates");

                            // Get the button that opens the modal
                            var btn = document.getElementsByName("choose");

                            // Get the <span> element that closes the modal
                            var span = document.getElementsByClassName("close")[0];

                            // When the user clicks the button, open the modal
                            for (i = 0; i < btn.length; i++) {
                                btn[i].onclick = function() {
                                    // alert(this.id);

                                    var plate_id = this.id;

                                    $.ajax({

                                        type: "POST",

                                        url: "welcome.php",

                                        data: plate_id,

                                        success: function(html) {

                                            if (response == "success") {
                                                window.location.href = "reserve.php";
                                            } else {

                                                alert("Wrong Details");
                                            }

                                        }
                                    });

                                    modal.style.display = "block";
                                }

                                // When the user clicks on <span> (x), close the modal
                                span.onclick = function() {
                                    modal.style.display = "none";
                                }

                                // When the user clicks anywhere outside of the modal, close it
                                window.onclick = function(event) {
                                    if (event.target == modal) {
                                        modal.style.display = "none";
                                    }
                                }
                            }
                        </script>
                    </form>
                    <!-- <script src="reserve_validation.js"></script> -->
                </div>
            <?php } ?>
        </div>
        <div class="title" style="color:rgb(39, 50, 85); font-size:50;margin-top:0px;margin-left:500px;border-bottom:5px solid rgb(39, 50, 85);width:380;">ABOUT US</div>
        <p style="color:black; margin-left:500px;">hi it's Rana I'm bored sdjkkjsndnksdncksn</p>
    </div>

</body>

</html>