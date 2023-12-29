<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Repository\PagesRepository;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Exception;
class PageController extends Controller
{
    private $pages;
    public function __construct(PagesRepository $pages)
    {
        $this->pages = $pages;
    }

    /**
     * Handle the incoming request.
     */
    public function __invoke(string $slug)
    {
        $pages = $this->pages
        ->getBySlug($slug);

        if (is_null($pages)) abort(404);

        return view('pages', [
            'content' => $pages
        ]);
    }
}
