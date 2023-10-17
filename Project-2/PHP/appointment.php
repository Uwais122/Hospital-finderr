<?php
 if(isset($_POST['submit']))
    {
        $fname = $_POST['fname'];
        $mnumber = $_POST['mnumber'];
        $note = $_POST['note'];
        $mygender = $_POST['mygender'];
    }
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
    $sql = "INSERT INTO apointment (fname,mnumber,note,mygender)VALUES('$fname','$mnumber','$note','$mygender')";
     //echo $sql;exit();
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        header("Location:https://www.google.co.uk/");
        exit();
    }
  
    // close connection
    mysqli_close($con);
    ?>


