<?php

namespace Database\Seeders;

use App\Models\ClassRoom;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ClassRoom::insert([
            'name' => 'Aiu',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}