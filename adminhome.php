<?php

// echo"login successfull";
session_start();
?>
<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="robots" content="index,follow">


   <!--  favicon -->
   <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="icon" href="img/favicon.ico" type="image/x-icon">
   <!-- favicon -->


    <title>Hypestrew Private Limited</title>
    <!--google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">

    <!--font-awesome link-->

     <!--  boostrap files -->
	 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	 <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<!--end  boostrap files -->

 <!--  css files -->
<link href="css/bootsnav.css" rel="stylesheet"  type="text/css" >
<link href="css/font-awesome.min.css" rel="stylesheet"  type="text/css" >
<link href="css/fontawesome.css" rel="stylesheet" type="text/css" >
<link href="css/all.css" rel="stylesheet"  type="text/css" >
<link href="css/all.min.css" rel="stylesheet" type="text/css" >
<link href="css/brands.min.css" rel="stylesheet"  type="text/css" >
<link href="css/brands.css" rel="stylesheet" type="text/css" >
<link href="css/regular.min.css" rel="stylesheet"  type="text/css" >
<link href="css/regular.css" rel="stylesheet" type="text/css" >
<link href="css/solid.min.css" rel="stylesheet"  type="text/css">
<link href="css/solid.css" rel="stylesheet" type="text/css" >
<link href="css/svg-with-js.css" rel="stylesheet"  type="text/css" >
<link href="css/svg-with-js.min.css" rel="stylesheet" type="text/css" >
<link href="css/v4-shims.min.css" rel="stylesheet"  type="text/css" >
<link href="css/v4-shims.css" rel="stylesheet" type="text/css" >
<!-- end css files -->

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"  type="text/css"s >
	 
     <!-- video -->
  <link href="css/jquery.background-video.css" rel="stylesheet" type="text/css" >


  <link href="css/datetimepicker.css" rel="stylesheet" >

  <link href="css/pageScroll.css" rel="stylesheet" >
  <link href="css/prettify.css" rel="stylesheet" >
  <link href="css/vegas.css" rel="stylesheet" >
  <link href="css/owl.theme.css" rel="stylesheet" >
  <link href="css/owl.carousel.css" rel="stylesheet" >
  <link href="css/overwrite.css" rel="stylesheet" >
  <link href="css/owl.transitions.css" rel="stylesheet" >
  <link href="css/masony.css" rel="stylesheet" >
  <link href="css/animate.css" rel="stylesheet" >
  <link href="css/custom-file-input.css" rel="stylesheet" >

	<!-- Layerslider -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

   <!--  main css file -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/adminhome.css" rel="stylesheet">
    <!--end of main css file-->


    <!-- Color -->
    <link id="skin" href="skins/default.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet" >

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- [if lt IE 9]> -->
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
     <!--  <script src="js/flexslider/jquery.flexslider-min.js"></script>
      <script src="js/setting.js"></script>
      <script src="js/rangeSlider/ion.rangeSlider.min.js"></script>
     <script src="js/rangeSlider/setting.js"></script> -->
    <!-- <![endif] -->
    
</head>
</body>
<?php
include("connection.php");


$query = "SELECT * FROM details";

$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);

$result = mysqli_fetch_assoc($data);
?>
<?php
  $conn2 = mysqli_connect("localhost", "root", "", "img-upload");
  $data2 = mysqli_query($conn2, "SELECT * FROM users");
  $users = mysqli_fetch_all($data2  , MYSQLI_ASSOC);
?>



 <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><h1 class="name">HYPESTREW</h1></div>
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="adminhome.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold active"><i
                        class="fas fa-project-diagram me-2 "></i>Contact Us</a>
                <a href="adminhome2.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-chart-line me-2"></i>Quote Us</a>
                <a href="adminhome3.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-paperclip me-2"></i>Work Us</a>
               
                <a href="logout.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                        <?php   
                            ?></a>
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php  $_SESSION['profile-image']=$profileImageName;
          $_SESSION['fullname']=$name;
          $_SESSION['email']=$email;
          $_SESSION['number']=$number; ?> 
                                <i class="fas fa-user me-2"></i><?php echo "Welcome ". $_SESSION['username'];
                            ?></a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="profiles.php">Profile</a></li>
                                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-4">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2"><?php echo"$total" ?></h3>
                                <p class="fs-5">CONTACT</p>
                            </div>
                            <i class="fab fa-facebook-messenger fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <!-- <div class="col-md-4">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">00</h3>
                                <p class="fs-5">Quote</p>
                            </div>
                            <i
                                class="fas fa-hand-holding-usd fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">00</h3>
                                <p class="fs-5">Work</p>
                            </div>
                            <i class="fas fa-truck fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div> -->

                
            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-8 bg-head">
                       <h2 >People who are trying to contact us</h2>
                    </div>
                    <div class="col-md-4">
                    <a href="<?php $_SERVER['PHP_SELF']; ?>">  <button class="btn btn-primary up">Update</button></a>
                    </div>
                </div>
            </div>
                <div class="row my-5">
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                            
                                   
                                     <tr>
                                          <th>Full Name</th>
                                          <th>mobile</th>
                                          <th>email</th>
                                          <th>message</th>
                                     </tr>
                            </thead>
                            <tbody>
                                

<?php

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
                            </tbody>
                        </table>



                    </div>
                </div>


<!-- quote table -->
              
<!-- work table -->


            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
    </body>
    </html>