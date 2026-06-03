<?php namespace App\Service;

use Illuminate\Http\UploadedFile;

class FileUploadService{
    public function upload(?UploadedFile $file,string $folder):string{
        return $file->store($folder,"public");
    }
}