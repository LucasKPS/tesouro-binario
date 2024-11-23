<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Administrador extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * Nome da tabela.
     *
     * @var string
     */
    protected $table = 'administrador';

    /**
     * Atributos atribuíveis em massa.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'fk_nivel',
    ];

    /**
     * Atributos ocultos para serialização.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    /**
     * Casts para atributos.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Retorna o rótulo do nível do administrador.
     *
     * @return string
     */
    public function getNivelLabelAttribute(): string
    {
        switch ($this->fk_nivel) {
            case 1:
                return 'administrador';
            case 2:
                return 'subconta';
            default:
                return 'invalido';
        }
    }
}
