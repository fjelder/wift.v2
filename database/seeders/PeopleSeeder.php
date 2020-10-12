<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('people')->insert([
        	'first_name' => 'Jan',
        	'last_name' => 'Niezbędny',
        	'workstand' => 'Specjalista',
        	'phone_number_1' => '+48 587 489 698',
            'phone_number_2' => '',
        	'email' => 'jan.niezbedny@op.pl',
        	'companies_id' => '1',
        	'created_at' => now(),
        	'updated_at' => now()
        ]);
        DB::table('people')->insert([
        	'first_name' => 'Adam',
        	'last_name' => 'Niezgódka',
        	'workstand' => 'Dyrektor',
        	'phone_number_1' => '+48 512 895 478',
            'phone_number_2' => '(62) 512 89 54',
        	'email' => 'adam.niezgodka@wp.pl',
        	'companies_id' => '2',
        	'created_at' => now(),
        	'updated_at' => now()
        ]);
        DB::table('people')->insert([
        	'first_name' => 'Stanisław',
        	'last_name' => 'Ważka',
        	'workstand' => 'Monter',
        	'phone_number_1' => '+48 513 658 748',
            'phone_number_2' => '(44) 513 65 87',
        	'email' => 'stanislaw.wazka@wp.pl',
        	'companies_id' => '2',
        	'created_at' => now(),
        	'updated_at' => now()
        ]);
        
    }
}
