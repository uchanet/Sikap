<div class="col-md-12">
	<!-- <div class="btn btn-xs btn-success" id="find-me">Show my location</div><br /> -->
	<p id="status"></p>
	<a id="map-link" target="_blank"></a>
	<br>
	<div id="map" style="width: 100%; height: 550px;"></div>



</div>


<script>
	navigator.geolocation.getCurrentPosition(function(location) {
		var latlng = new L.LatLng(location.coords.latitude, location.coords.longitude);
		var grupwisata = L.layerGroup();
		var peta1 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
			attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
				'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
				'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
			id: 'mapbox/streets-v11'
		});

		// var peta1 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		// 	attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		// 	maxZoom: 18,
		// 	id: 'mapbox/streets-v11',
		// 	tileSize: 512,
		// 	zoomOffset: -1,
		// 	accessToken: 'your.mapbox.access.token'
		// }).addTo(map);
		var provinsi = L.layerGroup()
		var kota = L.layerGroup()
		var desa = L.layerGroup()


		//Menggunakan Ajax atribut dari data GeoJson
		function popUp(f, l) {
			var out = [];
			if (f.properties) {
				for (key in f.properties) {
					out.push(key + ": " + f.properties[key]);
				}
				l.bindPopup(out.join("<br />"));
			}
		}
		var jsonTest = new L.GeoJSON.AJAX(["<?= base_url('assets/geojson/sulsel.geojson') ?>"], {

			onEachFeature: popUp
		}).addTo(provinsi);

		function popUp(f, l) {
			var out = [];
			if (f.properties) {
				for (key in f.properties) {
					out.push(key + ": " + f.properties[key]);
				}
				l.bindPopup(out.join("<br />"));
			}
		}
		var jsonTest = new L.GeoJSON.AJAX(["<?= base_url('assets/geojson/makassar.geojson') ?>"], {
			onEachFeature: popUp
		}).addTo(desa);

		function popUp(f, l) {
			var out = [];
			if (f.properties) {
				for (key in f.properties) {
					out.push(key + ": " + f.properties[key]);
				}
				l.bindPopup(out.join("<br />"));
			}
		}
		var jsonTest = new L.GeoJSON.AJAX(["<?= base_url('assets/geojson/desa.geojson') ?>"], {
			onEachFeature: popUp
		}).addTo(desa);

		// $.getJSON("<?= base_url('assets/geojson/makassar.geojson') ?>", function(data) {
		// 	geoLayer = L.geoJson(data, {
		// 		style: function(feature) {
		// 			return {
		// 				opacity: 0.5,
		// 				color: 'red',
		// 				fillcolor: 'red',
		// 			}
		// 		},

		// 	}).addTo(provinsi);
		// 	geoLayer.eachLayer(function(layer) {
		// 		layer.bindPopup("Sulawesi Selatan")
		// 	});
		// });

		var peta2 = L.tileLayer('http://www.google.cn/maps/vt?lyrs=s@189&gl=cn&x={x}&y={y}&z={z}', {
			attribution: 'google'
		});

		var peta3 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
			attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
		});

		var map = L.map('map', {
			center: [-2.110692, 119.126766],
			zoom: 5,
			layers: [peta3, grupwisata]
		});

		var baseLayers = {
			"Grayscale": peta1,
			"Satelite": peta2,
			"Streets": peta3
		};

		var overlays = {
			"Rumah": grupwisata,
			"Provinsi": provinsi,
			"Kota": kota,
			"Desa": desa

		};

		L.control.layers(baseLayers, overlays).addTo(map);
		var lc = L.control.locate({
			position: 'topleft',
			strings: {
				title: "Posisi Saya!"
			}
		}).addTo(map)

		var data = [
			<?php foreach ($rumah as $key => $value) { ?>

				, {
					"loc": [<?= $value->latitude; ?>, <?= $value->longitude; ?>],
					"title": "<?= $value->nama_tempat; ?>"
				},
			<?php }  ?>

		];

		// Awal : Memanggil Fungsi Search
		var markersLayer = new L.LayerGroup(); //layer contain searched elements

		map.addLayer(markersLayer);

		var controlSearch = new L.Control.Search({
			position: 'topright', //letak fungsi search
			layer: markersLayer,
			initial: false,
			zoom: 15,
			marker: false
		});

		//Memanggil fungsi search


		map.addControl(new L.Control.Search({

			layer: markersLayer,
			initial: false,
			position: 'topright',
			zoom: 16,
			collapsed: true
		}));

		var icon_rumah = L.icon({
			iconUrl: '<?= base_url('marker/' . $value->icon)  ?>',
			iconSize: [0, 0], // size of the icon
		});

		for (i in data) {
			var title = data[i].title; //value searched
			var loc = data[i].loc; //position found
			var marker = new L.Marker(new L.latLng(loc), {
				title: title,
				icon: icon_rumah

			}); // property searched

			markersLayer.addLayer(marker);
		}

		<?php foreach ($rumah as $key => $value) { ?>

			L.marker([<?= $value->latitude ?>, <?= $value->longitude ?>], {
				icon: L.icon({
					iconUrl: '<?= base_url('marker/' . $value->icon)  ?>',
					iconSize: [30, 30], // size of the icon
				})
			}).addTo(grupwisata).bindPopup("<img src='<?= base_url('gambar/' . $value->gambar) ?>' width='280px'>" +
				"Nama Tempat : <?= $value->nama_tempat ?></br>" +
				"Alamat : <?= $value->alamat ?></br>" +
				"Desa : <?= $value->desa ?></br>" +
				"<a href='<?= base_url('home/detail/' . $value->id_rumah) ?>' class='btn btn-sm btn-outline-primary'>Detail</a>" +
				"<a href='https://www.google.com/maps/dir/?api=1&origin=" +
				location.coords.latitude + "," + location.coords.longitude + "&destination=<?= $value->latitude ?>,<?= $value->longitude ?>' class='btn btn-sm btn-outline-success' target='_blank'>Rute</a>");
		<?php } ?>
	});



	function geoFindMe() {

		const status = document.querySelector('#status');
		const mapLink = document.querySelector('#map-link');

		mapLink.href = '';
		mapLink.textContent = '';

		function success(position) {
			const latitude = position.coords.latitude;
			const longitude = position.coords.longitude;

			status.textContent = '';
			mapLink.href = `https://www.openstreetmap.org/#map=18/${latitude}/${longitude}`;
			mapLink.textContent = `Latitude: ${latitude} °, Longitude: ${longitude} °`;
		}

		function error() {
			status.textContent = 'Unable to retrieve your location';
		}

		if (!navigator.geolocation) {
			status.textContent = 'Geolocation is not supported by your browser';
		} else {
			status.textContent = 'Locating…';
			navigator.geolocation.getCurrentPosition(success, error);
		}

	}

	document.querySelector('#find-me').addEventListener('click', geoFindMe);

	function onMapClick(e) {
		popup
			.setLatLng(e.latlng)
			.setContent("Koordinat" + e.latlng.toString())
			.openOn(map);
	}

	map.on('click', onMapClick);
	L.control.scale().addTo(map);
</script>