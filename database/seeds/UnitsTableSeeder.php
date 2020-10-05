<?php

use Illuminate\Database\Seeder;

class UnitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $units = [
            ['name' => 'Unit One'],
            ['name' => 'Unit Two'],
            ['name' => 'Unit Three'],
            ['name' => 'Unit Four'],
            ['name' => 'Unit Five'],
        ];
        DB::table('units')->insert($units);
    }
}
