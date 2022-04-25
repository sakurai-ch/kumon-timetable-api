<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Frame;

class FramesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 'selectable' or 'close'

        Frame::insert(['id' =>  1, 'date_id' => 1, 'time_id' =>  1, 'priority' =>  11, 'state' => 'selectable']);
        Frame::insert(['id' =>  2, 'date_id' => 1, 'time_id' =>  2, 'priority' =>  21, 'state' => 'selectable']);
        Frame::insert(['id' =>  3, 'date_id' => 1, 'time_id' =>  3, 'priority' =>  31, 'state' => 'selectable']);
        Frame::insert(['id' =>  4, 'date_id' => 1, 'time_id' =>  4, 'priority' =>  41, 'state' => 'selectable']);
        Frame::insert(['id' =>  5, 'date_id' => 1, 'time_id' =>  5, 'priority' =>  51, 'state' => 'selectable']);
        Frame::insert(['id' =>  6, 'date_id' => 1, 'time_id' =>  6, 'priority' =>  61, 'state' => 'selectable']);
        Frame::insert(['id' =>  7, 'date_id' => 1, 'time_id' =>  7, 'priority' =>  71, 'state' => 'selectable']);
        Frame::insert(['id' =>  8, 'date_id' => 1, 'time_id' =>  8, 'priority' => 211, 'state' => 'selectable']);
        Frame::insert(['id' =>  9, 'date_id' => 1, 'time_id' =>  9, 'priority' => 221, 'state' => 'selectable']);
        Frame::insert(['id' => 10, 'date_id' => 1, 'time_id' => 10, 'priority' => 231, 'state' => 'selectable']);

        Frame::insert(['id' => 11, 'date_id' => 2, 'time_id' =>  1, 'priority' =>  12, 'state' => 'selectable']);
        Frame::insert(['id' => 12, 'date_id' => 2, 'time_id' =>  2, 'priority' =>  22, 'state' => 'selectable']);
        Frame::insert(['id' => 13, 'date_id' => 2, 'time_id' =>  3, 'priority' =>  32, 'state' => 'selectable']);
        Frame::insert(['id' => 14, 'date_id' => 2, 'time_id' =>  4, 'priority' =>  42 , 'state' => 'selectable']);
        Frame::insert(['id' => 15, 'date_id' => 2, 'time_id' =>  5, 'priority' =>  52, 'state' => 'selectable']);
        Frame::insert(['id' => 16, 'date_id' => 2, 'time_id' =>  6, 'priority' =>  62, 'state' => 'selectable']);
        Frame::insert(['id' => 17, 'date_id' => 2, 'time_id' =>  7, 'priority' =>  72, 'state' => 'selectable']);
        Frame::insert(['id' => 18, 'date_id' => 2, 'time_id' =>  8, 'priority' => 212, 'state' => 'selectable']);
        Frame::insert(['id' => 19, 'date_id' => 2, 'time_id' =>  9, 'priority' => 222, 'state' => 'selectable']);
        Frame::insert(['id' => 20, 'date_id' => 2, 'time_id' => 10, 'priority' => 232, 'state' => 'selectable']);

        Frame::insert(['id' => 21, 'date_id' => 3, 'time_id' =>  1, 'priority' =>  13, 'state' => 'selectable']);
        Frame::insert(['id' => 22, 'date_id' => 3, 'time_id' =>  2, 'priority' =>  23, 'state' => 'selectable']);
        Frame::insert(['id' => 23, 'date_id' => 3, 'time_id' =>  3, 'priority' =>  33, 'state' => 'selectable']);
        Frame::insert(['id' => 24, 'date_id' => 3, 'time_id' =>  4, 'priority' =>  43, 'state' => 'selectable']);
        Frame::insert(['id' => 25, 'date_id' => 3, 'time_id' =>  5, 'priority' =>  53, 'state' => 'selectable']);
        Frame::insert(['id' => 26, 'date_id' => 3, 'time_id' =>  6, 'priority' =>  63, 'state' => 'selectable']);
        Frame::insert(['id' => 27, 'date_id' => 3, 'time_id' =>  7, 'priority' =>  73, 'state' => 'selectable']);
        Frame::insert(['id' => 28, 'date_id' => 3, 'time_id' =>  8, 'priority' => 213, 'state' => 'selectable']);
        Frame::insert(['id' => 29, 'date_id' => 3, 'time_id' =>  9, 'priority' => 223, 'state' => 'selectable']);
        Frame::insert(['id' => 30, 'date_id' => 3, 'time_id' => 10, 'priority' => 233, 'state' => 'selectable']);

        Frame::insert(['id' => 31, 'date_id' => 4, 'time_id' =>  1, 'priority' =>  81, 'state' => 'selectable']);
        Frame::insert(['id' => 32, 'date_id' => 4, 'time_id' =>  2, 'priority' =>  91, 'state' => 'selectable']);
        Frame::insert(['id' => 33, 'date_id' => 4, 'time_id' =>  3, 'priority' => 101, 'state' => 'selectable']);
        Frame::insert(['id' => 34, 'date_id' => 4, 'time_id' =>  4, 'priority' => 111, 'state' => 'selectable']);
        Frame::insert(['id' => 35, 'date_id' => 4, 'time_id' =>  5, 'priority' => 121, 'state' => 'selectable']);
        Frame::insert(['id' => 36, 'date_id' => 4, 'time_id' =>  6, 'priority' => 131, 'state' => 'selectable']);
        Frame::insert(['id' => 37, 'date_id' => 4, 'time_id' =>  7, 'priority' => 141, 'state' => 'selectable']);
        Frame::insert(['id' => 38, 'date_id' => 4, 'time_id' =>  8, 'priority' => 241, 'state' => 'selectable']);
        Frame::insert(['id' => 39, 'date_id' => 4, 'time_id' =>  9, 'priority' => 251, 'state' => 'selectable']);
        Frame::insert(['id' => 40, 'date_id' => 4, 'time_id' => 10, 'priority' => 261, 'state' => 'selectable']);

        Frame::insert(['id' => 41, 'date_id' => 5, 'time_id' =>  1, 'priority' =>  82, 'state' => 'selectable']);
        Frame::insert(['id' => 42, 'date_id' => 5, 'time_id' =>  2, 'priority' =>  92, 'state' => 'selectable']);
        Frame::insert(['id' => 43, 'date_id' => 5, 'time_id' =>  3, 'priority' => 102, 'state' => 'selectable']);
        Frame::insert(['id' => 44, 'date_id' => 5, 'time_id' =>  4, 'priority' => 112, 'state' => 'selectable']);
        Frame::insert(['id' => 45, 'date_id' => 5, 'time_id' =>  5, 'priority' => 122, 'state' => 'selectable']);
        Frame::insert(['id' => 46, 'date_id' => 5, 'time_id' =>  6, 'priority' => 132, 'state' => 'selectable']);
        Frame::insert(['id' => 47, 'date_id' => 5, 'time_id' =>  7, 'priority' => 142, 'state' => 'selectable']);
        Frame::insert(['id' => 48, 'date_id' => 5, 'time_id' =>  8, 'priority' => 242, 'state' => 'selectable']);
        Frame::insert(['id' => 49, 'date_id' => 5, 'time_id' =>  9, 'priority' => 252, 'state' => 'selectable']);
        Frame::insert(['id' => 50, 'date_id' => 5, 'time_id' => 10, 'priority' => 262, 'state' => 'selectable']);

        Frame::insert(['id' => 51, 'date_id' => 6, 'time_id' =>  1, 'priority' =>  83, 'state' => 'selectable']);
        Frame::insert(['id' => 52, 'date_id' => 6, 'time_id' =>  2, 'priority' =>  93, 'state' => 'selectable']);
        Frame::insert(['id' => 53, 'date_id' => 6, 'time_id' =>  3, 'priority' => 103, 'state' => 'selectable']);
        Frame::insert(['id' => 54, 'date_id' => 6, 'time_id' =>  4, 'priority' => 113, 'state' => 'selectable']);
        Frame::insert(['id' => 55, 'date_id' => 6, 'time_id' =>  5, 'priority' => 123, 'state' => 'selectable']);
        Frame::insert(['id' => 56, 'date_id' => 6, 'time_id' =>  6, 'priority' => 133, 'state' => 'selectable']);
        Frame::insert(['id' => 57, 'date_id' => 6, 'time_id' =>  7, 'priority' => 143, 'state' => 'selectable']);
        Frame::insert(['id' => 58, 'date_id' => 6, 'time_id' =>  8, 'priority' => 243, 'state' => 'selectable']);
        Frame::insert(['id' => 59, 'date_id' => 6, 'time_id' =>  9, 'priority' => 253, 'state' => 'selectable']);
        Frame::insert(['id' => 60, 'date_id' => 6, 'time_id' => 10, 'priority' => 263, 'state' => 'selectable']);

    }
}
