<?php
declare(strict_types=1);
namespace App\Repository;

use App\Models\Combination;

interface CombinationsRepository
{

    public function deleteAvailableByTripId(int $tripId) : void;

    public function create(array $data) : Combination;
}
