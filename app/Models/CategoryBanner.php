<?php
declare(strict_types=1);
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryBanner extends Model
{
    const FORMAT_DATE = 'Y-m-d H:i:s';
    use HasFactory;
    use SoftDeletes;

    private $currentDate;
    protected $table = "category_banners";
    protected $primaryKey = "id";


    public function banners() {
        return $this->hasMany(Banner::class)->with('images');
    }


    public function bannersActive() {

        $this->currentDate = date(self::FORMAT_DATE);

        return $this->hasMany(Banner::class)
            ->where('active', true)
            ->Where(function ($query) {
                $query->where('start_at', null)
                    ->orWhere('start_at', '<', $this->currentDate);
            })
            ->where(function ($query) {
                $query->where('finish_at', null)
                    ->orWhere('finish_at', '>=', $this->currentDate);
            })
            ->with('images');
    }

    public function templates() {
        return $this->belongsTo(Template::class, 'template_id', "id");
    }


    protected $casts = [
        'name' => 'string',
        'deleted_at' => 'timestamp',
        'active' => 'boolean',
        'description' => 'string',
        'template_id' => 'string',
    ];

    protected $fillable = [
        'name',
        'active',
        'description',
        'template_id',
    ];

    protected $hidden = [
        'created_at',
        'deleted_at',
        'updated_at',
        'template_id',
    ];

}
