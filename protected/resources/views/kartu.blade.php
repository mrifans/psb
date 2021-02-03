<style>
.text-center{
    text-align: center;
}

.p-5{
    margin :25px;
}

h4, h5{
    padding-top: 0%;
    margin-top: 0%;
}

table{
    border-collapse: collapse;
  border: 1px solid black;
}

thead{
    border-collapse: collapse;
  border: 1px solid black;
}

thead tr td, tbody tr td{
    padding: 10px;
}

div.absolute {
  position: absolute;
  top: 120px;
  left: 50%;
  width: 3cm;
  height: 4cm;
  border: 3px solid #000;
}

div.no {
  position: absolute;
  top: 260px;
  left: 10%;
  width: 3cm;
  height: 0.8cm;
  border-collapse: collapse;
  border: 2px solid #000;
}

.center {
  position: absolute;
  left: 0;
  width: 100%;
  text-align: center;
  font-size: 18px;
  padding-top: 5px;
}

.gbr{
    float: left;
}
</style>

<div class="container">
    <div class="absolute">
        <p class="center">Foto 3x4</p>
        </div>
        <div class="no">
            <div class="center">00{{$d->no_daftar}}</div>
            </div>
    <table class="table" width="75%">
        <thead>
            <tr>
                <td colspan="2">
                    <div class="text-center"><img class="gbr" src="{{url('img/logo.png')}}" alt="Al-Yasini" width="65px"><b>KARTU PESERTA TES</b><br>
                        SANTRI BARU (PSB)<br>
                        PONDOK PESANTREN TERPADU AL-YASINI
                    </div>
                </td>  
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row" width="75">Nama </td>
                <td>: {{$d->nama}}</td>
            </tr>
            <tr>
                <td scope="row">Asal Sekolah</td>
                <td>: {{$d->asal_sekolah}}</td>
            </tr>
            <tr>
                <td scope="row">Pilihan 1</td>
                <td>: {{$d->pil1}}</td>
            </tr>
            <tr>
                <td scope="row">Pilihan 2</td>
                <td>: {{$d->pil2}}</td>
            </tr>
            <tr>
                <td scope="row"><br><br><br><br></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>