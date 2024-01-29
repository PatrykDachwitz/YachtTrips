<?php
declare(strict_types=1);
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'extension',
      'path',
      'author_id',
      'preview_path',
      'size',
      'mime',
      'folder_id',
    ];

    protected $casts = [
        'name' => 'string',
        'extension' => "string",
        'path' => "string",
        'author_id' => "integer",
        'preview_path' => "string",
        'size' => "integer",
        'mime' => "string",
        'folder_id' => "integer",
    ];

    protected $appends = [
      'link_image',
      'link_webp',
    ];

    public function getLinkImageAttribute() {
        return $this->path . "/" . $this->name . "." . $this->extension;
    }
    public function getLinkWebpAttribute() {
        return $this->path . "/" . $this->name . ".webp";
    }
}
