<?php
namespace App\Service;

use App\Models\Posting;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;

class PostingService
{
    private $folderString = "cover_postingan";
    public function __construct(private FileUploadService $uploadFile)
    {
    }

    public function createPostingan(array $input, ?UploadedFile $file)
    {
        // upload foto terlebih dahulu
        if ($file) {
            $cover = $this->uploadFile->upload($file, $this->folderString);
            $input["foto_cover"] = $cover;
        }
        $create = Auth::user()->guru->posting()->create($input);
        return $create;
    }

    public function getPostinganPublished()
    {
        return Posting::where("status_publish","published");
    }
}