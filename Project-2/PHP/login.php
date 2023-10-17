<?php
        $email = $_POST['email'];
        $pass = $_POST['pass'];

    // database details
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hospital";
    

    // creating a connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    // to ensure that the connection is made
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    // using sql to create a data entry query
    $sql = "select * from inup where email ='$email' and pass = '$pass'";
    //echo $sql;exit();
     //send query to the database to add values and confirm if successful
     $result= mysqli_query($con, $sql);
    $check = mysqli_fetch_array($result);
    if(isset($check)){
     echo 1;
    }
    else{
     echo 0;
    }
    // close connection
    mysqli_close($con);
    ?>
