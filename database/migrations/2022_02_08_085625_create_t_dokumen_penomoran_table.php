<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTDokumenPenomoranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_dokumen_penomoran', function (Blueprint $table) {
            $table->increments('id_dokumen');
            $table->integer('id_penomoran')->unsigned();
            $table->foreign('id_penomoran')->references('id_penomoran')->on('t_penomoran');
            $table->integer('id_log_project')->unsigned();
            $table->foreign('id_log_project')->references('id_log_project')->on('t_log_project');
            $table->integer('dokumen');
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
        Schema::dropIfExists('t_dokumen_penomoran');
    }
}
