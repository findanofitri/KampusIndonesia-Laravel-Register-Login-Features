<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserdetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userdetail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unsigned();
            $table->string('jenis_kelamin', 50);
            $table->date('tgl_lahir');
            $table->string('alamat', 200);
            $table->string('no_telepon', 15);
            $table->string('sekolah_universitas', 50);
            $table->string('jurusan', 100);
            $table->string('foto', 100);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('added_at')->nullable();

            $table->foreign('id_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userdetail');
    }
}
