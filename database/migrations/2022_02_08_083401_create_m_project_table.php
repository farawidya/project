<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_project', function (Blueprint $table) {
            $table->increments('id_project');
            $table->integer('id_m_klien')->unsigned();
            $table->foreign('id_m_klien')->references('id_m_klien')->on('m_klien');
            $table->integer('id_status_task')->unsigned();
            $table->foreign('id_status_task')->references('id_status_task')->on('m_status_task');
            $table->string('nama_project');
            $table->string('deskripsi_project');
            $table->datetime('waktu mulai');
            $table->datetime('waktu berakhir');
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
        Schema::dropIfExists('m_project');
    }
}
