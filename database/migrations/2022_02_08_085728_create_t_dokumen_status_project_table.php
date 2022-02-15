<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTDokumenStatusProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_dokumen_status_project', function (Blueprint $table) {
            $table->increments('id_dokumen_status_project');
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id_user')->on('m_user');
            $table->integer('id_log_project')->unsigned();
            $table->foreign('id_log_project')->references('id_log_project')->on('t_log_project');
            $table->integer('id_status_project')->unsigned();
            $table->foreign('id_status_project')->references('id_status_project')->on('m_status_project');
            $table->string('dokumen');
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
        Schema::dropIfExists('t_dokumen_status_project');
    }
}
