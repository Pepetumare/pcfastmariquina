<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            Product::create([
                'name' => "Producto $i",
                'description' => "Descripción del producto $i",
                'price' => rand(19990, 79990),
                'stock' => rand(5, 20),
                'image' => 'https://via.placeholder.com/600x400?text=Producto+' . $i,
                'category_id' => rand(1, 5),
                'supplier' => 'Dropi' // o BigBuy, AliExpress, etc.
            ]);
        }
    }
}
