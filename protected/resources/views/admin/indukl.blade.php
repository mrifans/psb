@extends('admin.apps')
@section('section')
  <div class="content-wrapper">
    @if ($message = Session::get('sukses'))
        <div class="alert alert-success alert-block">
	          <button type="button" class="close" data-dismiss="alert">×</button>	
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table id="order-listing" class="table table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>JK</th>
                    <th>Nama</th>
                    <th>Tgl Bayar</th>
                    <th>Asal Sekolah</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($list as $b) 
                  <tr>
                    <td>{{$b->no_mukim}}</td>
                    <td>{{$b->jk}}</td>
                    <td>{{$b->nama}}</td>
                    <td>{{$b->tgl_bayar}}</td>
                    <td>{{$b->asal_sekolah}}</td>
                    <td><a href="{{url('induklid',$b->no_daftar)}}"><button class="btn-primary btn-sm" type="button">input No. pondok</button></a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->
  <!-- partial:../../partials/_footer.html -->  
@endsection
