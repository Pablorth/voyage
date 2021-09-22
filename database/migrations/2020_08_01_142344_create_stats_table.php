<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stats', function (Blueprint $table) {
            $table->id();
            $table->integer('body');
            $table->integer('ability');
            $table->integer('perception');
            $table->integer('spirit');
            $table->integer('power');
            $table->integer('charisma');
            $table->integer('life_point');
            $table->integer('mana_point');
            $table->integer('reaction_speed');
            $table->integer('damage_bonus');
            $table->integer('social_bonus');
            $table->integer('injury_level');
            $table->integer('perk_point');
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
        Schema::dropIfExists('stats');
    }
}
