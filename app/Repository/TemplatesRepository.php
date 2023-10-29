<?php

namespace App\Repository;

interface TemplatesRepository
{
    public function get();
    public function findOrFail(int $id);
}
