<?php
declare(strict_types=1);
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Template extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $casts = [
        'name' => 'string',
        'deleted_at' => 'timestamp',
        'description' => 'string',
    ];

    protected $fillable = [
        'name',
        'description',
    ];

    protected $hidden = [
        'created_at',
        'deleted_at',
        'updated_at',
    ];

}
