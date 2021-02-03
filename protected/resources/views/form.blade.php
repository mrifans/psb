@extends('app')

@section('section')
<section>
   <div class="container animated fadeIn">
       <div class="text-center">
           <h2 style="margin-bottom: 6px"><i class="fa fa-edit fa-fw"></i> FORMULIR PENDAFTARAN</h2>
       </div>
       <br>
       <br>
       <div class="row">
           <div id="panel-form" class="panel-form col-md-9">
               {{-- menampilkan error validasi --}}
               @if (count($errors) > 0)
               <div class="alert alert-danger">
                   <ul>
                       @foreach ($errors->all() as $error)
                           <li>{{ $error }}</li>
                       @endforeach
                   </ul>
               </div>
               @endif
               @if (\Session::has('info'))
                    <div class="alert alert-success">
                    <ul>
                        <li>{!! \Session::get('info') !!}</li>
                    </ul>
                    </div>
                @endif
           <form autocomplete="on" id="form">
            @csrf
                   <div class="tab-content">
                       <div class="panel panel-default">
                           <div class="panel-heading">
                               <h2><b>1.</b> Identitas Santri</h2>
                           </div>
                           <div class="panel-body">
                               <div class="row">
                                   <div class="col-sm-12">
                                       <div class="form-group">
                                           <label for="nama_lengkap">Nama Lengkap</label>
                                           <input type="text" name="nama" id="nama" required
                                               minlength="3" maxlength="50" value="{{ old('nama') }}"
                                               title="Nama harus sesuai dengan Ijazah" class="form-control ">
                                               <span class="text-danger" id="nama-error">{{ $errors->first('nama_lengkap') }}</span>

                                       </div>
                                   </div>
                                   <div class="col-sm-3">
                                       <div class="form-group">
                                           <label for="nisn">NISN</label>
                                           <input type="text" name="nisn" id="nisn" required minlength="1"
                                               maxlength="12" value="{{ old('nisn') }}" title="isikan 10 digit NISN"
                                               class="form-control " />
                                               <span class="text-danger" id="nisn-error"></span>

                                       </div>
                                   </div>
                                   <div class="col-sm-3">
                                       <div class="form-group">
                                           <label for="nisn">No. KK</label>
                                           <input type="text" name="kk" id="no_kk" required minlength="1"
                                               maxlength="16" value="{{ old('kk') }}" title="isikan 16 digit No. KK"
                                               class="form-control " />
                                               <span class="text-danger" id="no_kk-error"></span>

                                       </div>
                                   </div>
                                   <div class="col-sm-3">
                                       <div class="form-group">
                                           <label for="nik">NIK</label>
                                           <input type="text" name="nik" id="nik" required minlength="1" maxlength="16"
                                               value="{{ old('nik') }}" title="isikan 16 digit NIK" class="form-control ">
                                               <span class="text-danger" id="nik-error"></span>

                                       </div>
                                   </div>
                                   <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="jk">Jenis Kelamin</label>
                                        <select name="jk" id="jk" required
                                            data-fv-notempty-message="Pilih salah satu"
                                            title="Pilih Jenis Kelamin anda" class="form-control">
                                            <option value=""></option>
                                            <option value="L">Laki-laki</option>
                                            <option value="P">Perempuan</option>
                                        </select>
                                        <span class="text-danger" id="jk-error"></span>
                                    </div>
                                </div>
                               </div>
                               <div class="row">
                                   <div class="col-sm-4">
                                       <div class="form-group">
                                           <label for="tempat_lahir">Tempat Lahir</label>
                                           <input type="text" name="tmp_lahir" id="tmpt" required
                                               maxlength="30" minlength="3" value="{{ old('tmp_lahir') }}"
                                               title="Tempat Lahir harus sesuai dengan Ijazah"
                                               class="form-control alph">
                                               <span class="text-danger" id="tmp_lahir-error"></span>

                                       </div>
                                   </div>
                                   <div class="col-sm-6">
                                       <div class="form-group">
                                           <label for="tgl_lahir">Tanggal Lahir</label>
                                           <div class="row">
                                               <div class="col-xs-4">
                                                   <select name="tgl" id="tgl" required
                                                       data-fv-notempty-message="Pilih salah satu"
                                                       title="Pilih Tanggal Lahir anda" class="form-control">
                                                       <option value="">Tanggal</option>
                                                       <option value="01">01</option>
                                                       <option value="02">02</option>
                                                       <option value="03">03</option>
                                                       <option value="04">04</option>
                                                       <option value="05">05</option>
                                                       <option value="06">06</option>
                                                       <option value="07">07</option>
                                                       <option value="08">08</option>
                                                       <option value="09">09</option>
                                                       <option value="10">10</option>
                                                       <option value="11">11</option>
                                                       <option value="12">12</option>
                                                       <option value="13">13</option>
                                                       <option value="14">14</option>
                                                       <option value="15">15</option>
                                                       <option value="16">16</option>
                                                       <option value="17">17</option>
                                                       <option value="18">18</option>
                                                       <option value="19">19</option>
                                                       <option value="20">20</option>
                                                       <option value="21">21</option>
                                                       <option value="22">22</option>
                                                       <option value="23">23</option>
                                                       <option value="24">24</option>
                                                       <option value="25">25</option>
                                                       <option value="26">26</option>
                                                       <option value="27">27</option>
                                                       <option value="28">28</option>
                                                       <option value="29">29</option>
                                                       <option value="30">30</option>
                                                       <option value="31">31</option>
                                                   </select>
                                                   <span class="text-danger" id="tgl"></span>

                                               </div>
                                               <div class="col-xs-4">
                                                   <select name="bln" id="bln" required
                                                       data-fv-notempty-message="Pilih salah satu"
                                                       title="Pilih Bulan Lahir anda" class="form-control">
                                                       <option value="">Bulan</option>
                                                       <option value="Januari">Jan</option>
                                                       <option value="Februari">Feb</option>
                                                       <option value="Maret">Mar</option>
                                                       <option value="April">Apr</option>
                                                       <option value="Mei">Mei</option>
                                                       <option value="Juni">Juni</option>
                                                       <option value="Juli">Juli</option>
                                                       <option value="Agustus">Agu</option>
                                                       <option value="September">Sep</option>
                                                       <option value="Oktober">Okt</option>
                                                       <option value="November">Nov</option>
                                                       <option value="Desember">Des</option>
                                                   </select>
                                                   <span class="text-danger" id="bln-error"></span>

                                               </div>
                                               <div class="col-xs-4">
                                                   <select name="thn" id="thn" required
                                                       data-fv-notempty-message="Pilih salah satu"
                                                       title="Pilih Tahun Lahir anda. Selain tahun yang ada tidak diperbolehkan mendaftar"
                                                       class="form-control">
                                                       <option value="">Tahun</option>
                                                       <option value="2000">2000</option>
                                                       <option value="2001">2001</option>
                                                       <option value="2002">2002</option>
                                                       <option value="2003">2003</option>
                                                       <option value="2004">2004</option>
                                                       <option value="2005">2005</option>
                                                       <option value="2006">2006</option>
                                                       <option value="2007">2007</option>
                                                       <option value="2008">2008</option>
                                                       <option value="2009">2009</option>
                                                       <option value="2010">2010</option>
                                                       <option value="2011">2011</option>
                                                       <option value="2012">2012</option>
                                                       <option value="2013">2013</option>
                                                       <option value="2014">2014</option>
                                                       <option value="2015">2015</option>
                                                   </select>
                                                   <span class="text-danger" id="thn-error"></span>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="panel panel-default">
                           <div class="panel-heading">
                               <h2><b>2.</b> Alamat & Kontak</h2>
                           </div>
                           <div class="panel-body">
                           <div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label for="prov">Provinsi</label>
                                            <select name="prov" id="prov" required  class="form-control alph" onchange="javasrcipt:getKota()">
                                                <option value="">-- Pilih Provinsi --</option>
                                            </select>
                                            <span class="text-danger" id="prov-error"></span>

                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label for="kab">Kabupaten/Kota</label>
                                            <select name="kab" id="kab" required class="form-control alph" onchange="javasrcipt:getKecamatan()">
                                                <option value="">-- Pilih Kabupaten/Kota --</option>
                                            </select>
                                            <span class="text-danger" id="kab-error"></span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                               <div>
                                   <div class="row">
                                       <div class="col-xs-6">
                                           <div class="form-group">
                                               <label for="kec">Kecamatan</label>
                                               <select name="kec" id="kec" required class="form-control alph" onchange="javasrcipt:getDesa()">
                                                <option value="">-- Pilih Kecamatan --</option>
                                                </select>
                                                <span class="text-danger" id="kec-error"></span>

                                           </div>
                                       </div>
                                       <div class="col-xs-6">
                                           <div class="form-group">
                                               <label for="desa">Kelurahan/Desa</label>
                                               <select name="desa" id="desa" required class="form-control alph">
                                                <option value="">-- Pilih Desa/Kelurahan --</option>
                                                </select>
                                                <span class="text-danger" id="desa-error"></span>

                                           </div>
                                       </div>
                                   </div>
                               </div>

                            <div>
                                   <div class="row">
                                       <div class="col-sm-6">
                                           <div class="form-group">
                                               <label for="alamat">Dusun/jalan</label>
                                               <input type="text" name="dusun" id="alamat" required minlength="5"
                                                   maxlength="100" data-fv-minlength-message="Alamat terlalu singkat"
                                                   value="{{ old('dusun') }}"
                                                   title="Alamat tempat tinggal anda. Contoh : Jalan Pahlawan no. 10"
                                                   class="form-control">
                                                   <span class="text-danger" id="dusun-error"></span>

                                           </div>
                                       </div>
                                       <div class="col-sm-3 col-xs-6">
                                           <div class="form-group">
                                               <label for="rt">RT</label>
                                               <input type="text" name="rt" id="rt" minlength="1" maxlength="4"
                                                   value="{{ old('rt') }}" title="Contoh : 25" class="form-control num">
                                                   <span class="text-danger" id="rt-error"></span>

                                           </div>
                                       </div>
                                       <div class="col-sm-3 col-xs-6">
                                           <div class="form-group">
                                               <label for="rw">RW</label>
                                               <input type="text" name="rw" id="rw" minlength="1" maxlength="4"
                                                   value="{{ old('rw') }}" title="Contoh : 10" class="form-control num">
                                                   <span class="text-danger" id="rw-error"></span>

                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="panel panel-default">
                           <div class="panel-heading">
                               <h2><b>3.</b> Orang Tua/Wali</h2>
                           </div>
                           <div class="panel-body">
                               <div>
                                   <div class="row">
                                       <div class="col-xs-7">
                                           <div class="form-group">
                                               <label for="nama_ayah">Nama Lengkap Ayah</label>
                                               <input type="text" name="ayah" id="nama_ayah" required
                                                   minlength="3" maxlength="50" value="{{ old('ayah') }}" title="Nama ayah anda"
                                                   class="form-control alph">
                                                   <span class="text-danger" id="nama_ayah-error"></span>

                                           </div>
                                       </div>
                                       <div class="col-xs-5">
                                           <div class="form-group">
                                               <label for="pek_ayah">Pekerjaan Ayah</label>
                                               <select name="pek_ayah" id="pek_ayah" required
                                                   data-fv-notempty-message="Pilih salah satu"
                                                   title="Pilih Pekerjaan ayah anda" class="form-control">
                                                   <option value=""></option>
                                                   <option value="PNS">PNS</option>
                                                   <option value="Guru/Dosen">Guru/Dosen</option>
                                                   <option value="TNI/Polri">TNI/Polri</option>
                                                   <option value="Pensiunan">Pensiunan</option>
                                                   <option value="Dokter">Dokter</option>
                                                   <option value="Politikus">Politikus</option>
                                                   <option value="Pengacara">Pengacara</option>
                                                   <option value="Pegawai Swasta">Pegawai Swasta</option>
                                                   <option value="Pedagang/Wiraswasta">Pedagang/Wiraswasta
                                                   </option>
                                                   <option value="Seniman">Seniman</option>
                                                   <option value="Petani/Nelayan">Petani/Nelayan</option>
                                                   <option value="Buruh">Buruh</option>
                                                   <option value="Lainnya">Lainnya</option>
                                                   <option value="Tidak Bekerja">Tidak Bekerja</option>
                                               </select>
                                               <span class="text-danger" id="pek_ayah-error"></span>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <div>
                                   <div class="row">
                                       <div class="col-xs-7">
                                           <div class="form-group">
                                               <label for="ibu">Nama Lengkap Ibu</label>
                                               <input type="text" name="ibu" id="nama_ibu" required minlength="3"
                                                   maxlength="50" value="{{ old('ibu') }}" title="Nama ibu anda"
                                                   class="form-control alph">
                                                   <span class="text-danger" id="nama_ibu-error"></span>

                                           </div>
                                       </div>
                                       <div class="col-xs-5">
                                           <div class="form-group">
                                               <label for="pek_ibu">Pekerjaan Ibu</label>
                                               <select name="pek_ibu" id="pek_ibu" required
                                                   data-fv-notempty-message="Pilih salah satu"
                                                   title="Pilih Pekerjaan ibu anda" class="form-control">
                                                   <option value=""></option>
                                                   <option value="PNS">PNS</option>
                                                   <option value="Guru/Dosen">Guru/Dosen</option>
                                                   <option value="TNI/Polri">TNI/Polri</option>
                                                   <option value="Pensiunan">Pensiunan</option>
                                                   <option value="Dokter">Dokter</option>
                                                   <option value="Politikus">Politikus</option>
                                                   <option value="Pengacara">Pengacara</option>
                                                   <option value="Pegawai Swasta">Pegawai Swasta</option>
                                                   <option value="Pedagang/Wiraswasta">Pedagang/Wiraswasta
                                                   </option>
                                                   <option value="Seniman">Seniman</option>
                                                   <option value="Petani/Nelayan">Petani/Nelayan</option>
                                                   <option value="Buruh">Buruh</option>
                                                   <option value="Lainnya">Lainnya</option>
                                                   <option value="Ibu Rumah tangga">Ibu Rumah Tangga</option>
                                               </select>
                                               <span class="text-danger" id="pek_ibu-error"></span>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <div class="row">
                                   <div class="col-sm-6">
                                       <div class="form-group">
                                           <label for="no_telp_ortu">Nomor Telp/HP Orang Tua <small>( Salah
                                                   satu
                                                   )</small></label>
                                           <input type="text" name="no_hp" id="nohp" minlength="6"
                                               maxlength="14" value="{{ old('no_hp') }}" title="Contoh : 085253304485 atau (0380)825778"
                                               class="form-control telp">
                                               <span class="text-danger" id="nohp-error"></span>
                                       </div>
                                   </div>
                                   <div class="col-sm-6">
                                       <div class="form-group">
                                           <label for="penghasilan_ortu">Penghasilan Orang Tua <small>( Per
                                                   Bulan
                                                   )</small></label>
                                           <select name="peng_ortu" id="penghasilan_ortu" required
                                               data-fv-notempty-message="Pilih salah satu"
                                               title="Rata-rata penghasilan per bulan kedua orang tua"
                                               class="form-control">
                                               <option value=""></option>
                                               <option value="< Rp. 2.000.000 ">
                                                   < Rp. 2.000.000 </option> <option
                                                       value="Rp. 2.000.000 s.d Rp.5.000.000">Rp.
                                                       2.000.000 s.d Rp.5.000.000
                                               </option>
                                               <option value="> Rp. 5.000.000 ">> Rp. 5.000.000 </option>
                                           </select>
                                           <span class="text-danger" id="penghasilan_ortu-error"></span>

                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="panel panel-default">
                           <div class="panel-heading">
                               <h2><b>4.</b> Sekolah Asal</h2>
                           </div>
                           <div class="panel-body">
                               <div class="row">
                                   <div class="col-sm-8">
                                       <div class="form-group">
                                           <label for="nama_sekolah">Nama Sekolah</label>
                                           <input type="text" name="asal_sekolah" id="asal_sekolah" minlength="10"
                                               maxlength="50" value="{{ old('asal_sekolah') }}" title="Nama Sekolah asal anda"
                                               class="form-control alphnum">
                                               <span class="text-danger" id="asal_sekolah-error"></span>

                                       </div>
                                   </div>
                                   <div class="col-sm-3 col-xs-5">
                                       <div class="form-group">
                                           <label for="tahun_lulus">Tahun Lulus</label>
                                           <select name="thn_lulus" id="tahun_lulus"
                                               data-fv-notempty-message="Pilih salah satu"
                                               title="Pilih tahun lulus anda"
                                               class="form-control">
                                               <option value=""></option>
                                               <option value="2017">2017</option>
                                               <option value="2018">2018</option>
                                               <option value="2019">2019</option>
                                               <option value="2020">2020</option>
                                               <option value="2021">2021</option>
                                           </select>
                                           <span class="text-danger" id="thn_lulus-error"></span>

                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="panel panel-default">
                           <div class="panel-heading">
                               <h2><b>5.</b> Pilihan Sekolah</h2>
                           </div>
                           <div class="panel-body">
                             <div class="form-group">
                                   <label for="is_mukim">Status Mukim</label>
                                   <div class="checkbox">
                                       <label class="radio-inline">
                                           <input type="radio" name="is_mukim" value="1" required
                                               data-fv-empty-message="Pilih salah satu"> Mukim
                                       </label><label class="radio-inline">
                                           <input type="radio" name="is_mukim" value="0"> Tidak mukim
                                       </label>
                                    </div>
                            </div>
                               <div class="row">
                                   <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="pilihan 1">Pilihan 1</label>
                                        <select name="pil1" id="pil1" 
                                            class="form-control" onchange="javasrcipt:getPil()">
                                            <option value="">-- Pilihan 1--</option>
                                        </select>
                                        <span class="text-danger" id="pil1-error"></span>

                                    </div>
                                   </div>
                                   <div class="col-sm-6">
                                       <div class="form-group">
                                           <label for="tahun_lulus">pilihan 2</label>
                                           <select name="pil2" id="pil2" 
                                           class="form-control">
                                           <option value="">-- Pilihan 2--</option>
                                       </select>
                                       <span class="text-danger" id="pil2-error"></span>

                                       </div>
                                   </div>
                               </div>
                               <div class="row" id="tambahan">
                               </div>
                           </div>
                       </div>
                       <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2><b>6.</b> Tambahan</h2>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            <div class="col-sm-6">
                                       <div class="form-group">
                                           <label for="tahun_lulus">Ekstra Pondok</label>
                                           <select name="lpbs" id="lpbs" 
                                           class="form-control">
                                           <option value="">-- Pilihan Ekstra--</option>
                                            <option value="1">Al-Banjari</option>
                                            <option value="2">Foto/Videografi</option>
                                            <option value="3">Hadang</option>
                                            <option value="4">Ishari</option>
                                            <option value="5">Jurnalistik</option>
                                            <option value="6">Kaligrafi</option>
                                            <option value="7">Pagar Nusa</option>
                                            <option value="8">Pidato</option>
                                            <option value="9">Senam Santri</option>
                                            <option value="10">Sepak Bola</option>
                                            <option value="11">Tilawah Al-Qur'an</option>
                                            <option value="12">Web Developer</option>
                                       </select>
                                       <span class="text-danger" id="lpbs-error"></span>

                                       </div>
                                   </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="nama_sekolah">Riwayat Penyakit (jika ada)</label>
                                        <input type="text" name="riwayat_penyakit" id="riwayat_penyakit" 
                                            class="form-control alphnum">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                       <ul class="pager wizard">
                           <li class="next pull-right" style="width: 0"><button id="button"
                                   class="btn btn-success pull-right">Submit</button>
                           </li>
                       </ul>
                       <div class="form-group">
            <b><span class="text-success" id="success-message"> </span><b>
        </div>
                   </div>

               </form>
           </div>
       </div>
   </div>
</section>
@endsection
@section('custom')
<script type="text/javascript">
$(document).ready(function(){
    $.get(url_api+'master/wilayah/provinsi', function(data, status){
        if(data.success){
            var prov = data.data;

            for (let i = 0; i < prov.length; i++) {
                $('#prov').append('<option value="'+prov[i].kode+'">'+prov[i].nama+'</option>');
            }
        }

    });

    $.get(url_api+'master/formal', function (data, status){
            if(data.success){
                var pilihan = data.data;
                // var a_pilihan = pilihan.splice(9);    

                for (let i = 0; i < pilihan.length; i++) {
                    var f = pilihan[i].formal_name;
                    if(f !== 'Lulus' && f !== 'UIN PASCA' && f !== 'Belum Terdata' && f !== 'RA' && f !== 'Coba Formal'  ){
                        $('#pil1').append('<option value="'+pilihan[i].id+'">'+pilihan[i].formal_name+'</option>')
                    }    
            }
        }
    });

//post ajax
    
        
});

function getKota() {
    var prov_id = $('#prov').val();
    $.get(url_api+'master/wilayah/kota/'+prov_id, function(data, status){
        if(data.success){
            var kab = data.data;
            $('#kab').empty();
            $('#kab').append('<option value="">-- PIlih Kabupaten/Kota --</option>');
            for (let i = 0; i < kab.length; i++) {
                $('#kab').append('<option value="'+kab[i].kode+'">'+kab[i].nama+'</option>');
            }
        }
    });

}
function getKecamatan() {
    var kab_id = $('#kab').val();
    $.get(url_api+'master/wilayah/kecamatan/'+kab_id, function(data, status){
        if(data.success){
            var kec = data.data;
            $('#kec').empty();
            $('#kec').append('<option value="">-- PIlih Kecamatan --</option>');
            for (let i = 0; i < kec.length; i++) {
                $('#kec').append('<option value="'+kec[i].kode+'">'+kec[i].nama+'</option>');
            }
        }
    });
}
function getDesa() {
    var kec_id = $('#kec').val();
    $.get(url_api+'master/wilayah/desa/'+kec_id, function(data, status){
        if(data.success){
            var desa = data.data;
            $('#desa').empty();
            $('#desa').append('<option value="">-- PIlih Desa/Kelurahan --</option>');
            for (let i = 0; i < desa.length; i++) {
                $('#desa').append('<option value="'+desa[i].kode+'">'+desa[i].nama+'</option>');
            }
        }
    });
}

function getPil() {
    $.get(url_api+'master/formal', function (data, status){
        if(data.success){
            $('#tambahan').empty();
            var a_pil1 = $('#pil1 option:selected').text();
            var pilihan2 = data.data;
            $('#pil2').empty();
            $('#pil2').append('<option value="">-- PIlihan2 --</option>');
            // var a_pilihan = pilihan.splice(9);    
            
            for (let i = 0; i < pilihan2.length; i++) {
                var f = pilihan2[i].formal_name;
                if(f !== 'Lulus' && f !== 'UIN PASCA' && f !== 'Belum Terdata' 
                && f !== 'RA' && f !== 'Coba Formal' && f !== a_pil1 
                && f !== 'SMP Negeri 2 Kraton Al-Yasini' && f !== 'MAN 2 Pasuruan' && f !== 'SMK Negeri 1 Wonorejo' ){
                    $('#pil2').append('<option value="'+pilihan2[i].id+'">'+pilihan2[i].formal_name+'</option>')
                }    
        }

            //tambahan
            if(a_pil1 == 'SMP Negeri 2 Kraton Al-Yasini'){
        $('#tambahan').append('Silahkan klik link tambahan berikut (<a href="http://bit.ly/PPDB_smpn2kraton" target="_blank">upload Kartu keluarga/KIP/PIP/Prestasi</a>)'
        )};
            if(a_pil1 == 'MAN 2 Pasuruan'){
        $('#tambahan').append('Silahkan klik link tambahan berikut (<a href="https://bit.ly/spdbman2pasuruan" target="_blank">Upload berkas dan survei</a>)'
        )};
            

    }
    });

}


//post ajax
$("#button").click(function(event){
    event.preventDefault();
    //   $('#nisn-error').text('');
    //     $('#nik-error').text('');
    //     $('#no_kk-number-error').text('');
        $('#nama-error').text('');
        $('#pil1-error').text('');
        $('#pil2-error').text('');
        $('#tempat_lahir-error').text('');
        // $('#tgl-error').text('');
        // $('#bln-error').text('');
        // $('#thn-error').text('');
        // $('#jk-error').text('');
        // $('#-error').text('');
        // $('#-error').text('');

      var nisn = $('#nisn').val();
     var nik = $('#nik').val();
     var no_kk = $('#no_kk').val();
     var nama_lengkap = $('#nama').val();
     var tmp = $('#tmp').val();
     var tgl = $('#tgl').val();
     var bln = $('#bln').val();
     var thn = $('#thn').val();
     var jenis_kelamin = $('#jk').val();
     var desa_id = $('#desa').val();
     var alamat = $('#alamat').val();
     var rt = $('#rt').val();
     var rw = $('#rw').val();
     var nohp = $('#nohp').val();
     var nama_ayah = $('#nama_ayah').val();
     var pekerjaan_ayah = $('#pek_ayah').val();
     var nama_ibu = $('#nama_ibu').val();
     var pekerjaan_ibu = $('#pek_ibu').val();
     var penghasilan_ortu = $('#penghasilan_ortu').val();
     var sekolah_asal = $('#asal_sekolah').val();
     var tahun_lulus = $('#tahun_lulus').val();
     var lpbs_id = $('#lpbs').val();
     var riwayat_penyakit = $('#riwayat_penyakit').val();
     var pilihan_1 = $('#pil1').val();
     var pilihan_2 = $('#pil2').val();

      $.ajax({
        url: 'http://sistem.alyasini.net/api/public/api/master/profil/store',
        type:"POST",
        data:{
            nisn: nisn,
      nik: nik,
      no_kk: no_kk,
      nama_lengkap: nama_lengkap,
      tempat_tanggal_lahir: tmp+", "+tgl+" "+bln+" "+thn,
      jenis_kelamin: jenis_kelamin,
      desa_id: desa_id,
      alamat: alamat+" Rt."+rt+" Rw."+rw,
      nohp: nohp,
      nama_ayah: nama_ayah,
      pekerjaan_ayah: pekerjaan_ayah,
      nama_ibu: nama_ibu,
      pekerjaan_ibu: pekerjaan_ibu,
      penghasilan_ortu: penghasilan_ortu,
      sekolah_asal: sekolah_asal,
      tahun_lulus: tahun_lulus,
      lpbs_id: lpbs_id,
      riwayat_penyakit: riwayat_penyakit,
      pilihan_1: pilihan_1,
      pilihan_2: pilihan_2,
      

        },
        success:function(response){
            console.log(response);
            if (response) {
              $('#success-message').text(response.message);
            //   $("#form")[0].reset();
            }
          },

        error: function(response) {
              $('#nama-error').text(response.responseJSON.errors.nama_lengkap);
              $('#tempat_lahir-error').text(response.responseJSON.errors.tempat_lahir);
              $('#pil1-error').text(response.responseJSON.errors.pilihan_1);
              $('#pil2-error').text(response.responseJSON.errors.pilihan_2);
              $('#desa_id-error').text(response.responseJSON.errors.desa_id);
          }
        
       });
  });


</script>


@endsection
