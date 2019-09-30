<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds
     *
     * @return void
     */
    public function run()
    {
        // Admin insertions
        DB::table('users')->insert([
            [ 'name' => 'Admin', 'email' => 'admin@site.com', 'userType' => 'administrator', 
            'password' => bcrypt('admin'), 'approved' => 'approved', 'streetNumber' => '160',
            'streetName' => 'Darlington Drive', 'city' => 'Banora Point', 'postcode' => '2486',
            'state_id' => 2]
        ]);

        // Consumer insertions
        DB::table('users')->insert([
            [ 'name' => 'Brendon Willoughby', 'email' => 'b.willoughby@email.com', 'userType' => 'consumer', 
            'password' => bcrypt('brendon123'), 'approved' => 'approved', 'streetNumber' => '33',
            'streetName' => 'Greenway Drive', 'city' => 'Banora Point', 'postcode' => '2486',
            'state_id' => 1]
        ]);

        // Restaurant insertions
        DB::table('users')->insert([
            ['name' => 'McDonalds', 'email' => 'mcdonalds@email.com', 'userType' => 'restaurant', 'password' => bcrypt(123),
            'approved' => 'approved', 'streetNumber' => '11', 'streetName' => 'Pioneer Parade', 'city' => 'Banora Point',
            'postcode' => '2486', 'state_id' => 1],
            ['name' => 'KFC', 'email' => 'kfc@email.com', 'userType' => 'restaurant', 'password' => bcrypt(123),
            'approved' => 'approved', 'streetNumber' => '23', 'streetName' => 'Minjungbal Drive', 'city' => 'Tweed Heads',
            'postcode' => '2486', 'state_id' => 1],
            ['name' => 'Domino\'s Pizza', 'email' => 'dominos@email.com', 'userType' => 'restaurant', 'password' => bcrypt(123),
            'approved' => 'approved', 'streetNumber' => '4', 'streetName' => 'Minjungbal Drive', 'city' => 'Tweed Heads', 
            'postcode' => '2486', 'state_id' => 1],
            ['name' => 'Subway', 'email' => 'subway@email.com', 'userType' => 'restaurant', 'password' => bcrypt(123),
            'approved' => 'approved', 'streetNumber' => '89', 'streetName' => 'Marine Parade', 'city' => 'Coolangatta', 
            'postcode' => '2488', 'state_id' => 2],
            ['name' => 'Pan Asia', 'email' => 'panasian@email.com', 'userType' => 'restaurant', 'password' => bcrypt(123),
            'approved' => 'approved', 'streetNumber' => '20', 'streetName' => 'Minjungbal Drive', 'city' => 'Tweed Heads',
            'postcode' => '2486', 'state_id' => 1],
        ]);

        DB::table('users')->insert([
            ['name' => 'John Smith', 'email' => 'jsmith@email.com', 'userType' => 'consumer', 'password' => bcrypt(123),
            'approved' => 'approved', 'streetNumber' => '180', 'streetName' => 'Terranora Road', 'city' => 'Banora Point',
            'postcode' => '2486', 'state_id' => 1],
            ['name' => 'Jane Doe', 'email' => 'jdoe@email.com', 'userType' => 'consumer', 'password' => bcrypt(123),
            'approved' => 'approved', 'streetNumber' => '20', 'streetName' => 'Wharf Street', 'city' => 'Tweed Heads',
            'postcode' => '2486', 'state_id' => 1],
            ['name' => 'Bob Down', 'email' => 'bdown@email.com', 'userType' => 'consumer', 'password' => bcrypt(123),
            'approved' => 'approved', 'streetNumber' => '43', 'streetName' => 'Sand Street', 'city' => 'Kingscliff',
            'postcode' => '2487', 'state_id' => 1],
        ]);
    }
}
