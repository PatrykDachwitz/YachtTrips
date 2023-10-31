<?php

namespace App\Repository\Eloquent;

use App\Models\Ocean;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class OceansRepository implements \App\Repository\OceansRepository
{
    private $ocean;

    public function __construct(Ocean $ocean)
    {
        $this->ocean = $ocean;
    }

    public function getAll()
    {
        $this->ocean->all();
    }

    public function get()
    {
        $this->ocean->get();
    }

    public function findOrFail(int $id)
    {
        $this->ocean->findOrFail($id);
    }

    public function destroy(int $id)
    {
        if ($this->ocean->destroy($id)) {
            return response('success', 200);
        } else {
            abort(500);
        }
    }

    public function create(array $data)
    {
        $ocean = new $this->ocean();

        $ocean->name = $data['name'];

        $ocean->save();
        return $ocean->id;
    }

    public function update(int $id, array $updateData)
    {
        try {
            $ocean = $this->ocean->findOrFail($id);

            $ocean->name = $updateData['name'] ?? $ocean->name;

            $ocean->save();
            return $ocean;
        } catch (ModelNotFoundException) {
            throw new ModelNotFoundException('Model not found');
        } catch (Exception) {
            throw new Exception('Error update model');
        }

    }
}
