<?php

namespace Database\Seeders;

use App\Models\Division;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Finance',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Marketing',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'IT Support',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Human Resource',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Sales',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        Division::insert($data);
    }
}
