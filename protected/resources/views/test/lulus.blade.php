@extends('test.app')

@section('section')
<section>
   <div class="container animated fadeIn">
      <div class="row">
        <div id="panel-form" class="panel-form col-md-6">
            <div class="col-sm-12">
                <div class="panel panel-informasi">
                    <div class="panel-body text-center" style="background: #eee; border:#d4d4d4">
                        <h4 style="margin-bottom: 10px">SELAMAT KEPADA : </h4>
                       <table class="table" width="100%">
                          <tbody>
                             <tr>
                                <td style="font-weight: 900;font-size: 20px;">{{$d->nama}}</td>
                             </tr>
                             <tr>
                                <td>Anda diterima di :</td>
                             </tr>
                             <tr>
                                <td style="color: #0B8457; font-weight: 900;font-size: 20px;">{{$d->status}}</td>
                             </tr>
                          </tbody>
                       </table>
                    </div>
                 </div>
                 <br>
                 <div class="text-center">segera lakukan daftar ulang ke lembaga {{$d->status}}<br>
                    @if($d->status == "")
                    tanggal 18-20 Juni 2020. hubungi : 081515404092</div>
                    @elseif($d->status == "SMK Leader Al-Yasini")
                    dengan menghubungi : 0857-3347-8372</div>
                    @endif
            </div>
        </div>
    </div>
   </div>
</section>
@endsection
