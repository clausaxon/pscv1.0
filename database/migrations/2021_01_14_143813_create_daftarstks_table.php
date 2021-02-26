<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarstksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftarstks', function (Blueprint $table) {
            $table->id();
            $table->string('nomorsurat');
            $table->string('jenissurat');
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
        Schema::dropIfExists('daftarstks');
    }
}
