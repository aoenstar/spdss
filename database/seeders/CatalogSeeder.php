<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CatalogSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('catalogs')->insert([
			[
				'name' => 'Solar Panel',
				'description' => '300 Watt panel',
				'price' => '1000.00'
			],
			[
				'name' => 'Solar Panel Inverter',
				'description' => '1800VA',
				'price' => '3000.00'
			]
	]);
    }
}
