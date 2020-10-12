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
	<title>Admin-page</title>
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
 <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

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
                <li> <a href="productManagement.php">Product Management</a></li>
                <li> <a href="addNew.php">ADD new products</a></li>           
                <li> <a href="List_order.php">Order List</a></li>
                <li> <a href="infor_custom.php">Customer Contact</a></li>
              </ul>
            </div>
            <!-- /.nav-collapse -->
          </nav>
        <!-- end MENU -->

        <!-- Banner -->
        <div class="container">
           <body>
  <div class="wrapper">
    <div class="border-circle" id="one"></div>
    <div class="border-circle" id="two"></div>
    <div class="background-circle">
      <div class="triangle-light"></div>
      <div class="body"></div>
      <span class="shirt-text">H</span>
      <span class="shirt-text">e</span>
      <span class="shirt-text">l</span>
      <span class="shirt-text">l</span>
      <span class="shirt-text">o Admin</span>
      <div class="triangle-dark"></div>
    </div>
    <div class="head">
      <div class="ear" id="left"></div>
      <div class="ear" id="right"></div>
      <div class="hair-main">
        <div class="sideburn" id="left"></div>
        <div class="sideburn" id="right"></div>
        <div class="hair-top"></div>
      </div>
      <div class="face">
        <div class="hair-bottom"></div>
        <div class="nose"></div>
        <div class="eye-shadow" id="left">
          <div class="eyebrow"></div>
          <div class="eye"></div>
        </div>
        <div class="eye-shadow" id="right">
          <div class="eyebrow"></div>
          <div class="eye"></div>
        </div>
        <div class="mouth"></div>
        <div class="shadow-wrapper">
          <div class="shadow"></div>
        </div>
      </div>
    </div>
    <span class="music-note" id="one">&#9835;</span>
    <span class="music-note" id="two">&#9834;</span>
  </div>
</body>
</html>
        </div>
          
        <!-- end Banner -->


<!-- theme -->


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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>


</body>
</html> 