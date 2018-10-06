<div class="col-md-9"> 
<div style="background:#202120; color: white; height: 241px; text-align: center; margin-left: -20px;min-height: 1000px"><br>
<div class="container"> 
<div class="title"> TAMBAH SALDO</div><br>
<div align="left" style="background-color: green; font-size: 17px; padding: 10px; margin-bottom: 50px;">Pembayaran dapat dilakukan dengan transfer ke nomer rekening yang tertera dibawah ini, setelah melakukan proses transfer harap mengisi form konfirmasi.
</div>

<div style="border-radius: 15px;background: #919093;
    padding: 20px; width:800px; margin-left: 130px" align="center">
<table style="color: white" >
  <tr >
      <td width="200px" >
        <img src="<?php echo base_url()?>assets/images/bca.png" width="100px">  
      </td>
      <td width="300px">
          Nomer Rekening <br> Nama Pemilik Rekening 
      </td>
      <td width="250px">
         3456785678 <br> nana 
      </td>
  </tr>
</table>
</div>
<div style="border-radius: 15px;background:#919093;
    padding: 20px; width:800px; margin-top: 20px;margin-left: 130px" align="center">
<table style="color: white" >
  <tr >
      <td width="200px" >
        <img src="<?php echo base_url()?>assets/images/bca.png" width="100px">  
      </td>
      <td width="300px">
          Nomer Rekening <br> Nama Pemilik Rekening 
      </td>
      <td width="250px">
         3456785678 <br> nana 
      </td>
  </tr>
</table>
</div>
<div style="border-radius: 15px;background: #919093;
    padding: 20px; width:800px;margin-top: 20px;margin-left: 130px" align="center">
<table style="color: white" >
  <tr >
      <td width="200px" >
        <img src="<?php echo base_url()?>assets/images/bca.png" width="100px">  
      </td>
      <td width="300px">
          Nomer Rekening <br> Nama Pemilik Rekening 
      </td>
      <td width="250px">
         3456785678 <br> nana 
      </td>
  </tr>
</table>
</div>



<div align="left" style="margin-top: 30px; margin-bottom: 20px">KONFIRMASI PENGISIAN SALDO<hr color="green" width="270px" align="left"></div>

<div align="left"> 
    <?php echo form_open_multipart('ProfilUser/isisaldo'); ?>
    <?php echo validation_errors(); ?>
                <div class="form-group">
                <label for="">Saldo</label>
                <input type="text" class="form-control xx" name="saldo" value="" placeholder="jumlah saldo yang anda transfer" style="border-radius: 0px; background-color: #161616;color: white">
                </div>
                <div class="form-group">
                <label for="">Bukti Transfer</label><br>
                 <input type="file" class="input100" name="foto" value="" placeholder="upload foto" >
               
                </div>
              
                <button type="submit" class="btn btn-primary" style="border-radius: 0px;font-size: 16px; width: 100px">Kirim</button>
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
