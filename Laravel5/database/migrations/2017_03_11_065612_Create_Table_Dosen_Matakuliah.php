<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDosenMatakuliah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Dosen_Matakuliah', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dosen_id', false, true);
            $table->integer('matakuliah_id', false, true);
            $table->foreign('dosen_id')-> references ('id')-> on('dosen')->onDelete('cascade');
            $table->foreign('matakuliah_id')-> references ('id')-> on('matakuliah')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Dosen_Matakuliah');
    }
}
