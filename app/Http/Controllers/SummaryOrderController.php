<?php
declare(strict_types=1);
namespace App\Http\Controllers;


use App\Repository\BooksRepository;
use App\Repository\OrdersRepository;
use Illuminate\Http\Request;

class SummaryOrderController extends Controller
{
    private $order;
    public function __construct(OrdersRepository $order)
    {
        $this->order = $order;
    }

    /**
     * Handle the incoming request.
     */

    public function __invoke(Request $request, int $idOrder, string $numberOrder)
    {

        $selectedOrder = $this->order
            ->findOrFail($idOrder);


        if ($selectedOrder->session_id !== session()->getId() && $selectedOrder->number === $numberOrder) abort(403);

        return view('summaryOrder', [
           'order' => $selectedOrder
        ]);
    }
}
