<?php
declare(strict_types=1);
namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Users\CreateRequest;
use App\Http\Requests\Users\UpdateRequest;
use App\Repository\UsersRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    private $users;
    public function __construct(UsersRepository $repository)
    {
        $this->users = $repository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Gate::denies('isSuperAdmin')) abort(403);
        return $this->users->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    private function getDataInsert(Request $request) {
        $data = $request->only([
            'name',
            'email',
            'security',
            'super_admin',
        ]);

        if ($request->has('password')) {
            $data['password'] = Hash::make($request->input('password'));
        }

        return $data;
    }

    public function store(CreateRequest $request)
    {
        if (Gate::denies('isSuperAdmin')) abort(403);
        $data = $this->getDataInsert($request);
        $user = $this->users->create($data);

        $response = [
          'url' => route('admin.views.edit', [
              'views' => 'users',
              'id' => $user->id,
          ])
        ];

        return response(json_encode($response), 301);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        if (Gate::denies('isSuperAdmin')) abort(403);

        return response($this->users->findOrFail($id), 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, int $id)
    {
        if (Gate::denies('isSuperAdmin')) abort(403);
        $data = $this->getDataInsert($request);

        return response($this->users->update($id, $data), 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        if (Gate::denies('isSuperAdmin')) abort(403);
        return response($this->users->destroy($id), 200);
    }
}
