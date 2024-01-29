<?php
declare(strict_types=1);
namespace App\Repository\Eloquent;

use App\Models\File;
use App\Models\Folder;

class FilesRepository implements \App\Repository\FilesRepository
{

    private $file, $folder;
    public function __construct(File $file, Folder $folder)
    {
        $this->file = $file;
        $this->folder = $folder;
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
        return $this->file
            ->create($data);
    }

    public function destroy(array|string $id)
    {
        return $this->file->destroy($id);
    }

    public function update(int $id, array $data)
    {
        if (isset($data['folder_id'])) {
            $currentFolder = $this->folder->findOrFail($data['folder_id']);
        }

        $currentFile = $this->findOrFail($id);

        $currentFile->name = $data['name'] ?? $currentFile->name;
        $currentFile->folder_id = $data['folder_id'] ?? $currentFile->folder_id;
        $currentFile->path = $currentFolder->path ?? $currentFile->path;

        return $currentFile->save();
    }
}
