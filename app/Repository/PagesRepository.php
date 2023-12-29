<?php
declare(strict_types=1);
namespace App\Repository;

interface PagesRepository
{
    public function getBySlug(string $slug);
}
