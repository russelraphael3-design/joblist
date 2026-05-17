<?php

namespace Database\Seeders;
use App\Models\listjob;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          listjob::factory(10)->create();
    }
}
