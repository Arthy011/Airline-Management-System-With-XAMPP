<?php

$connect = new mysqli("localhost", "root", "");

if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

// Create Database
$sql = "CREATE DATABASE IF NOT EXISTS airline_system";
if (!$connect->query($sql)) {
    echo "Error creating database: " . $connect->error;
}

// Use the Database
$connect->select_db("airline_system");

// Create Tables
$table_queries = [
    "CREATE TABLE IF NOT EXISTS admin_info (
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        admin_id VARCHAR(50) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        admin_name VARCHAR(50) NULL,
        email_id VARCHAR(50) NULL,
        contact_no VARCHAR(12) NULL
    )",
    "CREATE TABLE IF NOT EXISTS passenger_info (
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        passenger_id VARCHAR(50) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        pass_name VARCHAR(50) NOT NULL,
        email_id VARCHAR(50) NOT NULL,
        passport_no VARCHAR(8) NOT NULL
    )",
    "CREATE TABLE IF NOT EXISTS booked_flights (
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        flight_no INT(12) NOT NULL,
        airline VARCHAR(50) NOT NULL,
        passenger_id VARCHAR(50) NOT NULL,
        pass_name VARCHAR(50) NOT NULL,
        passport_no VARCHAR(8) NOT NULL,
        fare_paid INT(12) NOT NULL,
        passenger_count INT(12) NOT NULL,
        reservation_status VARCHAR(50) NOT NULL
    )",
    "CREATE TABLE IF NOT EXISTS flights (
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        type_of_flight VARCHAR(50) NOT NULL,
        flight_no INT(12) NOT NULL UNIQUE,
        airline VARCHAR(50) NOT NULL,
        source VARCHAR(50) NOT NULL,
        destination VARCHAR(50) NOT NULL,
        intermediate_stops VARCHAR(50) NOT NULL,
        date_of_journey DATE NOT NULL,
        departure_time TIME NOT NULL,
        arrival_time TIME NOT NULL,
        type_of_class VARCHAR(50) NOT NULL,
        meal VARCHAR(50) NOT NULL,
        amount INT(12) NOT NULL,
        discount INT(12) NOT NULL,
        flight_status VARCHAR(50) NOT NULL
    )"
];

foreach ($table_queries as $sql) {
    if (!$connect->query($sql)) {
        echo "Error creating table: " . $connect->error . "<br>";
    }
}

// Insert Admin User
$password = "admin";
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO admin_info (admin_id, password, admin_name, email_id, contact_no)
    SELECT * FROM (SELECT 'admin', '$hashed_password', 'testadmin', 'admin@test.com', '1234567891') AS tmp
    WHERE NOT EXISTS (SELECT admin_id FROM admin_info WHERE admin_id = 'admin') LIMIT 1";

if (!$connect->query($sql)) {
    echo "Error inserting admin: " . $connect->error;
}

mysqli_close($connect);

?>
