<?php

namespace App\Repository\Eloquent;

use App\Models\Banner;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;

class BannersRepository implements \App\Repository\BannersRepository
{

    private $banner;

    public function __Construct(Banner $banner) {
        $this->banner = $banner;
    }
    public function getAll()
    {
        return $this->banner->all();
    }



    public function update()
    {
        // TODO: Implement update() method.
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
        return $this->banner->get();
    }
}
