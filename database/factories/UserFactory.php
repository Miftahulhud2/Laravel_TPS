<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
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
            self::$id = User::query()->max("id") ?? 0;
            // Initialize the id from database if exists.
            // If conditions is necessary otherwise it would return same max id.
        }

        self::$id++;

        return [
            'name' => fake()->name(),
            'tps_id' => self::$id,
            'email' => fake()->safeEmail(),
            // 'is_admin' => ,
            'email_verified_at' => now(),
            'password' => bcrypt('tpsterbuka'), // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
