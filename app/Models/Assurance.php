<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assurance extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $casts = [
    'legale' => 'array',
    'optional' => 'array',
    'persons' => 'array',
];
}
