<?php
declare(strict_types=1);
namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\oceans\CreatedRequest;
use App\Http\Requests\oceans\UpdateRequest;
use App\Models\User;
use App\Repository\OceansRepository;
use Illuminate\Support\Facades\Gate;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;
use Illuminate\Support\Facades\Auth;

class OceansController extends Controller
{
    private $ocean;

    public function __construct(OceansRepository $oceansRepository) {
        $this->ocean = $oceansRepository;
        $user = User::find(1);
        Auth::login($user);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response($this->ocean->get() ?? [], 200);
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
            abort(500);
        }

        return response( route('admin.oceans.show', [
            'id' => $id
        ] ), 301);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        return response($this->ocean->findOrFail($id), 200);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, int $id)
    {
        if (Gate::denies('oceans.update')) abort(403);
        $ocean = [];

        try {
            $ocean = $this->ocean->update($id, $request->only([
                'name',
            ]));
        } catch (ModelNotFoundException) {
            abort(404);
        } catch (Exception) {
            abort(500);
        }

        return response($ocean, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        if ($this->ocean->destroy($id)) {
            return response('success', 200);
        } else {
            abort(500);
        }
    }
}
