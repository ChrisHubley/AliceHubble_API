<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 3; $i++) {
            DB::table('articles')->insert([
                'title' => fake()->sentence,
                'date' => fake()->date,
                'publication' => fake()->words(3, true),
                'quote' => fake()->sentence(),
                'link' => fake()->url(),
                'section_id' => fake()->numberBetween(1, 3),
            ]);
        }
            for ($i = 0; $i < 10; $i++) {
                DB::table('articles')->insert([
                    'title' => fake()->sentence,
                    'date' => fake()->date,
                    'publication' => fake()->words(3, true),
                    'quote' => fake()->sentence(),
                    'link' => fake()->url(),
                    'release_id' => fake()->numberBetween(1, 20),
                ]);
            }
    }
}
