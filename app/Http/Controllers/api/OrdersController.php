<?php
declare(strict_types=1);
namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\orders\CreateRequest;
use App\Http\Requests\orders\UpdateRequest;
use App\Http\Requests\orders\UpdateStatusRequest;
use App\Repository\OrdersRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Session;

class OrdersController extends Controller
{
    private $orders;

    public function __construct(OrdersRepository $orders)
    {
        $this->orders = $orders;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response($this->orders->get(), 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request)
    {
        if(Gate::denies('api.create')) abort(403);

        $order = $this->orders->create($request->only([
            "personal_mail",
            "personal_phone",
            "personal_first_name",
            "personal_last_name",
            'address',
            'correspondenceAddress',
            'price',
            'checked_rule',
        ]));

        $response = [
            'url' => route('admin.views.edit', [
                'id' => $order->id,
                'views' => 'orders',
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

        return response($this->orders->finxdOrFail($id), 200);
    }
    public function showBySession(string $sessionId)
    {
        if($sessionId !== \session()->getId()) {
            abort(403);
        }

        return $this->orders->findBySession($sessionId);
    }
    public function updateBySession(UpdateRequest $updateRequest, string $sessionId)
    {

        if($sessionId !== \session()->getId()) {
            abort(403);
        }

        if ($this->orders->updateBySession($sessionId, $updateRequest->only([
            'personal_mail',
            'personal_phone',
            'personal_first_name',
            'personal_last_name',
            'address',
            'correspondenceAddress',
            'checked_rule',
        ]))) {
            return response($this->orders->findBySession($sessionId), 200);
        } else {
            abort(500);
        }


        return $this->orders->findBySession($sessionId);
    }
    public function updateStatusBySession(UpdateStatusRequest $updateRequest, string $sessionId)
    {

        if($sessionId !== \session()->getId()) {
            abort(403);
        }

        return $this->orders->updateBySession($sessionId, $updateRequest->only([
            'status_id',
        ]));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, int $id)
    {
        if(Gate::denies('api.update')) abort(403);

        return response($this->orders->update($id, $request->only([
            "personal_mail",
            "personal_phone",
            "personal_first_name",
            "personal_last_name",
            'address',
            'checked_rule',
            'correspondenceAddress',
            'price',
        ])), 200);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        if(Gate::denies('api.delete')) abort(403);

        return response($this->orders->destroy($id), 200);
    }
}
