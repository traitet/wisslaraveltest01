<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $casts = [
        'price' => 'float'
    ];

    protected $fillable = [
        'name',
        'description',
        'price',
        'created_at'
    ];

}
