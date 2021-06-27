<?php

namespace App\Models;

use App\Traits\NoImage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Superhero extends Model
{
    use HasFactory, NoImage;

    protected $fillable = ['nickname', 'real_name', 'origin_description', 'superpowers', 'catch_phrase', 'img'];
}
