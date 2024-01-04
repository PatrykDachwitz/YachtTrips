<?php
declare(strict_types=1);
namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\yachts\CreatedRequest;
use App\Http\Requests\yachts\UpdateRequest;
use App\Repository\Eloquent\YachtsRepository;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;
use Illuminate\Support\Facades\Gate;

class YachtsController extends Controller
{
    private $yachts;

    public function __Construct(YachtsRepository $yachtsRepository) {
        $this->yachts = $yachtsRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response($this->yachts->get() ?? [], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatedRequest $request)
    {

        if(Gate::denies('api.create')) abort(403);

        try {
            $id = $this->yachts->create($request->only([
                'name',
                'places_available',
            ]));
        } catch (Exception) {
            abort(500);
        }

        $response = [
            'url' => route('admin.views.edit', [
                'views' => 'yachts',
                'id' => $id,
            ])
        ];

        return response($response, 301);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        if(Gate::denies('api.view')) abort(403);

        return response($this->yachts->findOrFail($id), 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, int $id)
    {
        if(Gate::denies('api.update')) abort(403);
        $yacht = [];

        try {
            $yacht = $this->yachts->update($id, $request->only([
                'name',
                'places_available'
            ]));
        } catch (ModelNotFoundException) {
            abort(404);
        } catch (Exception) {
            abort(500);
        }

        return response($yacht, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        if(Gate::denies('api.delete')) abort(403);
        if ($this->yachts->destroy($id)) {
            return response('success', 200);
        } else {
            abort(500);
        }
    }
}
