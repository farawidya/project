<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTPenomoranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_penomoran', function (Blueprint $table) {
            $table->increments('id_penomoran');
            $table->integer('id_kategori_penomoran')->unsigned();
            $table->foreign('id_kategori_penomoran')->references('id_kategori_penomoran')->on('m_kategori_penomoran');
            $table->string('penomoran');
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
        Schema::dropIfExists('t_penomoran');
    }
}
