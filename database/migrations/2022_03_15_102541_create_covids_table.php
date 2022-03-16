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
        Schema::create('covids', function (Blueprint $table) {
            $table->id();
            $table->mediumInteger('nik');
            $table->string('nama', 200);
            $table->text('alamat');
            $table->date('tgl_mulai_gejala');
            $table->string('gejala');
            $table->string('hasil_antigen', 10);
            $table->string('hasil_pcr', 10);
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
        Schema::dropIfExists('covids');
    }
};
