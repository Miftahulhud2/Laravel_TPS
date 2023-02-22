<?php

namespace App\Http\Controllers;

use App\Models\Suara;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Http;
use App\Http\Requests\StoreSuaraRequest;
use App\Http\Requests\UpdateSuaraRequest;
use App\Charts\CovidChart;

class SuaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function chart()
    {
        // return view('suara', [
        //     'chart' => $chart,
        // ]);

    }
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
     * @param  \App\Http\Requests\StoreSuaraRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSuaraRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Suara  $suara
     * @return \Illuminate\Http\Response
     */
    public function show(Suara $suara)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Suara  $suara
     * @return \Illuminate\Http\Response
     */
    public function edit(Suara $suara)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSuaraRequest  $request
     * @param  \App\Models\Suara  $suara
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSuaraRequest $request, Suara $suara)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Suara  $suara
     * @return \Illuminate\Http\Response
     */
    public function destroy(Suara $suara)
    {
        //
    }
}
