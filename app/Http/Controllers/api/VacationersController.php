<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\vacationers\UpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class VacationersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function updateGroup(UpdateRequest $request) {
        return response($request->only([
            'age',
            'first_name',
            'last_name',
            'book_id',
        ]), 200);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(Gate::denies('api.create')) abort(403);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if(Gate::denies('api.view')) abort(403);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if(Gate::denies('api.update')) abort(403);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if(Gate::denies('api.delete')) abort(403);
    }
}
