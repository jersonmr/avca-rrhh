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
                'titulo'                => 'director operaciones aéreas',
                'tabulador_salarial_id' => 24,
                'perfil'                => '',
                'grupo'                 => 'operativo',
                'created_at'            => date('Y-m-d H:i:s'),
                'updated_at'            => date('Y-m-d H:i:s')
            ],            
            [
                'titulo'                => 'secretaria ejecutiva',
                'tabulador_salarial_id' => 2,
                'perfil'                => '',
                'grupo'                 => 'oficina',
                'created_at'            => date('Y-m-d H:i:s'),
                'updated_at'            => date('Y-m-d H:i:s')
            ],
            [
                'titulo'                => 'coordinador rampa y despacho',
                'tabulador_salarial_id' => 2,
                'perfil'                => '',
                'grupo'                 => 'operativo',
                'created_at'            => date('Y-m-d H:i:s'),
                'updated_at'            => date('Y-m-d H:i:s')
            ],
            [
                'titulo'                => 'gestor de calidad',
                'tabulador_salarial_id' => 15,
                'perfil'                => '',
                'grupo'                 => 'operativo',
                'created_at'            => date('Y-m-d H:i:s'),
                'updated_at'            => date('Y-m-d H:i:s')
            ],
            [
                'titulo'                => 'gestor de aeronáutica civil',
                'tabulador_salarial_id' => 15,
                'perfil'                => '',
                'grupo'                 => 'operativo',
                'created_at'            => date('Y-m-d H:i:s'),
                'updated_at'            => date('Y-m-d H:i:s')
            ],
            [
                'titulo'                => 'analista operacional de flota',
                'tabulador_salarial_id' => 15,
                'perfil'                => '',
                'grupo'                 => 'operativo',
                'created_at'            => date('Y-m-d H:i:s'),
                'updated_at'            => date('Y-m-d H:i:s')
            ],
            [
                'titulo'                => 'estandarizador equipos operados por avca',
                'tabulador_salarial_id' => 16,
                'perfil'                => '',
                'grupo'                 => 'operativo',
                'created_at'            => date('Y-m-d H:i:s'),
                'updated_at'            => date('Y-m-d H:i:s')
            ],
            [
                'titulo'                => 'piloto ',
                'tabulador_salarial_id' => 19,
                'perfil'                => '',
                'grupo'                 => 'tripulacion',
                'created_at'            => date('Y-m-d H:i:s'),
                'updated_at'            => date('Y-m-d H:i:s')
            ],
            [
                'titulo'                => 'Copiloto ',
                'tabulador_salarial_id' => 18,
                'perfil'                => '',
                'grupo'                 => 'tripulacion',
                'created_at'            => date('Y-m-d H:i:s'),
                'updated_at'            => date('Y-m-d H:i:s')
            ],
            [
                'titulo'                => 'auxiliar de servicio abordo',
                'tabulador_salarial_id' => 13,
                'perfil'                => '',
                'grupo'                 => 'operativo',
                'created_at'            => date('Y-m-d H:i:s'),
                'updated_at'            => date('Y-m-d H:i:s')
            ],
            [
                'titulo'                => 'despachador de aviones',
                'tabulador_salarial_id' => 11,
                'perfil'                => '',
                'grupo'                 => 'operativo',
                'created_at'            => date('Y-m-d H:i:s'),
                'updated_at'            => date('Y-m-d H:i:s')
            ],
            [
                'titulo'                => 'despachador instructor',
                'tabulador_salarial_id' => 12,
                'perfil'                => '',
                'grupo'                 => 'operativo',
                'created_at'            => date('Y-m-d H:i:s'),
                'updated_at'            => date('Y-m-d H:i:s')
            ],
            [
                'titulo'                => 'auxiliar de despacho',
                'tabulador_salarial_id' => 1,
                'perfil'                => '',
                'grupo'                 => 'operativo',
                'created_at'            => date('Y-m-d H:i:s'),
                'updated_at'            => date('Y-m-d H:i:s')
            ],
            [
                'titulo'                => 'estadistica centro control de operaciones',
                'tabulador_salarial_id' => 1,
                'perfil'                => '',
                'grupo'                 => 'operativo',
                'created_at'            => date('Y-m-d H:i:s'),
                'updated_at'            => date('Y-m-d H:i:s')
            ],
            [
                'titulo'                => 'auxiliar equipo terrestre de apoyo aeronautico',
                'tabulador_salarial_id' => 1,
                'perfil'                => '',
                'grupo'                 => 'operativo',
                'created_at'            => date('Y-m-d H:i:s'),
                'updated_at'            => date('Y-m-d H:i:s')
            ],
            [
                'titulo'                => 'operador de radio',
                'tabulador_salarial_id' => 5,
                'perfil'                => '',
                'grupo'                 => 'operativo',
                'created_at'            => date('Y-m-d H:i:s'),
                'updated_at'            => date('Y-m-d H:i:s')
            ],
            [
                'titulo'                => 'tecnico gestion entrenamiento pilotos',
                'tabulador_salarial_id' => 3,
                'perfil'                => '',
                'grupo'                 => 'operativo',
                'created_at'            => date('Y-m-d H:i:s'),
                'updated_at'            => date('Y-m-d H:i:s')
            ],
            //nuevos creados,
            [
                'titulo'                => 'jefe de sistemas',
                'tabulador_salarial_id' => 24,
                'perfil'                => '',
                'grupo'                 => 'area telematica',
                'created_at'            => date('Y-m-d H:i:s'),
                'updated_at'            => date('Y-m-d H:i:s')
            ],
            [
                'titulo'                => 'coordinador de proyectos de sistemas',
                'tabulador_salarial_id' => 23,
                'perfil'                => '',
                'grupo'                 => 'area telematica',
                'created_at'            => date('Y-m-d H:i:s'),
                'updated_at'            => date('Y-m-d H:i:s')
            ],
            [
                'titulo'                => 'tecnico de software de operaciones',
                'tabulador_salarial_id' => 2,
                'perfil'                => '',
                'grupo'                 => 'area telematica',
                'created_at'            => date('Y-m-d H:i:s'),
                'updated_at'            => date('Y-m-d H:i:s')
            ],
            [
                'titulo'                => 'tecnico de apoyo logistico',
                'tabulador_salarial_id' => 4,
                'perfil'                => '',
                'grupo'                 => 'apoyo logistico',
                'created_at'            => date('Y-m-d H:i:s'),
                'updated_at'            => date('Y-m-d H:i:s')
            ],
            [
                'titulo'                => 'tecnico de mantenimiento de instalaciones',
                'tabulador_salarial_id' => 2,
                'perfil'                => '',
                'grupo'                 => 'apoyo logistico',
                'created_at'            => date('Y-m-d H:i:s'),
                'updated_at'            => date('Y-m-d H:i:s')
            ],
            [
                'titulo'                => 'auxiliar de mantenimiento de instalaciones',
                'tabulador_salarial_id' => 1,
                'perfil'                => '',
                'grupo'                 => 'apoyo logistico',
                'created_at'            => date('Y-m-d H:i:s'),
                'updated_at'            => date('Y-m-d H:i:s')
            ],
            [
                'titulo'                => 'conductor',
                'tabulador_salarial_id' => 3,
                'perfil'                => '',
                'grupo'                 => 'apoyo logistico',
                'created_at'            => date('Y-m-d H:i:s'),
                'updated_at'            => date('Y-m-d H:i:s')
            ],
            [
                'titulo'                => 'coordinador de contratos interadministrativos',
                'tabulador_salarial_id' => 22,
                'perfil'                => '',
                'grupo'                 => 'area administrativa',
                'created_at'            => date('Y-m-d H:i:s'),
                'updated_at'            => date('Y-m-d H:i:s')
            ],
            [
                'titulo'                => 'analista de ventas presenciales y no presenciales',
                'tabulador_salarial_id' => 1,
                'perfil'                => '',
                'grupo'                 => 'area administrativa',
                'created_at'            => date('Y-m-d H:i:s'),
                'updated_at'            => date('Y-m-d H:i:s')
            ],
            [
                'titulo'                => 'jefe presupuesto',
                'tabulador_salarial_id' => 24,
                'perfil'                => '',
                'grupo'                 => 'area administrativa',
                'created_at'            => date('Y-m-d H:i:s'),
                'updated_at'            => date('Y-m-d H:i:s')
            ],
            [
                'titulo'                => 'jefe de creditos y recaudos',
                'tabulador_salarial_id' => 24,
                'perfil'                => '',
                'grupo'                 => 'area administrativa',
                'created_at'            => date('Y-m-d H:i:s'),
                'updated_at'            => date('Y-m-d H:i:s')
            ],
            [
                'titulo'                => 'analista y auxiliar de contabilidad',
                'tabulador_salarial_id' => 17,
                'perfil'                => '',
                'grupo'                 => 'area administrativa',
                'created_at'            => date('Y-m-d H:i:s'),
                'updated_at'            => date('Y-m-d H:i:s')
            ],
            [
                'titulo'                     => 'tecnico apoyo en asuntos legales',
                'tabulador_salarial_id'      => 4,
                'perfil'                     => '',
                'grupo'                      => 'area administrativa',
                'created_at'                 => date('Y-m-d H:i:s'),
                'updated_at'                 => date('Y-m-d H:i:s')
            ],

        ]);
    }
}
