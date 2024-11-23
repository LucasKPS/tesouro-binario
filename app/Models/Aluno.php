<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    // Definir os campos que podem ser preenchidos (atribuição em massa)
    protected $fillable = [
        'nome',
        'email',
        'password',
        'data_nascimento',
        'telefone',
        'fk_nivel',
    ];

    // Definir os campos que devem ser escondidos na resposta (como senhas)
    protected $hidden = [
        'password', // A senha deve ser oculta
        'remember_token', // Lembrar token
    ];

    // Definir os campos que devem ser convertidos em outros tipos de dados (por exemplo, data)
    protected $casts = [
        'email_verified_at' => 'datetime', // Converte a data de verificação de e-mail
    ];

    // Definir a relação com a tabela de 'niveis'
    public function nivel()
    {
        return $this->belongsTo(Nivel::class, 'fk_nivel');
    }
}
