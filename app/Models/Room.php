<?php
declare(strict_types=1);
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Room extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $casts = [
        'premium' => 'boolean',
        'double_beds' => 'integer',
        'single_beds' => 'integer',
        'kids_beds' => 'integer',
        'adults' => 'integer',
        'kids' => 'integer',
        'price' => 'integer',
        'deleted_at' => 'timestamp',
    ];
    protected $fillable = [
        'premium',
        'double_beds',
        'single_beds',
        'kids_beds',
        'adults',
        'kids',
        'price',
    ];

    protected $hidden = [
        'created_at',
        'deleted_at',
        'updated_at',
    ];
}
