<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Teacher::firstOrCreate([
                'name' => 'Budi Santoso',
                'nip' => '19850401',
                'subject' => 'Matematika'
        ]);

    }
}