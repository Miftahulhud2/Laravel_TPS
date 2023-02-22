<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\judul_rekap;
use App\Models\Tps;
use App\Models\Pengurus;
use App\Models\Saksi;
use App\Models\User;
use App\Models\Suara;
use App\Models\Pencoblos;
use App\Models\Datacalon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;


class administrator extends Controller
{
    // cara sering data ke banyak view
    // buka app/providers/appserviceproviders
    // berikan viex::shere('data')
    // dan jangan lupa berikan use use Illuminate\Support\Facades\View;

    public function index()
    {
        //
        $judul_rekap = Judul_rekap::first();
        $sts_acara = $judul_rekap->sts_acara;
        $sts_acr = ['judul' => $sts_acara];

        $tps = DB::table('tps')->whereNotIn('suara_id',[1])->count();
        $suara = DB::table('suara')->get();
        $jnssuara = DB::table('suara')->pluck('suara')->unique();
        $sumjnssuara = DB::table('suara')->pluck('suara')->unique()->count();
        $sah = DB::table('suara')
        ->groupBy('suara')
        ->pluck(DB::raw('sum(jml_suara) as sum'), 'suara')
        ->except('Suara Tidak Sah')
        ->sum();



        // arrray gabungan jns suara dan jumlah suara
        // cara 1
        // $koleksi = [];
        // for ($i = 1; $i < $sumjnssuara; $i++){
        //     $koleksi[] = DB::table('suara')->where('suara','Suara '.$i)->pluck('jml_suara')->sum();
        // }
        // cara 2
        $koleksi = DB::table('suara')
        ->groupBy('suara')
        ->pluck(DB::raw('sum(jml_suara) as sum'), 'suara')
        ->toArray();


        $sum_suara = DB::table('suara')->pluck('jml_suara')->sum();



        // $gabungan = array_merge($jnssuara, $koleksi);
        // print_r($gabungan);


        // $jml_suara = $suara1 + $suara2 + $suara3;
        $pencoblos = DB::table('pencoblos')->count();
        $hadir = DB::table('pencoblos')->sum('hadir');
        return view('admin.dashboard', [
            'title' => 'DASHBOARD',
            'tpss' => $tps,
            'jml_suara' => $koleksi,
            'judul' => $sts_acara,
            'suarasah'  => $sah,
            'jml_all_suara' => $sum_suara,
            'hadir' => $hadir,
            'pencoblos' => $pencoblos
        ]);
    }
    public function create(Datacalon $datacalon)
    {
        $judul_rekap = judul_rekap::first();
        $sts_acara = $judul_rekap->sts_acara;
        $data = $datacalon::first();
        $calon = $datacalon::get();
        return view('admin.datacalon',
        [
            'title' => 'DATA CALON',
            'data' => $data,
            'jdl' => $judul_rekap,
            'judul' => $sts_acara,
            'calon' => $calon
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Datacalon $datacalon)
    {
        return $request;
        $validated = $request->validate([
            "nm_calon1" => 'required|string',
            "nm_w_calon1" => 'required|string',
            "nm_calon2" => 'required|string',
            "nm_w_calon2" => 'required|string',
            "foto1" => 'image|file|max:3048',
            "foto2" => 'image|file|max:3048',
        ]);
        if ($request->file('foto1', 'foto2')) {
            if ($request->oldimage1) {
                Storage::delete($request->oldimage1);
                if ($request->oldimage2){
                    Storage::delete($request->oldimage2);
                }

                $validated['foto1'] = $request->file('foto1')->store('datacalon');
                $validated['foto2'] = $request->file('foto2')->store('datacalon');
            }



            $input = $validated;
            Datacalon::where('id', $request->id)->update($input);
        }
        return redirect('/datacalon')->with('success', 'DATA TELAH DIUBAH');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */

    public function show1()
    {
        $tps = DB::table('tps')
        ->wherenotin('suara_id',[1])
        ->paginate(8)
        ;
        $judul_rekap = Judul_rekap::first();
        $sts_acara = $judul_rekap->sts_acara;
        return view('admin.tps.tps', [
            'title' => 'TPS',
            'tpss'  => $tps,
            'judul' => $sts_acara,
        ]);
    }
    public function show2()
    {
        // $provinces = Province::all();
        // $regencies = Regency::all();
        // $districts = District::all();
        // $villages = Village::all();
        $datacalon = DB::table('datacalon')->count();
        $tps       = DB::table('tps')->count();
        $slug      = 'tps-'.$tps+1;
        $user      = DB::table('users')->max('tps_id');



        return view('admin.tps.tambahtps',
        // compact('provinces', 'regencies', 'districts', 'villages'),
        [
            'title' => 'Tambah TPS',
            'datacalon' => $datacalon,
            'tps'   => $tps,
            'slug'  => $slug,
            'user'  => $user

        ]);
    }
    public function show3()
    {
        $judul_rekap = judul_rekap::first();
        $sts_acara = $judul_rekap->sts_acara;
        $judul = $sts_acara;

        return view('admin.dpt',compact('judul'),[
            'title' => 'DAFTAR PESERTA TETAP',
            'dpt'   => DB::table('pencoblos')->pluck('provinsi')->unique()
        ]);
    }

    public function showtambah()
    {
        $judul_rekap = judul_rekap::first();
        $sts_acara = $judul_rekap->sts_acara;
        $judul = $sts_acara;

        return view('admin.dpttambah',[
            'title' => 'DAFTAR PESERTA TETAP',
            'judul' => $judul
        ]);
    }
    public function tambahdpt(Request $request)
    {
        return $request;
    }

    public function show4($provinsi)
    {

        return view('admin.dptpro',[
            'title' => 'DAFTAR PESERTA TETAP',
            'pro' => DB::table('pencoblos')->where('provinsi', $provinsi)->pluck('kabupaten')->unique(),
            'prov' => $provinsi
        ]);
    }
    public function show5($provinsi,$kabupaten)
    {
        // return 'di kec'.$kabupaten.'pro'.$provinsi;

        return view('admin.dptkec',[
            'title' => 'DAFTAR PESERTA TETAP',
            'pro' => DB::table('pencoblos')->where('kabupaten', $kabupaten)->pluck('kecamatan')->unique(),
            'kec' => $kabupaten
        ]);
    }
    public function show6($provinsi,$kabupaten,$kecamatan)
    {
        // return 'di desa'.$desa;

        return view('admin.dptdes',[
            'title' => 'DAFTAR PESERTA TETAP',
            'pro' => DB::table('pencoblos')->where('kecamatan', $kecamatan)->pluck('desa')->unique(),
            'kec' => $kecamatan
        ]);
    }

    public function show7($provinsi,$kabupaten,$kecamatan,$desa)
    {
        $dpt = DB::table('pencoblos')->where('provinsi',$provinsi)->where('kabupaten',$kabupaten)->where('kecamatan',$kecamatan)->where('desa',$desa)->get();

        return view('admin.dptdesa',[
            'title' => 'DAFTAR PESERTA TETAP',
            'dpts'  => $dpt
        ]);
    }

    public function tambahanggota()
    {

        return view('admin.tps.anggotatps',[
            'title' => 'Anggota TPS'
        ]);
    }

    public function tambahtps(Request $request,Datacalon $datacalon, TPS $tps, Pengurus $pengurus, Saksi $saksi , User $user)
    {
        // $request->validate([
        //     'namatps' => 'required',
        //     'emailtps'   => 'required|email',
            // 'provinsi'=> 'required',
            // 'kabupaten'=>'required',
            // 'kecamatan'=> 'required',
            // 'desa'  => 'required',
            // 'jalan' => 'required',
            // 'rt'    => 'required|numeric',
            // 'rw'    => 'required|numeric',
            // 'ketua' =>'required',
            // 'pengawas'=>'required',

        // ],[
            // 'namatps.required' => 'Nama TPS harus diisi',
            // 'emailtps.required'   => 'Harus berisi email',
            // 'emailtps.email'   => 'Harus berisi email',
            // 'rt.numeric' =>'RT harus diisi dengan angka',
            // 'rw.numeric' =>'RW harus diisi dengan angka',
        // ]);
        // return $request;
        // ddd($request);
        // return $slug;
        $jum_suara = DB::table('pencoblos')
        ->where('provinsi', $request->provinsi)
        ->where('kabupaten', $request->kabupaten)
        ->where('kecamatan', $request->kecamatan)
        ->where('desa', $request->desa)
        ->where('rt', $request->rt)
        ->where('rw', $request->rw)
        ->count();

        $coba = $request->namatps;
        $slug = Str::slug($coba);

        // $user->id = $request->id;
        $user->tps_id = $request->id;
        $user->name = $request->namatps;
        $user->email = $request->emailtps;
        $user->email_verified_at = now();
        $user->password = bcrypt($request->password);
        $user->save();

        // $tps->id = $request->id;
        $tps->suara_id = $request->id;
        $tps->pengurus_id = $request->id;
        $tps->saksi_id = $request->id;
        $tps->namatps = $request->namatps;
        $tps->slug = $slug;
        $tps->provinsi = $request->provinsi;
        $tps->kabupaten = $request->kabupaten;
        $tps->kecamatan = $request->kecamatan;
        $tps->desa = $request->desa;
        $tps->jalan = $request->jalan;
        $tps->rt = $request->rt;
        $tps->rw = $request->rw;
        $tps->jml_srt_suara = $jum_suara;
        $tps->jml_srt_rusak = 0;
        $tps->save();

        $ft_p = null;
        if($request->hasFile('ft_ketua')){
            $ft_p = $request->file('ft_ketua')->store('pengurus');
        }
        $pengurus->tps_id = $request->id;
        $pengurus->nama = $request->ketua;
        $pengurus->status = 'Ketua Panitia';
        $pengurus->foto = $ft_p;
        $pengurus->save();
        // $pi = 1; // inisialisasi variabel $pi dengan nilai 1
        // while ($pi <= 6) { // kondisi looping selama $pi kurang dari atau sama dengan 6
        //     // $c = [];
        //     // $c[] = $pi; // cetak angka $pi
        //     $pi;
        //     $pi++; // tambah 1 ke $pi setiap iterasi
        // }

        for ($r = 1; $r <= 6; $r++ ){
            $foto = null;
            if($request->hasFile('ft_anggota'.$r)) {
                $foto = $request->file('ft_anggota'.$r)->store('pengurus');
            }
            Pengurus::create([
                'tps_id' => $request->id,
                'nama' => $request->{"anggota{$r}"},
                'status' => 'Anggota',
                'foto' => $foto,
            ]);

        }


        $ft_pengawas = null;
        if($request->hasFile('ft_pengawas')) {
            $ft_pengawas =$request->file('ft_pengawas')->store('saksi');
        }

        $saksi->tps_id = $request->id;
        $saksi->nama = $request->pengawas;
        $saksi->status = 'Pengawas';
        $saksi->email = $request->emailpengawas;
        $saksi->kode = random_int(100000,999999);
        $saksi->foto = $ft_pengawas;
        $saksi->save();

        for ($i = 1; $i < Datacalon::count()+1; $i++ ){
            $ft_saksi = null;
            if($request->hasFile('ft_saksi'.$i)) {
                $ft_saksi = $request->file('ft_saksi'.$i)->store('saksi');
            }
            Saksi::create([
            'tps_id' => $request->id,
            'nama' => $request->{"namasaksi{$i}"},
            'status' => 'Saksi '.$i,
            'email' => $request->{"emailsaksi{$i}"},
            'kode' => random_int(100000,999999),
            'foto' => $ft_saksi
            ]);

            Suara::create([
                'tps_id' => $request->id,
                'suara' => 'Suara '.$i,
                'jml_suara' => 0
            ]);
        }

        Suara::create([
            'tps_id' => $request->id,
            'suara' => 'Suara Tidak Sah',
            'jml_suara' => 0
        ]);


        return redirect('/admin/tps')->with('success', 'Data berhasil ditambahkan');

        // return $request;





    }

    public function show($slug)
    {

        $tps = collect(DB::table("tps")->where("slug",$slug)->get());
        foreach ($tps as $t)
        {
            $namatps = $t->namatps;
            $id = $t->suara_id;
            $provinsi = $t->provinsi;
            $kabupaten = $t->kabupaten;
            $kecamatan = $t->kecamatan;
            $desa = $t->desa;
            $jalan = $t->jalan;
            $rt = $t->rt;
            $rw = $t->rw;
            $jml_surat = $t->jml_srt_suara;
            $tutup = $t->tutup;
        }



        $pencoblos = DB::table('pencoblos')
        ->where('provinsi', $provinsi)
        ->where('kabupaten', $kabupaten)
        ->where('kecamatan', $kecamatan)
        ->where('desa', $desa)
        ->where('jalan', $jalan)
        ->where('rt', $rt)
        ->where('rw', $rw)
        ->get();

        $suara = DB::table('suara')->where('tps_id', $id)->get();
        $sah = DB::table('suara')->where('tps_id', $id)->pluck('jml_suara')->except('suara tidak sah')->sum();
        $jumlah = DB::table('suara')->where('tps_id', $id)->pluck('jml_suara')->sum();
        $hadir = $pencoblos->pluck('hadir')->sum();
        $dpt = $pencoblos->count();
        $ketua = DB::table('pengurus')->where('tps_id',$id)->where('status', 'Ketua Panitia')->get();
        $ketua = $ketua->first();



        return view('admin.datareport', [
            'title' => 'Rekap Laporan',
            'tps'   => $tps,
            'namatps'=> $namatps,
            'hadir' => $hadir,
            'suara' => $suara,
            'sah'   => $sah,
            'jumlah' => $jumlah,
            'dpt'    => $dpt,
            'ketua' => $ketua,
            'tutup' => $tutup,
            // 'jml_surat' => $jml_surat,
            ]);
    }
    // fungsi menmpilkan form pengurus
    public function pengurus($slug)
    {
        $tps = DB::table("tps")->where("slug",$slug)->get();
        foreach ($tps as $tp){
            $pengurus = DB::table('pengurus')->where("tps_id", $tp->suara_id)->get();
            $saksi = DB::table('saksi')->where("tps_id", $tp->suara_id)->get();
        }

        return view('admin.tps.pengurus', [
            'title' => 'Pengurus',
            'penguruss' => $pengurus,
            'saksis'    => $saksi,
            'tps'   => $tps
        ]);
    }
    // fungsi menmpilkan form daftar pemilih tetap tps
    public function dpt($slug)
    {
        $tps = DB::table("tps")->where("slug",$slug)->get();

        foreach($tps as $t){
            $dpts = DB::table('pencoblos')
            ->where('provinsi', $t->provinsi)
            ->where('kabupaten', $t->kabupaten)
            ->where('kecamatan', $t->kecamatan)
            ->where('desa', $t->desa)
            ->where('jalan', $t->jalan)
            ->where('rt', $t->rt)
            ->where('rw', $t->rw)
            ->get();
        };
        // return $dpts;


        return view('admin.tps.dpt',[
            'title' => 'Daftar Pemilih Tetap',
            'tps' => $tps,
            'dpts' => $dpts
        ]);
    }

    public function editsuara($slug)
    {
        $calon = Datacalon::all();
        $tps = DB::table("tps")->where("slug",$slug)->get();
        return view('admin.editsuara',[
            'title' => 'EDIT SUARA',
            'tps'   => $tps,
            'calon' => $calon
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */


    public function rekap()
    {
        $users = DB::table('tps')
        // ->distinct()
        ->wherenotin('suara_id',[1])
        // ->unique('desa')
        // ->paginate(8)
        ->get()
        ;
        $users = $users->unique('desa')->paginate(8);

        return view('admin.rekap', [
            'title' => 'REKAP',
            'users' => $users
        ]);
    }



    public function edit(User $user, Tps $tps)
    {
        //
        $user = user::find($tps->id);
        $slug = $tps->slug;
        return view('admin.editlogin',[
            'title' => 'Edit',
            'tps'   => $tps,
            'slug'  => $slug,
            'user'  => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserRequest  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user, Tps $tps)
    {
        //
        $rules = [
            'name'  => 'required',
            'password' => 'required'
        ];

        if ($request->email != $user->email){
            $rules['email'] = 'required|unique:user';
        }

        $tps->id = $request->id;
        $tps->suara_id = $request->id;
        $tps->pencoblos_id = $request->id;
        $tps->namatps = $request->namatps;
        $tps->slug = $request->slug;
        $tps->tmp_tps = $request->tmp_tps;
        $tps->kt_anggota = $request->kt_anggota;
        $tps->save();



        $user->tps_id   = $request->id;
        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return back()->with('success', 'Data berhasil diubah');
    }


    public function tambahlogin()
    {
        $tps = tps::count();
        $tps = $tps + 1;
        $slug = 'tps-'.$tps;
        return view('admin.tambahlogin',[
            'title' => 'TAMBAH',
            'tps'   => $tps,
            'slug'  => $slug
        ]);
    }
    public function tambahdatalogin(Request $request, Tps $tps, User $user)
    {
        $tps->id = $request->id;
        $tps->suara_id = $request->id;
        $tps->pencoblos_id = $request->id;
        $tps->namatps = $request->namatps;
        $tps->slug = $request->slug;
        $tps->tmp_tps = $request->tmp_tps;
        $tps->kt_anggota = $request->kt_anggota;
        $tps->save();



        $user->tps_id   = $request->id;
        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return back()->with('success', 'Data berhasil ditambahkan');
    }

    public function lokasi($slug)
    {
        $tps = DB::table("tps")->where("slug",$slug)->get();
        return view('admin.tps.lokasi',[
            'title' => "Lokasi",
            'tps'   => $tps
        ]);
    }

    public function hapusdatalogin(Tps $tps){
        tps::destroy($tps->id);
        return back()->with('success', 'Data berhasil dihapuskan');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */

    public function pengeditan($tps)
    {
        $tpslama = DB::table('tps')->where('slug',$tps)->get();
        foreach ($tpslama as $tps){
            $idlama = $tps->id;
        }
        $penguruslama = DB::table('pengurus')->where('tps_id',$idlama)->get();
        $saksilama = DB::table('saksi')->where('tps_id',$idlama)->get();

        $userlama = DB::table('users')->where('id',$idlama)->get();
        $datacalon = DB::table('datacalon')->count();
        return view('admin.editlogin',[
            'title' => "edit",
            'tps'   => $tpslama,
            'pengurus' => $penguruslama,
            'saksi'     => $saksilama,
            'datacalon' => $datacalon,
            'user'      => $userlama,
        ]);

    }
    public function destroy(Tps $tps)
    {
        $pencoblos = db::table('pencoblos')->where('hadir', 1)
        ->where('provinsi' , $tps->provinsi)
        ->where('kabupaten' , $tps->kabupaten)
        ->where('kecamatan' , $tps->kecamatan)
        ->where('desa' , $tps->desa)
        ->where('jalan' , $tps->jalan)
        ->where('rt' , $tps->rt)
        ->where('rw' , $tps->rw)
        // ->update(['hadir' => 0])
        ->get()
        ;
        if ($pencoblos =! null){
            $pencoblos = db::table('pencoblos')->where('hadir', 1)
                ->where('provinsi' , $tps->provinsi)
                ->where('kabupaten' , $tps->kabupaten)
                ->where('kecamatan' , $tps->kecamatan)
                ->where('desa' , $tps->desa)
                ->where('jalan' , $tps->jalan)
                ->where('rt' , $tps->rt)
                ->where('rw' , $tps->rw)
                ->update(['hadir' => 0])
                ;
        }

        //
        $penguruses = DB::table('pengurus')->where('tps_id', $tps->id)->get();
        foreach ($penguruses as $pengurus) {
            if ($pengurus->foto != null) {
                $path = $pengurus->foto;
                if (Storage::exists($path)) {
                    Storage::delete($path);
                }
            }
        }
        DB::table('pengurus')->where('tps_id', $tps->id)->delete();

        $saksis = DB::table('saksi')->where('tps_id', $tps->id)->get();
        foreach ($saksis as $saksi) {
            if ($saksi->foto != null) {
                $path = $saksi->foto;
                if (Storage::exists($path)) {
                    Storage::delete($path);
                }
            }
        }
        DB::table('saksi')->where('tps_id', $tps->id)->delete();

        DB::table('suara')->where('tps_id', $tps->id)->delete();

        DB::table('users')->where('tps_id', $tps->id)->delete();

        $buktis = DB::table('bukti')->where('tps_id', $tps->id)->get();
        foreach ($buktis as $bukti) {
            if ($bukti->foto != null) {
                $path = $saksi->foto;
                if (Storage::exists($path)) {
                    Storage::delete($path);
                }
            }
        }
        DB::table('bukti')->where('tps_id', $tps->id)->delete();
        tps::destroy($tps->id);

        return redirect('/admin/tps')->with('danger', 'Data berhasil dihapuskan');
    }
    public function reset(Tps $tps)
    {
        $pencoblos = db::table('pencoblos')->where('hadir', 1)
        ->where('provinsi' , $tps->provinsi)
        ->where('kabupaten' , $tps->kabupaten)
        ->where('kecamatan' , $tps->kecamatan)
        ->where('desa' , $tps->desa)
        ->where('jalan' , $tps->jalan)
        ->where('rt' , $tps->rt)
        ->where('rw' , $tps->rw)
        ->update(['hadir' => 0])
        ;
        // ->get()

        //
        $tps->update(['tutup' => 0]);


        $suara = DB::table('suara')->where('tps_id', $tps->suara_id)->update(['jml_suara' => 0]);



        return back()->with('success', 'Data berhasil direset');
    }

    public function destroy1(Tps $tps, Suara $suara)
    {
        //
        dd($suara);

        // Suara::destroy($tps->suara->id);
        // return back()->with('success', 'Data berhasil dihapuskan');
    }





}




