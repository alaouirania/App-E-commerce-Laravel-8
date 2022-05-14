<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'body',
        'description',
        'price',
        'category',
        'image',
        'location',
        'brand',
        'state',
    ];
}
