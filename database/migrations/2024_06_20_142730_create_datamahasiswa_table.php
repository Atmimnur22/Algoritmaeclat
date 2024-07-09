<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatamahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datamahasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->text('prodi');
            $table->string('jenis_kelamin', 10);
            $table->integer('tajwid');
            $table->integer('fashohah');
            $table->integer('adab');
            $table->integer('total');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datamahasiswa');
    }
}
