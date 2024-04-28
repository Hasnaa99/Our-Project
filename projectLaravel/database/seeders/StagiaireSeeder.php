<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class StagiaireSeeder extends Seeder
{
    public function run(): void
    {
         \App\Models\Stagiaire::factory(20)->create();
    }
}
