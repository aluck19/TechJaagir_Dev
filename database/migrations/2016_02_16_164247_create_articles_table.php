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

            //declare foreign key
            $table->integer('user_id')->unsigned(); //unsigned, refers the user_id to be positive

            $table->string('title');
            $table->text('body');
            $table->timestamps();
            $table->timestamp('published_at');

            //set foreign key
            $table  ->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade'); //cascade refer to delete all articles
                                            //associated with user when user is deleted

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
