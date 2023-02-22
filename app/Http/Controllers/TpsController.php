<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tps;

class TpsController extends Controller
{
    public function update(Request $request, Tps $tps)
    {
        $this->validate($request,[
            'ssuara' => 'required|numeric'
        ],[
            'ssuara.required' => 'Isi dahulu',
            'ssuara.numeric' => 'Harus berupa angka',
        ]);
        $tps->update([
            'jml_srt_suara' => $request->ssuara
        ]);
        return back()->with('succes', 'Data Surat Suara telah diubah');
    }

    public function rusak(Tps $tps,Request $request)
    {
        $this->validate($request,[
            'ssuara' => 'required|numeric'
        ],[
            'ssuara.required' => 'Isi dahulu',
            'ssuara.numeric' => 'Harus berupa angka',
        ]);
        $tps->update([
            'jml_srt_rusak' => $request->ssuara,
            'tutup'         => 1
        ]);
        return back()->with('succes', 'Data Surat Suara telah diubah');
    }
}
