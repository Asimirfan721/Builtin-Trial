<?php 

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder {
    public function run() {
        DB::table('products')->insert([
            [
                'name' => 'Casual Shirt',
                'category' => 'shirts',
                'image' => 'images/shirt1.jpg',
                'price' => 25.99,
                'description' => 'High-quality cotton casual shirt.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Classic Watch',
                'category' => 'watches',
                'image' => 'images/watch1.jpg',
                'price' => 149.99,
                'description' => 'Stylish wristwatch with leather strap.',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
