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
					<?= $title; ?>
				</h2>
				<small>Advanced interaction controls to any HTML table</small>
			</div>
		</div>
	</div>

	<div class="content animate-panel">
		<div class="row">
			<div class="col-lg-12">
				<div class="hpanel">
					<div class="panel-heading">
						<div class="panel-tools">
							<a class="showhide"><i class="fa fa-chevron-up"></i></a>
							<a class="closebox"><i class="fa fa-times"></i></a>
						</div>
						<a href="<?= base_url('rumah/add'); ?>" class="btn btn-primary"> Tambah</a> Data Titik Rumah
					</div>
					<div class="panel-body">


						<table id="example1" class="table table-striped table-bordered table-hover" width="100%">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Tempat</th>
									<th>Alamat</th>
									<th>Desa</th>
									<th>Kecamatan</th>
									<th>Gambar</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
							<tbody>
								<?php $no = 1;
								foreach ($rumah as $key => $value) { ?>
									<tr>
										<td><?= $no++; ?></td>
										<td><?= $value->nama_tempat ?></td>
										<td><?= $value->alamat ?></td>
										<td><?= $value->desa ?></td>
										<td><?= $value->kec ?></td>
										<td><img src="<?= base_url('gambar/' . $value->gambar)  ?>" class="img-circle m-b" width="100" height="100"></td>
										<td>
											<a href="<?= base_url('rumah/edit/' . $value->id_rumah) ?>" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
											<a href="<?= base_url('rumah/delete/' . $value->id_rumah) ?>" onclick="return confirm('Apakah Data Ini Akan Dihapus..?')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
										</td>
									</tr>
								<?php } ?>
							</tbody>
						</table>

					</div>
				</div>


			</div>

		</div>
	</div>



	<!-- 	
	<a href="<?= base_url('user/add'); ?>" class="au-btn au-btn-icon au-btn--green au-btn--small">
		<i class="zmdi zmdi-plus"></i> Add</a>


		<div class="content animate-panel">

			<div class="row">
				<div class="row layout-top-spacing">



					<div class="col-lg-12">
						<div class="hpanel">
							<div class="panel-heading">
								<div class="panel-tools">
									<a class="showhide"><i class="fa fa-chevron-up"></i></a>
									<a class="closebox"><i class="fa fa-times"></i></a>
								</div>
								Basic example with Ajax (json file)
							</div>
							<div class="panel-body">
								<table id="tabel1" class="table table-striped table-bordered table-hover" width="100%">
									<thead>
										<tr>
											<th>No</th>
											<th>Nama Tempat</th>
											<th>Alamat</th>
											<th>Desa</th>
											<th>Kecamatan</th>
											<th>Gambar</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
									<tbody>
										<?php $no = 1;
										foreach ($rumah as $key => $value) { ?>
											<tr>
												<td><?= $no++; ?></td>
												<td><?= $value->nama_tempat ?></td>
												<td><?= $value->alamat ?></td>
												<td><?= $value->desa ?></td>
												<td><?= $value->kec ?></td>
												<td><img src="<?= base_url('gambar/' . $value->gambar)  ?>" class="img-circle m-b" width="100" height="100"></td>
												<td>
													<a href="<?= base_url('rumah/edit/' . $value->id_rumah) ?>" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
													<a href="<?= base_url('rumah/delete/' . $value->id_rumah) ?>" onclick="return confirm('Apakah Data Ini Akan Dihapus..?')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
												</td>
											</tr>
										<?php } ?>
									</tbody>
								</table>

							</div>
						</div>


					</div>
				</div>
			</div>
		</div> -->
	<!-- <script>
			$('#html5-extension').DataTable({
				dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5"i><"col-md-7"p>>> >',
				buttons: {
					buttons: [{
							extend: 'copy',
							className: 'btn'
						},
						{
							extend: 'csv',
							className: 'btn'
						},
						{
							extend: 'excel',
							className: 'btn'
						},
						{
							extend: 'print',
							className: 'btn'
						}
					]
				},
				"oLanguage": {
					"oPaginate": {
						"sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
						"sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
					},
					"sInfo": "Showing page _PAGE_ of _PAGES_",
					"sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
					"sSearchPlaceholder": "Search...",
					"sLengthMenu": "Results :  _MENU_",
				},
				"stripeClasses": [],
				"lengthMenu": [7, 10, 20, 50],
				"pageLength": 7
			});
		</script> -->

	<!-- Sweet Alert  -->
	<!-- <script src="<?= base_url('vendor/homer/') ?>vendor/sweetalert/lib/sweet-alert.min.js"></script>
        <script src="<?= base_url('vendor/homer/') ?>vendor/toastr/build/toastr.min.js"></script> -->
	<!-- 
		<script>
			function hapus($id) {
				var base_url = '<?php echo base_url(); ?>';

				swal({
						title: "Apa anda yakin?",
						text: "Data ini akan di hapus!",
						type: "warning",
						showCancelButton: true,
						confirmButtonColor: "#DD6B55",
						confirmButtonText: "Ya, hapus!",
						cancelButtonText: "Tidak, Batalkan!",
						closeOnConfirm: false,
						closeOnCancel: false
					},
					function(isConfirm) {
						if (isConfirm) {

							document.location.href = base_url + "/dataUser/hapus/" + $id;

						} else {
							swal("Cancelled", "Data tidak jadi dihapus", "error");

						}

					});
			};

			$(function() {
				$('#example2').dataTable()

				$('.tambah').click(function() {
					swal({
						title: "Berhasil!",
						text: "Data telah ditambahkan!",
						type: "success"
					});
				});


				$('.ubah').click(function() {
					swal({
						title: "Berhasil!",
						text: "Data telah diubah!",
						type: "success"
					});
				});

				// Toastr options
				toastr.options = {
					"debug": false,
					"newestOnTop": false,
					"positionClass": "toast-top-center",
					"closeButton": true,
					"toastClass": "animated fadeInDown",
				};

				$('.homerDemo1').click(function() {
					toastr.info('Info - This is a custom Homer info notification');
				});

				$('.homerDemo2').click(function() {
					toastr.success('Success - This is a Homer success notification');
				});

				$('.homerDemo3').click(function() {
					toastr.warning('Warning - This is a Homer warning notification');
				});

				$('.homerDemo4').click(function() {
					toastr.error('Error - This is a Homer error notification');
				});


			});
		</script> -->

	<!-- <div class="content animate-panel">

			<div class="row">
				<div class="col-lg-12">
					<div class="hpanel">
						<div class="panel-heading">
							<div class="panel-tools">
								<a class="showhide"><i class="fa fa-chevron-up"></i></a>
								<a class="closebox"><i class="fa fa-times"></i></a>
							</div>
							Basic example with Ajax (json file)
						</div>
						<div class="panel-body">
							<table id="tabel1" class="table table-striped table-bordered table-hover" width="100%">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama Tempat</th>
										<th>Alamat</th>
										<th>Desa</th>
										<th>Kecamatan</th>
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
											<td><img src="<?= base_url('gambar/' . $value->gambar)  ?>" class="img-circle m-b" width="100" height="100"></td>
											<td>
												<a href="<?= base_url('rumah/edit/' . $value->id_rumah) ?>" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
												<a href="<?= base_url('rumah/delete/' . $value->id_rumah) ?>" onclick="return confirm('Apakah Data Ini Akan Dihapus..?')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
											</td>
										</tr>
									<?php } ?>
								</tbody>
							</table>

						</div>
					</div>


				</div>

			</div>
		</div> -->

	<script src="<?= base_url() ?>template/homer/vendor/jquery/dist/jquery.min.js"></script>
	<script src="<?= base_url() ?>template/homer/vendor/jquery-ui/jquery-ui.min.js"></script>
	<script src="<?= base_url() ?>template/homer/vendor/slimScroll/jquery.slimscroll.min.js"></script>
	<script src="<?= base_url() ?>template/homer/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="<?= base_url() ?>template/homer/vendor/metisMenu/dist/metisMenu.min.js"></script>
	<script src="<?= base_url() ?>template/homer/vendor/iCheck/icheck.min.js"></script>
	<script src="<?= base_url() ?>template/homer/vendor/sparkline/index.js"></script>

	<!-- DataTables -->
	<script src="<?= base_url() ?>template/homer/vendor/datatables/media/js/jquery.dataTables.min.js"></script>
	<script src="<?= base_url() ?>template/homer/vendor/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
	<!-- DataTables buttons scripts -->
	<script src="<?= base_url() ?>template/homer/vendor/pdfmake/build/pdfmake.min.js"></script>
	<script src="<?= base_url() ?>template/homer/vendor/pdfmake/build/vfs_fonts.js"></script>
	<script src="<?= base_url() ?>template/homer/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
	<script src="<?= base_url() ?>template/homer/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
	<script src="<?= base_url() ?>template/homer/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
	<script src="<?= base_url() ?>template/homer/vendor/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>


	<script>
		$.noConflict();
		jQuery(document).ready(function($) {
			$('#example1').DataTable({

				dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp",
				"lengthMenu": [
					[10, 25, 50, -1],
					[10, 25, 50, "All"]
				],
				buttons: [{
					extend: 'copy',
					className: 'btn-sm'
				}, {
					extend: 'csv',
					title: 'ExampleFile',
					className: 'btn-sm'
				}, {
					extend: 'pdf',
					title: 'ExampleFile',
					className: 'btn-sm'
				}, {
					extend: 'print',
					className: 'btn-sm'
				}]
			});

		});
	</script>