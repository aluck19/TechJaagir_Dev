<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');

            //declare foreign key
            $table->integer('user_id')->unsigned(); //unsigned, refers the user_id to be positive

            $table->string('name');
            $table->string('address');
            $table->string('website');
            $table->string('phone');
            $table->integer('established_year');
            $table->integer('employee_count');
            $table->text('bio');
            $table->string('focus_area');
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
        Schema::drop('companies');
    }
}

