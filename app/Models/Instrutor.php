<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Instrutor extends Authenticatable
{
    use HasFactory;

    protected $table = 'instrutores';

    protected $fillable = [
        'name',
        'email',
        'password',
        'birth_date',
        'phone',
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'birth_date' => 'date',
    ];
}
