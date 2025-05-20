<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Despesa extends Model
{
    protected $table = 'despesas'; // confirme o nome da tabela no banco, ajuste se precisar

    protected $fillable = ['account_id', 'valor', 'descricao', 'data']; // coloque os campos da despesa que você usa

    public function account()
    {
        return $this->belongsTo(Account::class);
    }
}