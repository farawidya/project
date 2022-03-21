<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_task', function (Blueprint $table) {
            $table->increments('id_task');
            $table->integer('id_log_project')->unsigned();
            $table->foreign('id_log_project')->references('id_log_project')->on('t_log_project');
            $table->integer('id_status_task')->unsigned();
            $table->foreign('id_status_task')->references('id_status_task')->on('m_status_task');
            $table->string('task');
            $table->datetime('due_date');
            $table->string('deskripsi');
            $table->tinyInteger('status_aktif')->default(1);
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
        Schema::dropIfExists('m_task');
    }
}
