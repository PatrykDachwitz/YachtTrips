<?php
declare(strict_types=1);
namespace App\Repository\Eloquent;

use App\Models\CategoryBanner;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;

class CategoryBannersRepository implements \App\Repository\CategoryBannersRepository
{

    private $category;

    public function __construct(CategoryBanner $categoryBanner) {
        $this->category = $categoryBanner;
    }

    public function get() {
        return $this->category->paginate(20);
    }

    public function getWithContent()
    {
        return $this->category
            ->with([
                'banners',
                'templates'
            ])
            ->get();
    }

    public function findOrFail(int $id)
    {
        return $this->category
            ->findOrFail($id);
    }

    public function update(int $id, array $updateData)
    {
        try {
            $category = $this->category->findOrFail($id);

            $category->name = $updateData['name'] ?? $category->name;
            $category->description = $updateData['description'] ?? $category->description;
            $category->active = $updateData['active'] ?? $category->active;
            $category->template_id = $updateData['template_id'] ?? $category->template_id;

            $category->save();

            return $category;
        } catch (ModelNotFoundException) {
            throw new ModelNotFoundException("Not found model exception");
        } catch (Exception) {
            throw new Exception("Error update category banners");
        }

    }

    public function create(array $data)
    {
        try {
            $category = $this->category();

            $category->name = $data['name'];
            $category->description = $data['description'] ?? "";
            $category->active = $data['active'] ?? 0;
            $category->template_id = $data['template_id'] ?? 1;

            $category->save();

            return $category->id;
        } catch (Exception) {
            throw new Exception("Error update category banners");
        }
    }

    public function getWithActiveContent()
    {
        return $this->category
            ->with([
                'bannersActive',
                'templates'
            ])
            ->where('active', true)
            ->get();
    }
}
