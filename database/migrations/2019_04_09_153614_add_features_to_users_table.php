<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFeaturesToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string("type")->default('física');
            $table->date("birthday")->nullable();
            $table->string("state_registration_indicator")->nullable(); // Indicador de Inscrição estadual
            $table->string("social_reason")->nullable();            
            $table->string("state_registration")->nullable();
            $table->string("city_registration")->nullable();
            $table->string("rg")->nullable();
            $table->string("stranger_identity")->nullable();
            $table->string("home_phone")->nullable();
            $table->string('comercial_phone')->nullable();
            $table->string('description', 600)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn("type")->default('física');
            $table->dropColumn("birthday");
            $table->dropColumn("state_registration_indicator"); // Indicador de Inscrição estadual
            $table->dropColumn("social_reason");            
            $table->dropColumn("state_registration");
            $table->dropColumn("city_registration");
            $table->dropColumn("rg");
            $table->dropColumn("stranger_identity");
            $table->dropColumn("home_phone");
            $table->dropColumn('comercial_phone');
            $table->dropColumn('description');
        });
    }
}
