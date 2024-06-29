<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create ([
            'name' => 'Product A',
            'description' => 'Product A description',
            'price' => 100,
            'quantity' => 10,
        ]);
    }
}
