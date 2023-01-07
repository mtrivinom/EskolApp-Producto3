<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Asignatura;

class AsignaturasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Asignatura1=Asignatura::create([
            'id_teacher' => 1,
		    'id_course' => 1,
		    'id_schedule' => 1,
		    'name' => 'Configuración de sistemas operativos',
		    'color' => 'verde',
            ]);

        $Asignatura2=Asignatura::create([
            'id_teacher' => 2,
            'id_course' => 1,
            'id_schedule' => 2,
            'name' => 'Introducción a bases de datos',
            'color' => 'verde',
            ]);

        $Asignatura3=Asignatura::create([
            'id_teacher' => 1,
            'id_course' => 2,
            'id_schedule' => 3,
            'name' => 'Fundamentos de programación',
            'color' => 'verde',
            ]);

        $Asignatura4=Asignatura::create([
            'id_teacher' => 3,
		    'id_course' => 2,
		    'id_schedule' => 4,
		    'name' => 'Programación orientada a objetos',
		    'color' => 'amarillo',
            ]);

        $Asignatura5=Asignatura::create([
            'id_teacher' => 2,
            'id_course' => 3,
            'id_schedule' => 5,
            'name' => 'Aplicación backend con PHP y framework MVC',
            'color' => 'azul',
            ]);

        $Asignatura6=Asignatura::create([
            'id_teacher' => 4,
            'id_course' => 3,
            'id_schedule' => 6,
            'name' => 'Programación orientada a objetos con acceso a base de datos',
            'color' => 'azul',
            ]);
        $Asignatura7=Asignatura::create([
            'id_teacher' => 3,
            'id_course' => 4,
            'id_schedule' => 71,
            'name' => 'Learning XML',
            'color' => 'naranja',
            ]);

        $Asignatura8=Asignatura::create([
            'id_teacher' => 5,
            'id_course' => 4,
            'id_schedule' => 8,
            'name' => 'Inglés',
            'color' => 'naranja',
            ]);


    }
}
