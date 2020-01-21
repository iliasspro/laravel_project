<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterVoituresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('voitures', function (Blueprint $table) {
            $table->unsignedBigInteger('user_Id');
            $table->foreign('user_Id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('voitures', function (Blueprint $table) {
            $table->dropForeign('user_Id');
            $table->dropColumn('user_Id');
        }); 
    }
}
