<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Date;

class DatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Date::insert(['id' => 1, 'date' => '5/10', 'day' => '(火)', 'order' => 1]);
        Date::insert(['id' => 2, 'date' => '5/13', 'day' => '(金)', 'order' => 2]);
        Date::insert(['id' => 3, 'date' => '5/14', 'day' => '(土)', 'order' => 3]);
        Date::insert(['id' => 4, 'date' => '5/17', 'day' => '(火)', 'order' => 4]);
        Date::insert(['id' => 5, 'date' => '5/18', 'day' => '(水)', 'order' => 5]);
        Date::insert(['id' => 6, 'date' => '5/20', 'day' => '(金)', 'order' => 6]);

    }
}
