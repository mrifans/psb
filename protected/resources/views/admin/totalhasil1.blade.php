@extends('admin.apps')
@section('section')
<div class="content-wrapper">
<div class="row mt-3">
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
                        <form action="{{url('nilai1')}}" method="post" >
                            @csrf
                          <input name="lbg" type="hidden" value="{{$s->formal_name}}">
                          <input name="jk" type="hidden" value="L">
                          <button class="btn badge badge-pill bg-twitter" type="submit">{{$s->putra1}}<i class="mdi mdi-human-male ml-2"></i></button>
                          </form>
                      </td>
                      <td class="text-muted">
                        <form action="{{url('nilai1')}}" method="post" >
                            @csrf
                          <input name="lbg" type="hidden" value="{{$s->formal_name}}">
                          <input name="jk" type="hidden" value="P">
                          <button class="btn badge badge-pill bg-youtube" type="submit">{{$s->putri1}}<i class="mdi mdi-human-female ml-2"></i></button>
                          </form>
                      </td>
                      <td>
                        <form action="{{url('nilaitotal1')}}" method="post" >
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
