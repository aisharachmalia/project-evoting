<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kandidats', function (Blueprint $table) {
            $table->id();
            $table->string('nama_calon');
            $table->string('image');
            $table->string('visi');
            $table->string('misi');
            $table->foreignId('id_periode')->constrained('voting_periodes')->onDelete('cascade');
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
        Schema::dropIfExists('kandidats');
    }
};
