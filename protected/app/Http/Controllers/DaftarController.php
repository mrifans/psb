<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class DaftarController extends Controller
{
    public function index()
    {
        $d = date('d-m-Y');
        $p = "home";
        $tgl = "data update (".$d.")";
        $lmbg = DB::table('siswa1')
                        ->select('formal_name',\DB::raw('count(*) as jml'))
                        ->groupBy('formal_name')
                        // ->orderBy('order_id')
                        ->get();

        $lb = [];
        $jml = [];
        foreach ($lmbg as $l) {
            $lb[] = $l->formal_name;
            $jml[] = $l->jml;
        }

        // dd($lb);

        return view('beranda', compact('p','tgl','lb','jml'));
    }

    public function alur()
    {
        $p = "alur";
        return view('alur', compact('p'));
    }

    public function biaya()
    {
        $p = "biaya";
        return view('biaya', compact('p'));
    }

    public function form()
    {
        $p = "form";
        return view('form', compact('p'));
    }
    public function info()
    {
        $p = "info";
        return view('info', compact('p'));
    }

    public function daftar(Request $r)
    {
        $cek = DB::table('santri_profile')
                    ->where('nisn',$r->nisn)
                    ->orWhere('nik',$r->nik)
                    ->count();

        if($cek == 1){
            $d = DB::table('santri_profile')
                    ->where('nisn',$r->nisn)
                    ->orWhere('nik',$r->nik)
                    ->first();
            return view('sudahdipakai', compact('d'));
        }else{

            $r->validate([
                'kk'=>'required',
                'nik'=>'required',
                'nisn'=>'required',
                'nama'=>'required',
                'jk'=>'required',
                'tmp_lahir'=>'required',
                'dusun'=>'required',
                'desa'=>'required',
                'kec'=>'required',
                'kab'=>'required',
                'prov'=>'required',
                'ayah'=>'required',
                'pek_ayah'=>'required',
                'peng_ortu'=>'required',
                'ibu'=>'required',
                'pek_ibu'=>'required',
                'no_hp'=>'required',
                'asal_sekolah'=>'required',
                'thn_lulus'=>'required',
                'pil1'=>'required',
                'pil2'=>'required',
                'is_mukim'=>'required',
            ],[
                'required' => ':attribute wajib diisi !',
                'min' => ':attribute harus diisi minimal :min karakter !',
                'max' => ':attribute harus diisi maksimal :max karakter !',
            ]);

            //mukim PA
            if($r->is_mukim == 1 && $r->jk == 'L'){
                $mukim = DB::table('santri_profile')
                                ->where([
                                         ['is_mukim','=','1'],
                                         ['jk','=','L']
                                        ])
                                ->orderBy('no_mukim','desc')
                                ->first();
                $no_mukim = $mukim + 1;
                $insert = DB::table('santri_profile')->insert([
                    'no_mukim' =>$no_mukim,
                    'kk'=>$r->kk,
                    'nik'=>$r->nik,
                    'nisn'=>$r->nisn,
                    'nama'=>$r->nama,
                    'jk'=>$r->jk,
                    'tmp_lahir'=>$r->tmp_lahir,
                    'tgl_lahir'=>$r->thn.'-'.$r->bln.'-'.$r->tgl,
                    'dusun'=>$r->dusun.' Rt.'.$r->rt.' Rw.'.$r->rw,
                    'desa'=>$r->desa,
                    'kec'=>$r->kec,
                    'kab'=>$r->kab,
                    'prov'=>$r->prov,
                    'ayah'=>$r->ayah,
                    'pek_ayah'=>$r->pek_ayah,
                    'peng_ayah'=>$r->peng_ortu,
                    'ibu'=>$r->ibu,
                    'pek_ibu'=>$r->pek_ibu,
                    'peng_ibu'=>$r->peng_ortu,
                    'no_hp'=>$r->no_hp,
                    'asal_sekolah'=>$r->asal_sekolah,
                    'thn_lulus'=>$r->thn_lulus,
                    'pil1'=>$r->pil1,
                    'pil2'=>$r->pil2,
                    'is_mukim'=>$r->is_mukim,
                    'tgl_daftar'=> date("Y-n-d"),
                    'tgl_update'=>date("Y-n-d"),
                ]);
            }
            //mukim PI
            elseif($r->is_mukim == 1 && $r->jk == 'P'){
                $mukim = DB::table('santri_profile')
                                ->where([
                                         ['is_mukim','=','1'],
                                         ['jk','=','P']
                                        ])
                                ->orderBy('no_mukim','desc')
                                ->first();
                $no_mukim = $mukim + 1;
                $insert = DB::table('santri_profile')->insert([
                    'no_mukim' =>$no_mukim,
                    'kk'=>$r->kk,
                    'nik'=>$r->nik,
                    'nisn'=>$r->nisn,
                    'nama'=>$r->nama,
                    'jk'=>$r->jk,
                    'tmp_lahir'=>$r->tmp_lahir,
                    'tgl_lahir'=>$r->thn.'-'.$r->bln.'-'.$r->tgl,
                    'dusun'=>$r->dusun.' Rt.'.$r->rt.' Rw.'.$r->rw,
                    'desa'=>$r->desa,
                    'kec'=>$r->kec,
                    'kab'=>$r->kab,
                    'prov'=>$r->prov,
                    'ayah'=>$r->ayah,
                    'pek_ayah'=>$r->pek_ayah,
                    'peng_ayah'=>$r->peng_ortu,
                    'ibu'=>$r->ibu,
                    'pek_ibu'=>$r->pek_ibu,
                    'peng_ibu'=>$r->peng_ortu,
                    'no_hp'=>$r->no_hp,
                    'asal_sekolah'=>$r->asal_sekolah,
                    'thn_lulus'=>$r->thn_lulus,
                    'pil1'=>$r->pil1,
                    'pil2'=>$r->pil2,
                    'is_mukim'=>$r->is_mukim,
                    'tgl_daftar'=> date("Y-n-d"),
                    'tgl_update'=>date("Y-n-d"),
                ]);
            }
            //gak mukim
            elseif($r->is_mukim == 0){
                $insert = DB::table('santri_profile')->insert([
                    'kk'=>$r->kk,
                    'nik'=>$r->nik,
                    'nisn'=>$r->nisn,
                    'nama'=>$r->nama,
                    'jk'=>$r->jk,
                    'tmp_lahir'=>$r->tmp_lahir,
                    'tgl_lahir'=>$r->thn.'-'.$r->bln.'-'.$r->tgl,
                    'dusun'=>$r->dusun.' Rt.'.$r->rt.' Rw.'.$r->rw,
                    'desa'=>$r->desa,
                    'kec'=>$r->kec,
                    'kab'=>$r->kab,
                    'prov'=>$r->prov,
                    'ayah'=>$r->ayah,
                    'pek_ayah'=>$r->pek_ayah,
                    'peng_ayah'=>$r->peng_ortu,
                    'ibu'=>$r->ibu,
                    'pek_ibu'=>$r->pek_ibu,
                    'peng_ibu'=>$r->peng_ortu,
                    'no_hp'=>$r->no_hp,
                    'asal_sekolah'=>$r->asal_sekolah,
                    'thn_lulus'=>$r->thn_lulus,
                    'pil1'=>$r->pil1,
                    'pil2'=>$r->pil2,
                    'is_mukim'=>$r->is_mukim,
                    'tgl_daftar'=> date("Y-n-d"),
                    'tgl_update'=>date("Y-n-d"),
                ]);
            }

            if($insert){
                $d = DB::table('santri_profile')->where('nisn',$r->nisn)->first();
                    return view ('berhasil',compact('d'));
            }
        }
    }

    public function buktif(Request $r)
    {
        $d = DB::table('santri_profile')->where('santri_profile.no_daftar',$r->no_daftar)
                    ->join('bayar','santri_profile.no_daftar','=','bayar.no_daftar')
                    ->first();

        $pdf = PDF::loadview('buktif',compact('d'))
        ->setPaper([0, 0, 595.28, 935.43], 'potrait');
	    return $pdf->stream();
	    //return $pdf->download();
    }
    public function buktip(Request $r)
    {
        $d = DB::table('santri_profile')->where('santri_profile.no_daftar',$r->no_daftar)
                    ->join('bayar','santri_profile.no_daftar','=','bayar.no_daftar')
                    ->first();

        $pdf = PDF::loadview('buktip',compact('d'))
        ->setPaper('folio', 'potrait');
	    return $pdf->stream();
	    //return $pdf->download();
    }

    public function cek(Request $r)
    {
        $aod = DB::table('santri_profile')->where('nisn',$r->nisn);
        $ad = $aod->count();
        if($ad == 0){
            $d = $r->nisn;
            return view('tidakditemukan',compact('d'));
        } else {
            $d = $aod->first();
            $no = $d->no_daftar;
            $aoc = DB::table('bayar')->where('no_daftar',$no);
            $ac = $aoc->count();
                if($ac == 1){
                    return view('sudahbayar',compact('d'));
                } else{
                    return view('belumbayar',compact('d'));
                    }
            }
    }

    public function kartu(Request $r)
    {
        $d = DB::table('santri_profile')->where('no_daftar',$r->no_daftar)->first();

        $pdf = PDF::loadview('kartu',compact('d'))
        ->setPaper([0, 0, 595.28, 935.43], 'potrait');
	    return $pdf->stream();
    }

    public function peserta()
    {
        $list = DB::table('bayar')
                        ->Join('santri_profile','bayar.no_daftar','=','santri_profile.no_daftar')
                        ->get();

        $no = 1;
        foreach ($list as $l) {
            DB::table('users')->insertOrIgnore([
                'id_user' => '5',
                'jabatan' => 'santri',
                'name' => $l->nama,
                'username' => "00".$l->no_daftar,
                'password' => bcrypt($l->nisn),
            ]);
                echo $no++." sukses <br>";
        }
    }

    public function ps()
    {

        $sltp = DB::table('users')->insertOrIgnore([
                'id_user' => '6',
                'jabatan' => 'pembuat soal sltp',
                'name' => "Pembuat Soal SLTP",
                'username' => "ps_sltp",
                'password' => bcrypt("P5_SLtp"),
            ]);

        $slta = DB::table('users')->insertOrIgnore([
                'id_user' => '6',
                'jabatan' => 'pembuat soal slta',
                'name' => "Pembuat Soal SLTA",
                'username' => "ps_slta",
                'password' => bcrypt("P5_slTA"),
            ]);

        if($sltp){echo "sltp sukses <br>";};
        if($slta){echo "slta sukses <br>";};

    }

    public function coba()
    {
        $p = "home";
        return view('lulus', compact('p'));
    }












}
