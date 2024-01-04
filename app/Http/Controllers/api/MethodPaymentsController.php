<?php
declare(strict_types=1);
namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Payments\CreateRequest;
use App\Http\Requests\Payments\UpdateRequest;
use App\Repository\PaymentsRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class MethodPaymentsController extends Controller
{
    private $methodPayment;
    public function __construct(PaymentsRepository $methodPayment)
    {
        $this->methodPayment = $methodPayment;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response($this->methodPayment
            ->get(), 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request)
    {
        if(Gate::denies('api.create')) abort(403);

        $payment = $this->methodPayment->create($request->only([
            'name',
            'price',
            'type',
        ]));

        $response = [
            'url' => route('admin.views.edit', [
                'id' => $payment->id,
                'views' => 'methodPayments',
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
        return response($this->methodPayment
            ->findOrFail($id), 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, int $id)
    {
        if(Gate::denies('api.update')) abort(403);

        return response($this->methodPayment->update($id, $request->only([
            'name',
            'price',
            'type',
        ])), 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        if(Gate::denies('api.delete')) abort(403);

        return response($this->methodPayment->destroy($id), 200);
    }
}
