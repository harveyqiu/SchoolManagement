<?php

use Illuminate\Database\Seeder;

class SocietyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Society',1)->create([
            'password' => bcrypt('123456'),
        ]);
    }
}
