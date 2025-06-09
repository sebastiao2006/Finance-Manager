<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

protected $fillable = [
    'type',
    'value',
    'month',
    'year',
    'description',
    'user_id',
    // e outros campos que você usar (ex: 'status', 'category', 'account')
];



        public function user()
    {
        return $this->belongsTo(User::class);
    }

}
