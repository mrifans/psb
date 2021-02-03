@extends('app0')

@section('section')
<section>
   <div class="container animated fadeIn">
       <div class="text-center">
           <h2 style="margin-bottom: 6px"><i class="fa fa-check fa-fw"></i> Pembayaran dikonfirmasi !</h2>
       </div>
       <br>
       <br>
       <div class="row">
           <div id="panel-form" class="panel-form col-md-6">
                   <div class="tab-content">
                       <div class="panel panel-default">
                           <div class="panel-body">
                               <div class="row">
                                   <div class="col-sm-12">
                                       <div class="form-group">
                                        @if ($d->is_mukim == 0)
                                        <div style="text-align: left">
                                            Pembayaran sebesar <label> Rp. 100.000</label><br>
                                            Atas Nama <label>{{$d->nama}}</label>.<hr>
                                        </div>
                                        @endif
                                        @if ($d->is_mukim == 1)
                                        <div style="text-align: left">
                                            Pembayaran <label>Tes Akbar Seleksi Pendidikan Formal</label> dan <br>
                                            Pembayaran <label>Pendaftaran Pesantren</label><br>
                                            Atas Nama : <label>{{$d->nama}}</label>.<hr>
                                        </div>
                                        @endif
                                        <div style="text-align: left">
                                            Telah di konfirmasi !
                                        </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="panel-body">
                               <div class="row">
                                   Silahkan Download / cetak Kartu Test Peserta
                               </div>
                           </div>
                       </div>
                       <form action="kartu" method="POST">
                           @csrf
                        <input type="hidden" value="{{$d->no_daftar}}" name="no_daftar">
                       <ul class="pager wizard">
                            <li class="next"><button 
                            class="btn btn-success btn-block">Cetak Kartu Tes</button>
                            </li>
                        </ul>
                        </form>
                        <form action="buktif" method="POST">
                            @csrf
                            <input type="hidden" value="{{$d->no_daftar}}" name="no_daftar">
                            <ul class="pager wizard">
                                 <li class="next"><button 
                                 class="btn btn-success btn-block">Cetak bukti pendaftaran Formal</button>
                                 </li>
                             </ul>
                        </form>
                        @if ($d->is_mukim == 1 && $d->is_alumni == 2)
                        <form action="buktip" method="POST">
                            @csrf
                            <input type="hidden" value="{{$d->no_daftar}}" name="no_daftar">
                            <ul class="pager wizard">
                                 <li class="next"><button 
                                 class="btn btn-success btn-block">Cetak Form pendaftaran Pondok</button>
                                 </li>
                             </ul>
                        </form>
                        @endif
                   </div>
                </div>
             </div>
         </div>
</section>
@endsection

