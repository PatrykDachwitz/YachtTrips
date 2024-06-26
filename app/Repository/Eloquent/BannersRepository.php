<?php
declare(strict_types=1);
namespace App\Repository\Eloquent;

use App\Models\Banner;
use App\Services\images\ConvertRequestToPivotData;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;

class BannersRepository implements \App\Repository\BannersRepository
{

    use ConvertRequestToPivotData;
    private $banner;

    public function __construct(Banner $banner) {
        $this->banner = $banner;
    }
    public function getAll()
    {
        return $this->banner->all();
    }



    public function update(int $id, array $updateData)
    {

        try {
            $banner = $this->banner->with('images')->findOrFail($id);

            $banner->name = $updateData['name'] ?? $banner->name;
            $banner->start_at = $updateData['start_at'] ?? $banner->start_at;
            $banner->href = $updateData['href'] ?? $banner->href;
            $banner->finish_at = $updateData['finish_at'] ?? $banner->finish_at;
            $banner->active = $updateData['active'] ?? $banner->active;
            $banner->category_banner_id = $updateData['category_banner_id'] ?? $banner->category_banner_id;
            $banner->description = $updateData['description'] ?? $banner->description;

            $banner->images()->sync($this->getConvertImages($updateData['images']));

            $banner->save();
            return $banner;
        } catch (ModelNotFoundException) {
            throw new ModelNotFoundException('Model not found');
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function create(array $data)
    {
        try {
            $banner = new $this->banner();

            $banner->name = $data['name'];
            $banner->start_at = $data['start_at'] ?? "";
            $banner->finish_at = $data['finish_at'] ?? "";
            $banner->active = $data['active'];
            $banner->href = $data['href'] ?? null;
            $banner->category_banner_id = $data['category_banner_id'];
            $banner->description = $data['description'] ?? "";

            $banner->save();

            return $banner->id;
        } catch (Exception) {
            throw new Exception(_("api.error_500"));
        }
    }

    public function findOrFail(int $id)
    {
        return $this->banner->with('images')->findOrFail($id);
    }

    public function destroy(int $id)
    {
        $banner = $this->banner->findOrFail($id);

        if($banner->delete()) {
            return true;
        } else {
            return false;
        }
    }

    public function get()
    {
        return $this->banner->paginate(20);
    }

}
