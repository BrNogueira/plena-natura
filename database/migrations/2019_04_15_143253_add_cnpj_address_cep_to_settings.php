<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCnpjAddressCepToSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('settings', function (Blueprint $table) {
        $table->string('cnpj')->after('name');
        $table->string('address')->after('cnpj');
        $table->string('cep')->after('address');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('settings', function (Blueprint $table) {
        $table->dropColumn('cnpj');
        $table->dropColumn('address');
        $table->dropColumn('cep');
      });
    }
}
