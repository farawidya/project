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
        Schema::create('devlops', function (Blueprint $table) {
            $table->id('devlop_id');
            $table->text('nama');
            $table->string('jenis_kelamin');
            $table->string('no_telp');
            $table->string('gmail');
            $table->string('username');
            $table->string('password');
            $table->timestamps();
        });
          /** gunakan script berikut jika ingin menambah data otomatis */
          $categories = ['Laki-Laki', 'Perempuan'];
          for ($a = 1; $a <= 15; $a++)
              DB::table('devlops')->insert([
                  'nama' => 'Nama ' . $a,
                  'jenis_kelamin' => $categories[array_rand($categories)],
                  'no_telp' => '1919119 ' . $a,
                  'gmail' => 'example@gmail.com ' . $a,
                  'username' => 'username ' . $a,
                  'password' => 'password ' . $a,
              ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('devlops');
    }
}
