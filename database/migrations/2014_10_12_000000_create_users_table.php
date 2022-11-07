<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('classe');
            $table->string('image')->nullable();
            $table->string('email')->unique();


            $table->string('devoir')->nullable();
            $table->string('resultatdars1')->nullable();
            $table->string('resultatdars2')->nullable();
            $table->string('resultatdars3')->nullable();
            $table->string('resultatidmaj')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('question1')->nullable();
            $table->string('question2')->nullable();
            $table->string('question3')->nullable();
            $table->string('question4')->nullable();
            $table->string('question5')->nullable();
            $table->string('question6')->nullable();
            $table->string('question7')->nullable();
            $table->string('question8')->nullable();
            $table->string('question9')->nullable();
            $table->string('question10')->nullable();
            $table->string('question11')->nullable();
            $table->string('question12')->nullable();
            $table->string('question13')->nullable();
            $table->string('question14')->nullable();
            $table->string('question15')->nullable();
            $table->string('question16')->nullable();


            $table->string('dars1')->nullable();
            $table->string('dars2')->nullable();
            $table->string('dars3')->nullable();
            $table->string('dars4')->nullable();
            $table->string('dars5')->nullable();
            $table->string('dars6')->nullable();
            $table->string('dars7')->nullable();
            $table->string('dars8')->nullable();
            $table->string('dars9')->nullable();
            $table->string('dars10')->nullable();
            $table->string('dars11')->nullable();
            $table->string('dars12')->nullable();
            $table->string('dars13')->nullable();
            $table->string('dars14')->nullable();
            $table->string('dars15')->nullable();
            $table->string('dars16')->nullable();
            $table->string('dars17')->nullable();
            $table->string('dars18')->nullable();
            $table->string('dars19')->nullable();
            $table->string('dars20')->nullable();
            $table->string('dars21')->nullable();
            $table->string('dars22')->nullable();
            $table->string('dars23')->nullable();
            $table->string('dars24')->nullable();
            $table->string('dars25')->nullable();
            $table->string('dars26')->nullable();
            $table->string('dars27')->nullable();
            $table->string('dars28')->nullable();
           
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
        Schema::dropIfExists('users');
    }
}
