<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Repository\CategoryBannersRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        return view('index', [
            'contents' => $this->banners->getWithActiveContent()
        ]);
    }
}
