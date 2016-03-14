<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJaagirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jaagirs', function (Blueprint $table) {
            $table->increments('id');

            //declare foreign key
            $table->integer('user_id')->unsigned(); //unsigned, refers the user_id to be positive
            //$table->integer('company_id')->unsigned();

            $table->string('title');
            $table->integer('total_openings');
            $table->integer('salary');
            $table->integer('experience');
            $table->string('category');
            $table->string('position');
            $table->string('level');
            $table->string('type');
            $table->string('education');
            $table->string('location');
            $table->text('description');
            $table->text('specification');
            $table->timestamp('published_at');
            $table->timestamp('expiry_at');
            $table->string('apply_description');
            $table->string('apply_email');
            $table->string('apply_website');

            $table->timestamps();


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
        Schema::drop('jaagirs');
    }
}
