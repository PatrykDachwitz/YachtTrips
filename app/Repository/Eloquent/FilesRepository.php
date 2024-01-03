<?php
declare(strict_types=1);
namespace App\Repository\Eloquent;

use App\Models\File;

class FilesRepository implements \App\Repository\FilesRepository
{

    private $file;
    public function __construct(File $file)
    {
        $this->file = $file;
    }

    public function get()
    {
        return $this->file
            ->get();
    }

    public function findOrFail(int $id)
    {
        return $this->file
            ->findOrFail($id);
    }

    public function create(array $data)
    {


    }

    public function destroy(array|string $id)
    {
        return $this->file->destroy($id);
    }

    public function update(int $id, array $data)
    {
    }
}
