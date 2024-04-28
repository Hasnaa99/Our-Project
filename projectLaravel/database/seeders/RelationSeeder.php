<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\House;
use App\Models\User;

class RelationSeeder extends Seeder
{

    public function run(): void
    {
        User::factory(10)->create();
        House::factory(10)->create();


    }
}
