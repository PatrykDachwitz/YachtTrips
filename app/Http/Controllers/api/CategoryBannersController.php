<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Repository\CategoryBannersRepository;
use Illuminate\Http\Request;

class categoryBannersController extends Controller
{

    private $category;
    public function __Construct(CategoryBannersRepository $categoryBannersRepository) {
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
        //
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
        //
    }
}
