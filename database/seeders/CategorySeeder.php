<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /* Category 1 start */
        $category01 = Category::create([
            'name' => 'Watches',
            'image' => 'category_img_01.jpg',
            'parent_id' => null,
        ]);
        $category01Subcategory01 = Category::create([
            'name' => 'Men',
            'image' => null,
            'parent_id' => $category01->id,
        ]);
        $category01Subcategory02 = Category::create([
            'name' => 'Women',
            'image' => null,
            'parent_id' => $category01->id,
        ]);
        /* Category 1 end */

        /* Category 2 start */
        $category02 = Category::create([
            'name' => 'Shoes',
            'image' => 'category_img_02.jpg',
            'parent_id' => null,
        ]);
        $category02Subcategory01 = Category::create([
            'name' => 'Athletic',
            'image' => null,
            'parent_id' => $category02->id,
        ]);
        $category02Subcategory02 = Category::create([
            'name' => 'Casual',
            'image' => null,
            'parent_id' => $category02->id,
        ]);
        /* Category 2 end */

        /* Category 3 start */
        $category03 = Category::create([
            'name' => 'Accessories',
            'image' => 'category_img_03.jpg',
            'parent_id' => null,
        ]);
        $category03Subcategory01 = Category::create([
            'name' => 'Bags',
            'image' => null,
            'parent_id' => $category03->id,
        ]);
        $category03Subcategory02 = Category::create([
            'name' => 'Sunglasses',
            'image' => null,
            'parent_id' => $category03->id,
        ]);
        $category03Subcategory03 = Category::create([
            'name' => 'Wallets',
            'image' => null,
            'parent_id' => $category03->id,
        ]);
        /* Category 3 end */

    }
}
