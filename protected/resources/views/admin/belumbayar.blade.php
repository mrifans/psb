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
                    <th>No.</th>
                    <th>NISN</th>
                    <th>NIK</th>
                    <th>KK</th>
                    <th>Nama</th>
                    <th>JK</th>
                    <th>TTL</th>
                    <th>Alamat</th>
                    <th>Asal Sekolah</th>
                    <th>Pilihan 1</th>
                    <th>Pilihan 2</th>
                    <th>Ayah</th>
                    <th>Pek</th>
                    <th>Ibu</th>
                    <th>Pek</th>
                    <th>Penghasilan</th>
                    <th>HP</th>
                    <th>Mukim</th>
                    <th>Alumni</th>
                    <th>Tgl Daftar</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($santri as $b) 
                  <tr>
                    <td>{{$b->no_daftar}}</td>
                    <td>{{$b->nisn}}</td>
                    <td>{{$b->nik}}</td>
                    <td>{{$b->kk}}</td>
                    <td>{{$b->nama}}</td>
                    <td>{{$b->jk}}</td>
                    <td>{{$b->tmp_lahir}}, {{$b->tgl_lahir}}</td>
                    <td>{{$b->desa}} {{$b->kec}} {{$b->kab}}</td>
                    <td>{{$b->asal_sekolah}}</td>
                    <td>{{$b->pil1}}</td>
                    <td>{{$b->pil2}}</td>
                    <td>{{$b->ayah}}</td>
                    <td>{{$b->pek_ayah}}</td>
                    <td>{{$b->ibu}}</td>
                    <td>{{$b->pek_ibu}}</td>
                    <td>{{$b->peng_ayah}}</td>
                    <td>{{$b->no_hp}}</td>
                    <td>@if ($b->is_mukim == 1)
                        Iya
                        @else
                        Tidak
                    @endif</td>
                    <td>@if ($b->is_alumni == 1)
                        Iya
                    @else
                        Bukan
                    @endif</td>
                    <td>{{$b->tgl_daftar}}</td>
                    <td><button class="btn-primary btn-sm" type="button">Edit</button><button class="btn-primary btn-sm" type="button">Hapus</button></td>
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
