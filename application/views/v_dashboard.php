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
					</ul><!--.breadcrumb-->

					
				</div>

				<div class="page-content">
					<div class="row-fluid">
						<div class="well">
                                                    <h2 class="green smaller lighter"> <b> Selamat Datang Di Dashboard </b> </h2>
                                                <b> Penilaian Kinerja Pegawai UPTD Puskesmas Rawat Inap Cimalaka </b>
						</div>
                                                </div>
					</div>
				</div>

				<div class="ace-settings-container" id="ace-settings-container">
					<div class="btn btn-app btn-mini btn-warning ace-settings-btn open" id="ace-settings-btn">
						<i class="icon-cog bigger-150"></i>
					</div>

					<div class="ace-settings-box open" id="ace-settings-box">
						<div>
							<div class="pull-left">
								<select id="skin-colorpicker" class="hide" style="display: none;">
									<option data-class="default" value="#438EB9">#438EB9</option>
                                                                        <option data-class="skin-1" value="#222A2D">#222A2D</option>
                                                                        <option data-class="skin-2" value="#C6487E">#C6487E</option>
                                                                        <option data-class="skin-3" value="#D0D0D0">#D0D0D0</option>
                                                                </select>
							</div>
							<span>&nbsp; Choose Skin</span>
						</div>

						<div>
							<input type="checkbox" class="ace-checkbox-2" id="ace-settings-header">
							<label class="lbl" for="ace-settings-header"> Fixed Header</label>
						</div>

						<div>
							<input type="checkbox" class="ace-checkbox-2" id="ace-settings-sidebar">
							<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
						</div>

						<div>
							<input type="checkbox" class="ace-checkbox-2" id="ace-settings-breadcrumbs">
							<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
						</div>

						<div>
							<input type="checkbox" class="ace-checkbox-2" id="ace-settings-rtl">
							<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
						</div>
					</div>
				</div>
			</div><!--/.main-content-->
		</div><!--/.main-container-->

		<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-small btn-inverse">
			<i class="icon-double-angle-up icon-only bigger-110"></i>
		</a>
	</body>
</html>
