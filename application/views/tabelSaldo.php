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
                                    <td><b>Id Transaksi</b></td>
                                    <td><b>Username</b></td>
                                    <td><b>Tanggal Transaksi</b></td>
                                    <td><b>Jumlah Saldo</b></td>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($daftarSaldo as $key) {?>
                                    <tr>
                                        <td><?php echo $key->idTransaksi ?></td>
                                        <td><?php echo $key->username ?></td>
                                        <td><?php echo $key->tanggalBeli ?></td>
                                        <td><?php echo $key->jumlah ?></td>
                                        <td>
                                            <a href="<?php echo site_url()?>/TabelSaldo/update/<?php echo $key->idTransaksi; ?>"><button class="btn btn-secondary">Update</button></a>
                                            <a href="<?php echo site_url()?>/TabelSaldo/delete/<?php echo $key->idTransaksi; ?>" onclick="return confirm('Are you sure to delete this data permanently?');"><button class="btn btn-warning">Delete</button></a>
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
                    <h4 class="modal-title">Tambah Saldo</h4>
                </div>
                <form class="form-horizontal" action="<?php echo site_url('TabelSaldo/insertData/')?>" method="post" enctype="multipart/form-data" role="form">
                    <div class="modal-body">
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Username</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="username" placeholder="username">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Tanggal Transaksi</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="tanggalBeli" value="" placeholder="00-00-0000" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Saldo</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="jumlah" placeholder="0">
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
        <!-- <script src="<?php //echo base_url();?>assets/datatables/jquery-2.2.4.min.js"></script> -->
        <script src="<?php echo base_url();?>assets/datatables/jquery.dataTables.js"></script>      
        <link rel="stylesheet" href="<?php echo base_url();?>assets/datatables/jquery.dataTables.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/datatables/dataTables.bootstrap.css">

<!--         <script type="text/javascript">
            $(document).ready(function(){
                $('#example').DataTable();
            });
        </script>
 -->
    <script>
        $(document).ready(function() {
            // Untuk sunting
            $('#tambah-data').on('show.bs.modal', function (event) {
                var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
                var modal = $(this)
 
                // Isi nilai pada field
                modal.find('#idTransaksi').attr("value",div.data('idTransaksi'));
                modal.find('#tanggalBeli').attr("value",div.data('tanggalBeli'));
                modal.find('#username').attr("value",div.data('username'));
                modal.find('#jumlah').attr("value",div.data('jumlah'));
            });
        });
</script>
</body>

</html>
