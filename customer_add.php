<?php // query.php

// require_once 'login.php';

// login.php
$hn = 'www.it354.com';
$db = 'it354_students';
$un = 'it354_students';
$pw = 'steinway';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

$fname =  $_POST['fname'];
$lname =  $_POST['lname'];
$address =  $_POST['address'];
$city =  $_POST['city'];
$state =  $_POST['state'];
$zip =  $_POST['zip'];
$email =  $_POST['email'];
$phone =  $_POST['phone'];

$sql = "INSERT INTO customers (firstname, lastname, address, city, state, zip, email, phone) VALUES ($fname, $lname, $address, $city, $state, $zip, $email, $phone)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>