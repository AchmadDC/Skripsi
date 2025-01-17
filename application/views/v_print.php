<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!--<link href="<?php echo base_url(); ?>assets/css/jquery-ui.css" rel="stylesheet">-->
    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <!--<script src="" type="text/javascript"></script>-->

    <!-- Page level plugin CSS-->
    <link href="<?php echo base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url(); ?>assets/css/sb-admin.css" rel="stylesheet">

    <script src="<?php echo base_url(); ?>assets/node_modules/sweetalert/dist/sweetalert.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/node_modules/jquery-mask-plugin/dist/jquery.mask.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!--<script src="<?php echo base_url(); ?>assets/js/jquery-ui.js" ></script>-->
    <body onload="window.print()">
       
        <div  class="page-content">
       

        
        <!-- DataTables Example -->
          <div class="card mb-3" id="cardbayar">
    <div class="card-header">
        <center>
            <img class="nav-user-photo" src="<?php echo base_url();?>assets/avatars/kop221.png"/>
            <b>
                <h5><?php echo $tittle; ?><br></h5>
                <h6><?php echo $subtittle; ?><br></h6>
            </b>
        </center>
    </div>
</div>
            <div class="card-body">
              <div class="table">
                <table class="table table-bordered" id="tabelbayar" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th class="center">No</th>
                        <th class="">Nama Pegawai</th>
                        <th class="center">Tahunan</th>
                        <th class="center">Bulanan</th>
                        <th class="center">Laporan Tahunan</th>
                        <th class="center">Laporan Bulanan</th>
                        <th class="center">KAK</th>
                        <th class="center">SOP</th>
                        <th class="center">SPJ</th>
                        <th class="center">Buku Visum</th>
                        <th class="center">Cakupan</th>
                        <th class="center">Service</th>
                        <th class="center">Inovatif</th>
                        <th class="center">Profesional</th>
                        <th class="center">Skoring</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    <?php $no=1; foreach ($datafilter as $row){
                        ?>
                      <tr>

                        <td class="center"><?php echo $no ?></td>
                        <td class=""><?php echo $row->nama_pegawai?></td>
                        <td class="center"><?php echo $row->p1_tahunan?></td>
                        <td class="center"><?php echo $row->p1_bulanan?></td>
                        <td class="center"><?php echo $row->p2_lap_tahun?></td>
                        <td class="center"><?php echo $row->p2_lap_bulan?></td>
                        <td class="center"><?php echo $row->p2_kak?></td>
                        <td class="center"><?php echo $row->p2_sop?></td>
                        <td class="center"><?php echo $row->p2_spj?></td>
                        <td class="center"><?php echo $row->p2_buku_visum?></td>
                        <td class="center"><?php echo $row->p2_cakupan?></td>
                        <td class="center"><?php echo $row->p3_servis?></td>
                        <td class="center"><?php echo $row->p3_inovatif?></td>
                        <td class="center"><?php echo $row->p3_profesional?></td>
                        <td class="center"><?php echo $row->skorsing?></td> 

                      </tr>
                            <?php
                                                                                    $no++;
                                                                                    }
                                                                                 ?>
                    
                  </tbody> 
                </table>
              </div>
            </div>

            <div class="card-body card-block">
    <div class="row form-group">
        <div id="form-tanggal" class="col col-md-6">
            <label for="select" class=" form-control-label"><b>KETEPATAN WAKTU MAKSIMAL TANGGAL 10</b></label><br>
            <label for="select" class=" form-control-label"><b>SKORING :</b></label><br>
            <label for="select" class=" form-control-label">NILAI 3: LAPORAN LENGKAP DAN TEPAT WAKTU</label><br>
            <label for="select" class=" form-control-label">NILAI 2: LAPORAN LENGKAP DAN TIDAK TEPAT WAKTU</label><br>
            <label for="select" class=" form-control-label">NILAI 1: LAPORAN TIDAK LENGKAP DAN TIDAK TEPAT WAKTU</label>
        </div>
        <div id="form-tanggal" class="col col-md-3 offset-md-3" style="margin-bottom: 5px;">
            <label for="select" class=" form-control-label">SUMEDANG, <?php echo date('d M Y')?></label><br>
            <label for="select" class=" form-control-label"><b>PENILAI</b></label>
        </div>
    </div>
    <div class="row form-group">
        <div id="form-tanggal" class="col col-md-6"></div>
        <div id="form-tanggal" class="col col-md-3 offset-md-3" style="margin-top: -10px;">
            <hr style="border-top: 1px solid #000; margin: 0;">
            <label for="select" class=" form-control-label">NIP;</label>
        </div>
    </div>
</div>




          </div>


            </div>
            </div>





        <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url(); ?>assets/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url(); ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url(); ?>assets/js/demo/datatables-demo.js"></script>
    
    </body>
    
</html>
