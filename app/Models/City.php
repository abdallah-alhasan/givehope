<?php

namespace App\Models;

use App\Models\User;
use App\Models\Package;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class City extends Model
{
    use HasFactory;

  
    public function users(){
        return $this->hasMany(User::class);
    }

    public function packages(){
        return $this->hasMany(Package::class);
    }
}
