<?php

namespace App\Models;

use App\Models\Package;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'image',
        'desc',
    ];


    public function packages(){
        return $this->hasMany(Package::class);
    }
}
