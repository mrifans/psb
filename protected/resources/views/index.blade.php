@extends('app')

@section('section')
<section>
   <div class="container animated fadeIn">
      <div class="row">
         <div class="col-sm-7">
            <div class="kotak-img">
               <img src="{{ url('img/alyasini.jpeg')}}" class="img-polaroid" style="width: 100%" />
               <div class="kotak bg-misi">
                  <div class="row">
                     <div class="kotak-sekolah col-xs-8">
                        Pendaftaran Santri Baru
                        <p>Pondok Pesantren Terpadu <br>Al-Yasini Pasuruan</p>
                     </div>
                     <div class="kotak-thn col-xs-4">
                        Tahun Ajaran
                        <p>2020/2021</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="panel panel-informasi">
               <div class="panel-body text-muted">
                  <h3>Tempat Pendaftaran</h3>
                  <ol>
                     <li>Online mandiri (24 jam) dengan alamat web <a href="">psb.alyasini.net</a></li>
                     <li>Kantor Pusat Pondok Pesantren Terpadu Al-Yasini Pasuruan Jawa Timur</li>
                     <ul>
                        <li>Buka setiap hari</li>
                        <li>jam 08.00 - 16.30 WIB</li>
                     </ul>
                  </ol>
               </div>
            </div>
            <div class="panel panel-informasi">
               <div class="panel-body text-muted">
                  <h3>Syarat Pendaftaran</h3>
                  <ol>
                     <li>Mengisi Formulir Pendaftaran Online</li>
                     <li>Fotocopy KTP Ayah dan Ibu</li>
                     <li>Fotocopy Kartu Keluarga </li>
                     <li>Fotocopy NISN </li>
                     <li>Membayar biaya pendaftaran sesuai dengan yang tertera pada bukti pendaftaran</li>
                     <li>Membayar biaya pondok pesantren bagi yang mukim</li>
                  </ol>
               </div>
            </div>
            <div class="panel panel-informasi">
               <div class="panel-body text-muted">
                  <h3>Tahapan Pendaftaran Jalur Santri Berprestasi</h3>
                  <table width="100%" border="1" bgcolor="blue">
                     <tr>
                        <td width="20" align="center">No</td>
                        <td width="40" align="center">Kegiatan</td>
                        <td width="180" align="center">Waktu</td>
                     </tr>
                     <tr>
                        <td align="center">1</td>
                        <td>Pendaftaran</td>
                        <td align="center">5 Februari 2020 - 19 Maret 2020</td>
                     </tr>
                     <tr>
                        <td align="center">2</td>
                        <td>Test Masuk</td>
                        <td align="center">22 Maret 2020</td>
                     </tr>
                     <tr>
                        <td align="center">3</td>
                        <td>Pengumuman</td>
                        <td align="center">28 Maret 2020</td>
                     </tr>
                     <tr>
                        <td align="center">4</td>
                        <td>Daftar Ulang</td>
                        <td align="center">29 Maret - 12 April 2020</td>
                        </td>
                     </tr>
                     <tr>
                        <td align="center">5</td>
                        <td>Awal Masuk</td>
                        <td align="center">1 Juli 2020</td>
                     </tr>
                  </table>

                  <p>*) Bagi yang lulus seleksi tahapan jalur santri berprestasi akan mendapatkan beasiswa </p>
                  <p>**) Bagi yang tidak lulus seleksi tahapan I secara otomatis akan masuk di tahapan jalur reguler</p>
               </div>
            </div>
            <div class="panel panel-informasi">
               <div class="panel-body text-muted">
                  <h3>Tahapan Pendaftaran Jalur Reguler</h3>
                  <table width="100%" border="1" bgcolor="blue">
                     <tr>
                        <td width="20" align="center">No</td>
                        <td width="40" align="center">Kegiatan</td>
                        <td width="180" align="center">Waktu</td>
                     </tr>
                     <tr>
                        <td align="center">1</td>
                        <td>Pendaftaran</td>
                        <td align="center">20 Maret - 04 Juni 2020</td>
                     </tr>
                     <tr>
                        <td align="center">2</td>
                        <td>Test Masuk</td>
                        <td align="center">07 Juni 2020</td>
                     </tr>
                     <tr>
                        <td align="center">3</td>
                        <td>Pengumuman</td>
                        <td align="center">14 Juni 2020</td>
                     </tr>
                     <tr>
                        <td align="center">4</td>
                        <td>Daftar Ulang</td>
                        <td align="center">15 Juni - 30 Juni 2020</td>
                        </td>
                     </tr>
                     <tr>
                        <td align="center">5</td>
                        <td>Awal Masuk</td>
                        <td align="center">1 Juli 2020</td>
                     </tr>
                  </table>
                  <br />
                  <strong>Catatan :</strong><br />
                  Calon santri baru yang akan mengikuti test masuk unit pendidikan, wajib :
                  <ol>
                     <li>Membawa kartu test.</li>
                     <li>Membawa alat tulis (ballpoint, pensil 2B, penghapus).</li>
                     <li>Bagi laki - laki memakai baju muslim yang sopan</li>
                     <li>Bagi perempuan memakai baju muslim berjilbab</li>
                  </ol>
               </div>
            </div>
            <div class="panel panel-informasi">
               <div class="panel-body">
               <h3>Cetak Kartu Peserta</h3>
                  <p class="text-muted"></p>
                  <form action="cek" method="post">
                     @csrf
                     <div class="form-group">
                        <div class="input-group input-group-lg">
                           <input type="text" name="no_daftar" id="no_daftar" class="form-control"
                              placeholder="Masukan NISN yang sudah di daftarkan" required eror-value="Wajib diisi">
                           <span class="input-group-btn">
                              <button class="btn btn-primary"><i class="fa fa-check fa-fw"></i> CEK</button>
                           </span>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
            <div class="panel panel-informasi">
               <div class="panel-body text-muted">
                  <h3>Syarat/Ketentuan Daftar Ulang</h3>
                  <ol>
                     <li>Lulus tes/seleksi yang diselenggarkan oleh Pondok Pesantren Terpadu Al-Yasini</li>
                     <li>Menyelesaikan biaya daftar ulang di kantor sekolah yang dinyatakan lulus.</li>
                     <li>Menyerahkan berkas yang dibutuhkan</li>
                     <li>Semua berkas dimasukkan dalam map.</li>
                     </ul>
                  </ol>
               </div>
            </div>
         </div>
         <div class="col-sm-5">
            <a href="#"><button class="btn btn-primary btn-lg btn-block"><i
                     class="fa fa-file-image-o fa-fw"></i> Unduh Brosur</button></a>
            <br>
            <div class="panel panel-informasi">
               <div class="panel-body text-muted">
                  <h3>Kontak Panitia</h3>
                  <p>Panitia PSB :</p>
                  <p><i class="fab fa-whatsapp fa-lg fa-fw"></i>M. Tahmid, S.H. (KETUA PONDOK PUTRA)</p>
                  <p>081333552426</p>
                  <p><i class="fab fa-whatsapp fa-lg fa-fw"></i>Marchumah, S.Pd. (KETUA PONDOK PUTRI)</p>
                  <p>082257099176</p>
                  <p><i class="fab fa-whatsapp fa-lg fa-fw"></i>M. Irfan (KETUA PSB) : 082257099176</p>
                  <br>
                  <p>Konfirmasi Pembayaran via W.A:</p>
                  <p><i class="fab fa-whatsapp fa-lg fa-fw"></i>Kantor Putra (0822-3432-5915)</p>
                  <p><i class="fab fa-whatsapp fa-lg fa-fw"></i>Kantor Putri (0823-3624-4244)</p>
               </div>
            </div>
         </div>
         <div class="col-sm-5">
            <div class="panel panel-informasi">
               <div class="panel-body">
                  <h3>Informasi Pendaftaran</h3>
               </div>
               <div>
                  <table class="table">
                     <thead>
                        <tr>
                           <th>Unit Pendidikan</th>
                           <th class="text-center">Status</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>
                              <h5><strong>SDIC Al-Yasini</strong></h5>
                           </td>
                           <td class="text-center">
                              <h5><b><span class="label label-success">Buka</span></b></h5>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <h5><strong>MTs Genius Al-Yasini</strong></h5>
                           </td>
                           <td class="text-center">
                              <h5><b><span class="label label-success">Buka</span></b></h5>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <h5><strong>SMP Unggulan Al-Yasini</strong></h5>
                           </td>
                           <td class="text-center">
                              <h5><b><span class="label label-success">Buka</span></b></h5>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <h5><strong>SMPN 2 Kraton Al-Yasini</strong></h5>
                           </td>
                           <td class="text-center">
                              <h5><b><span class="label label-success">Buka</span></b></h5>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <h5><strong>MAN 2 Pasuruan Al-Yasini</strong></h5>
                           </td>
                           <td class="text-center">
                              <h5><b><span class="label label-success">Buka</span></b></h5>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <h5><strong>SMA Excellent Al-Yasini</strong></h5>
                           </td>
                           <td class="text-center">
                              <h5><b><span class="label label-success">Buka</span></b></h5>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <h5><strong>SMK Leader Al-Yasini</strong></h5>
                           </td>
                           <td class="text-center">
                              <h5><b><span class="label label-success">Buka</span></b></h5>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <h5><strong>SMKN 1 Wonorejo Al-Yasini</strong></h5>
                           </td>
                           <td class="text-center">
                              <h5><b><span class="label label-success">Buka</span></b></h5>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <h5><strong>STAI Al-Yasini</strong></h5>
                           </td>
                           <td class="text-center">
                              <h5><b><span class="label label-success">Buka</span></b></h5>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
            <div class="panel-body text-right">
            </div>
         </div>
         <div class="col-sm-5">
            <div class="panel panel-informasi">
               <div class="panel-body">
                  <h3>Keterangan Mukim di Pesantren</h3>
               </div>
               <div>
                  <table class="table">
                     <thead>
                        <tr>
                           <th>Unit Pendidikan</th>
                           <th class="text-center">Status</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>
                              <h5><strong>SDIC Al-Yasini</strong></h5>
                           </td>
                           <td class="text-center">
                           <h5><b><span class="label label-warning">Tidak Wajib Mukim</span></b></h5>
                        </td>
                        </tr>
                        <tr>
                           <td>
                              <h5><strong>MTs Genius Al-Yasini</strong></h5>
                           </td>
                           <td class="text-center">
                              <h5><b><span class="label label-success">Wajib Mukim</span></b></h5>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <h5><strong>SMP Unggulan Al-Yasini</strong></h5>
                           </td>
                           <td class="text-center">
                              <h5><b><span class="label label-success">Wajib Mukim</span></b></h5>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <h5><strong>SMPN 2 Kraton Al-Yasini</strong></h5>
                           </td>
                           <td class="text-center">
                              <h5><b><span class="label label-success">Wajib Mukim
                        </tr>
                        <tr>
                           <td>
                              <h5><strong>MAN 2 Pasuruan Al-Yasini</strong></h5>
                           </td>
                           <td class="text-center">
                              <h5><b><span class="label label-success">Wajib Mukim</span></b></h5>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <h5><strong>SMA Excellent Al-Yasini</strong></h5>
                           </td>
                           <td class="text-center">
                              <h5><b><span class="label label-success">Wajib Mukim</span></b></h5>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <h5><strong>SMK Leader Al-Yasini</strong></h5>
                           </td>
                           <td class="text-center">
                              <h5><b><span class="label label-success">Wajib Mukim</span></b></h5>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <h5><strong>SMKN 1 Wonorejo Al-Yasini</strong></h5>
                           </td>
                           <td class="text-center">
                              <h5><b><span class="label label-warning">Tidak Wajib Mukim</span></b></h5>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <h5><strong>STAI Al-Yasini</strong></h5>
                           </td>
                           <td class="text-center">
                              <h5><b><span class="label label-warning">Tidak Wajib Mukim</span></b></h5>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
            <div class="panel-body text-right">
            </div>
         </div>

      </div>
      <div style="width: 100%;height: 250px;">
         <iframe
src="https://maps.google.com/maps?q=Integrated%20Pondok%20Pesantren%20Terpadu%20Al-Yasini&t=&z=13&ie=UTF8&iwloc=&output=embed"               width="100%" height="250" frameborder="1" style="border:0;" allowfullscreen="">
         </iframe>
      </div>
   </div>
</section>
@endsection
