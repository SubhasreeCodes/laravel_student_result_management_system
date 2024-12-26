<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Group; // Import the "Group" model

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $groups = [
            [
                'name' => 'First',
                'numeric' => '1'
            ],
            [
                'name' => 'Second',
                'numeric' => '2'
            ],
            [
                'name' => 'Third',
                'numeric' => '3'
            ],
        ];
        
        // Group::insert($groups);
        foreach ($groups as $row) 
        {
            Group::create($row);
        }
    }
}
