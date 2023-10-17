<?php

namespace App\Repository\Eloquent;

use App\Models\CategoryBanner;

class CategoryBannersRepository implements \App\Repository\CategoryBannersRepository
{

    private $category;

    public function __Construct(CategoryBanner $categoryBanner) {
        $this->category = $categoryBanner;
    }

    public function get() {
        return $this->category->get();
    }

    public function getWithContent()
    {
        return $this->category
            ->with([
                'banners',
                'templates'
            ])
            ->get();
    }
}
