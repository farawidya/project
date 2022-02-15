<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTLogProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_log_project', function (Blueprint $table) {
            $table->increments('id_log_project');
            $table->integer('id_project')->unsigned();
            $table->foreign('id_project')->references('id_project')->on('m_project');
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id_user')->on('m_user');
            $table->integer('task');
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
        Schema::dropIfExists('t_log_project');
    }
}
