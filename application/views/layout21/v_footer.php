<!-- Footer-->
<footer class="footer">
	<span class="pull-right"> Copyright © 2020 </span> PT. SIKAP Smart Village information | Grow with Community

	</div>


	<!-- Vendor scripts -->
	<script src=" <?= base_url() ?>template/homer/vendor/jquery/dist/jquery.min.js"></script>
	<script src=" <?= base_url() ?>template/homer/vendor/jquery-ui/jquery-ui.min.js"></script>
	<script src=" <?= base_url() ?>template/homer/vendor/slimScroll/jquery.slimscroll.min.js"></script>
	<script src=" <?= base_url() ?>template/homer/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src=" <?= base_url() ?>template/homer/vendor/jquery-flot/jquery.flot.js"></script>
	<script src=" <?= base_url() ?>template/homer/vendor/jquery-flot/jquery.flot.resize.js"></script>
	<script src=" <?= base_url() ?>template/homer/vendor/jquery-flot/jquery.flot.pie.js"></script>
	<script src=" <?= base_url() ?>template/homer/vendor/flot.curvedlines/curvedLines.js"></script>
	<script src=" <?= base_url() ?>template/homer/vendor/jquery.flot.spline/index.js"></script>
	<script src=" <?= base_url() ?>template/homer/vendor/metisMenu/dist/metisMenu.min.js"></script>
	<script src=" <?= base_url() ?>template/homer/vendor/iCheck/icheck.min.js"></script>
	<script src=" <?= base_url() ?>template/homer/vendor/peity/jquery.peity.min.js"></script>
	<script src=" <?= base_url() ?>template/homer/vendor/sparkline/index.js"></script>

	<!-- App scripts -->
	<script src=" <?= base_url() ?>template/homer/scripts/homer.js"></script>
	<script src=" <?= base_url() ?>template/homer/scripts/charts.js"></script>
	<script src="<?= base_url() ?>template/homer/vendor/chartjs/Chart.min.js"></script>

	<!-- sweet alert  -->
	<script src="<?= base_url() ?>template/homer/vendor/sweetalert/lib/sweet-alert.min.js"></script>
	<!-- footable  -->
	<script src="<?= base_url() ?>template/homer/vendor/fooTable/dist/footable.all.min.js"></script>
	<!-- date picker  -->
	<script src="<?= base_url() ?>template/homer/vendor/bootstrap-datepicker-master/dist/js/bootstrap-datepicker.min.js"></script>

	</body>


	</html>


	<!-- data table  -->

	<script>
		$(function() {

			$(document).ready(function() {
				// Initialize Example 1
				$('#table').footable();

			});
			$('.input-group.date').datepicker();



			$('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
				$('a[data-toggle="tab"]').removeClass('btn-primary');
				$('a[data-toggle="tab"]').addClass('btn-default');
				$(this).removeClass('btn-default');
				$(this).addClass('btn-primary');
			})

			$('.next').click(function() {
				var nextId = $(this).parents('.tab-pane').next().attr("id");
				$('[href=#' + nextId + ']').tab('show');
			})

			$('.prev').click(function() {
				var prevId = $(this).parents('.tab-pane').prev().attr("id");
				$('[href=#' + prevId + ']').tab('show');
			})

			$('.submitWizard').click(function() {

				var approve = $(".approveCheck").is(':checked');
				if (approve) {
					// Got to step 1
					$('[href=#step1]').tab('show');

					// Serialize data to post method
					var datastring = $("#simpleForm").serialize();

					// Show notification
					swal({
						title: "Thank you!",
						text: "You approved our example form!",
						type: "success"
					});
					//            Example code for post form
					//            $.ajax({
					//                type: "POST",
					//                url: "your_link.php",
					//                data: datastring,
					//                success: function(data) {
					//                    // Notification
					//                }
					//            });
				} else {
					// Show notification
					swal({
						title: "Error!",
						text: "You have to approve form checkbox.",
						type: "error"
					});
				}
			})
		});
	</script>