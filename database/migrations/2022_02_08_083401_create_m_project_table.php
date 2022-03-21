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
            $table->integer('id_status_project')->unsigned();
            $table->foreign('id_status_project')->references('id_status_project')->on('m_status_project');
            $table->string('nama_project');
            $table->string('deskripsi_project');
            $table->date('waktumulai');
            $table->date('waktuberakhir');
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
        Schema::dropIfExists('m_project');
    }
}
