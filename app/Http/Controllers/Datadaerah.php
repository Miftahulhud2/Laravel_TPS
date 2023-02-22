<?php

namespace App\Http\Controllers;

use App\Models\Regency;
use App\Models\Province;
use App\Models\District;
use App\Models\Village;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class Datadaerah extends Controller
{
    public function index()
    {
        $provinces = Province::all();

        return view('datadaerah', compact('provinces'));
    }
    public function getkabupaten(Request $request)
    {
        $id_provinsi = $request->id_provinsi;

        $kabupatens = Regency::where('province_id', $id_provinsi)->get();


        
        foreach($kabupatens as $kabupaten) {
            echo "<option value='$kabupaten->id'>$kabupaten->name</option>";

        }
    }
    public function getkecamatan(Request $request)
    {
        $id_kabupaten = $request->id_kabupaten;

        $kecamatans = District::where('regency_id', $id_kabupaten)->get();

        echo "<option>pilih kabupaten</option>";
        foreach($kecamatans as $kecamatan) {
            echo "<option value='$kecamatan->id'>$kecamatan->name</option>";

        }
    }
    public function getdesa(Request $request)
    {
        $id_regency = $request->id_regency;

        $desas = District::where('district_id', $id_regency)->get();

        echo "<option>pilih kabupaten</option>";
        foreach($desas as $desa) {
            echo "<option value='$desa->id'>$desa->name</option>";

        }
    }
}
