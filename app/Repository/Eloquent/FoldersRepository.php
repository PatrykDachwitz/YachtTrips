<?php
declare(strict_types=1);
namespace App\Repository\Eloquent;

use App\Models\Folder;

class FoldersRepository implements \App\Repository\FoldersRepository
{

    private $folder;
    public function __construct(Folder $folder)
    {
        $this->folder = $folder;
    }

    public function get()
    {
        return $this->folder
            ->get();
    }

    public function findOrFail(int $id)
    {
        return $this->folder
            ->with('files')
            ->findOrFail($id);
    }

    public function create(array $data)
    {
        $data['path'] = $this->getPathByNameAndParent($data['parent'], $data['name']);

        return $this->folder
            ->create($data);
    }

    public function destroy(array|string $id)
    {
        return $this->folder->destroy($id);
    }

    private function getPathByNameAndParent(int $parentId, string $name) {
        $parentFolder = $this->findOrFail($parentId);

        return "{$parentFolder->path}/{$name}";
    }
    public function update(int $id, array $data)
    {
        $updateFolder = $this->findOrFail($id);
        $path = $this->getPathByNameAndParent($data['parent'] ?? $updateFolder->parent, $data['name'] ?? $updateFolder->name);

        $updateFolder->name = $data['name'] ?? $updateFolder->name;
        $updateFolder->path = $path ?? $updateFolder->path;
        $updateFolder->parent = $data['parent'] ?? $updateFolder->parent;
        $updateFolder->save();

        return $updateFolder;
    }

    public function findByParentId(int $id)
    {
        return $this->folder
            ->where("parent", $id)
            ->get();
    }
}
