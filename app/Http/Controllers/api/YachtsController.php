<?php
declare(strict_types=1);
namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\yachts\CreatedRequest;
use App\Http\Requests\yachts\UpdateRequest;
use App\Repository\Eloquent\YachtsRepository;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;

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

        try {
            $id = $this->yachts->create($request->only([
                'name',
                'places_available',
            ]));
        } catch (Exception) {
            return response(_('api.error_500'), 500);
        }

        return response( route('admin.yachts.show', [
            'id' => $id
        ] ), 301);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response($this->yachts->findOrFail($id), 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, int $id)
    {
        $yacht = [];

        try {
            $yacht = $this->yachts->update($id, $request->only([
                'name',
                'places_available'
            ]));
        } catch (ModelNotFoundException) {
            return response(_('api.not_found'), 404);
        } catch (Exception) {
            return response(_('api.error_500'), 500);
        }

        return response($yacht, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if ($this->yachts->destroy($id)) {
            return response('success', 200);
        } else {
            abort(500);
        }
    }
}
