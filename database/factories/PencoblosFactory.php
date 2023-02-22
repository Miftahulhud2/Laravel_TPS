<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pencoblos>
 */
class PencoblosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'hadir'         => $this->faker->boolean(false),
            'kk'            => $this->faker->creditCardNumber(),
            'nik'           => $this->faker->creditCardNumber(),
            'nama'          => $this->faker->name(),
            'tmp_lahir'     => $this->faker->state(),
            'tgl_lahir'     => $this->faker->dateTimeBetween('1990-01-01', '2012-12-31'),
            'umur'          => $this->faker->numberBetween(25,40),
            'sts_kawin'     => $this->faker->randomElement($array = array ('Menikah', 'Belum Menikah')),
            'jns_kelamin'   => $this->faker->randomElement($array = array ('laki-laki','perempuan')),
            'provinsi'      =>  $this->faker->randomElement($array = array ('Jawa Tengah','Jawa Timur')),
            'kabupaten'     =>  $this->faker->randomElement($array = array ('Semarang','Jakarta')),
            'kecamatan'     =>  $this->faker->randomElement($array = array ('Sayung','Jetak')),
            'desa'          =>  $this->faker->randomElement($array = array ('Kalisari','Blerong')),
            'jalan'          =>  $this->faker->randomElement($array = array ('Dukuhan','Dempel')),
            'rt'            =>  $this->faker->randomElement($array = array ('02','03')),
            'rw'            =>  $this->faker->randomElement($array = array ('02','03')),
        ];
    }
}
