<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNomorTable extends Migration
{
   
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nomor', function (Blueprint $table) {
            $table->id('nomor_id');
            $table->string('dokumen');
            $table->string('penomoran');
            $table->string('kategori');
            $table->timestamps();
        });

        /** gunakan script berikut jika ingin menambah data otomatis */
        $categories = ['Kategori 1', 'Kategori 2', 'Kategori 3'];
        for ($a = 1; $a <= 15; $a++)
            DB::table('nomor')->insert([
                'dokumen' => 'dokumen ' . $a,
                'penomoran' => 'penomoran ' . $a,
                'kategori' => $categories[array_rand($categories)],
                // 'category' => $categories[array_rand($categories)],
            ]);
}



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nomor');
    }
}
