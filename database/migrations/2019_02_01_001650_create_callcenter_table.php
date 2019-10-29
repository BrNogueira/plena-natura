<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCallcenterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('callcenter', function (Blueprint $table) {
            $table->increments('id');
            $table->text('sobre');
            $table->text('frete');
            $table->text('trocas');
            $table->text('privacidade');
            $table->text('expressa');
            $table->text('premium');
            $table->text('descontos');
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
        Schema::dropIfExists('callcenter');
    }
}
