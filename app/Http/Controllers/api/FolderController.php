<?php
declare(strict_types=1);
namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\folders\CreateRequest;
use App\Http\Requests\folders\UpdateRequest;
use App\Repository\FoldersRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class FolderController extends Controller
{

    private $folder;

    public function __construct(FoldersRepository $folder)
    {
        $this->folder = $folder;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->folder
            ->get();
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request)
    {
        if (Gate::denies('api.create')) abort(403);

        return $this->folder->create($request->only([
        'name',
        'parent',
        ]));

    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        if (Gate::denies('api.view')) abort(403);

        return response([
            'content' => $this->folder->findOrFail($id),
            'folders' => $this->folder->findByParentId($id),
        ]);

    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, int $id)
    {
        if (Gate::denies('api.update')) abort(403);

        return $this->folder->update($id, $request->only([
            'parent',
            'name',
        ]));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (Gate::denies('api.delete')) abort(403);
    }
}
