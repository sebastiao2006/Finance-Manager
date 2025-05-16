<?php

namespace App\Models;
use App\Models\Transaction;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

  protected $fillable = [
    'type', 'value', 'month', 'year', 'user_id', // 👈 Adiciona 'user_id' aqui
];


        public function user()
    {
        return $this->belongsTo(User::class);
    }

}
