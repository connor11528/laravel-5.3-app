<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create();
    	foreach (range(1,10) as $index) {
	    	$company = [
	            'name' => $faker->company,
	            'city' => $faker->city,
	            'state' => $faker->stateAbbr
	        ];

        	$company['website'] = 'www.'.$company['name'].'.com';
        	DB::table('companies')->insert($company);
        }
    }
}
