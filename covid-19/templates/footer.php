<div class="clearfix"></div>
	<footer>
		<div class="container-fluid">
			<p class="copyright">&copy; <?= date('Y'); ?> Rega Aji</p>
		</div>
	</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
	<!-- DataTables -->
  <script type="text/javascript" src="assets/DataTables/datatables.min.js"></script>
	<script>
    $(function () {
    $('#tabel1').DataTable()
    $('#tabel2').DataTable()
    $('#tabel3').DataTable({
      'paging': true,
      'lengthChange': true,
      'searching': true,
      'ordering': false,
      'info': false,
      'autoWidth': false,
      'language': {"emptyTable": "No data available in table"},
  })
})
</script>

	

</body>

</html>