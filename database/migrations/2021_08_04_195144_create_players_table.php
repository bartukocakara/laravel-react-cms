<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id");
            $table->string("positions")->comment("PG|SG|SF|PF|C");
            $table->string('favourite_players')->comment("1,3,2,8,9,12");
            $table->string('favourite_courts')->comment("25,99,12,23");
            $table->string('favourite_teams')->comment("25,99,12,23");
            $table->string('favourite_trainers')->comment("25,120,12,23");
            $table->json("settings");
            $table->string("prize_earnings");
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
        Schema::dropIfExists('players');
    }
}
