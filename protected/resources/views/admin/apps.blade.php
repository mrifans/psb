<!DOCTYPE html>
<html lang="en">
  @include('admin.layouts.head')
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      @include('admin.layouts.navbar')
      <!-- partial -->
        <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->        
        <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
        @include('admin.layouts.sidebar')
        <!-- partial -->
        <div class="main-panel">
        @yield('section')
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
        @include('admin.layouts.footer')
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
@include('admin.layouts.js')
  </body>
</html>