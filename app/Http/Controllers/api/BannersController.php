<?php
declare(strict_types=1);
namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\banners\CreatedRequest;
use App\Http\Requests\banners\UpdateRequest;
use App\Models\Banner;
use App\Repository\BannersRepository;
use Illuminate\Support\Facades\Gate;
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
      //  if(Gate::denies('api.create')) abort(403);

       /** try {
            $banner = $this->banners->create($request->only([
                'name',
                'start_at',
                'finish_at',
                'active',
                'category_banner_id',
               // 'description',
              ///  'href',
            ]));
        } catch (Exception) {
            abort(500);
        }*/

        return response( json_encode(Banner::find(1)), 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
       // if(Gate::denies('api.view')) abort(403);

        return response($this->banners->findOrFail($id), 200);
    }


    /**
     * Update the specified resource in storage.
     */

    public function update(UpdateRequest $request, int $id)
    {
        if(Gate::denies('api.update')) abort(403);
        $banner = [];

        try {

            $banner = $this->banners->update($id, $request->only([
                'name',
                'start_at',
                'finish_at',
                'active',
                'href',
                'category_banner_id',
                'images.*.id',
                'images.*.devices',
            ]));

        } catch (ModelNotFoundException) {
            abort(404);
        } catch (Exception $e) {
            return response($e->getMessage(), 500);
        }

        return response($banner, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        if(Gate::denies('api.delete')) abort(403);

        if ($this->banners->destroy($id)) {
            return response('success', 200);
        } else {
            abort(500);
        }
    }
}
