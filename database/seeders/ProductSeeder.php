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
        $now = now();

        Product::insert([
            [
                'name' => 'iPhone 15 Pro Max',
                'slug' => 'iphone-15-pro-max',
                'description' => 'Misplaced your iPhone? The latest Apple Watch models can show you its approximate distance and direction.21 To set up a group photo on your iPhone, join the group and use Apple Watch as a viewfinder to snap the shot. And when you take a call on your Apple Watch, just tap your iPhone to continue the conversation there.',
                'price' => 28990000,
                'discount' => 3,
                'image_url' => 'https://www.apple.com/v/iphone/home/bv/images/overview/select/iphone_15_pro__bpnjhcrxofqu_large_2x.png',
                'stock' => 143,
                'category_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Samsung Galaxy S22 Ultra',
                'slug' => 'samsung-galaxy-s22-ultra',
                'description' => 'Misplaced your iPhone? The latest Apple Watch models can show you its approximate distance and direction.21 To set up a group photo on your iPhone, join the group and use Apple Watch as a viewfinder to snap the shot. And when you take a call on your Apple Watch, just tap your iPhone to continue the conversation there.',
                'price' => 28990000,
                'discount' => 3,
                'image_url' => 'https://samstore.com.vn/image/cache/catalog/product/dien-thoai/samsung-s22-ultra-den-500x500.png',
                'stock' => 934,
                'category_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
