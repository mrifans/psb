extends('admin.apps')
@section('section')
  <div class="content-wrapper">
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table id="order-listing" class="table table-striped">
                <thead>
                  <tr>
                    <th>No.Pend</th>
                    <th>Nama</th>
                    <th>Asal Sekolah</th>
                    <th>Tgl Daftar</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($list as $b) 
                  <tr>
                    <td>{{$b->no_daftar}}</td>
                    <td>{{$b->nama}}</td>
                    <td>{{$b->asal_sekolah}}</td>
                    <td>{{$b->tgl_daftar}}</td>
                    <td><button class="btn-primary btn-sm" type="button">Masukkan NIS</button></td>
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
