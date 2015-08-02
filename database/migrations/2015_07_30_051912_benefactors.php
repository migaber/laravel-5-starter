<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Benefactors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('benefactors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('address');
            $table->string('telephone');
            $table->integer('group')->unsigned();
            $table->foreign('group')->references('id')->on('benefactor_groups');
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
        Schema::table('benefactors', function( $table){
            $table->dropForeign('benefactors_group_foreign');
            $table->drop();
        });
    }
}
