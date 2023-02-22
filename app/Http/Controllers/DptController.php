<?php

namespace App\Http\Controllers;

use App\Models\Pencoblos;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class DptController extends Controller
{
    public function show()
    {

    }
    public function create(Request $request,Pencoblos $pencoblos)
    {

        $request->validate([
            'kk'    => 'required|numeric',
            'nik'   => 'required|numeric',
            'nama'   => 'required',
            'umur'   => 'required|numeric',
            'tmp_lahir'   => 'required',
            'tgl_lahir'   => 'required',
            'provinsi'   => 'required',
            'kabupaten'   => 'required',
            'kecamatan'   => 'required',
            'desa'   => 'required',
            'jalan'   => 'required',
            'rt'   => 'required|numeric',
            'rw'   => 'required|numeric',
        ]
        ,[
            'kk.required' => 'Nomor Kartu Keluarga harus diisi',
            'kk.numeric' => 'Nomor Kartu Keluarga harus diisi dengan angka',
            // 'kk.max' => 'Nomor Kartu Keluarga harus diisi dengan 16 angka',
            // 'kk.min' => 'Nomor Kartu Keluarga harus diisi dengan 16 angka',
            'nik.required' => 'Nomor Induk Kependudukan harus diisi',
            'nik.numeric' => 'Nomor Induk Kependudukan harus diisi dengan angka',
            // 'nik.max' => 'Nomor Induk Kependudukan harus diisi dengan 16 angka',
            // 'nik.min' => 'Nomor Induk Kependudukan harus diisi dengan 16 angka',
            'nama.required' => 'Nama Peserta harus diisi',
            'umur.required' => 'Umur harus diisi',
            'umur.numeric' => 'Umur harus diisi dengan angka',
            'tmp_lahir.required' => 'Tempat lahir harus diisi',
            'tgl_lahir.required' => 'Tanggal Lahir harus diisi',
            'provinsi.required' => 'Provinsi harus diisi',
            'kabupaten.required' => 'Kanupaten harus diisi',
            'kecamatan.required' => 'Kecamatan harus diisi',
            'desa.required' => 'Desa harus diisi',
            'jalan.required' => 'Jalan harus diisi',
            'rt.required' => 'Rt harus diisi',
            'rt.numeric' => 'Rt harus diisi dengan angka',
            'rw.required' => 'Rw harus diisi',
            'rw.numeric' => 'Rw harus diisi dengan angka',
        ]
    );
        $disabilitas = 1;
        if ($request->disabilitas == null)
        {
            $disabilitas = 0;
        }
        Pencoblos::create([
            'hadir' => 0,
            'kk'    => $request->kk,
            'nik'      => $request->nik,
            'nama'      => $request->nama,
            'tmp_lahir'      => $request->tmp_lahir,
            'tgl_lahir'      => $request->tgl_lahir,
            'umur'      => $request->umur,
            'sts_kawin'      => $request->sts_kawin,
            'jns_kelamin'      => $request->jns_kelamin,
            'provinsi'      => $request->provinsi,
            'kabupaten'      => $request->kabupaten,
            'kecamatan'      => $request->kecamatan,
            'desa'      => $request->desa,
            'jalan'      => $request->jalan,
            'rt'      => $request->rt,
            'rw'      => $request->rw,
            'jns_dpt' => $request->jns_dpt,
            'disabilitas' => $disabilitas,
        ]);
        return redirect("/admin/daftar-peserta-tetap/{$request->provinsi}/{$request->kabupaten}/{$request->kecamatan}/{$request->desa}")->with('success', 'Data berhasil ditambahkan');
    }
    public function edit($id)
    {
        $dpt = DB::table('pencoblos')->where('id',$id)->get();
        return view('admin.editdpt',[
            'title' => 'DAFTAR PESERTA TETAP',
            'dpt'   => $dpt,
        ]);
    }

    public function update(Request $request)
    {
        $disabilitas = 1;
        if ($request->disabilitas == null)
        {
            $disabilitas = 0;
        }
        Pencoblos::where('id',$request->id)->update([
            'hadir' => 0,
            'kk'    => $request->kk,
            'nik'      => $request->nik,
            'nama'      => $request->nama,
            'tmp_lahir'      => $request->tmp_lahir,
            'tgl_lahir'      => $request->tgl_lahir,
            'umur'      => $request->umur,
            'sts_kawin'      => $request->sts_kawin,
            'jns_kelamin'      => $request->jns_kelamin,
            'provinsi'      => $request->provinsi,
            'kabupaten'      => $request->kabupaten,
            'kecamatan'      => $request->kecamatan,
            'desa'      => $request->desa,
            'jalan'      => $request->jalan,
            'rt'      => $request->rt,
            'rw'      => $request->rw,
            'jns_dpt' => $request->jns_dpt,
            'disabilitas' => $disabilitas
        ]);
        return redirect("/admin/daftar-peserta-tetap/{$request->provinsi}/{$request->kabupaten}/{$request->kecamatan}/{$request->desa}")->with('success', 'Data berhasil diedit');
    }

    public function delete(Pencoblos $pencoblos)
    {

        Pencoblos::destroy($pencoblos->id);

        return back()->with('danger', 'Data berhasil dihapuskan');
    }
}
