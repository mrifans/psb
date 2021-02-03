@extends('admin.apps')
@section('section')
<div class="content-wrapper">
  <div class="row mt-3">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body pb-0">
          <div class="d-flex flex-wrap justify-content-between">
            <h5 class="card-title">Laporan</h5>
            {{-- <div class="dropdown">
              <button class="btn btn-rounded text-primary p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              </button>
            </div> --}}
          </div>
        </div>
        <div class="card-body pl-0 pr-0 pt-0">
            <div class="table-responsive">
                <table id="order-listing" class="table">
                  <thead>
                    <tr>
                      <th class="pt-0">Kecamatan</th>
                      <th class="pt-0">kabupaten</th>
                      <th class="pt-0">Baru Putra</th>
                      <th class="pt-0">Baru Putri</th>
                      <th class="pt-0">Alumni Putra</th>
                      <th class="pt-0">Alumni Putri</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($total as $t)
                    <tr>
                      <td><a href="#"><div class="badge badge-success">{{$t->kec}}</div></a></td>
                      <td><a href="wil/{{$t->kab}}"><div class="badge badge-info">{{$t->kab}}</div></a></td>
                      <td><div class="badge badge-warning">{{$t->baru_lk}}</div></td>
                      <td><div class="badge badge-warning">{{$t->baru_pr}}</div></td>
                      <td><div class="badge badge-warning">{{$t->alumni_lk}}</div></td>
                      <td><div class="badge badge-warning">{{$t->alumni_pr}}</div></td>
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
