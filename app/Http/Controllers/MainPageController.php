<?php

namespace App\Http\Controllers;

use App\Repository\CategoryBannersRepository;
use Illuminate\Http\Request;

class MainPageController extends Controller
{
    private $banners;
    public function __Construct(CategoryBannersRepository $categoryBannersRepository) {
        $this->banners = $categoryBannersRepository;
    }
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //dd($this->banners->getWithContent());
        return view('index', [
            'contents' => $this->banners->getWithContent()
        ]);
    }
}
