<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReleaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 15; $i++) {
            DB::table('releases')->insert([
                'title' => fake()->words(3, true),
                'date' => fake()->date(),
                'format' => 0,
                'spotifyLink' => fake()->url(),
                'shopLink' => fake()->url(),
                'image' => fake()->imageUrl()
            ]);
        }
        for ($i = 0; $i < 2; $i++) {
            DB::table('releases')->insert([
                'title' => fake()->words(3, true),
                'date' => fake()->date(),
                'format' => 1,
                'spotifyLink' => fake()->url(),
                'shopLink' => fake()->url(),
                'image' => fake()->imageUrl()
            ]);
        }
    }
}
