<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migration untuk membuat tabel communities.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('communities', function (Blueprint $table) {
            $table->id(); // Kolom ID sebagai primary key
            $table->string('name', 255); // Nama komunitas
            $table->text('description'); // Deskripsi komunitas
            $table->string('slug', 255)->unique(); // Slug untuk URL
            $table->timestamps(); // Kolom created_at dan updated_at otomatis
        });
    }

    /**
     * Reverse the migration (menghapus tabel).
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('communities');
    }
};
