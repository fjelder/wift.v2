<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
			DB::table('companies')->insert([
            'name' => 'Zakład Robót Komunikacyjnych – DOM w Poznaniu Sp. z o.o.',
						'short_name' => 'ZRK',
            'street' => 'ul. Kolejowa 4',
            'city' => 'Poznań',
            'post_code' => '60-715',
            'phone_number_1' => '+48 605 258 659',
            'phone_number_2' => '(61) 633 36 59',
						'created_at' => now(),
						'updated_at' => now()
      ]);
			DB::table('companies')->insert([
            'name' => 'PKP Energetyka S.A. - Centrala',
						'short_name' => 'PKP Energetyka - centrala',
            'street' => 'ul. Hoża 63/67',
            'city' => 'Warszawa',
            'post_code' => '00-681',
            'phone_number_1' => '+48 515 248 894',
            'phone_number_2' => '(22) 474 19 00',
						'created_at' => now(),
						'updated_at' => now()
      ]);
			
    }
}
