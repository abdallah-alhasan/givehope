<?php

namespace App\Models;

use App\Models\Package;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class City extends Model
{
    use HasFactory;

<<<<<<< HEAD
=======

>>>>>>> 10eced5923176bb0255765b6c9c6960ab23468de
    public function users(){
        return $this->hasMany(User::class);
    }

    public function packages(){
        return $this->hasMany(Package::class);
    }
}
