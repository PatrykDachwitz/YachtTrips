<?php
declare(strict_types=1);
namespace App\Http\Controllers;

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


    public function index(Request $request) {

        return view('trips',
        [
            'currentUrl' => $request->url(),
            'queryHtml' => urldecode($request->getQueryString() ?? ""),
        ]);
    }

    public function show(string $slug) {


        return view('trip', [
            'trip_id' => $this->trips->getIdBySlug($slug),
            'sessionId' => Session::getId()
        ]);
    }

}
