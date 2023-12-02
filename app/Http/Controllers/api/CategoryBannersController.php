<?php
declare(strict_types=1);
namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\banners_category\UpdateRequest;
use App\Repository\CategoryBannersRepository;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

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

        return response( route('admin.banners.category.show', [
            'id' => $id
        ] ), 301);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        return response($this->category->findOrFail($id), 200);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, int $id)
    {
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
        if ($this->category->destroy($id)) {
            return response('success', 200);
        } else {
            abort(500);
        }
    }
}
