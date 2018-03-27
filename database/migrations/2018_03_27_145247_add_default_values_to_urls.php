<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDefaultValuesToUrls extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('urls', function (Blueprint $table) {
            //
            $table->string('nicename')->default( '' )->change();
            $table->smallInteger('draft')->default( 0 )->change();
            $table->smallInteger('published')->default( 0 )->change();
            $table->integer('clicks')->default( 0 )->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('urls', function (Blueprint $table) {
            //
            $table->string('nicename')->change();
            $table->smallInteger('draft')->change();
            $table->smallInteger('published')->change();
            $table->integer('clicks')->change();
        });
    }
}
