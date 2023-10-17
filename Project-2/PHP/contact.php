<?php
  if(isset($_POST['submit']))
    {
      $name = $_POST['name'];
        $email = $_POST['email'];
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
    $sql = "INSERT INTO contact(name,email) VALUES ('$name','$email')";
    //echo $sql;exit();
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
      header("Location:../HTML/thank.html");
      exit();
    }
  
    // close connection
    mysqli_close($con);
    ?>
