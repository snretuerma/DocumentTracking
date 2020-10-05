<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ['name' => 'admin'],
            ['name' => 'user'],
            ['name' => 'go'],
            ['name' => 'observer'],
        ];
        DB::table('roles')->insert($roles);
    }
}
