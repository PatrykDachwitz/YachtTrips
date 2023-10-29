<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Repository\TemplatesRepository;
use Illuminate\Http\Request;

class CategoryBannerController extends Controller
{
    private $templates;
    public function __construct(TemplatesRepository $templatesRepository)
    {
        $this->templates = $templatesRepository;
    }

    public function show(int $id) {
        return view('admin.banners.category.show', [
            'templates' => $this->templates->findOrFail($id)
        ]);

    }

    public function edit(int $id) {

        return view('admin.banners.category.edit', [
            'templates' => $this->templates->findOrFail($id)
        ]);
    }

    public function index(){
        return view('admin.banners.category.list');
    }

    public function create() {
        return view('admin.banners.category.create');

    }
}
