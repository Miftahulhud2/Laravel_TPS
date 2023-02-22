<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Tps;
use App\Models\Suara;
use App\Models\Datacalon;
use App\Models\Pencoblos;
use App\Models\judul_rekap;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;
use Database\Seeders\IndoRegionRegencySeeder;
use Database\Seeders\IndoRegionVillageSeeder;
use Database\Seeders\IndoRegionDistrictSeeder;
use Database\Seeders\IndoRegionProvinceSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //isi manual database
        User::create([
            'tps_id' => 1,
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => bcrypt('admin'), // password
            'remember_token' => '102938',
        ]);


        judul_rekap::create([
            'nama_acara' => 'Tentukan Acara Pemilihan',
        ]);


        // memanggil factory
        // \App\Models\User::factory(10)->create();
        // \App\Models\Pencoblos::factory(20)->create();
        // \App\Models\tps::factory(10)->create();
        // \App\Models\Datacalon::create([
        //     'foto1'=> 'image.jpg',
        //     'foto2'=> 'image2.jpg',
        //     'nm_calon1'=> 'Joko Widodo',
        //     'nm_w_calon1'=> 'Ma ruf Amin',
        //     'nm_calon2'=> 'Prabowo Subianto',
        //     'nm_w_calon2'=> 'Sandiaga',
        // ]);

        // $this->call(IndoRegionProvinceSeeder::class);
        // $this->call(IndoRegionRegencySeeder::class);
        // $this->call(IndoRegionDistrictSeeder::class);
        // $this->call(IndoRegionVillageSeeder::class);
    }
}
