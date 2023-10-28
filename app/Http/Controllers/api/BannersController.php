<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\banners\UpdateRequest;
use App\Models\Banner;
use App\Repository\BannersRepository;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Exception;

class BannersController extends Controller
{
    private $banners;

    public function __Construct(BannersRepository $bannersRepository) {
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
     * Show the form for creating a new resource.
     */
    public function create()
    {
        abort(404);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response($this->banners->findOrFail($id), 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {


        //dd('test');
        if ($this->banners->destroy($id)) {
            return response('success', 200);
        } else {
            abort(500);
        }

        //return response($this->banners->destroy($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {
        return response("git");
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
