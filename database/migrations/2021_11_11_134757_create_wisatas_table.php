<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWisatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wisatas', function (Blueprint $table) {
            $table->id("Id_Wisata");
            $table->string("Nama_Wisata");
            $table->text("Deskripsi")->nullable();
            $table->integer("User_id");
            $table->string("Foto")->nullable();
            $table->text("Lokasi")->nullable();
            $table->text("Kontak")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wisatas');
    }
}
