<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_user', function (Blueprint $table) {
            $table->increments('id_user');
            $table->integer('id_akun')->unsigned();
            $table->foreign('id_akun')->references('id_akun')->on('t_akun_user');
            $table->string('nama');
            $table->string('alamat');
            $table->string('email');
            $table->bigInteger('nohp');
            $table->tinyInteger('status_aktif')->default(0);
            $table->integer('create_by')->nullable();
            $table->integer('update_by')->nullable();
            $table->integer('delete_by')->nullable();
            $table->datetime('delete_at')->timestamps()->nullable();
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
        Schema::dropIfExists('m_user');
    }
}
