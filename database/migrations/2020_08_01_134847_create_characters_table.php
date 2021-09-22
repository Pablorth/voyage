<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('category_id');
            $table->integer('story_id');
            $table->integer('stat_id');
            $table->integer('magic_id');
            $table->integer('domain_id')->nullable();
            $table->foreign('domain_id')->references('id')->on('domains');
            $table->integer('powerskill_id')->nullable();
            $table->foreign('powerskill_id')->references('id')->on('powerskills');
            $table->integer('inventory_id');
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
        Schema::dropIfExists('characters');
    }
}
