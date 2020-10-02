<?php

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 2; $i++) {
            DB::table('users')->insert([
                'role_id' => '1',
                'username' => $faker->username,
                'password' => Hash::make('secret'),
                'first_name' => $faker->firstName,
                'middle_name' => $faker->lastName,
                'last_name' => $faker->lastName,
                'suffix' => rand(0, 1) === 1 ? $faker->suffix : null,
                'gender' => rand(1, 2),
                'birthday' => $faker->date,
                'id_number' => $faker->ssn,
                'created_at' => $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now', $timezone = null),
            ]);
        }

        for($i = 0; $i < 10; $i++) {
            DB::table('users')->insert([
                'role_id' => '2',
                'username' => $faker->username,
                'password' => Hash::make('secret'),
                'first_name' => $faker->firstName,
                'middle_name' => $faker->lastName,
                'last_name' => $faker->lastName,
                'suffix' => rand(0, 1) === 1 ? $faker->suffix : null,
                'gender' => rand(1, 2),
                'birthday' => $faker->date,
                'id_number' => $faker->ssn,
                'created_at' => $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now', $timezone = null),
            ]);
        }

        for($i = 0; $i < 2; $i++) {
            DB::table('users')->insert([
                'role_id' => '3',
                'username' => $faker->username,
                'password' => Hash::make('secret'),
                'first_name' => $faker->firstName,
                'middle_name' => $faker->lastName,
                'last_name' => $faker->lastName,
                'suffix' => rand(0, 1) === 1 ? $faker->suffix : null,
                'gender' => rand(1, 2),
                'birthday' => $faker->date,
                'id_number' => $faker->ssn,
                'created_at' => $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now', $timezone = null),
            ]);
        }
    }
}
