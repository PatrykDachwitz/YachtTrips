<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Repository\BannersRepository;
use App\Repository\CategoryBannersRepository;
use App\Repository\YachtsRepository;
use Illuminate\Http\Request;

class YachtController extends Controller
{
    private $yacht;
    public function __construct(YachtsRepository $yacht) {
        $this->yacht = $yacht;
    }

    public function show(int $id) {
        return view('admin.yachts.show', [
            "id" => $id,
            'yachts' => $this->yacht->get()
        ]);
    }

    public function edit(int $id) {
        return view('admin.yachts.edit', [
            "id" => $id,
            'yachts' => $this->yacht->get()
        ]);
    }

    public function index(){
        return view('admin.yachts.list');
    }

    public function create() {
        return view('admin.yachts.create', [
            'yachts' => $this->yacht->get()
        ]);
    }
}
