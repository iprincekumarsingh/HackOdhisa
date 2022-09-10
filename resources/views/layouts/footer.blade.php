
</div></div>
        <!--**********************************
            Footer start
        ***********************************-->
      
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{url('admin/vendor/global/global.min.js')}}"></script>
	<script src="{{url('admin/vendor/chart.js/Chart.bundle.min.js')}}"></script>
	<script src="{{url('admin/vendor/jquery-nice-select/js/jquery.nice-select.min.js')}}"></script>

	<!-- Apex Chart -->
	<script src="{{url('admin/vendor/apexchart/apexchart.js')}}"></script>
	<script src=".{{url('admin/vendor/nouislider/nouislider.min.js')}}"></script>
	<script src="{{url('admin/vendor/wnumb/wNumb.js')}}"></script>

	<!-- Dashboard 1 -->
	<script src="{{url('admin/js/dashboard/dashboard-1.js')}}"></script>

    <script src="{{url('admin/js/custom.min.js')}}"></script>
	<script src="{{url('admin/js/dlabnav-init.js')}}"></script>


	<script>
		jQuery(document).ready(function(){
			setTimeout(function() {
				dezSettingsOptions.version = 'dark';
				new dezSettings(dezSettingsOptions);
			},500)
		});
	</script>
</body>
</html>
