<?php
  if(isset($_POST['submit']))
    {
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $email = $_POST['email'];
      $pass= $_POST['pass'];
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
    $sql = "INSERT INTO inup (fname,lname,email,pass)VALUES('$fname','$lname','$email','$pass')";
    //echo $sql;exit();
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
     if($rs)
     {
      header("Location:../HTML/hospital.html");
      exit();
     }        
    mysqli_close($con);
    ?>
