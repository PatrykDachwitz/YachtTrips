<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Ocean;
use App\Models\Template;
use App\Models\Yacht;
use App\Repository\BannersRepository;
use App\Repository\CategoryBannersRepository;
use App\Repository\OceansRepository;
use App\Repository\TemplatesRepository;
use App\Repository\TripsRepository;
use App\Repository\YachtsRepository;
use Illuminate\Http\Request;

class TripController extends Controller
{
    private $trip;
    public function __construct(TripsRepository $tripsRepository) {
        $this->trip = $tripsRepository;
    }

    private function getPrimaryResources(array $basicResources) {

        $yachts = new Yacht();
        $oceans= new Ocean();
        $templates = new Template();



        return array_merge([
          'oceans' => $oceans->get(),
          'yachts' => $yachts->get(),
          'templates' => $templates->get()
        ], $basicResources);
    }

    public function show(int $id) {

        return view('admin.trips.show', $this->getPrimaryResources([
            "id" => $id,
            'trips' => $this->trip->get()
        ]));
    }

    public function edit(int $id) {
        return view('admin.trips.edit', $this->getPrimaryResources([
            "id" => $id,
            'trips' => $this->trip->get()
        ]));
    }

    public function index(){
        return view('admin.trips.list');
    }

    public function create() {
        return view('admin.trips.create', $this->getPrimaryResources([
            'trips' => $this->trip->get()
        ]));
    }
}
