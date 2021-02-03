@extends('admin.apps')
@section('section')
  <div class="content-wrapper">
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table id="order-listing" class="table table-striped" data-name="cool-table">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>No.Peserta</th>
                    <th>Nama</th>
                    <th>JK</th>
                    <th>Pilihan.1</th>
                    <th>Pilihan.2</th>
                    <th>B.Indonesia</th>
                    <th>B.Inggris</th>
                    <th>IPA</th>
                    <th>MTK</th>
                    <th>PAI</th>
                    <th>Rata-rata</th>
                    <th>Lulus/Tidak Lulus</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($list as $b)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>00{{$b->no_daftar}}</td>
                    <td>{{$b->nama}}</td>
                    <td>{{$b->jk}}</td>
                    <td>{{$b->pil1}}</td>
                    <td>{{$b->pil2}}</td>
                    <td>{{$b->indo}}</td>
                    <td>{{$b->inggris}}</td>
                    <td>{{$b->ipa}}</td>
                    <td>{{$b->mtk}}</td>
                    <td>{{$b->pai}}</td>
                    <td>{{$b->rata2}}</td>
                    <td></td>
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
    $("table").tableExport({
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
