<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Student',1)->create([
            'password' => bcrypt('123456'),
            'user_id' => 20150328,
            'class' => 1,
            'grade' => 1
        ]);
    }
}
