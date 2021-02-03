@extends('test.app')

@section('section')
<section>
   <div class="container animated fadeIn">
      <div class="col-sm-12 text-center">
         <h3 style="margin-bottom: 6px">SELAMAT DATANG</h3>
      </div>
      <div class="col-sm-12">
         <div class="panel panel-informasi">
            <div class="panel-body" style="background: #eee; border:#d4d4d4">
               <h3></h3>
               <table class="table" width="100%">
                  <tbody>
                     <tr>
                        <td>No </td>
                        <td>: 00{{$d->no_daftar}}</td>
                     </tr>
                     <tr>
                        <td>NISN </td>
                        <td>: {{$d->nisn}}</td>
                     </tr>
                     <tr>
                        <td>Nama</td>
                        <td>: {!!$d->nama!!}</td>
                     </tr>
                     <tr>
                        <td>Tempat Tanggal Lahir</td>
                        <td>: {!!$d->tmp_lahir!!}, {!!$d->tgl_lahir!!}</td>
                     </tr>
                     <tr>
                        <td>alamat</td>
                        <td>: {!!$d->dusun!!} {!!$d->desa!!} {!!$d->kec!!} {!!$d->kab!!}</td>
                     </tr>
                     <tr>
                        <td>Pilihan.1</td>
                        <td>: {!!$d->pil1!!}</td>
                     </tr>
                     <tr>
                        <td>Pilihan.2</td>
                        <td>: {!!$d->pil2!!}</td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection
