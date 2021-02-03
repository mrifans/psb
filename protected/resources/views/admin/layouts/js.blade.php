<!-- container-scroller -->
    <!-- base:js -->
    <script src="{{ url('comp/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="{{ url('comp/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{ url('comp/vendors/progressbar.js/progressbar.min.js')}}"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ url('comp/js/off-canvas.js')}}"></script>
    <script src="{{ url('comp/js/hoverable-collapse.js')}}"></script>
    <script src="{{ url('comp/js/template.js')}}"></script>
    <script src="{{ url('comp/js/settings.js')}}"></script>
    <script src="{{ url('comp/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->

    <script src="{{url('comp/vendors/raphael/raphael.min.js')}}"></script>
    <script src="{{url('comp/vendors/morris.js/morris.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <script src="{{url('comp/vendors/datatables.net/jquery.dataTables.js')}}"></script>
    <script src="{{url('comp/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
    <!-- Custom js for this page-->
    <script src="{{ url('comp/js/dashboard.js')}}"></script>
    <script src="{{url('comp/js/data-table.js')}}"></script>
    <script src="{{url('comp/js/morris.js')}}"></script>
    @yield('excel')


    <!-- End custom js for this page-->
