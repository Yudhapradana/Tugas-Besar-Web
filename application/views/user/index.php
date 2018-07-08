<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>BizPage Bootstrap Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?php echo base_url()?>assets/user/img/favicon.png" rel="icon">
  <link href="<?php echo base_url()?>assets/user/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo base_url()?>assets/user/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo base_url()?>assets/user/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/user/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/user/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/user/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/user/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo base_url()?>assets/user/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">IniCinema</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="<?php echo site_url()?>/jadwal">Schedule</a></li>
          <li><a href="<?php echo site_url()?>/ProfilUser/pesan">Order</a></li>
        <?php   if($this->session->userdata('logged_in')) { ?>
          <li class="menu-has-children"><a href=""><?php  echo $this->session->userdata('logged_in')['username'] ?></a>
            <ul>
              <li><a href="<?php echo site_url()?>/profiluser/profil/">Profil</a></li>
              <li><a href="<?php echo site_url()?>/login/logout">Logout</a></li>
          </li>
          <?php   }else{ ?>
          <li><a href="<?php echo site_url()?>/login">login</a></li>
          <?php   } ?>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="<?php echo base_url()?>assets/user/img/1.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <br><br><br><br><br><br>
                <p><font size="5">Drama | Action</font></p>
                <h2>Black Panther</h2>
                <a href="#featured-services" class="btn-get-started scrollto">Get Ticket</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="<?php echo base_url()?>assets/user/img/2.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <br><br><br><br><br><br>
                <p><font size="5">Drama | Action</font></p>
                <h2>Avengers : Infinity War</h2><a href="#featured-services" class="btn-get-started scrollto">Get Ticket</a>
              </div>
            </div>
          </div>



        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">
    <section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Film List</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Now Playing</li>
              <li data-filter=".filter-card">Coming Soon</li>
             
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">
<?php foreach ($comingsoon as $key ) { ?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url()?>assets/upload/<?php echo $key->foto ?>" class="img-fluid" alt="">
                <a href="<?php echo base_url()?>assets/upload/<?php echo $key->foto ?>" data-lightbox="portfolio" data-title="<?php echo $key->judulFilm ?>" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="<?php echo site_url()?>/jadwal/deskripsi/<?php echo $key->noFilm?>" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#"><?php echo $key->judulFilm ?></a></h4>
                
              </div>
            </div>
          </div>
          <?php   
} ?>
<?php foreach ($nowplaying as $key ) { ?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url()?>assets/upload/<?php echo $key->foto ?>" class="img-fluid" alt="">
                <a href="<?php echo base_url()?>assets/upload/<?php echo $key->foto ?>" data-lightbox="portfolio" data-title="<?php echo $key->judulFilm ?>" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="<?php echo site_url()?>/jadwal/deskripsi/<?php echo $key->noFilm?>" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#"><?php echo $key->judulFilm ?></a></h4>
                
              </div>
            </div>
          </div>
          <?php   
} ?>
        </div>

      </div>
    </section>
    <section id="team">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3>GALLERY</h3>
         
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <figure>
               <a href="<?php echo base_url()?>assets/user/img/gallery1.jpg" data-lightbox="portfolio"class="link-preview" title="Preview">
                <img src="<?php echo base_url()?>assets/user/img/gallery1.jpg" class="img-fluid" alt="">
               </a>
                </figure>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
               <figure>
               <a href="<?php echo base_url()?>assets/user/img/gallery2.jpg" data-lightbox="portfolio"class="link-preview" title="Preview">
                <img src="<?php echo base_url()?>assets/user/img/gallery2.jpg" class="img-fluid" alt="" >
               </a>
                </figure>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
               <figure>
               <a href="<?php echo base_url()?>assets/user/img/gallery3.jpg" data-lightbox="portfolio"class="link-preview" title="Preview">
                <img src="<?php echo base_url()?>assets/user/img/gallery3.jpg" class="img-fluid" alt="">
               </a>
                </figure>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
                <figure>
               <a href="<?php echo base_url()?>assets/user/img/gallery4.jpg" data-lightbox="portfolio"class="link-preview" title="Preview">
                <img src="<?php echo base_url()?>assets/user/img/gallery4.jpg" class="img-fluid" alt="">
               </a>
                </figure>
            </div>
          </div>
        </div>

      </div>
    </section><!-- #team -->

    <!--==========================
      About Us Section
    ============================-->
  

    <!--==========================
      Services Section
    ============================-->
   

    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
        <h3>ABOUT US</h3>
        <p> IniCinema (dulu dikenal sebagai jaringan Cineplex) merupakan jaringan bioskop yang telah tersebar di Jawa-Bali. Telah berpengalaman bertahun-tahun dalam menyajikan kenyamanan menonton ribuan judul-judul film terbaik Dunia dan Indonesia. Nikmati ketajaman visual dan kenyamanan menonton dengan harga paling kompetitif bersama kami</p>
      </div>
    </section><!-- #call-to-action -->

    <!--==========================
      Skills Section
    ============================-->
   <!-- #facts -->
<!-- #portfolio -->

    <!--==========================
      Clients Section
    ============================-->

    <!--==========================
      Clients Section
    ============================-->
   
    <!--==========================
      Team Section
    ============================-->
    
    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Contact Us</h3>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>Dinoyo City Lt. 4, Jalan M.T. Haryono No. 195,  Lowokwaru, Dinoyo, Kec. Lowokwaru Malang 

</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">(0341) 5022949</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">inicinema@gmail.com</a></p>
            </div>
          </div>

        </div>

      
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

         

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>BizPage</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="<?php echo base_url()?>assets/user/lib/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url()?>assets/user/lib/jquery/jquery-migrate.min.js"></script>
  <script src="<?php echo base_url()?>assets/user/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url()?>assets/user/lib/easing/easing.min.js"></script>
  <script src="<?php echo base_url()?>assets/user/lib/superfish/hoverIntent.js"></script>
  <script src="<?php echo base_url()?>assets/user/lib/superfish/superfish.min.js"></script>
  <script src="<?php echo base_url()?>assets/user/lib/wow/wow.min.js"></script>
  <script src="<?php echo base_url()?>assets/user/lib/waypoints/waypoints.min.js"></script>
  <script src="<?php echo base_url()?>assets/user/lib/counterup/counterup.min.js"></script>
  <script src="<?php echo base_url()?>assets/user/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?php echo base_url()?>assets/user/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url()?>assets/user/lib/lightbox/js/lightbox.min.js"></script>
  <script src="<?php echo base_url()?>assets/user/lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="<?php echo base_url()?>assets/user/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="<?php echo base_url()?>assets/user/js/main.js"></script>

</body>
</html>
