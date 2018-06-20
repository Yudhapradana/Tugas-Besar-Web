

        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Table</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Table</li>
                        </ol>
                    </div>
                   
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
             <div>
              <div class="row">
                    <!-- column -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-block">
                                    
            <?php echo form_open('TabelJadwal/updateJadwalById/'.$this->uri->segment(3));?>
        <?php foreach ($list as $key) {
         $fi = $key->noFilm;
         $st = $key ->idStudio;  ?>
        <div class="form-group">
              <label class="col-lg-2 col-sm-2 control-label">Film</label>
                <div class="col-lg-12">
                <input type="text" name="id" id="id" hidden="">
                        <select class="form-control" name="film" id="film" >
                                 <?php foreach($film_list as $row) { 
                                    $film=$row->noFilm;
                                    ?>
                                <option <?php  if($film==$fi) echo"selected";?> value="<?php echo $row->noFilm;?>"><?php echo $row->judulFilm;?></option>
                                <?php } ?>
                              
                        </select>
                </div>
        </div>

        <div class="form-group">
            <label class="col-lg-2 col-sm-2 control-label">Studio</label>
                <div class="col-lg-12">
                    <select class="form-control" name="studio" id="studio">
                             <?php foreach($studio_list as $row) { 
                                    $studio=$row->idStudio;
                                    ?>
                                <option <?php  if($st==$studio) echo"selected";?> value="<?php echo $row->idStudio;?>"><?php echo $row->namaStudio;?></option>
                                <?php } ?>
                    </select>
                </div>
        </div>
        <div class="form-group">
              <label class="col-lg-2 col-sm-2 control-label">Tanggal</label>
                                <div class="col-lg-12">
                <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo $key-> tanggalTayang ;?>" required="">
                </div>
        </div>
        <div class="form-group">
              <label class="col-lg-2 col-sm-2 control-label">Jam</label>
                                <div class="col-lg-12">
                <input type="time" class="form-control" name="jadwal" id="jadwal" value="<?php echo $key-> jadwalTayang ;?>" required="">
        </div>
        </div>
        <div class="form-group">
               <label class="col-lg-2 col-sm-2 control-label">Harga</label>
                                <div class="col-lg-12">
                <input type="text" class="form-control" name="harga" id="harga" value="<?php echo $key-> harga ;?>" required="">
        </div>
        </div>
        <div align="right" style="margin-bottom: 20px; margin-right: 30px">
          <button class="btn-info" type="submit">Update</button>
            <a href=""><button class="btn-warning" data-dismiss="modal">Batal</button></a>
        </div>
        <?php   } ?>
        <?php echo form_close(); ?>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
    
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
                                                              
          <footer class="footer text-center">
                © 2017 Monster TabelJadwal by wrappixel.com
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>



    
    </div>
    </div>
    </div>
</div>






    <!-- ============================================================== -->





    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url()?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url()?>assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="<?php echo base_url()?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url()?>assets/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url()?>assets/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url()?>assets/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url()?>assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url()?>assets/js/custom.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/flot-data.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url()?>assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>

</body>

</html>
