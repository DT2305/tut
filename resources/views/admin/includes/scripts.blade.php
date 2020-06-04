
<!-- jQuery -->
<script src={{asset("dashboard_layout/plugins/jquery/jquery.min.js")}}></script>
<!-- Bootstrap 4 -->
<script src={{asset("dashboard_layout/plugins/bootstrap/js/bootstrap.bundle.min.js")}}></script>
<!-- Select2 -->
<script src={{asset("dashboard_layout/plugins/select2/js/select2.full.min.js")}}></script>
<!-- bs-custom-file-input -->
<script src={{asset("dashboard_layout/plugins/bs-custom-file-input/bs-custom-file-input.min.js")}}></script>
<!-- AdminLTE App -->
<script src={{asset("dashboard_layout/dist/js/adminlte.min.js")}}></script>
<!-- DataTables -->
<script src={{asset("dashboard_layout/plugins/datatables/jquery.dataTables.js")}}></script>
<script src={{asset("dashboard_layout/plugins/datatables-bs4/js/dataTables.bootstrap4.js")}}></script>
<script>
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        bsCustomFileInput.init();
    });
</script>

<script>
    $("input[required]").parent("label").addClass("required");
</script>
@yield('js')
