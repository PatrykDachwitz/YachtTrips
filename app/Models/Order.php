<?php
declare(strict_types=1);
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $casts = [
        "status" => 'integer',
        "deleted_at" => 'timestamp',
        "session_id" => 'string',
        "personal_mail" => 'string',
        "personal_phone" => 'string',
        "personal_first_name" => 'string',
        "personal_last_name" => 'string',
        "address" => 'string',
        "price" => 'integer',
        "correspondenceAddress" => 'string',
    ];

    protected $fillable = [
        "session_id",
        "personal_mail",
        "personal_phone",
        "personal_first_name",
        "personal_last_name",
        'address',
        'correspondenceAddress',
        'price',
        'status',
    ];

    protected $hidden = [
        'deleted_at',
        'updated_at',
        'created_at',
    ];

    public function books() {
        return $this->hasMany(Book::class)
            ->with('trips')
            ->with('vacationers');
    }
}
