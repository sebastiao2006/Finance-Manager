<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCard extends Model
{
    protected $fillable = ['imagem', 'titulo', 'link'];
}

