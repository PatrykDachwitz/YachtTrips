<?php
declare(strict_types=1);
namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\trips\CreatedRequest;
use App\Http\Requests\trips\FiltersRequest;
use App\Http\Requests\trips\UpdateRequest;
use App\Models\Trip;
use App\Repository\TripsRepository;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;
use MongoDB\Driver\Query;

class TripsController extends Controller
{
    private $trips;

    public function __Construct(TripsRepository $tripsRepository) {
        $this->trips = $tripsRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(FiltersRequest $request)
    {
        try {
            $filters = $request->only([
                'filters.start_day',
                'filters.end_day',
                'filters.yacht_id.*',
                'filters.ocean_id.*',
                'filters.template_id.*',
                'filters.count_day.*',
            ])['filters'];
        } catch (Exception) {
            $filters = [];
        }

//        return response($filters, 200);

        return response($this->trips->get(40, $filters), 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatedRequest $request)
    {

        try {
            $id = $this->trips->create($request->only([
                'name',
                'start_day',
                'end_day',
                'yacht_id',
                'ocean_id',
                'count_day',
                'template_id'
            ]));
        } catch (Exception) {
            abort(500);
        }

        return response( route('admin.trips.show', [
            'id' => $id
        ] ), 301);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        return response($this->trips->findOrFail($id), 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, int $id)
    {
        $trip = [];

        try {
            $trip = $this->trips->update($id, $request->only([
                'name',
                'start_day',
                'end_day',
                'yacht_id',
                'ocean_id',
                'count_day',
                'template_id'
            ]));
        } catch (ModelNotFoundException) {
            abort(404);
        } catch (Exception) {
            abort(500);
        }

        return response($trip, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        if ($this->trips->destroy($id)) {
            return response('success', 200);
        } else {
            abort(500);
        }
    }
}
