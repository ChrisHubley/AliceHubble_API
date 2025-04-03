<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contents')->insert([
            'section_id' => 1,
            'type' => 'main image',
            'content' => fake()->imageUrl(),
            ]);
        DB::table('contents')->insert([
            'section_id' => 1,
            'type' => 'tag line',
            'content' => fake()->sentence()
        ]);
        DB::table('contents')->insert([
            'section_id' => 1,
            'type' => 'intro text',
            'content' => fake()->text()
        ]);
        DB::table('contents')->insert([
            'section_id' => 2,
            'type' => 'Image 1',
            'content' => fake()->imageUrl()
        ]);
        DB::table('contents')->insert([
            'section_id' => 2,
            'type' => 'Image 2',
            'content' => fake()->imageUrl()
        ]);
        DB::table('contents')->insert([
            'section_id' => 2,
            'type' => 'Image 3',
            'content' => fake()->imageUrl()
        ]);
        DB::table('contents')->insert([
            'section_id' => 2,
            'type' => 'About text',
            'content' => fake()->text()
        ]);
        DB::table('contents')->insert([
            'section_id' => 2,
            'type' => 'Image 1',
            'content' => fake()->imageUrl()
        ]);
        DB::table('contents')->insert([
            'section_id' => 3,
            'type' => 'Image',
            'content' => fake()->imageUrl()
        ]);
        DB::table('contents')->insert([
            'section_id' => 3,
            'type' => 'Tagline',
            'content' => fake()->sentence()
        ]);
        DB::table('contents')->insert([
            'section_id' => 4,
            'type' => 'Image',
            'content' => fake()->imageUrl()
        ]);
        DB::table('contents')->insert([
            'section_id' => 4,
            'type' => 'Tagline',
            'content' => fake()->sentence()
        ]);
        DB::table('contents')->insert([
            'section_id' => 5,
            'type' => 'Image',
            'content' => fake()->imageUrl()
        ]);
        DB::table('contents')->insert([
            'section_id' => 5,
            'type' => 'Tagline',
            'content' => fake()->sentence()
        ]);
        DB::table('contents')->insert([
            'section_id' => 6,
            'type' => 'Image',
            'content' => fake()->imageUrl()
        ]);
        DB::table('contents')->insert([
            'section_id' => 6,
            'type' => 'Tagline',
            'content' => fake()->sentence()
        ]);
    }
}
