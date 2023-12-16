<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Trip;
use App\Repository\TripsRepository;
use App\Services\Orders\CalculatePrice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Session;

class TripController extends Controller
{
    private $trip;

    public function __construct(TripsRepository $tripsRepository)
    {
        $this->trip = $tripsRepository;
    }

    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, string $slug)
    {

        return view('testTrip', [
            'trip_id' => $this->getIdBySlug($slug),
            'sessionId' => Session::getId()
        ]);

    }
}
