<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddValueToPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Posts', function (Blueprint $table) {
            $table->string('Contents');
            $table->string('Title');
            $table->string('image');

            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id');

            $table->unsignedBigInteger('author_id');
            $table->foreign('author_id')->references('id');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Posts', function (Blueprint $table) {
            //
        });
    }
}
