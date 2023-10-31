<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\oceans\CreatedRequest;
use App\Http\Requests\oceans\UpdateRequest;
use App\Repository\OceansRepository;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;

class OceansController extends Controller
{
    private $ocean;

    public function __Construct(OceansRepository $oceansRepository) {
        $this->ocean = $oceansRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response($this->ocean->get() ?? [], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        abort(404);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatedRequest $request)
    {

        try {
            $id = $this->ocean->create($request->only([
                'name'
            ]));
        } catch (Exception) {
            return response(_('api.error_500'), 500);
        }

        return response( route('admin.oceans.show', [
            'id' => $id
        ] ), 301);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response($this->ocean->findOrFail($id), 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return response($this->ocean->findOrFail($id), 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, int $id)
    {
        $ocean = [];

        try {
            $ocean = $this->ocean->update($id, $request->only([
                'name',
            ]));
        } catch (ModelNotFoundException) {
            return response(_('api.not_found'), 404);
        } catch (Exception) {
            return response(_('api.error_500'), 500);
        }

        return response($ocean, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if ($this->ocean->destroy($id)) {
            return response('success', 200);
        } else {
            abort(500);
        }
    }
}
