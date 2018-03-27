<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUniqueFieldsForUrls extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('urls', function (Blueprint $table) {
          
            $table->unique([ 'targeturl', 'user_id' ], 'target_unique');
            $table->unique([ 'shorturl', 'user_id' ], 'short_unique');
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
          $table->dropUnique( 'urls_target_unique' );
          $table->dropUnique( 'urls_short_unique'  );
        });
    }
}
