<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TabuladorSalarialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('tabuladores_salariales')->truncate();

        DB::table('tabuladores_salariales')->insert([
            [
                'nivel'      => '101',
                'sueldo_base'=> '1000.00',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'nivel'      => '201',
                'sueldo_base'=> '1100.00',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'nivel'      => '202',
                'sueldo_base'=> '1210.00',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'nivel'      => '203',
                'sueldo_base'=> '1331.00',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'nivel'      => '204',
                'sueldo_base'=> '1464.10',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'nivel'      => '205',
                'sueldo_base'=> '1610.51',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'nivel'      => '206',
                'sueldo_base'=> '1771.56',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'nivel'      => '207',
                'sueldo_base'=> '1948.71',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'nivel'      => '208',
                'sueldo_base'=> '2143.59',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'nivel'      => '209',
                'sueldo_base'=> '2357.95',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'nivel'      => '210',
                'sueldo_base'=> '2593.74',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'nivel'      => '211',
                'sueldo_base'=> '2853.11',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'nivel'      => '212',
                'sueldo_base'=> '3138.43',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'nivel'      => '213',
                'sueldo_base'=> '3452.27',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],            
            [
                'nivel'      => '301',
                'sueldo_base'=> '5178.40',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'nivel'      => '302',
                'sueldo_base'=> '5696.25',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'nivel'      => '302',
                'sueldo_base'=> '6265.87',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'nivel'      => '303',
                'sueldo_base'=> '6892.46',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'nivel'      => '305',
                'sueldo_base'=> '7581.70',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'nivel'      => '306',
                'sueldo_base'=> '8339.87',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'nivel'      => '307',
                'sueldo_base'=> '9173.86',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'nivel'      => '401',
                'sueldo_base'=> '11926.02',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'nivel'      => '402',
                'sueldo_base'=> '15503.82',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'nivel'      => '403',
                'sueldo_base'=> '20154.97',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        ]);
    }
}
