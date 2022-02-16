<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddValueToCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Comments', function (Blueprint $table) {
            $table->string('pseudo')->after('id');
            $table->string('Contents');

            $table->unsignedBigInteger('post_id');
            $table->foreign('post_id')->references('id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Comments', function (Blueprint $table) {
            //
        });
    }
}
