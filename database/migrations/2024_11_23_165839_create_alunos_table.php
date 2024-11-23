<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->string('nome'); // Nome do aluno (alterado para "nome")
            $table->string('email')->unique(); // E-mail do aluno
            $table->timestamp('email_verified_at')->nullable(); // Confirmação de e-mail
            $table->string('password'); // Senha do aluno
            $table->date('data_nascimento'); // Data de nascimento
            $table->string('telefone', 15)->nullable(); // Telefone do aluno
            $table->foreignId('fk_nivel')->constrained('nivel')->default(3); // Associa ao nível de aluno (nível 3)
            $table->rememberToken(); // Para "lembrar" do usuário
            $table->timestamps(); // Data de criação e atualização
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alunos');
    }
}
