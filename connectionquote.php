
<?php
error_reporting(0);
 $host = "localhost";
 $dbUsername = "root";
 $dbPassword = "";
 $dbName = "get_quote";

 $conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbName);

 if($conn){
    //  echo"connection ok";
 }
else{
    echo "connection failed".mysqli_connect_error();
}


?>