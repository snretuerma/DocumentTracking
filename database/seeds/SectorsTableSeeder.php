<?php

use Illuminate\Database\Seeder;

class SectorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sectors = [
            ['name' => 'Sector One'],
            ['name' => 'Sector Two'],
            ['name' => 'Sector Three'],
            ['name' => 'Sector Four'],
            ['name' => 'Sector Five'],
        ];
        DB::table('sectors')->insert($sectors);
    }
}
