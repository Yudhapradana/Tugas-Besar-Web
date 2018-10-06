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
                            <li class="breadcrumb-item"><a href="">Home</a></li>
                            <li class="breadcrumb-item active">Tabel Saldo</li>
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
                                    <td><b>Id User</b></td>
                                    <td><b>Tanggal Transaksi</b></td>
                                    <td><b>Bukti Transfer</b></td>
                                    <td><b>Status</b></td>
                                    <td><b>Jumlah Saldo</b></td>
                                    <td><b>Aksi</b></td>
                                </tr>
                            </thead>
                            <tbody>
                                 <?php foreach ($daftarSaldo as $key) {?>
                                    <tr>
                                        <td><?php echo $key->idTransaksi ?></td>
                                        <td><?php echo $key->username ?></td>
                                        <td><?php echo date('d-n-Y', strtotime($key->tanggalBeli)) ?></td>
                                        <td>
                                        <div class="portfolio-wrap"><figure><a href="<?php echo base_url()?>assets/upload/buktisaldo/<?php echo $key->bukti;?>" data-lightbox="portfolio" data-title="<?php echo $key->username ?>" class="link-preview" title="Preview">
                                        <img src="<?php echo base_url()?>/assets/upload/buktisaldo/<?php echo $key->bukti;?>" alt="" width="200px" hight="200px">
                                            </a></figure></div></td>
                                        <td><?php echo $key->status ?></td>
                                        <td><?php echo $key->jumlah ?></td>
                                        <td>
                                            <!-- <a href="<?php// echo site_url()?>/TabelSaldo/update/<?php //echo $key->idTransaksi; ?>"><button class="btn btn-secondary">Update</button></a> -->



<a href="javascript:void(0);" onclick="showmodal('<?php echo $key->idTransaksi ?>','<?php echo $key->username ?>','<?php echo $key->jumlah ?>')" data-id="<?php echo $key->idTransaksi ?>" data-nama="<?php echo  $key->username ?>" data-jumlah="<?php echo $key->jumlah ?>" data-toggle="modal" data-target="#edit-data">
    <button data-toggle="modal"  class="btn btn-info">Konfirmasi</button>
</a>

                                            <a href="<?php echo site_url()?>/TabelSaldo/delete/<?php echo $key->idTransaksi; ?>" onclick="return confirm('Are you sure to delete this data permanently?');"><button class="btn btn-warning">Delete</button></a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    </div></div></div>

  <!-- Modal Ubah -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-data" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Konfirmasi Top Up Saldo</h4>
            </div>
            <?php echo form_open_multipart('TabelSaldo/konfirmasi'); ?>
                <div class="modal-body">
                        <div class="form-group">
                            <label class="col-lg-2 col-sm-2 control-label">User
                            </label>
                            <div class="col-lg-10">
                                <input type="hidden" id="id" name="id">
                                <input type="text" class="form-control" id="nama" name="nama">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 col-sm-2 control-label">Jumlah</label>
                            <div class="col-lg-10">
                                <textarea class="form-control" id="jumlah" 
                                name="jumlah" ></textarea>
                            </div>
                        </div>
                    <div class="modal-footer">
                        <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
                        <?php echo form_close(); ?>
                        <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
</div>

                  
            <footer class="footer text-center">
                © 2017 Monster Admin by wrappixel.com
            </footer>
<script type="text/javascript">
    function showmodal(id,user,jml){
        document.getElementById('id').value = id;
        document.getElementById('nama').value = user;
        document.getElementById('jumlah').value = jml;
    }
</script>
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
    <script src="<?php echo base_url();?>assets/datatables/jquery-2.2.4.js"></script>
    <script src="<?php echo base_url();?>assets/datatables/jquery-2.2.4.min.js"></script>
    <script src="<?php echo base_url();?>assets/datatables/jquery.dataTables.min.js"></script>      
    <link rel="stylesheet" href="<?php echo base_url();?>assets/datatables/jquery.dataTables.min.css">
        <script type="text/javascript">
            $(document).ready(function(){
                $('#example').DataTable();
            });
        </script>
         


   
</body>

</html>
