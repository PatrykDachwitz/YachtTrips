<?php
declare(strict_types=1);
namespace App\Repository\Eloquent;

use App\Models\Book;
use App\Repository\OrdersRepository;
use App\Services\Orders\CalculatePrice;

class BooksRepository implements \App\Repository\BooksRepository
{

    private $orders, $booking;
    public function __construct(Book $book, OrdersRepository $orders)
    {
        $this->orders = $orders;
        $this->booking = $book;
    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
    }

    public function get()
    {
        // TODO: Implement get() method.
    }

    public function findOrFail(int $id)
    {
        // TODO: Implement findOrFail() method.
    }

    public function destroy(int $id)
    {
       return $this->booking->destroy($id);
    }

    public function create(array $data)
    {
        $orders = $this->orders->findOrCreatBySession($data['session_id']);
        $booking = new $this->booking();

        $booking->order_id = $orders->id;
        $booking->trip_id = $data['trip_id'];
        $booking->number_room = $data['number_room'];
        $booking->count_adult = $data['count_adult'] ?? 1;
        $booking->single_beds = $data['single_beds'] ?? 1;
        $booking->count_kids = $data['count_kids'] ?? 0;
        $booking->double_beds = $data['double_beds'] ?? 0;
        $booking->kids_beds = $data['kids_beds'] ?? 0;

        $price = CalculatePrice::getPrice($booking->count_adult, $booking->count_kids, $booking->number_room, $booking->trip_id);

        $booking->price = $price;
        $booking->save();

        $orders->price += $price;
        $orders->save();

        return $booking;
    }

    public function update(int $id, array $updateData)
    {
        // TODO: Implement update() method.
    }
}
