<?php
declare(strict_types=1);
namespace App\Repository;

interface VacationersRepository
{

    public function getAll();

    public function get();
    public function findOrFail(int $id);

    public function destroy(int $id);

    public function create(array $data);
    public function update(int $id, array $updateData);

    public function getEmptyByBookId(int $bookId);
}
