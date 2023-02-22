<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;


class DataExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {

    }
    protected $judul;
    protected $tps;
                // dpt
    protected $dpt_lk;
    protected $dpt_pr;
    protected $dpt_jum;
                // dpt
    protected $dpph_lk;
    protected $dpph_pr;
    protected $dpph_jum;
                // dptb2
    protected $dptb2_lk;
    protected $dptb2_pr;
    protected $dptb2_jum;
                // dpt jum
    protected $dpt_jum_lk;
    protected $dpt_jum_pr;
    protected $dpt_jum_s;
                // hadir dpt
    protected $hadirdpt_lk;
    protected $hadirdpt_pr;
    protected $hadirdpt_jum;
                // hadir dpt
    protected $hadirdpph_lk;
    protected $hadirdpph_pr;
    protected $hadirdpph_jum;
                // hadir dptb2
    protected $hadirdptb2_lk;
    protected $hadirdptb2_pr;
    protected $hadirdptb2_jum;
                // hadir jum
    protected $jml_hadirin_lk;
    protected $jml_hadirin_pr;
    protected $jml_hadirin_jum;
                //surat suara
    protected $jml_srt_suara;
    protected $jml_srt_rusak;
    protected $jml_srt_tdk_dgnk;
                // suara
    protected $suara;
    protected $sah;
    protected $tidaksah;
    protected $jum_suara;
                // disabilitas
    protected $disabilitaslk;
    protected $disabilitaspr;
    protected $disabilitasjum;

    protected $h_disabilitaslk;
    protected $h_disabilitaspr;
    protected $h_disabilitasjum;
    protected $pengurus;
    protected $saksi;
    public function __construct($judul, $tps, $dpt_lk, $dpt_pr, $dpt_jum, $dpph_lk, $dpph_pr, $dpph_jum, $dptb2_lk, $dptb2_pr, $dptb2_jum, $dpt_jum_lk, $dpt_jum_pr, $dpt_jum_s, $hadirdpt_lk, $hadirdpt_pr, $hadirdpt_jum, $hadirdpph_lk, $hadirdpph_pr, $hadirdpph_jum, $hadirdptb2_lk, $hadirdptb2_pr, $hadirdptb2_jum, $jml_hadirin_lk, $jml_hadirin_pr, $jml_hadirin_jum, $jml_srt_suara, $jml_srt_rusak, $jml_srt_tdk_dgnk, $suara, $sah, $tidaksah, $jum_suara, $disabilitaslk, $disabilitaspr, $disabilitasjum, $h_disabilitaslk, $h_disabilitaspr, $h_disabilitasjum, $pengurus, $saksi)
    {
        $this->jum_suara = $jum_suara;
        $this->judul = $judul;
        $this->tps = $tps;
        $this->dpt_lk = $dpt_lk;
        $this->dpt_pr = $dpt_pr;
        $this->dpt_jum = $dpt_jum;
        $this->dpph_lk = $dpph_lk;
        $this->dpph_pr = $dpph_pr;
        $this->dpph_jum = $dpph_jum;
        $this->dptb2_lk = $dptb2_lk;
        $this->dptb2_pr = $dptb2_pr;
        $this->dptb2_jum = $dptb2_jum;
        $this->dpt_jum_lk = $dpt_jum_lk;
        $this->dpt_jum_pr = $dpt_jum_pr;
        $this->dpt_jum_s = $dpt_jum_s;
        $this->hadirdpt_lk = $hadirdpt_lk;
        $this->hadirdpt_pr = $hadirdpt_pr;
        $this->hadirdpt_jum = $hadirdpt_jum;
        $this->hadirdpph_lk = $hadirdpph_lk;
        $this->hadirdpph_pr = $hadirdpph_pr;
        $this->hadirdpph_jum = $hadirdpph_jum;
        $this->hadirdptb2_lk = $hadirdptb2_lk;
        $this->hadirdptb2_pr = $hadirdptb2_pr;
        $this->hadirdptb2_jum = $hadirdptb2_jum;
        $this->jml_hadirin_lk = $jml_hadirin_lk;
        $this->jml_hadirin_pr = $jml_hadirin_pr;
        $this->jml_hadirin_jum = $jml_hadirin_jum;
        $this->jml_srt_suara = $jml_srt_suara;
        $this->jml_srt_rusak = $jml_srt_rusak;
        $this->jml_srt_tdk_dgnk = $jml_srt_tdk_dgnk;
        $this->suara = $suara;
        $this->sah = $sah;
        $this->tidaksah = $tidaksah;
        $this->jum_suara = $jum_suara;
        $this->disabilitaslk = $disabilitaslk;
        $this->disabilitaspr = $disabilitaspr;
        $this->disabilitasjum = $disabilitasjum;
        $this->h_disabilitaslk = $h_disabilitaslk;
        $this->h_disabilitaspr = $h_disabilitaspr;
        $this->h_disabilitasjum = $h_disabilitasjum;
        $this->pengurus = $pengurus;
        $this->saksi = $saksi;
    }
    public function view(): View
    {
        return view('tps.datac1',[
            'judul' => $this->judul,
            'tpss' => $this->tps,
                // dpt
            'dpt_lk' => $this->dpt_lk,
            'dpt_pr' => $this->dpt_pr,
            'dpt_jum' => $this->dpt_jum,
                // dpt
            'dpph_lk' => $this->dpph_lk,
            'dpph_pr' => $this->dpph_pr,
            'dpph_jum' => $this->dpph_jum,
                // dptb2
            'dptb2_lk' => $this->dptb2_lk,
            'dptb2_pr' => $this->dptb2_pr,
            'dptb2_jum' => $this->dptb2_jum,
                // dpt jum
            'dpt_jum_lk' => $this->dpt_jum_lk,
            'dpt_jum_pr' => $this->dpt_jum_pr,
            'dpt_jum_s'  => $this->dpt_jum_s,
                // hadir dpt
            'hadirdpt_lk' => $this->hadirdpt_lk,
            'hadirdpt_pr' => $this->hadirdpt_pr,
            'hadirdpt_jum'=> $this->hadirdpt_jum,
                // hadir dpt
            'hadirdpph_lk' => $this->hadirdpph_lk,
            'hadirdpph_pr' => $this->hadirdpph_pr,
            'hadirdpph_jum'=> $this->hadirdpph_jum,
                // hadir dptb2
            'hadirdptb2_lk' => $this->hadirdptb2_lk,
            'hadirdptb2_pr' => $this->hadirdptb2_pr,
            'hadirdptb2_jum'=> $this->hadirdptb2_jum,
                // hadir jum
            'jml_hadirin_lk' => $this->jml_hadirin_lk,
            'jml_hadirin_pr' => $this->jml_hadirin_pr,
            'jml_hadirin_jum' => $this->jml_hadirin_jum,
                //surat suara
            'jml_srt_suara' => $this->jml_srt_suara,
            'jml_srt_rusak' => $this->jml_srt_rusak,
            'jml_srt_tdk_dgnk' => $this->jml_srt_tdk_dgnk,
                // suara
            'suara' => $this->suara,
            'sah' => $this->sah,
            'tidaksah'=> $this->tidaksah,
            'jum_suara' => $this->jum_suara,
                // disabilitas
            'disabilitaslk'=> $this->disabilitaslk,
            'disabilitaspr'=> $this->disabilitaspr,
            'disabilitasjum'=> $this->disabilitasjum,

            'h_disabilitaslk'=> $this->h_disabilitaslk,
            'h_disabilitaspr'=> $this->h_disabilitaspr,
            'h_disabilitasjum'=> $this->h_disabilitasjum,
            'pengurus' => $this->pengurus,
            'saksi' => $this->saksi,


        ]);
    }
}
