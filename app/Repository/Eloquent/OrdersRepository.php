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
        return $this->orders->paginate(20);
    }

    public function findOrFail(int $id)
    {
        return $this->orders
            ->with('books')
            ->with('status')
            ->findOrFail($id);
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
        return $this->orders->destroy($id);
    }

    public function create(array $data)
    {
        return $this->orders->create($data);
    }

    public function update(int $id, array $updateData)
    {
        $order = $this->findOrFail($id);
        $order->update($updateData);

        return $order->save();
    }



    public function findBySession(string $sessionId)
    {

        return $this->orders
            ->with('books')
            ->where('session_id', $sessionId)
            ->first();
    }

    public function deincrementPrice(int $id,string $price)
    {
        $order = $this->findOrFail($id);

        $order->price -= $price;
        return $order->save();
    }

    public function updateBySession(string $sessionId, array $data)
    {
        $updateOrder = $this->findBySession($sessionId);

        $updateOrder->personal_mail = $data['personal_mail'] ?? $updateOrder->personal_mail;
        $updateOrder->personal_phone = $data['personal_phone'] ?? $updateOrder->personal_phone;
        $updateOrder->personal_first_name = $data['personal_first_name'] ?? $updateOrder->personal_first_name;
        $updateOrder->personal_last_name = $data['personal_last_name'] ?? $updateOrder->personal_last_name;
        $updateOrder->address = $data['address'] ?? $updateOrder->address;
        $updateOrder->checked_rule = $data['checked_rule'] ?? $updateOrder->checked_rule;
        $updateOrder->correspondenceAddress = $data['correspondenceAddress'] ?? $updateOrder->correspondenceAddress;

        return $updateOrder->save();
    }
}
