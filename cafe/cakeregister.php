
<?php
session_start();
if (isset($_SESSION["SESSION_EMAIL"])) {
    header("Location: dashboard.php");
}

if (isset($_POST["submit"])) {
    include 'config.php';

    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $image = mysqli_real_escape_string($conn, $_POST["image"]);
    $description = mysqli_real_escape_string($conn, $_POST["description"]);
    $price = mysqli_real_escape_string($conn, $_POST["price"]);





            //Insert Data to database
            $query = "insert into cakes(title,image,description,price) values('$title' , '$image', '$description','$price')";

            //run query
            $run = mysqli_query($conn, $query) or die('Error: ' . mysqli_error($conn));

            //check if our query runs
            if ($run) {
                echo 'saved successfully';
            }
            else {
                echo 'cake not  submitted';
            }
    }
    else {
        echo 'All fields are required';


    }


    ?>