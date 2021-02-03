@extends('app')

@section('section')
<section>
   <div class="container animated fadeIn">
       <div class="text-center">
           <h2 style="margin-bottom: 6px"><i class="fa fa-edit fa-fw"></i> EDIT FORMULIR</h2>
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
           <form action="{{route('simpan')}}" method="post" autocomplete="on">
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
                                           <input type="text" name="nama" required
                                               minlength="3" maxlength="50" value="{{$b->nama}}"
                                               title="Nama harus sesuai dengan Ijazah" class="form-control ">
                                       </div>
                                   </div>
                                   <div class="col-sm-3">
                                       <div class="form-group">
                                           <label for="nisn">NISN</label>
                                           <input type="text" name="nisn" id="nisn" required minlength="1"
                                               maxlength="12" value="{{$b->nisn}}" title="isikan 10 digit NISN"
                                               class="form-control " />
                                       </div>
                                   </div>
                                   <div class="col-sm-3">
                                       <div class="form-group">
                                           <label for="nisn">No. KK</label>
                                           <input type="text" name="kk" id="kk" required minlength="1"
                                               maxlength="16" value="{{ $b->kk }}" title="isikan 16 digit No. KK"
                                               class="form-control " />
                                       </div>
                                   </div>
                                   <div class="col-sm-3">
                                       <div class="form-group">
                                           <label for="nik">NIK</label>
                                           <input type="text" name="nik" id="nik" required minlength="1" maxlength="16"
                                               value="{{ $b->nik }}" title="isikan 16 digit NIK" class="form-control ">
                                       </div>
                                   </div>
                                   <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="jk">Jenis Kelamin</label>
                                        <select name="jk" id="jk" required
                                            data-fv-notempty-message="Pilih salah satu"
                                            title="Pilih Jenis Kelamin anda" class="form-control">
                                            @if ($b->jk == "L")
                                            <option value="$b->jk">Laki-laki</option>
                                            @else
                                            <option value="$b->jk">Perempuan</option>
                                            @endif
                                            <option value="L">Laki-laki</option>
                                            <option value="P">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                               </div>
                               <div class="row">
                                   <div class="col-sm-4">
                                       <div class="form-group">
                                           <label for="tempat_lahir">Tempat Lahir</label>
                                           <input type="text" name="tmp_lahir" id="tempat_lahir" required
                                               maxlength="30" minlength="3" value="{{ $b->tmp_lahir }}"
                                               title="Tempat Lahir harus sesuai dengan Ijazah"
                                               class="form-control alph">
                                       </div>
                                   </div>
                                   <div class="col-sm-6">
                                       <div class="form-group">
                                           @php
                                               $tanggal = $b->tgl_lahir;
                                               $ex = explode('-',$tanggal);
                                               $thn = $ex[0];
                                               $bln = $ex[1];
                                               $tgl = $ex[2];

                                           @endphp
                                           <label for="tgl_lahir">Tanggal Lahir</label>
                                           <div class="row">
                                               <div class="col-xs-4">
                                                   <select name="tgl" id="tgl" required
                                                       data-fv-notempty-message="Pilih salah satu"
                                                       title="Pilih Tanggal Lahir anda" class="form-control">
                                                       <option value="{{$tgl}}">{{$tgl}}</option>
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
                                               </div>
                                               <div class="col-xs-4">
                                                   <select name="bln" id="bln" required
                                                       data-fv-notempty-message="Pilih salah satu"
                                                       title="Pilih Bulan Lahir anda" class="form-control">
                                                       <option value="{{$bln}}">{{$bln}}</option>
                                                       <option value="01">Jan</option>
                                                       <option value="02">Feb</option>
                                                       <option value="03">Mar</option>
                                                       <option value="04">Apr</option>
                                                       <option value="05">Mei</option>
                                                       <option value="06">Juni</option>
                                                       <option value="07">Juli</option>
                                                       <option value="08">Agu</option>
                                                       <option value="09">Sep</option>
                                                       <option value="10">Okt</option>
                                                       <option value="11">Nov</option>
                                                       <option value="12">Des</option>
                                                   </select>
                                               </div>
                                               <div class="col-xs-4">
                                                   <select name="thn" id="thn" required
                                                       data-fv-notempty-message="Pilih salah satu"
                                                       title="Pilih Tahun Lahir anda. Selain tahun yang ada tidak diperbolehkan mendaftar"
                                                       class="form-control">
                                                       <option value="{{$thn}}">{{$thn}}</option>
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
                                       <div class="col-sm-12">
                                           <div class="form-group">
                                               <label for="alamat">Dusun/jalan</label>
                                               <input type="text" name="dusun" id="alamat" required minlength="5"
                                                   maxlength="100" data-fv-minlength-message="Alamat terlalu singkat"
                                                   value="{{ $b->dusun }}"
                                                   title="Alamat tempat tinggal anda. Contoh : Jalan Pahlawan no. 10"
                                                   class="form-control">
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <div>
                                   <div class="row">
                                       <div class="col-xs-6">
                                           <div class="form-group">
                                               <label for="desa">Kelurahan/Desa</label>
                                               <input type="text" name="desa" id="kelurahan" maxlength="30"
                                                   minlength="3" value="{{ $b->desa }}" title="Kelurahan tempat tinggal anda"
                                                   class="form-control alph">
                                           </div>
                                       </div>
                                       <div class="col-xs-6">
                                           <div class="form-group">
                                               <label for="kec">Kecamatan</label>
                                               <input type="text" name="kec" id="kota" required maxlength="30"
                                                   minlength="3" value="{{ $b->kec }}" title="Kota tempat tinggal anda"
                                                   class="form-control alph">
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label for="kab">Kabupaten/Kota</label>
                                            <input type="text" name="kab" id="kab" maxlength="30"
                                                minlength="3" value="{{ $b->kab }}" title="Kabupaten tempat tinggal anda"
                                                class="form-control alph">
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label for="prov">Provinsi</label>
                                            <input type="text" name="prov" id="prov" required maxlength="30"
                                                minlength="3" value="{{ $b->prov }}" title="Provinsi tempat tinggal anda"
                                                class="form-control alph">
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
                                                   minlength="3" maxlength="50" value="{{ $b->ayah }}" title="Nama ayah anda"
                                                   class="form-control alph">
                                           </div>
                                       </div>
                                       <div class="col-xs-5">
                                           <div class="form-group">
                                               <label for="pek_ayah">Pekerjaan Ayah</label>
                                               <select name="pek_ayah" id="pek_ayah" required
                                                   data-fv-notempty-message="Pilih salah satu"
                                                   title="Pilih Pekerjaan ayah anda" class="form-control">
                                                   <option value="{{ $b->pek_ayah }}">{{ $b->pek_ayah }}</option>
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
                                                   maxlength="50" value="{{ $b->ibu }}" title="Nama ibu anda"
                                                   class="form-control alph">
                                           </div>
                                       </div>
                                       <div class="col-xs-5">
                                           <div class="form-group">
                                               <label for="pek_ibu">Pekerjaan Ibu</label>
                                               <select name="pek_ibu" id="pek_ibu" required
                                                   data-fv-notempty-message="Pilih salah satu"
                                                   title="Pilih Pekerjaan ibu anda" class="form-control">
                                                   <option value="{{ $b->pek_ibu }}">{{ $b->pek_ibu }}</option>
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
                                           <input type="text" name="no_hp" id="no_telp_ortu" minlength="6"
                                               maxlength="14" value="{{ $b->no_hp }}" title="Contoh : 085253304485 atau (0380)825778"
                                               class="form-control telp">
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
                                               <option value="{{ $b->peng_ayah }}">{{ $b->peng_ayah }}</option>
                                               <option value="< Rp. 2.000.000 ">
                                                   < Rp. 2.000.000 </option> <option
                                                       value="Rp. 2.000.000 s.d Rp.5.000.000">Rp.
                                                       2.000.000 s.d Rp.5.000.000
                                               </option>
                                               <option value="> Rp. 5.000.000 ">> Rp. 5.000.000 </option>
                                           </select>
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
                                           <input type="text" name="asal_sekolah" id="nama_sekolah" minlength="10"
                                               maxlength="50" value="{{ $b->asal_sekolah }}" title="Nama Sekolah asal anda"
                                               class="form-control alphnum">
                                       </div>
                                   </div>
                                   <div class="col-sm-3 col-xs-5">
                                       <div class="form-group">
                                           <label for="tahun_lulus">Tahun Lulus</label>
                                           <select name="thn_lulus" id="tahun_lulus"
                                               data-fv-notempty-message="Pilih salah satu"
                                               title="Pilih tahun lulus anda"
                                               class="form-control">
                                               <option value="{{ $b->thn_lulus }}">{{ $b->thn_lulus }}</option>
                                               <option value="2017">2017</option>
                                               <option value="2018">2018</option>
                                               <option value="2019">2019</option>
                                               <option value="2020">2020</option>
                                           </select>
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
                                   <label for="is_mukim">Apakah Alumni Al-Yasini?</label>
                                   @if ($b->is_alumni == 2 || $b->is_alumni == 0)
                                   <div class="checkbox">
                                        <label class="radio-inline">
                                        <input type="radio" name="is_alumni" value="2" required checked
                                        data-fv-empty-message="Pilih salah satu"> Bukan
                                        </label><label class="radio-inline">
                                        <input type="radio" name="is_alumni" value="1"> Iya
                                        </label> 
                                   </div>
                                   @elseif($b->is_alumni == 1)
                                   <div class="checkbox">
                                    <label class="radio-inline">
                                    <input type="radio" name="is_alumni" value="2" required
                                    data-fv-empty-message="Pilih salah satu"> Bukan
                                    </label><label class="radio-inline">
                                    <input type="radio" name="is_alumni" value="1"  checked> Iya
                                    </label> 
                               </div>
                                   @endif

                            </div>
                             <div class="form-group">
                                   <label for="is_mukim">Status Mukim</label>
                                   @if ($b->is_mukim == 1)
                                   <div class="checkbox">
                                        <label class="radio-inline">
                                        <input type="radio" name="is_mukim" value="1" required checked
                                        data-fv-empty-message="Pilih salah satu"> Mukim
                                        </label><label class="radio-inline">
                                        <input type="radio" name="is_mukim" value="0"> Tidak mukim 
                                        </label> 
                                   </div>
                                   @elseif($b->is_mukim == 0)
                                   <div class="checkbox">
                                    <label class="radio-inline">
                                    <input type="radio" name="is_mukim" value="1" required
                                    data-fv-empty-message="Pilih salah satu"> Mukim
                                    </label><label class="radio-inline">
                                    <input type="radio" name="is_mukim" value="0"  checked> Tidak mukim 
                                    </label> 
                               </div>
                                   @endif

                            </div>
                               <div class="row">
                                   <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="pilihan 1">Pilihan 1</label>
                                        <select name="pil1" id="pilihan_1"
                                            data-fv-notempty-message="Pilih salah satu"
                                            title="Pilihan 1"
                                            class="form-control">
                                            <option value="{{$b->pil1}}">{{$b->pil1}}</option>
                                            <option value="SDIC Al-Yasini">SDIC Al-Yasini</option>
                                            <option value="MTs Al-Yasini">MTs Al-Yasini</option>
                                            <option value="SMPU Al-Yasini">SMPU Al-Yasini</option>
                                            <option value="SMPN 2 Kraton">SMPN 2 Kraton</option>
                                            <option value="SMA Excellent Al-Yasini">SMA Excellent Al-Yasini</option>
                                            <option value="MAN 2 Pasuruan">MAN 2 Pasuruan</option>
                                            <option value="SMK Leader Al-Yasini">SMK Leader Al-Yasini</option>
                                            <option value="SMKN 1 Wonorejo">SMKN 1 Wonorejo</option>
                                            <option value="STAI Al-Yasini">STAI Al-Yasini</option>
                                            <option value="Salafiyah Al-Yasini">Salafiyah Al-Yasini</option>
                                        </select>
                                    </div>
                                   </div>
                                   <div class="col-sm-6">
                                       <div class="form-group">
                                           <label for="tahun_lulus">pilihan 2</label>
                                           <select name="pil2" id="pilihan_2"
                                               data-fv-notempty-message="Pilih salah satu"
                                               title="Pilihan 2"
                                               class="form-control">
                                               <option value="{{$b->pil2}}">{{$b->pil2}}</option>
                                            <option value="SDIC Al-Yasini">SDIC Al-Yasini</option>
                                            <option value="MTs Al-Yasini">MTs Al-Yasini</option>
                                            <option value="SMPU Al-Yasini">SMPU Al-Yasini</option>
                                            <option value="SMPN 2 Kraton">SMPN 2 Kraton</option>
                                            <option value="SMA Excellent Al-Yasini">SMA Excellent Al-Yasini</option>
                                            <option value="MAN 2 Pasuruan">MAN 2 Pasuruan</option>
                                            <option value="SMK Leader Al-Yasini">SMK Leader Al-Yasini</option>
                                            <option value="SMKN 1 Wonorejo">SMKN 1 Wonorejo</option>
                                            <option value="STAI Al-Yasini">STAI Al-Yasini</option>
                                            <option value="Salafiyah Al-Yasini">Salafiyah Al-Yasini</option>
                                           </select>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>

                       <ul class="pager wizard">
                           <li class="next pull-right" style="width: 0"><button type="submit"
                                   class="btn btn-success pull-right">Simpan</button>
                           </li>
                       </ul>

                   </div>
               </form>
           </div>
       </div>
   </div>
</section>
@endsection
