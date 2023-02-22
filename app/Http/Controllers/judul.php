<?php

namespace App\Http\Controllers;
use App\Models\Datacalon;
use App\Models\judul_rekap;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;


class judul extends Controller
{
    public function index()
    {


        $judul_rekap = Judul_rekap::first();
        $sts_acara = $judul_rekap->sts_acara;

        $judul_rekap->sts_acara = 0;
        $judul_rekap->save();
        DB::table('tps')->truncate();
        DB::table('suara')->truncate();
        DB::table('saksi')->truncate();
        DB::table('pengurus')->truncate();
        DB::table('datacalon')->truncate();

        // delete all rows except the one you want to keep
        $result = DB::delete('DELETE FROM users WHERE id != ?', [1]);

        DB::table('pencoblos')
        ->where('hadir', 1)
        ->update(['hadir' => 0]);




        return back()->with('success', 'DATA TELAH DIUBAH');
    }


    public function update(Request $request, Judul_rekap $judul_rekap)
    {
        $d = $request->nama_acara;

        judul_rekap::first()->update(['nama_acara' => $d]);
        judul_rekap::first()->update(['sts_acara' => 1]);
        return back()->with('success', 'Data berhasil diubah');
    }
}
