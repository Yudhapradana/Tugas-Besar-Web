<div class="col-md-9"> 
<div style="background:#202120; color: white; height: 241px; text-align: center; margin-left: -20px;min-height: 1000px"><br>
<div class="container"> 
<div class="title"> JUDUL FILM TERSEDIA</div><br>
<div align="left" style="background-color: green;padding-left: 20px; padding-top: 10px; padding-bottom: 10px">Pilihan Film Tersedia Untuk Di-booking Hari ini: <?php echo date('d-m-Y');?>.  Semua Jam yang ditunjukan dalam website ini menggunakan WIB (Waktu Indonesia Barat)</div><br><br>
<div align="left" class="row">
<?php foreach ($datafilm as $key){ ?>
    
<div class="col-md-2" style="background-color: grey; margin-left: 20px">
<img src="<?php echo base_url()?>assets/upload/<?php  echo $key->foto;?>" alt="" width="157" height="200" style="margin-left: -14px"><br>
<div style="font-size: 16px; height: 40px"><b> <?php  echo $key->judulFilm; ?></b></div><br>
<div style="font-size: 11px">  <?php  echo $key->durasi; ?> min <br>  <?php  echo $key->genre; ?><br> Now Playing </div><br>
<a href="<?php echo site_url()?>/profiluser/pilihjam/<?php  echo $key->noFilm;?>"><button class="btn btn-success" style="border-radius: 0px; width:140px; margin-left: -7px; height:30px; margin-bottom: 3px; font-size: 12px">PESAN SEKARANG</button></a>

  
</div>  
<?php   } ?> 
 

</div>

</div>
</div>
</div>

 <div class="container">
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
