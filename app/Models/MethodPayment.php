<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MethodPayment extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $casts = [
      'name' => 'string',
      'deleted_at' => 'timestamp',
      'price' => 'integer',
      'url_payment' => 'string',
    ];
}
