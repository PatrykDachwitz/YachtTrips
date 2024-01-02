<?php
declare(strict_types=1);
namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\templates\CreatedRequest;
use App\Http\Requests\templates\UpdateRequest;
use App\Repository\TemplatesRepository;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;
use Illuminate\Support\Facades\Gate;

class TemplatesController extends Controller
{
    private $templates;

    public function __Construct(TemplatesRepository $templatesRepository) {
        $this->templates = $templatesRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response($this->templates->get() ?? [], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatedRequest $request)
    {
        if(Gate::denies('api.create')) abort(403);
        try {
            $id = $this->templates->create($request->only([
                'name',
                'description'
            ]));
        } catch (Exception) {
            abort(500);
        }

        return response( route('admin.templates.show', [
            'id' => $id
        ] ), 301);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        if(Gate::denies('api.view')) abort(403);
        return response($this->templates->findOrFail($id), 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, int $id)
    {
        if(Gate::denies('api.update')) abort(403);
        $template = [];

        try {
            $template = $this->templates->update($id, $request->only([
                'name',
                'description'
            ]));
        } catch (ModelNotFoundException) {
            abort(404);
        } catch (Exception) {
            abort(500);
        }

        return response($template, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        if(Gate::denies('api.delete')) abort(403);
        if ($this->templates->destroy($id)) {
            return response('success', 200);
        } else {
            abort(500);
        }
    }
}
