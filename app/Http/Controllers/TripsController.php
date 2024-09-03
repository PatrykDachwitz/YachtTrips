<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Requests\trips\FiltersRequest;
use App\Models\Ocean;
use App\Models\Yacht;
use App\Repository\TripsRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Mockery\Exception;

class TripsController extends Controller
{

    const DEFAULT_PAGINATION_COUNT = 40;
    private $trips;

    public function __construct(TripsRepository $tripsRepository)
    {
        $this->trips = $tripsRepository;
    }

    private function getFilters() {
        return [
            [
                'name' => "oceans",
                "options" => Ocean::all(),
                "nameInput" => "ocean_id"
            ],
            [
                'name' => "yachts",
                "options" => Yacht::all(),
                "nameInput" => "yacht_id"
            ]
        ];
    }


    public function index(FiltersRequest $request) {

        $filters = $request->validated();
        $pagination = $request->input('pagination', self::DEFAULT_PAGINATION_COUNT);

        try {
            if (!isset($filters["start_day"]) || is_null($filters["start_day"])) {
                $filters["start_day"] = date("Y-m-d", strtotime("+1 day"));
            }

            if (is_null($filters["end_day"])) {
                unset($filters["end_day"]);
            }

        } catch (\Exception) {

        }

        return view('pages.trips',
        [
            'trips' => $this->trips->get($pagination, $filters),
            'filters' => $this->getFilters(),
            'filtersChecked' => $filters
        ]);
    }

    public function show(string $slug) {

        return view('pages.trip', [
            'trip' => $this->trips->getBySlug($slug),
            'sessionId' => Session::getId()
        ]);
    }

}
