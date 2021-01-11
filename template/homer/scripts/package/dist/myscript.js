// const flashData = $('.flash-data').data('flashdata');
// // console.log(flashdata);

// if (flashData) {
// 	Swal({
// 		title: 'Data Berhasil',
// 		text: 'Berhasil' + flashData,
// 		type: 'Success'
// 	});
// }

// $('.tombol-hapus').on('click', function (e) {
// 	e.preventDefault();
// 	cons href = $(this)
// 	Swal.fire({
// 		title: 'Apa anda yakin ingin menghapus?',
// 		text: "data user akan di hapus!",
// 		icon: 'warning',
// 		showCancelButton: true,
// 		confirmButtonColor: '#3085d6',
// 		cancelButtonColor: '#d33',
// 		confirmButtonText: 'Hapus Data!'
// 	}).then((result) => {
// 		if (result.value) {


// 			Swal.fire(
// 				'Terhapus!',
// 				'Data berhasil di hapus.',
// 				'success'
// 			)
// 			document.location.href = href;
// 		}
// 	})

// });

$(function () {


			$('.demo1').click(function () {
				swal({
					title: "Welcome in Alerts",
					text: "Lorem Ipsum is simply dummy text of the printing and typesetting industry."
				});
			});

			$('.demo2').click(function () {
				swal({
					title: "Berhasil!",
					text: "Data telah diubah!",
					type: "success"
				});
			});

			$('.tombol-hapus').on('click', (function (e) {
						e.preventDefault();
						const href = $(this).attr('href');

						swal({
							title: "Apa anda yakin?",
							text: "Data User akan dihapus!",
							type: "warning",
							showCancelButton: true,
							confirmButtonColor: "#DD6B55",
							confirmButtonText: "Ya, Hapus!"
						}).then((result) => {
							if (result.value == true) {
								document.location.href = href;

							}
						});

					});

					$('.tombol-hapus1').click(function () {
						swal({
								title: "Apa anda yakin?",
								text: "Menghapus Data!",
								type: "warning",
								showCancelButton: true,
								confirmButtonColor: "#DD6B55",
								confirmButtonText: "Ya, Hapus!"
								closeOnConfirm: false
							},
							function () {
								var submit = "<?php echo $submit; ?>";
								$.ajax({
										type: "POST",
										url: submit,
										data: {
											"id": id,
											"stat": "delete"
										},
										success: function (resp) {
											var obj = jQuery.parseJSON(resp);
											if (obj.state === "1") {

												table.ajax.reload();
												swal({
													title: "terhapus",
													text: obj.msg,
													type: "Success"
												}, function () {
													location.reload();
												});
												else {
													swal("Terhapus", obj.msg, "error");
												}
											},
											error: function (event, textStatus, errorThrown) {
												swal("Error !", 'Error Message: ' + textStatus + ', HTTP Error: ' + errorThrown, "error");
											}

										});

								});

							$('.demo4').click(function () {
								swal({
										title: "Are you sure?",
										text: "Your will not be able to recover this imaginary file!",
										type: "warning",
										showCancelButton: true,
										confirmButtonColor: "#DD6B55",
										confirmButtonText: "Yes, delete it!",
										cancelButtonText: "No, cancel plx!",
										closeOnConfirm: false,
										closeOnCancel: false
									},
									function (isConfirm) {
										if (isConfirm) {
											swal("Deleted!", "Your imaginary file has been deleted.", "success");
										} else {
											swal("Cancelled", "Your imaginary file is safe :)", "error");
										}
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

							$('.homerDemo1').click(function () {
								toastr.info('Info - This is a custom Homer info notification');
							});

							$('.homerDemo2').click(function () {
								toastr.success('Success - This is a Homer success notification');
							});

							$('.homerDemo3').click(function () {
								toastr.warning('Warning - This is a Homer warning notification');
							});

							$('.homerDemo4').click(function () {
								toastr.error('Error - This is a Homer error notification');
							});

						}
					});

					onclick = "return confirm('Apakah anda yakin ingin menghapus data?');"
