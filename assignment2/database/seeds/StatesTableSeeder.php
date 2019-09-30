<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->insert([
            [ 'name' => 'New South Wales', 'abbreviation' => 'NSW'],
            [ 'name' => 'Queensland', 'abbreviation' => 'QLD'],
            [ 'name' => 'Australian Capital Territory', 'abbreviation' => 'ACT'],
            [ 'name' => 'Victoria', 'abbreviation' => 'VIC'],
            [ 'name' => 'Tasmania', 'abbreviation' => 'TAS'],
            [ 'name' => 'South Australia', 'abbreviation' => 'SA'],
            [ 'name' => 'Western Australia', 'abbreviation' => 'WA'],
            [ 'name' => 'Northern Territory', 'abbreviation' => 'NT'],
        ]);
    }
}
