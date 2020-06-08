<?php

use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'PHP с нуля до Junior',
                'description' => 'Курс начинающего программиста на PHP',
                'price' => 1000,
                'lesson_count' => 18,
                'difficult' => 1,
            ],
            [
                'name' => 'HTML-верстка для начинающих',
                'description' => 'Курс начинающего верстальщика - дизайнера сайтов. Познакомит с основами языка разметки HTML, оформления сайтов с помощью CSS. Будут рассмотрены примеры оживления сайтов при помощи виджетов.',
                'price' => 1500,
                'lesson_count' => 12,
                'difficult' => 1,
            ],
        ];
        DB::table('courses')->insert($data);
    }
}
