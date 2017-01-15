<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    protected $fillable = ['title', 'content','created_at', 'updated_at'];

}
