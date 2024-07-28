<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'UI/UX'],
            ['name' => 'Website'],
            ['name' => 'Android Apps'],
        ];

        foreach ($data as $category) {
            \App\Models\Category::create($category);
        }
    }
}
