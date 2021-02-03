@extends('admin.apps')
@section('section')
<div class="content-wrapper">
<div class="row mt-3">
  <div class="col-sm-6">
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
              <table class="table">
                <thead>
                  <tr>
                    <th class="pt-0">Jumlah Pendaftar</th>
                    <th class="pt-0">Putra</th>
                    <th class="pt-0">Putri</th>
                    <th class="pt-0">Total</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Santri Baru</td>
                    <td><a href="reportbl"><div class="badge badge-success">{{$total->baru_lk}}</div></a></td>
                    <td><a href="reportbp"><div class="badge badge-info">{{$total->baru_pr}}</div></a></td>
                    <td><div class="badge badge-warning">{{$total->total_baru}}</div></td>
                  </tr>
                  <tr>
                    <td>Alumni</td>
                    <td><a href="reportal"><div class="badge badge-success">{{$total->alumni_lk}}</div></a></td>
                    <td><a href="reportap"><div class="badge badge-info">{{$total->alumni_pr}}</div></a></td>
                    <td><div class="badge badge-warning">{{$total->total_alumni}}</div></td>
                  </tr>
                  <tr>
                    <td>Mengundurkan diri</td>
                    <td><a href="reportol"><div class="badge badge-success">{{$total->out_lk}}</div></td>
                    <td><a href="reportop"><div class="badge badge-info">{{$total->out_pr}}</div></td>
                    <td><div class="badge badge-warning">{{$total->total_out}}</div></td>
                  </tr>
                  <tr>
                    <td>Tidak Mukim</td>
                    <td><a href="reportll"><div class="badge badge-success">{{$total->nomukim_lk}}</div></td>
                    <td><a href="reportlp"><div class="badge badge-info">{{$total->nomukim_pr}}</div></td>
                    <td><div class="badge badge-warning">{{$total->total_nomukim}}</div></td>
                  </tr>
                  <tr>
                    <td>Pendaftar Tahap II</td>
                    <td><a href="#"><div class="badge badge-success">{{$tahap2pa}}</div></a></td>
                    <td><a href="#"><div class="badge badge-info">{{$tahap2pi}}</div></a></td>
                    <td><div class="badge badge-warning">{{$tahap2}}</div></td>
                  </tr>
                  <tr>
                    <td>Pendaftar Hari ini</td>
                    <td><div class="badge badge-success">{{$total->now_lk}}</div></td>
                    <td><div class="badge badge-info">{{$total->now_pr}}</div></td>
                    <td><div class="badge badge-warning">{{$total->total_now}}</div></td>
                  </tr>
                </tbody>
              </table>
            </div>
      </div>
    </div>
  </div>


  {{-- hasil test --}}
    <div class="col-sm-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body pb-0">
          <div class="d-flex flex-wrap justify-content-between">
            <h5 class="card-title">Total Pendaftar Sementara</h5>
          </div>
        </div>
        <div class="card-body pl-0 pr-0 pt-0">
            <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th class="pt-0">Nama Lembaga</th>
                      <th class="pt-0">Putra</th>
                      <th class="pt-0">Putri</th>
                      <th class="pt-0">Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($santri as $s)

                    <tr>
                      <td>
                        {{$s->formal_name}}
                      </td>
                      <td class="text-muted">
                        <form action="{{url('nilai')}}" method="post" >
                            @csrf
                          <input name="lbg" type="hidden" value="{{$s->formal_name}}">
                          <input name="jk" type="hidden" value="L">
                          <button class="btn badge badge-pill bg-twitter" type="submit">{{$s->putra1}}<i class="mdi mdi-human-male ml-2"></i></button>
                          </form>
                      </td>
                      <td class="text-muted">
                        <form action="{{url('nilai')}}" method="post" >
                            @csrf
                          <input name="lbg" type="hidden" value="{{$s->formal_name}}">
                          <input name="jk" type="hidden" value="P">
                          <button class="btn badge badge-pill bg-youtube" type="submit">{{$s->putri1}}<i class="mdi mdi-human-female ml-2"></i></button>
                          </form>
                      </td>
                      <td>
                        <form action="{{url('nilaitotal')}}" method="post" >
                          @csrf
                        <input name="lbg" type="hidden" value="{{$s->formal_name}}">
                        <button class="btn badge badge-pill bg-facebook" type="submit">{{$s->jp1}}<i class="mdi mdi-human-male-female ml-2"></i></button>
                        </form>
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
@endsection
