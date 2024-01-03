<?php
declare(strict_types=1);
namespace App\Repository;

interface FilesRepository
{
    public function get();
    public function findOrFail(int $id);

    public function create(array $data);

    public function destroy(string|array $id);

    public function update(int $id, array $data);

}
