<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMKlienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_klien', function (Blueprint $table) {
            $table->increments('id_m_klien');
            $table->string('nama_perusahaan');
            $table->string('nama_klien');
            $table->string('bidang');
            $table->string('email');
            $table->string('no_hp');
            $table->string('alamat');
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
        Schema::dropIfExists('m_klien');
    }
}
