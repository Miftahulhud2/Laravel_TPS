<?php

namespace App\Http\Controllers;

use App\Models\Tps;
use App\Models\Bukti;
use App\Models\Users;
use App\Models\Datacalon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;


class BuktiController extends Controller
{
    public function index(Request $request)
    {

        $request->validate([
            'isi'   => 'required|min:10',
            'foto'  => 'required'
        ],[
            'isi.required' => 'Masukan Deskripsi terlebih dahulu',
            'isi.min' => 'Deskripsi kurang jelas',
            'foto.required'=> 'Masukan File foto',
        ]);
        $name = pathinfo($request->file('foto')->getClientOriginalName(), PATHINFO_FILENAME);
        $extension = $request->file('foto')->getClientOriginalExtension();
        $path = $request->file('foto')->store('public/bukti');

        Bukti::create([
            'tps_id'=> $request->id,
            'isi' => $request->isi,
            'foto'=> $path
        ]);
        return redirect("/tps/report")->with('success', 'Foto berhasil disimpan');
    }
    public function show(Tps $tps)
    {
        $tps = DB::table('tps')->where('id',$tps->id)->get();

        foreach ($tps as $t)
        {
            $id = $t->suara_id;
        }
        $foto = DB::table('bukti')->where('tps_id',$id)->get();

        return view('admin.tps.foto',[
            'title' => 'Foto',
            'tps'   => $tps,
            'foto'  => $foto,
        ]);
    }
    public function destroy(Request $request, $id)
    {

        $datacalon = Bukti::find($id);
        Storage::delete($datacalon->foto);
        $datacalon->delete();

        return back()->with('success', 'DataCalon Telah Terhapus');
    }

}
