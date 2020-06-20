<?php session_start(); include "conn/dbcon.php" ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Studio Mangle 7</title>
		<script src="asset/jquery/dist/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="asset/table_rows.css">
		<link href="asset/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
		<link href="asset/bootstarp-selectpicker/bootstrap-picker.min.css" rel="stylesheet">
		<link href="asset/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="build/css/custom.min.css" rel="stylesheet">
        <link href="asset/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
	</head>
	
	<body class="nav-md">
		<div class="container body">
			<div class="main_container">
				<div class="col-md-3 left_col">
					<div class="left_col scroll-view">
						<div class="navbar nav_title" style="border: 0;">
							<a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Studio Mangle7</span></a>
						</div>
						<div class="clearfix">
							
						</div>
						<div class="profile clearfix">
							<div class="profile_pic">
								<img src="images/img.jpg" alt="..." class="img-circle profile_img">
							</div>
							<div class="profile_info">
								<span>Welcome,</span>
								<?php echo '<h2>'.$_SESSION['login_user'].'</h2>';?>
							</div>
						</div><br/>
						
						<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
							<div class="menu_section">
								<h3>General</h3>
								<ul class="nav side-menu">
									<ul class="nav side-menu">
									<li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
										<ul class="nav child_menu">
											<li><a href="dashboard.php">Input Hpp Paket</a></li>
										</ul>
									</li>
									
									
								</ul>
								</ul>
							</div>
						</div>
						
						<div class="sidebar-footer hidden-small">
							<a data-toggle="tooltip" data-placement="top" title="Settings">
								<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
							</a>
							<a data-toggle="tooltip" data-placement="top" title="FullScreen">
								<span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
							</a>
							<a data-toggle="tooltip" data-placement="top" title="Lock">
								<span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
							</a>
							<a data-toggle="tooltip" data-placement="top" title="Logout" href="logout.php">
								<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
							</a>
						</div>
					</div>
				</div>
				
				<div class="top_nav">
					<div class="nav_menu">
						<nav>
							<div class="nav toggle">
								<a id="menu_toggle"><i class="fa fa-bars"></i></a>
							</div>
							<ul class="nav navbar-nav navbar-right">
								<li class="">
									<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
										<img src="images/img.jpg" alt=""><?php echo '<font size=4>'.$_SESSION['login_user'].'</font>';?>
										<span class=" fa fa-angle-down"></span>
									</a>
									<ul class="dropdown-menu dropdown-usermenu pull-right">
										<li><a href="create_user_fin.php"><i class="fa fa-plus pull-right"></i>Tambah User</a></li>
										<li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i>Log Out</a></li>
									</ul>
								</li>
							</ul>
						</nav>
					</div>
				</div>
				
				<div class="right_col" role="main">
					<div class="">
					<div class="clearfix"></div>
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="col-md-12 col-sm-12 col-xs-12" style="background-color: teal">
									<h2 style="color: white"><i class="fa fa-arrow-circle-down" style="color: white"></i> Input Hpp Paket <span class="label label-warning">Step 2</span></h2>
									<div class="clearfix"></div>
								</div> 
								<div class="x_panel" style="background-color: #EBF5FB">
									<div class="x_content">
										<form id="form-input-variant" class="form-horizontal form-label-right" method="post" action="asset/php-showtable/finishing/insertDataAwal.php">
										<div class="form-group col-md-6 col-sm-6 col-xs-12 col-md-offset-2">
											<div class="cropper">
												<div class="docs-data">
													<div class="input-group input-group-sm">
														<label class="input-group-addon">Paket</label>
														<input type="text" class="form-control" id="nama_paket" name="nama_paket" placeholder="Silahkan diisi nama paket">
													</div>
													<div class="input-group input-group-sm">
														<label class="input-group-addon">S.Tempat</label>
														<input type="number" min="0" class="form-control" id="sewa_tempat" name="sewa_tempat" placeholder="Disi dengan nominal">
													</div>
													<div class="input-group input-group-sm">
														<label class="input-group-addon">B.Listrik</label>
														<input type="number" min="0" class="form-control" id="listrik" name="listrik" placeholder="Disi dengan nominal">
													</div>
													<div class="input-group input-group-sm">
														<label class="input-group-addon">Iuran RW</label>
														<input type="number" min="0" class="form-control" id="iuran_rw" name="iuran_rw" placeholder="Disi dengan nominal">
													</div>
													<div class="input-group input-group-sm">
														<label class="input-group-addon">R.Kamera</label>
														<input type="number" min="0" class="form-control" id="rawat_kamera" name="rawat_kamera" placeholder="Disi dengan nominal">
													</div>
													<div class="input-group input-group-sm">
														<label class="input-group-addon">R.Studio</label>
														<input type="number" min="0" class="form-control" id="sewa_tempat" name="sewa_tempat" placeholder="Disi dengan nominal">
													</div>
													<div class="input-group input-group-sm">
														<label class="input-group-addon">Komputer</label>
														<input type="number" min="0" class="form-control" id="sewa_tempat" name="sewa_tempat" placeholder="Disi dengan nominal">
													</div>
													<div class="input-group input-group-sm">
														<label class="input-group-addon">Internet</label>
														<input type="number" min="0" class="form-control" id="sewa_tempat" name="sewa_tempat" placeholder="Disi dengan nominal">
													</div>
													<div class="input-group input-group-sm">
														<label class="input-group-addon">Kebersihan</label>
														<input type="number" min="0" class="form-control" id="sewa_tempat" name="sewa_tempat" placeholder="Disi dengan nominal">
													</div>
													<div class="input-group input-group-sm">
														<label class="input-group-addon">Dapur</label>
														<input type="number" min="0" class="form-control" id="sewa_tempat" name="sewa_tempat" placeholder="Disi dengan nominal">
													</div>
													<div class="input-group input-group-sm" style="display: none">
														<label class="input-group-addon">Warna</label>
														<select class="form-control selectpicker" id="variant_warna" name="variant_warna" data-live-search="true">
															<option value="" selected>Pilih Warna Produk</option>
															<?php
															$sql = mysqli_query($conn, "SELECT warna FROM master_barang GROUP BY warna");
															while($data = mysqli_fetch_array($sql)){
																echo "<option value='".$data['warna']."'>" .$data['warna']."</option>";
															}?>
														</select>
													</div>
												</div>
											</div>
										</div>
										
										<div class="form-group col-md-6 col-sm-6 col-xs-12 col-md-offset-2">
											<div class="cropper">
												<div class="docs-data">
													
													<div class="input-group input-group-sm">
														<label class="input-group-addon">ATK</label>
														<input type="number" min="0" class="form-control" id="sewa_tempat" name="sewa_tempat" placeholder="Disi dengan nominal">
													</div>
													<div class="input-group input-group-sm">
														<label class="input-group-addon">F.Boy</label>
														<input type="number" min="0" class="form-control" id="sewa_tempat" name="sewa_tempat" placeholder="Disi dengan nominal">
													</div>
													<div class="input-group input-group-sm">
														<label class="input-group-addon">F.Ijal</label>
														<input type="number" min="0" class="form-control" id="sewa_tempat" name="sewa_tempat" placeholder="Disi dengan nominal">
													</div>
													<div class="input-group input-group-sm">
														<label class="input-group-addon">F.Raih</label>
														<input type="number" min="0" class="form-control" id="sewa_tempat" name="sewa_tempat" placeholder="Disi dengan nominal">
													</div>
													<div class="input-group input-group-sm">
														<label class="input-group-addon">F.Hexawolf</label>
														<input type="number" min="0" class="form-control" id="sewa_tempat" name="sewa_tempat" placeholder="Disi dengan nominal">
													</div>
													<div class="input-group input-group-sm">
														<label class="input-group-addon">Promosi</label>
														<input type="number" min="0" class="form-control" id="sewa_tempat" name="sewa_tempat" placeholder="Disi dengan nominal">
													</div>
													<div class="input-group input-group-sm">
														<label class="input-group-addon">Markup</label>
														<input type="number" min="0" class="form-control" id="sewa_tempat" name="sewa_tempat" placeholder="Disi dengan nominal">
													</div>
													<div class="input-group input-group-sm">
														<label class="input-group-addon">Deskripsi</label>
														<input type="number" min="0" class="form-control" id="sewa_tempat" name="sewa_tempat" placeholder="Disi dengan nominal">
													</div>
													<div class="input-group input-group-sm" style="display: none">
														<label class="input-group-addon">Jenis Kain</label>
														<select class="form-control selectpicker" id="jenis_kain" name="jenis_kain" data-live-search="true">
															<option value="" selected>Pilih Jenis Kain</option>
															<option value="Wollpeach">Wollpeach</option>
															<option value="Tory Bruch">Tory Bruch</option>
															<option value="Balotelli">Balotelli</option>
															<option value="Wollycrepe">Wollycrepe</option>
															<option value="Kelly Polkadot">Kelly Polkadot</option>
															<option value="Baby Terry">Baby Terry</option>
															<option value="Katun Paris">Katun Paris</option>
															<option value="Katun Twill">Katun Twill</option>
															<option value="Rayon Twill">Rayon Twill</option>
															<option value="Katun Madina">Katun Madina</option>
															<option value="Havana">Havana</option>
														</select>
													</div>
													<div class="input-group input-group-sm" style="display: none">
														<label class="input-group-addon">Status</label>
														<select class="form-control selectpicker" id="status" name="status" data-live-search="true">
															<option value="" selected>Pilih Status Produk</option>
															<option value="Aktif">Aktif</option>
															<option value="Tidak Aktif">Tidak Aktif</option>
														</select>
													</div>
													
												</div>
												
												
											</div>
										</div>
                                        
										</form>
										<div class="form-group" id="btn-new-input">
											<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3" align="center">
												<button type="button" class="btn btn-success" id="simpan_variant" name ="simpan_variant" value="proses"><i class="fa fa-check"></i> Submit</button>
												<button class="btn btn-danger" type="button" id="reset_"><i class="fa fa-close"></i> Reset</button>
											</div>
										</div>
										
									
									
										
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="col-md-12 col-sm-12 col-xs-12" style="background-color: teal">
									<h2 style="color: white"><i class="fa fa-database" style="color: white"></i> View Data Product</h2>
									<div class="clearfix"></div>
								</div> 
								<div class="x_panel" style="background-color: #EBF5FB">
									<div class="x_content">
										<div >
									<div class="input-group input-group-sm">
										<input type="text" class="form-control" placeholder="Pencarian....." id="keyword">
										<span class="input-group-btn">
											<button type="button" class="btn btn-default btn-group btn-success" id="btn-search">SEARCH</button>
											
											<a href="" class="btn btn-warning" id="btn-resetcari">RESET</a>
										</span>
									</div>
								</div>
										<div id="show-data">
										
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<footer style="background-color: #F8F8F8">
					<div class="pull-right"></div>
					<div class="clearfix"></div>
				</footer>
			</div>
		
		<script src="asset/bootstrap/dist/js/bootstrap.min.js"></script>
		<script src="asset/bootstarp-selectpicker/bootstrap-picker.min.js"></script>
		<script src="asset/build/js/custom.min.js"></script>
		<script src="action/hpp/sHpp.js"></script>
        <script src="asset/moment/min/moment.min.js"></script>
        <script src="asset/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
        <script>
			
			
		
		</script>
	</body>
</html>
	
<!-- ********************** MODAL EDIT DATA ********************** -->

					
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" id="modal_edit">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header" style="background-color: teal">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
				<h4 class="modal-title" id="myModalLabel2" style="color: white">EDIT DATA</h4>
			</div>
			<div class="modal-body">
				<div id="edit-data"></div>
			</div>
			
		<div class="modal-footer">
			<center>
				<button type="button" class="btn btn-primary" id="btn-update" >Simpan</button>
				<button type="button" class="btn btn-info" id="btn-cancle-update" data-dismiss="modal">Batal</button></br>	
			</center>	
		</div>
			
		</div>
	</div>
</div>
						
<!-- ................................................................................................ -->
						
<!-- ********************** MODAL SUKSES ********************** -->
						
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true" id="modal_sukses">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header" style="background-color: teal">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
				<h4 class="modal-title" id="myModalLabel2" style="color: white">INFORMATION</h4>
			</div>
			<div class="modal-body">
				<div id="info_sukses">
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-info" data-dismiss="modal" id="confirm_modal">OK</button></br>
			</div>
		</div>
	</div>
</div>
<!-- ============================================================================================= -->