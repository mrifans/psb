@extends('admin.apps')
@section('section')
  <div class="content-wrapper">
            {{-- <div class="col-sm-12">
              <div class="card">
                <div class="card-body pb-0">
                  <div class="card-title text-center">
                    <h5>hasil Ujian Online Tahap II </h5>
                  </div>
                </div>
                <div class="card-body pl-0 pr-0 pt-0">
                    <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th class="pt-0">Jumlah Peserta Tes Akbar Tahap II</th>
                              <th class="pt-0">Putra</th>
                              <th class="pt-0">Putri</th>
                              <th class="pt-0">Total</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Jumlah Peserta Test Akbar</td>
                              <td><a href="reportbl"><div class="badge badge-success"></div></a></td>
                              <td><a href="reportbp"><div class="badge badge-info"></div></a></td>
                              <td><div class="badge badge-warning"></div></td>
                            </tr>
                            <tr>
                              <td>Yang Sudah Mengerjakan</td>
                              <td><a href="reportal"><div class="badge badge-success"></div></a></td>
                              <td><a href="reportap"><div class="badge badge-info"></div></a></td>
                              <td><div class="badge badge-warning"></div></td>
                            </tr>
                            <tr>
                              <td>Yang Belum mengerjakan</td>
                              <td><a href="reportol"><div class="badge badge-success"></div></td>
                              <td><a href="reportop"><div class="badge badge-info"></div></td>
                              <td><div class="badge badge-warning"></div></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                </div>
              </div>
            </div>
            <br> --}}
            <div class="col-sm-12">
              <div class="card">
                <div class="card-body pb-0">
                  <div class="card-title text-center">
                    <h5>Perolehan PPDB </h5>
                    {{-- <div class="dropdown">
                      <button class="btn btn-rounded text-primary p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      </button>
                    </div> --}}
                  </div>
                </div>
                <div class="card-body pl-0 pr-0 pt-0">
                    <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th class="pt-0">Jumlah Siswa</th>
                              <th class="pt-0">Putra</th>
                              <th class="pt-0">Putri</th>
                              <th class="pt-0">Total</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Pendaftar Tahap I</td>
                              <td><a href="reportbl"><div class="badge badge-success"></div></a></td>
                              <td><a href="reportbp"><div class="badge badge-info"></div></a></td>
                              <td><div class="badge badge-warning"></div></td>
                            </tr>
                            <tr>
                              <td>Diterima di Tahap I</td>
                              <td><a href="reportal"><div class="badge badge-success"></div></a></td>
                              <td><a href="reportap"><div class="badge badge-info"></div></a></td>
                              <td><div class="badge badge-warning"></div></td>
                            </tr>
                            <tr>
                              <td>Pendaftar tahap II</td>
                              <td><a href="reportol"><div class="badge badge-success"></div></td>
                              <td><a href="reportop"><div class="badge badge-info"></div></td>
                              <td><div class="badge badge-warning"></div></td>
                            </tr>
                            <tr>
                              <td>Diterima di Tahap II</td>
                              <td><a href="reportll"><div class="badge badge-success"></div></td>
                              <td><a href="reportlp"><div class="badge badge-info"></div></td>
                              <td><div class="badge badge-warning"></div></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                </div>
              </div>
            </div>
            <br>

{{-- data santri baru tahap II --}}
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="card-title text-center">
                <h5>Pendaftar Tahap II</h5>
            </div>
            <div class="table-responsive">
              <table id="order-listing" class="table table-striped" data-name="cool-table">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>No. Daftar </th>
                    <th>NISN</th>
                    <th>NIK</th>
                    <th>KK</th>
                    <th>Nama</th>
                    <th>Pilihan 1</th>
                    <th>Di terima di</th>
                    <th>JK</th>
                    <th>TTL</th>
                    <th>Alamat</th>
                    <th>Asal Sekolah</th>
                    <th>Ayah</th>
                    <th>Pek</th>
                    <th>Ibu</th>
                    <th>Pek</th>
                    <th>Penghasilan</th>
                    <th>HP</th>
                    <th>Mukim</th>
                    <th>Alumni</th>
                    <th>Tgl Daftar</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($santri as $b)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$b->no_daftar}}</td>
                    <td>{{$b->nisn}}</td>
                    <td>{{$b->nik}}</td>
                    <td>{{$b->kk}}</td>
                    <td>{{$b->nama}}</td>
                    <td>{{$b->pil1}}</td>
                    <td>{{$b->status}}</td>
                    <td>{{$b->jk}}</td>
                    <td>{{$b->tmp_lahir}}, {{$b->tgl_lahir}}</td>
                    <td>{{$b->desa}} {{$b->kec}} {{$b->kab}}</td>
                    <td>{{$b->asal_sekolah}}</td>
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
@section('excel')
<script src="{{ url('js/jquery.min.js')}}"></script>
<script src="{{ url('js/popper.min.js')}}"></script>
<script src="{{ url('js/FileSaver.min.js')}}"></script>
<script src="{{ url('js/Blob.min.js')}}"></script>
<script src="{{ url('js/xls.core.min.js')}}"></script>
<script src="{{ url('js/tableexport.js')}}"></script>

<script>
    $("#order-listing").tableExport({
        formats: ["xlsx","xls"],
        // Displays table headers (th or td elements) in the <thead>
  headers: true,

// Displays table footers (th or td elements) in the <tfoot>
footers: true,
position: "top",


});
    </script>
@stop
@section('excelcss')
<link rel="stylesheet" href="{{ url('css/tableexport.css')}}">
@endsection