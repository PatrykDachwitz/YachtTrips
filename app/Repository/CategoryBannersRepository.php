<?php

namespace App\Repository;

interface CategoryBannersRepository
{

    public function get();
    public function getWithContent();

    public function getWithActiveContent();
    public function findOrFail(int $id);
    public function update(int $id, array $updateData);
    public function create(array $data);
}
