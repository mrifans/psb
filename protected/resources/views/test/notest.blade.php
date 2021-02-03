@extends('test.app')

@section('section')
<section>
   <div class="container animated fadeIn">
    <div class="text-center">
        <h2 style="margin-bottom: 6px">MOHON MAAF !</h2>
    </div><br>
    <div class="row">
        <div id="panel-form" class="panel-form col-md-5">
                <div class="tab-content" >
                    <div class="panel panel-default">
                        <div class="panel-body" style="background: #eee; border:#d4d4d4">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                     <div class="text-center">
                                        Belum ada Tes untuk Lembaga {!!$lbg!!}
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
