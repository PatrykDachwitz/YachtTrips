<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Models\Ocean;
use App\Models\Yacht;
use App\Repository\TripsRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TripsController extends Controller
{
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


    public function index(Request $request) {

        return view('pages.trips',
        [
            'trips' => $this->trips->get(),
            'filters' => $this->getFilters(),
            'queryHtml' => urldecode($request->getQueryString() ?? ""),
        ]);
    }

    public function show(string $slug) {

        return view('pages.trip', [
            'trip' => $this->trips->getBySlug($slug),
            'sessionId' => Session::getId()
        ]);
    }

}
