<?php if(isset($env)) { show_filename($env, __FILE__); } ?>

<!-- Footer -->
<footer class="section-footer sticky-footer">
	<div class="container my-auto">
		<div class="copyright text-center my-auto">
			<span>Copyright &copy; <?php echo date("Y"); ?> Wektorek.pl</span>
		</div>
		<div class="copyright text-center my-auto pt-2">Strona załadowana w <strong>{elapsed_time}</strong> sek. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter v.<strong>' . CI_VERSION . '</strong>' : '' ?></div>
	</div>
</footer>
<!-- End of Footer -->


<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Wylogowanie</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">Kliknij wyloguj, aby opuścić bieżącą sesję.</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Anuluj</button>
				<a class="btn btn-primary" href="<?= base_url('auth/logout')?>">Wyloguj</a>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view($this->config->item('ci_my_admin_template_dir_admin') . 'theme_switch'); ?>

<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url(); ?>assets/admin/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url(); ?>assets/admin/js/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url(); ?>assets/admin/js/js.cookie.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/sb-admin-2.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/common.js"></script>

<!-- Page level plugins -->
<script src="<?php echo base_url(); ?>assets/admin/js/Chart.min.js"></script>


<!-- Page level plugins -->
<script src="<?php echo base_url(); ?>assets/admin/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script>

	// Call the dataTables jQuery plugin
	$(document).ready(function() {
		$('#dataTable').DataTable({
			responsive: true,
			"language": {
				"processing":     "Przetwarzanie...",
				"search":         "Szukaj:",
				"lengthMenu":     "Pokaż _MENU_ pozycji",
				"info":           "Pozycje od _START_ do _END_ z _TOTAL_ łącznie",
				"infoEmpty":      "Pozycji 0 z 0 dostępnych",
				"infoFiltered":   "(filtrowanie spośród _MAX_ dostępnych pozycji)",
				"infoPostFix":    "",
				"loadingRecords": "Wczytywanie...",
				"zeroRecords":    "Nie znaleziono pasujących pozycji",
				"emptyTable":     "Brak danych",
				"paginate": {
					"first":      "Pierwsza",
					"previous":   "Poprzednia",
					"next":       "Następna",
					"last":       "Ostatnia"
				},
				"aria": {
					"sortAscending": ": aktywuj, by posortować kolumnę rosnąco",
					"sortDescending": ": aktywuj, by posortować kolumnę malejąco"
				}
			}
		});
	});

</script>

