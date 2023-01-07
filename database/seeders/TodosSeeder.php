<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class TodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $useradmin = User::create([
            'name' => 'admin',
            'email' => 'admin@uoc.edu',
            'password' => Hash::make('12345678'),
            'tipo' => '1',
        ]);

        $user2 = User::create([
            'name' => 'alumno',
            'email' => 'alumno@uoc.edu',
            'password' => Hash::make('12345678'),
            'tipo' => '2',
        ]);
        $user3 = User::create([
            'name' => 'profesor',
            'email' => 'profesor@uoc.edu',
            'password' => Hash::make('12345678'),
            'tipo' => '3',
        ]);
    }
}
