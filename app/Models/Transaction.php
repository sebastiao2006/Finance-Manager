<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Transaction extends Model
{
    // use HasFactory; // Uncomment if HasFactory trait is available in your Laravel version

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
