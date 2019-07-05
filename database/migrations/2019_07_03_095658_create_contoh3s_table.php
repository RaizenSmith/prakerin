<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContoh3sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contoh3s', function (Blueprint $table) {
            $table->bigIncrements('id');
            // Dikasih 5 record
            $table->string('nama');
            $table->integer('nis');
            $table->string('kelas');
            $table->string('alamat');
            $table->string('jurusan');
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
        Schema::dropIfExists('contoh3s');
    }
}
