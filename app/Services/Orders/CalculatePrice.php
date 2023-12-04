<?php
declare(strict_types=1);
namespace App\Services\Orders;


use App\Models\Trip;
use Illuminate\Database\Eloquent\Collection;

class CalculatePrice
{
    static function getRoomPrice(int $numberRoom, Collection $rooms) {
        foreach ($rooms as $room) {
            if ($room->pivot->number_room === $numberRoom) {
                return $room->pivot->price;
            }
        }

        return 0;
    }

    static public function getPrice(int $countAdult,int $countChild,int $numberRoom,int $numberTrip) {

        $trip = Trip::with('rooms')->find($numberTrip);
        $roomPrice = self::getRoomPrice($numberRoom, $trip->rooms);

        $price = ($countAdult * $trip->price_adult) + ($countChild * $trip->price_kids) + $roomPrice;

        return $price;
    }

}
