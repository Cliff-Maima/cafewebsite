<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Cafedb";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if(isset($_POST['submit'])) {

    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) ) {

        $fullname = $_POST['name'];
        $email = $_POST['email'];
        $phonenumber = $_POST['phone'];

        //Insert Data to database
        $query = "insert into Customers(fullname,email,Phonenumber) values('$fullname' , '$email', '$phonenumber')";

        //run query
        $run = mysqli_query($conn, $query) or die('Error: ' . mysqli_error($conn));

        //check if our query runs
        if ($run) {
            echo 'Reservation made successfully';
        }
        else {
            echo 'Data not  submitted';
        }


    }

    else {
        echo 'All fields are required';


    }

}





























?>