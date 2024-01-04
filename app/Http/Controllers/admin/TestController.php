<?php
declare(strict_types=1);
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Repository\CategoryBannersRepository;
use App\Repository\OceansRepository;
use App\Repository\TemplatesRepository;
use App\Repository\YachtsRepository;
use Illuminate\Http\Request;

class TestController extends Controller
{
    private $categoryBanners, $templates, $yachts, $oceans;
    public function __construct(CategoryBannersRepository $categoryBannersRepository, TemplatesRepository $templatesRepository, YachtsRepository $yachtsRepository, OceansRepository $oceansRepository)
    {
        $this->categoryBanners = $categoryBannersRepository;
        $this->templates = $templatesRepository;
        $this->yachts = $yachtsRepository;
        $this->oceans = $oceansRepository;
    }

    private function checkRequiredAdditionalSources(string $views) {
        $result = [];
        switch ($views) {
            case "banners":
                $result['categoryBanners'] = $this->categoryBanners->get();
                break;
            case "categoryBanners":
                $result['templates'] = $this->templates->get();
                break;
            case "trips":
                $result['yachts'] = $this->yachts->get();
                $result['oceans'] = $this->oceans->get();
                $result['templates'] = $this->templates->get();
                break;

        }

        return $result;
    }

    private function searchExceptionViewsName(string $views) {
        switch ($views) {
            case "categoryBanners":
                $views = "banners.category";
                break;
        }

        return $views;
    }
    private function getFinallyVarOnViews(array $primarySources, string $views) {
        $additionalSource = $this->checkRequiredAdditionalSources($views);

        $primarySources['views'] = $this->searchExceptionViewsName($primarySources['views']);

        return array_merge($primarySources, $additionalSource);
    }
    /**
     * Display a listing of the resource.
     */
    public function index(string $views)
    {
        $finallyResponse = $this->getFinallyVarOnViews([
            'views' => $views
        ], $views);

        return view('admin.views.index', $finallyResponse);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $views)
    {
        $finallyResponse = $this->getFinallyVarOnViews([
            'views' => $views
        ], $views);

        return view('admin.views.create', $finallyResponse);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $views, int $id)
    {
        $finallyResponse = $this->getFinallyVarOnViews([
            'views' => $views,
            'id' => $id,
        ], $views);

        return view('admin.views.show', $finallyResponse);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $views, string $id)
    {
        $finallyResponse = $this->getFinallyVarOnViews([
            'views' => $views,
            'id' => $id,
        ], $views);

        return view('admin.views.edit', $finallyResponse);
    }
}
