<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTLogTaskSelesaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_log_task_selesai', function (Blueprint $table) {
            $table->increments('id_log_task_selesai');
            $table->integer('id_log_task_buat')->unsigned();
            $table->foreign('id_log_task_buat')->references('id_log_task_buat')->on('t_log_task_buat');
            $table->datetime('tanggal_selesai');
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
        Schema::dropIfExists('t_log_task_selesai');
    }
}
