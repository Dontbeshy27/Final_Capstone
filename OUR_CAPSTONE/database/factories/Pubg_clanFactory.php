<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class Pubg_clanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_name' => fake()->userName(),
            'password'=> 'password',
            'email' => fake()->unique()->safeEmail(),
            'clan_name' => fake()->name(),
            'ingame_name' => fake()->name(),
            'role' => fake()->randomElement(['Support', 'Tank','Dps','Healer'])
        ];
    }
}
