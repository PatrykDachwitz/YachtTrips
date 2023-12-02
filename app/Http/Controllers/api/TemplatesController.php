<?php
declare(strict_types=1);
namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\templates\CreatedRequest;
use App\Http\Requests\templates\UpdateRequest;
use App\Repository\TemplatesRepository;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;

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
    public function show(string $id)
    {
        return response($this->templates->findOrFail($id), 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, int $id)
    {
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
        if ($this->templates->destroy($id)) {
            return response('success', 200);
        } else {
            abort(500);
        }
    }
}
