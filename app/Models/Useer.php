<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Useer extends Model
{
    use HasFactory;
    
    public function Book(){
        return $this->hasMany('App\Models\book');
    }
    public function copie(){
        return $this->belongsToMany('App\Models\Copie');
    }
}
