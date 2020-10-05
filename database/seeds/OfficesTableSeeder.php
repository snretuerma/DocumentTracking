<?php

use Illuminate\Database\Seeder;

class OfficesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $offices = [
            [
                'name' => 'Office of the Governor',
                'address' => 'Capitol Compound, Burabod, Sorsogon City, Sorsogon',
                'office_code' => 'GO',
                'contact_number' => '09613551323',
                'contact_email' => 'governor@sorsogon.gov.ph',
            ],
            [
                'name' => 'Sangguniang Panlalawigan',
                'address' => 'Capitol Compound, Burabod, Sorsogon City, Sorsogon',
                'office_code' => 'SP',
                'contact_number' => '09193620918',
                'contact_email' => 'sp@sorsogon.gov.ph',
            ],
            [
                'name' => 'Office of the Provincial Treasurer',
                'address' => 'Capitol Compound, Burabod, Sorsogon City, Sorsogon',
                'office_code' => 'PTO',
                'contact_number' => '09104111426',
                'contact_email' => 'pto@sorsogon.gov.ph',
            ],
        ];
        DB::table('offices')->insert($offices);
    }
}
