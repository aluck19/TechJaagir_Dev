<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appliers', function (Blueprint $table) {
            $table->increments('id');

            //declare foreign key
            $table->integer('jaagir_id')->unsigned(); //unsigned, refers the user_id to be positive

            $table->string('name');
            $table->string('address');
            $table->string('email');
            $table->string('phone');
            $table->text('message');
            $table->string('resume_link');
            $table->timestamps();


            //set foreign key
            $table  ->foreign('jaagir_id')
                ->references('id')
                ->on('jaagirs')
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
        Schema::drop('appliers');
    }
}
