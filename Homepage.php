<?php
session_start(); 
if(!isset($_SESSION['uid'])){ 
  header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>OSIT Fix | Home</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body>
<div>
  <!-- Navbar -->
  <?php include_once('inc/header.php'); ?>

  <!-- Banner Carousel -->
  <div id="bannerCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <!-- First Slide -->
      <div class="carousel-item active">
        <img src="./dist/img/BannerImage1.png" class="d-block w-100" alt="First Slide">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <!-- Second Slide -->
      <div class="carousel-item">
        <img src="./dist/img/BannerImage2.png" class="d-block w-100" alt="Second Slide">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>

    </div>
    <!-- Carousel Controls -->
    <a class="carousel-control-prev" href="#bannerCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#bannerCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- Main content -->
  <div class="content-wrapper" style="margin: 2%;">
    <section class="content-header">
      <div class="container-fluid">
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- Create Ticket Card -->
          <div class="col-lg-4 col-6">
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>Create Ticket</h3>
                <p>Submit a new support request</p>
              </div>
              <div class="icon">
                <i class="fas fa-ticket-alt"></i>
              </div>
              <a href="CreateTicket.php" class="small-box-footer">
                Go to Create Ticket <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>

          <!-- Search Ticket Card -->
          <div class="col-lg-4 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>My Tickets</h3>
                <p>Look for your created tickets</p>
              </div>
              <div class="icon">
                <i class="fas fa-search"></i>
              </div>
              <a href="search-ticket.php" class="small-box-footer">
                Go to My Tickets <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>

          <!-- Support Dashboard Card -->
          <div class="col-lg-4 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>Knowledge Base</h3>
                <p>Know Basic Hardware & Software Troubleshooting</p>
              </div>
              <div class="icon">
                <i class="fas fa-book"></i>
              </div>
              <a href="knowledge-base.php" class="small-box-footer">
                Go to Knowledge Base <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- Footer -->
  <?php include_once('inc/footer.php'); ?>

  <!-- Scripts -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="dist/js/adminlte.min.js"></script>
</body>
</html>
