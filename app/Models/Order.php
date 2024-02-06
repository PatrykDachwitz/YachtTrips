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
        "number" => 'string',
        "url_summary" => 'string',
        "checked_rule" => 'integer',
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
        'number',
        'checked_rule',
    ];

    protected $hidden = [
        'deleted_at',
        'updated_at',
        'created_at',
    ];

    protected $appends = [
        'url_summary'
    ];

    public function books() {
        return $this->hasMany(Book::class)
            ->with('trips')
            ->with('vacationers');
    }
    public function getUrlSummaryAttribute() {
        return route('summaryOrder', [
            'idOrder' => $this->id,
            'numberOrder' => $this->number,
        ]);
    }
    public function statusOrder() {
        return $this->hasOne(Status::class, 'id', 'status_id');
    }
}
