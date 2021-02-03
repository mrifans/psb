@extends('admin.apps')
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
                    <th>No.Tes</th>
                    <th>No.Pondok</th>
                    <th>Induk</th>
                    <th>NISN</th>
                    <th>Jk</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Asal Sekolah</th>
                    <th>Pilihan 1</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($list as $b) 
                  <tr>
                    <td>{{$b->no_daftar}}</td>
                    <td>{{$b->no_mukim}}</td>
                    <td>{{$b->nis}}</td>
                    <td>{{$b->nisn}}</td>
                    <td>{{$b->jk}}</td>
                    <td>{{$b->nama}}</td>
                    <td>{{$b->desa}} {{$b->kec}} {{$b->kab}}</td>
                    <td>{{$b->asal_sekolah}}</td>
                    <td>{{$b->pil1}}</td>
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
