
<?php

require_once('config.php');

if(isset($_POST['submit'])) {

    if(!empty($_POST['name']) && !empty($_POST['email']) ) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        

        //var_dump($fullname,$email);

        //Insert Data to database 
        $query = "insert into subscribe(name,email) values('$name' , '$email')";
     
       //run query
       $run = mysqli_query($conn, $query) or die('Error: ' . mysqli_error($conn));;

       //check if our query runs
       if ($run) {
        echo 'Subscription Made Successfully';
        header('Location: index.php');
       }
       else {
        echo 'Subscription Unsuccessfull';
       }


    }

    else {
        echo 'All fields are required';
       

    }

}