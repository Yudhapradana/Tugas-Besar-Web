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
                
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4"></div>
                    <div class="col-lg-7">
                        <!-- <h1>Selamat Datang <?php //echo $username; ?></h1> -->
                    <div class="table-responsive container">
                        <table class="table table-striped table-bordered container">
                            <?php foreach ($daftarAdmin as $key ) { ?>
                            <tr>
    
                                <td colspan="2"><img src="<?php echo base_url()?>assets/upload/<?php echo $key['foto']; ?>" class="img-circle" height="400" width="400"></td>
                                
                            </tr>
                            <tr>
                                <td><b>Nama</b></td>
                                <td><b><?php echo $key['nama'] ?></b></td>
                            </tr>
                            
                            <tr>
                                <td><b>Alamat</b></td>
                                <td><b><?php echo $key['alamat'] ?></b></td>
                            </tr>
                            <tr>
                                <td><b>Telepon</b></td>
                                <td><b><?php echo $key['telepon'] ?></b></td>
                            </tr>
                            <tr>
                                <td><b>Email</b></td>
                                <td><b><?php echo $key['email'] ?></b></td>
                            </tr>
                            <tr>
                                <td><b>Username</b></td>
                                <td><b><?php echo $key['username'] ?></b></td>
                            </tr>
                            <tr>
                                <td><b>Saldo</b></td>
                                <td><b><?php echo $key['saldo'] ?></b></td>
                            </tr>

                            <?php } ?>
                        </table>
                    </div>
                    </div>
                    <div class="col-lg-1"></div>
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
    <script src="<?php echo base_url()?>assets/js/flot-data.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url()?>assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>

</body>

</html>
