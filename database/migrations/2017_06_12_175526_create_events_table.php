<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image')->default(null);
            $table->string('title', 30);
            $table->text('descricao');
            $table->integer('user_id')->unsigned;
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('localizacao', 50);
            $table->string('dataInicio');
            $table->string('dataFinal');
            $table->string('linkFacebook')->unique();
            $table->string('linkTwitter')->unique();
            $table->integer('published');
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
        Schema::dropIfExists('events');
    }
}
