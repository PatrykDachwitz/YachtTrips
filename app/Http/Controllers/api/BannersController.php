<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Repository\Eloquent\BannersRepository;
use Illuminate\Http\Request;
use Mockery\Exception;

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
        return response($this->banners->getAll() ?? [], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->banners->destroy($id);
    }
}
