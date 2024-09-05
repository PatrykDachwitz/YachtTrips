<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Requests\orders\UpdateRequest;
use App\Http\Requests\vacationers\ManyUpdateRequest;
use App\Models\MethodPayment;
use App\Repository\Eloquent\VacationersRepository;
use App\Repository\OrdersRepository;
use App\Rules\NumberPhoneRule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\MessageBag;
use Mockery\Exception;
use function PHPUnit\Framework\isEmpty;

class OrderController extends Controller
{
    /**
     * Handle the incoming request.
     */

    private OrdersRepository $orders;
    private VacationersRepository $vacationers;
    public function __construct(OrdersRepository $orders, VacationersRepository $vacationers)
    {
        $this->orders = $orders;
        $this->vacationers = $vacationers;
    }

    public function index() {
        return view('pages.cart.index', [
            'order' => $this->orders
                ->findBySession("12"),
        ]);
    }

    public function getPersonalData() {
        return view('pages.cart.personalData', [
            'order' => $this->orders
                ->findBySession("12"),
        ]);
    }

    public function setPersonalData(UpdateRequest $request) {

        try {
            $this->orders
                ->updateBySession("12", $request->only([
                    "personal_mail",
                    "personal_phone",
                    "personal_first_name",
                    "personal_last_name",
                    "address",
                    "checked_rule",
                ]));
        } catch (\Exception) {
            return "error";
        }

        return redirect(route('cart.vacationers'));
    }

    public function setVacationers(ManyUpdateRequest $request) {
        $vacationers = $request->only([
            'id.*',
            'first_name.*',
            'last_name.*',
            'book_id.*',
        ]);

        $errorsResponse = [];

        foreach ($vacationers['id']['*'] as $key => $id) {

            try {
                $this->vacationers->update(
                    intval($id), [
                        "first_name" => $vacationers['first_name']['*'][$key],
                        "last_name" => $vacationers['last_name']['*'][$key],
                    ]
                );
            } catch (\Exception) {
                return 'errors';
            }

        }

        foreach ($vacationers['book_id']['*'] as $bookId) {
            $vacationersEmpty = $this->vacationers
                ->getEmptyByBookId(intval($bookId));

            foreach ($vacationersEmpty as $vacationerEmpty) {
                if ($vacationerEmpty->first_name === "") {
                    $errorsResponse["first_name.{$vacationerEmpty->id}"] = __('validation.required', [
                        'attribute' => "first_name.{$vacationerEmpty->id}"
                    ]);
                }

                if ($vacationerEmpty->last_name === "") {
                    $errorsResponse["last_name.{$vacationerEmpty->id}"] = __('validation.required', [
                        'attribute' => "last_name.{$vacationerEmpty->id}"
                    ]);
                }
            }
        }

        if ($errorsResponse !== []) {
            return redirect(route("cart.vacationers"))->withErrors(new MessageBag($errorsResponse));
        } else {
            return redirect(route('cart.payments'));
        }
    }

    public function getVacationers() {
        return view('pages.cart.vacationers', [
            'order' => $this->orders
                ->findBySession("12"),
        ]);
    }

    public function getPayments() {
        return view('pages.cart.payments', [
            'order' => $this->orders
                ->findBySession("12"),
            'payments' => MethodPayment::all()
        ]);
    }


}
