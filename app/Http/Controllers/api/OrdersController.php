<?php
declare(strict_types=1);
namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\orders\updateRequest;
use App\Repository\OrdersRepository;
use Illuminate\Http\Request;
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
    public function showBySession(string $sessionId)
    {
        /*$sessionCorrect = Session::getId();

        if($sessionId !== $sessionCorrect) {
            abort(425);
        }*/

        return $this->orders->findBySession($sessionId);
    }
    public function updateBySession(UpdateRequest $updateRequest, string $sessionId)
    {
        if ($this->orders->updateBySession($sessionId, $updateRequest->only([
            'personal_mail',
            'personal_phone',
            'personal_first_name',
            'personal_last_name',
            'address',
            'correspondenceAddress',
        ]))) {
            return response($this->orders->findBySession($sessionId), 200);
        } else {
            abort(500);
        }

       /* $sessionCorrect = Session::getId();

        if($sessionId !== $sessionCorrect) {
            abort(425);
        }*/

        return $this->orders->findBySession($sessionId);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(updateRequest $request, int $id)
    {
//        "trip_id" => ['required', 'min:1', "integer"],
//            "number_room" => ['required', 'min:1', "integer"],
//            "count_adult" => ['required', 'min:1', "integer"],
//            "count_kids" => ["integer"],
//            "double_beds" => ['required', "integer"],
//            "single_beds" => ['required', "integer"],
//            "kids_beds" => ["integer"],
//            "price" => ['required', 'min:1', "integer"],

    }

    public function updateBySessionId(updateRequest $request, string $sessionId) {


        return response(json_encode($sessionId));
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
