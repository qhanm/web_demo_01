<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTranslation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_translation', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id')->nullable(false);
            $table->integer('language_id')->nullable(false);

            $table->string('name', 150);
            $table->string('description', 300);
            $table->string('content', 500);

            // SEO
            $table->string('seo_title', 150);
            $table->string('seo_alias', 150);
            $table->string('seo_keyword', 150);
            $table->string('seo_description', 200);

            $table->foreign('product_id')->references('id')->on('product')->ondDelete('cascade');
            $table->foreign('language_id')->references('id')->on('language')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_translation');
    }
}
