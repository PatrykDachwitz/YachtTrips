<?php

namespace App\Repository;

interface TemplatesRepository
{
    public function get();
    public function findOrFail(int $id);

    public function update(int $id, array $updateData);
    public function create(array $data);
    public function destroy(int $id);
}
