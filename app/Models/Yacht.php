<?php
declare(strict_types=1);
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Yacht extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $casts = [
        'name' => 'string',
        'deleted_at' => 'timestamp',
        'places_available' => 'integer',
    ];

    protected $fillable = [
        'name',
        'places_available',
    ];

    protected $hidden = [
        'created_at',
        'deleted_at',
        'updated_at',
    ];
}
