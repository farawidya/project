<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatedMKategoriPenomoranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_kategori_penomoran', function (Blueprint $table) {
            $table->increments('id_kategori_penomoran');
            $table->string('kategori');
            $table->string('kode');
            $table->tinyInteger('status_aktif')->default(1);
            $table->integer('create_by')->nullable();
            $table->integer('update_by')->nullable();
            $table->integer('delete_by')->nullable();
            $table->datetime('delete_at')->timestamps()->nullable();
            $table->timestamps();
        });

        DB::table('m_kategori_penomoran')->insert([[
            'kategori' => 'Penawaran',
            'kode' => 'PN',
        ], [
            'kategori' => 'Penagihan',
            'kode' => 'TG',
        ], [
            'kategori' => 'Invoice',
            'kode' => 'INV',
        ], [
            'kategori' => 'Kontrak',
            'kode' => 'SPK',
        ], [
            'kategori' => 'MOU',
            'kode' => 'MOU',
        ], [
            'kategori' => 'Fitur',
            'kode' => 'FTR',
        ], [
            'kategori' => 'Flowchart',
            'kode' => 'FW',
        ],]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_kategori_penomoran');
    }
}
