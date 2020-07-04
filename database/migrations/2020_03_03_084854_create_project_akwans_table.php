<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectAkwansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_akwans', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('proj_name_en');
            $table->string('proj_name_ar');
            $table->text('images');
            $table->text('link');
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
        Schema::dropIfExists('project_akwans');
    }
}
