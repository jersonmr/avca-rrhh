<?php

use Illuminate\Database\Seeder;

class CargosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cargos')->insert([
            [
                'nombre'               => 'director operaciones aéreas',                
                'tabulador_salarial_id'=> 24,
                'perfil'               => '',
                'created_at'           => date('Y-m-d H:i:s');
                'updated_at'           => date('Y-m-d H:i:s');
            ],
            [
                'nombre'               => 'secretaria ejecutiva',                
                'tabulador_salarial_id'=> 2,
                'perfil'               => '',
                'created_at'           => date('Y-m-d H:i:s');
                'updated_at'           => date('Y-m-d H:i:s');
            ],
            [
                'nombre'               => 'gestor de calidad',              
                'tabulador_salarial_id'=> 15,
                'perfil'               => '',
                'created_at'           => date('Y-m-d H:i:s');
                'updated_at'           => date('Y-m-d H:i:s');
            ],
            [
                'nombre'               => 'gestor de aeronáutica civil',                
                'tabulador_salarial_id'=> 15,
                'perfil'               => '',
                'created_at'           => date('Y-m-d H:i:s');
                'updated_at'           => date('Y-m-d H:i:s');
            ],
            [
                'nombre'               => 'analista operacional de flota',                
                'tabulador_salarial_id'=> 15,
                'perfil'               => '',
                'created_at'           => date('Y-m-d H:i:s');
                'updated_at'           => date('Y-m-d H:i:s');
            ],
            [
                'nombre'               => 'estandarizador equipos operados por avca',                
                'tabulador_salarial_id'=> 16,
                'perfil'               => '',
                'created_at'           => date('Y-m-d H:i:s');
                'updated_at'           => date('Y-m-d H:i:s');
            ],
            [
                'nombre'               => 'piloto ',                
                'tabulador_salarial_id'=> 19,
                'perfil'               => '',
                'created_at'           => date('Y-m-d H:i:s');
                'updated_at'           => date('Y-m-d H:i:s');
            ],
        ]);
    }
}
