<?php
declare(strict_types=1);
namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Rooms\CreateRequest;
use App\Http\Requests\Rooms\UpdateRequest;
use App\Repository\RoomsRepository;
use Illuminate\Support\Facades\Gate;

class RoomsController extends Controller
{
    private $rooms;
    public function __construct(RoomsRepository $rooms)
    {
        $this->rooms = $rooms;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return rescue($this->rooms->get(), 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request)
    {
        if (Gate::denies('api.create')) abort(403);

        $room = $this->rooms->create($request->only([
            'premium',
            'double_beds',
            'single_beds',
            'kids_beds',
            'adults',
            'kids',
            'price'
        ]));

        $response = [
            'url' => route('admin.views.show', [
                'views' => 'rooms',
                'id' => $room->id,
            ])
        ];

        return response(json_encode($response), 301);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        if (Gate::denies('api.view')) abort(403);

        return response($this->rooms->findOrFail($id), 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, int $id)
    {
        if (Gate::denies('api.update')) abort(403);

        return response($this->rooms->update($id, $request->only([
            'premium',
            'double_beds',
            'single_beds',
            'kids_beds',
            'adults',
            'kids',
            'price'
        ])), 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        if (Gate::denies('api.delete')) abort(403);

        return response($this->rooms->destroy($id), 200);
    }
}
