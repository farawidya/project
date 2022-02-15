<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Mom extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mom', function (Blueprint $table) {
            $table->id('mom_id');
            $table->string('nama_project');
            $table->string('tanggal');
            $table->string('tempat');
            $table->string('agenda');
            $table->string('hasil');
            $table->timestamps();
        });

                /** gunakan script berikut jika ingin menambah data otomatis */
                // $categories = ['Laki-Laki', 'Perempuan'];
                for ($a = 1; $a <= 15; $a++)
                    DB::table('Mom')->insert([
                        'nama_project' => 'Nama Project ' . $a,
                        'tanggal' => '2/22/2022 ' ,
                        'tempat' => 'mars ' ,
                        'agenda' => 'agenda ' . $a,
                        'hasil' => 'hasil pembahasan ' . $a,
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
        Schema::dropIfExists('mom');
    }
}
