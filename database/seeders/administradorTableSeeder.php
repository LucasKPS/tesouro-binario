<?php

namespace Database\Seeders;

use app\Models\Administrador;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class administradorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('administrador')->insert([
            ['id' => 1, 'name' => 'adm','email' => 'adm@gmail.com', 'password' => bcrypt('adm123'), 'fk_nivel' => 1],
        ]);
    }
}
