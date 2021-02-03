@extends('app')
   
@section('section')
<section>
   <div class="container animated fadeIn">
      <h3>Konfirmasi Pembayaran</h3><br>
      <div class="row">
         <div class="col-sm-6 col-xs-6">
            <div class="form-group">
               <form class="form-control" action="konfirmasi" method="POST" enctype="multipart/form-data">
                  <label for="no_daftar">Masukan No. Pendaftaran</label>
                  <input type="text" name="no_daftar" id="no_daftar" required maxlength="10"
                     title="Nomor Pendaftaran" class="form-control num">
                  <label for="no_daftar">Masukan Bukti Pembayaran</label>
                  <input type="file" name="transaksi" id="transaksi" class="form-control">
                  <br>
                  <input type="submit" value="Konfirmasi" class="btn btn-primary btn-md">
               </form>
            </div>
         </div>
      </div>
      <br>
      <br>
      <br>
      <br>
      <a href="home" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
   </div>
</section>
@endsection
