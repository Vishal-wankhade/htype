
<?php
session_start();
error_reporting(0);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

<link href="css/bootsnav.css" rel="stylesheet"  type="text/css" >
<link href="css/font-awesome.min.css" rel="stylesheet"  type="text/css" >
<link href="css/fontawesome.css" rel="stylesheet" type="text/css" >
<link href="css/all.css" rel="stylesheet"  type="text/css" >
<link href="css/all.min.css" rel="stylesheet" type="text/css" >
<link href="css/brands.min.css" rel="stylesheet"  type="text/css" >
    <link href="css/bootstrap.min.css" rel="stylesheet"  type="text/css" href="css/bootstrap.min.css" >
    <link href="css/custom-file-input.css" rel="stylesheet" >
    <link href="css/profile.css" rel="stylesheet" >
</head>

<style>
    .main{
        border:1px solid gray;
        padding:30px;
    }
</style>
<body>
<div class="contain-wrapp padding-bot10 wrap">
        <div class="container">
        <div id="content">
           
        </div>
            <form class="row g-3 main" action="regi222.php" method="POST" enctype="multipart/form-data">
                <div class="centered">
                    <div class="icon">
                       <h4 class="text-center">Create a Profile</h4>
                    </div>
                </div> 
                <div class="col-md-8  col-sm-12 col-xs-12">
                    <label for="fullname" class="form-label">Fullname :</label>
                    <input type="text" class="form-control" id="name" name="fullname"  required>
                </div>
                <div class="col-md-4  col-sm-12 col-xs-12">
                     <label for="mobiler" class="form-label">Phone No :</label>
                    <input type="text" class="form-control" name="number" id="phone number">
                </div>
                <div class="col-md-8  col-sm-12 col-xs-12">
                   <label for="email" class="form-label">Email :</label>
                    <input type="email" class="form-control" id="email"  name="email" required>
                </div>
                <div class="col-md-4  col-sm-12 col-xs-12">
                    <label for="post" class="form-label">Position :</label>
                    <input type="text" class="form-control" id="post" name="post" placeholder="Working as a">
                </div>
                <div class="col-md-12  col-sm-12 col-xs-12">
                <label for="pic" class="form-label">Upload Your Picture:</label>
                    <input type="file" class="form-control" id="image" name="image" accept="image/*" placeholder="Working as a">
                </div>
                <div class="col-md-12  col-sm-12 col-xs-12">
                <label for="username" class="form-label">username:</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>
                <div class="col-md-12  col-sm-12 col-xs-12">
                <label for="password" class="form-label">password :</label>
                    <input type="password" class="form-control" id="password" name="password" >
                </div>
                <div class="col-md-12  col-sm-12 col-xs-12">
                <label for="conpass" class="form-label">Confirm Password :</label>
                    <input type="password" class="form-control" id="password" name="password" >
                </div>
                <button type="submit" name="submit">Signin</button>
                
                </div>

            </form> 
       </div>
</div>
</body>
</html>