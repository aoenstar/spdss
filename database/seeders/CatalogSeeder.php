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
                    'company' => 'Solar Energy Innovations Inc',
                    'name'=> 'Magnum Energy inverter',
                    'description' => '4kW, 120/240V, 60Hz, Sine Wave/ Off-grid: 120/240V',
                    'price' => '1000.00'
                ],
                [
                    'company' => 'Solar Energy Innovations Inc',
                    'name'=> 'SMA Sunny Island',
                    'description' => '5kW @ 230V AC, 50Hz Off-grid',
                    'price' => '1000.00'
                ],
                [
                    'company' => 'Innogen Solar Electricity',
                    'name'=> '2kW System',
                    'description' => '2kW, Insurance: Free lifetime servicing with app monitoring, Use grid at night',
                    'price' => '9700.00'
                ],
                [
                    'company' => 'Innogen Solar Electricity',
                    'name'=> '4kW System',
                    'description' => '2kW, Insurance: Free lifetime servicing with app monitoring, Use grid at night',
                    'price' => '16000.00'
                ],
                [
                    'company' => 'blob',
                    'name'=> 'Magnum Energy inverter',
                    'description' => '4kW, 120/240V, 60Hz, Sine Wave/ Off-grid: 120/240V',
                    'price' => '1000.00'
                ],
                [
                    'company' => 'Solar Watt Systems Inc',
                    'name'=> 'Photovoltage system',
                    'description' => '5kW, No insurance',
                    'price' => '15000.00'
                ]
            ]);
    }
}
