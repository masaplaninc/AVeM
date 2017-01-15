<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    protected $fillable = ['title', 'content','created_at', 'updated_at'];
}
