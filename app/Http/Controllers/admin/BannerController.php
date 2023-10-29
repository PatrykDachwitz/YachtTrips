<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Repository\BannersRepository;
use App\Repository\CategoryBannersRepository;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    private $category;
    public function __construct(CategoryBannersRepository $categoryBannersRepository) {
        $this->category = $categoryBannersRepository;
    }

    public function show(int $id) {
        return view('admin.banners.show', [
            "id" => $id,
            'categoryBanners' => $this->category->get()
        ]);
    }

    public function edit(int $id) {
        return view('admin.banners.edit', [
            "id" => $id,
            'categoryBanners' => $this->category->get()
        ]);
    }

    public function index(){
        return view('admin.banners.list');
    }

    public function create() {
        return view('admin.banners.create', [
            'categoryBanners' => $this->category->get()
        ]);
    }
}
