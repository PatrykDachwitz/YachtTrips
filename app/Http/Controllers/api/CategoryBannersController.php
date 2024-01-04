<?php
declare(strict_types=1);
namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\banners_category\UpdateRequest;
use App\Repository\CategoryBannersRepository;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class categoryBannersController extends Controller
{

    private $category;
    public function __construct(CategoryBannersRepository $categoryBannersRepository) {
        $this->category = $categoryBannersRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response($this->category->get());
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(Gate::denies('api.create')) abort(403);
        try {
            $id = $this->category->create($request->only([
                'name',
                'description',
                'active',
                'template_id',
            ]));
        } catch (Exception) {
            abort(500);
        }

        $response = [
            'url' => route('admin.views.show', [
                'id' => $id,
                'views' => "categoryBanners",
            ])
        ];

        return response(json_encode($response), 301);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        if(Gate::denies('api.view')) abort(403);

        return response($this->category->findOrFail($id), 200);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, int $id)
    {
        if(Gate::denies('api.update')) abort(403);

        $banner = [];

        try {
            $banner = $this->category->update($id, $request->only([
                'name',
                'description',
                'active',
                'template_id',
            ]));
        } catch (ModelNotFoundException) {
            abort(404);
        } catch (Exception) {
            abort(500);
        }

        return response($banner, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        if(Gate::denies('api.delete')) abort(403);

        if ($this->category->destroy($id)) {
            return response('success', 200);
        } else {
            abort(500);
        }
    }
}
