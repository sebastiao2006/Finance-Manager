<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{


    protected $fillable = [
        'valor', 'instituicao', 'descricao', 'tipo', 'cor', 'incluir'
    ];

public function despesas()
{
    return $this->hasMany(Despesa::class);
}

public function user()
{
    return $this->belongsTo(User::class);
}



}
