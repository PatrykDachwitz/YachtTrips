<?php
declare(strict_types=1);
namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Files\CreateRequest;
use App\Http\Requests\Files\UpdateRequest;
use App\Models\Folder;
use App\Repository\FilesRepository;
use App\Repository\FoldersRepository;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use function PHPUnit\Framework\returnArgument;

class FilesController extends Controller
{

    const DEFAULT_PREVIEW_PATH = "/file_preview/jpg.png";
    const DEFAULT_PATH_PUBLIC_FOLDER = "/public";

    private $files, $folders;
    /**
     * Display a listing of the resource.
     */
    public function __construct(FilesRepository $filesRepository, FoldersRepository $foldersRepository)
    {
        $this->files = $filesRepository;
        $this->folders = $foldersRepository;
    }

    public function index(FilesRepository $filesRepository, FoldersRepository $foldersRepository)
    {

    }

    /**
     * Store a newly created resource in storage.
     */

    private function getSeparateExtensionAndFileName(string $name) {
        $separateName = explode('.', $name);
        return [
          'name' => $separateName[0],
          'extension' => $separateName[1],
        ];
    }

    private function getPreviewPath(string $extension) {
        $previewPath = self::DEFAULT_PREVIEW_PATH;

        switch ($extension) {
            case "jpg":
                $previewPath = "/file_preview/jpg.png";
                break;
            case "png":
                $previewPath = "/file_preview/png.png";
                break;
            case "webp":
                $previewPath = "/file_preview/webp.png";
                break;
            case "gif":
                $previewPath = "/file_preview/gif.png";
                break;
        }

        return $previewPath;
    }
    private function getMergeDataFile(UploadedFile $file, int $idFolder) : array {

        $folder = $this->folders->findOrFail($idFolder);
        $fileNameSeparate = $this->getSeparateExtensionAndFileName($file->getClientOriginalName());
        $previewPath = $this->getPreviewPath($fileNameSeparate['extension']);

        $fileData = [
            'name' => $fileNameSeparate['name'],
            'extension' => $fileNameSeparate['extension'],
            'path' => $folder->path,
            'author_id' => auth()->id(),
            'preview_path' => $previewPath,
            'size' => $file->getSize(),
            'mime' => $file->getClientMimeType(),
            'folder_id' => $folder->id,
        ];

        return $fileData;
    }

    private function getPathFolderAndImage(int $idFolder, UploadedFile $file) {
        $folderImage = $this->folders->findOrFail($idFolder);
        $pathFolder = self::DEFAULT_PATH_PUBLIC_FOLDER . "{$folderImage->path}";

        return [
            'path' => $pathFolder,
            'fileName' => $file->getClientOriginalName(),
            'fullPathImage' => "{$pathFolder}/{$file->getClientOriginalName()}",
        ];
    }


    private function uploadFile(UploadedFile $file, string $path, string $fileName) {
        $filePath = $file->storeAs($path, $fileName);

        return Storage::has($filePath);

    }

    public function store(CreateRequest $request)
    {
        $idFolder = intval($request->input('folder_id'));
        $image = $request->file('file');
        $imagePaths = $this->getPathFolderAndImage(
            $idFolder,
            $image
        );

        if(Storage::has($imagePaths['fullPathImage'])) {

            return response(__('api.file_exists'), 401);
        }

        if (!$this->uploadFile($image, $imagePaths['path'], $imagePaths['fileName'])) {
            return response(json_encode([
                'msg' => "file_not_upload"
            ]), 500);
        }

        $detailsAboutFile = $this->getMergeDataFile($image, $idFolder);
        $uploadImage = $this->files->create($detailsAboutFile);

        return response(json_encode($uploadImage), 200);
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
    public function update(UpdateRequest $request, int $id)
    {
        if (Gate::denies('api.update')) abort(403);

        $updateFile = $this->files->update($id, $request->only([
            'name',
            'folder_id',
        ]));


        return response($updateFile, 200);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (Gate::denies('api.delete')) abort(403);
    }
}
