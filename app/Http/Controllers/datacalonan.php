<?php

namespace App\Http\Controllers;

use App\Models\Datacalon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class datacalonan extends Controller
{
    //
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDatacalonRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Datacalon $datacalon)
    {

        Datacalon::create([
            'nama' => $request->nama,
            'foto' => $request->file('foto')->store('datacalon')
        ]);

        return back()->with('success', 'Data berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Datacalon  $datacalon
     * @return \Illuminate\Http\Response
     */
    public function show(Datacalon $datacalon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Datacalon  $datacalon
     * @return \Illuminate\Http\Response
     */
    public function edit(Datacalon $datacalon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDatacalonRequest  $request
     * @param  \App\Models\Datacalon  $datacalon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Datacalon $datacalon)
    {

        judul_rekap::where('id', 1)->update(['nama_acara' => $request]);
        return back('datacalon');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Datacalon  $datacalon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Datacalon $datacalon,$id)
    {
        $datacalon = Datacalon::find($id);
        Storage::delete($datacalon->foto);
        $datacalon->delete();

        return redirect('/admin/datacalon')->with('success', 'DataCalon Telah Terhapus');
    }


}
