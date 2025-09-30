<?php

namespace Database\Seeders;

use App\Models\UserNotes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserNotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserNotes::factory()->count(10)->create();
    }
}
