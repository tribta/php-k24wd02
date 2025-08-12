<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::query()->truncate();
        User::factory()->create(["name" => "Zeus","email" => "z@olympus.gr",]);
        User::factory()->create(["name" => "Hades","email" => "h@olympus.gr",]);
        User::factory()->create(["name" => "Poseidon","email" => "p@olympus.gr"]);
    }
}
