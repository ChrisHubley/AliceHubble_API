<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 15; $i++) {
            DB::table('videos')->insert([
                'title' => fake()->words(3, true),
                'date' => fake()->date(),
                'release_id' => fake()->numberBetween(1, 15),
                'link' => fake()->url(),
                'image' => fake()->imageUrl()
            ]);
        }
    }
}
