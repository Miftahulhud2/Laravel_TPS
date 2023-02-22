<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laravel\Lumen\Routing\Controller as BaseController;

class DependantDropdownController extends Controller
{
    public function index()
    {
        return view('datadaerah');
    }

    public function provinces()
    {
        return \Indonesia::allProvinces();
    }

    public function cities(Request $request)
    {
        return \Indonesia::findProvince($request->id, ['cities'])->cities->pluck('name', 'id');
    }

    public function districts(Request $request)
    {
        return \Indonesia::findCity($request->id, ['districts'])->districts->pluck('name', 'id');
    }

    public function villages(Request $request)
    {
        return \Indonesia::findDistrict($request->id, ['villages'])->villages->pluck('name', 'id');
    }

    /**
     * Test Provinces Data
     *
     * @return void
     */
    public function testProvinces()
    {
        $data = RawData::getProvinces();

        $this->assertTrue(count($data) > 0);
    }

    /**
     * Test Regencies Data
     *
     * @return void
     */
    public function testRegencies()
    {
        $data = RawData::getRegencies();

        $this->assertTrue(count($data) > 0);
    }

    /**
     * Test Districts Data
     *
     * @return void
     */
    public function testDistricts()
    {
        $data = RawData::getDistricts();

        $this->assertTrue(count($data) > 0);
    }

    /**
     * Test Villages Data
     *
     * @return void
     */
    public function testVillages()
    {
        $data = RawData::getVillages();

        $this->assertTrue(count($data) > 0);
    }

    public function coba()
    {
        return view('datadaerah');
    }
}
