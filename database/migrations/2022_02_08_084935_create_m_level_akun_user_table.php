<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMLevelAkunUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_level_akun_user', function (Blueprint $table) {
            $table->increments('id_level_akun_user');
            $table->tinyInteger('level');
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
        Schema::dropIfExists('m_level_akun_user');
    }
}
