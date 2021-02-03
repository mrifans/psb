@extends('admin.apps')
@section('section')
<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>No. Pendaftaran</th>
                  <th>Nama</th>
                  <th>kecamatan</th>
                  <th>Kabupaten</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($santri as $b)
                  <tr>
                    <td>{{$b->no_daftar}}</td>
                    <td>{{$b->nama}}</td>
                    <td>{{$b->kec}}</td>
                    <td>{{$b->kab}}</td>
                    {{-- keterangan bayar/gak --}}
                    <td>
                    <form action="{{url('fedit')}}" method="post" >
                      @csrf
                    <input name="no_daftar" type="hidden" value="{{$b->no_daftar}}">
                    <button class="btn btn-primary" type="submit">Edit Profile</button>
                    </form>
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
