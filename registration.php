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
  
error_reporting(0);
$show == false;
 $host = "localhost";
 $dbUsername = "root";
 $dbPassword = "";
 $dbName = "login";


  
 $con = mysqli_connect($host, $dbUsername, $dbPassword, $dbName);

 if($con){
   //   echo"connection ok";
 }
else{
    echo "connection failed".mysqli_connect_error();
}

$username=$_POST['user'];
$password=$_POST['pass'];


if( strlen($password) < 8 ) {
    echo '<script>alert("Password should have 8 characters aleast");
    window.location.href = "loginadmin.php";
    </script>';
}
if( strlen($password) > 20 ) {
    echo '<script>alert("Password is too long");
    window.location.href = "loginadmin.php";
    </script>';
    }
    
    
    if( !preg_match("#[0-9]+#", $password) ) {
        echo '<script>alert("Password should must include at least one number");
        window.location.href = "loginadmin.php";
        </script>';
    }
    
    if( !preg_match("#[a-z]+#", $password) ) {
        echo '<script>alert("Password should must include at least one letter");
        window.location.href = "loginadmin.php";
        </script>';
    }
   
    if( !preg_match("#[A-Z]+#", $password) ) {
        echo '<script>alert(" Password must include at least one CAPS!");
        window.location.href = "loginadmin.php";
        </script>';
    }
    
    if( !preg_match("#\W+#", $password) ) {
        echo '<script>alert("Password must include at least one symbol");
        window.location.href = "loginadmin.php";
        </script>';
    }


$q = "SELECT * From log where username ='$username' AND password ='$password'";

$result=mysqli_query($con,$q);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
$num = mysqli_num_rows($result);

if($num ==1 ){
    echo '<script>alert("User already exist");
    window.location.href = "loginadmin.php";
    </script>';
}
else{

    $query ="INSERT INTO  log (`username`, `password`) VALUES ('$username','$password')";
    mysqli_query($con,$query);
    $_SESSION['username']="$username";
    echo '<script>alert("New User Is Created now login with the credentials");
    window.location.href = "loginadmin.php";
    </script>';


    
}
    
?>  
</body>
</html>