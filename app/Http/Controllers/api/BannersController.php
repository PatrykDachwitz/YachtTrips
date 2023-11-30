<?php
declare(strict_types=1);
namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\banners\CreatedRequest;
use App\Http\Requests\banners\UpdateRequest;
use App\Repository\BannersRepository;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;

class BannersController extends Controller
{
    private $banners;

    public function __construct(BannersRepository $bannersRepository) {
        $this->banners = $bannersRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response($this->banners->get() ?? [], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatedRequest $request)
    {

        try {
            $id = $this->banners->create($request->only([
                'name',
                'start_at',
                'finish_at',
                'active',
                'category_banner_id',
                'description',
            ]));
        } catch (Exception) {
            return response(_('api.error_500'), 500);
        }

        return response( route('admin.banners.show', [
            'id' => $id
        ] ), 301);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        return response($this->banners->findOrFail($id), 200);
    }


    /**
     * Update the specified resource in storage.
     */

    public function update(UpdateRequest $request, int $id)
    {
        $banner = [];

        try {

            $banner = $this->banners->update($id, $request->only([
                'name',
                'start_at',
                'finish_at',
                'active',
                'category_banner_id',
                'images.*.id',
                'images.*.devices',
            ]));

        } catch (ModelNotFoundException) {
            return response(_('api.not_found'), 404);
        } catch (Exception $e) {
            return response($e->getMessage(), 500);
        }

        return response($banner, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if ($this->banners->destroy($id)) {
            return response('success', 200);
        } else {
            abort(500);
        }
    }
}
