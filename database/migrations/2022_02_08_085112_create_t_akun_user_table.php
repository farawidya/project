<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTAkunUserTable extends Migration
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
            $table->string('level');
            $table->tinyInteger('status_aktif')->default(1);
            $table->integer('create_by')->nullable();
            $table->integer('update_by')->nullable();
            $table->integer('delete_by')->nullable();
            $table->datetime('delete_at')->timestamps()->nullable();
            $table->timestamps();
        });
        Schema::create('t_akun_user', function (Blueprint $table) {
            $table->increments('id_akun');
            $table->integer('id_level_akun_user')->unsigned();
            $table->foreign('id_level_akun_user')->references('id_level_akun_user')->on('m_level_akun_user');
            $table->string('username');
            $table->string('password');
            $table->tinyInteger('status_aktif')->default(1);
            $table->integer('create_by')->nullable();
            $table->integer('update_by')->nullable();
            $table->integer('delete_by')->nullable();
            $table->datetime('delete_at')->timestamps()->nullable();
            $table->timestamps();
        });

        DB::table('m_level_akun_user')->insert([[
            'level' => 'Project Manager',
        ], [
            'level' => 'Admin',
        ], [
            'level' => 'Lead Analyst',
        ], [
            'level' => 'Lead Design',
        ], [
            'level' => 'Lead Developer',
        ], [
            'level' => 'Analyst',
        ], [
            'level' => 'Marketing',
        ], [
            'level' => 'Developer',
        ], [
            'level' => 'Design',
        ],]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_akun_user');
    }
}