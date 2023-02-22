<?php

namespace Database\Seeders;

use App\Models\Suara;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SuaraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Suara::create([
            'tps_id' => 1,
            'suara' => 'Suara 1',
            'jml_suara' => 120
        ]);
        Suara::create([
            'tps_id' => 1,
            'suara' => 'Suara 2',
            'jml_suara' => 100
        ]);
        Suara::create([
            'tps_id' => 1,
            'suara' => 'Suara Tidak Sah',
            'jml_suara' => 20
        ]);

        Suara::create([
            'tps_id' => 2,
            'suara' => 'Suara 1',
            'jml_suara' => 150
        ]);
        Suara::create([
            'tps_id' => 2,
            'suara' => 'Suara 2',
            'jml_suara' => 160
        ]);
        Suara::create([
            'tps_id' => 2,
            'suara' => 'Suara Tidak Sah',
            'jml_suara' => 30
        ]);

    }
}
