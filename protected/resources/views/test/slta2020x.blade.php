@extends('test.appx')

@section('section')
<section>
   <div class="container animated fadeIn">
    <form action="{{route('test')}}" method="post" autocomplete="on">
        @csrf
      <div class="col-sm-12 text-center">
         <h3 style="margin-bottom: 6px">SOAL TEST MASUK {{$lbg}}<br><br>BAHASA INDONESIA - 10 SOAL</h3>
      </div>
      <div class="col-sm-12">
        <div class="panel panel-informasi">
           <div class="panel-body">
            <ol>
                @foreach ($indoa as $i)
                <li><div class="text-justify">{!!$i->soal!!}</div>
                    <input type="hidden" name="user[]" value="{!!$user!!}">
                    <input type="hidden" name="soal_id[]" value="{!!$i->soal_id!!}">
                    <input type="hidden" name="soal_no[]" value="{!!$i->soal_no!!}">
                    <div>
                        <input type="radio" name="{{$i->soal_no}}" value="a" @if ($i->jawaban == "a") checked @endif> a. {!!$i->opsi_a!!}<br>
                        <input type="radio" name="{{$i->soal_no}}" value="b" @if ($i->jawaban == "b") checked @endif> b. {!!$i->opsi_b!!}<br>
                        <input type="radio" name="{{$i->soal_no}}" value="c" @if ($i->jawaban == "c") checked @endif> c. {!!$i->opsi_c!!}<br>
                        <input type="radio" name="{{$i->soal_no}}" value="d" @if ($i->jawaban == "d") checked @endif> d. {!!$i->opsi_d!!}<br>
                    </div>
                </li><br>
                @endforeach
            </ol>
           </div>
        </div>
     </div>
      <div class="col-sm-12 text-center">
         <h3 style="margin-bottom: 6px">BAHASA INGGRIS - 10 SOAL</h3>
      </div>
      <div class="col-sm-12">
        <div class="panel panel-informasi">
           <div class="panel-body">
            <ol>
                @foreach ($inggrisa as $i)
                <li>{!!$i->soal!!}
                    <input type="hidden" name="user[]" value="{!!$user!!}">
                    <input type="hidden" name="soal_id[]" value="{!!$i->soal_id!!}">
                    <input type="hidden" name="soal_no[]" value="{!!$i->soal_no!!}">
                    <div>
                        <input type="radio" name="{{$i->soal_no}}" value="a" @if ($i->jawaban == "a") checked @endif> a. {!!$i->opsi_a!!}<br>
                        <input type="radio" name="{{$i->soal_no}}" value="b" @if ($i->jawaban == "b") checked @endif> b. {!!$i->opsi_b!!}<br>
                        <input type="radio" name="{{$i->soal_no}}" value="c" @if ($i->jawaban == "c") checked @endif> c. {!!$i->opsi_c!!}<br>
                        <input type="radio" name="{{$i->soal_no}}" value="d" @if ($i->jawaban == "d") checked @endif> d. {!!$i->opsi_d!!}<br>
                    </div>
                </li><br>
                @endforeach
            </ol>
           </div>
        </div>
     </div>
      <div class="col-sm-12 text-center">
         <h3 style="margin-bottom: 6px">IPA - 10 SOAL</h3>
      </div>
      <div class="col-sm-12">
        <div class="panel panel-informasi">
           <div class="panel-body">
            <ol>
                @foreach ($ipaa as $i)
                <li>{!!$i->soal!!}
                    <input type="hidden" name="user[]" value="{!!$user!!}">
                    <input type="hidden" name="soal_id[]" value="{!!$i->soal_id!!}">
                    <input type="hidden" name="soal_no[]" value="{!!$i->soal_no!!}">
                    <div>
                        <input type="radio" name="{{$i->soal_no}}" value="a" @if ($i->jawaban == "a") checked @endif> a. {!!$i->opsi_a!!}<br>
                        <input type="radio" name="{{$i->soal_no}}" value="b" @if ($i->jawaban == "b") checked @endif> b. {!!$i->opsi_b!!}<br>
                        <input type="radio" name="{{$i->soal_no}}" value="c" @if ($i->jawaban == "c") checked @endif> c. {!!$i->opsi_c!!}<br>
                        <input type="radio" name="{{$i->soal_no}}" value="d" @if ($i->jawaban == "d") checked @endif> d. {!!$i->opsi_d!!}<br>
                    </div>
                </li><br>
                @endforeach
            </ol>
           </div>
        </div>
     </div>
      <div class="col-sm-12 text-center">
         <h3 style="margin-bottom: 6px">MATEMATIKA - 10 SOAL</h3>
      </div>
      <div class="col-sm-12">
        <div class="panel panel-informasi">
           <div class="panel-body">
            <ol>
                @foreach ($mtka as $i)
                <li>{!!$i->soal!!}
                    <input type="hidden" name="user[]" value="{!!$user!!}">
                    <input type="hidden" name="soal_id[]" value="{!!$i->soal_id!!}">
                    <input type="hidden" name="soal_no[]" value="{!!$i->soal_no!!}">
                    <div>
                        <input type="radio" name="{{$i->soal_no}}" value="a" @if ($i->jawaban == "a") checked @endif> a. {!!$i->opsi_a!!}<br>
                        <input type="radio" name="{{$i->soal_no}}" value="b" @if ($i->jawaban == "b") checked @endif> b. {!!$i->opsi_b!!}<br>
                        <input type="radio" name="{{$i->soal_no}}" value="c" @if ($i->jawaban == "c") checked @endif> c. {!!$i->opsi_c!!}<br>
                        <input type="radio" name="{{$i->soal_no}}" value="d" @if ($i->jawaban == "d") checked @endif> d. {!!$i->opsi_d!!}<br>
                    </div>
                </li><br>
                @endforeach
            </ol>
           </div>
        </div>
     </div>
      <div class="col-sm-12 text-center">
         <h3 style="margin-bottom: 6px">PAI - 10 SOAL</h3>
      </div>
      <div class="col-sm-12">
        <div class="panel panel-informasi">
           <div class="panel-body">
            <ol>
                @foreach ($paia as $i)
                <li>{!!$i->soal!!}
                    <input type="hidden" name="user[]" value="{!!$user!!}">
                    <input type="hidden" name="soal_id[]" value="{!!$i->soal_id!!}">
                    <input type="hidden" name="soal_no[]" value="{!!$i->soal_no!!}">
                    <div>
                    <input type="radio" name="{{$i->soal_no}}" value="a" @if ($i->jawaban == "a") checked @endif> a. {!!$i->opsi_a!!}<br>
                        <input type="radio" name="{{$i->soal_no}}" value="b" @if ($i->jawaban == "b") checked @endif> b. {!!$i->opsi_b!!}<br>
                        <input type="radio" name="{{$i->soal_no}}" value="c" @if ($i->jawaban == "c") checked @endif> c. {!!$i->opsi_c!!}<br>
                        <input type="radio" name="{{$i->soal_no}}" value="d" @if ($i->jawaban == "d") checked @endif> d. {!!$i->opsi_d!!}<br>
                    </div>
                </li><br>
                @endforeach
            </ol>
           </div>
        </div>
     </div>
     <div class="text-center">
         <button type="submit" class="btn btn-success" value="submit_jawaban" disabled>Kumpulkan</button>
     </div>
    </form>
   </div>
</section>
@endsection
