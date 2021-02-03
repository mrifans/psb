@extends('app0')

@section('section')
<section>
   <div class="container animated fadeIn">
       <div class="text-center">
           <h2 style="margin-bottom: 6px"><i class="fa fa-check fa-fw"></i> Pendaftaran Berhasil !</h2>
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
                                        <!-- <div style="text-align: left">
                                            No. Pendaftaran <label>{{$d->nama}}</label>
                                            adalah <label>00{{$d->no_daftar}}</label>.
                                        </div>
                                        @if ($d->is_mukim == 0)
                                        <div style="text-align: left">
                                            Silahkan lakukan Pembayaran sebesar<label>Rp. 100.000</label>
                                            dan konfirmasi kepada nomor di bawah ini dengan melampirkan foto/bukti pembayaran :
                                        </div>
                                        @endif -->
                                        <!-- @if ($d->is_mukim == 1) -->
                                        <div style="text-align: left">
                                            Silahkan lakukan Pembayaran sebesar<label>Rp. 100.000 (Tes Akbar Seleksi Pendidikan Formal)</label>
                                            dan <label>Rp. 500.000</label> untuk DP minimal pendaftaran Pesantren. 
                                            dan konfirmasi kepada nomor di bawah ini dengan melampirkan foto/bukti pembayaran :
                                        </div>
                                        <!-- @endif -->
                                        <div style="text-align: left">
                                            <ol>
                                                <li>Kantor Putra (0822-3432-5915)</li>
                                                <li>Kantor Putri (0823-3624-4244)</li>
                                            </ol>                                            
                                        </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <!-- <div class="panel-body">
                               <div class="row">
                                   Anda Bisa Download/Cetak Bukti Pendaftaran Anda.
                               </div>
                           </div> -->
                       </div>
                       <!-- <form action="buktif" method="POST">
                        @csrf
                        <input type="hidden" value="{{$d->no_daftar}}" name="no_daftar">
                        <ul class="pager wizard">
                             <li class="next"><button 
                             class="btn btn-success btn-block">Cetak bukti pendaftaran Formal</button>
                             </li>
                         </ul>
                    </form>
                    {{-- <form action="buktip" method="POST">
                        @csrf
                        <input type="hidden" value="{{$d->no_daftar}}" name="no_daftar">
                        <ul class="pager wizard">
                             <li class="next"><button 
                             class="btn btn-success btn-block">Cetak Form pendaftaran Pondok</button>
                             </li>
                         </ul>
                    </form> --}} -->
                   </div>
                </div>
             </div>
         </div>
</section>
@endsection

