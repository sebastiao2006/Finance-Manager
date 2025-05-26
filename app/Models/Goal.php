<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    protected $fillable = [
        'nome',
        'data',
        'icone',
        'descricao',
        'valor_total',
        'valor_inicial',
        'cor',
        'user_id',
    ];

}
