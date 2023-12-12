<?php
declare(strict_types=1);
namespace App\Repository\Eloquent;

use App\Models\Order;

class OrdersRepository implements \App\Repository\OrdersRepository
{

    private $orders;
    public function __construct(Order $orders)
    {
        $this->orders = $orders;
    }

    public function get()
    {
        // TODO: Implement get() method.
    }

    public function findOrFail(int $id)
    {
        // TODO: Implement findOrFail() method.
    }

    public function findOrCreatBySession(string $sessionId)
    {
        return $this->orders
            ->firstOrCreate([
                'session_id' => $sessionId
            ]);
    }

    public function destroy(int $id)
    {
        // TODO: Implement destroy() method.
    }

    public function create(array $data)
    {
        // TODO: Implement create() method.
    }

    public function update(int $id, array $updateData)
    {
        // TODO: Implement update() method.
    }

    public function findBySession(string $sessionId)
    {

        return $this->orders
            ->with('books')
            ->where('session_id', $sessionId)
            ->first();
    }
}
