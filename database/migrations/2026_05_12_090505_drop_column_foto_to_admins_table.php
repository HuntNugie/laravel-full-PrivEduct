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
        Schema::table('admins', function (Blueprint $table) {
            $table->dropColumn('foto');
        });
        Schema::table('user_profiles', function (Blueprint $table) {
            $table->dropColumn('foto');
        });
        Schema::table("gurus",function(Blueprint $table){
            $table->dropColumn("foto");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('admins', function (Blueprint $table) {
            $table->string('foto')->nullable()->after('remember_token');
        });
        Schema::table('user_profiles', function (Blueprint $table) {
            $table->string('foto')->nullable()->after('remember_token');
        });
        Schema::table('gurus', function (Blueprint $table) {
            $table->string('foto')->nullable()->after('remember_token');
        });
    }
};
