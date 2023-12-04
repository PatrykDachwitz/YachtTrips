<?php
declare(strict_types=1);
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

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
