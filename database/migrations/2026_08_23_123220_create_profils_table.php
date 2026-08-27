<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
public function up()
    {
        Schema::create('profils', function (Blueprint $table) {
            $table->id();
            $table->text('sejarah')->nullable();
            $table->text('visi')->nullable();
            $table->text('misi')->nullable(); // Boleh juga dipisah pakai array/JSON kalau misinya berupa poin-poin
            $table->string('foto_sekolah')->nullable();
            $table->timestamps();
        });
    }
};
