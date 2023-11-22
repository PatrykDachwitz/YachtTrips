<?php
declare(strict_types=1);
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Trip extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'start_day',
        'end_day',
        'yacht_id',
        'ocean_id',
        'count_day',
        'template_id',
    ];

    protected $casts = [
      'name' => 'string',
      'start_day' => 'timestamp',
      'end_day' => 'timestamp',
      'yacht_id' => 'integer',
      'ocean_id' => 'integer',
      'count_day' => 'integer',
      'template_id' => 'integer',
      'deleted_at' => 'timestamp',
    ];

    protected $hidden = [
        'yacht_id',
        'ocean_id',
        'template_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
