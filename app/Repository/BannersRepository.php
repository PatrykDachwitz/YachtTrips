<?php

namespace App\Repository;

interface BannersRepository
{

    public function getAll();
    public function update();

    public function get();
    public function findOrFail(int $id);

    public function destroy(int $id);
}
