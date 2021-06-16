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
        Date::insert(['id' => 1, 'date' => '6/29', 'day' => '(火)', 'order' => 1]);
        Date::insert(['id' => 2, 'date' => '6/30', 'day' => '(水)', 'order' => 2]);
        Date::insert(['id' => 3, 'date' => '7/2', 'day' => '(金)', 'order' => 3]);
        Date::insert(['id' => 4, 'date' => '7/6', 'day' => '(火)', 'order' => 4]);
        Date::insert(['id' => 5, 'date' => '7/7', 'day' => '(水)', 'order' => 5]);
        Date::insert(['id' => 6, 'date' => '7/9', 'day' => '(金)', 'order' => 6]);
        Date::insert(['id' => 7, 'date' => '7/13', 'day' => '(火)', 'order' => 7]);
        Date::insert(['id' => 8, 'date' => '7/14', 'day' => '(水)', 'order' => 8]);
    }
}
