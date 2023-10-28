<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryBanner extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "category_banners";
    protected $primaryKey = "id";


    public function banners() {
        return $this->hasMany(Banner::class)->with('images');
    }

    public function templates() {
        return $this->belongsTo(Template::class, 'template_id', "id");
    }
}
