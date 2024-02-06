<?php
declare(strict_types=1);
namespace App\Repository\Eloquent;

use App\Models\Order;
use Illuminate\Database\Eloquent\ModelNotFoundException;

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
            ->with('statusOrder')
            ->findOrFail($id);
    }

    public function findOrCreatBySession(string $sessionId)
    {
        try {
            $order = $this->orders
                ->findOrFail([
                    'session_id' => $sessionId
                ]);
        } catch (ModelNotFoundException) {
            $order = $this->create([
                'session_id' => $sessionId,
                'number' => uniqid()
            ]);
        }
        return $order;
    }

    public function destroy(int $id)
    {
        return $this->orders->destroy($id);
    }

    public function create(array $data)
    {

        $data['number'] = uniqid();
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
            ->where('status_id', 1)
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
        $updateOrder->status_id = $data['status_id'] ?? $updateOrder->status_id;
        $updateOrder->personal_phone = $data['personal_phone'] ?? $updateOrder->personal_phone;
        $updateOrder->personal_first_name = $data['personal_first_name'] ?? $updateOrder->personal_first_name;
        $updateOrder->personal_last_name = $data['personal_last_name'] ?? $updateOrder->personal_last_name;
        $updateOrder->address = $data['address'] ?? $updateOrder->address;
        $updateOrder->checked_rule = $data['checked_rule'] ?? $updateOrder->checked_rule;
        $updateOrder->correspondenceAddress = $data['correspondenceAddress'] ?? $updateOrder->correspondenceAddress;
        $updateOrder->save();

        return $updateOrder;
    }

}
