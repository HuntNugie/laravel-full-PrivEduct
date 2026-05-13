<?php

namespace App\Service;
use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Hash;

class GuruService
{
    public function register(array $input, ?UploadedFile $file): User
    {
        // tambahkan dulu ke user
        $user = User::create([
            "role" => "guru",
            "name" => $input["name"],
            "email" => $input["email"],
            "password" => Hash::make($input["password"]),
            ]);
            
        // upload file
        if ($file) {
            $cv = $file->store("cv_guru", "public");
            $input["cv"] = $cv;
        }
        // setelah itu tambahkan yang relasi nya 
        $user->guru()->create([
            "no_hp" => $input["no_hp"],
            "jenis_kelamin" => $input["jk"],
            "alamat" => $input["alamat"],
            "lulusan" => $input["lulusan"],
            "cv" => $input["cv"]
        ]);

        return $user;

    }
}

?>