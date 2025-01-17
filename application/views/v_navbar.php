<div class="navbar-inner">
				<div class="container-fluid">
					<a href="#" class="brand">
						<small>
							<i class="icon-pencil"></i>
                                                        <b> E-Kinerja </b>
						</small>
					</a><!--/.brand-->

					<ul class="nav ace-nav pull-right">
                                            
						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="<?php echo base_url();?>assets/avatars/logo2.jpg"/>
								<span class="user-info">
									<small> <?php echo $role_user?> </small>
									<?php echo $nama?> 
								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
								
								<li>
									<a href="<?php echo base_url();?>index.php/login/logout">
										<i class="icon-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul><!--/.ace-nav-->
				</div><!--/.container-fluid-->
			</div><!--/.navbar-inner-->