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
                        <a data-toggle="modal" data-target="#tambah-data"><button  class="btn pull-right hidden-sm-down btn-success">Tambah</button></a>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <?=$this->session->flashdata('notif')?>
                <div class="row">
                    <!-- Column -->
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" cellspacing="0" id="example" width="100%">
                            <thead>
                                <tr>
                                    <td><b>Id User</b></td>
                                    <td><b>Username</b></td>
                                    <td><b>Nama</b></td>
                                    <td><b>Alamat</b></td>
                                    <td><b>Telepon</b></td>
                                    <td><b>Email</b></td>
                                    <td><b>Aksi</b></td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($daftarUser as $key ) { ?>
                                    <tr>
                                        <td><?php echo $key->idUserAdmin ?></td>
                                        <td><?php echo $key->username ?></td>
                                        <td><?php echo $key->nama ?></td>
                                        <td><?php echo $key->alamat ?></td>
                                        <td><?php echo $key->telepon ?></td>
                                        <td><?php echo $key->email ?></td>
                                        <td>
                                            <a href="<?php echo site_url()?>/TabelUser/update/<?php echo $key->idUserAdmin; ?>"><button class="btn btn-secondary">Update</button></a>
                                            <a href="<?php echo site_url()?>/TabelUser/deleteUser/<?php echo $key->idUserAdmin; ?>" onclick="return confirm('Are you sure to delete this data permanently?');"><button class="btn btn-warning">Delete</button></a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                            </tbody>
                        </table>
                    </div>

    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="tambah-data" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                    <h4 class="modal-title">Tambah User</h4>
                </div>
                <form class="form-horizontal" action="<?php echo site_url('tabelUser/addUser')?>" method="post" enctype="multipart/form-data" role="form">
                    <div class="modal-body">
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Username</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="username" placeholder="username">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Password</label>
                                <div class="col-lg-10">
                                    <input type="password" class="form-control" name="password" placeholder="password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Nama</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="nama" placeholder="nama">
                                </div>
                            </div>
                             <div class="form-group">
                                <div class="form-group">
                                <label for="col-lg-2 col-sm-2 control-label">Foto</label>
                                <div class="col-lg-10">
                                <input type="file" class="form-control" name="foto" value="" placeholder="upload foto" >
                            </div>
                                <label class="col-lg-2 col-sm-2 control-label">Alamat</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="alamat" placeholder="alamat"></textarea>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Telepon</label>
                                <div class="col-lg-10">
                                    <input class="form-control" name="telepon" placeholder="telepon">
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Email</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="email" placeholder="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Saldo</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="saldo" placeholder="0">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Role</label>
                                <div class="col-lg-10">
                                    <select name="level" class="form-control">
                                        <option value="">---</option>
                                        <option value="admin">Super Admin</option>
                                        <option value="user">Admin</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
                            <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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

    <script>
        $(document).ready(function() {
            // Untuk sunting
            $('#edit-data').on('show.bs.modal', function (event) {
                var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
                var modal = $(this)
 
                // Isi nilai pada field
                modal.find('#idAdmin').attr("value",div.data('idAdmin'));
                modal.find('#nama').attr("value",div.data('nama'));
                modal.find('#alamat').attr("value",div.data('alamat'));
                modal.find('#telepon').attr("value",div.data('telepon'));
                modal.find('#email').attr("value",div.data('email'));
                modal.find('#username').attr("value",div.data('username'));
                modal.find('#password').attr("value",div.data('password'));
            });
        });
</script>
</body>

</html>
