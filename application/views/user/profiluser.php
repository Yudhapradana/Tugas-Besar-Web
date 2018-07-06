<style type="text/css">

 @import url("http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,400italic");
    @import url("//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css");
.nama{
  font-size: 12px;
  padding-left: 20px;

}
.form-group{
  font-size: 14px;
}
.form-control{
  font-size: 14px;
}
.saldo{
  border-left: 1px solid white;
   border-top: 1px solid white;
   border-right: 1px solid white;
   border-bottom: 1px solid white; 
   margin-left: 13px; margin-right: 11px;


}

.title{
  
  text-align: left;
  font-family: Quicksand,sans-serif;
  font-size:40px;

}
.ket{
   margin-left: 13px; margin-right: 11px;
   background-color: green;
   font-size: 12px; padding-top: 10px;padding-bottom: 10px;


}
 .tombol{
  width:  200px;
  height: 50px;
border:0px;
    border-radius: 0;
    color: white;
    background:black;
    text-align: left}
  .tombol:hover {
   background: grey;
   color: white;
}

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
<div style="background: url(<?php echo base_url()?>assets/user/img/call-to-action-bg.jpg); padding-left: 90px;  height: auto;top: 0; left: 0; overflow-y:auto; min-height: 1000px; overflow-x: hidden;">
<div class="row">
<div class="col-md-2"> 
<div style="background: black; color: white; height: 241px; text-align: left; min-height: 1000px; margin-right: -10px;">
    <img src="<?php echo base_url()?>assets/upload/<?php echo $this->session->userdata('logged_in')['foto'] ?>" alt="" width="100px" height="130px" style="margin-left: 50px;margin-top: 20px"><br><br>
    <div align="center" class="nama"> malak diana dewi<br>malakdiana@gmail.com</div><br>
    <div class="saldo">&nbsp;SALDO &nbsp;&nbsp;: 0 </div><br>
    <div class="ket" align="center">HARAP ISI BALANCE/SALDO ANDA. PENGISIAN DAPAT DILAKUKAN DI SEMUA CABANG INI CINEMA </div><br>
   <hr color="green"  style="margin-bottom:1px">
    <a href="<?php echo site_url()?>/profiluser/profil"><button class="tombol">&nbsp;&nbsp;<i class="fa fa-user"></i>&nbsp;&nbsp;&nbsp;Profil </button> <hr color="green"  style="margin-bottom:1px;margin-top: 1px"></a>
    <a href="<?php echo site_url()?>/profiluser/pesan">
    <button class="tombol">&nbsp;&nbsp;<i class="fa fa-play"></i>&nbsp;&nbsp;&nbsp;Pesan Tiket</button><hr color="green"  style="margin-bottom:1px;margin-top: 1px"></a>
    <button class="tombol">&nbsp;&nbsp;<i class="fa fa-table"></i>&nbsp;&nbsp;&nbsp;Daftar Pesanan</button><hr color="green" style="margin-bottom:1px;margin-top: 1px">
    <a href="<?php echo site_url()?>/login/logout"><button class="tombol">&nbsp;&nbsp;<i class="fa fa-sign-out"></i>&nbsp;&nbsp;&nbsp;Keluar</button></a><hr color="green"  style="margin-bottom:1px;margin-top: 1px">

</div>
</div>
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
                <label for="">Password</label>
                <input type="text" class="form-control" name="password" value="<?php echo $daftarprofil[0]->password;?>" placeholder="password" style="border-radius: 0px; background-color: #161616;color: white" >
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
