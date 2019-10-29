<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Social_media;

class CreateSocialMediasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_medias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 25);
            $table->string('link', 100);
            $table->boolean('active')->default(1);
            $table->timestamps();
        });

        $social = new Social_media;
        $social->name = 'facebook';
        $social->link = 'https://www.facebook.com/plenanatura/';
        $social->save();

        $social = new Social_media;
        $social->name = 'twitter';
        $social->link = 'https://twitter.com';
        $social->save();

        $social = new Social_media;
        $social->name = 'blog';
        $social->link = 'https://wordpress.com';
        $social->save();
        
        $social = new Social_media;
        $social->name = 'instagram';
        $social->link = 'https://instagram.com';
        $social->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('social_medias');
    }
}
