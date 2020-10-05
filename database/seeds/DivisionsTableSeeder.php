<?php

use Illuminate\Database\Seeder;

class DivisionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $divisions = [
            ['name' => 'Division One'],
            ['name' => 'Division Two'],
            ['name' => 'Division Three'],
            ['name' => 'Admin'],
            ['name' => 'Staff'],
        ];
        DB::table('divisions')->insert($divisions);
    }
}
