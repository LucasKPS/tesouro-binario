<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    // Define a tabela associada a este modelo
    protected $table = 'menu';
    protected $primaryKey = 'id';

    // Define os campos que podem ser preenchidos em massa
    protected $fillable = [
        'icon',
        'identifier',
        'item',
        'id',
    ];

}
