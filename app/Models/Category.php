<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    /* Relation One to Many Category - Post */
    public function post(){
        return $this->hasMany('App\Models\Post');
    }
}
