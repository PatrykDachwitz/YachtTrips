<?php
declare(strict_types=1);
namespace App\Repository\Eloquent;

use App\Models\User;

class UsersRepository implements \App\Repository\UsersRepository
{

    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getAll()
    {
        return $this->user->all();
    }

    public function get()
    {
        return $this->user->get();
    }

    public function findOrFail(int $id)
    {
        return $this->user->findOrFail($id);
    }

    public function destroy(int $id)
    {
        return $this->user->destroy($id);
    }

    public function create(array $data)
    {
        return $this->user->create($data);
    }

    public function update(int $id, array $updateData)
    {
        $user = $this->findOrFail($id);
        $user->update($updateData);

        return $user->save();
    }
}
