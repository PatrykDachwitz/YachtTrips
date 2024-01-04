<?php
declare(strict_types=1);
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
    use HasFactory, SoftDeletes;

    protected $casts = [
      'name' => 'string',
      'description' => 'string',
      'slug' => 'string',
      'active' => 'boolean',
      'deleted_at' => 'timestamp',
    ];

    protected $fillable = [
        'name',
        'description',
        'slug',
        'active',
    ];
}
