<?php
session_start();
//tiến hành kiểm tra là người dùng đã đăng nhập hay chưa
//nếu chưa, chuyển hướng người dùng ra lại trang đăng nhập
if (!isset($_SESSION['username'])) {
   // header("Location: http://localhost/pjclock/login.php");
   ?>
   <script>
     alert ("You must login to use this functions ");
     window.location.href='../login.php';
   </script>
   <?php
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Product-Management</title>
  <meta name="distribution" content="global">
  <meta name="revisit-after" content="2 Days">
  <meta name="robots" content="ALL">
  <meta name="rating" content="8 YEARS">
  <meta name="Language" content="en-us">
  <meta name="GOOGLEBOT" content="NOARCHIVE">
    <!-- =====  MOBILE SPECIFICATION  ===== -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="viewport" content="width=device-width">
    <!-- =====  CSS  ===== -->
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/animation.css">
  <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
  <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
  <link rel="shortcut icon" href="images/favicon.png">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>
</head>
<body>
   <div class="loder"></div>
  <!-- end-loader -->
  <!-- HEADER START -->
    <header id="header">
      <div class="header-top">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-4">
              <div class="header-top-left">
        <!-- Time open -->
                <div class="contact"><span class="hidden-xs hidden-sm hidden-md">Days a week from 9:00 am to 7:00 pm</span>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-8">
              <ul class="header-top-right text-right">
                <li class="language dropdown"> <span class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">Language <span class="caret"></span> </span>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="#">English</a></li>
                    <li><a href="#">French</a></li>
                    <li><a href="#">German</a></li>
                  </ul>
                </li>
                <li class="currency dropdown"> <span class="dropdown-toggle" id="dropdownMenu12" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">Profile <span class="caret"></span></span>
                </li>
            <li>
           <body id="body" class="dark-mode">                  
            <button class="btn-dark" type="button" name="dark_light" onclick="toggleDarkLight()" title="Toggle dark/light mode">Mode ☀️</button>
          </body>
            </li>

              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="header">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-4">
              <div class="main-search mt_40">
                <input id="search-input" name="search" value="" placeholder="Search" class="form-control input-lg" autocomplete="off" type="text">
                <span class="input-group-btn">
              <button type="button" class="btn btn-default btn-lg"><i class="fa fa-search"></i></button>
              </span> </div>
            </div>
            <!-- header mid  -->
            <div class="navbar-header col-xs-6 col-sm-4"> 
        <a class="navbar-brand" href="../index.php"> <img alt="themini" src="images/logo.png"> </a>
            </div>
      <!-- end clock -->
            <div class="col-xs-2 col-sm-1 shopcart">
            
          </div>
              <div class="col-xs-3 col-sm-2 theme">
                
              </div>  
  </header>
                  <!-- MENU  -->

   <nav class="navbar">
            <p>menu</p>
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse"> <span class="i-bar"><i class="fa fa-bars"></i></span></button>
            <div class="collapse navbar-collapse js-navbar-collapse">
              <ul id="menu" class="nav navbar-nav">
                <li> <a href="adminpage.php">Admin Homepage</a></li>      
                <li> <a  class="active" href="productManagement.php">Product Management</a></li>
                <li> <a href="addNew.php">ADD new products</a></li>           
                <li> <a href="List_order.php">Order List</a></li>
                <li> <a href="infor_custom.php">Customer Contact</a></li>
              </ul>
            </div>
            <!-- /.nav-collapse -->
          </nav>
        <!-- end MENU -->
          <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="/docs/4.4/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h2 style="color: #424242;">Customer Contact</h2>        
    </div>
        
                    
              <!-- Contact FORM <--></-->
                <div class="container">
              <div class="row">
                <div class="col-xs-12">                 
              <table style="border: 1PX;" class="table">
            <thead class="thead-dark">
              <tr style="text-align: center;">
                <th scope="col">ID</th>
                <th scope="col">NAME</th>
                <th scope="col">EMAIL</th>
                <th scope="col">PHONE</th>
                <th scope="col">ADDRESS</th>
                <th scope="col">SUBJECT</th>
                <th scope="col">MESSAGE</th>
                <th scope="col">STATUS</th>
                <th scope="col">REPLY</th>
                <!-- <th scope="col">DELETE</th> -->
              </tr>
            </thead>

            <tbody>
            <?php
  require 'functions_admin/require_admin.php';
  $sql ="SELECT * FROM tbl_customer";
   $result= mysqli_query($conn, $sql);
  while ($row= mysqli_fetch_array($result))
  {
      ?>
              <tr >
                <td> <?=$row["id_cus"]?> </td>
                <td> <?=$row["_name"]?> </td>
                <td> <?=$row["_email"]?> </td>
                <td> <?=$row["_phonenumber"]?> </td>
                <td> <?=$row["_address"]?> </td>
                <td> <?=$row["_subject"]?> </td>
                <td> <?=$row["_message"]?> </td>
                <td> <?=$row["status"]?> </td>
                <td><button> <a href= "rep_mail.php?id=<?=$row["id_cus"]?>" >REPLY</a></button></td>              
              </tr>
  <?php
   }
?>
            </tbody>
          </table>
            </div>
          </div>
    </div>    
              <!-- END Contact FORM -->
            </div>
            </div>
          </div>
    </div>    

          

<script>
  function toggleDarkLight() 
{
  var body = document.getElementById("body");
  var currentClass = body.className;
  body.className = currentClass == "dark-mode" ? "light-mode" : "dark-mode";
}
</script>

<!-- ___________________________JS_________________________ -->
    <script src="js/jQuery_v3.1.1.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/jquery.firstVisitPopup.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/adminpage.js"></script>
</body>
</html>