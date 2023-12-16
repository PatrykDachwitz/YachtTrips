<?php
declare(strict_types=1);
namespace App\Repository\Eloquent;

use App\Models\Trip;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class TripsRepository implements \App\Repository\TripsRepository
{
    private $trip;

    private function useFilters(array $filters = []) {

        $tripQuery = $this->trip->newQuery();

        foreach ($filters ?? [] as $key => $filter) {
            switch ($key) {
                case "start_day":
                    $tripQuery->where('start_day', '>=', "{$filter} 00:00:00");
                    break;
                case "end_day":
                    $tripQuery->where('end_day', '<=', "{$filter} 23:59:59");
                    break;
                case "yacht_id":
                    $tripQuery->whereIn('yacht_id', $filter['*']);
                    break;
                case "ocean_id":
                    $tripQuery->whereIn('ocean_id', $filter['*']);
                    break;
                case "template_id":
                    $tripQuery->whereIn('template_id', $filter['*']);
                    break;
                case "count_day":
                    $tripQuery->whereIn('count_day', $filter['*']);
                    break;
            }
        }

        return $tripQuery;
    }

    public function __construct(Trip $trip)
    {
        $this->trip = $trip;
    }

    public function getAll()
    {
        dd($this->trip->get());
        return $this->trip->all();
    }

    public function get(int $paginated = 40, array $filters = [])
    {
        $trips = $this->useFilters($filters);

        return $trips
            ->with('imagesCategory')
            ->paginate($paginated);
    }

    public function findOrFail(int $id)
    {
        return $this->trip

            ->availableRooms()
            ->with('rooms')
            ->with('oceans')
            ->with('yachts')
            ->with('images')
            ->findOrFail($id);
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

    public function getIdBySlug(string $slug)
    {
        $trip = $this->trip->where('slug', $slug)->firstOrFail();

        return $trip->id;
    }
}
