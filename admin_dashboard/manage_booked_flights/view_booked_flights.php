<?php

session_start();

// ** NOTE: Below code checks if the admin is logged in or not. If he/she isn't logged in,
// it redirects the user to admin_login.php

if (!isset($_SESSION["admin_id"]))
{
   session_unset();
  session_write_close();
  $url = ".../admin_login/index.php";
  header("Location: $url");
} 


error_reporting(0);

// ** NOTE: This page will display all the booked flights details including details of the
// passenger who has booked that flight.


$con = new mysqli("localhost","root","","airline_system");

{


?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin | Manage booked flights</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />

<style>
    .border-box {
	border: 1px solid;
	border-color: #9a9a9a;
	background: #fff;
	border-radius: 4px;
	padding: 10px;
	width: 1000px;
	margin: 50px auto;
}

body {
    font-family: 'Roboto', sans-serif;
    line-height: 30px;
    background-image: url('assets/img/slide3.jpg');
           background-repeat: no-repeat;
           background-attachment: fixed;
           background-size: cover;
    }

</style>

</head>

<body>


    <div class="content-wrapper">
        <div class="container">
            <div class="border-box">
              <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line" style="font-weight: 900;
    padding-bottom: 20px;
    text-align:center;
    text-transform: uppercase;
    border-bottom: 1px solid #e7510c;
    padding-bottom: 3px;
    color: #e7510c;
    font-size: 30px;
    margin-bottom: 40px;
    padding-right: 10px;">List&nbsp; of &nbsp;Booked&nbsp; Flight&nbsp; Tickets</h1>
                    </div>
                </div>
                <div class="row" >
                 
                <div class="col-md-12">
                   
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Wanna go back to dashboard ?
                            <span>
                            <a href="../admin_dashboard.php" >
                            <button class="btn btn-primary">Go back to dashboard</button>
                              </a>              
                            </span>
                        </div>
                        
                        <div class="panel-body">
                            <div class="table-responsive table-bordered">
                                <table class="table">
                                    <thead>
                                        <tr>
                                        <th>#</th>
                                        <th>Flight no.</th>
                                        <th>Airline</th>
                                        <th>Passenger ID</th>
                                        <th>Passenger name </th>
                                        <th>Passport No. </th>
                                        <th>Fare paid</th>
                                        <th>Travellers count</th>
                                        <th>Reservation status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
<?php
$sql=mysqli_query($con,"select * from booked_flights");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>


 <tr>

<td><?php echo $cnt;?></td>
<td><?php echo htmlentities($row['flight_no']);?></td>
<td><?php echo htmlentities($row['airline']);?></td>
<td><?php echo htmlentities($row['passenger_id']);?></td>
<td><?php echo htmlentities($row['pass_name']);?></td>
<td><?php echo htmlentities($row['passport_no']);?></td>
<td>BDT.<?php echo htmlentities($row['fare_paid']);?></td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo htmlentities($row['passenger_count']);?></td>
<td><?php echo htmlentities($row['reservation_status']);?></td>                                            

</tr>
<?php 
$cnt++;
} ?>

                                        
</tbody>
</table>
</div>
</div>
</div>
                    
</div>
</div>


</div>
</div>
</div>

    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
<?php } ?>