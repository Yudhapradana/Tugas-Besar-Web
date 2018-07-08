

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
                            <li class="breadcrumb-item active">Tabel Jadwal</li>
                        </ol>
                    </div>
                    <div class="col-md-6 col-4 align-self-center">
                        <a data-toggle="modal" data-target="#myModal"><button  class="btn pull-right hidden-sm-down btn-success">Tambah</button></a>
                    </div>
                    <div class="col-md-6 col-4 align-self-center">
                        <a href="<?php echo site_url()?>/TabelJadwal/createPdf/"><button  class="btn pull-right hidden-sm-down btn-success">Download</button></a>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-block">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered" cellspacing="0" id="example" width="100%">
                                        <thead>
                                            <tr>
                                                <td><b>Id Jadwal</b></td>
                                                <td><b>Film</b></td>
                                                <td><b>Studio</b></td>
                                                <td><b>Tanggal</b></td>
                                                <td><b>Jam</b></td>
                                                <td><b>Harga</b></td>
                                                <td colspan="2"><b>Aksi</b></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($jadwal_list as $data) { ?>
                                            <tr>
                                                <td><?php echo $data->idJadwal ?></td>
                                                <td><?php echo $data->noFilm ?>-<?php echo $data->judulFilm ?></td>
                                                <td><?php echo $data->idStudio ?>-<?php echo $data->namaStudio ?></td>
                                                <td><?php echo $data->tanggalTayang ?></td>
                                                <td><?php echo $data->jadwalTayang ?></td>
                                                <td><?php echo $data->harga ?></td>
                                              
                                    <td><a href="<?php echo site_url()?>/TabelJadwal/updateJadwalById/<?php echo $data->idJadwal; ?>"><button class="btn btn-info">Update</button></a>
                                     <a href="<?php echo site_url()?>/TabelJadwal/deleteJadwal/<?php echo $data->idJadwal; ?>" onclick="return confirm('Are you sure to delete this data permanently?');"><button class="btn btn-warning">delete</button></a></td>

                                            </tr>
                                            <?php }  ?>
                                        </tbody>
                                    </table>
                                </div>


                                
          
                            </div>

                        </div>
                    </div>
                </div>
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



    <!-- modal tambah -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade-in">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data</h4>
                </div>
    <?php echo form_open('TabelJadwal/addJadwal');?>
    <div class="modal-body">
        <div class="form-group">
              <label class="col-lg-2 col-sm-2 control-label">Film</label>
                <div class="col-lg-12">
                        <select class="form-control" name="film2">
                                <option  value="">Select Film</option>                   
                                <?php foreach($film_list as $row) { ?>
                                <option value="<?php echo $row->noFilm;?>"><?php echo $row->judulFilm;?></option>
                                <?php } ?>
                        </select>
                </div>
        </div>

        <div class="form-group">
                <label class="col-lg-2 col-sm-2 control-label">Studio</label>
                <div class="col-lg-12">
                    <select class="form-control" name="studio2">
                                <option  value="">Select Film</option>                   
                                <?php foreach($studio_list as $row) { ?>
                                <option value="<?php echo $row->idStudio;?>"><?php echo $row->namaStudio;?></option>
                                <?php } ?>
                    </select>
                </div>
        </div>
        
        <div class="form-group">
               <label class="col-lg-2 col-sm-2 control-label">Tanggal</label>
                                <div class="col-lg-12">
                <input type="date" class="form-control" name="tanggal2" value="" required="">
        </div>
        </div>
        <div class="form-group">
               <label class="col-lg-2 col-sm-2 control-label">Jam</label>
                                <div class="col-lg-12">
                <input type="time" class="form-control" name="jadwal2" value="" required="">
        </div>
        </div>
        <div class="form-group">
                <label class="col-lg-2 col-sm-2 control-label">Harga</label>
                                <div class="col-lg-12">
                <input type="text" class="form-control" name="harga2" value="" required="">
        </div>
        </div>
        <div align="right" style="margin-bottom: 20px; margin-right: 30px">
          <button class="btn-info" type="submit">Tambah</button>
            <a href=""><button class="btn-warning" data-dismiss="modal">Batal</button></a>
        </div>
        <?php echo form_close(); ?>
    </div>
    </div>
    </div>
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
    <script src="<?php echo base_url();?>assets/datatables/jquery-2.2.4.js"></script>
        <script src="<?php echo base_url();?>assets/datatables/jquery-2.2.4.min.js"></script>
        <script src="<?php echo base_url();?>assets/datatables/jquery.dataTables.min.js"></script>      
        <link rel="stylesheet" href="<?php echo base_url();?>assets/datatables/jquery.dataTables.min.css">
       <!--  <script type="text/javascript">
            $(document).ready(function(){
                $('#example').DataTable();
            });
        </script> -->


     <script>
        $(document).ready(function() {
            // Untuk sunting
            $('#edit-data').on('show.bs.modal', function (event) {
                var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
                var modal = $(this)
 
                // Isi nilai pada field
                modal.find('#id').attr("value",div.data('id'));
                modal.find('#film').attr("value",div.data('film'));
                modal.find('#studio').attr("value",div.data('studio'));
                modal.find('#tanggal').attr("value",div.data('tanggal'));
                modal.find('#jadwal').attr("value",div.data('jadwal'));
                modal.find('#harga').attr("value",div.data('harga'));
            
            });
        });
</script>

</body>

</html>
