<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('gurus', function (Blueprint $table) {
            $table->string('cv')->nullable()->after("lulusan"); // Menambahkan kolom 'cv' setelah kolom 'foto'
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending')->after('cv'); // Menambahkan kolom 'status' setelah kolom 'cv'
            $table->dropColumn("mata_pelajaran"); // Menghapus kolom 'mata_pelajaran'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('gurus', function (Blueprint $table) {
            $table->dropColumn('cv');
            $table->dropColumn('status');
            $table->string('mata_pelajaran')->nullable()->after("lulusan"); // Menambahkan kembali kolom 'mata_pelajaran' setelah kolom 'lulusan'
        });
    }
};
