<style type="text/css">

 @import url("http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,400italic");
    @import url("//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css")

</style> 
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
  <link href="<?php echo base_url()?>assets/user/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/user/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/user/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/user/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/user/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/user/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/user/css/style.css" rel="stylesheet">
</head>

<body style="overflow-y:auto;">
<div style="background: url(<?php echo base_url()?>assets/user/img/call-to-action-bg.jpg); padding: 90px;  height: auto;top: 0; left: 0; overflow-y:auto;">
<div style="background: url(<?php echo base_url()?>assets/user/img/bgblack.jpg); color: white; height: 241px; padding: 50px; text-align: center; width: 1170px;">
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">IniCinema</a></h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li ><a href="<?php echo site_url()?>/homeUser">Home</a></li>
          <li class="menu-active"><a href="<?php echo site_url()?>/jadwal">Schedule</a></li>
          <li><a href="<?php echo site_url()?>/ProfilUser/pesan">Order</a></li>
        <?php   if($this->session->userdata('logged_in')) { ?>
          <li class="menu-has-children"><a href=""><?php  echo $this->session->userdata('logged_in')['username'] ?></a>
            <ul>
              <li><a href="#">Profil</a></li>
              <li><a href="<?php echo site_url()?>/login/logout">Logout</a></li>
          </li>
          <?php   }else{ ?>
          <li><a href="<?php echo site_url()?>/login">login</a></li>
          <?php   } ?>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header>
 <div class="container">
 <div class="row">
      <div class="[ col-xs-8 col-sm-offset-1 col-sm-9 ]">
 <p align="left"> WELCOME TO <br><font size="20">DELUX</font><BR>STUDIO INI CINEMA</p>
</div>
 <div class="[ col-xs-3 col-sm-offset-5 col-sm-3 ] ">
 
 <font size="100px">&nbsp;&nbsp;<?php echo $daftarStudio[0]->namaStudio?></font><br>&nbsp;&nbsp;&nbsp;&nbsp;STUDIO
 </div>
 
 </div>
 </div>
 </div>
  <section id="services">
      <div class="container">
        <header class="section-header wow fadeInUp">
          <h3>SPECIFICATION</h3>
          </header>
          <p align="center">Kapasitas : <?php echo $daftarStudio[0]->jumlahKursi?> orang <br>Jenis Kursi &nbsp;&nbsp; : Comfortable Sofa Chair<br>Jarak Layar : Kurang lebih 4 meter dari kursi terdepan dengan layar</p>
          
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
 </div></div>
 </section>
 <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>Services</h3>
        </header>

        <div class="row">

          <div class="col-lg-6 col-md-8 box wow bounceInUp" data-wow-duration="1.4s">
            
           <img src="<?php echo base_url()?>assets/user/img/gallery1.jpg" width="550px" height="370px" alt="">
          </div>
          <div class="col-lg-6 col-md-8 box wow bounceInUp" data-wow-duration="1.4s">
            <br>
            <h3 align="left"><font color="black">Nyaman dan Pas</font></h3>
            <h5 align="left" >Studio <?php echo $daftarStudio[0]->namaStudio?> Executive Movimax Dinoyo menawarkan kenyamanan prima saat menonton bersama rekan-rekan Anda.</h5>
          </div>
          <div class="col-lg-6 col-md-8 box wow bounceInUp" data-wow-duration="1.4s">
            <br>
            <h3 align="right"><font color="black">Harga Terjangkau</font></h3>
            <h5 align="right" >Kini dengan fasilitas sedemikian lengkap tidak pakai mahal lagi. Nikmati sekarang di Ini Cinema</h5>
          </div>
          <div class="col-lg-6 col-md-8 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <img src="<?php echo base_url()?>assets/user/img/gallery1.jpg" width="550px" height="370px" alt="">
          </div>

        </div>

      </div>
    </section>
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
