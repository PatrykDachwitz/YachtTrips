<?php
declare(strict_types=1);
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacationer extends Model
{
    use HasFactory;

    protected $casts = [
      'first_name' => "string",
      'last_name' => "string",
      'age' => "string",
      'book_id' => "integer",
    ];

}
