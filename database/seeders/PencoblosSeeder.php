<?php

namespace Database\Seeders;

use App\Models\Pencoblos;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PencoblosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Pencoblos::factory(10)->create();

        $faker = Faker::create('id_ID');

        for ($i =1; $i <=60; $i++){
            DB::table('pencoblos')->insert([
                'hadir'         => 0,
                'kk'            => $faker->creditCardNumber(),
                'nik'           => $faker->creditCardNumber(),
                'nama'          => $faker->name(),
                'tmp_lahir'     => $faker->randomElement($array = array ('DEMAK', 'SEMARANG')),
                'tgl_lahir'     => $faker->dateTimeBetween('1990-01-01', '2012-12-31'),
                'umur'          => $faker->numberBetween(25,40),
                'sts_kawin'     => $faker->randomElement($array = array ('Menikah', 'Belum Menikah')),
                'jns_kelamin'   => $faker->randomElement($array = array ('laki-laki','perempuan')),
                'provinsi'      => 'JAWA TENGAH',
                'kabupaten'     => 'DEMAK',
                'kecamatan'     => 'SAYUNG',
                'desa'          => 'KALISARI',
                'jalan'         => 'DUKUHAN',
                'rt'            => '01',
                'rw'            => '04',
                'jns_dpt'       => $faker->randomElement($array = array ('DPT','DPPh', 'DPTb')),
                'disabilitas'   => 0,
            ]);

        };

    }
}
