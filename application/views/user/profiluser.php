
<div class="col-md-9"> 
<div style="background:#202120; color: white; height: 241px; text-align: center; margin-left: -20px;min-height: 1000px"><br>
<div class="container"> 
<div class="title"> PROFIL</div><br>
<div align="left">PENGATURAN PROFIL<hr color="green" width="200px" align="left"></div>
<div align="left"> 
    <?php echo form_open_multipart('ProfilUser/update'); ?>
                <div class="form-group">
                <label for="">ID </label>
                <input type="text" class="form-control xx" name="id" value="<?php echo $daftarprofil[0]->idUserAdmin ?>" readonly placeholder="username" style="border-radius: 0px; background-color: #161616;color: white">
                </div>
                <div class="form-group">
                <label for="">Username</label>
                <input type="text" class="form-control xx" name="username" value="<?php echo $daftarprofil[0]->username ?>" placeholder="username" style="border-radius: 0px; background-color: #161616;color: white">
                </div>
               
                <div class="form-group">
                <label for="">Nama</label>
                <input type="text" class="form-control" name="nama" value="<?php echo $daftarprofil[0]->nama?>" placeholder="nama" style="border-radius: 0px; background-color: #161616;color: white">
                </div>
                <div class="form-group">
                <label for="">Alamat</label>
                <input type="text" class="form-control" name="alamat" value="<?php echo $daftarprofil[0]->alamat?>" placeholder="alamat" style="border-radius: 0px; background-color: #161616;color: white" >
                </div>
                <div class="form-group">
                <label for="">Telepon</label>
                <input type="text" class="form-control" name="telepon" value="<?php echo $daftarprofil[0]->telepon?>" placeholder="telepon" style="border-radius: 0px; background-color: #161616;color: white" >
                </div>
                <div class="form-group">
                <label for="" >Email</label>
                <input type="text" class="form-control xx" name="email" value="<?php echo $daftarprofil[0]->email?>" placeholder="email" style="border-radius: 0px; background-color:#161616;color: white" >
                </div>
                
                <button type="submit" class="btn btn-primary" style="border-radius: 0px;font-size: 14px;">Update My Profil</button>
  <?php echo form_close(); ?>
            </div>




</div>
<div class="container">
<div align="left">UBAH PASSWORD<hr color="green" width="200px" align="left"></div>
<div align="left">
  
 <div class="form-group">
  <?php echo form_open_multipart('ProfilUser/updatePass'); ?>
                <label for="">Password BARU</label>
                <input type="password" class="form-control" name="password" value="" placeholder="password" style="border-radius: 0px; background-color: #161616;color: white" >
                </div>
                <button type="submit" class="btn btn-primary" style="border-radius: 0px;font-size: 14px;">Update Password</button>
  <?php echo form_close(); ?>
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
