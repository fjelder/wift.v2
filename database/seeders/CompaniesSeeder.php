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
						'shortName' => 'ZRK',
            'street' => 'ul. Kolejowa 4',
            'city' => 'Poznań',
            'postCode' => '60-715',
            'phoneNumber' => 616333659,
						'created_at' => now(),
						'updated_at' => now()
      ]);
			DB::table('companies')->insert([
            'name' => 'PKP Energetyka S.A. - Centrala',
						'shortName' => 'PKP Energetyka - centrala',
            'street' => 'ul. Hoża 63/67',
            'city' => 'Warszawa',
            'postCode' => '00-681',
            'phoneNumber' => 224741900,
						'created_at' => now(),
						'updated_at' => now()
      ]);
			
    }
}
