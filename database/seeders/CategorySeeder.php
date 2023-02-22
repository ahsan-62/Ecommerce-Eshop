<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $demo_categories=[
'Man Shopping',
'Women Fashion',
'HouseHold',
'Gadget'
        ];

        foreach ($demo_categories as $value) {
            Category::create([
                'title' => $value,
                'slug' => Str::slug($value),
            ]);
    }


    }
}
