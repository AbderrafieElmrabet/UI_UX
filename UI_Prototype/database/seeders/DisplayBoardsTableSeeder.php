<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DisplayBoardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('display_boards')->insert([
            [
                'title' => 'Annual Sports Day',
                'content' => 'Join us for the annual sports day event!',
                'start_date' => '2025-02-01 10:00:00',
                'end_date' => '2025-02-01 16:00:00',
                'image_path' => 'images/sports_day.jpg',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Science Exhibition',
                'content' => 'Showcase your projects at the annual science exhibition.',
                'start_date' => '2025-03-10 09:00:00',
                'end_date' => '2025-03-10 15:00:00',
                'image_path' => 'images/science_exhibition.jpg',
                'status' => 'Inactive',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Music Concert',
                'content' => 'Enjoy live performances by top artists!',
                'start_date' => '2025-04-20 18:00:00',
                'end_date' => '2025-04-20 22:00:00',
                'image_path' => 'images/music_concert.jpg',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}