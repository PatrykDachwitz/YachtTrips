<?php
declare(strict_types=1);
namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\books\createRequest;
use App\Repository\BooksRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Session;
use Laravel\Sanctum\Sanctum;

class BooksController extends Controller
{
    private $boking;

    public function __construct(BooksRepository $booksRepository)
    {
        $this->boking = $booksRepository;
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
    public function store(createRequest $request)
    {
        $sessionId = $request->only('session_id');
        $sessionCorrect = Session::getId();

        if(Gate::denies('create-books') && $sessionId['session_id'] !== $sessionCorrect) {
            abort(425);
        }


        $booking = $this->boking->create(
            $request->only([
                'trip_id',
                'number_room',
                'count_adult',
                'count_kids',
                'double_beds',
                'single_beds',
                'kids_beds',
                'price',
                'session_id',
            ])
        );


        return response(json_encode($booking));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
