@extends('admin.apps')
@section('section')
<div class="content-wrapper">
  @if ($message = Session::get('sukses'))
        <div class="alert alert-success alert-block">
	          <button type="button" class="close" data-dismiss="alert">×</button>	
            <strong>{{ $message }}</strong>
        </div>
    @endif
  @if ($message = Session::get('gagal'))
        <div class="alert alert-danger alert-block">
	          <button type="button" class="close" data-dismiss="alert">×</button>	
            <strong>{{ $message }}</strong>
        </div>
    @endif
  <div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          {{-- <h4 class="card-title">Cari Santri yang daftar</h4> --}}
          <p class="card-title">
            Masukkan No. Pendaftaran/NISN Yang ingin di Edit
          </p>
          <form action="{{url('edits')}}" method="POST">
            @csrf
          <div class="form-group">
            <div class="input-group">
              <input type="text" name="no_daftar" class="form-control" placeholder="Masukkan No. Pendaftaran" aria-label="Recipient's username">
              <div class="input-group-append">
                <button class="btn btn-sm btn-primary" type="submit">Search</button>
              </div>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
  <!-- content-wrapper ends -->
  <!-- partial:../../partials/_footer.html -->  
@endsection
