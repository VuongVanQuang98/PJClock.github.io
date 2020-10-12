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
  <title>ADDNEW</title>
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
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/images.css">
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

        <!-- ADDnew-product -->
        <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="/docs/4.4/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h2 style="color: #424242;">ADDNEW PRODUCTS</h2>

  </div>
    <div class="col-md-12 center">
      <h4 style="color: #424242;" class="mb-3">Please complete the information !</h4>
      <form method="POST" action="functions_admin/function_addnew.php" class="needs-validation" novalidate="" enctype="multipart/form-data">
             <div class="row">
          <!-- ID -->
                      <div class="col-md-6 mb-3">
                        <label for="id">ID</label>
                        <input type="text" name="txtID" class="form-control" id="id" placeholder="Enter id...." value="" required="">
                        <div style="color: #424242;" class="invalid-feedback">
                          Valid  ID is required.
                        </div>
                      </div>
            <!-- NAME -->
          <div class="col-md-6 mb-3">
            <label for="name">NAME</label>
            <input type="text" name="txtName" class="form-control" id="name" placeholder="Enter name...." value="" required="">
            <div style="color: #424242;" class="invalid-feedback">
              Valid  NAME is required.
            </div>
          </div>
          <!-- price -->
                      <div class="col-md-6 mb-3">
                        <label for="price">PRICE</label>
                        <input type="number" min="1" name="txtPrice" class="form-control" id="price" placeholder="Enter price...." value="" required="">
                        <div style="color: #424242;" class="invalid-feedback">
                          Valid  PRICE is required.
                        </div>
                      </div>
      <!-- quantity -->
          <div class="col-md-6 mb-3">
            <label for="quantity">QUANTITY</label>
            <input type="number" min="1" name="txtQuantity" class="form-control" id="quantity" placeholder="Enter quantity...." value="" required="">
            <div style="color: #424242;" class="invalid-feedback">
              Valid  QUANTITY is required.
            </div>
          </div>
          <!-- descrip -->
                      <div class="col-md-6 mb-3">
                        <label for="description">DESCRIPTION</label>
                        <textarea name="txtDescription" id="description" placeholder="Enter Descriptions..." cols="78" rows="14"> </textarea>
                        <div style="color: #424242;" class="invalid-feedback">
                          Valid  DESCRIPTION is required.
                        </div>
                      </div>
          <!-- category -->
             <div class="col-md-6 mb-3">
            <label for="name">CATEGORY</label>
            <input type="text" name="txtCategory" class="form-control" id="category" placeholder="Enter category...." value="" required="">
            <div style="color: #424242;" class="invalid-feedback">
              Valid  CATEGORY  is required.
            </div>
          </div>
          <!-- images -->
          <div class="col-md-12">
                      <label>IMAGES</label>
                      <!-- Our File Inputs -->
                      <div class="wrap-custom-file">
                        <input name="txtimg1" type="file" id="image1" accept=".gif, .jpg, .png" />
                        <label  for="image1">
                          <img src="" alt="">
                          <span>Select Image 1</span>
                          <i class="fa fa-plus-circle"></i>
                        </label>
                      </div>

                      <div class="wrap-custom-file">
                        <input name="txtimg2" type="file" id="image2" accept=".gif, .jpg, .png" />
                        <label  for="image2">
                          <img src="" alt="">
                          <span>Select Image 2</span>
                          <i class="fa fa-plus-circle"></i>
                        </label>
                      </div>

                      <div class="wrap-custom-file">
                        <input name="txtimg3" type="file" id="image3" accept=".gif, .jpg, .png" />
                        <label  for="image3">
                          <img src="" alt="">
                          <span>Select Image 3</span>
                          <i class="fa fa-plus-circle"></i>
                        </label>
                      </div>

                       <div class="wrap-custom-file">
                        <input name="txtimg4" type="file" id="image4" accept=".gif, .jpg, .png" />
                        <label  for="image4">
                          <img src="" alt="">
                          <span>Select Image 4</span>
                          <i class="fa fa-plus-circle"></i>
                        </label>
                      </div>

                      <div class="wrap-custom-file">
                        <input name="txtimg5" type="file" id="image5" accept=".gif, .jpg, .png" />
                        <label  for="image5">
                          <img src="" alt="">
                          <span>Select Image 5</span>
                          <i class="fa fa-plus-circle"></i>
                        </label>
                      </div>
          </div>
          <!-- <img class="thumb" src="https://cdn.tgdd.vn/Products/Images/7264/199509/casio-a159w-n1df-bac-600x600.jpg" alt="..." class="img-thumbnail">
          <img class="thumb" src="https://cdn.tgdd.vn/Products/Images/7264/199509/casio-a159w-n1df-bac-600x600.jpg" alt="..." class="img-thumbnail"> -->
        <hr class="mb-4">
        <input type="submit" class="btn btn-lg btn-primary btn-block" name="btnSubmit" value="ADD PRODUCT">
        <!-- <button class="btn btn-lg btn-primary btn-block" type="submit">SAVE PRODUCT</button> -->
      </form>
    </div>
  </div>
</div>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="dist/js/multi-image-picker.js"></script>
  <script type="text/javascript">
    $(function(){

      $("#coba").spartanMultiImagePicker({
        fieldName:        'fileUpload[]',
        directUpload : {
          status: true,
          loaderIcon: '<i class="fas fa-sync fa-spin"></i>',
          url: '../c.php',
          additionalParam : {
            name : 'My Name'
          },
          success : function(data, textStatus, jqXHR){
          },
          error : function(jqXHR, textStatus, errorThrown){
          }
        }
      });
    });
  </script>         

<script>
  function toggleDarkLight() 
{
  var body = document.getElementById("body");
  var currentClass = body.className;
  body.className = currentClass == "dark-mode" ? "light-mode" : "dark-mode";
}
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>
$('input[type="file"]').each(function(){
  // Refs
  var $file = $(this),
      $label = $file.next('label'),
      $labelText = $label.find('span'),
      labelDefault = $labelText.text();

  // When a new file is selected
  $file.on('change', function(event){
    var fileName = $file.val().split( '\\' ).pop(),
        tmppath = URL.createObjectURL(event.target.files[0]);
    //Check successfully selection
    if( fileName ){
      $label
        .addClass('file-ok')
        .css('background-image', 'url(' + tmppath + ')');
      $labelText.text(fileName);
    }else{
      $label.removeClass('file-ok');
      $labelText.text(labelDefault);
    }
  });

// End loop of file input elements
});
</script>
<!-- ___________________________JS_________________________ -->
    <script src="js/jQuery_v3.1.1.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/jquery.firstVisitPopup.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/adminpage.js"></script>
    <script src="js/multi-image-picker.js"></script>
</body>
</html>

