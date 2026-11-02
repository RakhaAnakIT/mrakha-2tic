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
        Schema::create('portofolio_1129', function (Blueprint $table) {
            $table->increments('portofolio_id');
            $table->string('tentang_saya', 1000);
            $table->string('data_pribadi', 1000);
            $table->string('pengalaman_kerja', 500);
            $table->string('keahlian', 500);
            $table->string('pendidikan', 500);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portofolio_1129');
    }
};
