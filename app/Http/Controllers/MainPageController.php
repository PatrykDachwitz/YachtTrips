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
        $rooms = (DB::table('rooms')
            ->select('id')
            ->get())
            ->toArray();

        $roomLastAvailableNumber = (count($rooms) - 1);

        $countSelectRoom = rand(4, $roomLastAvailableNumber);

        dd();
        //dd($this->banners->getWithContent());
        return view('index', [
            'contents' => $this->banners->getWithContent()
        ]);
    }
}
