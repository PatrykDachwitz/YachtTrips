<?php

namespace App\Repository\Eloquent;

use App\Models\Trip;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class TripsRepository implements \App\Repository\TripsRepository
{
    private $trip;

    public function __construct(Trip $trip)
    {
        $this->trip = $trip;
    }

    public function getAll()
    {
        $this->trip->all();
    }

    public function get()
    {
        $this->trip->get();
    }

    public function findOrFail(int $id)
    {
        $this->trip->findOrFail($id);
    }

    public function destroy(int $id)
    {
        $trip = $this->trip->findOrFail($id);

        if($trip->delete()) {
            return true;
        } else {
            return false;
        }
    }

    public function create(array $data)
    {
        $trip = new $this->trip();

        $trip->name = $data['name'];
        $trip->start_day = $data['start_day'];
        $trip->end_day = $data['end_day'];
        $trip->yacht_id = $data['yacht_id'];
        $trip->ocean_id = $data['ocean_id'];
        $trip->count_day = $data['count_day'];
        $trip->template_id = $data['template_id'];

        $trip->save();
        return $trip->id;
    }

    public function update(int $id, array $updateData)
    {
        try {
            $trip = $this->trip->findOrFail($id);

            $trip->name = $updateData['name'] ?? $trip->name;
            $trip->start_day = $updateData['start_day'] ?? $trip->start_day;
            $trip->end_day = $updateData['end_day'] ?? $trip->end_day;
            $trip->yacht_id = $updateData['yacht_id'] ?? $trip->yacht_id;
            $trip->ocean_id = $updateData['ocean_id'] ?? $trip->ocean_id;
            $trip->count_day = $updateData['count_day'] ?? $trip->count_day;
            $trip->template_id = $updateData['template_id'] ?? $trip->template_id;

            $trip->save();
            return $trip;
        } catch (ModelNotFoundException) {
            throw new ModelNotFoundException('Model not found');
        } catch (Exception) {
            throw new Exception('Error update model');
        }

    }
}
