<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Login</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<?php echo $css_js; ?>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

	<body class="login-layout">
		<div class="main-container container-fluid">
			<div class="main-content">
				<div class="row-fluid">
					<div class="span12">
						<div class="login-container">
							<div class="row-fluid">
								<div class="center">
                                                                    
                                                                    <img src="<?php echo base_url();?>assets/avatars/logo.png"/>
									<h1>
										<span class="white">E-Kinerja</span>
									</h1>
									
								</div>
							</div>

							<div class="space-6"></div>

							<div class="row-fluid">
								<div class="position-relative">
									<div id="login-box" class="login-box visible widget-box no-border">
										<div class="widget-body">
											<div class="widget-main">
												<h4 class="header blue lighter bigger">
													<i class="icon-home green"></i>
													Login
												</h4>

												<div class="space-6"></div>

                                                                                                <form name="form_login" method="post" action="<?php echo base_url();?>index.php/login/proses">
                                                                                                    <?php echo $this->session->flashdata('info');?>
													<fieldset>
														<label>
															<span class="block input-icon input-icon-right">
																<input name="id_user" type="text" class="span12" placeholder= "Username" />
																<i class="icon-user"></i>
															</span>
														</label>

														<label>
															<span class="block input-icon input-icon-right">
																<input name="password" type="password" class="span12" placeholder="Password" />
																<i class="icon-lock"></i>
															</span>
														</label>

														<div class="space"></div>

														<div class="clearfix">

															<button name="btn_login" type="submit" class="width-35 pull-right btn btn-small btn-primary"
                                                                                                                                onclick="return cek_inputan();">
                                                                                                                                        <i class="icon-key"></i>
                                                                                                                                            Login
															</button>
														</div>

														<div class="space-4"></div>
													</fieldset>
												</form>
											</div><!--/widget-main-->

											<div class="toolbar clearfix align-center">
                                                                                            <h6 class="white"> &copy; UPTD Puskesmas Rawat Inap Cimalaka</h6>
											</div>
										</div><!--/widget-body-->
									</div><!--/login-box-->
								</div><!--/position-relative-->
							</div>
					</div><!--/.span-->
				</div><!--/.row-fluid-->
			</div>
		</div><!--/.main-container-->
                
                <script>
                    function cek_inputan(){
                        if(document.form_login.id_user.value === ""){
                           document.form _login.id_user.focus();
                           alert("maaf Username Masih Kosong!!");
                           return false;
                        }
                        if(document.form_login.password.value === ""){
                           document.form_login.password.focus();
                           alert("Maaf Password Masih Kosong!!");
                           return false;
                        }
                    }
                </script>
	</body>
</html>
