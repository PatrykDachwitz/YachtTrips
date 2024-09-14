<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Combination extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'trip_id',
        'room_id',
        'available',
        'price',
    ];

    protected $casts = [
      'trip_id' => 'integer',
      'room_id' => 'integer',
      'available' => "bool",
      'price' => 'integer',
    ];
}
