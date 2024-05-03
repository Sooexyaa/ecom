<?php
require('connection.inc.php');
require('functions.inc.php');
if(isset($_SESSION['ADMIN_LOGIN']) && $_SESSION['ADMIN_LOGIN']!=''){

}else{
	header('location:login.php');
	die();
}





?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Primrose Clothing Store-Admin Site</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="assets/css/bootstrap-datepicker.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="sidebar-light">
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
        <ul class="navbar-nav mr-lg-2 d-none d-lg-flex">
          <li class="nav-item nav-toggler-item">
            <button class="navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
          </li>
          
        </ul>
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="category.php"><img src="images/logoo.png" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="category.php"><img src="images/logoo.png" alt="logo"/></a>
        </div>
        <ul class="navbar-nav navbar-nav-right">
          
          <li class="nav-item nav-profile ">
            <a class="nav-link " href="#" data-toggle="dropdown" id="profileDropdown">
              <span class="nav-profile-name fw-bolder"><?php echo $_SESSION['ADMIN_USERNAME']?></span>
            </a>
            
          </li>
          
          <li class="nav-item nav-toggler-item-right d-lg-none">
            <button class="navbar-toggler align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-menu"></span>
            </button>
          </li>
        </ul>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar" >
        <ul class="nav"  style="color:#f1f2f7;">
          
		  
          <!-- <li class="nav-item">
            <a class="nav-link" href="dashboard.php">
            <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="category.php">
            <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">Category</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sub_categories.php">
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">Sub-Category</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="product.php">
            <i class="fa-brands fa-product-hunt"></i> &nbsp; &nbsp; &nbsp;&nbsp;
              <span class="menu-title">Our Product</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="order_master.php" >
            <i class="fa-brands fa-jedi-order"></i>&nbsp; &nbsp; &nbsp;&nbsp;
              <span class="menu-title">Customers Orders</span>
            </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="users.php">
            <i class="fa-solid fa-user"></i>&nbsp; &nbsp; &nbsp;&nbsp;
              <span class="menu-title">Users</span>
            </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="delivery_boy.php">
            <i class="fa-solid fa-truck"></i></i>&nbsp; &nbsp; &nbsp;&nbsp;
              <span class="menu-title">Delivery Boy</span>
            </a>
          </li>
		   
		  
		  <li class="nav-item">
            <a class="nav-link" href="contact_us.php">
            <i class="fa-solid fa-address-book"></i>&nbsp; &nbsp; &nbsp;&nbsp;
              <span class="menu-title">Contact Us</span>
            </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="reviews.php" >
            <i class="fa-sharp fa-regular fa-magnifying-glass"></i>&nbsp; &nbsp; &nbsp;&nbsp;
              <span class="menu-title">User Reviews</span>
            </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="logout.php" >
            <i class="fa-solid fa-right-from-bracket"></i>&nbsp; &nbsp; &nbsp;&nbsp;
              <span class="menu-title">Logout</span>
            </a>
          </li>
		  
          
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">