<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    public function copie(){
        return $this->hasMany('App\Models\copie');
    }
    public function useer(){
        return $this->belongsToMany('App\Models\Useer');
    }
}
