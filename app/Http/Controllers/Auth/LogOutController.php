<?php
declare(strict_types=1);
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LogOutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        \auth('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return response( json_encode([
            'url' => route('admin.login')
        ]),301);
    }
}
