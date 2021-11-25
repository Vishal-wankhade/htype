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
error_reporting(0);
            
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname="contact_us";


$conn = mysqli_connect($host, $dbUsername, $dbPassword,$dbname);

$fullname=$_POST['fullname'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$message=$_POST['message'];



// echo "$fname";
// echo "$number";
// echo "$eaddress";
// echo "$msg";


$query = "INSERT INTO details VALUES ('$fullname', '$mobile','$email','$message')" ;
?>
<?php

if($conn->query($query)== true)
{
    echo"<h3 class='success'>THANK YOU !!! WE WILL GET BACK TO YOU<h3>";
}
else{
    echo"<h3 class='failed'>please try again<h3>";
}
?>