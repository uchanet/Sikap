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
								<div id="mapid" style="height: 500px;"></div>
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
						Edit Data Bangunan
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


								echo form_open_multipart('rumah/edit/' . $rumah->id_rumah);
								?>


								<div class="form-group">
									<label>Nama Tempat</label>
									<input name="nama_tempat" value="<?= $rumah->id_rumah ?>" placeholder="Nama Tempat" type="text" class="form-control">
								</div>

								<div class="form-group">
									<label>Alamat</label>
									<input name="alamat" value="<?= $rumah->alamat ?>" placeholder="Alamat" class="form-control">
								</div>



								<div class="form-group">
									<label>Desa</label>
									<input name="desa" value="<?= $rumah->desa ?>" placeholder="Desa" class="form-control">
								</div>


								<div class="form-group">
									<label>Kecamatan</label>
									<input name="kec" value="<?= $rumah->kec ?>" placeholder="Kecamatan" class="form-control">
								</div>




								<div class="form-group">
									<label>Kabupaten</label>
									<input name="kab" value="<?= $rumah->kab ?>" placeholder="Kabupaten" type="text" class="form-control">
								</div>

								<div class="form-group">
									<label>Provinsi</label>
									<input name="prov" value="<?= $rumah->prov ?>" placeholder="Provinsi" class="form-control">
								</div>


								<div class="col-sm-6">
									<div class="form-group">
										<label>Latitude</label>
										<input id="Latitude" value="<?= $rumah->latitude ?>" name="latitude" placeholder="Latitude" type="text" class="form-control">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label>Longitude</label>
										<input name="longitude" value="<?= $rumah->longitude ?>" id="Longitude" placeholder="Longitude" class="form-control">
									</div>
								</div>


								<div class="form-group">
									<label>Deskripsi</label>
									<textarea name="deskripsi" id="" rows="2" class="form-control"><?= $rumah->deskripsi ?></textarea>
								</div>

								<div class="form-group">
									<label>Icon Marker</label>
									<select name="id_icon" class="form-control">
										<option value="<?= $rumah->id_icon ?>"><?= $rumah->nama_icon ?></option>
										<?php foreach ($icon as $key => $value) { ?>
											<option value="<?= $value->id_icon ?>"><?= $value->nama_icon ?></option>
										<?php } ?>
									</select>
								</div>
								<div class="form-group">
									<label>Gambar</label>
									<img src="<?= base_url('gambar/' . $rumah->gambar) ?>" width="120px">
								</div>
								<div class="form-group">
									<label>Ganti Gambar</label>
									<input type="file" name="gambar" class="form-control">
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
	<script>
		var curLocation = [0, 0];
		if (curLocation[0] == 0 && curLocation[1] == 0) {
			curLocation = [<?= $rumah->latitude ?>, <?= $rumah->longitude ?>];
		}

		var mymap = L.map('mapid').setView([<?= $rumah->latitude ?>, <?= $rumah->longitude ?>], 11);
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