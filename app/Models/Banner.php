<?php
declare(strict_types=1);
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

    public function getPathShowAttribute() {
        return route('banners.show', [
            'banners' => $this->id
        ]);
    }

    protected $casts = [
        'name' => 'string',
        'deleted_at' => 'timestamp',
        'start_at' => 'datetime: Y-m-d H:i:s',
        'finish_at' => 'datetime: Y-m-d H:i:s',
        'active' => 'boolean',
        'category_banner_id' => 'integer',
        'description' => 'string',
        'href' => 'string',
        'pathShow' => 'string',
    ];

    protected $fillable = [
        'name',
        'description',
        'category_banner_id',
        'active',
        'finish_at',
        'start_at',
        'href',
        'pathShow',
    ];

    protected $hidden = [
        'created_at',
        'deleted_at',
        'updated_at',
        'category_banner_id',
    ];

}
