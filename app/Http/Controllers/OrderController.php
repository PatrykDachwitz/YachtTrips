<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $sessionId = Session::getId();

        return view('koszyk2', [
            'sessionId' => $sessionId
        ]);
    }
}
