<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTAkunUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_akun_user', function (Blueprint $table) {
            $table->increments('id_akun');
            $table->integer('id_level_akun_user')->unsigned();
            $table->foreign('id_level_akun_user')->references('id_level_akun_user')->on('m_level_akun_user');
            $table->string('username');
            $table->string('password');
            $table->tinyInteger('status_aktif');
            $table->integer('create_by');
            $table->integer('update_by');
            $table->integer('delete_by');
            $table->datetime('delete_at')->timestamps();
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
        Schema::dropIfExists('t_akun_user');
    }
}
