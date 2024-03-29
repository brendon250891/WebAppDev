<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // McDonalds orders
        DB::table('orders')->insert([
            ['consumer_id' => 2, 'restaurant_id' => 3, 'dish_id' => 1, 'total' => 6.45, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-07-07")],
            ['consumer_id' => 2, 'restaurant_id' => 3, 'dish_id' => 3, 'total' => 7.95, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-08-15")],
            ['consumer_id' => 2, 'restaurant_id' => 6, 'dish_id' => 32, 'total' => 5.50, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-09-20")],
            ['consumer_id' => 2, 'restaurant_id' => 3, 'dish_id' => 1, 'total' => 6.45, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-07-23")],
            ['consumer_id' => 2, 'restaurant_id' => 7, 'dish_id' => 41, 'total' => 11.50, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-10-03")],

            ['consumer_id' => 8, 'restaurant_id' => 4, 'dish_id' => 8, 'total' => 5.45, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-07-09")],
            ['consumer_id' => 8, 'restaurant_id' => 4, 'dish_id' => 12, 'total' => 8.95, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-07-15")],
            ['consumer_id' => 8, 'restaurant_id' => 5, 'dish_id' => 15, 'total' => 13.75, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-08-22")],
            ['consumer_id' => 8, 'restaurant_id' => 5, 'dish_id' => 15, 'total' => 13.75, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-08-14")],
            ['consumer_id' => 8, 'restaurant_id' => 6, 'dish_id' => 26, 'total' => 7.75, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-09-06")],
            ['consumer_id' => 8, 'restaurant_id' => 7, 'dish_id' => 41, 'total' => 11.50, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-10-07")],

            ['consumer_id' => 9, 'restaurant_id' => 3, 'dish_id' => 1, 'total' => 6.45, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-08-24")],
            ['consumer_id' => 9, 'restaurant_id' => 4, 'dish_id' => 10, 'total' => 6.35, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-09-07")],
            ['consumer_id' => 9, 'restaurant_id' => 4, 'dish_id' => 10, 'total' => 6.35, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-09-15")],
            ['consumer_id' => 9, 'restaurant_id' => 5, 'dish_id' => 24, 'total' => 13.95, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-09-20")],
            ['consumer_id' => 9, 'restaurant_id' => 5, 'dish_id' => 24, 'total' => 13.95, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-10-07")],
            ['consumer_id' => 9, 'restaurant_id' => 6, 'dish_id' => 33, 'total' => 5.50, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-10-21")],

            ['consumer_id' => 10, 'restaurant_id' => 3, 'dish_id' => 1, 'total' => 6.45, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-07-07")],
            ['consumer_id' => 10, 'restaurant_id' => 4, 'dish_id' => 8, 'total' => 6.35, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-07-16")],
            ['consumer_id' => 10, 'restaurant_id' => 4, 'dish_id' => 8, 'total' => 6.35, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-08-10")],
            ['consumer_id' => 10, 'restaurant_id' => 5, 'dish_id' => 24, 'total' => 13.95, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-08-17")],
            ['consumer_id' => 10, 'restaurant_id' => 5, 'dish_id' => 23, 'total' => 12.95, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-09-07")],
            ['consumer_id' => 10, 'restaurant_id' => 7, 'dish_id' => 41, 'total' => 11.50, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-09-17")],
            ['consumer_id' => 10, 'restaurant_id' => 7, 'dish_id' => 43, 'total' => 12.50, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-10-07")],

            ['consumer_id' => 10, 'restaurant_id' => 3, 'dish_id' => 1, 'total' => 12.50, 'paid' => true, 'delivered' => true, 
            'created_at' => date("now")],
            ['consumer_id' => 10, 'restaurant_id' => 3, 'dish_id' => 2, 'total' => 12.50, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-09-23")],
            ['consumer_id' => 10, 'restaurant_id' => 3, 'dish_id' => 3, 'total' => 12.50, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-09-16")],
            ['consumer_id' => 10, 'restaurant_id' => 3, 'dish_id' => 4, 'total' => 12.50, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-09-09")],
            ['consumer_id' => 10, 'restaurant_id' => 3, 'dish_id' => 5, 'total' => 12.50, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-09-02")],
            ['consumer_id' => 10, 'restaurant_id' => 3, 'dish_id' => 6, 'total' => 12.50, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-08-26")],
            ['consumer_id' => 10, 'restaurant_id' => 3, 'dish_id' => 7, 'total' => 12.50, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-08-19")],
            ['consumer_id' => 10, 'restaurant_id' => 3, 'dish_id' => 1, 'total' => 12.50, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-08-12")],
            ['consumer_id' => 10, 'restaurant_id' => 3, 'dish_id' => 2, 'total' => 12.50, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-08-05")],
            ['consumer_id' => 10, 'restaurant_id' => 3, 'dish_id' => 3, 'total' => 12.50, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-07-29")],
            ['consumer_id' => 10, 'restaurant_id' => 3, 'dish_id' => 4, 'total' => 12.50, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-07-22")],
            ['consumer_id' => 10, 'restaurant_id' => 3, 'dish_id' => 5, 'total' => 12.50, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-07-15")],

            ['consumer_id' => 10, 'restaurant_id' => 3, 'dish_id' => 6, 'total' => 12.50, 'paid' => true, 'delivered' => true, 
            'created_at' => date("now")],
            ['consumer_id' => 10, 'restaurant_id' => 3, 'dish_id' => 7, 'total' => 12.50, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-09-23")],
            ['consumer_id' => 10, 'restaurant_id' => 3, 'dish_id' => 1, 'total' => 12.50, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-09-16")],
            ['consumer_id' => 10, 'restaurant_id' => 3, 'dish_id' => 2, 'total' => 12.50, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-09-09")],
            ['consumer_id' => 10, 'restaurant_id' => 3, 'dish_id' => 3, 'total' => 12.50, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-09-02")],
            ['consumer_id' => 10, 'restaurant_id' => 3, 'dish_id' => 4, 'total' => 12.50, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-08-26")],
            ['consumer_id' => 10, 'restaurant_id' => 3, 'dish_id' => 5, 'total' => 12.50, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-08-19")],
            ['consumer_id' => 10, 'restaurant_id' => 3, 'dish_id' => 6, 'total' => 12.50, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-08-12")],
            ['consumer_id' => 10, 'restaurant_id' => 3, 'dish_id' => 7, 'total' => 12.50, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-08-05")],
            ['consumer_id' => 10, 'restaurant_id' => 3, 'dish_id' => 1, 'total' => 12.50, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-07-29")],
            ['consumer_id' => 10, 'restaurant_id' => 3, 'dish_id' => 2, 'total' => 12.50, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-07-22")],
            ['consumer_id' => 10, 'restaurant_id' => 3, 'dish_id' => 3, 'total' => 12.50, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-07-15")],

            ['consumer_id' => 10, 'restaurant_id' => 3, 'dish_id' => 4, 'total' => 12.50, 'paid' => true, 'delivered' => true, 
            'created_at' => date("now")],
            ['consumer_id' => 10, 'restaurant_id' => 3, 'dish_id' => 5, 'total' => 12.50, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-09-23")],
            ['consumer_id' => 10, 'restaurant_id' => 3, 'dish_id' => 6, 'total' => 12.50, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-09-16")],
            ['consumer_id' => 10, 'restaurant_id' => 3, 'dish_id' => 7, 'total' => 12.50, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-09-09")],
            ['consumer_id' => 10, 'restaurant_id' => 3, 'dish_id' => 1, 'total' => 12.50, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-09-02")],
            ['consumer_id' => 10, 'restaurant_id' => 3, 'dish_id' => 2, 'total' => 12.50, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-08-26")],
            ['consumer_id' => 10, 'restaurant_id' => 3, 'dish_id' => 3, 'total' => 12.50, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-08-19")],
            ['consumer_id' => 10, 'restaurant_id' => 3, 'dish_id' => 4, 'total' => 12.50, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-08-12")],
            ['consumer_id' => 10, 'restaurant_id' => 3, 'dish_id' => 5, 'total' => 12.50, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-08-05")],
            ['consumer_id' => 10, 'restaurant_id' => 3, 'dish_id' => 6, 'total' => 12.50, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-07-29")],
            ['consumer_id' => 10, 'restaurant_id' => 3, 'dish_id' => 7, 'total' => 12.50, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-07-22")],
            ['consumer_id' => 10, 'restaurant_id' => 3, 'dish_id' => 1, 'total' => 12.50, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-07-15")],

            ['consumer_id' => 10, 'restaurant_id' => 3, 'dish_id' => 2, 'total' => 12.50, 'paid' => true, 'delivered' => true, 
            'created_at' => date("now")],
            ['consumer_id' => 10, 'restaurant_id' => 3, 'dish_id' => 3, 'total' => 12.50, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-09-23")],
            ['consumer_id' => 10, 'restaurant_id' => 3, 'dish_id' => 4, 'total' => 12.50, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-09-16")],
            ['consumer_id' => 10, 'restaurant_id' => 3, 'dish_id' => 5, 'total' => 12.50, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-09-09")],
            ['consumer_id' => 10, 'restaurant_id' => 3, 'dish_id' => 6, 'total' => 12.50, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-09-02")],
            ['consumer_id' => 10, 'restaurant_id' => 3, 'dish_id' => 7, 'total' => 12.50, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-08-26")],
            ['consumer_id' => 10, 'restaurant_id' => 3, 'dish_id' => 1, 'total' => 12.50, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-08-19")],
            ['consumer_id' => 10, 'restaurant_id' => 3, 'dish_id' => 2, 'total' => 12.50, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-08-12")],
            ['consumer_id' => 10, 'restaurant_id' => 3, 'dish_id' => 3, 'total' => 12.50, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-08-05")],
            ['consumer_id' => 10, 'restaurant_id' => 3, 'dish_id' => 4, 'total' => 12.50, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-07-29")],
            ['consumer_id' => 10, 'restaurant_id' => 3, 'dish_id' => 5, 'total' => 12.50, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-07-22")],
            ['consumer_id' => 10, 'restaurant_id' => 3, 'dish_id' => 6, 'total' => 12.50, 'paid' => true, 'delivered' => true, 
            'created_at' => date("2019-07-15")],
        ]);
    }
}
