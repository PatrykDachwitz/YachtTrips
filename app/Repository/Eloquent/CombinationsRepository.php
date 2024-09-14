<?php
declare(strict_types=1);
namespace App\Repository\Eloquent;

use App\Models\Combination;

class CombinationsRepository implements \App\Repository\CombinationsRepository
{

    private Combination $combination;

    public function __construct(Combination $combination)
    {
        $this->combination = $combination;
    }

    public function deleteAvailableByTripId(int $tripId) : void
    {
        $this->combination
            ->where([
                ["trip_id", $tripId],
                ["available", 1],
            ])->delete();
    }

    public function create(array $data): Combination
    {
        return $this->combination
            ->create($data);
    }
}
