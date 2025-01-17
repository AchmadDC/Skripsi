<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>E-kinerja</title>
		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
        <?php echo $css_js;?>
	<body>
		<div class="navbar">
			<?php echo $navbar;?>
		</div>

		<div class="main-container container-fluid">
			<a class="menu-toggler" id="menu-toggler" href="#">
				<span class="menu-text"></span>
			</a>

			<div class="sidebar" id="sidebar">
                            <?php echo $sidebar;?>
				
			</div>

			<div class="main-content">
				<div class="breadcrumbs" id="breadcrumbs">
					<ul class="breadcrumb">
						<li>
							<i class="icon-home home-icon"></i>
							<a href="<?php echo base_url();?>index.php/dashboard">Dashboard</a>

							<span class="divider">
								<i class="icon-angle-right arrow-icon"></i>
							</span>
						</li>
                                                <li class="active">Kelola Laporan Penilaian Kinerja</li>
					</ul><!--.breadcrumb-->
				</div>

				<div class="page-content">
                                    <a href="#modal-form" role="button" class="btn btn-info" data-toggle="modal"> Tambah Data </a>
                                    <a href="<?php echo base_url();?>index.php/laporan/cetak/" target="_blank" role="button" class="btn btn-yellow"> Cetak PDF </a>
                                    <a href="<?php echo base_url();?>index.php/dashboard" role="button" class="btn btn-default" data-toggle="modal"> Kembali </a>
                                    
						<div id="sample-table-2_wrapper " class="dataTables_wrapper" role="grid" >
                                                                <table id="sample-table-2" class="table table-striped table-bordered table-hover dataTable" aria-describedby="sample-table-2_info">
									<thead>
                                                                                <th class="center">No</th>
                                                                                <th class="center">Nama Pegawai</th>
                                                                                <th class="center">Nama Program</th>
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
                                                                                <th class="center">Aksi</th>
									</thead>

									
								<tbody role="alert" aria-live="polite" aria-relevant="all">
                                                                    <?php
                                                                        $no=1;
                                                                        foreach ($data_laporan as $row){
                                                                    ?>
                                                                    <tr class="odd">
                                                                                    <td class="center"><?php echo $no ?></td>
                                                                                    <td class=""><?php echo $row->nama_pegawai?></td>
                                                                                    <td class="center"><?php echo $row->nama_program?></td>
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

											<td class="td-actions ">
												<div class="hidden-phone visible-desktop action-buttons">
													<a class="green btn_edit" href="#"
                                                                                                                    data-nama_pegawai="<?php echo $row->nama_pegawai;?>"
                                                                                                                    data-nama_program="<?php echo $row->nama_program;?>"
                                                                                                                    data-p1_tahunan="<?php echo $row->p1_tahunan;?>"
                                                                                                                    data-p1_bulanan="<?php echo $row->p1_bulanan;?>"
                                                                                                                    data-p2_lap_tahun="<?php echo $row->p2_lap_tahun;?>"
                                                                                                                    data-p2_lap_bulan="<?php echo $row->p2_lap_bulan;?>"
                                                                                                                    data-p2_kak="<?php echo $row->p2_kak;?>"
                                                                                                                    data-p2_sop="<?php echo $row->p2_sop;?>"
                                                                                                                    data-p2_spj="<?php echo $row->p2_spj;?>"
                                                                                                                    data-p2_buku_visum="<?php echo $row->p2_buku_visum;?>"
                                                                                                                    data-p2_cakupan="<?php echo $row->p2_cakupan;?>"
                                                                                                                    data-p3_servis="<?php echo $row->p3_servis;?>"
                                                                                                                    data-p3_inovatif="<?php echo $row->p3_inovatif;?>"
                                                                                                                    data-p3_profesional="<?php echo $row->p3_profesional;?>"
                                                                                                                    data-skorsing="<?php echo $row->skorsing;?>"
                                                                                                                    data-toggle="modal"
                                                                                                                    >
                                                                                                                    <i class="icon-pencil bigger-130"></i>
                                                                                                        </a>

													<a class="red btn_hapus" href="#"
                                                                                                            data-id_laporan="<?php echo $row->id_laporan;?>"
                                                                                                            data-nama_pegawai="<?php echo $row->nama_pegawai;?>"
                                                                                                                    
                                                                                                            >
                                                                                                            <i class="icon-trash bigger-130"></i>
                                                                                                        </a>
												</div>

												<div class="hidden-desktop visible-phone">
													<div class="inline position-relative">
														<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
															<i class="icon-caret-down icon-only bigger-120"></i>
														</button>

														<ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
															<li>
																<a class="green btn_edit" href="#"
                                                                                                                                    data-nama_pegawai="<?php echo $row->nama_pegawai;?>"
                                                                                                                                    data-nama_program="<?php echo $row->nama_program;?>"
                                                                                                                                    data-p1_tahunan="<?php echo $row->p1_tahunan;?>"
                                                                                                                                    data-p1_bulanan="<?php echo $row->p1_bulanan;?>"
                                                                                                                                    data-p2_lap_tahun="<?php echo $row->p2_lap_tahun;?>"
                                                                                                                                    data-p2_lap_bulan="<?php echo $row->p2_lap_bulan;?>"
                                                                                                                                    data-p2_kak="<?php echo $row->p2_kak;?>"
                                                                                                                                    data-p2_sop="<?php echo $row->p2_sop;?>"
                                                                                                                                    data-p2_spj="<?php echo $row->p2_spj;?>"
                                                                                                                                    data-p2_buku_visum="<?php echo $row->p2_buku_visum;?>"
                                                                                                                                    data-p2_cakupan="<?php echo $row->p2_cakupan;?>"
                                                                                                                                    data-p3_servis="<?php echo $row->p3_servis;?>"
                                                                                                                                    data-p3_inovatif="<?php echo $row->p3_inovatif;?>"
                                                                                                                                    data-p3_profesional="<?php echo $row->p3_profesional;?>"
                                                                                                                                    data-skorsing="<?php echo $row->skorsing;?>"
                                                                                                                                    data-toggle="modal"
                                                                                                                                    >
                                                                                                                                    <i class="icon-pencil bigger-130"></i>
                                                                                                                                </a>
                                                                                                                        </li>

															<li>
																<a class="red btn_hapus" href="#"
                                                                                                                                    data-id_laporan="<?php echo $row->id_laporan;?>"
                                                                                                                                    data-nama_pegawai="<?php echo $row->nama_pegawai;?>"
                                                                                                                                    >
                                                                                                                                    <i class="icon-trash bigger-130"></i>
                                                                                                                                </a>
															</li>
														</ul>
													</div>
												</div>
											</td>
										</tr>
                                                                                <?php
                                                                                    $no++;
                                                                                    }
                                                                                 ?>
                                                                 </tbody>
                                                                </table>
                                                                       
                                                        </div>
                                                </div>
					</div>
				</div>
			</div><!--/.main-content-->
		</div><!--/.main-container-->

		<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-small btn-inverse">
			<i class="icon-double-angle-up icon-only bigger-110"></i>
		</a>
                <form name="modal_form1" method="post" action="<?php echo base_url(); ?>index.php/laporan/simpan" enctype="multipart/form-data">
                <div id="modal-form" class="modal hide" tabindex="-1">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="blue bigger">Tambah Data Penilaian</h4>
								</div>

								<div class="modal-body overflow-scroll">
									<div class="row-fluid">

										<div class="span12">
											<div class="control-group">
												<label class="control-label">ID Laporan</label>
												<div class="controls">
                                                                                                    <input type="text" class="span20" name="id_laporan" id="id_laporan" placeholder="ID Laporan"
                                                                                                               value="<?php echo $nomor_otomatis; ?>" readonly="true"/>
												</div>
											</div>
                                                                                </div>
                                                                                    
                                                                                        <div class="control-group">
                                                                                            <label class="control-label">Nama Pegawai</label>
                                                                                            <div class="controls">
                                                                                                <select name="nama_pegawai" id="nama_pegawai" class="span20">
                                                                                                    <option value="-">-</option> />
                                                                                                        <?php
                                                                                                            foreach ($data_pegawai->result() as $data){
                                                                                                        ?>
                                                                                                            <option value="<?php echo $data->nama_pegawai; ?>"><?php echo $data->nama_pegawai; ?>										
                                                                                                            </option>
                                                                                                        <?php
                                                                                                            }
                                                                                                        ?>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
											<div class="control-group">
                                                                                            <label class="control-label">Nama Program</label>
                                                                                            <div class="controls">
                                                                                                <select name="nama_program" id="nama_program" class="span20">
                                                                                                    <option value="-">-</option> />
                                                                                                        <?php
                                                                                                            foreach ($data_program->result() as $data){
                                                                                                        ?>
                                                                                                            <option value="<?php echo $data->nama_program; ?>"><?php echo $data->nama_program; ?>										
                                                                                                            </option>
                                                                                                        <?php
                                                                                                            }
                                                                                                        ?>
                                                                                                </select>
                                                                                            </div>
											</div>
                                                                                        <div class="widget-main">
                                                                                            <div class="row-fluid">
                                                                                                    <label for="p1_tahunan">Perencanaan Tahunan</label>
                                                                                            </div>

                                                                                            <div class="control-group">
                                                                                                    <div class="row-fluid input-append">
                                                                                                            <input type="date" name="p1_tahunan" required="">
                                                                                                    </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="widget-main">
                                                                                            <div class="row-fluid">
                                                                                                    <label for="p1_bulanan">Perencanaan Bulanan</label>
                                                                                            </div>

                                                                                            <div class="control-group">
                                                                                                    <div class="row-fluid input-append">
                                                                                                            <input type="date" name="p1_bulanan" required="">
                                                                                                    </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="widget-main">
                                                                                            <div class="row-fluid">
                                                                                                    <label for="p2_lap_tahun">Laporan Tahunan</label>
                                                                                            </div>

                                                                                            <div class="control-group">
                                                                                                    <div class="row-fluid input-append">
                                                                                                            <input type="date" name="p2_lap_tahun" required="">
                                                                                                    </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="widget-main">
                                                                                            <div class="row-fluid">
                                                                                                    <label for="p2_lap_bulan">Laporan Bulanan</label>
                                                                                            </div>

                                                                                            <div class="control-group">
                                                                                                    <div class="row-fluid input-append">
                                                                                                            <input type="date" name="p2_lap_bulan" required="">
                                                                                                    </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="widget-main">
                                                                                            <div class="row-fluid">
                                                                                                    <label for="p2_kak">KAK</label>
                                                                                            </div>

                                                                                            <div class="control-group">
                                                                                                    <div class="row-fluid input-append">
                                                                                                            <input type="date" name="p2_kak" required="">
                                                                                                    </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="widget-main">
                                                                                            <div class="row-fluid">
                                                                                                    <label for="p2_sop">SOP</label>
                                                                                            </div>

                                                                                            <div class="control-group">
                                                                                                    <div class="row-fluid input-append">
                                                                                                            <input type="date" name="p2_sop" required="">
                                                                                                    </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="widget-main">
                                                                                            <div class="row-fluid">
                                                                                                    <label for="p2_spj">SPJ</label>
                                                                                            </div>

                                                                                            <div class="control-group">
                                                                                                    <div class="row-fluid input-append">
                                                                                                            <input type="date" name="p2_spj" required="">
                                                                                                    </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="widget-main">
                                                                                            <div class="row-fluid">
                                                                                                    <label for="p2_buku_visum">Buku Visum</label>
                                                                                            </div>

                                                                                            <div class="control-group">
                                                                                                    <div class="row-fluid input-append">
                                                                                                           <input type="date" name="p2_buku_visum" required="">
                                                                                                    </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="widget-main">
                                                                                            <div class="row-fluid">
                                                                                                    <label for="p2_cakupan">Cakupan</label>
                                                                                            </div>

                                                                                            <div class="control-group">
                                                                                                    <div class="row-fluid input-append">
                                                                                                            <input type="date" name="p2_cakupan" required="">
                                                                                                    </div>
                                                                                            </div>
                                                                                            
                                                                                        </div>
                                                                                        <div class="control-group">
                                                                                            <label class="control-label">Service</label>
                                                                                            <div class="controls">
                                                                                                <select name="p3_servis" id="p3_servis" class="span5">
                                                                                                    <option value="-">-</option> />
                                                                                                        <?php
                                                                                                            foreach ($data_kriteria->result() as $data){
                                                                                                        ?>
                                                                                                            <option value="<?php echo $data->tata_nilai; ?>"><?php echo $data->tata_nilai; ?>										
                                                                                                            </option>
                                                                                                        <?php
                                                                                                            }
                                                                                                        ?>
                                                                                                </select>
                                                                                            </div>
											</div>
                                                                                        <div class="control-group">
                                                                                            <label class="control-label">Inovatif</label>
                                                                                            <div class="controls">
                                                                                                <select name="p3_inovatif" id="p3_inovatif" class="span5">
                                                                                                    <option value="-">-</option> />
                                                                                                        <?php
                                                                                                            foreach ($data_kriteria->result() as $data){
                                                                                                        ?>
                                                                                                            <option value="<?php echo $data->tata_nilai; ?>"><?php echo $data->tata_nilai; ?>										
                                                                                                            </option>
                                                                                                        <?php
                                                                                                            }
                                                                                                        ?>
                                                                                                </select>
                                                                                            </div>
											</div>
                                                                                        <div class="control-group">
                                                                                            <label class="control-label">Profesional</label>
                                                                                            <div class="controls">
                                                                                                <select name="p3_profesional" id="p3_profesional" class="span5">
                                                                                                    <option value="-">-</option> />
                                                                                                        <?php
                                                                                                            foreach ($data_kriteria->result() as $data){
                                                                                                        ?>
                                                                                                            <option value="<?php echo $data->tata_nilai; ?>"><?php echo $data->tata_nilai; ?>										
                                                                                                            </option>
                                                                                                        <?php
                                                                                                            }
                                                                                                        ?>
                                                                                                </select>
                                                                                            </div>
											</div>
                                                                                        <div class="control-group">
                                                                                            <label class="control-label">Skoring</label>
                                                                                            <div class="controls">
                                                                                                <select name="skorsing" id="skorsing" class="span5">
                                                                                                    <option value="-">-</option> />
                                                                                                        <?php
                                                                                                            foreach ($data_kriteria->result() as $data){
                                                                                                        ?>
                                                                                                            <option value="<?php echo $data->skorsing; ?>"><?php echo $data->skorsing; ?>										
                                                                                                            </option>
                                                                                                        <?php
                                                                                                            }
                                                                                                        ?>
                                                                                                </select>
                                                                                            </div>
											</div>

								<div class="modal-footer">
									<button class="btn btn-small" data-dismiss="modal">
										<i class="icon-remove"></i>
										Batal
									</button>

                                                                        <button class="btn btn-small btn-primary" type="submit" name="btn_simpan">
										<i class="icon-ok"></i>
										Simpan
									</button>
								</div>
                </div>
                </div>
                </div>
                </form>
                
                <form name="modal_form2" method="post" action="<?php echo base_url(); ?>index.php/laporan/ubah/" enctype="multipart/form-data">
                <div id="modal-form2" class="modal hide" tabindex="-1">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="blue bigger">Ubah Data Penilaian</h4>
								</div>
								<div class="modal-body overflow-scroll">
									<div class="row-fluid">
                                                                            <div class="span12">
											<div class="control-group">
												<label class="control-label">ID Laporan</label>
												<div class="controls">
                                                                                                    <input type="text" class="span20" name="id_laporan" id="id_laporan" placeholder="ID Laporan"
                                                                                                               value="<?php echo $nomor_otomatis; ?>" readonly="true"/>
												</div>
											</div>
                                                                                </div>
                                                                                        <div class="control-group">
                                                                                            <label class="control-label">Nama Pegawai</label>
                                                                                            <div class="controls">
                                                                                                <select name="nama_pegawai" id="nama_pegawai" class="span12 nama_pegawai">
                                                                                                    <option value="-">-</option> />
                                                                                                        <?php
                                                                                                            foreach ($data_pegawai->result() as $data){
                                                                                                        ?>
                                                                                                            <option value="<?php echo $data->nama_pegawai; ?>"><?php echo $data->nama_pegawai; ?>										
                                                                                                            </option>
                                                                                                        <?php
                                                                                                            }
                                                                                                        ?>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
											<div class="control-group">
                                                                                            <label class="control-label">Nama Program</label>
                                                                                            <div class="controls">
                                                                                                <select name="nama_program" id="nama_program" class="span20 nama_program">
                                                                                                    <option value="-">-</option> />
                                                                                                        <?php
                                                                                                            foreach ($data_program->result() as $data){
                                                                                                        ?>
                                                                                                            <option value="<?php echo $data->nama_program; ?>"><?php echo $data->nama_program; ?>										
                                                                                                            </option>
                                                                                                        <?php
                                                                                                            }
                                                                                                        ?>
                                                                                                </select>
                                                                                            </div>
											</div>
                                                                                        <div class="widget-main">
                                                                                            <div class="row-fluid">
                                                                                                    <label for="p1_tahunan">Perencanaan Tahunan</label>
                                                                                            </div>

                                                                                            <div class="control-group">
                                                                                                    <div class="row-fluid input-append">
                                                                                                        <input class="p1_tahunan" type="date" name="p1_tahunan" required="">
                                                                                                    </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="widget-main">
                                                                                            <div class="row-fluid">
                                                                                                    <label for="p1_bulanan">Perencanaan Bulanan</label>
                                                                                            </div>

                                                                                            <div class="control-group">
                                                                                                    <div class="row-fluid input-append">
                                                                                                        <input class="p1_bulanan" type="date" name="p1_bulanan" required="">
                                                                                                    </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="widget-main">
                                                                                            <div class="row-fluid">
                                                                                                    <label for="p2_lap_tahun">Laporan Tahunan</label>
                                                                                            </div>

                                                                                            <div class="control-group">
                                                                                                    <div class="row-fluid input-append">
                                                                                                        <input class="p2_lap_tahun" type="date" name="p2_lap_tahun" required="">
                                                                                                    </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="widget-main">
                                                                                            <div class="row-fluid">
                                                                                                    <label for="p2_lap_bulan">Laporan Bulanan</label>
                                                                                            </div>

                                                                                            <div class="control-group">
                                                                                                    <div class="row-fluid input-append">
                                                                                                        <input class="p2_lap_bulan" type="date" name="p2_lap_bulan" required="">
                                                                                                    </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="widget-main">
                                                                                            <div class="row-fluid">
                                                                                                    <label for="p2_kak">KAK</label>
                                                                                            </div>

                                                                                            <div class="control-group">
                                                                                                    <div class="row-fluid input-append">
                                                                                                        <input class="p2_kak" type="date" name="p2_kak" required="">
                                                                                                    </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="widget-main">
                                                                                            <div class="row-fluid">
                                                                                                    <label for="p2_sop">SOP</label>
                                                                                            </div>

                                                                                            <div class="control-group">
                                                                                                    <div class="row-fluid input-append">
                                                                                                        <input class="p2_sop" type="date" name="p2_sop" required="">
                                                                                                    </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="widget-main">
                                                                                            <div class="row-fluid">
                                                                                                    <label for="p2_spj">SPJ</label>
                                                                                            </div>

                                                                                            <div class="control-group">
                                                                                                    <div class="row-fluid input-append">
                                                                                                        <input class="p2_spj" type="date" name="p2_spj" required="">
                                                                                                    </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="widget-main">
                                                                                            <div class="row-fluid">
                                                                                                    <label for="p2_buku_visum">Buku Visum</label>
                                                                                            </div>

                                                                                            <div class="control-group">
                                                                                                    <div class="row-fluid input-append">
                                                                                                        <input class="p2_buku_visum" type="date" name="p2_buku_visum" required="">
                                                                                                    </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="widget-main">
                                                                                            <div class="row-fluid">
                                                                                                    <label for="p2_cakupan">Cakupan</label>
                                                                                            </div>

                                                                                            <div class="control-group">
                                                                                                    <div class="row-fluid input-append">
                                                                                                        <input class="p2_cakupan" type="date" name="p2_cakupan" required="">
                                                                                                    </div>
                                                                                            </div>
                                                                                            
                                                                                        </div>
                                                                                        <div class="control-group">
                                                                                            <label class="control-label">Service</label>
                                                                                            <div class="controls">
                                                                                                <select name="p3_servis" id="p3_servis" class="span5 p3_servis">
                                                                                                    <option value="-">-</option> />
                                                                                                        <?php
                                                                                                            foreach ($data_kriteria->result() as $data){
                                                                                                        ?>
                                                                                                            <option value="<?php echo $data->tata_nilai; ?>"><?php echo $data->tata_nilai; ?>										
                                                                                                            </option>
                                                                                                        <?php
                                                                                                            }
                                                                                                        ?>
                                                                                                </select>
                                                                                            </div>
											</div>
                                                                                        <div class="control-group">
                                                                                            <label class="control-label">Inovatif</label>
                                                                                            <div class="controls">
                                                                                                <select name="p3_inovatif" id="p3_inovatif" class="span5 p3_inovatif">
                                                                                                    <option value="-">-</option> />
                                                                                                        <?php
                                                                                                            foreach ($data_kriteria->result() as $data){
                                                                                                        ?>
                                                                                                            <option value="<?php echo $data->tata_nilai; ?>"><?php echo $data->tata_nilai; ?>										
                                                                                                            </option>
                                                                                                        <?php
                                                                                                            }
                                                                                                        ?>
                                                                                                </select>
                                                                                            </div>
											</div>
                                                                                        <div class="control-group">
                                                                                            <label class="control-label">Profesional</label>
                                                                                            <div class="controls">
                                                                                                <select name="p3_profesional" id="p3_profesional" class="span5 p3_profesional">
                                                                                                    <option value="-">-</option> />
                                                                                                        <?php
                                                                                                            foreach ($data_kriteria->result() as $data){
                                                                                                        ?>
                                                                                                            <option value="<?php echo $data->tata_nilai; ?>"><?php echo $data->tata_nilai; ?>										
                                                                                                            </option>
                                                                                                        <?php
                                                                                                            }
                                                                                                        ?>
                                                                                                </select>
                                                                                            </div>
											</div>
                                                                                        <div class="control-group">
                                                                                            <label class="control-label">Skoring</label>
                                                                                            <div class="controls">
                                                                                                <select name="skorsing" id="skorsing" class="span5 skorsing">
                                                                                                    <option value="-">-</option> />
                                                                                                        <?php
                                                                                                            foreach ($data_kriteria->result() as $data){
                                                                                                        ?>
                                                                                                            <option value="<?php echo $data->skorsing; ?>"><?php echo $data->skorsing; ?>										
                                                                                                            </option>
                                                                                                        <?php
                                                                                                            }
                                                                                                        ?>
                                                                                                </select>
                                                                                            </div>
											</div>
               

								<div class="modal-footer">
									<button class="btn btn-small" data-dismiss="modal">
										<i class="icon-remove"></i>
										Batal
									</button>

                                                                        <button class="btn btn-small btn-primary" type="submit" name="btn_ubah">
										<i class="icon-ok"></i>
										Ubah
									</button>
								</div>
                                </div>
                </div>
                </div>
                </form>
                
                <script>
                        $(document).ready(function(){
                        $('.btn_hapus').on('click',function(){
                        const id_laporan = $(this).data('id_laporan');
                        const nama_pegawai = $(this).data('nama_pegawai');
                        bootbox.confirm(nama_pegawai+" akan dihapus?", function(result) {
                        if(result) {
                        window.location.href ="<?=

                        base_url();?>index.php/laporan/hapus/"+id_laporan;

                        }
                        });
                        });
                        });
                </script>
                <script>
                    $(document).ready(function(){
                        $('.btn_edit').on('click', function(){
                            const id_laporan = $(this).data('id_laporan');
                            const nama_pegawai = $(this).data('nama_pegawai');
                            const nama_program = $(this).data('nama_program');
                            const p1_tahunan = $(this).data('p1_tahunan');
                            const p1_bulanan = $(this).data('p1_bulanan');
                            const p2_lap_tahun = $(this).data('p2_lap_tahun');
                            const p2_lap_bulan = $(this).data('p2_lap_bulan');
                            const p2_kak = $(this).data('p2_kak');
                            const p2_sop = $(this).data('p2_sop');
                            const p2_spj = $(this).data('p2_spj');
                            const p2_buku_visum = $(this).data('p2_buku_visum');
                            const p2_cakupan = $(this).data('p2_cakupan');
                            const p3_servis = $(this).data('p3_servis');
                            const p3_inovatif = $(this).data('p3_inovatif');
                            const p3_profesional = $(this).data('p3_profesional');
                            const skorsing = $(this).data('skorsing');
                            
                            
                            $('.id_laporan').val(id_laporan);
                            $('.nama_pegawai').val(nama_pegawai);
                            $('.nama_program').val(nama_program);
                            $('.p1_tahunan').val(p1_tahunan);
                            $('.p1_bulanan').val(p1_bulanan);
                            $('.p2_lap_tahun').val(p2_lap_tahun);
                            $('.p2_lap_bulan').val(p2_lap_bulan);
                            $('.p2_kak').val(p2_kak);
                            $('.p2_sop').val(p2_sop);
                            $('.p2_spj').val(p2_spj);
                            $('.p2_buku_visum').val(p2_buku_visum);
                            $('.p2_cakupan').val(p2_cakupan);
                            $('.p3_servis').val(p3_servis);
                            $('.p3_inovatif').val(p3_inovatif);
                            $('.p3_profesional').val(p3_profesional);
                            $('.skorsing').val(skorsing);

                            $('#modal-form2').modal('show');
                        });
                    });
                </script>

                <script type="text/javascript">
			$(function() {
				var oTable1 = $('#sample-table-2').dataTable( {
				"aoColumns": [
                                    
			      null, null,null, null, null,null, null, null, null,null, null,null, null, null,null, null, 
				  { "bSortable": false }
				] } );
				
				
				$('table th input:checkbox').on('click' , function(){
					var that = this;
					$(this).closest('table').find('tr > td:first-child input:checkbox')
					.each(function(){
						this.checked = that.checked;
						$(this).closest('tr').toggleClass('selected');
					});
						
				});
			
			
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
			})
		</script>
                 <script type="text/javascript">
			$(function() {
				$('#id-disable-check').on('click', function() {
					var inp = $('#form-input-readonly').get(0);
					if(inp.hasAttribute('disabled')) {
						inp.setAttribute('readonly' , 'true');
						inp.removeAttribute('disabled');
						inp.value="This text field is readonly!";
					}
					else {
						inp.setAttribute('disabled' , 'disabled');
						inp.removeAttribute('readonly');
						inp.value="This text field is disabled!";
					}
				});
			
			
				$(".chzn-select").chosen(); 
				
				$('[data-rel=tooltip]').tooltip({container:'body'});
				$('[data-rel=popover]').popover({container:'body'});
				
				$('textarea[class*=autosize]').autosize({append: "\n"});
				$('textarea[class*=limited]').each(function() {
					var limit = parseInt($(this).attr('data-maxlength')) || 100;
					$(this).inputlimiter({
						"limit": limit,
						remText: '%n character%s remaining...',
						limitText: 'max allowed : %n.'
					});
				});
				
				$.mask.definitions['~']='[+-]';
				$('.input-mask-date').mask('99/99/9999');
				$('.input-mask-phone').mask('(999) 999-9999');
				$('.input-mask-eyescript').mask('~9.99 ~9.99 999');
				$(".input-mask-product").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});
				
				
				
				$( "#input-size-slider" ).css('width','200px').slider({
					value:1,
					range: "min",
					min: 1,
					max: 6,
					step: 1,
					slide: function( event, ui ) {
						var sizing = ['', 'input-mini', 'input-small', 'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'];
						var val = parseInt(ui.value);
						$('#form-field-4').attr('class', sizing[val]).val('.'+sizing[val]);
					}
				});
			
				$( "#input-span-slider" ).slider({
					value:1,
					range: "min",
					min: 1,
					max: 11,
					step: 1,
					slide: function( event, ui ) {
						var val = parseInt(ui.value);
						$('#form-field-5').attr('class', 'span'+val).val('.span'+val).next().attr('class', 'span'+(12-val)).val('.span'+(12-val));
					}
				});
				
				
				$( "#slider-range" ).css('height','200px').slider({
					orientation: "vertical",
					range: true,
					min: 0,
					max: 100,
					values: [ 17, 67 ],
					slide: function( event, ui ) {
						var val = ui.values[$(ui.handle).index()-1]+"";
			
						if(! ui.handle.firstChild ) {
							$(ui.handle).append("<div class='tooltip right in' style='display:none;left:15px;top:-8px;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>");
						}
						$(ui.handle.firstChild).show().children().eq(1).text(val);
					}
				}).find('a').on('blur', function(){
					$(this.firstChild).hide();
				});
				
				$( "#slider-range-max" ).slider({
					range: "max",
					min: 1,
					max: 10,
					value: 2
				});
				
				$( "#eq > span" ).css({width:'90%', 'float':'left', margin:'15px'}).each(function() {
					// read initial values from markup and remove that
					var value = parseInt( $( this ).text(), 10 );
					$( this ).empty().slider({
						value: value,
						range: "min",
						animate: true
						
					});
				});
			
				
				$('#id-input-file-1 , #id-input-file-2').ace_file_input({
					no_file:'No File ...',
					btn_choose:'Choose',
					btn_change:'Change',
					droppable:false,
					onchange:null,
					thumbnail:false //| true | large
					//whitelist:'gif|png|jpg|jpeg'
					//blacklist:'exe|php'
					//onchange:''
					//
				});
				
				$('#id-input-file-3').ace_file_input({
					style:'well',
					btn_choose:'Drop files here or click to choose',
					btn_change:null,
					no_icon:'icon-cloud-upload',
					droppable:true,
					thumbnail:'small'
					//,icon_remove:null//set null, to hide remove/reset button
					/**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.html
						return true;
					}*/
					/**,before_remove : function() {
						return true;
					}*/
					,
					preview_error : function(filename, error_code) {
						//name of the file that failed
						//error_code values
						//1 = 'FILE_LOAD_FAILED',
						//2 = 'IMAGE_LOAD_FAILED',
						//3 = 'THUMBNAIL_FAILED'
						//alert(error_code);
					}
			
				}).on('change', function(){
					//console.log($(this).data('ace_input_files'));
					//console.log($(this).data('ace_input_method'));
				});
				
			
				//dynamically change allowed formats by changing before_change callback function
				$('#id-file-format').removeAttr('checked').on('change', function() {
					var before_change
					var btn_choose
					var no_icon
					if(this.checked) {
						btn_choose = "Drop images here or click to choose";
						no_icon = "icon-picture";
						before_change = function(files, dropped) {
							var allowed_files = [];
							for(var i = 0 ; i < files.length; i++) {
								var file = files[i];
								if(typeof file === "string") {
									//IE8 and browsers that don't support File Object
									if(! (/\.(jpe?g|png|gif|bmp)$/i).test(file) ) return false;
								}
								else {
									var type = $.trim(file.type);
									if( ( type.length > 0 && ! (/^image\/(jpe?g|png|gif|bmp)$/i).test(type) )
											|| ( type.length == 0 && ! (/\.(jpe?g|png|gif|bmp)$/i).test(file.name) )//for android's default browser which gives an empty string for file.type
										) continue;//not an image so don't keep this file
								}
								
								allowed_files.push(file);
							}
							if(allowed_files.length == 0) return false;
			
							return allowed_files;
						}
					}
					else {
						btn_choose = "Drop files here or click to choose";
						no_icon = "icon-cloud-upload";
						before_change = function(files, dropped) {
							return files;
						}
					}
					var file_input = $('#id-input-file-3');
					file_input.ace_file_input('update_settings', {'before_change':before_change, 'btn_choose': btn_choose, 'no_icon':no_icon})
					file_input.ace_file_input('reset_input');
				});
			
			
			
			
				$('#spinner1').ace_spinner({value:0,min:0,max:200,step:10, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
				.on('change', function(){
					//alert(this.value)
				});
				$('#spinner2').ace_spinner({value:0,min:0,max:10000,step:100, icon_up:'icon-caret-up', icon_down:'icon-caret-down'});
				$('#spinner3').ace_spinner({value:0,min:-100,max:100,step:10, icon_up:'icon-plus', icon_down:'icon-minus', btn_up_class:'btn-success' , btn_down_class:'btn-danger'});
			
			
				
				$('.date-picker').datepicker().next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				$('#id-date-range-picker-1').daterangepicker().prev().on(ace.click_event, function(){
					$(this).next().focus();
				});
				
				$('#timepicker1').timepicker({
					minuteStep: 1,
					showSeconds: true,
					showMeridian: false
				})
				
				$('#colorpicker1').colorpicker();
				$('#simple-colorpicker-1').ace_colorpicker();
			
				
				$(".knob").knob();
				
				
				//we could just set the data-provide="tag" of the element inside HTML, but IE8 fails!
				var tag_input = $('#form-field-tags');
				if(! ( /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase())) ) 
					tag_input.tag({placeholder:tag_input.attr('placeholder')});
				else {
					//display a textarea for old IE, because it doesn't support this plugin or another one I tried!
					tag_input.after('<textarea id="'+tag_input.attr('id')+'" name="'+tag_input.attr('name')+'" rows="3">'+tag_input.val()+'</textarea>').remove();
					//$('#form-field-tags').autosize({append: "\n"});
				}
			
			
				/////////
				$('#modal-form input[type=file]').ace_file_input({
					style:'well',
					btn_choose:'Drop files here or click to choose',
					btn_change:null,
					no_icon:'icon-cloud-upload',
					droppable:true,
					thumbnail:'large'
				})
				
				//chosen plugin inside a modal will have a zero width because the select element is originally hidden
				//and its width cannot be determined.
				//so we set the width after modal is show
				$('#modal-form').on('show', function () {
					$(this).find('.chzn-container').each(function(){
						$(this).find('a:first-child').css('width' , '200px');
						$(this).find('.chzn-drop').css('width' , '210px');
						$(this).find('.chzn-search input').css('width' , '200px');
					});
				})
				/**
				//or you can activate the chosen plugin after modal is shown
				//this way select element has a width now and chosen works as expected
				$('#modal-form').on('shown', function () {
					$(this).find('.modal-chosen').chosen();
				})
				*/
			
			});
		</script>
	</body>
</html>
