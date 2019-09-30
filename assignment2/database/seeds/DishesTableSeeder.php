<?php

use Illuminate\Database\Seeder;

class DishesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // McDonalds menu item insertions.
        DB::table('dishes')->insert([
            [ 'name' => 'Big Mac', 'price' => 6.45, 'available' => true, 'image' => 'images/images/bigmac.png', 'user_id' => 3 ],
            [ 'name' => 'Quarter Pounder Chili', 'price' => 6.50, 'available' => true, 'image' => 'images/images/bigmac.png', 'user_id' => 3 ],
            [ 'name' => 'Double Quarter Pounder', 'price' => 7.95, 'available' => true, 'image' => 'images/images/bigmac.png', 'user_id' => 3 ],
            [ 'name' => 'Double Beef \'n\' Bacon', 'price' => 5.35, 'available' => true, 'image' => 'images/images/bigmac.png', 'user_id' => 3 ],
            [ 'name' => 'McChicken', 'price' => 6.00, 'available' => true, 'image' => 'images/images/bigmac.png', 'user_id' => 3 ],
            [ 'name' => 'Cheeseburger', 'price' => 3.30, 'available' => true, 'image' => 'images/images/bigmac.png', 'user_id' => 3 ],
            [ 'name' => 'Double Cheeseburger', 'price' => 5.10, 'available' => true, 'image' => 'images/images/bigmac.png', 'user_id' => 3 ],
        ]);

        // KCF menu item insertions
        DB::table('dishes')->insert([
            [ 'name' => 'Zinger Burger', 'price' => 6.35, 'available' => true, 'image' => 'images/images/zinger.png', 'user_id' => 4 ],
            [ 'name' => 'Double Tender Burger', 'price' => 5.45, 'available' => true, 'image' => 'images/images/zinger.png', 'user_id' => 4 ],
            [ 'name' => 'Original Recipe Burger', 'price' => 6.35, 'available' => true, 'image' => 'images/images/zinger.png', 'user_id' => 4 ],
            [ 'name' => 'Kentucky Burger', 'price' => 7.95, 'available' => true, 'image' => 'images/images/zinger.png', 'user_id' => 4 ],
            [ 'name' => 'Zinger Stacker Burger', 'price' => 8.95, 'available' => true, 'image' => 'images/images/zinger.png', 'user_id' => 4 ],
            [ 'name' => 'Zinger Bacon & Cheese Burger', 'price' => 6.95, 'available' => true, 'image' => 'images/images/zinger.png', 'user_id' => 4 ],
            [ 'name' => 'Orginal Tenders - 5 piece', 'price' => 9.95, 'available' => true, 'image' => 'images/images/zinger.png', 'user_id' => 4 ],
        ]);

        // Dominos men item insertions
        DB::table('dishes')->insert([
            [ 'name' => 'Chipotle Steak', 'price' => 13.75, 'available' => true, 'image' => 'images/images/pizza.png', 'user_id' => 5 ],
            [ 'name' => 'BBQ Steak & Bacon', 'price' => 13.75, 'available' => true, 'image' => 'images/images/pizza.png', 'user_id' => 5 ],
            [ 'name' => 'Loaded Pepperoni', 'price' => 7.95, 'available' => true, 'image' => 'images/images/pizza.png', 'user_id' => 5 ],
            [ 'name' => 'Philly Cheese Steak', 'price' => 13.75, 'available' => true, 'image' => 'images/images/pizza.png', 'user_id' => 5 ],
            [ 'name' => 'Avocado Veg', 'price' => 13.55, 'available' => true, 'image' => 'images/images/pizza.png', 'user_id' => 5 ],
            [ 'name' => 'Fire Breather', 'price' => 13.85, 'available' => true, 'image' => 'images/images/pizza.png', 'user_id' => 5 ],
            [ 'name' => 'Vegorama', 'price' => 13.85, 'available' => true, 'image' => 'images/images/pizza.png', 'user_id' => 5 ],
            [ 'name' => 'Godfather', 'price' => 13.15, 'available' => true, 'image' => 'images/images/pizza.png', 'user_id' => 5 ],
            [ 'name' => 'Hawaiian', 'price' => 12.95, 'available' => true, 'image' => 'images/images/pizza.png', 'user_id' => 5 ],
            [ 'name' => 'Supreme', 'price' => 13.95, 'available' => true, 'image' => 'images/images/pizza.png', 'user_id' => 5 ],
        ]);

        // Subway menu item insertions
        DB::table('dishes')->insert([
            [ 'name' => 'Spicy Italian', 'price' => 5.50, 'available' => true, 'image' => 'images/images/sub.png', 'user_id' => 6],
            [ 'name' => 'Steak & Cheese', 'price' => 7.75, 'available' => true, 'image' => 'images/images/sub.png', 'user_id' => 6],
            [ 'name' => 'Subway Club', 'price' => 7.75, 'available' => true, 'image' => 'images/images/sub.png', 'user_id' => 6],
            [ 'name' => 'Subway Seafood', 'price' => 7.00, 'available' => true, 'image' => 'images/images/sub.png', 'user_id' => 6],
            [ 'name' => 'BLT', 'price' => 5.50, 'available' => true, 'image' => 'images/images/sub.png', 'user_id' => 6],
            [ 'name' => 'Italiam BMT', 'price' => 6.75, 'available' => true, 'image' => 'images/images/sub.png', 'user_id' => 6],
            [ 'name' => 'Tuna Sub', 'price' => 6.75, 'available' => true, 'image' => 'images/images/sub.png', 'user_id' => 6],
            [ 'name' => 'Meatball Marinara', 'price' => 5.50, 'available' => true, 'image' => 'images/images/sub.png', 'user_id' => 6],
            [ 'name' => 'Veggie Delite', 'price' => 5.50, 'available' => true, 'image' => 'images/images/sub.png', 'user_id' => 6],
        ]);

        // Pan asia menu item insertions
        DB::table('dishes')->insert([
            [ 'name' => 'Yaki Udon', 'price' => 10.95, 'available' => true, 'image' => 'images/images/noodle.png', 'user_id' => 7],
            [ 'name' => 'Chicken Ramen', 'price' => 11.50, 'available' => true, 'image' => 'images/images/noodle.png', 'user_id' => 7],
            [ 'name' => 'Hakka Noodle', 'price' => 10.95, 'available' => true, 'image' => 'images/images/noodle.png', 'user_id' => 7],
            [ 'name' => 'Black Bean & Garlic', 'price' => 10.50, 'available' => true, 'image' => 'images/images/noodle.png', 'user_id' => 7],
            [ 'name' => 'Sweet Chilli', 'price' => 10.50, 'available' => true, 'image' => 'images/images/noodle.png', 'user_id' => 7],
            [ 'name' => 'Garlic Prawns', 'price' => 12.50, 'available' => true, 'image' => 'images/images/noodle.png', 'user_id' => 7],
            [ 'name' => 'Pad Thai', 'price' => 10.95, 'available' => true, 'image' => 'images/images/noodle.png', 'user_id' => 7],
            [ 'name' => 'Panko Chicken', 'price' => 11.50, 'available' => true, 'image' => 'images/images/noodle.png', 'user_id' => 7],
            [ 'name' => 'Chilli Men', 'price' => 10.50, 'available' => true, 'image' => 'images/images/noodle.png', 'user_id' => 7],
            [ 'name' => 'Combination Noodle', 'price' => 12.50, 'available' => true, 'image' => 'images/images/noodle.png', 'user_id' => 7],
        ]);
    }
}
