<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Repository\BannersRepository;
use App\Repository\CategoryBannersRepository;
use App\Repository\TemplatesRepository;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    private $template;
    public function __construct(TemplatesRepository $templatesRepository) {
        $this->template = $templatesRepository;
    }

    public function show(int $id) {
        return view('admin.templates.show', [
            "id" => $id,
            'templates' => $this->template->get()
        ]);
    }

    public function edit(int $id) {
        return view('admin.templates.edit', [
            "id" => $id,
            'templates' => $this->template->get()
        ]);
    }

    public function index(){
        return view('admin.templates.list');
    }

    public function create() {
        return view('admin.templates.create', [
            'templates' => $this->template->get()
        ]);
    }
}
