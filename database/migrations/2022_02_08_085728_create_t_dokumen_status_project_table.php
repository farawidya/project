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
            $table->integer('id_log_project')->unsigned();
            $table->foreign('id_log_project')->references('id_log_project')->on('t_log_project');
            $table->integer('id_kategori_penomoran')->unsigned();
            $table->foreign('id_kategori_penomoran')->references('id_kategori_penomoran')->on('m_kategori_penomoran');
            $table->integer('id_dokumen')->unsigned();
            // $table->foreignId('id_dokumen')->constrained('m_dokumen');
            $table->foreign('id_dokumen')->references('id_dokumen')->on('m_dokumen');
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
        Schema::dropIfExists('t_dokumen_status_project');
    }
}
