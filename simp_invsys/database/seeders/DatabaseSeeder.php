<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name'          => 'ADMIN Frances',
            'email'         => 'admin@email.com',
            'password'      => bcrypt('adminces'),
            'created_at'    => date("Y-m-d H:i:s"),
        ]);

        $brandData = [
            [
                'brand'          => 'Rakk',
            ],
            [
                'brand'          => 'Logitech',
            ],
            [
                'brand'          => 'Asus',
            ],
            [
                'brand'          => 'Dell',
            ],
        ];

        foreach ($brandData as $branddata) {
            \App\Models\Brand::factory()->create($branddata);
        }

        $catData = [
            [
                'title'          => 'Mouse',
            ],
            [
                'title'          => 'Keyboard',
            ],
            [
                'title'          => 'Monitory',
            ],
            [
                'title'          => 'Speaker',
            ],
        ];

        foreach ($catData as $catdata) {
            \App\Models\Category::factory()->create($catdata);
        }
    }
}
