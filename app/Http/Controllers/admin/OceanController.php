<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Repository\BannersRepository;
use App\Repository\CategoryBannersRepository;
use App\Repository\OceansRepository;
use Illuminate\Http\Request;

class OceanController extends Controller
{
    private $ocean;
    public function __construct(OceansRepository $oceansRepository) {
        $this->ocean = $oceansRepository;
    }

    public function show(int $id) {
        return view('admin.oceans.show', [
            "id" => $id,
            'oceans' => $this->ocean->get()
        ]);
    }

    public function edit(int $id) {
        return view('admin.oceans.edit', [
            "id" => $id,
            'oceans' => $this->ocean->get()
        ]);
    }

    public function index(){
        return view('admin.oceans.list');
    }

    public function create() {
        return view('admin.oceans.create', [
            'oceans' => $this->ocean->get()
        ]);
    }
}
