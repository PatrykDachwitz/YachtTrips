<?php
declare(strict_types=1);
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    use HasFactory;

    protected $casts = [
        'path' => 'string',
        'parent' => 'int',
        'name' => 'string',
    ];

    protected $fillable = [
        'path',
        'parent',
        'name',
    ];

    protected $appends = [
      'url',
      'urlParent',
    ];
    public function files() {
        return $this->hasMany(File::class);
    }

    public function getUrlAttribute() {
        return route('folders.show', [
            'folder' => $this->id
        ]);
    }

    public function getUrlParentAttribute() {
        return route('folders.show', [
            'folder' => $this->parent
        ]);
    }

}
