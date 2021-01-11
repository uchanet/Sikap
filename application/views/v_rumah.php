<div class="card">
	<div class="card-header">
		<strong class="card-title mb-3"></strong>

		<div class="card-body">
			<!-- DATA TABLE -->
			<h3 class="title-5 m-b-35"><?= $title ?></h3>


			<!-- Memanggil table dari library datatables yang sudah include fungsi pencarian cara memanggilnya dari class id="page" yang terdapat pada line terakhir di script ini -->
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover" id="page">
					<thead>
						<tr>
							<th>No.</th>
							<th>Nama Tempat</th>
							<th>Alamat</th>
							<th>Desa</th>
							<th>Kec</th>
							<!-- <th>Gambar</th> -->
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1;
						foreach ($rumah as $key => $value) { ?>
							<tr>
								<td><?= $no++; ?></td>
								<td><?= $value->nama_tempat ?></td>
								<td><?= $value->alamat ?></td>
								<td><?= $value->desa ?></td>
								<td><?= $value->kec ?></td>

								<!-- <td><img src="<?= base_url('gambar/' . $value->gambar)  ?>" width="200px"></td> -->
								<td>
									<a href="<?= base_url('home/detail/' . $value->id_rumah) ?>" class="btn btn-xs btn-success"><i class="fa fa-eye"></i> Detail</a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!-- sampai sini  -->


<!-- Script yang di perlukan untuk memanggil datatable dari library javascript -->
<script>
	$(document).ready(function() {
		$('#page').dataTable();
	});
</script>

<!-- 
<div class="col-md-12">
	<div class="card">
		<div class="card-header">
			<strong class="card-title mb-3"></strong>
		</div>
		<div class="card-body">

			<table class="table table-borderless table-striped table-earning table-responsive">
				<thead>
					<tr>
						<th>No.</th>
						<th>Nama Tempat</th>
						<th>Alamat</th>
						<th>Desa</th>
						<th>Kec</th>
						<th>Gambar</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
					foreach ($rumah as $key => $value) { ?>
						<tr>
							<td><?= $no++; ?></td>
							<td><?= $value->nama_tempat ?></td>
							<td><?= $value->alamat ?></td>
							<td><?= $value->desa ?></td>
							<td><?= $value->kec ?></td>

							<td><img src="<?= base_url('gambar/' . $value->gambar)  ?>" width="200px"></td>
							<td>
								<a href="<?= base_url('home/detail/' . $value->id_rumah) ?>" class="btn btn-xs btn-success"><i class="fa fa-eye"></i> Detail</a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>


		</div>
	</div>
</div> -->