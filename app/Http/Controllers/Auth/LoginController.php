<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(LoginRequest $request)
    {
        $credentials  = $request->only([
            'email',
            'password',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect(route('admin.index', [
                'any' => "dashboard"
            ]), 301);
        } else {
            return back()->withErrors([
                'email' => __('login.accountNotIsset')
            ])->onlyInput('email');
        }
    }
}
