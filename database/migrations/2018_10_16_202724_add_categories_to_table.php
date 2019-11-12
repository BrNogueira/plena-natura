<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Category;

class AddCategoriesToTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        $category = new Category;
        $category->name = 'Marcas';
        $category->color = 'marcas';
        $category->icon = 'fa fa-flag';
        $category->slug = 'marcas';
        $category->img  = 'images/marcas.jpg';
        $category->save();

        $category = new Category;
        $category->name = 'Saúde';
        $category->color = 'saude';
        $category->icon = 'fa fa-heartbeat';
        $category->slug = 'saude';
        $category->img  = 'images/marcas.jpg';
        $category->save();

        $category = new Category;
        $category->name = 'Cabelos';
        $category->color = 'cabelos';
        $category->icon = 'fa fa-diamond';
        $category->slug = 'cabelos';
        $category->img  = 'images/marcas.jpg';
        $category->save();

        $category = new Category;
        $category->name = 'Rosto';
        $category->color = 'rosto';
        $category->icon = 'fa fa-smile-o';
        $category->slug = 'rosto';
        $category->img  = 'images/marcas.jpg';
        $category->save();

        $category = new Category;
        $category->name = 'Corpo';
        $category->color = 'corpo';
        $category->icon = 'fa fa-female';
        $category->slug = 'corpo';
        $category->img  = 'images/marcas.jpg';
        $category->save();

        $category = new Category;
        $category->name = 'Mãos';
        $category->color = 'maos';
        $category->icon = 'fa fa-sign-language';
        $category->slug = 'maos';
        $category->img  = 'images/marcas.jpg';
        $category->save();

        $category = new Category;
        $category->name = 'Orgânicos';
        $category->color = 'organicos';
        $category->icon = 'fa fa-leaf';
        $category->slug = 'organicos';
        $category->img  = 'images/marcas.jpg';
        $category->save();

        $category = new Category;
        $category->name = 'Matérias-Primas';
        $category->color = 'materias-primas';
        $category->icon = 'fa fa-flask';
        $category->slug = 'materias-primas';
        $category->img  = 'images/marcas.jpg';
        $category->save();

        $category = new Category;
        $category->name = 'Casa';
        $category->color = 'casa';
        $category->icon = 'fa fa-home';
        $category->slug = 'casa';
        $category->img  = 'images/marcas.jpg';
        $category->save();

        $category = new Category;
        $category->name = 'Veganos';
        $category->color = 'veganos';
        $category->icon = 'fa fa-pagelines';
        $category->slug = 'veganos';
        $category->img  = 'images/marcas.jpg';
        $category->save();


        $category = new Category;
        $category->name = 'Pet';
        $category->color = 'pet';
        $category->icon = 'fa fa-paw';
        $category->slug = 'pet';
        $category->img  = 'images/marcas.jpg';
        $category->save();

        $category = new Category;
        $category->name = 'Ofertas';
        $category->color = 'ofertas';
        $category->icon = 'fa fa-tags';
        $category->slug = 'ofertas';
        $category->img  = 'images/marcas.jpg';
        $category->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
