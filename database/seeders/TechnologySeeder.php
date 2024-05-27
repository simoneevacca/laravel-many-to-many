<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;
class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tecnhnolgies = ['html', 'css', 'js', 'php'];

        foreach($tecnhnolgies as $tecnhnolgy) {
            $newTechnology = new Technology();
            $newTechnology->name = $tecnhnolgy;
            $newTechnology->save();
        }
    }
}
