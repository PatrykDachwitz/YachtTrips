<?php
declare(strict_types=1);
namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Repository\FilesRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use function PHPUnit\Framework\returnArgument;

class FilesController extends Controller
{

    private $files;
    /**
     * Display a listing of the resource.
     */
    public function index(FilesRepository $filesRepository)
    {
        $this->files = $filesRepository;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //if (Gate::denies('api.create')) abort(403);

        $test = [
            "test" => 1
        ];


        //dd($request->file()->store());
        $files = $request->file('files');
        foreach ($files as $file) {
            dump($file->storePublicly('/files'));
        }
            dd($files);
        $files = $request->file('file')->store();
        //$files->get()
        $file = $request->only('file');

       // $file['file'];
       // ;

        //Storage::put('/files/', $request->file('file'));

        return response(json_encode($files->getFilename()), 203);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if (Gate::denies('api.view')) abort(403);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if (Gate::denies('api.update')) abort(403);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (Gate::denies('api.delete')) abort(403);
    }
}
