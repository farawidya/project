<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevlopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devlop', function (Blueprint $table) {
            $table->id('devlop_id');
            $table->text('Nama');
            $table->string('Jenis_kelamin');
            $table->string('no_telp');
            $table->string('gmail');
            $table->timestamps();
        });
          /** gunakan script berikut jika ingin menambah data otomatis */
          $categories = ['Doing', 'Kesehatan', 'Olahraga'];
          for ($a = 1; $a <= 15; $a++)
              DB::table('tb_post')->insert([
                  'post_title' => 'Judul Artikel ' . $a,
                  'category' => $categories[array_rand($categories)],
              ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('devlop');
    }
}
