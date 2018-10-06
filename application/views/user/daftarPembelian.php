<div class="col-md-9"> 
<div style="background:#202120; color: white; height: 241px; text-align: center; margin-left: -20px;min-height: 1000px"><br>
<div class="container">
<div class="title">Daftar Pembelian</div><br>
<p align="left"><a href="<?php echo site_url()?>/HomeUser">Beranda</a></p><br>
 <div class="row">
                    <!-- Column -->
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" cellspacing="0" id="example" width="100%">
                            <thead>
                                <tr>
                                    <td><b>Kode Booking</b></td>
                                    <td><b>Tanggal</b></td>
                                    <td><b>Judul Film</b></td>
                                    <td><b>Studio</b></td>
                                     <td><b>QR</b></td>
                                    <td><b>Total </b></td>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php foreach ($datapembelian as $key ) { ?>
                                    <tr>
                                        <td><?php echo $key->noPembelian ?></td>
                                        <td><?php echo $key->tanggalPesan ?></td>
                                        <td><?php echo $key->judulFilm ?></td>
                                        <td><?php echo $key->namaStudio ?></td>
                                      <td><img src="<?php echo base_url().'assets/images/'.$key->noPembelian.'.png' ?>" alt=""></td>
                                        <td><?php echo $key->totalHarga?></td>
                                    
                  
                                    </tr>
                                    <?php } ?>
                            </tbody>
                        </table>
                    </div>
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
 <script src="<?php echo base_url()?>assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>

        <!-- <script type="text/css" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script> -->
        <script src="<?php echo base_url();?>assets/datatables/jquery-2.2.4.js"></script>
        <script src="<?php echo base_url();?>assets/datatables/jquery-2.2.4.min.js"></script>
        <script src="<?php echo base_url();?>assets/datatables/jquery.dataTables.min.js"></script>      
        <link rel="stylesheet" href="<?php echo base_url();?>assets/datatables/jquery.dataTables.min.css">
        <script type="text/javascript">
            $(document).ready(function(){
                $('#example').DataTable();
            });
        </script>
  <!-- Template Main Javascript File -->
  <script src="<?php echo base_url()?>assets/user/js/main.js"></script>

</body>
</html>
