<?php
declare(strict_types=1);
namespace App\Repository\Eloquent;

use App\Models\Yacht;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class YachtsRepository implements \App\Repository\YachtsRepository
{

    private $yacht;

    public function __construct(Yacht $yacht)
    {
        $this->yacht = $yacht;
    }

    public function getAll()
    {
        return $this->yacht->all();
    }

    public function get()
    {
        return $this->yacht->get();
    }

    public function findOrFail(int $id)
    {
        return $this->yacht->findOrFail($id);
    }

    public function destroy(int $id)
    {
        $yacht = $this->yacht->findOrFail($id);

        if($yacht->delete()) {
            return true;
        } else {
            return false;
        }
    }

    public function create(array $data)
    {
        $yacht = new $this->yacht();

        $yacht->name = $data['name'];
        $yacht->places_available = $data['places_available'];

        $yacht->save();
        return $yacht->id;
    }

    public function update(int $id, array $updateData)
    {
        try {
            $yacht = $this->yacht->findOrFail($id);

            $yacht->name = $updateData['name'] ?? $yacht->name;
            $yacht->places_available = $updateData['places_available'] ?? $yacht->places_available;

            $yacht->save();
            return $yacht;
        } catch (ModelNotFoundException) {
            throw new ModelNotFoundException('Model not found');
        } catch (Exception) {
            throw new Exception('Error update model');
        }

    }
}
