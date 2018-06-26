
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
                        <h3 class="text-themecolor m-b-0 m-t-0">Profile</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Profile</li>
                        </ol>
                    </div>
                    <div class="col-md-6 col-4 align-self-center">
                        <a href="<?php echo site_url()?>/TabelFilm/" class="btn pull-right hidden-sm-down btn-success"> Kembali</a>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div>
                <?php echo form_open_multipart('TabelFilm/createFilm'); ?>
                <legend><center>Tambah Data Film</center></legend>
                <?php echo validation_errors(); ?>
                <div class="form-group">
                    <label for="">Judul Film</label>
                    <input type="text" class="form-control" name="judulFilm" value="" placeholder="judulFilm" >
                </div>
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea class="form-control" name="deskripsiFilm" value="" placeholder="deskripsiFilm"> </textarea>
                </div>
                <div class="form-group">
                    <label for="">Foto</label>
                    <input type="file" class="form-control" name="foto" value="" placeholder="upload foto" >
                </div>
                <div class="form-group">
                    <label for="">Pemain</label>
                                    
                                        <input type="text" class="form-control" name="pemain" placeholder="pemain">
                                    
                                </div>
                                <div class="form-group">
                                    <label for="">Sutradara</label>
                                    
                                        <input type="text" class="form-control" name="sutradara" placeholder="sutradara">
                                    
                                </div>
                <center><button type="submit" class="btn btn-primary">Submit</button></center>
                <?php echo form_close(); ?>
            </div>
                    <!-- Column -->
                    <!-- Column -->
                    
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                © 2017 Monster Admin by wrappixel.com
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
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
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url()?>assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
