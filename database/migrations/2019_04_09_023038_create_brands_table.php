<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name");
            $table->string("type")->nullable();;
            $table->string("cpf_cnpj")->nullable();;
            $table->string("state_registration_indicator")->nullable(); // Indicador de Inscrição estadual
            $table->string("social_reason")->nullable();
            $table->date("birthday")->nullable();;
            $table->string("state_registration")->nullable();
            $table->string("city_registration")->nullable();
            $table->string("rg")->nullable();
            $table->string("stranger_identity")->nullable();
            $table->string('street', 200)->nullable();
            $table->integer('number')->nullable();
            $table->string('district', 50)->nullable();
            $table->string('city', 50)->nullable();
            $table->string('state', 13)->nullable();
            $table->string('cep', 20)->nullable();
            $table->string('complements', 100)->nullable();
            $table->string('phone', 30)->nullable();
            $table->string('email')->nullable();
            $table->string("home_phone")->nullable();
            $table->string('comercial_phone')->nullable();
            $table->string('description', 600)->nullable();
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
        Schema::dropIfExists('brands');
    }
}
