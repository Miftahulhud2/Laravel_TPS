<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TpsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $id = 2;
        $namatps ="TPS 1";
        $slug = Str::slug($namatps);

        DB::table('users')->insert([
            'tps_id' => $id,
            'name' => $faker->name,
            'email' => $faker->firstName.'_'.$faker->lastName.'@mail.com',
            'password' => Hash::make('password'),

        ]);

        DB::table('tps')->insert([

            'suara_id'=>$id,
            'pengurus_id'=> $id,
            'saksi_id'=> $id,
            'tutup'=> 0,
            'namatps'=>  $namatps,
            'slug'=> $slug,
            'provinsi'=> 'JAWA TENGAH',
            'kabupaten'=> 'DEMAK',
            'kecamatan'=> 'SAYUNG',
            'desa'=> 'KALISARI',
            'jalan'=> 'DUKUHAN',
            'rt'=> 01,
            'rw'=> 01,
            'jml_srt_suara' => 0,
            'jml_srt_rusak' => 0,
        ]);

        // DB::table('suara')->insert([

        //     'tps_id' =>$id,
        //     'suara' => 'Suara 1',
        //     'jml_suara' => 0,

        // ]);
        // DB::table('suara')->insert([

        //     'tps_id' =>$id,
        //     'suara' => 'Suara 2',
        //     'jml_suara' => 0,

        // ]);
        // DB::table('suara')->insert([

        //     'tps_id' =>$id,
        //     'suara' => 'Suara Tidak Sah',
        //     'jml_suara' => 0,

        // ]);

        // DB::table('pengurus')->insert([
        //     'tps_id' => $id,
        //     'nama' => $faker->name(),
        //     'status' => 'Ketua Panitia',
        // ]);
        // for ($i =1; $i <=5; $i++){
        //     DB::table('pengurus')->insert([
        //         'tps_id' => $id,
        //         'nama' => $faker->name(),
        //         'status' => 'Anggota',
        //     ]);
        // }
        // DB::table('saksi')->insert([
        //     'tps_id' => $id,
        //     'nama' => $faker->name(),
        //     'status' => 'Pengawas',
        //     'email' => $faker->firstName.'.'.$faker->lastName.'@mail.com',
        //     'kode' => $faker->randomNumber(6),
        // ]);
        // DB::table('saksi')->insert([
        //     'tps_id' => $id,
        //     'nama' => $faker->name(),
        //     'status' => 'Saksi 1',
        //     'email' => $faker->firstName.'.'.$faker->lastName.'@mail.com',
        //     'kode' => $faker->randomNumber(6),
        // ]);
        // DB::table('saksi')->insert([
        //     'tps_id' => $id,
        //     'nama' => $faker->name(),
        //     'status' => 'Saksi 2',
        //     'email' => $faker->firstName.'.'.$faker->lastName.'@mail.com',
        //     'kode' => $faker->randomNumber(6),
        // ]);
    }
}
