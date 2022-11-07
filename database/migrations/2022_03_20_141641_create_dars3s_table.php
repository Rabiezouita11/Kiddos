<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDars3sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dars3s', function (Blueprint $table) {
            $table->id();
            $table->string('resultatdars3')->nullable();
            $table->string('dars3_1')->nullable();
            $table->string('dars3_2')->nullable();
            $table->string('dars3_3')->nullable();
            $table->string('dars3_4')->nullable();
            $table->string('dars3_5')->nullable();
            $table->string('dars3_6')->nullable();
            $table->string('dars3_7')->nullable();
            $table->string('dars3_8')->nullable();
            $table->string('dars3_9')->nullable();
            $table->string('dars3_10')->nullable();
            $table->string('dars3_11')->nullable();
            $table->string('dars3_12')->nullable();
            $table->string('dars3_13')->nullable();
            $table->string('dars3_14')->nullable();
            $table->string('dars3_15')->nullable();
            $table->string('dars3_16')->nullable();
            $table->string('dars3_17')->nullable();
            $table->string('dars3_18')->nullable();
            $table->string('dars3_19')->nullable();
            $table->string('dars3_20')->nullable();
            $table->string('dars3_21')->nullable();
            $table->string('dars3_22')->nullable();
            $table->string('dars3_23')->nullable();
            $table->string('dars3_24')->nullable();
            $table->string('dars3_25')->nullable();
            $table->string('dars3_26')->nullable();
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
        Schema::dropIfExists('dars3s');
    }
}
