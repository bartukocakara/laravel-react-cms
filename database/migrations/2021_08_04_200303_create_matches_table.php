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
            $table->string("players");
            $table->string("teams");
            $table->string("court");
            $table->integer("rating_id");
            $table->enum("match_category", ["STANDARD", "TOURNAMENT", "ALL_STAR"]);
            $table->json("player_request_statuses")->comment('["user_id" => "1", "status = 0"], ...');
            $table->json("team_request_statuses")->comment('["team_id" => "1", "status = 0"], ...');
            $table->enum("status", ["PENDING", "READY", "FAILED", "STARTED", "ENDED"]);
            $table->enum("allow_video", [0, 1]);
            $table->json("settings");
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
