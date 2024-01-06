<?php
declare(strict_types=1);
namespace App\Repository\Eloquent;

use App\Models\Page;

class PagesRepository implements \App\Repository\PagesRepository
{
    private $page;
    public function __construct(Page $page)
    {
        $this->page = $page;
    }

    public function getBySlug(string $slug)
    {
        return $this->page
            ->where('slug', $slug)
            ->where('active', true)
            ->first();
    }

    public function get()
    {
        return $this->page->paginate(20);
    }

    public function findOrFail(int $id)
    {
        return $this->page->findOrFail($id);
    }

    public function destroy(int $id)
    {
        return $this->page->destroy($id);
    }

    public function create(array $data)
    {
        return $this->page->create($data);
    }

    public function update(int $id, array $updateData)
    {
        $page = $this->findOrFail($id);
        $page->update($updateData);

        return $page->save();
    }
}
