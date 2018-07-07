
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
                        <a href="<?php echo site_url()?>/TabelUser/daftarUser" class="btn pull-right hidden-sm-down btn-success"> Kembali</a>
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
                <?php echo form_open_multipart('TabelUser/update/'.$this->uri->segment(3)); ?>
                <legend><center>Edit User</center></legend>
                <?php echo validation_errors(); ?>
                <div class="form-group">
                <label for="">Username</label>
                <input type="text" class="form-control" name="username" value="<?php echo $userAdmin[0]->username ?>" placeholder="username" >
                </div>
                <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" name="password" value="<?php echo $userAdmin[0]->password ?>" placeholder="password" >
                </div>
                <div class="form-group">
                <label for="">Nama</label>
                <input type="text" class="form-control" name="nama" value="<?php echo $userAdmin[0]->nama ?>" placeholder="nama" >
                </div>
                <div class="form-group">
                <label for="">Alamat</label>
                <input type="text" class="form-control" name="alamat" value="<?php echo $userAdmin[0]->alamat ?>" placeholder="alamat" >
                </div>
                <div class="form-group">
                <label for="">Telepon</label>
                <input type="text" class="form-control" name="telepon" value="<?php echo $userAdmin[0]->telepon ?>" placeholder="telepon" >
                </div>
                <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" name="email" value="<?php echo $userAdmin[0]->email ?>" placeholder="email" >
                </div>
                <div class="form-group">
                <label class="col-lg-2 col-sm-2 control-label">Saldo</label>
                <input type="text" class="form-control" name="saldo" value="<?php echo $userAdmin[0]->saldo ?>" placeholder="">
                </div>
                <div class="form-group">
                <label for="col-lg-2 col-sm-2 control-label">Foto</label>
                <input type="file" class="form-control" name="foto" value="<?php echo $userAdmin[0]->foto ?>" placeholder="upload foto" >
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
