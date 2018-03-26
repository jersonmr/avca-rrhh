<?php

use Illuminate\Database\Seeder;

class SucursalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('sucursales')->insert([
            
            [ 
               'tipo_sucursal'=>  'Operativa',
               'nombre'       => 'jose antonio anzoategui',
               'estado'       => 'activa',
               'ciudad'       => 'Barcelona',
               'codigo_postal'=> '6001'         
            ],

            [ 
                'tipo_sucursal'=>  'Operativa',
                'nombre'       => 'Manuel Piar',
                'estado'       => 'activa',
                'ciudad'       => 'Puerto Ordaz',
                'codigo_postal'=> '8050'         
             ],

             [ 
                'tipo_sucursal'=>  'Operativa',
                'nombre'       => 'Arturo Michelena',
                'estado'       => 'activa',
                'ciudad'       => 'Valencia',
                'codigo_postal'=> '2001'         
             ],

             [ 
                'tipo_sucursal'=>  'Operativa',
                'nombre'       => 'Josefa Camejo',
                'estado'       => 'activa',
                'ciudad'       => 'Punto Fijo',
                'codigo_postal'=> '4102'         
             ],

             [ 
                'tipo_sucursal'=>  'Operativa',
                'nombre'       => 'Jacinto Lara',
                'estado'       => 'activa',
                'ciudad'       => 'Barquisimeto',
                'codigo_postal'=> '3001'         
             ],

             [ 
                'tipo_sucursal'=>  'Operativa',
                'nombre'       => 'Juan Pablo Perez Alfonzo',
                'estado'       => 'activa',
                'ciudad'       => 'el vigia',
                'codigo_postal'=> '5145'         
             ],

             [ 
                'tipo_sucursal'=>  'Operativa',
                'nombre'       => 'Jose Tadeo Monagas',
                'estado'       => 'activa',
                'ciudad'       => 'Maturin',
                'codigo_postal'=> '6201'         
             ],

             [ 
                'tipo_sucursal'=>  'Operativa',
                'nombre'       => 'Santiago Mariño',
                'estado'       => 'activa',
                'ciudad'       => 'Porlamar',
                'codigo_postal'=> '6301'         
             ],

             [ 
                'tipo_sucursal'=>  'Operativa',
                'nombre'       => 'Simon Bolivar',
                'estado'       => 'activa',
                'ciudad'       => 'Maiquetia',
                'codigo_postal'=> '1160'         
             ],

             [ 
                'tipo_sucursal'=>  'Operativa',
                'nombre'       => 'La Chinita',
                'estado'       => 'activa',
                'ciudad'       => 'Maracaibo',
                'codigo_postal'=> '4004'         
             ],

             [ 
                'tipo_sucursal'=>  'Operativa',
                'nombre'       => 'Cacique Arame',
                'estado'       => 'activa',
                'ciudad'       => 'Puerto Ayacucho',
                'codigo_postal'=> '7101'         
             ],

             [ 
                'tipo_sucursal'=>  'Operativa',
                'nombre'       => 'Don Edmundo Barrios',
                'estado'       => 'activa',
                'ciudad'       => 'San tome',
                'codigo_postal'=> '6055'         
             ],

             [ 
                'tipo_sucursal'=>  'Operativa',
                'nombre'       => 'las Flecheras',
                'estado'       => 'activa',
                'ciudad'       => 'San Fernando De Apure',
                'codigo_postal'=> '7001'         
             ],

             [ 
                'tipo_sucursal'=>  'Operativa',
                'nombre'       => 'Luisa Caceres de Arismendi',
                'estado'       => 'activa',
                'ciudad'       => 'Barinas',
                'codigo_postal'=> '5201'         
             ],

             [ 
                'tipo_sucursal'=>  'Operativa',
                'nombre'       => 'Tomas de Heres',
                'estado'       => 'activa',
                'ciudad'       => 'Ciudad Bolivar',
                'codigo_postal'=> '8001'         
             ],

             [ 
                'tipo_sucursal'=>  'Operativa',
                'nombre'       => 'Antonio Jose de Sucre',
                'estado'       => 'activa',
                'ciudad'       => 'Cumana',
                'codigo_postal'=> '6101'         
             ]

        ]);  
        
    }
}
