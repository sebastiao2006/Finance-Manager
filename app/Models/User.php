<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function accounts()
{
    return $this->hasMany(Account::class);
}

    // app/Models/User.php
    protected $dates = [
        'created_at',
        'updated_at',
        'email_verified_at',
        'last_login_at', // adicione se ainda não estiver
    ];

     
    public function getProfileImageUrlAttribute()
{
    if ($this->profile_image_path) {
        return asset('storage/' . $this->profile_image_path);
    }
    // Imagem padrão caso não tenha foto
    return asset('images/default-profile.png');
}


}
