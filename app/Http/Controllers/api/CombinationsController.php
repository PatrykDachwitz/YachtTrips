<?php
declare(strict_types=1);
namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Combinations\StoreRequest;
use App\Repository\Eloquent\CombinationsRepository;
use Illuminate\Http\Request;

class CombinationsController extends Controller
{

    private $combination;
    public function __construct(CombinationsRepository $combination)
    {
        $this->combination = $combination;
    }


    public function store(StoreRequest $request) {

        $validatedData = $request->only([
           'id',
           'type',
           'rooms',
        ]);

        if ($validatedData['type'] === "addNewWithoutCurrent") {
            $this->combination
                ->deleteAvailableByTripId(
                intval($validatedData['id'])
            );
        }

        foreach ($validatedData['rooms'] as $data) {
            for ($i = 0; $i < intval($data['count']); $i++) {
                $this->combination
                    ->create([
                       'trips_id' => $validatedData['id'],
                       'rooms_id' => $data['id'],
                       'price' => $data['price'],
                ]);
            }
        }

    }
}
