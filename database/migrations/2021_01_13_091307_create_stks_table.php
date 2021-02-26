<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pengirim');
            $table->string('fungsi_jabatan');
            $table->string('jenis');
            $table->string('perihal');
            $table->timestamps();
        });
        DB::statement('ALTER TABLE surat_keluars CHANGE id id INT(3) ZEROFILL NOT NULL AUTO_INCREMENT');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stks');
    }
}
