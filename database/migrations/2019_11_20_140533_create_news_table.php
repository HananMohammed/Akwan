<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title_en');
            $table->string('title_ar');
            $table->text('news_en');
            $table->text('news_ar');
            $table->text('images');
            $table->string('alt');
            $table->string('slug_en');
            $table->string('slug_ar');
            $table->bigInteger('created_by');
            $table->string('seo_title_en');
            $table->string('seo_title_ar');
            $table->string('seo_description_en');
            $table->string('seo_description_ar');
            $table->string('keyword_en');
            $table->string('keyword_ar');
            $table->string('script_head');
            $table->string('script_footer');




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
        Schema::dropIfExists('news');
    }
}
