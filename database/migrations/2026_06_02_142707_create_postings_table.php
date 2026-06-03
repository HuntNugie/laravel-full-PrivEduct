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
        Schema::create('postings', function (Blueprint $table) {
            $table->id();
            $table->foreignId("guru_id")->constrained("gurus")->cascadeOnDelete();
            $table->string("foto_cover")->nullable();
            $table->text("caption")->nullable();
            $table->decimal("tarif",10,2);
            $table->json("metode_belajar");
            $table->text("pengalaman")->nullable();
            $table->enum("status_publish",["published","not_publish"])->default("not_publish");
            $table->enum("status_review",["accepted","rejected","pending"])->default("pending");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postings');
    }
};
