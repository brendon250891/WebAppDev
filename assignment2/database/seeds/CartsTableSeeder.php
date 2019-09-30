<?php

use Illuminate\Database\Seeder;

class CartsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carts')->insert([
            ['user_id' => 2, 'dish_id' => NULL, 'total' => 0.0, 'quantity' => 0]
        ]);
    }
}
