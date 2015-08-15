<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {

            $table->increments('id');
            $table->timestamps();

            $table->unsignedInteger('author_id');
            $table->foreign('author_id')->references('id')->on('users');

            $table->unsignedInteger('editor_id')->nullable();
            $table->foreign('editor_id')->references('id')->on('users');

            $table->text('title');
            $table->longText('content');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('articles');
    }
}
