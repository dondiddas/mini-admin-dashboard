<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        for($i = 1; $i <= 20; $i++){
            DB::table('students')->insert([
                'name' => "Student $i",
                'email' => "student$i@example.com",
                'course' => "BSIT",
                'section' => "A$i",
                'created_at' => now(),
                'updated_at' => now(),
            ]);
    }
}
}
