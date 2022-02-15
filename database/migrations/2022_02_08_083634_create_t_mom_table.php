<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTMomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_mom', function (Blueprint $table) {
            $table->increments('id_mom');
            $table->integer('id_jadwal_meeting')->unsigned();
            $table->foreign('id_jadwal_meeting')->references('id_jadwal_meeting')->on('m_jadwal_meeting');
            $table->text('hasil_pembahasan');
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
        Schema::dropIfExists('t_mom');
    }
}
