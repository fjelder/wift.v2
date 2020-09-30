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
            'phone_number' => 616333659,
						'created_at' => now(),
						'updated_at' => now()
      ]);
			DB::table('companies')->insert([
            'name' => 'PKP Energetyka S.A. - Centrala',
						'short_name' => 'PKP Energetyka - centrala',
            'street' => 'ul. Hoża 63/67',
            'city' => 'Warszawa',
            'post_code' => '00-681',
            'phone_number' => 224741900,
						'created_at' => now(),
						'updated_at' => now()
      ]);
			
    }
}
