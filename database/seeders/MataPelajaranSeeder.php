<?php

namespace Database\Seeders;

use App\Models\MataPelajaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MataPelajaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mapel = [
            "Matematika",
            "Bahasa Indonesia",
            "Bahasa Inggris",
            "Ilmu Pengetahuan Alam",
            "Ilmu Pengetahuan Sosial",
            "Pendidikan Pancasila dan Kewarganegaraan",
            "Pendidikan Agama",
            "Seni Budaya",
            "Pendidikan Jasmani, Olahraga, dan Kesehatan",
            "programmer"
        ];
        foreach($mapel as $m){
            MataPelajaran::create([
                "nama_mapel" => $m,
                "slug" => str()->slug($m)
            ]);
        }
    }
}
