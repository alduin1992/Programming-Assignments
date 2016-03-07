<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('users',function(Blueprint $table)
            {
                $table->increments('id');
                $table->string('from_id');
                $table->integer('to_id');
                $table->string('book_id');
                $table->integer('status');
                $table->timestamps();
            }
            );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
