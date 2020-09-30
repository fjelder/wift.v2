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
        	'phone_number' => '587489698',
        	'email' => 'jan.niezbedny@op.pl',
        	'companies_id' => '1',
        	'created_at' => now(),
        	'updated_at' => now()
        ]);
        DB::table('people')->insert([
        	'first_name' => 'Adam',
        	'last_name' => 'Niezgódka',
        	'workstand' => 'Dyrektor',
        	'phone_number' => '512895478',
        	'email' => 'adam.niezgodka@wp.pl',
        	'companies_id' => '2',
        	'created_at' => now(),
        	'updated_at' => now()
        ]);
        DB::table('people')->insert([
        	'first_name' => 'Stanisław',
        	'last_name' => 'Ważka',
        	'workstand' => 'Monter',
        	'phone_number' => '513658748',
        	'email' => 'stanislaw.wazka@wp.pl',
        	'companies_id' => '2',
        	'created_at' => now(),
        	'updated_at' => now()
        ]);
        
    }
}
