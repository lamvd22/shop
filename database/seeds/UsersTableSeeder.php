<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Creating default user
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@shop.com',
            'password' => '',
            'updated_at' => date_create(),
            'created_at' => date_create(),
        ]);
    }
}
