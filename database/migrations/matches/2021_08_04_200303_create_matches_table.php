<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->string("players")->comment("user_id list will feed this field = [1,3,4,5,6,7]");
            $table->string("teams")->comment("team_id list will feed this field = [23,56]");
            $table->string("referees")->comment("referee_id list will feed this field = [23,56]");
            $table->integer("court_id");
            $table->integer("rating_id");
            $table->enum("match_category", ["STANDARD", "TOURNAMENT", "ALL_STAR", "TRAINING"]);
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
        Schema::dropIfExists('matches');
    }
}
