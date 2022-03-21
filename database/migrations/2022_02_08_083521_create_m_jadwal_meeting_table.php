<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMJadwalMeetingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_jadwal_meeting', function (Blueprint $table) {
            $table->increments('id_jadwal_meeting');
            $table->integer('id_project')->unsigned();
            $table->foreign('id_project')->references('id_project')->on('m_project');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('tempat');
            $table->string('agenda');
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
        Schema::dropIfExists('m_jadwal_meeting');
    }
}
