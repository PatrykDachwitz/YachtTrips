<?php
declare(strict_types=1);
namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pages\CreateRequest;
use App\Http\Requests\Pages\UpdateRequest;
use App\Repository\PagesRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;

class PagesController extends Controller
{
    private $pages;
    public function __construct(PagesRepository $pagesRepository)
    {
        $this->pages = $pagesRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response($this->pages->get(), 200);
    }

    private function getDataToCreate(Request $request) {
        $data = $request->only([
            'name',
            'description',
            'slug',
            'active',
        ]);

        if (is_null($data['slug']) || !isset($data['slug'])) {
            $data['slug'] = Str::slug($data['name']);
        }

        return $data;
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request)
    {
        if (Gate::denies('api.create')) abort(403);

        $page = $this->pages->create($this->getDataToCreate($request));

        $response = [
            'url' => route('admin.views.edit', [
                'views' => 'pages',
                'id' => $page->id
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

        return response($this->pages->findOrFail($id), 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, int $id)
    {
        if (Gate::denies('api.update')) abort(403);

        return response($this->pages->update($id, $request->only([
            'name',
            'description',
            'slug',
            'active',
        ])), 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        if (Gate::denies('api.delete')) abort(403);
        return response($this->pages->destroy($id), 200);
    }
}
