<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cases extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('cases', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('group')->unsigned();
            $table->foreign('group')->references('id')->on('case_groups');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cases', function( $table ){
            $table->dropForeign('cases_group_foreign');
            $table->drop();
        });
    }
}
