<?php
declare(strict_types=1);
namespace App\Repository\Eloquent;

use App\Models\Page;

class PagesRepository implements \App\Repository\PagesRepository
{
    private $page;
    public function __construct(Page $page)
    {
        $this->page = $page;
    }

    public function getBySlug(string $slug)
    {
        return $this->page
            ->where('slug', $slug)
            ->first();
    }
}
