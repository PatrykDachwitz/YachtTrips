<?php

namespace App\Repository\Eloquent;

use App\Models\Banner;

class BannersRepository implements \App\Repository\BannersRepository
{

    private $banner;

    public function __Construct(Banner $banner) {
        $this->banner = $banner;
    }
    public function getAll()
    {
        return $this->banner->get();
    }

    public function update()
    {
        // TODO: Implement update() method.
    }

    public function findOrFail(int $id)
    {
        return $this->banner->findOrFail($id);
    }

    public function destroy(int $id)
    {
        $this->banner->delete($id);
    }
}
