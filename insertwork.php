<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
   <!--  favicon -->
   <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="icon" href="img/favicon.ico" type="image/x-icon">
   <!-- favicon -->
   
    <title>THANK YOU | HYPESTREW</title>
</head>
<body>
    <style>
          .success{
        color: green;
        text-align: center;
        font-size: 45px;
    height: 80px;
padding: 0px;
}
.failed{
    color: red;
        text-align: center;
        font-size: 25px;
        width: 500px;
    transform: translate(610px, -110px);
    height: 80px;
    padding: 0px;
}
    </style>
    
</body>
</html>


<?php

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "work_with_us";

$conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbName);

$fname=$_POST['fullname'];
$number=$_POST['mobile'];
$eaddress=$_POST['email'];
$ocp=$_POST['occuption'];
$ser=$_POST['service'];
$msg=$_POST['message'];

// echo "$fname"."    ";
// echo "$number"."    ";
// echo "$eaddress"."    ";
// echo "$ocp"."    ";
// echo "$ser"."    ";
// echo "$msg"."    ";


$query = "INSERT INTO works VALUES ('$fname', '$number','$eaddress','$ocp','$ser','$msg')" ;

// $data = mysqli_query($conn, $query);
?>
<?php
if($conn->query($query)== true)
{
    echo"<h3 class='success'>Information Submitted Successfull<h3>";
}
else{
    echo"<h3 class='failed'>please try again<h3>";
}
?>