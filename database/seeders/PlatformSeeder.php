<?php

namespace Database\Seeders;

use App\Models\Platform;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Platform::insert([
            ['nome'=>'Uber'],
            ['nome'=>'99'],
            ['nome'=>'InDrive'],
            ['nome'=>'Particular']
        ]);
    }
}
