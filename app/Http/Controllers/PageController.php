<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Exception;
class PageController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(string $id)
    {
        $pages = new Page();

        try {
            $searchPage = $pages->findOrFail($id);
        } catch (ModelNotFoundException) {
            abort(404);
        } catch (Exception) {
            abort(404);
        }
        return view('pages', [
            'content' => $searchPage
        ]);
    }
}
