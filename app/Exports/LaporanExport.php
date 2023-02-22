<?php

namespace App\Exports;

use App\Models\Pencoblos;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\FromCollection;

class LaporanExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pencoblos::all();
    }

    protected $judul;
    protected $daerah;
    protected $datatps;
    protected $no;
    protected $nomor;
    protected $dpts_lk;
    protected $dpts_pr;
    protected $dpts;
    protected $dpph_lk;
    protected $dpph_pr;
    protected $dpphs;
    protected $dptb_lk;
    protected $dptb_pr;
    protected $dptb_s;
    protected $pencoblos_lk;
    protected $pencoblos_pr;
    protected $pencoblos_s;
    protected $hadir_dpt_lk;
    protected $hadir_dpt_pr;
    protected $hadir_dpt_jum;
    protected $hadir_dpph_lk;
    protected $hadir_dpph_pr;
    protected $hadir_dpph_jum;
    protected $hadir_dptb_lk;
    protected $hadir_dptb_pr;
    protected $hadir_dptb_jum;
    protected $hadir_s_lk;
    protected $hadir_s_pr;
    protected $hadir_s_jum;
    protected $hadir_s_jums;
    protected $disabilitas_lk;
    protected $disabilitas_pr;
    protected $disabilitas_jum;
    protected $h_disabilitas_lk;
    protected $h_disabilitas_pr;
    protected $h_disabilitas_jum;
    protected $jml_srt_suara;
    protected $jml_srt_suaras;
    protected $jml_srt_rusak;
    protected $jml_srt_rusaks;
    protected $jml_srt_tdk_dgnk;
    protected $jml_srt_tdk_dgnks;
    protected $datacalon;
    protected $s_calons;
    protected $sah_jum;
    protected $tidaksah_jum;
    protected $seluruh_suara;

    public function __construct(
        $judul, $daerah, $datatps, $no, $nomor, $dpts_lk, $dpts_pr, $dpts, $dpph_lk, $dpph_pr, $dpphs, $dptb_lk, $dptb_pr, $dptb_s, $pencoblos_lk, $pencoblos_pr, $pencoblos_s, $hadir_dpt_lk, $hadir_dpt_pr, $hadir_dpt_jum, $hadir_dpph_lk, $hadir_dpph_pr, $hadir_dpph_jum, $hadir_dptb_lk, $hadir_dptb_pr, $hadir_dptb_jum, $hadir_s_lk, $hadir_s_pr, $hadir_s_jum, $hadir_s_jums, $disabilitas_lk, $disabilitas_pr, $disabilitas_jum, $h_disabilitas_lk, $h_disabilitas_pr, $h_disabilitas_jum, $jml_srt_suara, $jml_srt_suaras, $jml_srt_rusak, $jml_srt_rusaks, $jml_srt_tdk_dgnk, $jml_srt_tdk_dgnks, $datacalon, $s_calons, $sah_jum, $tidaksah_jum, $seluruh_suara
    )
    {
        $this->judul = $judul;
        $this->daerah = $daerah;
        $this->datatps = $datatps;
        $this->no = $no;
        $this->nomor = $nomor;
        $this->dpts_lk = $dpts_lk;
        $this->dpts_pr = $dpts_pr;
        $this->dpts = $dpts;
        $this->dpph_lk = $dpph_lk;
        $this->dpph_pr = $dpph_pr;
        $this->dpphs = $dpphs;
        $this->dptb_lk = $dptb_lk;
        $this->dptb_pr = $dptb_pr;
        $this->dptb_s = $dptb_s;
        $this->pencoblos_lk = $pencoblos_lk;
        $this->pencoblos_pr = $pencoblos_pr;
        $this->pencoblos_s = $pencoblos_s;
        $this->hadir_dpt_lk = $hadir_dpt_lk;
        $this->hadir_dpt_pr = $hadir_dpt_pr;
        $this->hadir_dpt_jum = $hadir_dpt_jum;
        $this->hadir_dpph_lk = $hadir_dpph_lk;
        $this->hadir_dpph_pr = $hadir_dpph_pr;
        $this->hadir_dpph_jum = $hadir_dpph_jum;
        $this->hadir_dptb_lk = $hadir_dptb_lk;
        $this->hadir_dptb_pr = $hadir_dptb_pr;
        $this->hadir_dptb_jum = $hadir_dptb_jum;
        $this->hadir_s_lk = $hadir_s_lk;
        $this->hadir_s_pr = $hadir_s_pr;
        $this->hadir_s_jum = $hadir_s_jum;
        $this->hadir_s_jums = $hadir_s_jums;
        $this->disabilitas_lk = $disabilitas_lk;
        $this->disabilitas_pr = $disabilitas_pr;
        $this->disabilitas_jum = $disabilitas_jum;
        $this->h_disabilitas_lk = $h_disabilitas_lk;
        $this->h_disabilitas_pr = $h_disabilitas_pr;
        $this->h_disabilitas_jum = $h_disabilitas_jum;
        $this->jml_srt_suara = $jml_srt_suara;
        $this->jml_srt_suaras = $jml_srt_suaras;
        $this->jml_srt_rusak = $jml_srt_rusak;
        $this->jml_srt_rusaks = $jml_srt_rusaks;
        $this->jml_srt_tdk_dgnk = $jml_srt_tdk_dgnk;
        $this->jml_srt_tdk_dgnks = $jml_srt_tdk_dgnks;
        $this->datacalon = $datacalon;
        $this->s_calons = $s_calons;
        $this->sah_jum = $sah_jum;
        $this->tidaksah_jum = $tidaksah_jum;
        $this->seluruh_suara = $seluruh_suara;

    }

    public function view(): View
    {

        return view('admin.laporan',[
            'judul' => $this->judul,
            'daerah'=> $this->daerah,
            'datatps' => $this->datatps,
            'no'      => $this->no,
            'nomor'   => $this->nomor,
            'dpts_lk'    => $this->dpts_lk,
            'dpts_pr'    => $this->dpts_pr,
            'dpts'       => $this->dpts,
            'dpph_lk'    => $this->dpph_lk,
            'dpph_pr'    => $this->dpph_pr,
            'dpphs'       => $this->dpphs,
            'dptb_lk'    => $this->dptb_lk,
            'dptb_pr'    => $this->dptb_pr,
            'dptb_s'       => $this->dptb_s,
            'pencoblos_lk'=> $this->pencoblos_lk,
            'pencoblos_pr'=> $this->pencoblos_pr,
            'pencoblos_s'=> $this->pencoblos_s,
            'hadir_dpt_lk'=> $this->hadir_dpt_lk,
            'hadir_dpt_pr'=> $this->hadir_dpt_pr,
            'hadir_dpt_jum'=> $this->hadir_dpt_jum,
            'hadir_dpph_lk'=> $this->hadir_dpph_lk,
            'hadir_dpph_pr'=> $this->hadir_dpph_pr,
            'hadir_dpph_jum'=> $this->hadir_dpph_jum,
            'hadir_dptb_lk'=> $this->hadir_dptb_lk,
            'hadir_dptb_pr'=> $this->hadir_dptb_pr,
            'hadir_dptb_jum'=> $this->hadir_dptb_jum,
            'hadir_s_lk' => $this->hadir_s_lk,
            'hadir_s_pr' => $this->hadir_s_pr,
            'hadir_s_jum' => $this->hadir_s_jum,
            'hadir_s_jums' => $this->hadir_s_jums,
            'disabilitas_lk' => $this->disabilitas_lk,
            'disabilitas_pr' => $this->disabilitas_pr,
            'disabilitas_jum' => $this->disabilitas_jum,
            'h_disabilitas_lk' => $this->h_disabilitas_lk,
            'h_disabilitas_pr' => $this->h_disabilitas_pr,
            'h_disabilitas_jum' => $this->h_disabilitas_jum,
            'jml_srt_suara' => $this->jml_srt_suara,
            'jml_srt_suaras' => $this->jml_srt_suaras,
            'jml_srt_rusak' => $this->jml_srt_rusak,
            'jml_srt_rusaks' => $this->jml_srt_rusaks,
            'jml_srt_tdk_dgnk' => $this->jml_srt_tdk_dgnk,
            'jml_srt_tdk_dgnks' => $this->jml_srt_tdk_dgnks,
            'datacalon'  => $this->datacalon,
            's_calons'   => $this->s_calons,
            'sah_jum' => $this->sah_jum,
            'tidaksah_jum' => $this->tidaksah_jum,
            'seluruh_suara' => $this->seluruh_suara,
        ]);

    }
}
