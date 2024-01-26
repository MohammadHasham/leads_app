<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Lead;

class LeadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Lead::factory(2000)->create();
    }
}
