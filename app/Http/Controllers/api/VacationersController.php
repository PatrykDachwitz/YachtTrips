<?php
declare(strict_types=1);
namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\vacationers\CreateRequest;
use App\Http\Requests\vacationers\UpdateRequest;
use App\Repository\BooksRepository;
use App\Repository\OrdersRepository;
use App\Repository\VacationersRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class VacationersController extends Controller
{
    private $vacationers, $books;
    public function __construct(VacationersRepository $vacationersRepository, BooksRepository $booksRepository)
    {
        $this->books = $booksRepository;
        $this->vacationers = $vacationersRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->vacationers->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request)
    {
        if(Gate::denies('api.update')) {
            $order = ($this->books->findOrFail($request->input('book_id')))->order;

            if (session()->getId() !== $order->session_id) {
                abort(403);
            }
        }

        $vacationer = $this->vacationers->create($request->only([
            'age',
            'first_name',
            'last_name',
            'book_id'
        ]));

        $response = [
          'url' => route('admin.views.edit', [
              'views' => 'vacationers',
              'id' => $vacationer->id,
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

        return response($this->vacationers->findOrFail($id), 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, int $id)
    {
        if(Gate::denies('api.update')) {
            $order = ($this->books->findOrFail($request->input('book_id')))->order;

            if (session()->getId() !== $order->session_id) {
                abort(403);
            }
        }

        $vacationer = $this->vacationers->update($id, $request->only([
            'age',
            'first_name',
            'last_name',
            'book_id'
        ]));

        return response($vacationer, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        if(Gate::denies('api.delete')) abort(403);

        return response($this->vacationers->destroy($id), 200);
    }
}
