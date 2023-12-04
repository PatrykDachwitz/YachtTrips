<?php
declare(strict_types=1);
namespace App\Models;

use Carbon\Carbon;
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
      'price_adult' => 'integer',
      'price_kids' => 'integer',
      'ocean_id' => 'integer',
      'count_day' => 'integer',
      'template_id' => 'integer',
      'deleted_at' => 'timestamp',
      'start_travel' => 'date',
      'end_travel' => 'date'
    ];

    protected $hidden = [
        'yacht_id',
        'ocean_id',
        'template_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $appends = [
        'start_travel',
        'end_travel',
    ];

    public function getStartTravelAttribute() {
        $date = Carbon::createFromTimestamp($this->start_day);
        return $date->format('d-m-Y');
    }

    public function getEndTravelAttribute() {
        $date = Carbon::createFromTimestamp($this->end_day);
        return $date->format('d-m-Y');
    }

    public function images() {
        return $this->belongsToMany(File::class)
            ->withPivot('default')
            ->orderByPivot('position');
    }

    public function scopeAvailableRooms() {
        return $this
                ->withMax('roomsActive', 'double_beds')
                ->withMax('roomsActive', 'single_beds')
                ->withMax('roomsActive', 'kids_beds')
                ->withMax('roomsActive', 'adults')
                ->withMax('roomsActive', 'kids')
                ->withMax('roomsActive', 'premium');
    }
    public function rooms() {
        return $this->belongsToMany(Room::class)
            ->withPivot('available')
            ->withPivot('number_room')
            ->withPivot('price')
            ->withPivot('reservation')
            ->orderByPivot('price');
    }

    public function roomsActive() {
        return $this->belongsToMany(Room::class)
            ->wherePivot('available', true)
            ->withPivot('available')
            ->withPivot('number_room');
    }

    public function oceans() {
        return $this->hasOne(Ocean::class, "id", "ocean_id");
    }
    public function yachts() {
        return $this->hasOne(Yacht::class, "id", "yacht_id");
    }
}
