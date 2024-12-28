<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin')
        ]);

        // call the Group Seeder class
        $this->call(GroupSeeder::class);

        // call the Section Seeder class
        $this->call(SectionSeeder::class);

        // call the GroupSection Seeder class
        $this->call(GroupSectionSeeder::class);

        // call the Student Seeder class
        $this->call(StudentSeeder::class);

        // call the Student Group Section Seeder class
        $this->call(StudentGroupSectionSeeder::class);
    }
}
