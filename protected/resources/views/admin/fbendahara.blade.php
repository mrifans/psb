@extends('admin.apps')
@section('section')
<div class="content-wrapper">
  <div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          {{-- <h4 class="card-title">Cari Santri yang daftar</h4> --}}
          <p class="card-title">
            Masukkan No. Pendaftaran tanpa 00 di depan
          </p>
          <form action="{{url('bayar')}}" method="POST">
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
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>No. Pendaftaran</th>
                  <th>Nama</th>
                  <th>Asal Sekolah</th>
                  <th>Pilihan 1</th>
                  <th>Bayar</th>
                  <th>Alumni</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>{{$b->no_daftar}}</td>
                  <td>{{$b->nama}}</td>
                  <td>{{$b->asal_sekolah}}</td>
                  <td>{{$b->pil1}}</td>
                  {{-- keterangan bayar/gak --}}
                  <td>
                    @if (empty($c->no_daftar))
                  <form action="{{url('bayars')}}" method="post" >
                    @csrf
                  <input name="no_daftar" type="hidden" value="{{$b->no_daftar}}">
                  <button class="btn btn-primary" type="submit">Bayar</button>
                  </form>
                    @else
                    LUNAS || {{$c->tgl_bayar}}
                    @endif
                  </td>
                  {{-- keterangan alumni --}}
                  <td>
                    @if (empty($b->is_alumni))
                    <a href="{{url('alumnit',$b->no_daftar)}}"><button class="btn btn-rounded btn-icon btn-danger">tidak</button></a>
                    <a href="{{url('alumnii',$b->no_daftar)}}"><button class="btn btn-rounded btn-icon btn-success">iya</button></a>
                    @elseif($b->is_alumni == 2)
                    Tidak
                    @elseif($b->is_alumni == 1)
                    Iya
                    @endif
                  </td>
                </tr>
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
