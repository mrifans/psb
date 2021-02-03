<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print Bukti Pendaftaran</title>
</head>
<style>
body{
    width: 210mm;
    min-height: 330mm;
}

@page{
    margin :0%;
}
.text-center{
    text-align: center;
}
.text-center2{
    text-align: center;
    padding-top: 35px;
    font-size: 18px;
}
.text-right{
text-align: right;
}
.center {
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  text-align: center;
  font-size: 18px;
}
div.absolute {
  position: absolute;
  top: 300px;
  right: 100px;
  width: 3cm;
  height: 4cm;
  border: 3px solid #000;
}
footer{
    position: absolute;
    bottom: 0;
    text-align: center;
    z-index: 2;

}
.pt-0{
    padding-top: 0%;
    margin-top: 0%;
}
.mb-0{
    margin-bottom: 0%;
}

.mr-7 {
    margin-left: 55px;
    margin-top: 85px;
}
.container {
  position: absolute;
}
.kop {
  position: absolute;
  text-align: center;
  left: 7%;
  top: 180px;
}
.foot {
  position: relative;
  text-align: center;
  left: 10%;
  bottom: 150px;
  z-index: 2;
}

.mt{
    margin-top: 20px;
}
</style>
{{-- <body onload="window.print()"> --}}
<body>

    <div class="container">
            <img src="{{ url('img/kopa.jpg')}}" width="750px" class="mt">
        <div class="kop">
            <H1 class="pt-0 mb-0">BUKTI PENDAFTARAN</H1>
            <H3 class="pt-0">PENERIMAAN SANTRI BARU PPT. AL-YASINI</H3>
        </div>
        <div class="absolute text-center2">
        Foto 3x4
        </div>
        <div class="mr-7">
        <table>
            <tbody>
                <tr>
                    <td scope="row"><h3>Data Diri Santri</h3></td>
                    <td></td>
                </tr>
                <tr>
                    <td scope="row">No. Pendaftaran Pondok</td>
                    <td>: 00{{$d->no_mukim}}</td>
                </tr>
                <tr>
                    <td scope="row">NISN</td>
                    <td>: {{$d->nisn}}</td>
                </tr>
                <tr>
                    <td>No. KK</td>
                    <td>: {{$d->kk}}</td>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td>: {{$d->nik}}</td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>: {!!$d->nama!!}</td>
                </tr>
                <tr>
                    <td>Tempat, Tanggal Lahir</td>
                    <td>: {!!$d->tmp_lahir!!}, {{$d->tgl_lahir}}</td>
                </tr>
                <tr>
                    <td>Jenis kelamin</td>
                    @if ($d->jk == 'L')
                    <td>: Laki-laki</td>
                    @elseif($d->jk == 'P')
                    <td>: Perempuan</td>
                    @endif
                </tr>
                <tr>
                    <td><h3>Alamat</h3></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Dusun/jalan</td>
                    <td>: {{$d->dusun}}</td>
                </tr>
                <tr>
                    <td>Desa/Kelurahan</td>
                    <td>: {{$d->desa}}</td>
                </tr>
                <tr>
                    <td>Kecamatan</td>
                    <td>: {{$d->kec}}</td>
                </tr>
                <tr>
                    <td>Kabupaten</td>
                    <td>: {{$d->kab}}</td>
                </tr>
                <tr>
                    <td>Provinsi</td>
                    <td>: {{$d->prov}}</td>
                </tr>
                <tr>
                    <td>Asal Sekolah</td>
                    <td>: {{$d->asal_sekolah}}</td>
                </tr>
                <tr>
                    <td>Lulusan</td>
                    <td>: {{$d->thn_lulus}}</td>
                </tr>
                <tr>
                    <td><h3>Orangtua/Wali</h3></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Ayah</td>
                    <td>: {{$d->ayah}}</td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td>: {{$d->pek_ayah}}</td>
                </tr>
                <tr>
                    <td>Ibu</td>
                    <td>: {{$d->ibu}}</td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td>: {{$d->pek_ibu}}</td>
                </tr>
                <tr>
                    <td>Penghasilan Perbulan</td>
                     <td>: {{$d->peng_ayah}}</td>
                </tr>
                <tr>
                    <td>No. HP Orangtua</td>
                    <td>: {{$d->no_hp}}</td>
                </tr>
        </table>
        </div>
        <br>
        <br>
        <br>
        <div class="foot text-center">
            <table class="table" width="720px" style="margin: 0px 30px 0px 50px;">
                <tbody>
                    <tr>
                        <td scope="row" width="50%"></td>
                        <td>Pasuruan, {{tanggal_local($d->tgl_bayar)}} <br></td>
                    </tr>
                    <tr>
                        <td scope="row" width="50%">Yang bersangkutan
                            <br><br><br><br><br>
                            {{$d->nama}}</td>
                        <td>Petugas
                            <br><br><br><br><br>
                        (_________________________)</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

        <footer>
            <img src="{{ url('img/kopb.jpg')}}" width="820px">
        </footer>
</body>
</html>