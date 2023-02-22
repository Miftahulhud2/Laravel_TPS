<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\Tps;
use App\Models\User;
use App\Models\Suara;
use App\Models\Saksi;
use App\Models\Datacalon;
use App\Models\Pencoblos;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use App\CustomClasses\ColectionPaginate;
use App\Http\Requests\StorePencoblosRequest;
use App\Http\Requests\UpdatePencoblosRequest;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class PencoblosController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->name == 'admin'){
            return redirect('admin/dashboard');
        }
        $id_auth = auth()->user()->tps_id;

        $pencoblo = DB::table('tps')->where('suara_id', $id_auth)->get();
        foreach ($pencoblo as $p)
        {
            $provinsi = $p->provinsi;
            $kabupaten = $p->kabupaten;
            $kecamatan = $p->kecamatan;
            $desa = $p->desa;
            $jalan = $p->jalan;
            $rt = $p->rt;
            $rw = $p->rw;
        }



        // cari pencoblos
        $pencoblos = DB::table('pencoblos')
        ->where('provinsi', $provinsi)
        ->where('kabupaten', $kabupaten)
        ->where('kecamatan', $kecamatan)
        ->where('desa', $desa)
        ->where('jalan', $jalan)
        ->where('rt', $rt)
        ->where('rw', $rw)
        ->get()
        ;

        // ketua pengurus
        $ketua = collect(DB::table('pengurus')
        ->where('tps_id', $id_auth)
        ->where('status', 'Ketua Panitia')
        ->get()
        );



        $hadir = $pencoblos->pluck('hadir')->sum();
        $pencoblos = $pencoblos->count();
        $datacalon = Datacalon::all();
        $judul = DB::table('judul_rekap')->first();



        // $user = DB::table('users')->get();
        return view('tps.tentang', [
            'title' => "DASHBOARD",
            'judul' =>  $judul,
            'datacalon' => $datacalon,
            'tps' => $pencoblo,
            'hadir' => $hadir,
            'pencoblos' => $pencoblos,
            'ketua'  => $ketua,
            'provinsi' =>$provinsi,
            'kabupaten' =>$kabupaten,
            'kecamatan' =>$kecamatan,
            'desa' =>$desa,
            'jalan' =>$jalan,
            'rt' =>$rt,
            'rw' =>$rw,
        ]);
    }



    public function anggota()
    {
        $id_auth = auth()->user()->tps_id;

        $pencoblo = DB::table('tps')->where('suara_id', $id_auth)->get();
        foreach ($pencoblo as $p)
        {
            $provinsi = $p->provinsi;
            $kabupaten = $p->kabupaten;
            $kecamatan = $p->kecamatan;
            $desa = $p->desa;
            $jalan = $p->jalan;
            $rt = $p->rt;
            $rw = $p->rw;
        }

        $anggotas = DB::table('pengurus')->where('tps_id', $id_auth)->get();
        $saksis = DB::table('saksi')->where('tps_id', $id_auth)->get();

        return view('tps.anggota',[
            'title' => "ANGGOTA",
            'provinsi' =>$provinsi,
            'kabupaten' =>$kabupaten,
            'kecamatan' =>$kecamatan,
            'desa' =>$desa,
            'jalan' =>$jalan,
            'rt' =>$rt,
            'rw' =>$rw,
            'anggotas' => $anggotas,
            'saksis' => $saksis,
            'tps'   => $pencoblo
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $user = DB::table('users')->get();
        $id_auth = auth()->user()->tps_id;

        $pencoblo = DB::table('tps')->where('suara_id', $id_auth)->get();
        foreach ($pencoblo as $p)
        {
            $provinsi = $p->provinsi;
            $kabupaten = $p->kabupaten;
            $kecamatan = $p->kecamatan;
            $desa = $p->desa;
            $jalan = $p->jalan;
            $rt = $p->rt;
            $rw = $p->rw;
            $id = $p->id;
        }


        return view('tps.registrasi' ,[
            'title' => "TAMBAH DPT BARU",
            'tps' => $pencoblo,
            'provinsi'      => $provinsi,
            'kabupaten'      => $kabupaten,
            'kecamatan'      => $kecamatan,
            'desa'      => $desa,
            'jalan'      => $jalan,
            'rt'      => $rt,
            'rw'      => $rw,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePencoblosRequest  $request
     * @return \Illuminate\Http\Response
     */

    public function store1(Request $request, Pencoblos $pencoblos)
    {

        $validated = $request->validate([
            'nama'          =>  'required',
            'nik'           =>  'required|min:5|max:16',
            'kk'           =>  'required|min:5|max:16',
            'tmp_lahir'     =>  'required',
            'tgl_lahir'     =>  'required',
            'umur'          =>  'required|digits:2',
            'sts_kawin'     =>  'required',
            'jns_kelamin'   =>  'required',
            'provinsi'        =>  'required',
            'kabupaten'        =>  'required',
            'kecamatan'        =>  'required',
            'desa'        =>  'required',
            'jalan'        =>  'required',
            'rt'        =>  'required',
            'rw'        =>  'required',
            'jns_dpt' => 'required'
        ]);
        // return request()->all();
        $disabilitas = 1;
        if ($request->disabilitas == null){
            $disabilitas = 0;
        }

        if ($validated)
        {
            $pencoblos->kk = $request->kk;
            $pencoblos->nik = $request->nik;
            $pencoblos->nama = $request->nama;
            $pencoblos->tmp_lahir = $request->tmp_lahir;
            $pencoblos->tgl_lahir = $request->tgl_lahir;
            $pencoblos->umur = $request->umur;
            $pencoblos->sts_kawin = $request->sts_kawin;
            $pencoblos->jns_kelamin = $request->jns_kelamin;
            $pencoblos->jns_dpt = $request->jns_dpt;
            $pencoblos->disabilitas = $disabilitas;
            $pencoblos->provinsi = $request->provinsi;
            $pencoblos->kabupaten = $request->kabupaten;
            $pencoblos->kecamatan = $request->kecamatan;
            $pencoblos->desa = $request->desa;
            $pencoblos->jalan = $request->jalan;
            $pencoblos->rt = $request->rt;
            $pencoblos->rw= $request->rw;


            $pencoblos->save();

            return back()->with('success', 'Data berhasil ditambahkan');

        }else
        {
            return back()->with('error', 'Data gagal ditambahkan');
        }
    }

    public function store(StorePencoblosRequest $request)
    {
        //
        // return request()->all();
        $validated = $request->validate([
            'tps_id'        => 'required',
            'nama'          =>  'required',
            'nik'           =>  'required|min:5',
            'tmp_lahir'     =>  'required',
            'tgl_lahir'     =>  'required',
            'umur'          =>  'required|digits:2',
            'sts_kawin'     =>  'required',
            'jns_kelamin'   =>  'required',
            'alamat'        =>  'required'
        ]);

        if ($validated){
            pencoblos::create(
                // [
                $validated,
                // 'created_at'    =>  now(),
                // 'updated_at'    =>  now()
                // ]
            );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pencoblos  $pencoblos
     * @return \Illuminate\Http\Response
     */
    public function search($value, $strict = false)
    {
    if (! $this->useAsCallable($value)) {
         return array_search($value, $this->items, $strict);
    }

    foreach ($this->items as $key => $item) {
        if (call_user_func($value, $item, $key)) {
             return $key;
        }
    }

     return false;
    }
    public function show(Pencoblos $pencoblos, Request $request)
    {
        $tps = DB::table('tps')->where('suara_id', auth()->user()->tps_id)->get();

        $pencoblo = DB::table('tps')->where('suara_id', auth()->user()->tps_id)->get();


        foreach ($pencoblo as $p)
        {
            $provinsi = $p->provinsi;
            $kabupaten = $p->kabupaten;
            $kecamatan = $p->kecamatan;
            $desa = $p->desa;
            $jalan = $p->jalan;
            $rt = $p->rt;
            $rw = $p->rw;
            $tutup = $p->tutup;
        }

        $pencoblos = DB::table('pencoblos')
        ->where('provinsi', $provinsi)
        ->where('kabupaten', $kabupaten)
        ->where('kecamatan', $kecamatan)
        ->where('desa', $desa)
        ->where('jalan', $jalan)
        ->where('rt', $rt)
        ->where('rw', $rw)
        ->get()
        ;


        return view('tps.event', [
            'title'         =>  'EVENT',
            'tutup'         => $tutup,
            'tps'           =>  $tps,
            'pencoblos'     => $pencoblos,
            'provinsi'      => $provinsi,
            'kabupaten'      => $kabupaten,
            'kecamatan'      => $kecamatan,
            'desa'      => $desa,
            'jalan'      => $jalan,
            'rt'      => $rt,
            'rw'      => $rw,

        ]);
    }




    public function hadir(Request $request, Pencoblos $pencoblos)
    {
        $data = pencoblos::find($request);
        $hadir = $data->first()->hadir;


        // $tps = Tps::find(auth()->user()->tps->id);
        // $pencoblos = Pencoblos::find(auth()->user()->tps->id);
        // $tps = $tps->pencoblos;



        if ($hadir == 0){
            $data->first()->hadir = 1;
            $data->first()->save();
        }
        else{
            $data->first()->hadir = 0;
            $data->first()->save();
        }
        return back()->with('success', 'DATA TELAH DIUBAH');


    }

    public function report()
    {

        $id_auth = auth()->user()->tps_id;



        $pencoblo = DB::table('tps')->where('suara_id', $id_auth)->get();
        foreach ($pencoblo as $p)
        {
            $provinsi = $p->provinsi;
            $kabupaten = $p->kabupaten;
            $kecamatan = $p->kecamatan;
            $desa = $p->desa;
            $jalan = $p->jalan;
            $rt = $p->rt;
            $rw = $p->rw;
            $id = $p->suara_id;
            $tutup = $p->tutup;
        }


        $saksis = DB::table('saksi')
        ->where('tps_id' ,$id_auth)
        ->select('email', 'kode', 'konfirmasi', 'status')
        ->get();

        $jml_saksi = DB::table('saksi')
        ->where('tps_id' ,$id_auth)
        ->select('email', 'kode', 'konfirmasi', 'status')
        ->count();

        $kode = DB::table('saksi')
        ->where('tps_id' ,$id_auth)
        ->select('kode', 'konfirmasi', 'status', 'nama', 'email')
        ->get();

        $konfirmasi = DB::table('saksi')
        ->where('tps_id' ,$id_auth)
        ->select('konfirmasi')
        ->get();

        $suaras = DB::table('suara')
        ->where('tps_id', $id_auth)
        ->groupBy('suara')
        ->pluck(DB::raw('sum(jml_suara) as sum'), 'suara')
        ->sum();

        $hadir = DB::table('pencoblos')
        ->where('provinsi', $provinsi)
        ->where('kabupaten', $kabupaten)
        ->where('kecamatan', $kecamatan)
        ->where('desa', $desa)
        ->where('jalan', $jalan)
        ->where('rt', $rt)
        ->where('rw', $rw)
        ->pluck('hadir')
        ->sum();


        $datacalons = DB::table('datacalon')->count();
        $foto = DB::table('datacalon')->get('foto');

        $jml_foto = DB::table('bukti')->where('tps_id', $id_auth)->count();

        $laporan_foto = DB::table('bukti')->where('tps_id', $id_auth)->get();
        $bukti = DB::table('bukti')->where('tps_id', $id_auth)->get();


        // data konfirmasi
        $confir = true;
        foreach ($kode as $k) {
            if ($k->kode != $k->konfirmasi) {
                $confir = false;
            }
        }



        return view('tps.report', [
            'title' => 'REPORT',
            'tutup' => $tutup,
            'datacalon' => $datacalons,
            'tps' => $pencoblo,
            'hadir' => $hadir,
            'suara' => $suaras,
            'provinsi'      => $provinsi,
            'kabupaten'      => $kabupaten,
            'kecamatan'      => $kecamatan,
            'desa'      => $desa,
            'jalan'      => $jalan,
            'rt'      => $rt,
            'rw'      => $rw,
            'id'        => $id,
            'kode'      => $kode,
            'konfirmasi'      => $konfirmasi,
            'jml_saksi' => $jml_saksi,
            'confir'    => $confir,
            'foto'      => $foto,
            'l_foto'    => $laporan_foto,
            'bukti'     => $bukti,
            'jml_foto'  => $jml_foto,
        ]);
    }


    public function kode(Request $request,Saksi $saksi)
    {
        $data = DB::table('saksi')->where('tps_id',$request->id)->get();
        $allKeys = $request->keys();
        $nama = array_diff($allKeys, ['id','_token']);
        $kode = [];
        foreach ($data->zip($nama) as $d){
            $kode[$d[1]] = $d[0]->kode;
        }
        // return $kode['Pengawas'];

        // $request->validate([
        //     'nama.*' => 'required|in:' . implode(',', $kode),
        // ]);
        // $validator = Validator::make($request->all(), [
        //     'nama.*' => 'required|in:' . implode(',', $kode),
        // ]);

        // if ($validator->fails()) {
        //     return redirect()->back()
        //                 ->withErrors($validator)
        //                 ->withInput();
        // }

        if ($request->Pengawas != null && $request->Pengawas == $kode['Pengawas']){
            Saksi::where('tps_id', $request->id)->where('status','Pengawas')->update([
                'konfirmasi' => $request->Pengawas
            ]);
        }

        for ($i = 1; $i < Datacalon::count()+1; $i++){
            // if ($request->{"Saksi_{$i}"} != null && $request->{"Saksi_{$i}"} == $kode["Saksi_{$i}"]){
                Saksi::where('tps_id', $request->id)->where('status', 'Saksi '.$i)->update([
                    'konfirmasi' => $request->{"Saksi_{$i}"}
                ]);
            // }
        }
        return redirect('/tps/report')->with('success', 'KODE TELAH DIMASUKAN');
    }


    public function reportdata(Request $request, Suara $suara, Datacalon $datacalon, Tps $tps)
    {

        $jml_input = [];
        for ($i=0; $i<Datacalon::count()+1 ; $i++){
            $jml_input[]= $request->{"suara{$i}"};
        }
        $jml_input[]= $request->suaratidaksah;
        $jml_input = collect($jml_input);
        $jml_input = $jml_input->sum();
        $t_id = auth()->user()->tps_id;
        $pencoblo = DB::table('tps')->where('suara_id', $t_id)->get();
        foreach ($pencoblo as $p) {
            $provinsi = $p->provinsi;
            $kabupaten = $p->kabupaten;
            $kecamatan = $p->kecamatan;
            $desa = $p->desa;
            $jalan = $p->jalan;
            $rt = $p->rt;
            $rw = $p->rw;
        }

        $hadir = DB::table('pencoblos')
        ->where('provinsi', $provinsi)
        ->where('kabupaten', $kabupaten)
        ->where('kecamatan', $kecamatan)
        ->where('desa', $desa)
        ->where('jalan', $jalan)
        ->where('rt', $rt)
        ->where('rw', $rw)
        ->pluck('hadir')
        ->sum();


        // $validasi = $request->validate([
        //     'jml_suara' => 'required|numeric'
        // ],[
        //     'jml_suara.required' => 'Harus Diisi terlebih dahulu',
        //     'jml_suara.numeric'  => 'Harus Berupa Angka'
        // ]);
        $sukses = 'berhasil';
        $gagal = 'Gagal';
        if($jml_input === $hadir){
            for($i = 1; $i < Datacalon::count()+1; $i++){
                Suara::where('tps_id', $request->id)->where('suara','Suara '.$i)->update([
                    'tps_id' => $request->id,
                    'suara'  => "Suara {$i}",
                    'jml_suara'  => $request->{"suara{$i}"},
                ]);
            }
            Suara::where('tps_id', $request->id)->where('suara','Suara Tidak Sah')->update([
                'tps_id' => $request->id,
                'suara'  => 'Suara Tidak Sah',
                'jml_suara'  => $request->suaratidaksah,

            ]);
            // Tps::where('provinsi', $provinsi)
            // ->where('kabupaten', $kabupaten)
            // ->where('kecamatan', $kecamatan)
            // ->where('desa', $desa)
            // ->where('jalan', $jalan)
            // ->where('rt', $rt)
            // ->where('rw', $rw)
            // ->update([
            //     'tutup' => 1
            // ]);


                return redirect('/tps/report')->with('success', 'DATA TELAH DITAMBAH');
        } else{
            return redirect('/tps/report')->with('error', 'DATA GAGAL,KARENA TIDAK SAMA DENGAN JUMLAH KEHADIRAN');
        }





    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pencoblos  $pencoblos
     * @return \Illuminate\Http\Response
     */
    public function edit(Pencoblos $pencoblos)
    {
        $id_auth = auth()->user()->tps_id;

        $pencoblo = DB::table('tps')->where('suara_id', $id_auth)->get();
        foreach ($pencoblo as $p)
        {
            $provinsi = $p->provinsi;
            $kabupaten = $p->kabupaten;
            $kecamatan = $p->kecamatan;
            $desa = $p->desa;
            $jalan = $p->jalan;
            $rt = $p->rt;
            $rw = $p->rw;
            $id = $p->id;
        }

        return view('tps.edit',[
            'title' => 'Edit',
            'tps'   => $pencoblo,
            'pencoblos' => $pencoblos,
            'provinsi'      => $provinsi,
            'kabupaten'      => $kabupaten,
            'kecamatan'      => $kecamatan,
            'desa'      => $desa,
            'jalan'      => $jalan,
            'rt'      => $rt,
            'rw'      => $rw,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePencoblosRequest  $request
     * @param  \App\Models\Pencoblos  $pencoblos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pencoblos $pencoblos)
    {
        //
        $disabilitas = 1;
        if ($request->disabilitas == null){
            $disabilitas = 0;
        }
        $pencoblos->kk = $request->kk;
        $pencoblos->nik = $request->nik;
        $pencoblos->nama = $request->nama;
        $pencoblos->tmp_lahir = $request->tmp_lahir;
        $pencoblos->tgl_lahir = $request->tgl_lahir;
        $pencoblos->umur = $request->umur;
        $pencoblos->sts_kawin = $request->sts_kawin;
        $pencoblos->jns_kelamin = $request->jns_kelamin;
        $pencoblos->jns_dpt = $request->jns_dpt;
        $pencoblos->disabilitas = $disabilitas;



        $pencoblos->save();


        return redirect('/tps/event')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pencoblos  $pencoblos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pencoblos $pencoblos)
    {
        Pencoblos::destroy($pencoblos->id);
        return back()->with('danger', 'Data berhasil dihapus');
    }
}
