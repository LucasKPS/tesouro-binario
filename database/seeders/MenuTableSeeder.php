<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menu para o Administrador (Nivel 1)
        DB::table('menu')->insert([
            ['id' => 1, 'identifier' => 'Dashboard', 'item' => 'dashboard.home', 'fk_nivel' => 1],
            ['id' => 2, 'identifier' => 'Gerenciar Usuários', 'item' => 'dashboard.gerenciar-usuarios', 'fk_nivel' => 1],
            ['id' => 3, 'identifier' => 'Relatórios', 'item' => 'dashboard.relatorios', 'fk_nivel' => 1],
        ]);

        // Menu para o Instrutor (Nivel 2)
        DB::table('menu')->insert([
            ['id' => 4, 'identifier' => 'Planos de Treino', 'item' => 'dashboard.planos-treino', 'fk_nivel' => 2],
            ['id' => 5, 'identifier' => 'Gerenciar Séries', 'item' => 'dashboard.gerenciar-series', 'fk_nivel' => 2],
            ['id' => 6, 'identifier' => 'Equipamentos', 'item' => 'dashboard.equipamentos', 'fk_nivel' => 2],
            ['id' => 7, 'identifier' => 'Relatórios', 'item' => 'dashboard.relatorios', 'fk_nivel' => 2],
        ]);

        DB::table('menu')->insert([
            ['id' => 8, 'identifier' => 'Meus Planos de Treino', 'item' => 'dashboard.meus-planos', 'fk_nivel' => 3],
            ['id' => 9, 'identifier' => 'Meus Planos de Treino', 'item' => 'dashboard.config', 'fk_nivel' => 3],
        ]);
    }
}
