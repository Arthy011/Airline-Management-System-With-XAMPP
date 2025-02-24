<?php
session_start();

// ** NOTE: Below code checks if the passenger is logged in or not. If he/she isn't logged in,
// it redirects the passenger to passenger_login.php

if (!isset($_SESSION["passenger_id"])) {
    session_unset();
    session_write_close();
    $url = "../passenger_login_signup/index.php";
    header("Location: $url");
    exit;
}

// ** NOTE: Connecting to the database to fetch all flights
$mysqli = new mysqli("localhost", "root", "", "airline_system");

// Check the connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Fetch all available flights
$sql = "SELECT * FROM flights";
$result = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

    <input type="checkbox" id="nav-toggle"> 
    <div class="sidebar">
        <div class="sidebar-brand">
           <h2>
               <center>
                   <br/>
                <span>Airline Management</span>
                </center>
           </h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="index.php"><span class="las la-home"></span>
                    <span>Dashboard</span></a>
                </li>
                <br>
                <li>
                    <a href="flights_available.php" class="active"><span class="las la-plane"></span>
                    <span>Flights Available</span></a>
                </li>
                <br>
                <li>
                    <a href="ticket.php"><span class="las la-ticket-alt"></span>
                    <span>Book Ticket</span></a>
                </li>
                <br/>
                <li>
                    <a href="booking.php"><span class="las la-clipboard-list"></span>
                    <span>View Bookings</span></a>
                </li>
                <br/>
                <li>
                    <a href="print_ticket.php" ><span class="las la-clipboard-list"></span>
                    <span>Print Ticket</span></a>
                </li>
                <br/>
                <li>
                    <a href="status.php"><span class="las la-signal"></span>
                    <span>Flight Status</span></a>
                </li>
                <br/>
                <li>
                    <a href="profile.php" ><span class="las la-user-circle"></span>
                    <span>Profile</span></a>
                </li>
                <br/>
                <li>
                    <a href="../passenger_login_signup/passenger_logout.php"><span class="las la-sign-out-alt"></span>
                    <span>Sign Out</span></a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
           <h2>
             <label for="nav-toggle">
                 <span class="las la-bars"></span>
             </label>
             Flights Available
            </h2>
        </header> 
        <main>
        <div class="card-single">
        <h2>Search for Flights</h2><button id="myButton" type="button" class="btn btn-primary">Search Flight Details</button>
        <script type="text/javascript">
         document.getElementById("myButton").onclick = function () {
             location.href = "search.php";
         };
        </script>
        </div>

        <!-- Display All Available Flights -->
        <div class="container">
            <h3 class="mt-5">All Available Flights</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Flight No</th>
                        <th>Airline</th>
                        <th>Source</th>
                        <th>Destination</th>
                        <th>Departure Date</th>
                        <th>Arrival Date</th>
                        <th>Class</th>
                        <th>Price</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>".$row['flight_no']."</td>
                                    <td>".$row['airline']."</td>
                                    <td>".$row['source']."</td>
                                    <td>".$row['destination']."</td>
                                    <td>".$row['date_of_journey']."</td>
                                    <td>".$row['arrival_time']."</td>
                                    <td>".$row['type_of_class']."</td>
                                    <td>".$row['amount']."</td>
                                    <td>".$row['flight_status']."</td>
                                  </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='9'>No flights available.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        </main>  
    </div>

</body>
</html>

<?php
// Close the database connection
$mysqli->close();
?>
