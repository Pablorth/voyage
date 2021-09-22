<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTalentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talent', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->mediumText('description');
            $table->mediumText('effect');
            $table->integer('cost');
            $table->string('standard');
            $table->integer('category_id')->unsigned()->index();
            $table->foreign('category_id')->references('id')->on('talent_categories');
            $table->timestamps();

        });

        Schema::create('character_talent', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('character_id')->unsigned()->index();
            $table->foreign('character_id')->references('id')->on('characters')->onDelete('cascade');
            $table->integer('talent_id')->unsigned()->index();
            $table->foreign('talent_id')->references('id')->on('talents')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('talent');
    }
}
