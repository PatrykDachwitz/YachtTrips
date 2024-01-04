<?php
declare(strict_types=1);
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vacationer extends Model
{
    use HasFactory, SoftDeletes;

    protected $casts = [
      'first_name' => "string",
      'last_name' => "string",
      'age' => "string",
      'book_id' => "integer",
      'deleted_at' => "timestamp",
    ];

    protected $fillable = [
        'first_name',
        'last_name',
        'age',
        'book_id',
    ];


}
