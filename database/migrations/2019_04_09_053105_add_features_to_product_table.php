<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFeaturesToProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('sku')->after('name');
            $table->string('gtin')->after('sku');
            $table->string('ncm')->after('gtin');
            $table->float('real_price', 8, 2)->after('price');
            $table->float('promotion_price', 8, 2)->after('real_price');
            $table->float('gross_weight', 8, 2)->after('weight');
            $table->float('width', 8, 2)->after('gross_weight');
            $table->float('heigth', 8, 2)->after('width');
            $table->float('length', 8, 2)->after('heigth');
            $table->string('unity', 10)->after('length');
            $table->integer('stock')->after('unity');
            $table->string('description', 3000)->after('unity');
            $table->string('condition', 20)->after('stock');
            $table->boolean('active')->default(1);
            $table->date('expires_at')->after('active')->nullable();
            $table->integer('brand_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
          $table->dropColumn('sku');
          $table->dropColumn('gtin');
          $table->dropColumn('ncm');
          $table->dropColumn('real_price');
          $table->dropColumn('promotion_price');
          $table->dropColumn('gross_weight');
          $table->dropColumn('description');
          $table->dropColumn('expires_at');
          $table->dropColumn('condition');
          $table->dropColumn('width');
          $table->dropColumn('heigth');
          $table->dropColumn('length');
          $table->dropColumn('unity');
          $table->dropColumn('stock');
          $table->dropColumn('active');
          $table->dropColumn('brand_id');
        });
    }
}
