<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Combination extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'trips_id',
        'rooms_id',
        'available',
        'price',
    ];

    protected $casts = [
      'trips_id' => 'integer',
      'rooms_id' => 'integer',
      'available' => "bool",
      'price' => 'integer',
    ];
}
