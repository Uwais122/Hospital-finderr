<?php
  $usertype = $_POST["usertype"];
  //echo $usertype;
  if(isset($_POST['submit']))
    {
        $mnumber = $_POST['mnumber'];
        $otp = $_POST['otp'];
        $pass= $_POST['pass'];
        $repassword = $_POST['repassword'];
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
    $sql = "INSERT INTO forgot(mnumber,otp,pass,repassword) VALUES ('$mnumber','$otp','$pass','$repassword')";
   //echo $sql;exit();
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($usertype == "login"){
      header("Location:log.html");
      exit();
}
else if($usertype == "signup"){
      header("Location:sign.html");
      exit();

}
else{
    echo "No one";
}
  
    // close connection
    mysqli_close($con);
    ?>
