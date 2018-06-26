
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
                <?php echo form_open_multipart('TabelFilm/updateFilm/'.$this->uri->segment(3)); ?>
                <legend><center>Edit Data Film</center></legend>
                <?php echo validation_errors(); ?>
                <div class="form-group">
                <label for="">Judul Film</label>
                <input type="text" class="form-control" name="judulFilm" value="<?php echo $daftarFilm[0]->judulFilm ?>" >
                </div>
                <div class="form-group">
                <label for="">Deskripsi Film</label>
                <input type="text" class="form-control" name="deskripsiFilm" value="<?php echo $daftarFilm[0]->deskripsiFilm ?>" >
                </div>
                <div class="form-group">
                <label for="">Foto</label>
                <input type="file" class="form-control" name="foto" value="<?php echo $daftarFilm[0]->foto ?>" placeholder="upload foto" >
                </div>
                 <div class="form-group">
                <label for="">Pemain Film</label>
                <input type="text" class="form-control" name="pemain" value="<?php echo $daftarFilm[0]->pemain ?>" >
                </div>
                                <div class="form-group">
                                    <label for="">Produser</label>
                    <input type="text" class="form-control" name="produser" value="<?php echo $daftarFilm[0]->produser ?>" placeholder="produser" >
                </div>
                 <div class="form-group">
                <label for="">Sutradara Film</label>
                <input type="text" class="form-control" name="sutradara" value="<?php echo $daftarFilm[0]->sutradara ?>">
                </div>
                                    <label for="">Genre Film</label>
                    <input type="text" class="form-control" name="genre" value="<?php echo $daftarFilm[0]->genre ?>" placeholder="genre film" >
                </div>
                <div class="form-group">
                    <label for="">Durasi</label>
                    <input type="text" class="form-control" name="durasi" value="<?php echo $daftarFilm[0]->durasi ?>" placeholder="durasi" >
                </div>
                 <div class="form-group">
                    <label for="">Release Date</label>
                    <input type="text" class="form-control" name="releaseDate" value="<?php echo $daftarFilm[0]->releaseDate ?>" placeholder="release Date" >
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
