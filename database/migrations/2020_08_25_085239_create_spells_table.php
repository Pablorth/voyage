<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpellsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spells', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->mediumText('effect')->nullable();
            $table->integer('cost')->nullable();
            $table->integer('domain_id')->nullable();
            $table->foreign('domain_id')->references('id')->on('domains');
            $table->integer('powerskill_id')->nullable();
            $table->foreign('powerskill_id')->references('id')->on('powerskills');
            $table->integer('duration')->nullable();
            $table->string('damage')->nullable();

            $table->integer('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });

        Schema::create('character_spell', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('character_id')->unsigned()->index();
            $table->foreign('character_id')->references('id')->on('characters')->onDelete('cascade');
            $table->integer('spell_id')->unsigned()->index();
            $table->foreign('spell_id')->references('id')->on('spells')->onDelete('cascade');
            $table->integer('level')->nullable();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spells');
    }
}
