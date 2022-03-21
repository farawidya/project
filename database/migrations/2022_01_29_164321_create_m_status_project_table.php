<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMStatusProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_status_project', function (Blueprint $table) {
            $table->increments('id_status_project');
            $table->string('status_project');
            $table->timestamps();
        });

        DB::table('m_status_project')->insert([[
            'status_project' => 'Masuk',
        ], [
            'status_project' => 'Pending',
        ], [
            'status_project' => 'Berjalan',
        ], [
            'status_project' => 'Cancel',
        ], [
            'status_project' => 'Selesai',
        ],]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_status_project');
    }
}