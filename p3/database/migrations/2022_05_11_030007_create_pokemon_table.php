<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokemon', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            // $table->array('abilities');
            $table->smallInteger('base_experience');
            $table->smallInteger('height');
            $table->string('name');
            // $table->array('moves');
            $table->string('species');
            // $table->array('sprites');
            // $table->array('types');
            $table->smallInteger('weight');

            // +"abilities": array:2 [▶]
            // +"base_experience": 64
            // +"forms": array:1 [▶]
            // +"game_indices": array:20 [▶]
            // +"height": 7
            // +"held_items": []
            // +"id": 1
            // +"is_default": true
            // +"location_area_encounters": "https://pokeapi.co/api/v2/pokemon/1/encounters"
            // +"moves": array:83 [▶]
            // +"name": "bulbasaur"
            // +"order": 1
            // +"past_types": []
            // +"species": {#3335 ▶}
            // +"sprites": {#3336 ▶}
            // +"stats": array:6 [▶]
            // +"types": array:2 [▶]
            // +"weight": 69
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pokemon');
    }
};
