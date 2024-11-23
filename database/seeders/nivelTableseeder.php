<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class nivelTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nivel')->insert([
            ['id' => 1, 'nome' => 'administrador'],
            ['id' => 2, 'nome' => 'subconta'],
            ['id' => 3, 'nome' => 'todos'],
        ]);
    }
}
