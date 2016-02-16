<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBudget extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wydatki', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('confirmed')->default(false);
            $table->dateTime('dokiedy')->default('NOW()');
            $table->string('tag')->default("");
            $table->float('kwota', 2)->default(0);
            $table->string('zaco')->default('brak');
            $table->float('styczen', 2)->default(0);
            $table->float('luty', 2)->default(0);
            $table->float('marzec', 2)->default(0);
            $table->float('kwiecien', 2)->default(0);
            $table->float('maj', 2)->default(0);
            $table->float('czerwiec', 2)->default(0);
            $table->float('lipiec', 2)->default(0);
            $table->float('sierpien', 2)->default(0);
            $table->float('wrzesien', 2)->default(0);
            $table->float('pazdziernik', 2)->default(0);
            $table->float('listopad', 2)->default(0);
            $table->float('grudzien', 2)->default(0);
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
        Schema::drop('wydatki');
    }
}
