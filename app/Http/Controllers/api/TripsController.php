<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\trips\CreatedRequest;
use App\Http\Requests\trips\UpdateRequest;
use App\Repository\TripsRepository;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;

class TripsController extends Controller
{
    private $trips;

    public function __Construct(TripsRepository $tripsRepository) {
        $this->trips = $tripsRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response($this->trips->get() ?? [], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        abort(404);
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
            return response(_('api.error_500'), 500);
        }

        return response( route('admin.trips.show', [
            'id' => $id
        ] ), 301);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response($this->trips->findOrFail($id), 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
            return response(_('api.not_found'), 404);
        } catch (Exception) {
            return response(_('api.error_500'), 500);
        }

        return response($trip, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if ($this->trips->destroy($id)) {
            return response('success', 200);
        } else {
            abort(500);
        }
    }
}
