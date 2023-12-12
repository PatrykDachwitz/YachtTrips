<?php
declare(strict_types=1);
namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\MethodPayment;
use Illuminate\Http\Request;

class MethodPaymentsController extends Controller
{
    private $methodPayment;
    public function __construct(MethodPayment $methodPayment)
    {
        $this->methodPayment = $methodPayment;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->methodPayment
            ->get();
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
        return $this->methodPayment
            ->find($id);
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
