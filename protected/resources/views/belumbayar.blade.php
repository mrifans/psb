@extends('app0')

@section('section')
<section>
   <div class="container animated fadeIn">
       <div class="text-center">
           <h2 style="margin-bottom: 6px"><i class="fa fa-check fa-fw"></i> Anda Belum Melakukan Pembayaran/Belum di konfirmasi !</h2>
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
                                        <div style="text-align: left">
                                            Nama : <label>{{$d->nama}}</label><br>
                                            dengan Nomor Pendaftaran <label>00{{$d->no_daftar}}</label>.<hr>
                                        </div>
                                        @if ($d->is_mukim == 0)
                                        <div style="text-align: left">
                                            belum melakukan Pembayaran sebesar <label>Rp. 100.000</label>.
                                            Jika sudah, silahkan konfirmasi kepada nomor di bawah ini dengan melampirkan foto/bukti pembayaran
                                        </div>
                                        @endif
                                        @if ($d->is_mukim == 1)
                                        <div style="text-align: left">
                                            Belum melakukan Pembayaran sebesar <label>Rp. 100.000</label> (Tes Akbar Seleksi Pendidikan Formal)
                                            dan <label>Rp. 500.000</label> (DP minimal pendaftaran Pesantren). 
                                            Jika sudah, silahkan konfirmasi kepada nomor di bawah ini dengan melampirkan foto/bukti pembayaran :
                                        </div>
                                        @endif
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
                       </div>
                   </div>
                </div>
             </div>
         </div>
</section>
@endsection

