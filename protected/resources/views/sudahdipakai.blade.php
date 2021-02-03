@extends('app0')

@section('section')
<section>
   <div class="container animated fadeIn">
       <div class="text-center">
           <h2 style="margin-bottom: 6px"><i class="fa fa-check fa-fw"></i> Anda Belum Melakukan Pembayar/Belum di konfirmasi !</h2>
       </div>
       <br>
       <br>
       <div class="row">
           <div id="panel-form" class="panel-form col-md-4">
                   <div class="tab-content">
                       <div class="panel panel-default">
                           <div class="panel-body">
                               <div class="row">
                                   <div class="col-sm-12">
                                       <div class="form-group">
                                        <div style="text-align: left">
                                            <label>No. NISN : {{$d->nisn}}</label>
                                            dan <label>No. NIK : {{$d->nik}}</label> Sudah terdaftar.
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

