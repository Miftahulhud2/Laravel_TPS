<?php

namespace App\Http\Controllers;

use PhpOffice\PhpSpreadsheet\Exception;
use PHPExcel;
use App\Models\TPS;
use App\Models\user;
use PHPExcel_IOFactory;
use App\Exports\DataExport;
use App\Exports\SuaraExport;
use Illuminate\Http\Request;
use PHPExcel_Style_Alignment;
use App\Exports\LaporanExport;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    //
    public function export(TPS $tps)
    {
        $provinsi = $tps->provinsi;
        $kabupaten = $tps->kabupaten;
        $kecamatan = $tps->kecamatan;
        $desa = $tps->desa;
        $daerah = collect([$provinsi, $kabupaten, $kecamatan, $desa]);

        $datatps = $tps->where('desa',$tps->desa)->get();
        $no = $datatps->count();
        $nomor = 3 + $no;
        // dpt lk
        $dpts_lk = [];
        foreach ($datatps as $data){
            $dpt = DB::table('pencoblos')
            ->where('jns_kelamin','laki-laki')
            ->where('jns_dpt','DPT')
            ->where('provinsi',$data->provinsi)
            ->where('kabupaten',$data->kabupaten)
            ->where('kecamatan',$data->kecamatan)
            ->where('desa',$data->desa)
            ->where('jalan',$data->jalan)
            ->where('rt',$data->rt)
            ->where('rw',$data->rw)
            ->count();
            $dpts_lk[] = $dpt;
        }
        $p = array_sum($dpts_lk);
        $dpts_lk[] = $p;

        // dpt pr
        $dpts_pr = [];
        foreach ($datatps as $data){
            $dpt = DB::table('pencoblos')
            ->where('jns_kelamin','perempuan')
            ->where('jns_dpt','DPT')
            ->where('provinsi',$data->provinsi)
            ->where('kabupaten',$data->kabupaten)
            ->where('kecamatan',$data->kecamatan)
            ->where('desa',$data->desa)
            ->where('jalan',$data->jalan)
            ->where('rt',$data->rt)
            ->where('rw',$data->rw)
            ->count();
            $dpts_pr[] = $dpt;
        }
        $p = array_sum($dpts_pr);
        $dpts_pr[] = $p;
        // dpt jum
        $dpts = [];
        foreach ($datatps as $data){
            $dpt = DB::table('pencoblos')
            ->where('jns_dpt','DPT')
            ->where('provinsi',$data->provinsi)
            ->where('kabupaten',$data->kabupaten)
            ->where('kecamatan',$data->kecamatan)
            ->where('desa',$data->desa)
            ->where('jalan',$data->jalan)
            ->where('rt',$data->rt)
            ->where('rw',$data->rw)
            ->count();
            $dpts[] = $dpt;
        }
        $p = array_sum($dpts);
        $dpts[] = $p;

        // dpph
        $dpph_lk = [];
        foreach ($datatps as $data){
            $dpt = DB::table('pencoblos')
            ->where('jns_kelamin','laki-laki')
            ->where('jns_dpt','DPPh')
            ->where('provinsi',$data->provinsi)
            ->where('kabupaten',$data->kabupaten)
            ->where('kecamatan',$data->kecamatan)
            ->where('desa',$data->desa)
            ->where('jalan',$data->jalan)
            ->where('rt',$data->rt)
            ->where('rw',$data->rw)
            ->count();
            $dpph_lk[] = $dpt;
        }
        $p = array_sum($dpph_lk);
        $dpph_lk[] = $p;

        // dpph pr
        $dpph_pr = [];
        foreach ($datatps as $data){
            $dpt = DB::table('pencoblos')
            ->where('jns_kelamin','perempuan')
            ->where('jns_dpt','DPPh')
            ->where('provinsi',$data->provinsi)
            ->where('kabupaten',$data->kabupaten)
            ->where('kecamatan',$data->kecamatan)
            ->where('desa',$data->desa)
            ->where('jalan',$data->jalan)
            ->where('rt',$data->rt)
            ->where('rw',$data->rw)
            ->count();
            $dpph_pr[] = $dpt;
        }
        $p = array_sum($dpph_pr);
        $dpph_pr[] = $p;

        // dpph jum
        $dpphs = [];
        foreach ($datatps as $data){
            $dpt = DB::table('pencoblos')
            ->where('jns_dpt','DPTb')
            ->where('provinsi',$data->provinsi)
            ->where('kabupaten',$data->kabupaten)
            ->where('kecamatan',$data->kecamatan)
            ->where('desa',$data->desa)
            ->where('jalan',$data->jalan)
            ->where('rt',$data->rt)
            ->where('rw',$data->rw)
            ->count();
            $dpphs[] = $dpt;
        }
        $p = array_sum($dpphs);
        $dpphs[] = $p;

        // dptb lk
        $dptb_lk = [];
        foreach ($datatps as $data){
            $dpt = DB::table('pencoblos')
            ->where('jns_kelamin','laki-laki')
            ->where('jns_dpt','DPTb')
            ->where('provinsi',$data->provinsi)
            ->where('kabupaten',$data->kabupaten)
            ->where('kecamatan',$data->kecamatan)
            ->where('desa',$data->desa)
            ->where('jalan',$data->jalan)
            ->where('rt',$data->rt)
            ->where('rw',$data->rw)
            ->count();
            $dptb_lk[] = $dpt;
        }
        $p = array_sum($dptb_lk);
        $dptb_lk[] = $p;

        // dptb perempuan
        $dptb_pr = [];
        foreach ($datatps as $data){
            $dpt = DB::table('pencoblos')
            ->where('jns_kelamin','perempuan')
            ->where('jns_dpt','DPTb')
            ->where('provinsi',$data->provinsi)
            ->where('kabupaten',$data->kabupaten)
            ->where('kecamatan',$data->kecamatan)
            ->where('desa',$data->desa)
            ->where('jalan',$data->jalan)
            ->where('rt',$data->rt)
            ->where('rw',$data->rw)
            ->count();
            $dptb_pr[] = $dpt;
        }
        $p = array_sum($dptb_pr);
        $dptb_pr[] = $p;

        // dptb jumlah
        $dptb_s = [];
        foreach ($datatps as $data){
            $dpt = DB::table('pencoblos')
            ->where('jns_dpt','DPTb')
            ->where('provinsi',$data->provinsi)
            ->where('kabupaten',$data->kabupaten)
            ->where('kecamatan',$data->kecamatan)
            ->where('desa',$data->desa)
            ->where('jalan',$data->jalan)
            ->where('rt',$data->rt)
            ->where('rw',$data->rw)
            ->count();
            $dptb_s[] = $dpt;
        }
        $p = array_sum($dptb_s);
        $dptb_s[] = $p;

        // jumlah pencoblos laki
        $pencoblos_lk = [];
        foreach ($datatps as $data){
            $dpt = DB::table('pencoblos')
            ->where('jns_kelamin', 'laki-laki')
            ->where('provinsi',$data->provinsi)
            ->where('kabupaten',$data->kabupaten)
            ->where('kecamatan',$data->kecamatan)
            ->where('desa',$data->desa)
            ->where('jalan',$data->jalan)
            ->where('rt',$data->rt)
            ->where('rw',$data->rw)
            ->count();
            $pencoblos_lk[] = $dpt;
        }
        $p = array_sum($pencoblos_lk);
        $pencoblos_lk[] = $p;

        // pencoblos pr
        $pencoblos_pr = [];
        foreach ($datatps as $data){
            $dpt = DB::table('pencoblos')
            ->where('jns_kelamin', 'perempuan')
            ->where('provinsi',$data->provinsi)
            ->where('kabupaten',$data->kabupaten)
            ->where('kecamatan',$data->kecamatan)
            ->where('desa',$data->desa)
            ->where('jalan',$data->jalan)
            ->where('rt',$data->rt)
            ->where('rw',$data->rw)
            ->count();
            $pencoblos_pr[] = $dpt;
        }
        $p = array_sum($pencoblos_pr);
        $pencoblos_pr[] = $p;

        // pencoblos jumlah
        $pencoblos_s = [];
        foreach ($datatps as $data){
            $dpt = DB::table('pencoblos')
            ->where('provinsi',$data->provinsi)
            ->where('kabupaten',$data->kabupaten)
            ->where('kecamatan',$data->kecamatan)
            ->where('desa',$data->desa)
            ->where('jalan',$data->jalan)
            ->where('rt',$data->rt)
            ->where('rw',$data->rw)
            ->count();
            $pencoblos_s[] = $dpt;
        }
        $p = array_sum($pencoblos_s);
        $pencoblos_s[] = $p;


        // hadir pengguna hak pilih dpt lk
        $hadir_dpt_lk = [];
        foreach ($datatps as $data){
            $dpt = DB::table('pencoblos')
            ->where('hadir', 1)
            ->where('jns_kelamin', 'laki-laki')
            ->where('jns_dpt', 'DPT')
            ->where('provinsi',$data->provinsi)
            ->where('kabupaten',$data->kabupaten)
            ->where('kecamatan',$data->kecamatan)
            ->where('desa',$data->desa)
            ->where('jalan',$data->jalan)
            ->where('rt',$data->rt)
            ->where('rw',$data->rw)
            ->count();
            $hadir_dpt_lk[] = $dpt;
        }
        $p = array_sum($hadir_dpt_lk);
        $hadir_dpt_lk[] = $p;

        // hadir pengguna hak pilih dpt pr
        $hadir_dpt_pr = [];
        foreach ($datatps as $data){
            $dpt = DB::table('pencoblos')
            ->where('hadir', 1)
            ->where('jns_kelamin', 'perempuan')
            ->where('jns_dpt', 'DPT')
            ->where('provinsi',$data->provinsi)
            ->where('kabupaten',$data->kabupaten)
            ->where('kecamatan',$data->kecamatan)
            ->where('desa',$data->desa)
            ->where('jalan',$data->jalan)
            ->where('rt',$data->rt)
            ->where('rw',$data->rw)
            ->count();
            $hadir_dpt_pr[] = $dpt;
        }
        $p = array_sum($hadir_dpt_pr);
        $hadir_dpt_pr[] = $p;


        // hadir pengguna hak pilih dpt jum
        $hadir_dpt_jum = [];
        foreach ($datatps as $data){
            $dpt = DB::table('pencoblos')
            ->where('hadir', 1)
            ->where('jns_dpt', 'DPT')
            ->where('provinsi',$data->provinsi)
            ->where('kabupaten',$data->kabupaten)
            ->where('kecamatan',$data->kecamatan)
            ->where('desa',$data->desa)
            ->where('jalan',$data->jalan)
            ->where('rt',$data->rt)
            ->where('rw',$data->rw)
            ->count();
            $hadir_dpt_jum[] = $dpt;
        }
        $p = array_sum($hadir_dpt_jum);
        $hadir_dpt_jum[] = $p;

        // hadir pengguna hak pilih dpph lk
        $hadir_dpph_lk = [];
        foreach ($datatps as $data){
            $dpt = DB::table('pencoblos')
            ->where('hadir', 1)
            ->where('jns_kelamin', 'laki-laki')
            ->where('jns_dpt', 'DPPh')
            ->where('provinsi',$data->provinsi)
            ->where('kabupaten',$data->kabupaten)
            ->where('kecamatan',$data->kecamatan)
            ->where('desa',$data->desa)
            ->where('jalan',$data->jalan)
            ->where('rt',$data->rt)
            ->where('rw',$data->rw)
            ->count();
            $hadir_dpph_lk[] = $dpt;
        }
        $p = array_sum($hadir_dpph_lk);
        $hadir_dpph_lk[] = $p;

        // hadir pengguna hak pilih dpph pr
        $hadir_dpph_pr = [];
        foreach ($datatps as $data){
            $dpt = DB::table('pencoblos')
            ->where('hadir', 1)
            ->where('jns_kelamin', 'perempuan')
            ->where('jns_dpt', 'DPPh')
            ->where('provinsi',$data->provinsi)
            ->where('kabupaten',$data->kabupaten)
            ->where('kecamatan',$data->kecamatan)
            ->where('desa',$data->desa)
            ->where('jalan',$data->jalan)
            ->where('rt',$data->rt)
            ->where('rw',$data->rw)
            ->count();
            $hadir_dpph_pr[] = $dpt;
        }
        $p = array_sum($hadir_dpph_pr);
        $hadir_dpph_pr[] = $p;

        // hadir pengguna hak pilih dpt jum
        $hadir_dpph_jum = [];
        foreach ($datatps as $data){
            $dpt = DB::table('pencoblos')
            ->where('hadir', 1)
            ->where('jns_dpt', 'DPPh')
            ->where('provinsi',$data->provinsi)
            ->where('kabupaten',$data->kabupaten)
            ->where('kecamatan',$data->kecamatan)
            ->where('desa',$data->desa)
            ->where('jalan',$data->jalan)
            ->where('rt',$data->rt)
            ->where('rw',$data->rw)
            ->count();
            $hadir_dpph_jum[] = $dpt;
        }
        $p = array_sum($hadir_dpph_jum);
        $hadir_dpph_jum[] = $p;

        // hadir pengguna hak pilih dptb lk
        $hadir_dptb_lk = [];
        foreach ($datatps as $data){
            $dpt = DB::table('pencoblos')
            ->where('hadir', 1)
            ->where('jns_kelamin', 'laki-laki')
            ->where('jns_dpt', 'DPTb')
            ->where('provinsi',$data->provinsi)
            ->where('kabupaten',$data->kabupaten)
            ->where('kecamatan',$data->kecamatan)
            ->where('desa',$data->desa)
            ->where('jalan',$data->jalan)
            ->where('rt',$data->rt)
            ->where('rw',$data->rw)
            ->count();
            $hadir_dptb_lk[] = $dpt;
        }
        $p = array_sum($hadir_dptb_lk);
        $hadir_dptb_lk[] = $p;

        // hadir pengguna hak pilih dptb pr
        $hadir_dptb_pr = [];
        foreach ($datatps as $data){
            $dpt = DB::table('pencoblos')
            ->where('hadir', 1)
            ->where('jns_kelamin', 'perempuan')
            ->where('jns_dpt', 'DPTb')
            ->where('provinsi',$data->provinsi)
            ->where('kabupaten',$data->kabupaten)
            ->where('kecamatan',$data->kecamatan)
            ->where('desa',$data->desa)
            ->where('jalan',$data->jalan)
            ->where('rt',$data->rt)
            ->where('rw',$data->rw)
            ->count();
            $hadir_dptb_pr[] = $dpt;
        }
        $p = array_sum($hadir_dptb_pr);
        $hadir_dptb_pr[] = $p;

        // hadir pengguna hak pilih dptb jum
        $hadir_dptb_jum = [];
        foreach ($datatps as $data){
            $dpt = DB::table('pencoblos')
            ->where('hadir', 1)
            ->where('jns_dpt', 'DPTb')
            ->where('provinsi',$data->provinsi)
            ->where('kabupaten',$data->kabupaten)
            ->where('kecamatan',$data->kecamatan)
            ->where('desa',$data->desa)
            ->where('jalan',$data->jalan)
            ->where('rt',$data->rt)
            ->where('rw',$data->rw)
            ->count();
            $hadir_dptb_jum[] = $dpt;
        }
        $p = array_sum($hadir_dptb_jum);
        $hadir_dptb_jum[] = $p;





        // jumlah hadir pengguna hak pilih lk
        $hadir_s_lk = [];
        foreach ($datatps as $data){
            $dpt = DB::table('pencoblos')
            ->where('hadir', 1)
            ->where('jns_kelamin', 'laki-laki')
            ->where('provinsi',$data->provinsi)
            ->where('kabupaten',$data->kabupaten)
            ->where('kecamatan',$data->kecamatan)
            ->where('desa',$data->desa)
            ->where('jalan',$data->jalan)
            ->where('rt',$data->rt)
            ->where('rw',$data->rw)
            ->count();
            $hadir_s_lk[] = $dpt;
        }
        $p = array_sum($hadir_s_lk);
        $hadir_s_lk[] = $p;

        // jumlah hadir pengguna hak pilih pr
        $hadir_s_pr = [];
        foreach ($datatps as $data){
            $dpt = DB::table('pencoblos')
            ->where('hadir', 1)
            ->where('jns_kelamin', 'perempuan')
            ->where('provinsi',$data->provinsi)
            ->where('kabupaten',$data->kabupaten)
            ->where('kecamatan',$data->kecamatan)
            ->where('desa',$data->desa)
            ->where('jalan',$data->jalan)
            ->where('rt',$data->rt)
            ->where('rw',$data->rw)
            ->count();
            $hadir_s_pr[] = $dpt;
        }
        $p = array_sum($hadir_s_pr);
        $hadir_s_pr[] = $p;

        // jumlah hadir pengguna hak pilih jum
        $hadir_s_jum = [];
        foreach ($datatps as $data){
            $dpt = DB::table('pencoblos')
            ->where('hadir', 1)
            ->where('provinsi',$data->provinsi)
            ->where('kabupaten',$data->kabupaten)
            ->where('kecamatan',$data->kecamatan)
            ->where('desa',$data->desa)
            ->where('jalan',$data->jalan)
            ->where('rt',$data->rt)
            ->where('rw',$data->rw)
            ->count();
            $hadir_s_jum[] = $dpt;
        }
        $p = array_sum($hadir_s_jum);
        $hadir_s_jums = $p;


        $disabilitas_lk =[];
        foreach ($datatps as $data){
            $dpt = DB::table('pencoblos')
            ->where('disabilitas', 1)
            ->where('jns_kelamin', 'laki-laki')
            ->where('provinsi',$data->provinsi)
            ->where('kabupaten',$data->kabupaten)
            ->where('kecamatan',$data->kecamatan)
            ->where('desa',$data->desa)
            ->where('jalan',$data->jalan)
            ->where('rt',$data->rt)
            ->where('rw',$data->rw)
            ->count();
            $disabilitas_lk[] = $dpt;
        }
        $p = array_sum($disabilitas_lk);
        $disabilitas_lk[] = $p;


        $disabilitas_pr =[];
        foreach ($datatps as $data){
            $dpt = DB::table('pencoblos')
            ->where('disabilitas', 1)
            ->where('jns_kelamin', 'perempuan')
            ->where('provinsi',$data->provinsi)
            ->where('kabupaten',$data->kabupaten)
            ->where('kecamatan',$data->kecamatan)
            ->where('desa',$data->desa)
            ->where('jalan',$data->jalan)
            ->where('rt',$data->rt)
            ->where('rw',$data->rw)
            ->count();
            $disabilitas_pr[] = $dpt;
        }
        $p = array_sum($disabilitas_pr);
        $disabilitas_pr[] = $p;

        $disabilitas_jum =[];
        foreach ($datatps as $data){
            $dpt = DB::table('pencoblos')
            ->where('disabilitas', 1)
            ->where('provinsi',$data->provinsi)
            ->where('kabupaten',$data->kabupaten)
            ->where('kecamatan',$data->kecamatan)
            ->where('desa',$data->desa)
            ->where('jalan',$data->jalan)
            ->where('rt',$data->rt)
            ->where('rw',$data->rw)
            ->count();
            $disabilitas_jum[] = $dpt;
        }
        $p = array_sum($disabilitas_jum);
        $disabilitas_jum[] = $p;

        // hadir disabilitas
        $h_disabilitas_lk =[];
        foreach ($datatps as $data){
            $dpt = DB::table('pencoblos')
            ->where('disabilitas', 1)
            ->where('hadir', 1)
            ->where('jns_kelamin', 'laki-laki')
            ->where('provinsi',$data->provinsi)
            ->where('kabupaten',$data->kabupaten)
            ->where('kecamatan',$data->kecamatan)
            ->where('desa',$data->desa)
            ->where('jalan',$data->jalan)
            ->where('rt',$data->rt)
            ->where('rw',$data->rw)
            ->count();
            $h_disabilitas_lk[] = $dpt;
        }
        $p = array_sum($h_disabilitas_lk);
        $h_disabilitas_lk[] = $p;

        $h_disabilitas_pr =[];
        foreach ($datatps as $data){
            $dpt = DB::table('pencoblos')
            ->where('disabilitas', 1)
            ->where('hadir', 1)
            ->where('jns_kelamin', 'perempuan')
            ->where('provinsi',$data->provinsi)
            ->where('kabupaten',$data->kabupaten)
            ->where('kecamatan',$data->kecamatan)
            ->where('desa',$data->desa)
            ->where('jalan',$data->jalan)
            ->where('rt',$data->rt)
            ->where('rw',$data->rw)
            ->count();
            $h_disabilitas_pr[] = $dpt;
        }
        $p = array_sum($h_disabilitas_pr);
        $h_disabilitas_pr[] = $p;

        $h_disabilitas_jum =[];
        foreach ($datatps as $data){
            $dpt = DB::table('pencoblos')
            ->where('disabilitas', 1)
            ->where('hadir', 1)
            ->where('provinsi',$data->provinsi)
            ->where('kabupaten',$data->kabupaten)
            ->where('kecamatan',$data->kecamatan)
            ->where('desa',$data->desa)
            ->where('jalan',$data->jalan)
            ->where('rt',$data->rt)
            ->where('rw',$data->rw)
            ->count();
            $h_disabilitas_jum[] = $dpt;
        }
        $p = array_sum($h_disabilitas_jum);
        $h_disabilitas_jum[] = $p;

        $jml_srt_suara = [];
        foreach ($datatps as $data){
            $dpt = DB::table('tps')
            ->where('provinsi',$data->provinsi)
            ->where('kabupaten',$data->kabupaten)
            ->where('kecamatan',$data->kecamatan)
            ->where('desa',$data->desa)
            ->where('jalan',$data->jalan)
            ->where('rt',$data->rt)
            ->where('rw',$data->rw)
            ->get('jml_srt_suara');
            $jml_srt_suara[] = $dpt;
        }


        $jml_srt_rusak = [];
        foreach ($datatps as $data){
            $dpt = DB::table('tps')
            ->where('provinsi',$data->provinsi)
            ->where('kabupaten',$data->kabupaten)
            ->where('kecamatan',$data->kecamatan)
            ->where('desa',$data->desa)
            ->where('jalan',$data->jalan)
            ->where('rt',$data->rt)
            ->where('rw',$data->rw)
            ->get('jml_srt_rusak');
            $jml_srt_rusak[] = $dpt;
        }
        $p = array_sum($jml_srt_rusak);
        $jml_srt_rusaks = $p;

        $s = [];
        $c = [];
        foreach ($jml_srt_suara as $d){
            foreach($d as $k){
                $s[] = $k->jml_srt_suara;
            }
        }
        foreach ($jml_srt_rusak as $d){
            foreach($d as $k){
                $c[] = $k->jml_srt_rusak;
            }
        }
        foreach ($hadir_s_jum as $d){
            $v[] = $d;
        }
        $jml_srt_tdk_dgnk = [];
        for($i = 0; $i < count($v); $i++) {
            $selisih = $s[$i] - $c[$i] - $v[$i];
            $jml_srt_tdk_dgnk[] = $selisih;
        }
        $jml_srt_suaras = array_sum($s);
        $jml_srt_rusaks = array_sum($c);
        $jml_srt_tdk_dgnks = array_sum($jml_srt_tdk_dgnk);


        $judul = DB::table('judul_rekap')->find(1);
        $datacalon = DB::table('datacalon')->get();
        $s = [];
        $s_calons=[];
        for($i=1; $i < $datacalon->count()+1; $i++) {
            array_splice($s, 0);
            foreach ($datatps as $data){
                $s_calon[$i] = DB::table('suara')
                ->where('suara', 'Suara '.$i)
                ->where('tps_id', $data->suara_id)
                ->pluck('jml_suara')
                ->sum();
                $s[] = $s_calon[$i];
            }
            $s_calons['suara'.$i] = $s;
            $qw = array_sum($s_calons['suara'.$i]);
            $s_calons['suara'.$i][] = $qw;
        }
        // return $s_calons['suara2'];
        // return $s_calons;



        $sah_jum =[];
        foreach ($datatps as $data){
            $sah = DB::table('suara')
            ->where('tps_id', $data->suara_id)
            ->wherenotin('suara',['Suara Tidak Sah'])
            ->pluck('jml_suara')
            ->sum()
            ;
            $sah_jum[] = $sah;
        }
        $qw = array_sum($sah_jum);
        $sah_jum[] = $qw;


        $tidaksah_jum = [];
        foreach ($datatps as $data){
            $sah = DB::table('suara')
            ->where('tps_id', $data->suara_id)
            ->where('suara','Suara Tidak Sah')
            ->pluck('jml_suara')
            ->sum()
            ;
            $tidaksah_jum[] = $sah;
        }
        $qw = array_sum($tidaksah_jum);
        $tidaksah_jum[] = $qw;

        $seluruh_suara =[];
        foreach ($datatps as $data){
            $sah = DB::table('suara')
            ->where('tps_id', $data->suara_id)
            ->pluck('jml_suara')
            ->sum()
            ;
            $seluruh_suara[] = $sah;
        }
        $qw = array_sum($seluruh_suara);
        $seluruh_suara[] = $qw;

        // return view('admin.laporan',[
        //     'judul' => $judul,
        //     'daerah'=> $daerah,
        //     'datatps' => $datatps,
        //     'no'      => $no,
        //     'nomor'   => $nomor,
        //     'dpts_lk'    => $dpts_lk,
        //     'dpts_pr'    => $dpts_pr,
        //     'dpts'       => $dpts,
        //     'dpph_lk'    => $dpph_lk,
        //     'dpph_pr'    => $dpph_pr,
        //     'dpphs'       => $dpphs,
        //     'dptb_lk'    => $dptb_lk,
        //     'dptb_pr'    => $dptb_pr,
        //     'dptb_s'       => $dptb_s,
        //     'pencoblos_lk'=> $pencoblos_lk,
        //     'pencoblos_pr'=> $pencoblos_pr,
        //     'pencoblos_s'=> $pencoblos_s,
        //     'hadir_dpt_lk'=> $hadir_dpt_lk,
        //     'hadir_dpt_pr'=> $hadir_dpt_pr,
        //     'hadir_dpt_jum'=> $hadir_dpt_jum,
        //     'hadir_dpph_lk'=> $hadir_dpph_lk,
        //     'hadir_dpph_pr'=> $hadir_dpph_pr,
        //     'hadir_dpph_jum'=> $hadir_dpph_jum,
        //     'hadir_dptb_lk'=> $hadir_dptb_lk,
        //     'hadir_dptb_pr'=> $hadir_dptb_pr,
        //     'hadir_dptb_jum'=> $hadir_dptb_jum,
        //     'hadir_s_lk' => $hadir_s_lk,
        //     'hadir_s_pr' => $hadir_s_pr,
        //     'hadir_s_jum' => $hadir_s_jum,
        //     'hadir_s_jums' => $hadir_s_jums,
        //     'disabilitas_lk' => $disabilitas_lk,
        //     'disabilitas_pr' => $disabilitas_pr,
        //     'disabilitas_jum' => $disabilitas_jum,
        //     'h_disabilitas_lk' => $h_disabilitas_lk,
        //     'h_disabilitas_pr' => $h_disabilitas_pr,
        //     'h_disabilitas_jum' => $h_disabilitas_jum,
        //     'jml_srt_suara' => $jml_srt_suara,
        //     'jml_srt_suaras' => $jml_srt_suaras,
        //     'jml_srt_rusak' => $jml_srt_rusak,
        //     'jml_srt_rusaks' => $jml_srt_rusaks,
        //     'jml_srt_tdk_dgnk' => $jml_srt_tdk_dgnk,
        //     'jml_srt_tdk_dgnks' => $jml_srt_tdk_dgnks,
        //     'datacalon'  => $datacalon,
        //     's_calons'   => $s_calons,
        //     'sah_jum' => $sah_jum,
        //     'tidaksah_jum' => $tidaksah_jum,
        //     'seluruh_suara' => $seluruh_suara,
        // ]);


        $nama = $tps->desa;
        return Excel::download(new LaporanExport(
            $judul, $daerah, $datatps, $no, $nomor, $dpts_lk, $dpts_pr, $dpts, $dpph_lk, $dpph_pr, $dpphs, $dptb_lk, $dptb_pr, $dptb_s, $pencoblos_lk, $pencoblos_pr, $pencoblos_s, $hadir_dpt_lk, $hadir_dpt_pr, $hadir_dpt_jum, $hadir_dpph_lk, $hadir_dpph_pr, $hadir_dpph_jum, $hadir_dptb_lk, $hadir_dptb_pr, $hadir_dptb_jum, $hadir_s_lk, $hadir_s_pr, $hadir_s_jum, $hadir_s_jums, $disabilitas_lk, $disabilitas_pr, $disabilitas_jum, $h_disabilitas_lk, $h_disabilitas_pr, $h_disabilitas_jum, $jml_srt_suara, $jml_srt_suaras, $jml_srt_rusak, $jml_srt_rusaks, $jml_srt_tdk_dgnk, $jml_srt_tdk_dgnks, $datacalon, $s_calons, $sah_jum, $tidaksah_jum, $seluruh_suara
        ), $nama.'_laporan_suara'.'.xlsx');



    }




    public function cetak(TPS $tps)
    {
        $judul = DB::table('judul_rekap')->pluck('nama_acara')->get(0);
        $dpt = DB::table('pencoblos')
        ->where('provinsi',$tps->provinsi)
        ->where('kabupaten',$tps->kabupaten)
        ->where('kecamatan',$tps->kecamatan)
        ->where('desa',$tps->desa)
        ->where('jalan',$tps->jalan)
        ->where('rt',$tps->rt)
        ->where('rw',$tps->rw)
        ->get();

        // dpt lk pr jum
        $dpt_lk = $dpt->where('jns_kelamin','laki-laki')->where('jns_dpt','DPT')->count();
        $dpt_pr = $dpt->where('jns_kelamin','perempuan')->where('jns_dpt','DPT')->count();
        $dpt_jum = $dpt->where('jns_dpt','DPT')->count();

        // dpph lk pr jum
        $dpph_lk = $dpt->where('jns_kelamin','laki-laki')->where('jns_dpt','DPPh')->count();
        $dpph_pr = $dpt->where('jns_kelamin','perempuan')->where('jns_dpt','DPPh')->count();
        $dpph_jum = $dpt->where('jns_dpt','DPPh')->count();
        // dptb lk pr jum
        $dptb2_lk = $dpt->where('jns_kelamin','laki-laki')->where('jns_dpt','DPTb')->count();
        $dptb2_pr = $dpt->where('jns_kelamin','perempuan')->where('jns_dpt','DPTb')->count();
        $dptb2_jum = $dpt->where('jns_dpt','DPTb')->count();
        // semua jumlah
        $dpt_jum_lk = $dpt->where('jns_kelamin','laki-laki')->count();
        $dpt_jum_pr = $dpt->where('jns_kelamin','perempuan')->count();
        $dpt_jum_s = $dpt->count();

        // hadir dpt
        $hadirdpt_lk = $dpt->where('jns_kelamin','laki-laki')->where('hadir',1)->where('jns_dpt','DPT')->count();
        $hadirdpt_pr = $dpt->where('jns_kelamin','perempuan')->where('hadir',1)->where('jns_dpt','DPT')->count();
        $hadirdpt_jum = $dpt->where('hadir',1)->where('jns_dpt','DPT')->count();

        // hadir dpph
        $hadirdpph_lk = $dpt->where('jns_kelamin','laki-laki')->where('hadir',1)->where('jns_dpt','DPPh')->count();
        $hadirdpph_pr = $dpt->where('jns_kelamin','perempuan')->where('hadir',1)->where('jns_dpt','DPPh')->count();
        $hadirdpph_jum = $dpt->where('hadir',1)->where('jns_dpt','DPPh')->count();

        // hadir dptb2
        $hadirdptb2_lk = $dpt->where('jns_kelamin','laki-laki')->where('hadir',1)->where('jns_dpt','DPTb')->count();
        $hadirdptb2_pr = $dpt->where('jns_kelamin','perempuan')->where('hadir',1)->where('jns_dpt','DPTb')->count();
        $hadirdptb2_jum = $dpt->where('hadir',1)->where('jns_dpt','DPTb')->count();

        // hadir semua
        $jml_hadirin_lk = $dpt->where('jns_kelamin','laki-laki')->where('hadir',1)->count();
        $jml_hadirin_pr = $dpt->where('jns_kelamin','perempuan')->where('hadir',1)->count();
        $jml_hadirin_jum = $dpt->where('hadir',1)->count();



        $id = $tps->suara_id;

        $saksi = DB::table('saksi')
        ->where('tps_id',$id)
        ->get();

        $pengurus = DB::table('pengurus')
        ->where('tps_id',$id)
        ->get();

        $jml_srt_suara = $tps->jml_srt_suara;

        $jml_srt_rusak = $tps->jml_srt_rusak;

        $jml_srt_tdk_dgnk = $jml_srt_suara - $jml_srt_rusak - $jml_hadirin_jum;

        $suara = DB::table('suara')->where('tps_id',$id)->get();
        $sah = $suara
        ->wherenotin('suara',['Suara Tidak Sah'])
        ->pluck('jml_suara')
        ->sum();
        $tidaksah = $suara
        ->where('suara','Suara Tidak Sah')
        ->pluck('jml_suara')
        ->sum();

        $jum_suara = $suara
        ->pluck('jml_suara')
        ->sum();

        $disabilitas = DB::table('pencoblos')
        ->where('disabilitas', 1)
        ->where('provinsi',$tps->provinsi)
        ->where('kabupaten',$tps->kabupaten)
        ->where('kecamatan',$tps->kecamatan)
        ->where('desa',$tps->desa)
        ->where('jalan',$tps->jalan)
        ->where('rt',$tps->rt)
        ->where('rw',$tps->rw)
        ->get();

        $h_disabilitaslk = $disabilitas->where('hadir',1)->where('jns_kelamin','laki-laki')->count();
        $h_disabilitaspr = $disabilitas->where('hadir',1)->where('jns_kelamin','perempuan')->count();
        $h_disabilitasjum = $disabilitas->where('hadir',1)->count();

        $disabilitaslk = $disabilitas->where('jns_kelamin','laki-laki')->count();
        $disabilitaspr = $disabilitas->where('jns_kelamin','perempuan')->count();
        $disabilitasjum = $disabilitas->count();

        $tps = DB::table('tps')->where('suara_id', $id)->get();



        foreach ($tps as $tp){
            $nama = 'C1_'.$tp->slug;
        }

        // return view('tps.datac1',[
        //     'judul' => $judul,
        //     'tpss' => $tps,
        //         // dpt
        //     'dpt_lk' => $dpt_lk,
        //     'dpt_pr' => $dpt_pr,
        //     'dpt_jum' => $dpt_jum,
        //         // dpt
        //     'dpph_lk' => $dpph_lk,
        //     'dpph_pr' => $dpph_pr,
        //     'dpph_jum' => $dpph_jum,
        //         // dptb2
        //     'dptb2_lk' => $dptb2_lk,
        //     'dptb2_pr' => $dptb2_pr,
        //     'dptb2_jum' => $dptb2_jum,
        //         // dpt jum
        //     'dpt_jum_lk' => $dpt_jum_lk,
        //     'dpt_jum_pr' => $dpt_jum_pr,
        //     'dpt_jum_s'  => $dpt_jum_s,
        //         // hadir dpt
        //     'hadirdpt_lk' => $hadirdpt_lk,
        //     'hadirdpt_pr' => $hadirdpt_pr,
        //     'hadirdpt_jum'=> $hadirdpt_jum,
        //         // hadir dpt
        //     'hadirdpph_lk' => $hadirdpph_lk,
        //     'hadirdpph_pr' => $hadirdpph_pr,
        //     'hadirdpph_jum'=> $hadirdpph_jum,
        //         // hadir dptb2
        //     'hadirdptb2_lk' => $hadirdptb2_lk,
        //     'hadirdptb2_pr' => $hadirdptb2_pr,
        //     'hadirdptb2_jum'=> $hadirdptb2_jum,
        //         // hadir jum
        //     'jml_hadirin_lk' => $jml_hadirin_lk,
        //     'jml_hadirin_pr' => $jml_hadirin_pr,
        //     'jml_hadirin_jum' => $jml_hadirin_jum,
        //         //surat suara
        //     'jml_srt_suara' => $jml_srt_suara,
        //     'jml_srt_rusak' => $jml_srt_rusak,
        //     'jml_srt_tdk_dgnk' => $jml_srt_tdk_dgnk,
        //         // suara
        //     'suara' => $suara,
        //     'sah' => $sah,
        //     'tidaksah'=> $tidaksah,
        //     'jum_suara' => $jum_suara,
        //         // disabilitas
        //     'disabilitaslk'=> $disabilitaslk,
        //     'disabilitaspr'=> $disabilitaspr,
        //     'disabilitasjum'=> $disabilitasjum,

        //     'h_disabilitaslk'=> $h_disabilitaslk,
        //     'h_disabilitaspr'=> $h_disabilitaspr,
        //     'h_disabilitasjum'=> $h_disabilitasjum,
        //     'pengurus' => $pengurus,
        //     'saksi' => $saksi,
        // ]);

        return Excel::download(new DataExport($judul, $tps, $dpt_lk, $dpt_pr, $dpt_jum, $dpph_lk, $dpph_pr, $dpph_jum, $dptb2_lk, $dptb2_pr, $dptb2_jum, $dpt_jum_lk, $dpt_jum_pr, $dpt_jum_s, $hadirdpt_lk, $hadirdpt_pr, $hadirdpt_jum, $hadirdpph_lk, $hadirdpph_pr, $hadirdpph_jum, $hadirdptb2_lk, $hadirdptb2_pr, $hadirdptb2_jum, $jml_hadirin_lk, $jml_hadirin_pr, $jml_hadirin_jum, $jml_srt_suara, $jml_srt_rusak, $jml_srt_tdk_dgnk, $suara, $sah, $tidaksah, $jum_suara, $disabilitaslk, $disabilitaspr, $disabilitasjum, $h_disabilitaslk, $h_disabilitaspr, $h_disabilitasjum, $pengurus, $saksi), $nama.'_laporan'.'.xlsx');
    }





    public function suara(Tps $tps)
    {
        $judul = DB::table('judul_rekap')->find(1);

        $id = $tps->suara_id;

        $saksi = DB::table('saksi')
        ->where('tps_id',$id)
        ->get();

        $pengurus = DB::table('pengurus')
        ->where('tps_id',$id)
        ->get();

        $datacalon = DB::table('datacalon')->get();

        $sah = DB::table('suara')->where('tps_id',$id)->wherenotin('suara',['Suara Tidak Sah'])
        ->pluck('jml_suara');

        $data = $datacalon->zip($sah);


        $sumsah = collect($sah)->sum();

        $sumtidaksah = DB::table('suara')->where('tps_id',$id)->where('suara','Suara Tidak Sah')
        ->pluck('jml_suara')->sum();
        $nama = $tps->slug;
        return Excel::download(New SuaraExport($judul, $tps, $pengurus, $saksi, $datacalon, $sah, $sumtidaksah, $sumsah, $data), $nama.'_C1_laporansuara'.'.xlsx');
    }

}
