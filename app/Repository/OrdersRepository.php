<?php
declare(strict_types=1);
namespace App\Repository;

interface OrdersRepository
{
    public function get();
    public function findOrFail(int $id);

    public function findBySession(string $sessionId);

    public function findOrCreatBySession(string $sessionId);

    public function destroy(int $id);


    public function deincrementPrice(int $id,string $price);

    public function updateBySession(string $sessionId, array $data);

    public function create(array $data);
    public function update(int $id, array $updateData);
}
