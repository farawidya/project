<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projek', function (Blueprint $table) {
            $table->id('projek_id');
            $table->string('Nama');
            $table->string('Username');
            $table->string('Email');
            $table->timestamps();
        });

        /** gunakan script berikut jika ingin menambah data otomatis */
        $categories = ['Politik', 'Kesehatan', 'Olahraga'];
        for ($a = 1; $a <= 15; $a++)
            DB::table('projek')->insert([
                'Nama' => 'Nama' . $a,
                'Username' => 'Username' . $a,
                'Email' => 'Email' . $a,
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
        Schema::dropIfExists('projek');
    }
}
