<?php

namespace Database\Factories;

use App\Models\Tps;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\tps>
 */


class TpsFactory extends Factory
{


    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected static int $id = 0;
    public function definition()
    {
        if ( self::$id == 0 ) {
            self::$id = Tps::query()->max("id") ?? 0;
            // Initialize the id from database if exists.
            // If conditions is necessary otherwise it would return same max id.
        }

        self::$id++;


        return [
            
            'suara_id' => self::$id,
            'namatps' => $nama = 'TPS ' . self::$id,
            'slug' => Str::slug($nama, '-'),
            'tmp_tps' => $this->faker->address,
            'kt_anggota' => $this->faker->firstNameMale,
        ];
    }
}
