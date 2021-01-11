<!-- Main Wrapper -->
<div id="wrapper">
	<div class="content animate-panel">

		<div class="row">
			<div class="col-lg-12 text-center m-t-md">
				<h2>Welcome to SIKAP WEBAPPS | Village Information System</h2>

				<p>
					Layanan Aplikasi Informasi <strong>Satu Data</strong> Desa.
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="hpanel">
					<div class="panel-body">
						<div class="stats-title pull-left">
							<h4>Page Views</h4>
						</div>
						<div class="stats-icon pull-right">
							<i class="pe-7s-monitor fa-4x"></i>
						</div>
						<div class="m-t-xl">
							<h1 class="text-success">150k+</h1>

						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="hpanel">
					<div class="panel-body">
						<div class="stats-title pull-left">
							<h4>Active Users</h4>
						</div>
						<div class="stats-icon pull-right">
							<i class="pe-7s-shuffle fa-4x"></i>
						</div>
						<div class="m-t-xl">
							<h1 class="text-info">100</h1>

						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="hpanel">
					<div class="panel-body">
						<div class="stats-title pull-left">
							<h4>Total Data</h4>
						</div>
						<div class="stats-icon pull-right">
							<i class="pe-7s-ticket fa-4x"></i>
						</div>
						<div class="m-t-xl">
							<h1 class="text-warning">200.000</h1>

						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="hpanel">
					<div class="panel-body">
						<div class="stats-title pull-left">
							<h4>Messages</h4>
						</div>
						<div class="stats-icon pull-right">
							<i class="pe-7s-attention fa-4x"></i>
						</div>
						<div class="m-t-xl">
							<h1 class="text-danger">680</h1>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="hpanel">
					<div class="panel-heading">
						<div class="panel-tools">
							<a class="showhide"><i class="fa fa-chevron-up"></i></a>
							<a class="closebox"><i class="fa fa-times"></i></a>
						</div>
						Peta Spatial
					</div>
					<div class="panel-body">
						<div class="row">

							<div class="col-md-12">
								<div class="btn btn-xs btn-success" id="find-me">Show my location</div><br />
								<p id="status"></p>
								<a id="map-link" target="_blank"></a>
								<br>
								<div id="map" style="width: 100%; height: 550px;"></div>

							</div>


						</div>
					</div>
					<div class="panel-footer">
						<span class="pull-right">
							Layanan Satu data peta | <a href="">SIKAP</a>
						</span> Last update: 25.10.2020
					</div>
				</div>
			</div>
		</div>

	</div>




	<script>
		navigator.geolocation.getCurrentPosition(function(location) {
			var latlng = new L.LatLng(location.coords.latitude, location.coords.longitude);
			var gruprumah = L.layerGroup();
			var peta1 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
				attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
					'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
					'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
				id: 'mapbox/streets-v11'
			});

			var peta2 = L.tileLayer('http://www.google.cn/maps/vt?lyrs=s@189&gl=cn&x={x}&y={y}&z={z}', {
				attribution: 'google'
			});

			var peta3 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
				attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
			});

			var map = L.map('map', {
				center: [-2.110692, 119.126766],
				zoom: 5,
				layers: [peta2, gruprumah]
			});

			var baseLayers = {
				"Grayscale": peta1,
				"Satelite": peta2,
				"Streets": peta3
			};

			var overlays = {
				"Rumah": gruprumah,
			};
			L.control.layers(baseLayers, overlays).addTo(map);
			var lc = L.control.locate({
				position: 'topleft',
				strings: {
					title: "Posisi Saya!"
				}
			}).addTo(map)

			L.control.layers(baseLayers, overlays).addTo(map);


			<?php foreach ($wisata as $key => $value) { ?>

				L.marker([<?= $value->latitude ?>, <?= $value->longitude ?>], {
					icon: L.icon({
						iconUrl: '<?= base_url('marker/' . $value->icon)  ?>',
						iconSize: [50, 50], // size of the icon
					})
				}).addTo(gruprumah).bindPopup("<img src='<?= base_url('gambar/' . $value->gambar) ?>' width='200px'> </br>" +
					"Nama Tempat : <?= $value->nama_tempat ?></br>" +
					"Alamat : <?= $value->alamat ?></br>" +
					"Desa : <?= $value->desa ?></br>" +
					"<a href='<?= base_url('home/detail/' . $value->id_rumah) ?>' class='btn btn-success btn-sm'>Detail</a>" +
					"<a href='https://www.google.com/maps/dir/?api=1&origin=" +
					location.coords.latitude + "," + location.coords.longitude + "&destination=<?= $value->latitude ?>,<?= $value->longitude ?>' class='btn btn-warning btn-sm' target='_blank'>Rute</a>");
			<?php } ?>
		});
	</script>