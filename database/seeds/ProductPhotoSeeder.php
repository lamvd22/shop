<?php

use Illuminate\Database\Seeder;

class ProductPhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Creating default product's photo
        DB::table('product_photo')->insert([
            'product_id' => 1,
            'type' => 1,
            'url' => 'img/products/1/iphone-x-select-2017.png',
        ]);
    }
}
