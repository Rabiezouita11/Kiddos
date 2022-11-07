<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdmajsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('idmajs', function (Blueprint $table) {
            $table->id();
            $table->string('resultatidmaj')->nullable();
            $table->string('idmaj_1')->nullable();
            $table->string('idmaj_2')->nullable();
            $table->string('idmaj_3')->nullable();
            $table->string('idmaj_4')->nullable();
            $table->string('idmaj_5')->nullable();
            $table->string('idmaj_6')->nullable();
            $table->string('idmaj_7')->nullable();
            $table->string('idmaj_8')->nullable();
            $table->string('idmaj_9')->nullable();
            $table->string('idmaj_10')->nullable();
            $table->string('idmaj_11')->nullable();
            $table->string('idmaj_12')->nullable();
            $table->string('idmaj_13')->nullable();
            $table->string('idmaj_14')->nullable();
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('idmajs');
    }
}
