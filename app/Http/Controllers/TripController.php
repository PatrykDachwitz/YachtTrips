<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Trip;
use App\Services\Orders\CalculatePrice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Session;

class TripController extends Controller
{
    protected $rooms;

    public function __construct()
    {
    }

    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, string $slug)
    {
        return view('testTrip', [
            'trip_id' => 1,
            'sessionId' => Session::getId()
        ]);
    }
}
