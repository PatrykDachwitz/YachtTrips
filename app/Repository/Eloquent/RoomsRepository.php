<?php
declare(strict_types=1);
namespace App\Repository\Eloquent;

use App\Models\Room;

class RoomsRepository implements \App\Repository\RoomsRepository
{

    private $rooms;

    public function __construct(Room $rooms)
    {
        $this->rooms = $rooms;
    }

    public function getAll()
    {
        return $this->rooms->all();
    }

    public function get()
    {
        return $this->rooms->paginate(20);
    }

    public function findOrFail(int $id)
    {
        return $this->rooms
            ->findOrFail($id);
    }

    public function destroy(int $id)
    {
        return $this->rooms
            ->destroy($id);
    }

    public function create(array $data)
    {
        return $this->rooms
            ->create($data);
    }

    public function update(int $id, array $updateData)
    {
        $room = $this->rooms->findOrFail($id);

        $room->update($updateData);

        return $room->save();
    }
}
