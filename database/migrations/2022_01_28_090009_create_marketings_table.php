<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarketingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Marketings', function (Blueprint $table) {
            $table->id('marketing_id');
            $table->text('Nama');
            $table->string('alamat');
            $table->string('no_telp');
            $table->string('gmail');
            $table->string('username');
            $table->string('password');
            $table->timestamps();
        });

        /** gunakan script berikut jika ingin menambah data otomatis */
        // $categories = ['Laki-Laki', 'Perempuan'];
        for ($a = 1; $a <= 15; $a++)
            DB::table('Marketings')->insert([
                'Nama' => 'Nama ' . $a,
                'alamat' => 'pluto ' . $a,
                'no_telp' => '12121212' . $a,
                'gmail' => 'example@gmail.com ' ,
                'username' => 'username ' . $a,
                'password' => '**** ' 
            ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Marketings');
    }
}