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
            <table id="order-listing" class="table table-striped">
              <thead>
                <tr>
                  <th>
                    No. Pendaftaran
                  </th>
                  <th>
                    Nama
                  </th>
                  <th>
                    Asal Sekolah
                  </th>
                  <th>
                    Pilihan 1
                  </th>
                  <th>
                    Bayar
                  </th>
                </tr>
              </thead>
              <tbody>
                @foreach ($bayar as $b)
                    
                
                <tr>
                  <td>
                    {{$b->no_daftar}}
                  </td>
                  <td>
                    {{$b->nama}}
                  </td>
                  <td>
                    {{$b->asal_sekolah}}
                  </td>
                  <td>
                    {{$b->formal_name}}
                  </td>
                  <td>
                    LUNAS || {{$b->tgl_bayar}}    
                  </td>
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
