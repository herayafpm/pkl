<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenggunasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penggunas', function (Blueprint $table) {
            $table->id();
            $table->string('desa', 50)->unique();
            $table->string('kecamatan', 50);
            $table->string('nama', 50);
            $table->string('nik', 16)->unique();
            $table->string('email', 50)->unique();
            $table->string('no_telp', 13);
            $table->text('alamat');
            $table->integer('status')->default('0');
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
        Schema::dropIfExists('penggunas');
    }
}
