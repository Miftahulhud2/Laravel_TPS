<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;

class SuaraExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //
    }
    protected $judul;
    protected $tps;
    protected $pengurus;
    protected $saksi;
    protected $datacalon;
    protected $sah;
    protected $sumtidaksah;
    protected $sumsah;
    protected $data;
    public function __construct($judul, $tps, $pengurus, $saksi, $datacalon, $sah, $sumtidaksah, $sumsah, $data)
    {
        $this->judul = $judul;
        $this->tps = $tps;
        $this->pengurus = $pengurus;
        $this->saksi = $saksi;
        $this->datacalon = $datacalon;
        $this->sah = $sah;
        $this->sumtidaksah = $sumtidaksah;
        $this->sumsah = $sumsah;
        $this->data = $data;

    }
    public function view(): View
    {
        $tps = $this->tps;
        return view('suara', [
            'judul' => $this->judul,
            'tps'   => $this->tps,
            'pengurus'=> $this->pengurus,
            'saksi' => $this->saksi,
            'datacalon' => $this->datacalon,
            'sah' => $this->sah,
            'sumtidaksah' => $this->sumtidaksah,
            'sumsah'=> $this->sumsah,
            'data'  => $this->data,
        ]);
    }
}
