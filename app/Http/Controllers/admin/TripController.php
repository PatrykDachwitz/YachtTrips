<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Repository\BannersRepository;
use App\Repository\CategoryBannersRepository;
use App\Repository\TripsRepository;
use Illuminate\Http\Request;

class TripController extends Controller
{
    private $trip;
    public function __construct(TripsRepository $tripsRepository) {
        $this->trip = $tripsRepository;
    }

    public function show(int $id) {
        return view('admin.trips.show', [
            "id" => $id,
            'trips' => $this->trip->get()
        ]);
    }

    public function edit(int $id) {
        return view('admin.trips.edit', [
            "id" => $id,
            'trips' => $this->trip->get()
        ]);
    }

    public function index(){
        return view('admin.trips.list');
    }

    public function create() {
        return view('admin.trips.create', [
            'trips' => $this->trip->get()
        ]);
    }
}
