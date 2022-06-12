<?php

namespace App\Models;

use App\Models\City;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Package extends Model
{

    protected $fillable = [
        'doner_name',
        'category_id',
        'condition',
        'products_number',
        'title',
        'phone_number',
        'city_id',
        'image',
        'description',
    ];

    use HasFactory;
    use SoftDeletes;
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function city(){
        return $this->belongsTo(City::class);
    }






}
