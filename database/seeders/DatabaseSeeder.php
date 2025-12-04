<?php

namespace Database\Seeders;

use App\Models\Ambiente;
use App\Models\Registro;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AmbienteSeeder::class,
            SensorSeeder::class,
            RegistroSeeder::class
        ]);
    
        User::create([
            'name' => 'Admin',
            'email' => 'admin@modaexpress.com',
            'password' => Hash::make('senha123'),
        ]);

        User::create([
            'name' => 'João Silva',
            'email' => 'joao@modaexpress.com',
            'password' => Hash::make('senha123'),
        ]);

        User::create([
            'name' => 'Maria Santos',
            'email' => 'maria@modaexpress.com',
            'password' => Hash::make('senha123'),
        ]);
    }
}
