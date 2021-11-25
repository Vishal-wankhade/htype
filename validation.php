<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<style>
    
   </style>
<body>
   

<?php      

session_start();


// error_reporting(0);

 $host = "localhost";
 $dbUsername = "root";
 $dbPassword = "";
 $dbName = "login";
 

  
 $con = mysqli_connect($host, $dbUsername, $dbPassword, $dbName);

 if($con){
     echo"connection ok";
 }
else{
    echo "connection failed".mysqli_connect_error();
}

$username=$_POST['user'];
$password=$_POST['pass'];

$q = "SELECT * From log where username ='$username' AND password = '$password'";

$result=mysqli_query($con,$q);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
$num = mysqli_num_rows($result);



if($num ==1 ){
   header('location:adminhome.php');
   $_SESSION['username']=$username;
}

else{
   echo '<script>alert("Invalid Username Or Password");
   window.location.href = "loginadmin.php";
   </script>';
}
    
?>  
</body>
</html>
