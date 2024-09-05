<?php
declare(strict_types=1);
namespace App\Repository\Eloquent;

use App\Models\Vacationer;

class VacationersRepository implements \App\Repository\VacationersRepository
{

    private $vacationer;

    public function __construct(Vacationer $vacationer)
    {
        $this->vacationer = $vacationer;
    }

    public function getAll()
    {
        return $this->vacationer->all();
    }

    public function get()
    {
        return $this->vacationer->paginate(20);
    }

    public function findOrFail(int $id)
    {
        return $this->vacationer->findOrFail($id);
    }

    public function destroy(int $id)
    {
        return $this->vacationer->destroy($id);
    }

    public function create(array $data)
    {
        return $this->vacationer->create($data);
    }

    public function update(int $id, array $updateData)
    {
        $vacationer = $this->findOrFail($id);

        $vacationer->update($updateData);

        return $vacationer->save();
    }

    public function getEmptyByBookId(int $bookId)
    {

        return $this->vacationer
            ->where([
                ['first_name', ""],
                ['book_id', $bookId]
            ])
            ->orWhere([
                ['last_name', ""],
                ['book_id', $bookId]
            ])
            ->get();
    }
}
