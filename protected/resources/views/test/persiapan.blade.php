@extends('test.app')

@section('section')
<section>
   <div class="container animated fadeIn">
    <div class="col-sm-12 text-center">
        <h3 style="margin-bottom: 6px">PERSIAPAN TEST</h3>
     </div>
      <div class="col-sm-12">
        <div class="panel panel-informasi">
           <div class="panel-body">
              <ol>
                  <li>Test akbar gelombang dilaksanakan pada tanggal 06 Juni 2020 pukul 08.00-12.00 WIB </li>
                  <li>Mata pelajaran yang diujikan meliputi : Bhs. Indonesia, Bhs. Inggris, IPA, Matematika, dan Pendidikan Agama Islam (PAI)</li>
                  <li>Tiap Mata pelajaran berisi 10 soal sehingga keseluruhan soal berjumlah 50 soal</li>
                  <li>Waktu mengerjakan 90 menit</li>
                  <li>Siapkan kertas jika diperlukan untuk menghitung soal matematika</li>
                  <li>Jangan lupa berdoa sebelum mengerjakan soal</li>
                  <li>Silahkan klik tombol dibawah ini jika sudah siap mengerjakan !</li>
              </ol>
           </div>
        </div>
     </div>
     <div class="text-center" style="margin: 35px 0 93px 0">
        @if ($date >= "01-06-2020 08:00:00" && $date <= "06-06-2020 12:00:00" )
        <a href="soal"><button type="submit" class="btn btn-success">Mulai Mengerjakan Test</button></a>
        @else
        <h5>(tombol ini akan tersedia pada tanggal 06-06-2020 pukul 08:00:00 - 12:00:00 WIB)</h5>
        <button type="submit" class="btn btn-success" disabled>Mulai Mengerjakan Test</button>
        @endif
     </div>
   </div>
</section>
@endsection
