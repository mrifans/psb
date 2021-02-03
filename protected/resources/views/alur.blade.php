@extends('app')

@section('section')
<section>
   <div class="container animated fadeIn">
      <div class="well">
         <i class="fas fa-exchange-alt fa-3x fa-fw text-success bg-success pull-left"></i>
         <h3>ALUR PENDAFTARAN</h3>
         Sebelum mendaftar, calon santri diwajibkan terlebih dahulu memahami alur pendaftaran.
         Silahkan membaca dengan teliti tahap demi tahap agar dapat memahami dengan baik.
      </div>
      <ul class="timeline">
         <li>
            <div class="timeline-badge">1</div>
            <div class="timeline-panel">
               <div class="timeline-heading">
                  <h4 class="timeline-title">Daftar Online</h4>
               </div>
               <div class="timeline-body">
                  <p>Calon santri mengisi formulir pendaftaran online pada <a href="{{url('form')}}">halaman pendaftaran</a> dengan
                     rentang waktu:</p>
                  <ul>
                     <li>03 Februari 2021 - 31 Mei 2021<br></li>
                     <li>01 Juni - 30 Juni 2021<br></li>
                  </ul>
                  <p><br></p>
                  <p class="text-muted">
                     <small></small>
                  </p>
               </div>
            </div>
         </li>
         <li class="timeline-inverted">
            <div class="timeline-badge">2</div>
            <div class="timeline-panel">
               <div class="timeline-heading">
                  <h4 class="timeline-title">Cetak Bukti Pendaftaran</h4>
               </div>
               <div class="timeline-body">
                  <p>Calon santri mencetak bukti pendaftaran yang bisa di download setelah
                     selesai dan berhasil mengisi form pendaftaran.</p>
                  <p class="text-muted">
                     <small></small>
                  </p>
               </div>
            </div>
         </li>
         <li>
            <div class="timeline-badge">3</div>
            <div class="timeline-panel">
               <div class="timeline-heading">
                  <h4 class="timeline-title">Pembayaran</h4>
               </div>
               <div class="timeline-body">
                  <p>Orang tua / wali calon santri mengirimkan uang pendaftaran atau biaya tes masuk ke rekening
                     Pondok Pesantren Terpadu Al-Yasini sebesar Rp. 50.000 (Lima Puluh Ribu Rupiah)dan Minimal DP Pendaftaran Pondok sebesar Rp. 500.000
                     (Lima ratus ribu rupiah) ke rekening : </p>
                  <p>Bank BRI A/n PP Terpadu AlYasini : 055001000288308</p>
                  <p>Bank BRI A/n PP Terpadu AlYasini Putri : 055001000324308</p>
                  <p><br></p>
                  <p>atau bisa secara tunai di kantor pusat PPT. Al-Yasini</p>
                  <p>Dilanjutkan dengan konfirmasi pembayaran
                     lewat whatsapp di nomor 0822-3432-5915 (Kantor Pondok Putra), Kantor Putri (0823-3624-4244), dengan format : <span style="font-weight: bold;"> Nomor
                     Pendaftaran</span> spasi <span style="font-weight: bold;">Nama Pendaftar</span> dan lampirkan
                     foto bukti pembayaran.<br></p>
                  <p class="text-muted">
                     <small></small>
                  </p>
               </div>
            </div>
         </li>
         <li class="timeline-inverted">
            <div class="timeline-badge">4</div>
            <div class="timeline-panel">
               <div class="timeline-heading">
                  <h4 class="timeline-title">Cetak Kartu Test</h4>
               </div>
               <div class="timeline-body">
                  Setelah pembayaran diverifikasi oleh panitia, calon santri bisa mengunduh kartu tes di menu <a
                     href="{{url('home')}}">beranda</a> pada bagian <strong>Cetak Kartu Peserta, </strong>file unduhan berupa pdf
                  bisa langsung dicetak sendiri. Proses verifikasi membutuhkan waktu maksimal 2 hari jam kerja. <p
                     class="text-muted">
                     <small></small>
                  </p>
               </div>
            </div>
         </li>
         <li>
            <div class="timeline-badge">5</div>
            <div class="timeline-panel">
               <div class="timeline-heading">
                  <h4 class="timeline-title">Mengikuti Tes Tertulis</h4>
               </div>
               <div class="timeline-body">
                  <p>Calon siswa mengikuti tes tertulis sesuai dengan jadwal.</p>
                  <p>wajib membawa :<br>1. Kartu Test<br>2. Alat Tulis (Ballpoint, Pensil 2B, Penghapus)<br>3.
                     Memakai baju muslim yang sopan dan berjilbab bagi santri putri</p>
                  <p class="text-muted">
                     <small></small>
                  </p>
               </div>
            </div>
         </li>
         <li class="timeline-inverted">
            <div class="timeline-badge">6</div>
            <div class="timeline-panel">
               <div class="timeline-heading">
                  <h4 class="timeline-title">Pengumuman Hasil Seleksi</h4>
               </div>
               <div class="timeline-body">
                  <p>Calon siswa mengecek hasil tes melalui Website ini di menu <a href="#">pengumuman</a>.
                  </p>
                  <p class="text-muted">
                     <small></small>
                  </p>
               </div>
            </div>
         </li>
         <li>
            <div class="timeline-badge">7</div>
            <div class="timeline-panel">
               <div class="timeline-heading">
                  <h4 class="timeline-title">Daftar Ulang</h4>
               </div>
               <div class="timeline-body">
                  <p>Jika lulus tes seleksi calon santri melakukan registrasi ulang di kantor pusat PPT. Al-Yasini dengan membawa berkas yang dibutuhkan.</p>
                  <ol>
                     <li>Fotocopy KTP Ayah dan Ibu 1 Lembar</li>
                     <li>Fotocopy KK 1 Lembar</li>
                     <li>Foto Santri 2 Lembar</li>
                     <li>Foto Ayah dan Ibu 2 Lembar</li>
                  </ol>
                  <p class="text-muted">
                     <small></small>
                  </p>
               </div>
            </div>
         </li>
         <li class="timeline-inverted">
            <div class="timeline-badge">8</div>
            <div class="timeline-panel">
               <div class="timeline-heading">
                  <h4 class="timeline-title">Registrasi di Sekolah/Madrasah</h4>
               </div>
               <div class="timeline-body">
                  <p>Selanjutnya santri baru melakukan registrasi ulang di Sekolah/Madrasah masing-masing.</p>
               </p>
                  <p class="text-muted">
                     <small></small>
                  </p>
               </div>
            </div>
         </li>
      </ul>
   </div>
</section>
@endsection


