<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $santri = DB::table('jml2')
                        ->rightJoin('jml1','jml1.formal_name','=','jml2.formal_name')
                        ->orderBy('jml2.order_id', 'asc')
                        ->get();
        $total = DB::table('total_pendaftar')->first();
        $t = DB::table('siswa1')->where([
            ['is_mukim', 1]
            ['tgl_bayar','>=','2020-06-06 13:00:00'],
        ])->wherenotnull('no_mukim');
        $tahap2pa = $t->where('jk',"L")->count();
        $tahap2pi = $t->where('jk',"P")->count();
        $tahap2 = $t->count();
        if(Auth()->user()->id_user == 4){
            $lbg = Auth()->user()->id_jabatan;
            // $santri = DB::table('bayar')
            //         ->Join('santri_profile','bayar.no_daftar','=','santri_profile.no_daftar')
            //         ->where('pil1', '=', $lbg)
            //         ->orderBy('tgl_bayar','asc')
            //         ->get();

            $santri = DB::table('kelulusan')->select('kelulusan.status as lulusdi','siswa1.*')
                    ->Join('siswa1','siswa1.no_daftar','=','kelulusan.no_daftar')
                    ->where('kelulusan.status', '=', $lbg)
                    ->orderBy('jk','asc')
                    ->orderBy('no_daftar','asc')
                    ->get();
            return view('admin.lembaga', compact('santri','lbg'));
        } elseif(Auth()->user()->id_user == 5){
            $p = "profile";
            $date = date("d-m-Y H:i:s");
            $users = Auth()->user()->username;
            $user = substr($users,2);
            $d = DB::table('santri_profile')->where('no_daftar',$user)->first();
            return view('test.profile', compact('d','p', 'date'));
        }elseif(Auth()->user()->id_user == 6){
            return redirect('/draftsoal');
        }else{
            return view('admin.admin', compact('santri','total','tahap2pa','tahap2pi','tahap2'));
        }
    }

    public function barul()
    {
        $list = DB::table('bayar')
                        ->Join('santri_profile','bayar.no_daftar','=','santri_profile.no_daftar')
                        ->where([
                            ['is_mukim', 1],
                            ['is_alumni', 2],
                            ['jk', 'L'],
                            ['no_mukim', Null],
                        ])->get();
        return view('admin.barul', compact('list'));
    }

    public function barulid($id)
    {
        $list = DB::table('bayar')
                        ->Join('santri_profile','bayar.no_daftar','=','santri_profile.no_daftar')
                        ->where([
                            ['is_mukim', 1],
                            ['is_alumni', 2],
                            ['jk', 'L'],
                            ['no_mukim', '!=',Null],
                        ])
                        ->orderBy('santri_profile.no_mukim','desc')
                        ->first();
        $no = $list->no_mukim + 1;
        $nomor = DB::table('santri_profile')
                    ->where('no_daftar',$id)
                    ->update([
                        'no_mukim' => $no,
                    ]);
        if($nomor){
            return redirect()->route('barul')->with('sukses','berhasil memasukkan nomor pendaftaran pondok '.$no);
        }
    }
    public function barup()
    {
        $list = DB::table('bayar')
                        ->Join('santri_profile','bayar.no_daftar','=','santri_profile.no_daftar')
                        ->where([
                            ['is_mukim', 1],
                            ['is_alumni', 2],
                            ['jk', 'P'],
                            ['no_mukim', Null],
                        ])->get();
        return view('admin.barup', compact('list'));
    }
    public function barupid($id)
    {
        $list = DB::table('bayar')
                        ->Join('santri_profile','bayar.no_daftar','=','santri_profile.no_daftar')
                        ->where([
                            ['is_mukim', 1],
                            ['is_alumni', 2],
                            ['jk', 'P'],
                            ['no_mukim', '!=',Null],
                        ])
                        ->orderBy('santri_profile.no_mukim','desc')
                        ->first();
        $no = $list->no_mukim + 1;
        $nomor = DB::table('santri_profile')
                    ->where('no_daftar',$id)
                    ->update([
                        'no_mukim' => $no,
                    ]);
        if($nomor){
            $m = "berhasil memasukkan nomor pendaftaran pondok".$no;
            return redirect()->route('barup')->with('sukses','berhasil memasukkan nomor pendaftaran pondok '.$no);
        }
    }

    public function all()
    {
        $santri = DB::table('siswa1')->get();
        return view('admin.all',compact('santri'));

    }

    public function mukiml()
    {
        $list = DB::table('bayar')
                        ->leftJoin('santri_profile', function ($join) {
                            $join->on('bayar.no_daftar', '=', 'santri_profile.no_daftar')
                                 ->whereNotNull('no_mukim')
                                ->where('is_alumni','!=',1);
                            })
                        ->get();

        return view('admin.mukiml',compact('list'));
    }

    public function rekap()
    {
        $santri = DB::table('jml2')
                        ->rightJoin('jml1','jml1.formal_name','=','Jml2.formal_name')
                        ->orderBy('order_id', 'asc')
                        ->get();
        return view('admin.rekap',compact('santri'));

    }

    //Bendahara
    public function bendahara()
    {
        return view('admin.bendahara');
    }

    public function bayar(Request $r)
    {
       $ab = DB::table('santri_profile')->where('no_daftar',$r->no_daftar);
       $aob= $ab->count();
       $b = $ab->first();
       if($aob == 1){
        $c = DB::table('bayar')->where('no_daftar',$r->no_daftar)->first();
            return view('admin.fbendahara',compact('b','c'));
        }
    }

    public function bayars(Request $r)
    {

       $a = DB::table('santri_profile')->where('no_daftar',$r->no_daftar)->first();
        if($a->is_alumni < 1){
                            return redirect('bendahara')->with('warning','Anda belum menentukan Alumni/bukan untuk no : '.$r->no_daftar);
        } else {
            $ab = DB::table('bayar')->where('no_daftar',$r->no_daftar);
            $aob= $ab->count();
            if($aob == 1){
                $b = DB::table('siswa1')->where('no_daftar',$r->no_daftar)->first();
                $c = DB::table('bayar')->where('no_daftar',$r->no_daftar)->first();
                return view('admin.fbendahara',compact('b','c'));
                }   else{
                    $d= DB::table('bayar')->insert([
                    "no_daftar" => $r->no_daftar,
                    "tgl_bayar" =>date('Y-m-d H:i:s'),
                    "nominal" => 100000,
                    "petugas" => Auth()->user()->username
                                                    ]);

                    if($d){
                            $b = DB::table('siswa1')->where('no_daftar',$r->no_daftar)->first();
                            $c = DB::table('bayar')->where('no_daftar',$r->no_daftar)->first();
                            return view('admin.fbendahara',compact('b','c'));
                            }
                    }
            }

    }

    public function sudahbayar()
    {
        $bayar = DB::table('bayar')
                        ->leftJoin('siswa1','bayar.no_daftar','=','siswa1.no_daftar')
                        ->orderBy('tgl_bayar')
                        ->get();
        return view('admin.sudahbayar',compact('bayar'));
    }
    public function belumbayar()
    {
        $all = DB::table('bayar')->select('no_daftar');
        $santri = DB::table('santri_profile')
                        ->whereNotIn('no_daftar',$all)
                        ->orderBy('no_daftar')
                        ->get();
        return view('admin.belumbayar',compact('santri'));
    }

    //insert iya alumni
    public function alumnii($id)
    {
        $alumni = DB::table('santri_profile')->where('no_daftar',$id)->update([
                'is_alumni' => 1
            ]);
        if($alumni){
                $b = DB::table('santri_profile')->where('no_daftar',$id)->first();
                $c = DB::table('bayar')->where('no_daftar',$id)->first();
            return view('admin.fbendahara',compact('b','c'));
        }

    }

    //insert tidak alumni
    public function alumnit($id)
    {
        $alumni = DB::table('santri_profile')->where('no_daftar',$id)->update([
                'is_alumni' => 2
            ]);
        if($alumni){
                $b = DB::table('santri_profile')->where('no_daftar',$id)->first();
                $c = DB::table('bayar')->where('no_daftar',$id)->first();
            return view('admin.fbendahara',compact('b','c'));
        }else{
            echo "gagal";
        }
    }

    //Sekretaris
    public function indukl()
    {
        $list = DB::table('bayar')
                        ->Join('santri_profile','bayar.no_daftar','=','santri_profile.no_daftar')
                        ->where([
                            ['is_mukim', 1],
                            ['is_alumni', 2],
                            ['jk', 'L'],
                            ['no_mukim','!=',Null],
                            ['nis','=',Null]
                        ])->orderBy ('no_mukim','asc')
                        ->get();
        return view('admin.indukl', compact('list'));
    }

    public function induklid($id)
    {
        $list = DB::table('bayar')
                        ->Join('santri_profile','bayar.no_daftar','=','santri_profile.no_daftar')
                        ->where([
                            ['is_mukim', 1],
                            ['is_alumni', 2],
                            ['jk', 'L'],
                            ['no_mukim', '!=',Null],
                            ['nis', '!=',Null],
                        ])
                        ->orderBy('santri_profile.nis','desc')
                        ->first();
        $no = $list->nis + 1;
        $nomor = DB::table('santri_profile')
                    ->where('no_daftar',$id)
                    ->update([
                        'nis' => $no,
                    ]);
        if($nomor){
            return redirect()->route('indukl')->with('sukses','berhasil memasukkan Nomor Induk  '.$no);
        }
    }
    public function indukp()
    {
        $list = DB::table('bayar')
                        ->Join('santri_profile','bayar.no_daftar','=','santri_profile.no_daftar')
                        ->where([
                            ['is_mukim', 1],
                            ['is_alumni', 2],
                            ['jk', 'P'],
                            ['no_mukim','!=',Null],
                            ['nis','=',Null]
                        ])->orderBy ('no_mukim','asc')
                        ->get();
        return view('admin.indukp', compact('list'));
    }

    public function indukpid($id)
    {
        $list = DB::table('bayar')
                        ->Join('santri_profile','bayar.no_daftar','=','santri_profile.no_daftar')
                        ->where([
                            ['is_mukim', 1],
                            ['is_alumni', 2],
                            ['jk', 'P'],
                            ['no_mukim', '!=',Null],
                            ['nis', '!=',Null],
                        ])
                        ->orderBy('santri_profile.nis','desc')
                        ->first();
        $no = $list->nis + 1;
        $nomor = DB::table('santri_profile')
                    ->where('no_daftar',$id)
                    ->update([
                        'nis' => $no,
                    ]);
        if($nomor){
            return redirect()->route('indukp')->with('sukses','berhasil memasukkan Nomor Induk  '.$no);
        }
    }

    public function viewTable()
    {
        // siswa1
        // insert VIEW siswa1 AS
        // SELECT *
        // FROM santri_profile
        // LEFT JOIN formal
        // ON santri_profile.pil1 = formal.formal_name
    }

    //report Santri Baru
    public function reportbl()
    {
        $list = DB::table('bayar')
                        ->Join('santri_profile','bayar.no_daftar','=','santri_profile.no_daftar')
                        ->where([
                            ['is_mukim', 1],
                            ['is_alumni', 2],
                            ['jk', 'L'],
                        ])->orderBy ('no_mukim','asc')
                        ->get();
        return view('admin.report', compact('list'));
    }
    public function reportbp()
    {
        $list = DB::table('bayar')
                        ->Join('santri_profile','bayar.no_daftar','=','santri_profile.no_daftar')
                        ->where([
                            ['is_mukim', 1],
                            ['is_alumni', 2],
                            ['jk', 'P'],
                        ])->orderBy ('no_mukim','asc')
                        ->get();
        return view('admin.report', compact('list'));
    }
    public function reportal()
    {
        $list = DB::table('bayar')
                        ->Join('santri_profile','bayar.no_daftar','=','santri_profile.no_daftar')
                        ->where([
                            ['is_mukim', 1],
                            ['is_alumni', 1],
                            ['jk', 'L'],
                        ])->orderBy ('no_mukim','asc')
                        ->get();
        return view('admin.report', compact('list'));
    }
    public function reportap()
    {
        $list = DB::table('bayar')
                        ->Join('santri_profile','bayar.no_daftar','=','santri_profile.no_daftar')
                        ->where([
                            ['is_mukim', 1],
                            ['is_alumni', 1],
                            ['jk', 'P'],
                        ])->orderBy ('no_mukim','asc')
                        ->get();
        return view('admin.report', compact('list'));
    }
    public function reportll()
    {
        $list = DB::table('bayar')
                        ->Join('santri_profile','bayar.no_daftar','=','santri_profile.no_daftar')
                        ->where([
                            ['is_mukim', 0],
                            ['jk', 'L'],
                        ])->orderBy ('no_mukim','asc')
                        ->get();
        return view('admin.reportt', compact('list'));
    }
    public function reportlp()
    {
        $list = DB::table('bayar')
                        ->Join('santri_profile','bayar.no_daftar','=','santri_profile.no_daftar')
                        ->where([
                            ['is_mukim', 0],
                            ['jk', 'P'],
                        ])->orderBy ('no_mukim','asc')
                        ->get();
        return view('admin.reportt', compact('list'));
    }

    public function reportol()
    {
        $list = DB::table('bayar')
                        ->Join('santri_profile','bayar.no_daftar','=','santri_profile.no_daftar')
                        ->where('jk','L')
                        ->wherenotnull('tgl_keluar')
                        ->orderBy ('no_mukim','asc')
                        ->get();
        return view('admin.reportt', compact('list'));
    }

    public function reportop()
    {
        $list = DB::table('bayar')
                        ->Join('santri_profile','bayar.no_daftar','=','santri_profile.no_daftar')
                        ->where('jk','P')
                        ->wherenotnull('tgl_keluar')
                        ->orderBy ('no_mukim','asc')
                        ->get();
        return view('admin.reportt', compact('list'));
    }
    public function reportnl()
    {
        $date = date('Y-m-d');
        $list = DB::table('bayar')
                        ->Join('santri_profile','bayar.no_daftar','=','santri_profile.no_daftar')
                        ->where([
                            ['tgl_bayar', 'like', $date.'%'],
                            ['jk', 'L'],
                        ])
                        ->orderBy ('no_mukim','asc')
                        ->get();
        return view('admin.reportt', compact('list'));
    }
    public function reportnp()
    {
        $date = date('Y-m-d');
        $list = DB::table('bayar')
                        ->Join('santri_profile','bayar.no_daftar','=','santri_profile.no_daftar')
                        ->where([
                            ['tgl_bayar', 'like',  $date.'%'],
                            ['jk', 'P'],
                        ])
                        ->orderBy ('no_mukim','asc')
                        ->get();
        return view('admin.reportt', compact('list'));
    }

    public function petugas()
{
        $ins1 = DB::table('users')->insert([
            'name'  => 'MTs Al-Yasini',
            'username' => 'admin_mts',
            'id_user' => 4,
            'jabatan' => 'Admin',
            'email' => 'mtsalyasini@gmail.com',
            'password'  => bcrypt('R4hasiaMT5'),
            'id_jabatan' => 'MTs Al-Yasini'
    ]);
        $ins2 = DB::table('users')->insert([
            'name'  => 'SMPU Al-Yasini',
            'username' => 'admin_smpu',
            'id_user' => 4,
            'jabatan' => 'Admin',
            'email' => 'smpualyasini@gmail.com',
            'password'  => bcrypt(' '),
            'id_jabatan' => 'SMPU Al-Yasini'
    ]);
        $ins3 = DB::table('users')->insert([
            'name'  => 'SMPN 2 Kraton',
            'username' => 'admin_smpn',
            'id_user' => 4,
            'jabatan' => 'Admin',
            'email' => 'smpn2kraton@gmail.com',
            'password'  => bcrypt('R4hasi@5mpN'),
            'id_jabatan' => 'SMPN 2 Kraton'
    ]);
        $ins4 = DB::table('users')->insert([
            'name'  => 'MAN 2 Pasuruan',
            'username' => 'admin_man',
            'id_user' => 4,
            'jabatan' => 'Admin',
            'email' => 'man2pasuruan@gmail.com',
            'password'  => bcrypt('R4ha51aM@n'),
            'id_jabatan' => 'MAN 2 Pasuruan'
    ]);
        $ins5 = DB::table('users')->insert([
            'name'  => 'SMK Leader Al-Yasini',
            'username' => 'admin_smkl',
            'id_user' => 4,
            'jabatan' => 'Admin',
            'email' => 'smkalyasini@gmail.com',
            'password'  => bcrypt('R4hasia5mkL'),
            'id_jabatan' => 'SMK Leader Al-Yasini'
    ]);
        $ins6 = DB::table('users')->insert([
            'name'  => 'SMKN 1 Wonorejo',
            'username' => 'admin_smkn',
            'id_user' => 4,
            'jabatan' => 'Admin',
            'email' => 'smknalyasini@gmail.com',
            'password'  => bcrypt('R4hasi@5Mkn'),
            'id_jabatan' => 'SMKN 1 Wonorejo'
    ]);
        $ins7 = DB::table('users')->insert([
            'name'  => 'SMA Excellent Al-Yasini',
            'username' => 'admin_sma',
            'id_user' => 4,
            'jabatan' => 'Admin',
            'email' => 'smaalyasini@gmail.com',
            'password'  => bcrypt('R4hasi@5Ma'),
            'id_jabatan' => 'SMA Excellent Al-Yasini'
    ]);


            if($ins1){echo "sukses1";};
            if($ins2){echo "sukses2";};
            if($ins3){echo "sukses3";};
            if($ins4){echo "sukses4";};
            if($ins5){echo "sukses5";};
            if($ins6){echo "sukses6";};
            if($ins7){echo "sukses7";};
}

     //Edit
    public function edit()
    {
        return view('admin.edit');
    }

    public function edits(Request $r)
    {
       $ab = DB::table('santri_profile')->where('no_daftar',$r->no_daftar);
       $aob= $ab->count();
       $b = $ab->first();
       if($aob == 1){

            return view('admin.fedit',compact('b'));
        }
    }

    public function fedit(Request $r)
    {
       $ab = DB::table('santri_profile')
                    ->where('no_daftar',$r->no_daftar);
       $aob= $ab->count();
       $b = $ab->first();
       if($aob == 1){
            $p = "home";
            return view('admin.form',compact('b','p'));
        }
    }

    public function simpan(Request $r)
    {
        $cek = DB::table('santri_profile')
                    ->where('no_daftar',$r->no_daftar)
                    ->update([
                    'kk'=>$r->kk,
                    'nik'=>$r->nik,
                    'nisn'=>$r->nisn,
                    'nama'=>$r->nama,
                    'jk'=>$r->jk,
                    'tmp_lahir'=>$r->tmp_lahir,
                    'tgl_lahir'=>$r->thn.'-'.$r->bln.'-'.$r->tgl,
                    'dusun'=>$r->dusun,
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
                    'is_alumni'=>$r->is_alumni,
                    'tgl_daftar'=> date("Y-n-d"),
                    'tgl_update'=>date("Y-n-d"),
                ]);

            if($cek){
                $d = DB::table('santri_profile')->where('nisn',$r->nisn)->first();
                return redirect()->route('edit')->with('sukses','Profile ' .$r->nama. ' berhasil di update !');

            } else{
                $d = DB::table('santri_profile')->where('nisn',$r->nisn)->first();
                return redirect()->route('edit')->with('gagal','Profile ' .$r->nama. ' gagal di update !');
            }
    }

    public function logout()
    {
        Auth()->logout();
        return redirect('/');
    }

    public function detail(Request $r)
    {
        $santri = DB::table('bayar')
                    ->Join('santri_profile','bayar.no_daftar','=','santri_profile.no_daftar')
                    ->where('pil1', '=', $r->lbg)
                    ->orderBy('tgl_bayar','asc')
                    ->get();
            return view('admin.lembaga', compact('santri'));
    }

    public function profile()
    {
        $p = "profile";
        $users = Auth()->user()->username;
        $user = substr($users,2);
        $d = DB::table('santri_profile')->where('no_daftar',$user)->first();
        return view('test.profile', compact('d','p', 'date'));
    }

    public function persiapan()
    {
        $p ="test";
        $date = date("d-m-Y H:i:s");
        $users = Auth()->user()->username;
        $user = substr($users,2);
        $d = DB::table('siswa1')
                    ->leftjoin('kelulusan','kelulusan.no_daftar','=','siswa1.no_daftar')
                    ->where('siswa1.no_daftar',$user)->first();
        $a = DB::table('user_jawaban')->where('user_id',$user);
        $ao = $a->count();
        if($ao == 0){
            return view('test.persiapan', compact('p','date','d'));
        }else{
            if($date >= "09-06-2020 17:00:00"){
                return view('test.lulus', compact('p','d'));
            }else{
                return view('test.sudahmengerjakan', compact('p'));
            }
        }
    }

    public function soal()
    {
        $p = "test";
        $date = "Y-m-d H:i:s";
        $users = Auth()->user()->username;
        $user = substr($users,2);
        //sltp
        $indop = DB::table('soal')->where('soal_id','101')->orderBy(DB::raw('RAND()'))->get();
        $inggrisp = DB::table('soal')->where('soal_id','102')->orderBy(DB::raw('RAND()'))->get();
        $ipap = DB::table('soal')->where('soal_id','103')->orderBy(DB::raw('RAND()'))->get();
        $mtkp = DB::table('soal')->where('soal_id','104')->orderBy(DB::raw('RAND()'))->get();
        $paip = DB::table('soal')->where('soal_id','105')->orderBy(DB::raw('RAND()'))->get();

        //sltap
        $indoa = DB::table('soal')->where('soal_id','201')->orderBy(DB::raw('RAND()'))->get();
        $inggrisa = DB::table('soal')->where('soal_id','202')->orderBy(DB::raw('RAND()'))->get();
        $ipaa = DB::table('soal')->where('soal_id','203')->orderBy(DB::raw('RAND()'))->get();
        $mtka = DB::table('soal')->where('soal_id','204')->orderBy(DB::raw('RAND()'))->get();
        $paia = DB::table('soal')->where('soal_id','205')->orderBy(DB::raw('RAND()'))->get();

        $l = DB::table('siswa1')->where('no_daftar',$user)->first();
        $grade = $l->order_id;
        $lbg = strtoupper($l->pil1);
        if($grade >=2 && $grade <= 4){
            return view('test.sltp2020', compact('indop','inggrisp','ipap','mtkp','paip','p','user','date','lbg'));
        }elseif($grade >= 5 && $grade <= 8){
            return view('test.slta2020', compact('indoa','inggrisa','ipaa','mtka','paia','p','user','date','lbg'));
        }else{
            return view ('test.notest',compact('p','lbg'));
        }

    }
    public function draftsoal()
    {
        $p = "test";
        $date = "Y-m-d H:i:s";
        $user = Auth()->user()->username;
        //sltp
        $indop = DB::table('soal')->where('soal_id','101')->orderBy(DB::raw('RAND()'))->get();
        $inggrisp = DB::table('soal')->where('soal_id','102')->orderBy(DB::raw('RAND()'))->get();
        $ipap = DB::table('soal')->where('soal_id','103')->orderBy(DB::raw('RAND()'))->get();
        $mtkp = DB::table('soal')->where('soal_id','104')->orderBy(DB::raw('RAND()'))->get();
        $paip = DB::table('soal')->where('soal_id','105')->orderBy(DB::raw('RAND()'))->get();

        //sltap
        $indoa = DB::table('soal')->where('soal_id','201')->orderBy(DB::raw('RAND()'))->get();
        $inggrisa = DB::table('soal')->where('soal_id','202')->orderBy(DB::raw('RAND()'))->get();
        $ipaa = DB::table('soal')->where('soal_id','203')->orderBy(DB::raw('RAND()'))->get();
        $mtka = DB::table('soal')->where('soal_id','204')->orderBy(DB::raw('RAND()'))->get();
        $paia = DB::table('soal')->where('soal_id','205')->orderBy(DB::raw('RAND()'))->get();

        $grade = Auth()->user()->jabatan;
        $lbg = "SEKOLAH FORMAL";
        if($grade == "pembuat soal sltp"){
            return view('test.sltp2020x', compact('indop','inggrisp','ipap','mtkp','paip','p','user','date','lbg'));
        }elseif($grade == "pembuat soal slta"){
            return view('test.slta2020x', compact('indoa','inggrisa','ipaa','mtka','paia','p','user','date','lbg'));
        }else{
            return view ('test.notest',compact('p','lbg'));
        }

    }

    public function test(Request $request)
    {
        # code...
        $p = "test";
        $date = date("Y-d-m H:i:s");
        foreach($request->soal_id as $key => $value)
            {
                $jawab = $request->soal_no[$key];
                DB::table('user_jawaban')->insert([
                'user_id' => $request->user[$key],
                'soal_id' => $request->soal_id[$key],
                'soal_no' => $request->soal_no[$key],
                'jawaban' => $request->$jawab,
                'created_at' => $date,
                ]);
            }
            return view('test.sudahmengerjakan', compact('p'));

        // return view('test.infotest', compact('date','p','date'));
    }

    public function nilai(Request $r)
    {
        $lbg = $r->lbg;
        $jk = $r->jk;
        $list = DB::table('siswa1')
                    ->leftjoin('nilai','user_id','=','no_daftar')
                    ->leftjoin('kelulusan','kelulusan.no_daftar','=','siswa1.no_daftar')
                    ->where([
                        ['pil1', $lbg],
                        ['jk', $jk],
                    ])->orderBy('rata2','DESC')
                    ->get();
        return view('admin.nilai', compact('list'));
    }

    public function nilaitotal(Request $r)
    {
        $lbg = $r->lbg;
        $jk = $r->jk;
        $list = DB::table('siswa1')
                    ->leftjoin('nilai','user_id','=','no_daftar')
                    ->where([
                        ['pil1', $lbg],
                    ])->orderBy('rata2','asc')
                    ->get();
        return view('admin.nilai', compact('list'));
    }

    public function totalhasil1()
    {
        $santri = DB::table('jml2')
        ->rightJoin('jml1','jml1.formal_name','=','jml2.formal_name')
        ->orderBy('jml2.order_id', 'asc')
        ->get();

        $total = DB::table('total_pendaftar')->first();
        return view('admin.totalhasil1',compact('santri','total'));
    }

    public function nilai1(Request $r)
    {
        $lbg = $r->lbg;
        $jk = $r->jk;
        $all = DB::table('kelulusan')->select('no_daftar');
        $list = DB::table('siswa1')
                    ->leftjoin('nilai','user_id','=','no_daftar')
                    ->whereNotIn('no_daftar',$all)
                    ->where([
                        ['pil1', $lbg],
                        ['jk', $jk],
                    ])->orderBy('rata2','DESC')
                    ->get();
        return view('admin.nilai1', compact('list'));
    }

    public function nilaitotal1(Request $r)
    {
        $lbg = $r->lbg;
        $jk = $r->jk;
        $all = DB::table('kelulusan')->select('no_daftar');
        $list = DB::table('siswa1')
                    ->leftjoin('nilai','user_id','=','no_daftar')
                    ->whereNotIn('no_daftar',$all)
                    ->where([
                        ['pil1', $lbg],
                    ])->orderBy('rata2','asc')
                    ->get();
        return view('admin.nilai', compact('list'));
    }

    public function kelulusan(Request $r)
    {
        $p = "test";
        $date = date("Y-d-m H:i:s");
        $lbg = $r->lbg;
        $jk = $r->jk;
        $all = DB::table('kelulusan')->select('no_daftar');
        $a = DB::table('kelulusan')->where('no_daftar',$r->no_daftar);
        $ao = $a->count();
        if($ao == 0){
         $l = DB::table('kelulusan')->insert([
                'no_daftar' => $r->no_daftar,
                'status' => $r->status,
                ]);
                if($l){
                    if($jk != null){
                        $list = DB::table('siswa1')
                                    ->leftjoin('nilai','user_id','=','no_daftar')
                                    ->whereNotIn('no_daftar',$all)
                                    ->where([
                                        ['pil1', $lbg],
                                        ['jk', $jk],
                                            ])->orderBy('rata2','DESC')
                                    ->get();
                                    return view('admin.nilai1', compact('list'));
                    }else{
                        $list = DB::table('siswa1')
                                    ->leftjoin('nilai','user_id','=','no_daftar')
                                    ->whereNotIn('no_daftar',$all)
                                    ->where([
                                        ['pil1', $lbg],
                                            ])
                                    ->orderBy('rata2','DESC')
                                    ->get();
                        return view('admin.nilai1', compact('list'));
                    }
                }
        }else{
            echo"sudah ada kelulusannya";
        }

    }

    public function hapuskelulusan(Request $r)
    {
        $d = DB::table('kelulusan')
                ->where('no_daftar',$r->no_daftar)
                ->delete();
        if($d){
            return redirect()->route('admin');
        }
    }

    public function out(Request $r)
    {
       $ab = DB::table('siswa1')->where('no_daftar',$r->no_daftar);
       $aob= $ab->count();
       $b = $ab->first();
       if($aob == 1){
            return view('admin.fout',compact('b'));
        }
    }

    public function outx(Request $r)
    {
        $x = DB::table('santri_profile')->where('no_daftar',$r->no_daftar)->update(['tgl_keluar'=> now()]);
        if($x){
            $b = DB::table('siswa1')->where('no_daftar',$r->no_daftar)->first();
            return view('admin.fout',compact('b'));
        }
    }

    //lembaga
    // public function lembaga()
    // {
    //    $lembaga = Auth::user()->id_jabatan
    //         return view('admin.form',compact('b','p'));
    //     }
    // }
}
