<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 3; $i++) {
            DB::table('releases')->insert([
                'publication' => fake()->words(3, true),
                'text' => fake()->sentence(),
                'link' => fake()->url(),
                'section_id' => fake()->numberBetween(1, 3),
            ]);
            for ($i = 0; $i < 10; $i++) {
                DB::table('releases')->insert([
                    'publication' => fake()->words(3, true),
                    'text' => fake()->sentence(),
                    'link' => fake()->url(),
                    'release_id' => fake()->numberBetween(1, 20),
                ]);
            }
        }
    }
}
