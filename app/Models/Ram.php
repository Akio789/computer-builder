<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ram extends Model
{
    use HasFactory;

    protected $table = 'ram';

    protected $fillable = [
        'name',
        'brand',
        'model',
        'price',
        'memory',
        'slot',
    ];
}
