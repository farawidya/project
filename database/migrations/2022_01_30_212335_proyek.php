<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Proyek extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyek', function (Blueprint $table) {
            $table->id('proyek_id');
            $table->string('nama_project');
            $table->string('waktumulai');
            $table->string('waktuberakhir');
            $table->string('deskripsi_project');
            $table->string('nama_klien');
            $table->string('waktu');
            $table->string('status_project');
            $table->timestamps();
        });

                        /** gunakan script berikut jika ingin menambah data otomatis */
                $categories = ['Klien1', 'Klien2', 'Klien3'];
                $statusproject = ['Masuk', 'Berjalan', 'Pending', 'Selesai'];
                for ($a = 1; $a <= 15; $a++)
                    DB::table('Proyek')->insert([
                        'nama_project' => 'nama project ' . $a,
                        'deskripsi_project' => 'deskripsi project ' . $a,
                        'waktumulai' => '1/1/1 1:11 PM ' . $a,
                        'waktuberakhir' => '1/1/1 1:11 PM ' . $a,
                        'nama_klien' => $categories[array_rand($categories)],
                        'waktu' => '12:00 PM ' ,
                        'status_project' => $statusproject[array_rand($statusproject)]
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
        Schema::dropIfExists('proyek');
    }
}
