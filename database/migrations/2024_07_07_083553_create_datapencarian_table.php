<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatapencarianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datapencarian', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('datamahasiswa_id')->unsigned();
            $table->string('name', 100);
            $table->text('prodi');
            $table->string('jenis_kelamin', 10);
            $table->integer('tajwid');
            $table->integer('fashohah');
            $table->integer('adab');
            $table->integer('total');
            $table->timestamps();
        });

        Schema::table('datapencarian', function (Blueprint $table) {
            $table->foreign('datamahasiswa_id')->references('id')->on('datamahasiswa')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datapencarian');
    }
}
