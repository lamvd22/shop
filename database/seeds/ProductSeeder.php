<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Creating default product
        DB::table('product')->insert([
            'name' => 'iPhone X',
            'sku' => 'IPX10',
            'price' => '19000000',
            'photo_id' => 1,
            'short_description' => 'New Iphone',
            'long_description' => 'Newest Iphone from Apple',
            'updated_at' => date_create(),
            'created_at' => date_create(),
        ]);
    }
}
