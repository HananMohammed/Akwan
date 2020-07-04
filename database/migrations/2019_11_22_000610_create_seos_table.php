<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('meta');
            $table->string('title_en');
            $table->string('title_ar');
            $table->string('script_head');
            $table->string('script_footer');
            $table->string('description_en');
            $table->string('description_ar');
            $table->string('keyword_en');
            $table->string('keyword_ar');

            

            $table->string('created_by');

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
        Schema::dropIfExists('seos');
    }
}
