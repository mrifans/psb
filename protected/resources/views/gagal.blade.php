@extends('app0')

@section('section')
<section>
   <div class="container animated fadeIn">
       <div class="text-center">
           <h2 style="margin-bottom: 6px"><i class="fa fa-close fa-fw"></i> Gagal update!</h2>
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
                                            Profile <label>{{$d->nama}}</label><hr>
                                            GAGAL di update !!
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

