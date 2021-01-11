<!-- Main Wrapper -->
<div id="wrapper">

	<div class="normalheader transition animated fadeIn">
		<div class="hpanel">
			<div class="panel-body">
				<a class="small-header-action" href="">
					<div class="clip-header">
						<i class="fa fa-arrow-up"></i>
					</div>
				</a>

				<div id="hbreadcrumb" class="pull-right m-t-lg">
					<ol class="hbreadcrumb breadcrumb">
						<li><a href="index.html">Dashboard</a></li>
						<li>
							<span>Tables</span>
						</li>
						<li class="active">
							<span>DataTables</span>
						</li>
					</ol>
				</div>
				<h2 class="font-light m-b-xs">
					<?= $title ?>
				</h2>
				<small>Advanced interaction controls to any HTML table</small>
			</div>
		</div>
	</div>


	<div class="content animate-panel">

		<div class="row">
			<div class="col-lg-7">
				<div class="hpanel">
					<div class="panel-heading">
						<div class="panel-tools">
							<a class="showhide"><i class="fa fa-chevron-up"></i></a>
							<a class="closebox"><i class="fa fa-times"></i></a>
						</div>
						Lokasi Bangunan
					</div>

					<div class="panel-body">
						<div class="card">
							<div class="card-body">
								<div id="mapid" style="height: 550px"></div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-5">
				<div class="hpanel">
					<div class="panel-heading">
						<div class="panel-tools">
							<a class="showhide"><i class="fa fa-chevron-up"></i></a>
							<a class="closebox"><i class="fa fa-times"></i></a>
						</div>
						Data Bangunan
					</div>

					<div class="panel-body">
						<div class="card">

							<div class="card-body">
								<?php
								echo validation_errors('<div class="alert alert-warning alert-dismissible">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '</div>');
								if (isset($error_upload)) {
									echo '<div class="alert alert-danger alert-dismissible">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' . $error_upload . '</div>';
								}

								echo form_open_multipart('rumah/add');
								?>


								<div class="form-group">
									<label>Nama Tempat</label>
									<input name="nama_tempat" placeholder="Nama Tempat" type="text" class="form-control">
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label>Jenis Bangunan</label>
										<select class="form-control m-b" name="account">
											<option>Rumah</option>
											<option>Rumah Sakit </option>
											<option>Sekolah </option>
											<option>Kantor </option>
											<option>Tempat Ibadah</option>
											<option>Pasar</option>
											<option>Toko</option>
											<option>Ruang Publik/Taman</option>
										</select>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label>Kondisi</label>
										<select class="form-control m-b" name="account">
											<option>Rusak</option>
											<option>Tidak Terawat </option>
											<option>Baik</option>

										</select>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label>Alamat</label>
										<input name="alamat" placeholder="Alamat" class="form-control">
									</div>
								</div>
								<div class="col-sm-6">

									<div class="form-group">
										<label>Desa</label>
										<input name="desa" placeholder="Desa" class="form-control">
									</div>
								</div>

								<div class="col-sm-4">
									<div class="form-group">
										<label>Kecamatan</label>
										<input name="kec" placeholder="Kecamatan" class="form-control">
									</div>
								</div>

								<div class="col-sm-4">
									<div class="form-group">
										<label>Kabupaten</label>
										<input name="kab" placeholder="Kabupaten" type="text" class="form-control">
									</div>
								</div>

								<div class="col-sm-4">
									<div class="form-group">
										<label>Provinsi</label>
										<input name="prov" placeholder="Provinsi" class="form-control">
									</div>
								</div>


								<div class="col-sm-6">
									<div class="form-group">
										<label>Latitude</label>
										<input id="Latitude" name="latitude" type="text" class="form-control">
									</div>
								</div>

								<div class="col-sm-6">
									<div class="form-group">
										<label>Longitude</label>
										<input id="Longitude" name="longitude" class="form-control">
									</div>
								</div>
							</div>

							<div class="form-group">
								<label>Deskripsi</label>
								<textarea name="deskripsi" id="" rows="2" class="form-control"></textarea>
							</div>

							<div class="col-sm-6">

								<div class="form-group">
									<label>Icon Marker</label>
									<select name="id_icon" class="form-control">
										<?php foreach ($icon as $key => $value) { ?>
											<option value="<?= $value->id_icon ?>"><?= $value->nama_icon ?></option>
										<?php } ?>
									</select>
								</div>
							</div>

							<div class="col-sm-6">
								<div class="form-group">
									<label>Gambar</label>
									<input type="file" name="gambar" class="form-control" required>
								</div>
							</div>

							<div>
								<button type="submit" class="btn btn-info">Simpan</button>
								<button type="reset" class="btn btn-success">Reset</button>
							</div>
							<?php echo form_close(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Data Lahan  -->
	<div class="content animate-panel">

		<div class="row">
			<div class="col-lg-7">
				<div class="hpanel">
					<div class="panel-heading">
						<div class="panel-tools">
							<a class="showhide"><i class="fa fa-chevron-up"></i></a>
							<a class="closebox"><i class="fa fa-times"></i></a>
						</div>
						Lokasi Lahan
					</div>

					<div class="panel-body">

						<div class="card">

							<div class="card-body">
								<div id="mapid2" style="height: 500px;"></div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-5">
				<div class="hpanel">
					<div class="panel-heading">
						<div class="panel-tools">
							<a class="showhide"><i class="fa fa-chevron-up"></i></a>
							<a class="closebox"><i class="fa fa-times"></i></a>
						</div>
						Data Lahan
					</div>

					<div class="panel-body">
						<div class="card">

							<div class="card-body">
								<?php
								echo validation_errors('<div class="alert alert-warning alert-dismissible">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '</div>');
								if (isset($error_upload)) {
									echo '<div class="alert alert-danger alert-dismissible">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' . $error_upload . '</div>';
								}


								echo form_open_multipart('rumah/add');
								?>
								<div class="col-sm-12">
									<div class="form-group">
										<label>ID Lahan</label>
										<input name="nama_tempat" placeholder="ID Lahan" type="text" class="form-control">
									</div>
								</div>

								<div class="col-sm-6">
									<div class="form-group">
										<label>Nama Lahan</label>
										<input name="nama_tempat" placeholder="Nama Tempat" type="text" class="form-control">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label>Luas</label>
										<input name="alamat" placeholder="/Ha" class="form-control">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label>Jenis Lahan</label>
										<select class="form-control m-b" name="account">
											<option>Pertanian</option>
											<option>Perkebunan</option>
											<option>Hutan</option>
											<option>Perikanan</option>
											<option>Usaha </option>
											<option>Tidak Produksi</option>
										</select>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label>Status</label>
										<select class="form-control m-b" name="account">
											<option>Milik Sendiri</option>
											<option>Sewa</option>
											<option>Bagi Hasil</option>
											<option>Pemerintah </option>
										</select>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label>Pemilik Lahan</label>
										<input name="kec" placeholder="Nama Pemilik Lahan" class="form-control">
									</div>
								</div>


								<div class="col-sm-6">
									<div class="form-group">
										<label>Jenis Produksi</label>
										<input name="prov" placeholder="Produksi" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label>Keterangan</label>
									<textarea name="Geojson" id="" rows="2" class="form-control"></textarea>
								</div>

								<div class="form-group">
									<label>Input Geojson</label>
									<textarea name="Geojson" id="" rows="2" class="form-control"></textarea>
								</div>

								<div class="col-sm-6">

									<div class="form-group">
										<label>Warna Polygon</label>
										<select name="id_icon" class="form-control">
											<?php foreach ($icon as $key => $value) { ?>
												<option value="<?= $value->id_icon ?>"><?= $value->nama_icon ?></option>
											<?php } ?>
										</select>
									</div>
								</div>

								<div class="col-sm-6">
									<div class="form-group">
										<label>Gambar</label>
										<input type="file" name="gambar" class="form-control" required>
									</div>
								</div>

								<div>
									<button type="submit" class="btn btn-info">Simpan</button>
									<button type="reset" class="btn btn-success">Reset</button>
								</div>
								<?php echo form_close(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Data Jalan/Irigasi  -->
	<div class="content animate-panel">
		<div class="row">
			<div class="col-lg-7">
				<div class="hpanel">
					<div class="panel-heading">
						<div class="panel-tools">
							<a class="showhide"><i class="fa fa-chevron-up"></i></a>
							<a class="closebox"><i class="fa fa-times"></i></a>
						</div>
						Peta Lokasi Jalan/Irigasi
					</div>

					<div class="panel-body">

						<div class="card">

							<div class="card-body">
								<div id="mapid3" style="height: 500px;"></div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-5">
				<div class="hpanel">
					<div class="panel-heading">
						<div class="panel-tools">
							<a class="showhide"><i class="fa fa-chevron-up"></i></a>
							<a class="closebox"><i class="fa fa-times"></i></a>
						</div>
						Data Irigasi/Lahan
					</div>

					<div class="panel-body">
						<div class="card">

							<div class="card-body">
								<?php
								echo validation_errors('<div class="alert alert-warning alert-dismissible">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '</div>');
								if (isset($error_upload)) {
									echo '<div class="alert alert-danger alert-dismissible">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' . $error_upload . '</div>';
								}


								echo form_open_multipart('rumah/add');
								?>
								<div class="col-sm-12">
									<div class="form-group">
										<label>ID Lahan</label>
										<input name="nama_tempat" placeholder="ID Lahan" type="text" class="form-control">
									</div>
								</div>

								<div class="col-sm-6">
									<div class="form-group">
										<label>Nama Tempat</label>
										<input name="nama_tempat" placeholder="Nama Tempat" type="text" class="form-control">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label>Panjang</label>
										<input name="alamat" placeholder="Meter" class="form-control">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label>Lebar</label>
										<input name="alamat" placeholder="Meter" class="form-control">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label>Jenis</label>
										<select class="form-control m-b" name="account">
											<option value="">--Pilih--</option>
											<option>Jalan</option>
											<option>Irigasi</option>
										</select>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label>Kondisi</label>
										<select class="form-control m-b" name="account">
											<option value="">--Pilih--</option>
											<option>Rusak</option>
											<option>Tidak Terawat</option>
											<option>Baik</option>
										</select>
									</div>
								</div>

								<div class="col-sm-6">
									<div class="form-group">
										<label>Ketebalan</label>
										<select name="ketebalan" class="form-control">
											<option value="">--Pilih--</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
								</div>

								<div class="form-group">
									<label>Keterangan</label>
									<textarea name="keterangan" id="" placeholder="Keterangan Lainnya" rows="2" class="form-control"></textarea>
								</div>

								<div class="form-group">
									<label>Input Jalur Geojson</label>
									<textarea name="Geojson" id="" rows="2" class="form-control"></textarea>
								</div>

								<div class="col-sm-6">

									<div class="form-group">
										<label>Warna Line</label>
										<select name="id_icon" class="form-control">
											<?php foreach ($icon as $key => $value) { ?>
												<option value="<?= $value->id_icon ?>"><?= $value->nama_icon ?></option>
											<?php } ?>
										</select>
									</div>
								</div>

								<div class="col-sm-6">
									<div class="form-group">
										<label>Gambar</label>
										<input type="file" name="gambar" class="form-control" required>
									</div>
								</div>

								<div>
									<button type="submit" class="btn btn-info">Simpan</button>
									<button type="reset" class="btn btn-success">Reset</button>
								</div>
								<?php echo form_close(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Data Keterangan Lainnya  -->
	<div class="content animate-panel">
		<div class="row">
			<div class="col-lg-12">
				<div class="hpanel">
					<div class="panel-heading">
						<div class="panel-tools">
							<a class="showhide"><i class="fa fa-chevron-up"></i></a>
							<a class="closebox"><i class="fa fa-times"></i></a>
						</div>
						Pembangunan yang ada di Desa
					</div>
					<div class="panel-body">
						<form method="get" class="form-horizontal">

							<div class="form-group"><label class="col-sm-2 control-label">Nama Project</label>

								<div class="col-sm-10">
									<input type="text" placeholder="Default input" class="form-control m-b">
								</div>
							</div>
							<div class="hr-line-dashed"></div>
							<div class="form-group"><label class="col-sm-2 control-label">Column sizing</label>

								<div class="col-sm-10">
									<div class="row">
										<div class="col-md-2"><input type="text" placeholder=".col-md-2" class="form-control"></div>
										<div class="col-md-3"><input type="text" placeholder=".col-md-3" class="form-control"></div>
										<div class="col-md-4"><input type="text" placeholder=".col-md-4" class="form-control"></div>
									</div>
								</div>
							</div>
							<div class="hr-line-dashed"></div>
							<div class="form-group"><label class="col-sm-2 control-label">Input groups</label>

								<div class="col-sm-10">
									<div class="input-group m-b"><span class="input-group-addon">@</span> <input type="text" placeholder="Username" class="form-control"></div>
									<div class="input-group m-b"><input type="text" class="form-control"> <span class="input-group-addon">.00</span></div>
									<div class="input-group m-b"><span class="input-group-addon">$</span> <input type="text" class="form-control"> <span class="input-group-addon">.00</span></div>
									<div class="input-group m-b"><span class="input-group-addon"> <input type="checkbox"> </span> <input type="text" class="form-control"></div>
									<div class="input-group"><span class="input-group-addon"> <input type="radio"> </span> <input type="text" class="form-control"></div>
								</div>
							</div>
							<div class="hr-line-dashed"></div>
							<div class="form-group"><label class="col-sm-2 control-label">Button addons</label>

								<div class="col-sm-10">
									<div class="input-group m-b"><span class="input-group-btn">
											<button type="button" class="btn btn-primary">Go!</button> </span> <input type="text" class="form-control">
									</div>
									<div class="input-group"><input type="text" class="form-control"> <span class="input-group-btn"> <button type="button" class="btn btn-primary">Go!
											</button> </span></div>
								</div>
							</div>
							<div class="hr-line-dashed"></div>
							<div class="form-group"><label class="col-sm-2 control-label">With dropdowns</label>

								<div class="col-sm-10">
									<div class="input-group m-b">
										<div class="input-group-btn">
											<button class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button">Action <span class="caret"></span></button>
											<ul class="dropdown-menu">
												<li><a href="">Action</a></li>
												<li><a href="">Another action</a></li>
												<li><a href="">Something else here</a></li>
												<li class="divider"></li>
												<li><a href="">Separated link</a></li>
											</ul>
										</div>
										<input type="text" class="form-control">
									</div>
									<div class="input-group"><input type="text" class="form-control">

										<div class="input-group-btn">
											<button class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button">Action <span class="caret"></span></button>
											<ul class="dropdown-menu pull-right">
												<li><a href="">Action</a></li>
												<li><a href="">Another action</a></li>
												<li><a href="">Something else here</a></li>
												<li class="divider"></li>
												<li><a href="">Separated link</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="hr-line-dashed"></div>
							<div class="form-group"><label class="col-sm-2 control-label">Segmented</label>

								<div class="col-sm-10">
									<div class="input-group m-b">
										<div class="input-group-btn">
											<button tabindex="-1" class="btn btn-default" type="button">Action</button>
											<button class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button"><span class="caret"></span></button>
											<ul class="dropdown-menu">
												<li><a href="">Action</a></li>
												<li><a href="">Another action</a></li>
												<li><a href="">Something else here</a></li>
												<li class="divider"></li>
												<li><a href="">Separated link</a></li>
											</ul>
										</div>
										<input type="text" class="form-control">
									</div>
									<div class="input-group"><input type="text" class="form-control">


										<div class="input-group-btn">
											<button tabindex="-1" class="btn btn-default" type="button">Action</button>
											<button class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button"><span class="caret"></span></button>
											<ul class="dropdown-menu pull-right">
												<li><a href="">Action</a></li>
												<li><a href="">Another action</a></li>
												<li><a href="">Something else here</a></li>
												<li class="divider"></li>
												<li><a href="">Separated link</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="hr-line-dashed"></div>
							<div class="form-group">
								<div class="col-sm-8 col-sm-offset-2">
									<button class="btn btn-default" type="submit">Cancel</button>
									<button class="btn btn-primary" type="submit">Save changes</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script>
		var curLocation = [0, 0];
		if (curLocation[0] == 0 && curLocation[1] == 0) {
			curLocation = [-1.783350, 118.429184];
		}

		var mymap = L.map('mapid').setView([-1.783350, 118.429184], 5);
		L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
			attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
				'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
				'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
			id: 'mapbox/streets-v11'
		}).addTo(mymap);

		mymap.attributionControl.setPrefix(false);
		var marker = new L.marker(curLocation, {
			draggable: 'true'
		});

		marker.on('dragend', function(event) {
			var position = marker.getLatLng();
			marker.setLatLng(position, {
				draggable: 'true'
			}).bindPopup(position).update();
			$("#Latitude").val(position.lat);
			$("#Longitude").val(position.lng).keyup();
		});

		$("#Latitude, #Longitude").change(function() {
			var position = [parseInt($("#Latitude").val()), parseInt($("#Longitude").val())];
			marker.setLatLng(position, {
				draggable: 'true'
			}).bindPopup(position).update();
			mymap.panTo(position);
		});
		mymap.addLayer(marker);
	</script>

	<script>
		var curLocation = [0, 0];
		if (curLocation[0] == 0 && curLocation[1] == 0) {
			curLocation = [-1.783350, 118.429184];
		}

		var mymap = L.map('mapid2').setView([-1.783350, 118.429184], 5);
		L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
			attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
				'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
				'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
			id: 'mapbox/streets-v11'
		}).addTo(mymap);

		mymap.attributionControl.setPrefix(false);
		var marker = new L.marker(curLocation, {
			draggable: 'true'
		});

		marker.on('dragend', function(event) {
			var position = marker.getLatLng();
			marker.setLatLng(position, {
				draggable: 'true'
			}).bindPopup(position).update();
			$("#Latitude").val(position.lat);
			$("#Longitude").val(position.lng).keyup();
		});

		$("#Latitude, #Longitude").change(function() {
			var position = [parseInt($("#Latitude").val()), parseInt($("#Longitude").val())];
			marker.setLatLng(position, {
				draggable: 'true'
			}).bindPopup(position).update();
			mymap.panTo(position);
		});
		mymap.addLayer(marker);
	</script>

	<script>
		var curLocation = [0, 0];
		if (curLocation[0] == 0 && curLocation[1] == 0) {
			curLocation = [-1.783350, 118.429184];
		}

		var mymap = L.map('mapid3').setView([-1.783350, 118.429184], 5);
		L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
			attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
				'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
				'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
			id: 'mapbox/streets-v11'
		}).addTo(mymap);

		mymap.attributionControl.setPrefix(false);
		var marker = new L.marker(curLocation, {
			draggable: 'true'
		});

		marker.on('dragend', function(event) {
			var position = marker.getLatLng();
			marker.setLatLng(position, {
				draggable: 'true'
			}).bindPopup(position).update();
			$("#Latitude").val(position.lat);
			$("#Longitude").val(position.lng).keyup();
		});

		$("#Latitude, #Longitude").change(function() {
			var position = [parseInt($("#Latitude").val()), parseInt($("#Longitude").val())];
			marker.setLatLng(position, {
				draggable: 'true'
			}).bindPopup(position).update();
			mymap.panTo(position);
		});
		mymap.addLayer(marker);
	</script>