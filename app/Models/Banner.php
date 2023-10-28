<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Banner extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function categoryBanners() {
        return $this->belongsTo(CategoryBanner::class, "id");
    }

    public function images() {
        return $this->belongsToMany(File::class, "pivot_images", "place_id")
            ->withPivot('device');
    }
}
