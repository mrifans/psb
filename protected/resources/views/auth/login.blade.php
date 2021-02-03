@extends('admin.apps0')
@section('section')
<div class="container-scroller">
  <div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="content-wrapper d-flex align-items-center auth px-0">
      <div class="row w-100 mx-0">
        <div class="col-lg-4 mx-auto">
          <div class="auth-form-light text-left py-5 px-4 px-sm-5">
            <div style="text-align:center">
              <a href="http://psb.alyasini.net"><img src="{{url('img/logo.png')}}" alt="logo" width="25%"></a>
            </div>
            <form class="pt-3" method="POST" action="{{ route('login') }}">
              @csrf
              <div class="form-group">
                <input class="form-control form-control-lg"  name="username" placeholder="Username">
              </div>
              <div class="form-group">
                <input id="myInput" type="password" class="form-control form-control-lg" name="password" placeholder="Password">
                <div class="form-check form-check-success">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" onclick="myFunction()">
                      Show Password
                    </label>
                  </div>
              </div>

              <div class="mt-3">
                <button type="submit" class="btn btn-block btn-success btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
              </div>
              <div class="text-center mt-4 font-weight-light">
                Don't have an account? <a href="#" class="text-primary">Contact Your Administrator</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
  </div>
  <!-- page-body-wrapper ends -->
</div>
<script>
    function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
    }
</script>
@endsection

  <!-- container-scroller -->
