<?php
declare(strict_types=1);
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $casts = [
        "trip_id" => "integer",
        "order_id" => "integer",
        "number_room" => "integer",
        "count_adult" => "integer",
        "count_kids" => "integer",
        "double_beds" => "integer",
        "single_beds" => "integer",
        "kids_beds" => "integer",
        "price" => "integer",
        "deleted_at" => "timestamp",
    ];

    protected $hidden = [
      'updated_at',
      'created_at',
      'deleted_at',
    ];

    public function trips() {
        return $this->belongsTo(Trip::class, "trip_id", "id")
            ->with('imagesCategory');
    }

    public function vacationers() {
        return $this->hasMany(Vacationer::class);
    }
}
