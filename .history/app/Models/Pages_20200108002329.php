<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    protected $table = 'posts';
    protected $fillable = ['title' , 'subtitle', 'content'];
}

class Menus extends Model
{
    protected $table = 'menus';
    protected $fillable = ['title'];
}