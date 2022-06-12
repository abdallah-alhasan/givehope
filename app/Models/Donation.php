<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    protected $fillable =[

        'donator_name',
        'phone_num',
        'city_id',
        'num_content',


    ];
    
}
