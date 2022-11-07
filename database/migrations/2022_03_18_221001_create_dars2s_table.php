<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDars2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dars2s', function (Blueprint $table) {
            $table->id();
            $table->string('resultatdars2')->nullable();
            $table->string('dars2_1')->nullable();
            $table->string('dars2_2')->nullable();
            $table->string('dars2_3')->nullable();
            $table->string('dars2_4')->nullable();
            $table->string('dars2_5')->nullable();
            $table->string('dars2_6')->nullable();
            $table->string('dars2_7')->nullable();
            $table->string('dars2_8')->nullable();
            $table->string('dars2_9')->nullable();
            $table->string('dars2_10')->nullable();
            $table->string('dars2_11')->nullable();
            $table->string('dars2_12')->nullable();
            $table->string('dars2_13')->nullable();
            $table->string('dars2_14')->nullable();
            $table->string('dars2_15')->nullable();
            $table->string('dars2_16')->nullable();
            $table->string('dars2_17')->nullable();
            $table->string('dars2_18')->nullable();
            $table->string('dars2_19')->nullable();
            $table->string('dars2_20')->nullable();
            $table->string('dars2_21')->nullable();
            $table->string('dars2_22')->nullable();
            $table->string('dars2_23')->nullable();
            $table->string('dars2_24')->nullable();
            $table->string('dars2_25')->nullable();
            $table->string('dars2_26')->nullable();
            $table->string('dars2_27')->nullable();
            $table->string('dars2_28')->nullable();
            $table->string('dars2_29')->nullable();
            $table->string('dars2_30')->nullable();
            $table->string('dars2_31')->nullable();

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
        Schema::dropIfExists('dars2s');
    }
}
