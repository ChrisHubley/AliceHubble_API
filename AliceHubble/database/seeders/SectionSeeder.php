<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table("sections")->insert([
           "name"=>"home",
       ]);
        DB::table("sections")->insert([
            "name"=>"releases",
        ]);
        DB::table("sections")->insert([
            "name"=>"live",
        ]);
        DB::table("sections")->insert([
            "name"=>"video",
        ]);  DB::table("sections")->insert([
        "name"=>"press",
    ]);
        DB::table("sections")->insert([
            "name"=>"shop",
        ]);
        DB::table("sections")->insert([
            "name"=>"contact",
        ]);
    }
}
