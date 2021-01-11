<div class="row">
	<div class="col-md-6">
		<div class="card">
			<div class="card-header">
				<strong class="card-title mb-3">Lokasi</strong>
			</div>
			<div class="card-body">
				<div id="map" style="width: 100%; height: 525px;"></div>
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="card">
			<div class="card-header">
				<strong class="card-title mb-3">Gambar Lokasi</strong>
			</div>
			<div class="card-body">
				<img src="<?= base_url('gambar/' . $rumah->gambar) ?>" width="100%" height="350">
			</div>
		</div>
	</div>
</div>
<div class="col-md-12">
	<div class="card">
		<div class="card-header">
			<strong class="card-title mb-3">Data Rumah</strong>
		</div>
		<div class="card-body">
			<table class="table">
				<tr>
					<th width="200px">Nama Tempat</th>
					<th width="20px">:</th>
					<td><?= $rumah->nama_tempat ?></td>
				</tr>
				<tr>
					<th width="200px">Alamat</th>
					<th>:</th>
					<td><?= $rumah->alamat ?></td>
				</tr>
				<tr>
					<th width="200px">Desa</th>
					<th>:</th>
					<td><?= $rumah->desa ?></td>
				</tr>
				<tr>
					<th width="200px">Kecamatan</th>
					<th>:</th>
					<td><?= $rumah->kec ?></td>
				</tr>
				<tr>
					<th width="200px">Kabupaten</th>
					<th>:</th>
					<td><?= $rumah->kab ?></td>
				</tr>
				<tr>
					<th width="200px">Provinsi</th>
					<th>:</th>
					<td><?= $rumah->prov ?></td>
				</tr>
				<tr>
					<th width="200px">Deskripsi</th>
					<th>:</th>
					<td><?= $rumah->deskripsi ?></td>
				</tr>
			</table>
		</div>
	</div>
</div>
<br>




<script>
	navigator.geolocation.getCurrentPosition(function(location) {
		var latlng = new L.LatLng(location.coords.latitude, location.coords.longitude);
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
			center: [<?= $rumah->latitude  ?>, <?= $rumah->longitude  ?>],
			zoom: 18,
			layers: [peta2]
		});

		var baseLayers = {
			"Grayscale": peta1,
			"Satelite": peta2,
			"Streets": peta3
		};
		L.control.layers(baseLayers).addTo(map);
		L.marker([<?= $rumah->latitude ?>, <?= $rumah->longitude ?>], {
			icon: L.icon({
				iconUrl: '<?= base_url('marker/' . $rumah->icon)  ?>',
				iconSize: [50, 50], // size of the icon
			})
		}).addTo(map).bindPopup("<img src='<?= base_url('gambar/' . $rumah->gambar) ?>' width='280px'>" +
			"Nama Tempat : <?= $rumah->nama_tempat ?></br>" +
			"Alamat : <?= $rumah->alamat ?></br>" +
			"Desa : <?= $rumah->desa ?></br>" +
			"<a href='https://www.google.com/maps/dir/?api=1&origin=" +
			location.coords.latitude + "," + location.coords.longitude + "&destination=<?= $rumah->latitude ?>,<?= $rumah->longitude ?>' class='btn btn-sm btn-outline-success' target='_blank'>Rute</a>").openPopup();
	});
</script>