<html>
    <head>
        <title>

        </title>
    </head>
    <style>
          .msg{
        color: red;
        text-align: center;
        font-size: 45px;
    height: 80px;
    text-transform: capitalize;
padding: 0px;
}
.heading{
    padding:15px ;
    background-color: #1179ef;
    color: #fff;
    text-align: center;
    margin:20px auto;
    width: 80%;
}
.heading h3{
    color: #fff;
    text-align: center;
    font-size: 3.5em;
}
        th{
            background-color:#fff;
            color: #1179ef;
            padding: 10px;
            text-transform: uppercase;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        tr{
            border:1px solid #1179ef;
        }
        td{
            text-align: center;
            padding: 20px;
            height: auto;
            width: 200px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            background-color: #ffe;
        }
        table{
            margin: auto;
            border:none;
            box-shadow: 0 2px 20px 0 rgb(17 121 239 / 20%);
        }
    </style>
    <body>
    <div class="heading"><h3>People who are trying contact us</h3></div>
        <table border=2>
        
            <tr>
                <th>Full Name</th>
                <th>mobile</th>
                <th>email</th>
                <th>message</th>
            </tr>

<?php
include("connection.php");

$query = "SELECT * FROM details";

$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);

$result = mysqli_fetch_assoc($data);



// echo"$total";

if($total!=0){
    // echo"table has records";
    while( $result =mysqli_fetch_assoc($data) )
    {
        echo"
        <tr>
        <td>" .$result['fullname']. "</td>
        <td>" .$result['mobile']. "</td>
        <td>" .$result['email']. "</td>
        <td>" .$result['message']. "</td>
        ";
    }
}
else{
    echo "<h3 class='msg'>no records found<h3>";
}

?>
</table>
 </body>
</html>