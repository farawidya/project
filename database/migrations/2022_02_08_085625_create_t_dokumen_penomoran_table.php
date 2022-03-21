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
        Schema::create('m_dokumen', function (Blueprint $table) {
            $table->increments('id_dokumen');
            // $table->foreignId('id_dokumen')->constrained('t_dokumen_penomoran');
            $table->string('judul_dokumen');
            $table->string('dokumen');
            $table->tinyInteger('status_aktif')->default(1);
            $table->integer('create_by')->nullable();
            $table->integer('update_by')->nullable();
            $table->integer('delete_by')->nullable();
            $table->datetime('delete_at')->timestamps()->nullable();
            $table->timestamps();
        });

        Schema::create('t_dokumen_penomoran', function (Blueprint $table) {
            $table->increments('id_dokumen_penomoran');
            $table->integer('id_kategori_penomoran')->unsigned();
            $table->foreign('id_kategori_penomoran')->references('id_kategori_penomoran')->on('m_kategori_penomoran');
            $table->integer('id_project')->unsigned();
            $table->foreign('id_project')->references('id_project')->on('m_project');
            $table->integer('id_dokumen')->unsigned();
            //$table->foreignId('id_dokumen')->constrained('m_dokumen');
            $table->foreign('id_dokumen')->references('id_dokumen')->on('m_dokumen');
            $table->date('tanggal');
            $table->string('penomoran');
            $table->tinyInteger('status_aktif')->default(0);
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
        Schema::dropIfExists('t_dokumen_penomoran');
    }
}
